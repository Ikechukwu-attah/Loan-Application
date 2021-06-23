@extends('layouts.userdashboard')


@section('content')

@if (Session::get('success-message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
       
       {{ Session::get('success-message') }}
      </div>
        
    @endif

    @if (Session::get('error-message'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('error-message') }}
      </div>
        
    @endif



<section class="section-padding-bottom user-info-details">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="user-info-tabs mt-lg-5">
                            <div id="add-user-tab" class="step-app">
                                <ul class="step-steps custom mb-xl-40">
                                  <li class="active">
                                    <a href="#step-1"> <span class=""></span>
                                      <span class="step-name"></span>
                                    </a>
                                  </li>
                                                                                                                           
                                </ul>
                                <div class="step-content">
                                    
                                    <div class="step-tab-panel" id="step-1">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Enter Personal Information</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form method="POST" action="{{ route('update-personalinfo', [$user->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Resdential Address </label>
                                                            <input type="text" name="address"  value="{{ $user->residential_address }}"  {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Residential Address">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">State</label>
                                                            <input type="text" name="state" value="{{ $user->state }}"  {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="State">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">City</label>
                                                            <input type="text" name="city"  value="{{ $user->city }}" {{ $check_active ? 'readonly' : '' }}  class="form-control form-control-custom" required placeholder="City">
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">LGA</label>
                                                            <input type="text" name="LGA" value="{{ $user->LGA }}" {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="LGA">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Employment Status</label>
                                                            <input type="text" name="employment" value="{{ $user->employment_status }}" {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Employment Status">
                                                        </div>
                                                    </div>


                                                   
                                                    
                                                   
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn-first btn-submit-fill">Submit</button>
                                                  </div>
                                            </form>
                                        </div>
                                    </div> 
                                  
                                     

                                     





                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









@endsection