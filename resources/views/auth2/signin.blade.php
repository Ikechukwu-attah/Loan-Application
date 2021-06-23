@extends('layouts.app2')


@section('content')



 <!-- Start Main Body -->
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
                                            <h4 class="text-custom-black fw-600">LOGIN</h4>
                                            <p class="text-custom-black">Kindly insert your correct email and password<sup>*</sup></p>
                                        </div>
                                        <form method="POST" action="{{ route('user-login') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="email">Email</label>
                                                        <input type="email" id="email" class="form-control form-control-custom  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" >
                                                        
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="password">Password</label>
                                                        <input type="password" id="password" class="form-control form-control-custom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <!-- <label class="custom-checkbox text-custom-black">
                                                            
                                                            <span class="checkmark"></span>
                                                            Remember me || <a href="#">Register if you are new</a> 
                                                        </label> -->

                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }} | <a href="{{ route('forgotpassword') }}">forgot password</a>
                                                        </label>
                                                    </div>

                                                    

                                                </div>
                                                
                                                
                             
                                                
                                        
                                                
                                            </div>
                                            <div class=" form-group ">
                                                <button type="submit" class="btn-first btn-submit-fill">Login</button>

                                                                    {{-- @if (Route::has('password.request'))
                                                                            <a class="btn btn-link" href="">
                                                                                {{ __('Forgot Your Password?') }}
                                                                            </a>
                                                                        @endif --}}
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
   
   
</div>
<!-- End Main Body -->




@endsection