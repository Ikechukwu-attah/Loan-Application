@extends('layouts.backend')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $count_loans }}</h3>
                  @if($count_loans > 1)
                    <p>All Loans</p>
                  @else
                  <p>Loan</p>
                  @endif
              
              </div>
              <div class="icon">
                {{-- <i class="ion ion-social-usd-outline"></i> --}}
                <i class="	fas fa-money-check-alt nav-icon "></i>
              </div>
              <a href="{{ route('all-loan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $all_approved }}<sup style="font-size: 20px"></sup></h3>

                <p>Active Loans</p>
              </div>
              <div class="icon">
                {{-- <i class="ion ion-social-usd"></i> --}}
                <i class="fas fa-money-bill-wave-alt nav-icon "></i>
              </div>
              <a href="{{ route('active-loan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $all_pending }}</h3>
                @if($all_pending > 1)
                <p>Pending Loans</p>
                  @else
                  <p>Pending Loan</p>
                  @endif
               
              </div>
              <div class="icon">
                {{-- <i class="ion ion-person-add"></i> --}}
                <i class="fas fa-money-bill-wave nav-icon "></i>
              </div>
              <a href="{{ route('pending-loan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $all_overdue }}</h3>

                  @if($all_overdue > 1)
                    <p>Overdue Loans</p>
                 @else
                   <p>Overdue Loan</p>
                @endif
              </div>
              <div class="icon">
                {{-- <i class="ion ion-pie-graph"></i> --}}
                <i class="fas fa-money-check nav-icon "></i>
              </div>
              <a href="{{ route('overdue-loan') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->




   
  </div>
  
  
  </div>
  <!-- /.content-wrapper -->



  
  @endsection
  
 