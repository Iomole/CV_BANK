@extends('layout')

@section('content')
@section('title'){{'CVs'}}@endsection



<h1>Techware CV Bank</h1>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="page-header">
        <div class="page-header-row">
            <div class="page-header-title">
                <h3 class="page-header-type">
                    {{$heading}}
                </h3>
            </div>
            <div class="page-header-create-button">
                <button class="page-header-btn-type">
                    <a href="{{url('/accounts/add-account')}}">
                        <span class="fas fa-plus"></span> 
                        <span>Add CV</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="search-container">
        <div class="search-row">
            <div class="input-group-search">
                <div class="input-group-btn-left-dropdown">
                    <button type="button" title="filter">
                        <span>All</span>
                        <span class="caret"></span>
                    </button>
                </div>    
                <input type="text" autocomplete="username">
                <div class="input-group-btn-right-search">
                    <button type="button" data-action="search" title="search">
                        <span class="fas fa-search"></span>
                    </button>
                </div>
                <div class="input-group-btn-right-dropdown">
                    <button type="button" data-toggle="dropdown" title="dropdown-menu">
                        <span class="fas fa-ellipsis-v"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="list-container-table">  
            <table class="account-list-table">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>FOCUS</th>
                        <th>EXPERIENCE</th>
                        <th>STATUS</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>FILE</th>
                    </tr>
                </thead>

                <tbody>
                    @unless(count($cv_list) == 0)


                    @foreach($cv_list as $list)

                    <tr>
                        <td><a href="/cv_bank/{{$list['id']}}">{{$list['name']}} </a></td>
                        <td>{{$list['focus']}}</td>
                        <td style="text-align:center;">{{$list['years']}}</td>
                        <td>{{$list['status']}}</td>
                        <td>{{$list['phone']}}</td>

                        <td><a href="mailto:{{$list->email}}">{{$list->email}}</a></td>
                        <td>{{$list['status']}}</td>
                            
                    </tr>
                        @endforeach
                    @else
                        <p>There is no record in the database!</p>
                    @endunless


                    

                </tbody>
            </table>
            <div>
                <span>
                    <a href="#">show more</a> 
                </span>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection

