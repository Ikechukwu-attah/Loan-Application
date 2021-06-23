@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6 ">
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        {{-- form begins here --}}
        @if (Session::get('success-message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           
           {{ Session::get('success-message') }}
          </div>
            
        @endif

        @if (Session::get('error-message'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('error-message') }}
          </div>
            
        @endif
        
         <div class="">
        <div class="card card-primary  ">
            <div class="card-header">
              <h3 class="card-title">Change loan status</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('status-update',[$user->id]) }}" method="post">
               @csrf
              <div class="card-body">
                 
                

                <div class="form-group ">
                    <label for="exampleInputRole">status</label>
                   <select class="form-control  "  name="status">
                  
                      @if($user->status ==1)
                      <option value= 1>Processing</option>
                      <option value= 2>Aproved</option>
                      <option value= 3>Pending</option>
                      <option value= 4>Overdue</option>
                     
                      @endif

                      @if($user->status ==2)
                      <option value= 2>Approved</option>
                      <option value= 1>Processing</option>
                      <option value= 3>Pending</option>
                      <option value= 4>Overdue</option>
                      @endif

                      @if($user->status ==3)
                      <option value= 3>Pending</option>
                      <option value= 4>Overdue</option>
                      <option value= 2>Approved</option>
                      <option value= 1>Processing</option>
                      @endif


                      @if($user->status ==4)
                      <option value= 4>Overdue</option>
                      <option value= 1>Processing</option>
                      <option value= 2>Approved</option>
                      <option value= 3>Pending</option>
                     
                      @endif
                      {{-- <option value= 2>User</option> 
                      
                      <option value= 2>User</option>
                      <option value= 1>Admin</option> --}}
                     
                     


                   </select>
                  </div>

                   

                  <div class="form-group">
                    <label class="text-custom-black fs-14 fw-600">Interest Rate</label>
                    <select class="form-control form-control-custom" name="interest" required>
                        <option class='form-control'>Select</option>
                        @foreach ($interest as $rate )
                        <option class='form-control' value="{{ $rate->interest_rate }}" >{{ $rate->interest_rate }}</option>
                        @endforeach
                        
                      
                        
                  

                    </select>
                    {{-- <input type="text" name="bank" value="{{ $user->bank_name }}" class="form-control form-control-custom" required placeholder="Bank Name"> --}}
                </div>








                
                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div> --}}


                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>









        <!-- /.card-body -->
      
  </div>
  <!-- /.content-wrapper -->

  @endsection
  