@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Interest</h1>
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
                <a href="{{ route('add-interest') }}" class="btn btn-primary mb-3">Add Interest Rate</a>
                <table id="example1" class="table table-bordered table-striped">
                 
                  <thead>
                  <tr>
                    <th style="width: 1px">Id</th>
                    <th>Interest Rate</th>
                    <th>Repayment Date</th>
                    <th>Week Days</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $users)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $users->interest_rate }} %</td>
                    <td>{{ $users->repayment_date }}</td>
                    <td>{{ $users->week_days }}</td>
                    <td>
                      <a href="{{ route('edit-interest', [$users->id]) }}" class="btn btn-primary">Edit</a> | <a href="{{ route('delete-interest',[$users->id]) }}" class="btn btn-danger">Delete</a> </></td>
    
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
  