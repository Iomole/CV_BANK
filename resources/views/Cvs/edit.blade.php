<x-layout>
    @section('title'){{'Add CV'}}@endsection
        
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="create-page-header">
            <div class="create-page-header-row">
                <div class="create-page-header-title">
                    <h3 class="create-page-header-type">
                        <a href="contacts.html">CVs</a>
                        <span class="fas fa-angle-right">
                        </span>
                         Edit: {{$cv->name}} cv
                    </h3>
                </div>
                <button  form="createCv-form" type="submit" class="btn btn-purple1 btn-sm" name="submit" value="submit" >Update Cv </button>
                
                <a href="{{url('/')}}" class="btn btn-secondary btn-sm">
                    Cancel
                </a>
            </div>
        </div>
        <div class="create-page-body">
            <div class="create-page-body-container">
                <form id="createCv-form" method="POST" action="/{{$cv->id}}" class="customer-details-form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="overview-input-container">
                        <div class="input-name-container">
                            <label for="Name">Name of Candidate <span>*</span></label>
                            <input type="text" name="name" value="{{$cv->name}}">
                            <div class="name-field-ctn">
                                            
                            </div>
                                        @error('name',)
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        
                        </div>
    
                        <!-- The account input is suppossed to be able to fetch data from the accounts -->
                        <div class="input-name-container">
                            <label for="focus">Focus <span>*</span></label>
                            <input type="text" name="focus" value="{{$cv->focus}}">
                            @error('focus')
                                <small class="text-danger">{{$message}}</small>
                             @enderror
                        </div>
                        
                        <div class="email-input-container">
                            <label for="years">Years of Experience</label>
                            <input type="text" name="years" value="{{$cv->years}}">
                        </div>
    
                        <div class="email-input-container">
                            <label for="status">Status</label>
                            <select name="status" id="" value="{{$cv->status}}">
                                <option value="N/A">N/A</option>
                                <option value="Engaged">Engaged</option>
                                <option value="Resigned">Resigned</option>
                            </select>
                        </div>
    
                        <div class="email-input-container">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$cv->email}}">
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                             @enderror
                        </div>
    
                        <div class="email-input-container">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{$cv->phone}}">
                        </div>
                        </div>
    
                        
                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Attach File
                        </label>
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="file"
                        />
                        <div class="website-input-container">
                            <label for="website-link"><a href="{{$cv->file ? 'storage/'.$cv->file : 'No document'}}">{{$cv->file}}</a></label>
                            <div>
                                
                            </div>
                        </div>

                        @error('file')
                                <small class="text-danger">{{$message}}</small>
                             @enderror
                    </div>
    
    
                </form>
                
            </div>
        </div>
        
    
    </div>
    <!-- /.container-fluid -->
    
    </div>
    <!-- End of Main Content -->
    </x-layout>
    