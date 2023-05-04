    <x-layout>



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="create-page-header">
        <div class="create-page-header-row">
            <div class="create-page-header-title">
                <h3 class="create-page-header-type">
                    <a href="users.html">User</a>
                    <span class="fas fa-angle-right"></span>
                    create
                </h3>
            </div>
            <div class="create-save-cancel-btn">
                <div class="create-save-cancel-btn-ctn">
                    <div class="save-btn-ctn">
                        <button  form="create_user" type="submit" class="btn btn-purple1 btn-sm" name="submit" value="submit" >Save </button>
                    </div>
                    <div class="cancel-btn-ctn">
                        <button  form="user-reg" type="submit" class="btn btn-gray btn-sm" name="submit" value="submit" >Cancel</button>                    </div>
                    <div class="dropdown-btn-ctn">
                        <button class="dropdown-btn">
                           <span class="fas fa-ellipsis-h"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="create-page-body">
        <div class="create-page-body-container">
            <form  method="POST" action="/users" id="create_user" class="customer-details-form">
                @csrf
                <div class="overview-input-container">
                    <div class="input-name-container">
                        <label for="Account namme">Name <span>*</span></label>
                        <input type="text" placeholder="" name="name" value="{{old('name')}}">
                        @error('name',)
                                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                            
                        </div>


                        

                                <div class="overview-input-container">
                                    <div class="input-name-container">
                                        <label for="Account namme">Email <span>*</span></label>
                                        <input type="email" placeholder="" name="email" value="{{old('email')}}">
                                        @error('email',)
                                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                            
                                        </div>
                                            
                                        <div class="overview-input-container">
                                            <div class="input-name-container">
                                                <label for="Account namme">Role <span>*</span></label>
                                                <select name="gender" id="" name="role" value="{{old('role')}}">
                                                    <option value="new">Not set</option>
                                                    <option value="assigned">Admin</option>
                                                    <option value="in-process">User</option>
                                                </select>
                                                @error('role',)
                                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            
                                                    
                                                </div>


                                                
                                                <div class="password-input-container">
                                                    <div class="password-input-ctn">
                                                        <label for="Password">Password</label>
                                                        <input type="password" name="password">
                                                        @error('password',)
                                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div>
                                                 </div><div class="password-input-ctn">
                                                    <label for="Password">Confirm Password</label>
                                                    <input type="password" name="password_confirmation">
                                                    @error('password_confirmation',)
                                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                               
                                                </div>    
                                                
                            
                                            </div>


                <div class="form-break">
                    <hr>
                </div>
                
                
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




    </x-layout>