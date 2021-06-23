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
              <h3 class="card-title"> Basic settings </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('update-settings', [$user->id]) }}"  method="POST"  enctype="multipart/form-data">
               @csrf
              <div class="card-body">
                 <div class="row">
                    <div class="col-lg-12">
                       <div class="form-group">
                    <label for="exampleInputFirstname">Site Name</label>
                    <input type="text" name="site-name" value="{{ $user->site_name }}" class="form-control" id="sitename" placeholder="Change site name">
                       </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                    <label for="exampleInputFirstname">Site Logo</label>
                    <input type="file" name="site-logo" value="{{ $user->logo }}" class="form-control" id="sitelogo" placeholder="Change site logo">
                      </div>
                   </div>

                   <div class="col-lg-6">
                     <div class="form-group">
                      <label for="exampleInputFirstname">Site Logo</label>
                      <img src="{{ asset('uploads/profile/' .$user->logo) }}"   class="rounded-circle"  width="100px" height="100px" alt="logo-pixs">
                    
                    </div>

                   </div>
              </div>

              {{-- backbround header image --}}
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                <label for="exampleInputFirstname">Background header image</label>
                <input type="file" name="site-logo" value="{{ $user->background_header }}" class="form-control" id="sitelogo" placeholder="Change header background">
                  </div>
               </div>

               <div class="col-lg-6">
                 <div class="form-group">
                  <label for="exampleInputFirstname">Background header image</label>
                  <img src="{{ asset('uploads/profile/' .$user->background_header) }}"   class="rounded-circle"  width="100px" height="100px" alt="background-pixs">
                
                </div>

               </div>
          </div>
                 
                   
                   <div class="row">
                    <div class="col-lg-12"> 
                       <div class="form-group">
                      <label for="exampleInputFirstname">Footer</label>
                      <input type="text" name="site-footer" value="{{ $user->footer }}"  class="form-control" id="sitefooter" placeholder="Change site footer">
                       </div>
                   </div> 
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

              
             
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

              </div>
            
            </form>
        </div>

          </div>









        <!-- /.card-body -->
      
  </div>
  <!-- /.content-wrapper -->

  @endsection
  