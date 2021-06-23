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
                                    <a href="#step-1"> <span class="number"></span>
                                      <span class="step-name">Basic Info</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#step-2"> <span class="number"></span>
                                      <span class="step-name">Personal Info</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#step-3"> <span class="number"></span>
                                      <span class="step-name">Bank Details</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#step-4"> <span class="number"></span>
                                      <span class="step-name">Income</span>
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
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Full Name</label>
                                                            <input type="text" name="fullName" class="form-control form-control-custom" placeholder="Full Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Phone Number</label>
                                                            <input type="number" name="phoneNumber" class="form-control form-control-custom" placeholder="Phone Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Marital Status</label>
                                                            <select class="custom-select form-control form-control-custom" name="maritalStatus" required>
                                                                <option>Marital Status</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Date of Birth</label>
                                                            <input type="number" name="dob" class="form-control form-control-custom" placeholder="Date of Birth" required>
                                                        </div>

                                                    </div>
                                                    
                                                                   
                                
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox text-custom-black">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                I Agree to the <a href="#">terms & conditions</a> and <a href="#">privacy policy.</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="step-tab-panel" id="step-2">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Enter Personal Information</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Resdential Address </label>
                                                            <input type="text" name="address" class="form-control form-control-custom" required placeholder="Residential Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Emergency Address </label>
                                                            <input type="text" name="emergency" class="form-control form-control-custom" required placeholder="Emergency Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">State</label>
                                                            <input type="text" name="state" class="form-control form-control-custom" required placeholder="State">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">City</label>
                                                            <input type="text" name="city" class="form-control form-control-custom" required placeholder="City">
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">LGA</label>
                                                            <input type="text" name="LGA" class="form-control form-control-custom" required placeholder="LGA">
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-500"></label>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="step-tab-panel" id="step-3">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Enter Your Bank Details</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Bank Name</label>
                                                            <input type="text" name="bank" class="form-control form-control-custom" placeholder="Bank Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Account Number</label>
                                                            <input type="number" name="account" class="form-control form-control-custom" placeholder="Account Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Credit Card Number</label>
                                                            <input type="number" name="card" class="form-control form-control-custom" placeholder="Credit Card Number">
                                                        </div>
                                                    </div>
                                                   
                                                                      
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="step-tab-panel" id="step-4">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Income</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Employment Status</label>
                                                            <input type="text" name="employmentStatus" class="form-control form-control-custom"  required placeholder="Employment Status">  
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Monthly Income</label>
                                                            <input type="number" name="income" class="form-control form-control-custom" required placeholder="Monthly Income">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">BVN</label>
                                                            <input type="number" name="BVN" class="form-control form-control-custom" placeholder="BVN">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox text-custom-black">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                I agree to receive Loan disclosures electronically to any email address provided by me.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox text-custom-black">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                I understand that by clicking the “Submit” button below, that I am giving Loanly, LLC and Loanly written instructions under the Fair Credit Reporting Act to obtain my personal and business credit reports and to evaluate my eligibility. Answering these questions lets me check my price and will not impact my credit score. I understand that if I sign a loan agreement, Loanly, LLC and Loanly will not perform credit checks and other public records checks, which may impact my credit score.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    





                                    {{-- <div class="step-tab-panel" id="step-5">
                                        <div class="step-tab-inner">
                                            <div class="heading text-center">
                                                <h4 class="text-custom-black fw-600">Tell us about your business.</h4>
                                                <p class="text-custom-black">Check your business's eligibility without impacting your credit.<sup>*</sup></p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Date of Birth</label>
                                                            <input type="text" name="#" class="form-control datepickrnew form-control-custom" placeholder="01/01/1990" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Social Security Number</label>
                                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Social Security Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mb-1">
                                                            <label class="text-custom-black fs-14 fw-600">Federal Tax ID</label>
                                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Federal Tax ID">
                                                        </div>
                                                        <label class="text-light-grey mb-xl-20">Enter your social security number (SSN) of your business is a sole proprietorship or single-owner LLC without a Federal Tax ID.</label>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Are you a citizen or permanent resident of the U.S.?</label>
                                                            <div class="radio-box">
                                                                <div class="custom-radio">
                                                                    <input id="yes" name="nationality" type="radio" checked>
                                                                    <label for="yes">Yes</label>
                                                                </div>
                                                                <div class="custom-radio">
                                                                    <input id="no" name="nationality" type="radio">
                                                                    <label for="no">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox text-custom-black">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                I agree to receive Loan disclosures electronically to any email address provided by me.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="custom-checkbox text-custom-black">
                                                                <input type="checkbox" name="#">
                                                                <span class="checkmark"></span>
                                                                I understand that by clicking the “Submit” button below, that I am giving Loanly, LLC and Loanly written instructions under the Fair Credit Reporting Act to obtain my personal and business credit reports and to evaluate my eligibility. Answering these questions lets me check my price and will not impact my credit score. I understand that if I sign a loan agreement, Loanly, LLC and Loanly will not perform credit checks and other public records checks, which may impact my credit score.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="step-footer step-tab-pager">
                                  <button data-direction="prev" class="btn-first btn-submit-fill">Previous</button>
                                  <button data-direction="next" class="btn-first btn-submit-fill">Continue</button>
                                  <button data-direction="finish" class="btn-first btn-submit-fill">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









@endsection