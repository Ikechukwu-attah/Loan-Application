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
                                    <div class="step-tab-panel active" id="step-1">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Enter Basic Information</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form method="POST" action="{{ route('update-basicinfo', [$user->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Phone Number</label>
                                                            <input type="tel" value="{{ $user->phone_number }}" {{ $check_active  ? 'readonly' : '' }} name="phone-number" class="form-control form-control-custom" placeholder="Phone Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Marital Status</label>
                                                            <select class="custom-select form-control form-control-custom"  {{ $check_active ? 'inactive' : '' }} name="marital-status" required>
                                                                <option>Select</option>
                                                                <option value="Single" {{ $user->marital_status == "Single" ? 'selected' : '' }}>Single</option>
                                                                <option value="Married"  {{ $user->marital_status == "Married" ? 'selected' : '' }}>Married</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Date of Birth</label>
                                                            <input type="text" name="dob"   {{ $check_active ? 'readonly' : '' }}  value="{{ $user->date_of_birth }}" class="form-control form-control-custom" placeholder="Date of Birth" required>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">upload profile pics</label>
                                                            {{-- <img src="" alt="pics"> --}}
                                                            <input type="file" name="images" class="form-control form-control-custom"  {{ $check_active ? 'readonly' : '' }} required>
                                                            
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