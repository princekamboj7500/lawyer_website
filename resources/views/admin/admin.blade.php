@extends('admin/main')
@section('content')
  <div id="content" style="margin-top:140px">
    <div class="container">
      @session('success')
        <div class="alert alert-success" role="alert"> 
            {{ $value }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endsession
      @session('error')
        <div class="alert alert-danger" role="alert"> 
            {{ $value }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endsession
      <div class="card-header py-3" style="background-color:# ECF0F1;border: 1px solid #c1c9cb;">
        <p class="text-dark m-0 font-weight-bold">Users</p>
      </div>
      <div class="card-body" style="border: 1px solid #c1c9cb;">
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
          <table class="table dataTable my-0" id="datatable">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Type</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-md-center">Actions</th>
              </tr>
            </thead>
            <tbody> 
              <?php 
                $count = 0;
              ?>
              @foreach ($result as $info)
              <?php 
                $count+=1;
              ?>
              <tr>
                <td>{{$count}}</td>
                <td>{{$info->type}}</td>
                <td>{{$info->name}}</td>
                <td>{{$info->email}}</td>
                <td class="text-md-center">
                  <a href="/admin/user/show/{{$info->id}}" class="btn btn-primary">View</a>
                  {{-- <a href="javascript:void(0)" class="btn btn-success">Edit</a> --}}
                  {{-- <a href="javascript:void(0)" class="btn btn-danger">Delete</a> --}}
                  @if($info->is_active == 1)
                    <a href="{{ route('admin.user.active', $info->id) }}" class="btn btn-info">Deactivate</a>
                  @else
                    <a href="{{ route('admin.user.active', $info->id) }}" class="btn btn-secondary" style="width:110px">Activate</a>
                  @endif
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





