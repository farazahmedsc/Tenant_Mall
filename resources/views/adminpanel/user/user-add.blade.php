@extends('layout.main')
@push('title')
Add User
@endpush

@push('css-link')
<!-- Plugins css -->
<link href="{{ url('/') }}/adminpanel/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/adminpanel/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/adminpanel/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('js-link')
<!-- plugin js -->
<script src="{{ url('/') }}/adminpanel/libs/dropzone/min/dropzone.min.js"></script>
<script src="{{ url('/') }}/adminpanel/libs/select2/js/select2.min.js"></script>
<script src="{{ url('/') }}/adminpanel/libs/flatpickr/flatpickr.min.js"></script>

<!-- Init js-->
<script src="{{ url('/') }}/adminpanel/js/pages/create-project.init.js"></script>
@endpush

@section('main-section')

<!-- Start Content-->
<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        
                    </ol>
                </div>
                <h4 class="page-title">{{$label}}</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h5 class="form-section mb-3 font-24">{{$label}}</h5>
                <form action="{{$url}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>First Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="first_name" class="form-control form-control-solid" value="{{$user->first_name}}" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Last Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="last_name" class="form-control form-control-solid" value="{{$user->last_name}}"  required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                                <label>Phone/Mobile <sup class="text-danger">*</sup></label>
                                <input type="text" name="phone_number" class="form-control form-control-solid" value="{{$user->phone_number}}"  required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control form-control-solid"  value="{{$user->username}}" >
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Email <sup class="text-danger">*</sup></label>
                                <input type="email" name="email" class="form-control form-control-solid" value="{{$user->email}}" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Password <sup class="text-danger">*</sup></label>
                                    <input type="text" name="password" id="drvrPass" class="form-control form-control-solid"  value="{{$user->password}}" aria-describedby="basic-addon2" minlength="6" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>User Type <sup class="text-danger">*</sup></label>
                                <select name="type" class="form-control form-select form-select-solid" onchange="showPaymentFields(this);" required>
                                    <option value="">Select your user type...</option>
                                    <option value="Admin" {{($user->type == 'Admin')? 'Selected' : '';}}>Admin</option>
                                    <option value="Cash Manager" {{($user->type == 'Cash Manager')? 'Selected' : '';}}>Cash Manager</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label class="form-label">Photo of User</label>
                                <input type="file" name="photo" class="form-control">                                 
                            </div>
                            <div class="form-group col-md-6 mb-3 {{(!is_null($user->is_active)) ? '' : 'd-none';}}">
                                <label>Status</label>
                                <select name="is_active" class="form-control form-select form-select-solid" >                                        
                                    <option value="1" {{($user->is_active == 1)? 'Selected' : '';}}>Active</option>
                                    <option value="0" {{($user->is_active == 0)? 'Selected' : '';}}>Inactive</option>
                                </select>                                   
                            </div>
                        </div>


                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Submit</button>
                            <button type="reset" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                        </div>
                    </div>
                </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    
</div> <!-- container -->



@endsection