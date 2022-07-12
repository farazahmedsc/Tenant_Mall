@extends('layout.main') 

@push('title')
  Setting
@endpush


@push('css-link')
    <!-- Plugins css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    
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
                    <h4 class="page-title">Settings</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{url('/setting_update')}}" method="post">
                        @csrf
                    <h5 class="form-section mb-3 font-24">Info</h5>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Company Name <sup class="text-danger">*</sup></label>
                            <input type="text" name="name" value="{{$company->name}}" class="form-control form-control-solid" placeholder="Company Name..." required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Street <sup class="text-danger">*</sup></label>
                            
                            <input type="text" name="street" value="{{$company->street}}" class="form-control form-control-solid" placeholder="Street..." required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Apt/Suite/Other <sup class="text-danger">*</sup></label>
                            <input type="text" name="apt" value="{{$company->apt}}" class="form-control form-control-solid" placeholder="Apt/Suite/Other..." required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Zip <sup class="text-danger">*</sup></label>
                            <input type="text" name="zip" value="{{$company->zip}}" class="form-control form-control-solid" placeholder="Zip..." required>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label>State <sup class="text-danger">*</sup></label>
                            <select name="state" class="form-control form-select form-select-solid" onChange="fetchCitiesByState(this, 'city_id', 'https://fleetly.app')" required>
                                <option value="">Select State</option>
                                <option value="Alabama" {{($company->state == 'Alabama')? 'Selected' : ''}}>Alabama</option>
                                <option value="Alaska" {{($company->state == 'Alaska')? 'Selected' : ''}}>Alaska</option>
                                    <option value="Arizona" {{($company->state == 'Arizona')? 'Selected' : ''}}>Arizona</option>
                                    <option value="Arkansas" {{($company->state == 'Arkansas')? 'Selected' : ''}}>Arkansas</option>
                                    <option value="Byram" {{($company->state == 'Byram')? 'Selected' : ''}}>Byram</option>
                                    <option value="California" {{($company->state == 'California')? 'Selected' : ''}}>California</option>
                                    <option value="Cokato" {{($company->state == 'Cokato')? 'Selected' : ''}}>Cokato</option>
                                    <option value="Colorado" {{($company->state == 'Colorado')? 'Selected' : ''}}>Colorado</option>
                                    <option value="Connecticut" {{($company->state == 'Connecticut')? 'Selected' : ''}}>Connecticut</option>
                                    <option value="Delaware" {{($company->state == 'Delaware')? 'Selected' : ''}}>Delaware</option>
                                    <option value="Dist. of Columbia" {{($company->state == 'Dist. of Columbia')? 'Selected' : ''}}>Dist. of Columbia</option>
                                    <option value="Florida" {{($company->state == 'Florida')? 'Selected' : ''}}>Florida</option>
                                    <option value="Georgia" {{($company->state == 'Georgia')? 'Selected' : ''}}>Georgia</option>
                                    <option value="Hawaii" {{($company->state == 'Hawaii')? 'Selected' : ''}}>Hawaii</option>
                                    <option value="Idaho" {{($company->state == 'Idaho')? 'Selected' : ''}}>Idaho</option>
                                    <option value="Illinois" {{($company->state == 'Illinois')? 'Selected' : ''}}>Illinois</option>
                                    <option value="Indiana" {{($company->state == 'Indiana')? 'Selected' : ''}}>Indiana</option>
                                    <option value="Iowa" {{($company->state == 'Iowa')? 'Selected' : ''}}>Iowa</option>
                                    <option value="Kansas" {{($company->state == 'Kansas')? 'Selected' : ''}}>Kansas</option>
                                    <option value="Kentucky" {{($company->state == 'Kentucky')? 'Selected' : ''}}>Kentucky</option>
                                    <option value="Louisiana" {{($company->state == 'Louisiana')? 'Selected' : ''}}>Louisiana</option>
                                    <option value="Lowa" {{($company->state == 'Lowa')? 'Selected' : ''}}>Lowa</option>
                                    <option value="Maine" {{($company->state == 'Maine')? 'Selected' : ''}}>Maine</option>
                                    <option value="Maryland" {{($company->state == 'Maryland')? 'Selected' : ''}}>Maryland</option>
                                    <option value="Massachusetts" {{($company->state == 'Massachusetts')? 'Selected' : ''}}>Massachusetts</option>
                                    <option value="Medfield" {{($company->state == 'Medfield')? 'Selected' : ''}}>Medfield</option>
                                    <option value="Michigan" {{($company->state == 'Michigan')? 'Selected' : ''}}>Michigan</option>
                                    <option value="Minnesota" {{($company->state == 'Minnesota')? 'Selected' : ''}}>Minnesota</option>
                                    <option value="Mississippi" {{($company->state == 'Mississippi')? 'Selected' : ''}}>Mississippi</option>
                                    <option value="Missouri" {{($company->state == 'Missouri')? 'Selected' : ''}}>Missouri</option>
                                    <option value="Montana" {{($company->state == 'Montana')? 'Selected' : ''}}>Montana</option>
                                    <option value="Nebraska" {{($company->state == 'Nebraska')? 'Selected' : ''}}>Nebraska</option>
                                    <option value="Nevada" {{($company->state == 'Nevada')? 'Selected' : ''}}>Nevada</option>
                                    <option value="New Hampshire" {{($company->state == 'New Hampshire')? 'Selected' : ''}}>New Hampshire</option>
                                    <option value="New Jersey" {{($company->state == 'New Jersey')? 'Selected' : ''}}>New Jersey</option>
                                    <option value="New Mexico" {{($company->state == 'New Mexico')? 'Selected' : ''}}>New Mexico</option>
                                    <option value="New York" {{($company->state == 'New York')? 'Selected' : ''}}>New York</option>
                                    <option value="North Carolina" {{($company->state == 'North Carolina')? 'Selected' : ''}}>North Carolina</option>
                                    <option value="North Dakota" {{($company->state == 'North Dakota')? 'Selected' : ''}}>North Dakota</option>
                                    <option value="Ohio" {{($company->state == 'Ohio')? 'Selected' : ''}}>Ohio</option>
                                    <option value="Oklahoma" {{($company->state == 'Oklahoma')? 'Selected' : ''}}>Oklahoma</option>
                                    <option value="Ontario" {{($company->state == 'Ontario')? 'Selected' : ''}}>Ontario</option>
                                    <option value="Oregon" {{($company->state == 'Oregon')? 'Selected' : ''}}>Oregon</option>
                                    <option value="Pennsylvania" {{($company->state == 'Pennsylvania')? 'Selected' : ''}}>Pennsylvania</option>
                                    <option value="Ramey" {{($company->state == 'Ramey')? 'Selected' : ''}}>Ramey</option>
                                    <option value="Rhode Island" {{($company->state == 'Rhode Island')? 'Selected' : ''}}>Rhode Island</option>
                                    <option value="South Carolina" {{($company->state == 'South Carolina')? 'Selected' : ''}}>South Carolina</option>
                                    <option value="South Dakota" {{($company->state == 'South Dakota')? 'Selected' : ''}}>South Dakota</option>
                                    <option value="Sublimity" {{($company->state == 'Sublimity')? 'Selected' : ''}}>Sublimity</option>
                                    <option value="Tennessee" {{($company->state == 'Tennessee')? 'Selected' : ''}}>Tennessee</option>
                                    <option value="Texas" {{($company->state == 'Texas')? 'Selected' : ''}}>Texas</option>
                                    <option value="Trimble" {{($company->state == 'Trimble')? 'Selected' : ''}}>Trimble</option>
                                    <option value="Utah" {{($company->state == 'Utah')? 'Selected' : ''}}>Utah</option>
                                    <option value="Vermont" {{($company->state == 'Vermont')? 'Selected' : ''}}>Vermont</option>
                                    <option value="Virginia" {{($company->state == 'Virginia')? 'Selected' : ''}}>Virginia</option>
                                    <option value="Washington" {{($company->state == 'Washington')? 'Selected' : ''}}>Washington</option>
                                    <option value="West Virginia" {{($company->state == 'West Virginia')? 'Selected' : ''}}>West Virginia</option>
                                    <option value="Wisconsin" {{($company->state == 'Wisconsin')? 'Selected' : ''}}>Wisconsin</option>
                                    <option value="Wyoming" {{($company->state == 'Wyoming')? 'Selected' : ''}}>Wyoming</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>City <sup class="text-danger">*</sup></label>
                            <div id="loadingCity"></div>
                            <select name="city" class="form-control form-select form-select-solid" required>
                                <option value="">Select City</option>
                                <option value="Ahuimanu" {{($company->city == 'Ahuimanu')? 'Selected' : ''}}>Ahuimanu</option>
                                <option value="Aiea" {{($company->city == 'Aiea')? 'Selected' : ''}}>Aiea</option>
                                    <option value="Aliamanu" {{($company->city == 'Aliamanu')? 'Selected' : ''}}>Aliamanu</option>
                                    <option value="Ewa Beach" {{($company->city == 'Ewa Beach')? 'Selected' : ''}}>Ewa Beach</option>
                                    <option value="Haiku" {{($company->city == 'Haiku')? 'Selected' : ''}}>Haiku</option>
                                    <option value="Halawa" {{($company->city == 'Halawa')? 'Selected' : ''}}>Halawa</option>
                                    <option value="Hanalei" {{($company->city == 'Hanalei')? 'Selected' : ''}}>Hanalei</option>
                                    <option value="Hilo" {{($company->city == 'Hilo')? 'Selected' : ''}}>Hilo</option>
                                    <option value="Holualoa" {{($company->city == 'Holualoa')? 'Selected' : ''}}>Holualoa</option>
                                    <option value="Minneapolis" {{($company->city == 'Minneapolis')? 'Selected' : ''}}>Minneapolis</option>
                                    <option value="Kahului" {{($company->city == 'Kahului')? 'Selected' : ''}}>Kahului</option>
                                    <option value="Kailua" {{($company->city == 'Kailua')? 'Selected' : ''}}>Kailua</option>
                                    <option value="Kalaheo" {{($company->city == 'Kalaheo')? 'Selected' : ''}}>Kalaheo</option>
                                    <option value="Kamuela" {{($company->city == 'Kamuela')? 'Selected' : ''}}>Kamuela</option>
                                    <option value="Kaneohe" {{($company->city == 'Kaneohe')? 'Selected' : ''}}>Kaneohe</option>
                                    <option value="Kaneohe Station" {{($company->city == 'Kaneohe Station')? 'Selected' : ''}}>Kaneohe Station</option>
                                    <option value="Kapaa" {{($company->city == 'Kapaa')? 'Selected' : ''}}>Kapaa</option>
                                    <option value="Kapolei" {{($company->city == 'Kapolei')? 'Selected' : ''}}>Kapolei</option>
                                    <option value="Kihei" {{($company->city == 'Kihei')? 'Selected' : ''}}>Kihei</option>
                                    <option value="Kula" {{($company->city == 'Kula')? 'Selected' : ''}}>Kula</option>
                                    <option value="Lahaina" {{($company->city == 'Lahaina')? 'Selected' : ''}}>Lahaina</option>
                                    <option value="Lanai City" {{($company->city == 'Lanai City')? 'Selected' : ''}}>Lanai City</option>
                                    <option value="Lihue" {{($company->city == 'Lihue')? 'Selected' : ''}}>Lihue</option>
                                    <option value="Makaha" {{($company->city == 'Makaha')? 'Selected' : ''}}>Makaha</option>
                                    <option value="Makakilo City" {{($company->city == 'Makakilo City')? 'Selected' : ''}}>Makakilo City</option>
                                    <option value="Makawao" {{($company->city == 'Makawao')? 'Selected' : ''}}>Makawao</option>
                                    <option value="Mi-Wuk Village" {{($company->city == 'Mi-Wuk Village')? 'Selected' : ''}}>Mi-Wuk Village</option>
                                    <option value="Mililani Town" {{($company->city == 'Mililani Town')? 'Selected' : ''}}>Mililani Town</option>
                                    <option value="Naalehu" {{($company->city == 'Naalehu')? 'Selected' : ''}}>Naalehu</option>
                                    <option value="Nanakuli" {{($company->city == 'Nanakuli')? 'Selected' : ''}}>Nanakuli</option>
                                    <option value="Pahoa" {{($company->city == 'Pahoa')? 'Selected' : ''}}>Pahoa</option>
                                    <option value="Pearl City" {{($company->city == 'Pearl City')? 'Selected' : ''}}>Pearl City</option>
                                    <option value="Schofield Barracks" {{($company->city == 'Schofield Barracks')? 'Selected' : ''}}>Schofield Barracks</option>
                                    <option value="Wahiawa" {{($company->city == 'Wahiawa')? 'Selected' : ''}}>Wahiawa</option>
                                    <option value="Waialua" {{($company->city == 'Waialua')? 'Selected' : ''}}>Waialua</option>
                                    <option value="Waianae" {{($company->city == 'Waianae')? 'Selected' : ''}}>Waianae</option>
                                    <option value="Wailuku" {{($company->city == 'Wailuku')? 'Selected' : ''}}>Wailuku</option>
                                    <option value="Waimalu" {{($company->city == 'Waimalu')? 'Selected' : ''}}>Waimalu</option>
                                    <option value="Waipahu" {{($company->city == 'Waipahu')? 'Selected' : ''}}>Waipahu</option>
                                    <option value="Waipio" {{($company->city == 'Waipio')? 'Selected' : ''}}>Waipio</option>
                            </select>
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Phone/Mobile <sup class="text-danger">*</sup></label>
                            <input type="text" name="phone_number" value="{{$company->phone_number}}" class="form-control form-control-solid" placeholder="Phone/Mobile..." required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Email <sup class="text-danger">*</sup></label>
                            <input type="email" name="email" value="{{$company->email}}" class="form-control form-control-solid" placeholder="Email..." required>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="form-group col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control form-control-solid" placeholder="Description of your company..." rows="5">{{$company->description}}</textarea>
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
               