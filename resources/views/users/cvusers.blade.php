<x-layout>
    @section('title'){{'Users'}}@endsection
    
    
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
                        <a href="{{url('/register')}}">
                            <span class="fas fa-plus"></span> 
                            <span>Add User</span>
                        </a>
                    </button>
                </div>
    
                <form action="{{route('cvs.download-excel')}}" method="POST" target="__blank">
                    @csrf
               <!-- <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit" > Export Excel </button>-->
                </form>
            </div>
        </div>
       <!-- <div class="search-container">
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
        </div>-->
    
        
    
    
                        
        <!--search-->
        @include('partials._search')
    
        <div class="list-container">
            <div class="list-container-table">  
    
                
    
                <table class="account-list-table">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>ROLE</th>
                            <th>EMAIL</th>
                            <th>CREATED</th>
                            <th>UPDATED</th>
                            
                        </tr>
                    </thead>
    
                    <tbody>
                        @unless(count($user_list) == 0)
    
                        
       
                    @foreach($user_list as $list)
    
                        <tr>
                            <td><a href="/{{$list->id}}">{{$list->name}} </a></td>
                            <td style="text-align:center;">{{$list['role']}}</td>
                            <td><a href="mailto:{{$list->email}}">{{$list->email}}</a></td>
                            <td style="text-align:center;">{{$list['created_at']}}</td>
                            <td style="text-align:center;">{{$list['updated_at']}}</td>
                                 
                        </tr>
                     @endforeach
                        @else
                            <p>There is no user in the database!</p>
                        @endunless
    
                    </tbody>
                </table>
                <div class="mt-6 p-4">
                    {{$user_list->links()}}
                </div>
                <div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
    </div>
    
    <!-- End of Main Content -->
    
    </x-layout>
    
    
    