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
                                                <h4 class="text-custom-black fw-600">Credit Card</h4>
                                                <p class="text-custom-black"><sup></sup></p>
                                            </div>
                                            {{-- <form method="POST" action="{{ route('update-card', [$user->id]) }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Full Name On The Card</label>
                                                            <input type="text" name="card-name" class="form-control form-control-custom"  required placeholder="Name on the credit card">  
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Card Number</label>
                                                            <input type="number" name="card-number" class="form-control form-control-custom" required placeholder="Credit card number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">CVV</label>
                                                            <input type="number" name="cvv" class="form-control form-control-custom" placeholder="123">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fs-14 fw-600">Expiry Date</label>
                                                            <input type="text" name="expiry-date" class="form-control form-control-custom" placeholder="02/21">
                                                        </div>
                                                    </div>
                                                    
                                                 
                                                   
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn-first btn-submit-fill">Submit</button>
                                                  </div>
                                            </form> --}}

                                               
                                                
                                                        
                                                        
                                                            <form method="POST" action="{{ route('repay')}}">
                                                                @csrf
                                                                @foreach ($loan_status as $loan)
                                                                @if ($loan->status == 2)
                                                                <input type="hidden" name="loan-amount" value="{{ $loan->requested_amount }}">
                                                                <input type="hidden" name="loan-id" value="{{ $loan->id }}">
                                                                @endif
                                                                    
                                                                @endforeach
                                                        
                                                          
                                                          <select name="auth_code" class="custom-select form-control form-control-custom" >
                                                            <option value="">Select Card</option>
                                                            @foreach ($cards as $card)
                                                            <option value="{{ $card->authorization_code}}" >{{ $card->card_type}}   Ending with ****{{ $card->last4}}</option>
                                                            @endforeach
                                                          </select>

                                                           {{-- <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $card->exp_month}}</td>
                                                            <td>{{ $card->exp_year}}</td>
                                                            <td>**********{{ $card->last4}}</td>
                                                            <td>{{ $card->card_type}}</td>
                                                            
                                                            <td><input type="checkbox"  name="status"  {{ $card->atm_status == 1 ? 'checked' : '' }}></td>

                                                            
                                                            </tr> --}}
                                                              
                                                         
                                                           <input type="submit" value="Pay Now">
                                                        </form> 
                                                        
 


 
                                             

                                                {{-- You deleted some code that includes script file here. check card page if you need the code --}}


                                                {{-- ANOTHER DIFFERENT SCRIPT CODE HERE --}}






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