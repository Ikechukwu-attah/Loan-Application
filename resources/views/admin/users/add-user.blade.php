@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
        

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('add') }}" method="post">
               @csrf
              <div class="card-body">
                 
                <div class="form-group">
                    <label for="exampleInputFirstname">Firstname</label>
                    <input type="text" name="firstname"  class="form-control" id="exampleInputFirstname" placeholder="Enter firstname">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLastname">Lastname</label>
                    <input type="text"  name="lastname" class="form-control" id="exampleInputLastname" placeholder="Enter lastname">
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputRole">Role</label>
                   <select class="form-control" name="subscriber">
                      <option>Select</option> 
                      <option value= 1>Admin</option>
                      <option value= 2>User</option>


                   </select>
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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









        <!-- /.card-body -->
      
  </div>
  <!-- /.content-wrapper -->

  @endsection
  