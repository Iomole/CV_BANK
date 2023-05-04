<x-layout>
@section('title'){{'CV Profile'}}@endsection

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
                    {{$list->focus}}
                </h3>
            </div>

            
        </div>
    </div>
    <div class="create-page-body">
        <div class="create-page-body-container">
            <form class="customer-details-form" action="" method="POST">
                @csrf
                <div class="form-heading-name">
                    
                    <h5>Overview</h5>
                        @csrf
                        
                </div>
                <div class="overview-input-container">
                    <div class="input-name-container">
                        <label for="Name">Name of Candidate</label>
                        <div class="name-field-ctn">
                            <div class="name-field-select-ctn">
                            
                                <div><p>{{$list->name}}</p></div>
                            </div>
                        </div>
                    </div>

                    <div class="website-input-container">
                        <label for="website-link">Focus</label>
                        <div>
                            <p>{{$list->focus}}</p>
                        </div>
                    </div>

                    <div class="website-input-container">
                        <label for="website-link">Years of Experience</label>
                        <div>
                            <p>{{$list->years}}</p>
                        </div>
                    </div>

                    <div class="website-input-container">
                        <label for="website-link">Status</label>
                        <div>
                            <p>{{$list->status}}</p>
                        </div>
                    </div>

                    <div class="website-input-container">
                        <label for="website-link">Phone</label>
                        <div>
                            <p>{{$list->phone}}</p>
                        </div>
                    </div>

                    <div class="email-input-container">
                        <label for="email">Email</label>
                        <div>
                            <p><a href="mailto:{{$list->email}}">{{$list->email}}</a></p>
                        </div>
                    </div>

                    <div class="website-input-container">
                        <label for="website-link"><a href="{{$list->file ? 'storage/'.$list->file : 'No document'}}">{{$list->file}}</a></label>
                        <div>
                            <p>coming soon</p>
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
