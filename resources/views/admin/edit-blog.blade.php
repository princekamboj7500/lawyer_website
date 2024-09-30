@extends('admin/main')
@section('content')
    <div id="content" style="margin-top:100px">
      <div class="container">
        <a href="/admin/blogs" style="padding-left:0px;color:#000;" class="back-btn">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
        </a>
        <h1 class="text-center">Edit Blog</h1>
        <form action="{{ url('admin/update/blog/' . $blog->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endsession
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" required id="title" class="form-control" value="{{ $blog->blog_title }}">
              @error('title')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>

          <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" id="content" class="form-control">{{ $blog->blog_content }}</textarea>
              @error('content')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>

            <div class="form-group" style="display:grid; width:20%"> 
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" style="display: none;">
                <img id="imagePreview" src="{{ asset('images/' . $blog->blog_image) }}" alt="Click to change image" style="cursor: pointer; width: 150px; height: 150px;">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('js/smoothproducts.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script>
        $(document).ready(function(){
            // When the image is clicked, trigger the file input click
            $('#imagePreview').click(function(){
                $('#image').click();
            });

            // When the file input changes (i.e., when a file is selected)
            $('#image').change(function(){
                readURL(this);
            });

            // Function to read the file and preview it
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]); // Convert the file to a data URL and display it
                }
            }
        });

    </script>
@endsection

