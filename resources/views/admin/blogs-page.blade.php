@extends('admin/main')
@section('content')
    <div class="modal fade" role="dialog" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Blog</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" required id="title" class="form-control" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" required class="form-control">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" style="padding-bottom:36px">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
            <div class="card-header py-3" style="background-color: rgba(0, 0, 0, .03);border: 1px solid #D0D3D4;">
                <p class="text-dark m-0 font-weight-bold">Blogs <span style="margin-bottom:5px;padding:0;justify-content:center" class="float-right"><button class="btn btn-primary"style="margin:0;padding:0"data-toggle="modal" data-target="#myModal"><a style="margin:0;padding:0 20px 0 20px" class="btn btn-primary" type="button">Add</a></button></span></p>
            </div>
            <div class="card-body" style="border:1px solid #D0D3D4">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="datatable">
                      <thead>
                          <tr>
                              <th>Sr No</th>
                              <th>Type</th>
                              <th>Blog Title</th>
                              <th>Blog Image</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            $count = 0;
                        ?>
                        @foreach ($blogs as $blog)
                        <?php
                            $count = $count+1;
                        ?>
                        <tr>
                          <td>{{$count}}</td>
                          <td>{{ $blog->page }}</td>
                          <td>{{ $blog->blog_title }}</td>
                          <td><img height="50" width="50" src="{{ asset('images/' . $blog->blog_image) }}"></td>
                          <td>
                            <a class="btn btn-primary btn-sm" href="/admin/edit/blog/{{$blog->id}}">Edit</a>
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
