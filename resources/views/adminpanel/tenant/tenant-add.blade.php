@extends('layout.main')
@push('title')
{{$label}}
@endpush

@push('css-link')
<!-- Plugins css -->
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('js-link')
<!-- plugin js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- Init js-->
<script src="assets/js/pages/create-project.init.js"></script>
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
                                <input type="text" name="first_name" class="form-control form-control-solid" value="{{$tenant->first_name}}" required>
                                <span class="text-danger">
                                    @error('first_name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Last Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="last_name" class="form-control form-control-solid" value="{{$tenant->last_name}}" required>
                                <span class="text-danger">
                                    @error('last_name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Phone/Mobile <sup class="text-danger">*</sup></label>
                                <input type="text" name="phone_number" class="form-control form-control-solid" value="{{$tenant->phone_number}}" required>
                                <span class="text-danger">
                                    @error('phone_number')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Business Name</label>
                                <input type="text" name="business_name" class="form-control form-control-solid" value="{{$tenant->business_name}}">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control form-control-solid" value="{{$tenant->email}}">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Area Alloted</label>
                                <select name="area_alloted" class="form-control form-select form-select-solid" >
                                    <option value="">Select</option>
                                    @foreach ($areas as $area)
                                        {{-- @if(!in_array($area->a_id, $occupied_area)) --}}
                                           
                                      
                                        <option value="{{$area->id}}" {{($tenant->area_alloted == $area->id && str_contains($label, 'Update'))? "Selected" : "" ;}}>{{$area->name}}</option>
                                        {{-- @endif --}}
                                    @endforeach
                                  
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Acquiring Date</label>
                                <input type="date" name="acquiring_date" value="{{$tenant->acquiring_date}}" class="form-control form-control-solid">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Monthly Rent Amount <sup class="text-danger">*</sup></label>
                                <input type="number" name="rent" value="{{$tenant->rent}}" class="form-control form-control-solid">
                                <span class="text-danger">
                                    @error('rent')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label>Maintenance Amount <sup class="text-danger">*</sup></label>
                                <input type="number" name="maintenance" value="{{$tenant->maintenance}}" class="form-control form-control-solid" required>
                                <span class="text-danger">
                                    @error('maintenance')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>


                        

                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Photo of Tenant</label>
                                <input type="file" name="photo" class="form-control">                                 
                            </div>

                            <div class="form-group col-md-6 mb-3 {{(!is_null($tenant->is_active)) ? '' : 'd-none';}}">
                                <label>Status</label>
                                <select name="is_active" class="form-control form-select form-select-solid" >                                        
                                    <option value="1" {{($tenant->is_active == 1)? 'Selected' : '';}}>Active</option>
                                    <option value="0" {{($tenant->is_active == 0)? 'Selected' : '';}}>Inactive</option>
                                </select>                                   
                            </div>

                       
                        </div>
                            <hr>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Upload Driver License/ID Card</label>
                                <input type="file" name="license" class="form-control">                                 
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label>Upload business Registration Document</label>
                                <input type="file" name="registration" class="form-control">                                 
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label>Upload Insurance</label>
                                <input type="file" name="insurance" class="form-control">                                 
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label>Upload The Lease</label>
                                <input type="file" name="lease" class="form-control">                                 
                            </div>

                        </div>

                        @if ($label == "Update Tenant" )

                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <b>Driver License/ID Card: </b> <a href="{{url('/')}}/uploads/tenant/{{$tenant->license}}" target="_blank">{{str_replace($tenant->first_name."_", "",$tenant->license)}}</a> <br>
                                    <b>business Registration Document: </b> <a href="{{url('/')}}/uploads/tenant/{{$tenant->registration}}" target="_blank">{{str_replace($tenant->first_name."_", "",$tenant->registration)}}</a> <br>
                                    <b>Insurance: </b> <a href="{{url('/')}}/uploads/tenant/{{$tenant->insurance}}" target="_blank">{{str_replace($tenant->first_name."_", "",$tenant->insurance)}}</a> <br>
                                    <b>The Lease: </b> <a href="{{url('/')}}/uploads/tenant/{{$tenant->lease}}" target="_blank">{{str_replace($tenant->first_name."_", "",$tenant->lease)}}</a> <br>

                                
                                
                                
                                </div>
                            </div>    

                            
                        @endif


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-1"><i
                                        class="fe-check-circle me-1"></i> Submit</button>
                                <button type="reset" class="btn btn-light waves-effect waves-light m-1"><i
                                        class="fe-x me-1"></i> Cancel</button>
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