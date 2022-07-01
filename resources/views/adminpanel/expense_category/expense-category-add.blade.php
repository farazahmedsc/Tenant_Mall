@extends('layout.main') 

@push('title')
  Expense Category
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
                    <form action="{{$url}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-3">
                                <label>Name <sup class="text-danger">*</sup></label>
                                <input type="text" name="name" class="form-control form-control-solid" value="{{$expense->name}}" required>
                                <span class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row {{(!is_null($expense->is_active)) ? '' : 'd-none';}}">
                            <div class="form-group col-md-6 mb-3">
                                <label>Status</label>
                                <select name="is_active" class="form-control form-select form-select-solid" >                                        
                                    <option value="1" {{($expense->is_active == 1)? 'Selected' : '';}}>Active</option>
                                    <option value="0" {{($expense->is_active == 0)? 'Selected' : '';}}>Inactive</option>
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