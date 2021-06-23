@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All loans</h1>
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
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-12 ">
           
            <!-- /.card -->
  
            <!-- Use this table for the loan -->
            <div class="card">
              <div class="card-header">
                {{-- <h3 class="card-title">DataTable with default features</h3> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 1px">Id</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>status</th>
                    <th>Loan Amount</th>
                    <th>Interest Rate</th>
                    <th>Disbursment date</th>
                    <th>Repayment date</th>
                    <th>Application date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($all_loans as $loan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $loan->user->firstname }}</td>
                    <td>{{ $loan->user->lastname }}</td>
                    <td>{{ $loan->user->email }}</td>
                    <td>
                      @if($loan->status == 1)
                        Processing
                      @endif
    
                      @if($loan->status == 2)
                        Approved
                      @endif
    
                      @if($loan->status == 3)
                        Pending
                      @endif
    
                      @if($loan->status == 4)
                       Overdue
                      @endif
                    
                    </td>
                    <td>{{ $loan->requested_amount }}</td>
                    <td>{{ $loan->interest_rate }}  % </td>
                    <td>{{ $loan->disbursement_date }}</td>
                    <td>{{ $loan->repayment_date }}</td>
                    <td>{{ $loan->created_at}}</td>
                    {{-- <td>
                      <a href="{{ route('status', [$loan->id]) }}" class="btn btn-primary">Change status</a> | <a href="{{ route('delete-loan',[$loan->id]) }}" class="btn btn-danger">Delete</a> </td> --}}
    
                </tr>
                @endforeach
                  </tbody>
  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->




 


  @endsection
  