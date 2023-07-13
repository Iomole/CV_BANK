<x-layout>
    @section('title'){{'User Profile'}}@endsection
    
    <
             <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="create-page-header">
            <div class="create-page-header-row">
                <div class="create-page-header-title">
                    <h5 class="create-page-header-type">
    
                        <a href="/">
                        <span class="fas fa-angle-left"></span>
                        {{"Back"}}</a>
                    </h5>
    
                    <h3 class="create-page-header-type">
    
                        <a href="leads.html">{{$list->name}}</a>
                        <span class="fas fa-angle-right"></span>
                        {{$list->role}}
                    </h3>
                </div>
    
                
            </div>
        </div>
        <div class="create-page-body">
            <div class="create-page-body-container">
                <form class="customer-details-form" action="" method="POST">
                    @csrf
                    <div class="form-heading-name">
                        
                        <h5>Profile</h5>
                            @csrf
                            
                    </div>
                    <div class="overview-input-container">
                        <div class="input-name-container">
                            <label for="Name">Name of User</label>
                            <div class="name-field-ctn">
                                <div class="name-field-select-ctn">
                                
                                    <div><p>{{$list->name}}</p></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="website-input-container">
                            <label for="website-link">Role</label>
                            <div>
                                <p>{{$list->role}}</p>
                            </div>
                        </div>
    
                        <div class="website-input-container">
                            <label for="email">Email</label>
                            <div>
                                <p>{{$list->email}}</p>
                            </div>
                        </div>
    
                        

                        
                    </div>
                   
                    <a href="/{{$list->id}}/edit" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <form method="POST" action="/{{$list->id}}">
                        @csrf
                        @method('DELETE')
                        
                        <button class="btn btn-danger btn-sm" >Delete</button>
                
                    </form>
        
                    
                </form>
    
                       </div>
        </div>
    
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    
    </x-layout>
    