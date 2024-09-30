@extends('admin/main')
@section('content')
  <div id="content" style="margin-top:140px">
    <div class="container">
      <div class="card-header py-3" style="background-color:# ECF0F1;border: 1px solid #c1c9cb;">
        <p class="text-dark m-0 font-weight-bold">Cases</p>
      </div>
      <div class="card-body" style="background-color:#ECF0F1">
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
          <table class="table dataTable my-0" id="datatable">
            <thead>
              <tr>
                <th>Case No</th>
                <th>Client Name</th>
                <th>Lawyer Name</th>
                <th>Category</th>
                <th>Status</th>                    
                <th>Date of filing</th>
                <th>Actions</th>
              </tr>
            </thead>
                <tbody> 
                  @foreach ($cases as $case)
                  <tr>
                    <td>{{ $case->case_no }}</td>
                    <td>{{ $case->client_name }}</td> 
                    <td>{{ $case->lawyer_name }}</td>
                    <td>{{ $case->category }}</td>
                    <td>{{ $case->status }}</td>
                    <td>{{ $case->date_of_filing }}</td>
                    <td>
                      <a class="btn btn-primary btn-sm" href="/admin/cases/show/{{$case->id}}">View</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    
  <script>
    $(document).ready(function($) {
      $('#datatable').DataTable({
          ordering: true
        });
    });
  </script>
@endsection






