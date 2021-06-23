@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All users</h1>
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
                  <a href="{{ route('add-user') }}" class="btn btn-primary">Add user</a>
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
                      <th>Role</th>
                      <th>Date Created</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                    <tr>
                 
                  <td>{{ $user->id }}</td> 
                  <td>{{ $user->lastname }}</td> 
                  <td>{{ $user->firstname }}</td> 
                  <td>{{ $user->email }}</td>
                  <td>

                    @if($user->subscriber == 1)
                        Admin
                 
                      @else
                       User

                      @endif
                    
                    </td>
                  <td>{{ $user->created_at }}</td>  
                  
                  <td><a href="{{ route('edit-user', [$user->id]) }}" class="btn btn-success">Edit</a></td>
                    
                    @if($user->subscriber == 2 )
                  <td>
                 
                     <a href="{{ route('delete-user', [$user->id]) }}" class="btn btn-danger">Delete</a>
                 
                    
                  </td>
                  @else
                    <td>  
                 
                    </td>
                  @endif
      
                
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



  </div>
  <!-- /.content-wrapper -->

  @endsection
  