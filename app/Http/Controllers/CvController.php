<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cvbanks;
use Illuminate\Http\Request;
use App\Notifications\emailNotification;

class CvController extends Controller
{
    //Show all CVs
    public function index() {
        return view('Cvs.index', [
            'heading' => ' CV List',
            'cv_list' => Cvbanks::latest()->filter(request(['search']))->simplePaginate(5)
    
        ]);

    }

    // Show single CV
    public function show(Cvbanks $cv){

        return view('Cvs.show', [
            'list' => $cv
        ]);

    }

    // show create form 
    public function create(){
        return view('Cvs.create');

    }


    // show store form 
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'focus'=> 'required',
        ]);
        if($request->hasFile('file')){
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }
        Cvbanks::create($formFields);


         // Send email notification for CV added

         $Nusers = User::where('role', 'admin')->get();

         foreach($Nusers as $user2){
                 $messages['hi'] = 'Attention!';
                 $messages['wish'] = 'A new CV has been added to this app';
                 $user2->notify(new emailNotification($messages));
         }


        return redirect('/')->with('message', 'CV added successfully!');

    }


    // update form 
    public function update(Request $request, Cvbanks $cv){
        $formFields = $request->validate([
            'name' => 'required',
            'focus'=> 'required',
        ]);
        if($request->hasFile('file')){
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }
        $cv->update($formFields);


         // Send email notification for CV update

         $Nusers = User::where('role', 'admin')->get();

         foreach($Nusers as $user2){
                 $messages['hi'] = 'Attention!';
                 $messages['wish'] = 'An existing CV has been updated!';
                 $user2->notify(new emailNotification($messages));
         }


        return back()->with('message', 'CV updated successfully!');

    }



    // showedit form

    public function edit(Cvbanks $cv){

        return view('cvs.edit', ['cv'=> $cv]);


    }


    // delete cv

    public function destroy(Cvbanks $cv){
        $cv->delete();
        return redirect('/')->with('message', 'Cv deleted successfully!');


    }

    
}
