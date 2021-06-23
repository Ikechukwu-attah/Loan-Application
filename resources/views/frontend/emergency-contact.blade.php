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
                                                <h4 class="text-custom-black fw-600">Emergency Contact</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form method="POST" action="{{ route('update-contact', [$user->id]) }}">
                                               @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Full Name </label>
                                                            <input type="text" name="fullname" value="{{ $user->emergency_fullname }}"  {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Phone Number</label>
                                                            <input type="tel" name="phonenumber"  value="{{ $user->emergency_phone_number }}"  {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Phone Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Relationship</label>
                                                            <input type="text" name="relationship" value="{{ $user->emergency_relationship }}"  {{ $check_active ? 'readonly' : '' }}  class="form-control form-control-custom" required placeholder="Brother, Sister, Father ...">
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Contact Address</label>
                                                            <input type="text" name="contact-address"  value="{{ $user->emergency_address }}" {{ $check_active ? 'readonly' : '' }}  class="form-control form-control-custom" required placeholder="Contact Address">
                                                        </div>
                                                    </div>

                                                    {{-- Emergency contact 2 --}}

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Full Name </label>
                                                            <input type="text" name="fullname1"   value="{{ $user->emergency_fullname1 }}"  {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Phone Number</label>
                                                            <input type="tel" name="phonenumber1" value="{{ $user->emergency_phone_number1 }}" {{ $check_active ? 'readonly' : '' }}  class="form-control form-control-custom" required placeholder="Phone Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Relationship</label>
                                                            <input type="text" name="relationship1" value="{{ $user->emergency_relationship1 }}" {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Brother, Sister, Father ...">
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Contact Address</label>
                                                            <input type="text" name="contact-address1" value="{{ $user->emergency_address1 }}" {{ $check_active ? 'readonly' : '' }} class="form-control form-control-custom" required placeholder="Contact Address">
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