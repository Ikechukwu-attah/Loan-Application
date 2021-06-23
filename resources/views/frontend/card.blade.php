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

                                               
                                                <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                           
                                                            <th scope="col" style="width: 1px">Id</th>
                                                            <th scope="col">Expiry Month</th>
                                                            <th scope="col">Expiry Year</th>
                                                            <th scope="col">Last 4 digit</th>
                                                            <th scope="col">Card type</th>
                                                            <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach ($cards as $card)

                                                           <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $card->exp_month}}</td>
                                                            <td>{{ $card->exp_year}}</td>
                                                            <td>**********{{ $card->last4}}</td>
                                                            <td>{{ $card->card_type}}</td>
                                                            <td><a href="{{ route('delete-creditCard',[$card->id]) }}" class="btn  btn-danger btn-sm">X</a></td>

                                                            
                                                            </tr>
                                                              
                                                          @endforeach
                                                           
                                                           
                                                        </tbody>
                                                        </table>

 



                                             
 <form  method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    @csrf
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            
            <input type="hidden" name="email" value="{{ Auth::user()->email}}">
            <input type="hidden" name="orderID" value="213">
            <input type="hidden" name="amount" value="500"> 
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{-- {{ csrf_field() }} works only when using laravel 5.1, 5.2 --}}
   
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> employ this in place of csrf_field only in laravel 5.0 --}}
   
            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!"  >
                    <i class="fa fa-plus-circle fa-lg"></i> Add Card
                </button>
            </p>
        </div>
    </div>
   </form>
   <script src="https://js.paystack.co/v1/inline.js"></script> 
   
   
   
   
   
                                        
            <script>
                const paymentForm = document.getElementById('paymentForm');
                paymentForm.addEventListener("submit", payWithPaystack, false);
   
                function payWithPaystack(e) {
                    e.preventDefault();
                    let handler = PaystackPop.setup({
                        key: 'pk_test_da352e0e8b4083bf1ee22f2d020919a6edb424d4', // Replace with your public key
                        email: document.getElementById("email-address").value,
                        amount: document.getElementById("amount").value * 100,
                        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                        // label: "Optional string that replaces customer email"
                        onClose: function() {
                            alert('Window closed.');
                        },
                        callback: function(response) {
                            let message = 'Payment complete! Reference: ' + response.reference;
                            alert(message);
                        }
                    });
                    handler.openIframe();
                }
            </script>
   







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