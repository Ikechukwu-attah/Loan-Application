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
                                                <h4 class="text-custom-black fw-600">Apply for loan</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            <form method="POST" action="{{ route('update-loan')}}">
                                                @csrf
                                                <div class="row">
                                               
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Enter Loan amount</label>
                                                            <input type="number" name="apply-loan" value="" class="form-control form-control-custom quantity" required placeholder="Enter loan amount">
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Date of repayment </label>
                                                            <select class="form-control custom-select form-control-custom" name="date-repayment" required>
                                                                <option class='form-control'>Select</option>
                                                               @foreach ( $date_repayment as $repayment  )
                                                               <option class='form-control' value="{{ $repayment->week_days }}">{{ $repayment->repayment_date }}</option>
                                                               @endforeach
                                                                
                                                                
                                                               
                                                          

                                                            </select>
                                                            {{-- <input type="text" name="bank" value="{{ $user->bank_name }}" class="form-control form-control-custom" required placeholder="Bank Name"> --}}
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