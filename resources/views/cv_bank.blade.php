<h1>Techware CV Bank</h1>
<br>
<h2> {{$heading;}}</h2>
@unless(count($cv_list) == 0)


    @foreach($cv_list as $list)
         <h4><a href="/cv_bank/{{$list['id']}}">{{$list['name']}} </a></h4>
        <p><h4>{{$list['focus']}} </h4></p>
        <p><h4>{{$list['years']}}</h4></p>
        <p><h4>{{$list['status']}}</h4></p>
        <p><h4>{{$list['phone']}} </h4></p>
        <p><h4>{{$list['email']}}   </h4></p>
    @endforeach
@else
    <p>There is no record in the database!</p>
@endunless
