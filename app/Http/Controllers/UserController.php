<?php

namespace App\Http\Controllers;

use Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Notifications\emailNotification;

class UserController extends Controller
{
    
    //Show all Users
    public function users() {
        return view('users.cvusers', [
            'heading' => ' User List',
            'user_list' => User::latest()->filter(request(['search']))->simplePaginate(5)
    
        ]);

    }

    // Show single user
    public function show(User $user){

        return view('users.show', [
            'list' => $user
        ]);

    }

    
    // show Register/create form
    public function create(){
            return view('users.register');
    }

    // store user

    public function store(Request $request){
        $formFields = $request->validate([
            'name' =>['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8',
            
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user 
        $user = User::create($formFields);
        //$users = User::where('role', '=', 'Admin')->select('email')->get();
        $users = User::all();


        // Send email notification

        $Nusers = User::where('role', 'admin')->get();

        foreach($Nusers as $user2){
                $messages['hi'] = 'Attention!';
                $messages['wish'] = 'A new user has been created for this APP';
                $user2->notify(new emailNotification($messages));
        }

        //login

        //auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
         

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'You have been logged out!');



    }
    //show login form 
    public function login(){
        return view('users.login');
    }

    // authenticate login form
    public function authenticate(Request $request){

        $formFields = $request->validate([

            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        }
        return back()->withErrors(['email'=>'Invalid credentilas!'])->onlyInput('email');
    
    }


}
