{{-- @extends('layouts.app') --}}
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







<section class="section-padding user-dashboard-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="collapse show user-loan-profile" id="user-profile">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="welcome-box mb-md-40">
                                <div class="icon-box">
                                    {{-- class icon-box removed from image div to removedefault size --}}
                                    @if($photo->avertar == '')
                                    <img src="{{ asset('uploads/avatar.jpg' ) }}"   class="rounded-circle"  width="304" height="236" alt="profile-pixs">
                                      @else
                                    <img src="{{ asset('uploads/profile/' .$photo->avertar) }}"   class="rounded-circle"  width="304" height="236" alt="profile-pixs">
                                    @endif
                                </div>
                                <div class="welcome-text">
                                    <h4 class="text-custom-black">Welcome Back!    {{ Auth::user()->firstname }}</h4>
                                    <p class="text-custom-black">We're happy to help you grow your business with Loanly Working Capital.</p>
                                    <div class="right-side">

                                        @if($loan_count == 0)
                                        <div class="cta-btn "> <a href="{{ route('apply-loan', [Auth::user()->id]) }}" class="btn-first btn-submit bg-black">
                                            Apply Loan
                                            </a>
                                           </div>
                                           @endif

                                         @foreach ($loan_status as $loan)

                                         @if ( $loan->status == 1)
                                         <div class="cta-btn "> <a href="" class="btn-first btn-submit bg-black">
                                           Pending Loan
                                           </a>
                                          </div>

                                       @elseif ( $loan->status == 2)
                                          
                                        <a href="{{ route('toggle-atm',[Auth::user()->id]) }}"  class="btn-first btn-submit bg-black">Repay Loan</a>
                                        
                                       

                                       @endif
                                            
                                        @endforeach 



                                            
                                        
                                      
                                    </div>
                                    <a href="#" class="text-custom-blue fw-600 fs-14">View loan history</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4">
                            <div class="loan-box-wrap">
                                <div class="content">
                                    <h2 class="text-custom-black fw-600">{{ $loan_count }}</h2>

                                    @if ($loan_count > 1)
                                          <p class="no-margin text-custom-black">Loans</p> 
                                          @else
                                          <p class="no-margin text-custom-black">Loan</p>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-8">
                            <div class="loan-box-wrap justify-content-between">
                                <div class="content">
                                    <h2 class="text-custom-black fw-600">Replace with loan status</h2>
                                      <a href="{{ route('toggle-atm',[Auth::user()->id]) }}">Toggle ATM</a>
                                    <p class="no-margin text-custom-black">Total Borrowed</p>
                                </div>
                                <div class="content-infor">
                                  <ul class="custom">
                                    <li>Last Payment on <a href="#"></a>24th April 20</li>
                                    <li> <a href="#">View Monthly Details</a> </li>
                                    <li> <a href="#">View Yearly Details</a> </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div class="close-btn" data-toggle="collapse" data-target="#user-profile">
                            <a href="#"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="dashboard-second-sec" data-toggle="collapse" data-target="#loan-progress">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 align-self-center">
                            <div class="heading-text">
                                <h4 class="text-custom-black no-margin">LOAN PROGRESS CHARTS</h4>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="right-side">
                                <div class="pie-chart-box">
                                    <div class="active-border activeBorder">
                                        <div class="circle circlestyle">
                                            <span class="prec 282 precs">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-chart-box">
                                    <div class="graph">
                                        <canvas id="small-graph"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-second-sec-large collapse show" id="loan-progress">
                    <div class="row">
                        <div class="col-lg-5">
                            <h5 class="text-custom-black fw-600 text-center mb-xl-40">Repayment Progress</h5>
                            <div class="left-side mb-md-40">
                                <div class="pie-chart-area">
                                    <div class="active-border activeBorder">
                                        <div class="circle circlestyle-big">
                                            <span class="prec 282 precs">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pie-chart-area-text">
                                    <div class="text-wraper mb-xl-20">
                                        <label class="fw-600 fs-16 text-custom-black">$ 10,000</label>
                                        <p class="no-margin fw-500 text-custom-black">Outstanding balance</p>
                                    </div>
                                    <div class="text-wraper">
                                        <label class="fw-600 fs-16 text-custom-black">$ 1,257</label>
                                        <p class="no-margin fw-500 text-custom-black">Paid to date</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h5 class="text-custom-black fw-600 text-center mb-xl-40">Repayment Tracking</h5>
                            <div class="right-side">
                                <div class="graph mb-xs-40">
                                    <canvas id="big-graph"></canvas>
                                </div>
                                <div class="graph-text">
                                    <div class="text-wraper mb-xl-20">
                                        <label class="fw-600 fs-16 text-custom-black">Average Payment</label>
                                        <p class="no-margin fw-500 text-custom-black">$ 57,975</p>
                                    </div>
                                    <div class="text-wraper">
                                        <label class="fw-600 fs-16 text-custom-black">Estimated time to repay</label>
                                        <p class="no-margin fw-500 text-custom-black">1 month(s)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="dashboard-third-sec">
                    <div class="row">
                        <aside class="col-lg-4 mb-md-80">
                            {{-- <div class="widget-box mb-xl-30">
                                <h4 class="text-custom-black">Loan Details</h4>
                                <div class="content-wrap">
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">$ 10,000</label>
                                        <p class="no-margin fw-500">Outstanding balance</p>
                                    </div>
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">$ 1,257</label>
                                        <p class="no-margin fw-500">Paid to date</p>
                                    </div>
                                    <button type="submit" class="btn-first btn-submit text-custom-blue">Make Payment</button>
                                </div>
                            </div> --}}

                            




                           














                            {{-- <div class="widget-box mb-xl-30">
                                <div class="content-wrap">
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">$ 10,000</label>
                                        <p class="no-margin fw-500">Initial loan amount</p>
                                    </div>
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">$ 1,257</label>
                                        <p class="no-margin fw-500">Loan Fee</p>
                                    </div>
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">30%</label>
                                        <p class="no-margin fw-500">Repayment percentage</p>
                                    </div>
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-16 text-custom-black">$ 4,500</label>
                                        <p class="no-margin fw-500">Minimum due every 90 days</p>
                                    </div>
                                    <div class="text-wraper">
                                        <a href="#" class="text-custom-blue fw-600 fs-14"><i class="fas fa-download mr-2"></i> Download contract</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="widget-box mb-xl-30">
                                <h4 class="text-custom-black">How are we doing?</h4>
                                <div class="content-wrap">
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-14 text-custom-black mb-xl-10">Your feedback is always appreciated.</label>
                                    </div>
                                    <div class="text-wraper">
                                        <a href="#" class="text-custom-blue fw-600 fs-14">Take our satisfaction survey</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="widget-box mb-xl-30">
                                <h4 class="text-custom-black">Loan Tips</h4>
                                <div class="content-wrap">
                                    <div class="text-wraper mb-xl-10">
                                        <label class="fw-600 fs-14 text-custom-black mb-xl-10">Meet the minimum requirement</label>
                                        <p class="no-margin fw-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="text-wraper">
                                        <a href="#" class="text-custom-blue fw-600 fs-14">Learn about the minimum requirement</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="widget-box pb-0 border-0">
                                <h4 class="text-custom-black">Have Questions?</h4>
                                <div class="content-wrap">
                                    <div class="text-wraper mb-xl-20">
                                        <label class="fw-600 fs-14 text-custom-black d-block">Call us and we'll be happy to help.</label>
                                        <a href="#" class="fw-600 fs-14 text-custom-black">(+345 123 456 7890)</a>
                                    </div>
                                    <div class="text-wraper">
                                        <label class="fw-600 fs-14 text-custom-black d-block">9:00AM to 8:00PM Eastern Time </label>
                                        <a href="#" class="fw-600 fs-14 text-custom-black">Monday - Friday</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-lg-8">
                            <div class="tabs-sec">
                                <h4 class="text-custom-black">Loan History</h4>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection
