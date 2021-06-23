@extends('layouts.app2')


@section('content')

@if (Session::get('error-message'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
    {{ Session::get('error-message') }}
  </div>
    
@endif

<div class="main-body">
    <!-- Start Header -->
    
    <!-- End Header -->
    <!-- Start Subheader -->

    <!-- End Subheader -->
    <!-- Start User Details -->
    <section class="section-padding-bottom user-info-details">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="user-info-tabs mt-sm-5">
                        <div id="add-user-tab" class="step-app">
                            <ul class="step-steps custom mb-xl-40">
                              <li class="active">
                                <a href="#step-1"> <span class=""></span>
                                  <span class="step-name"></span>
                                </a>
                              </li>
                                 <!-- LIST DELETED -->
                             
                            
                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel active" id="step-1">
                                    <div class="step-tab-inner">
                                        <div class="heading text-center">
                                            <h4 class="text-custom-black fw-600">REGISTER</h4>
                                            <p class="text-custom-black">Kindly insert your correct details<sup>*</sup></p>
                                        </div>
                                        <form method="POST" action="{{ route('register-user') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="firstname">FirstName</label>
                                                        <input type="text" id="firstname"  class="form-control form-control-custom @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="FirstName" >
                                                        
                                                        @error('firstname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="lastname">LastName</label>
                                                        <input type="text" id="lastname" class="form-control form-control-custom @error('lastname') is-invalid @enderror" placeholder="LastName" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus >
                                                        @error('lastname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="email">Email</label>
                                                        <input type="email" id="email" class="form-control form-control-custom @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="password">Password</label>
                                                        <input type="password" id="password" class="form-control form-control-custom @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password" >

                                                        @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                     </div>


                                                 
                                                            

                                                    <div class="form-group">
                                                        <label class="custom-checkbox text-custom-black">
                                                            <input type="checkbox" name="#">
                                                            <span class="checkmark"></span>
                                                            Remember me || <a href="{{ route('sign-in') }}">Login if Registered</a> 
                                                        </label>
                                                    </div>

                                                </div>
                                                
                                                
                             
                                                
                                                                     
                                                
                                            </div>
                                            <div class=" form-group ">
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