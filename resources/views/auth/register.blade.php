@extends('layouts.app2')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="main-body">
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
                                        <form method="POST" action="{{ route('register') }}">
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
                                                        <label class="text-custom-black fs-14 fw-600" for="password-confirm">Confirm Password</label>
                                                        <input type="password" id="password-confirm"  class="form-control form-control-custom " placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" >

                                                        
                                                     </div>


                                                  

                                                    <div class="form-group">
                                                        <label class="custom-checkbox text-custom-black">
                                                            <input type="checkbox" name="#">
                                                            <span class="checkmark"></span>
                                                            Remember me || <a href="#">Login if Registered</a> 
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
    <!-- Start User Details -->
    <!-- Start Footer -->
   
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="payment-logo mb-md-20"> <span class="text-custom-white fs-14 mr-3">We are accept</span>
                        <div class="payemt-icon">
                            <img src="assets/images/footer-bottom-img.png" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-custom-white no-margin">© Metropolitantheme - 2020 | All Right Reserved. <a href="https://themeforest.net/user/metropolitantheme/" target="_blank" class="text-custom-white">Designed By Metropolitantheme</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- back to top -->
    <div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-up-arrow"></i></a>
    </div>
</div> --}}



@endsection
