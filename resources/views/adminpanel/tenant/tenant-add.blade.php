@extends('layout.main')
@push('title')
Add Tenant
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
                    <form action="{{$url}}" method="post">
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
                                <input type="text" name="business_name" class="form-control form-control-solid" value="{{$tenant->business_name}}" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label>Area Alloted</label>
                                <select name="area_alloted" class="form-control form-select form-select-solid" >
                                    <option value="">Select</option>
                                    @foreach ($areas as $area)
                                        <option value="{{$area->id}}" {{($tenant->area_alloted == $area->id)? "Selected" : "" ;}}>{{$area->name}}</option>
                                    @endforeach
                                    {{-- <option value="1" {{($tenant->area_alloted == "1")? "Selected" : "" ;}}>Shop #46</option>
                                    <option value="2" {{($tenant->area_alloted == "2")? "Selected" : "" ;}}>Shop #47</option> --}}
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

                        <div class="row {{(!is_null($tenant->is_active)) ? '' : 'd-none';}}">
                            <div class="form-group col-md-6 mb-3">
                                <label>Status</label>
                                <select name="is_active" class="form-control form-select form-select-solid" >                                        
                                    <option value="1" {{($tenant->is_active == 1)? 'Selected' : '';}}>Active</option>
                                    <option value="0" {{($tenant->is_active == 0)? 'Selected' : '';}}>Inactive</option>
                                </select>                                   
                            </div>
                        </div>


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