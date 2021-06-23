<div class="card">
    <div class="card-header">
     <h2>All loans</h2>

      <div class="card-tools">
        <ul class="pagination pagination-sm float-right">
          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table">
        <thead>
          <tr>
            {{-- <th style="width: 1px">Id</th> --}}
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Status</th>
            <th>Application date</th>
            <th>Action</th>
           
          
          </tr>
        </thead>
      
        <tbody>
          @foreach($all_loans as $loan)
            <tr>
            
                <td>{{ $loan->user->firstname }}</td>
                <td>{{ $loan->user->lastname }}</td>
                <td>{{ $loan->user->email }}</td>
                <td>
                  @if($loan->Status == 1)
                    Processing
                  @endif

                  @if($loan->Status == 2)
                    Approved
                  @endif

                  @if($loan->Status == 3)
                    Pending
                  @endif

                  @if($loan->Status == 4)
                   Overdue
                  @endif
                
                </td>
                <td>{{ $loan->application_date}}</td>
                <td>
                  <a href="{{ route('status', [$loan->id]) }}" class="btn btn-primary">Change Status</a> | <a href="{{ route('delete-loan',[$loan->id]) }}" class="btn btn-danger">Delete</a>

            </tr>
            @endforeach
        </tbody>
  
      </table>
    </div>
    <!-- /.card-body -->
  </div>