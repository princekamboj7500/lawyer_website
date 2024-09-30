@extends('admin/main')
@section('content')
  <div id="content" style="margin-top:100px">
    <div class="container">
      <h3 class="text-center pb-2">Edit Landing Page</h3>
      <div class="shadow p-3 mb-5 bg-white rounded">
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
        <form action="{{ route('update.content') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="user_benefits" style="font-weight:bold;">User Benefits</label>
              <textarea id="user_benefits" name="user_benefits">{{$content->user_benefits}}</textarea>
          </div>
          <div class="form-group">
              <label for="lawyer_benefits" style="font-weight:bold;">Lawyer Benefits</label>
              <textarea id="lawyer_benefits" name="lawyer_benefits">{{$content->lawyer_benefits}}</textarea>
          </div>
          <div class="form-group">
              <label for="how_it_works" style="font-weight:bold;">How It Works</label>
              <textarea id="how_it_works" name="how_it_works">{{$content->how_it_works}}</textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Initialize CKEditor with image upload capability
    ClassicEditor
        .create(document.getElementById("user_benefits"), {
            ckfinder: {
              uploadUrl: '{{ route('upload', ['_token' => csrf_token() ]) }}'
            }
        })
        .then(editor => {
            console.log('User Benefits Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error initializing User Benefits Editor', error);
        });

    ClassicEditor
        .create(document.getElementById("lawyer_benefits"), {
            ckfinder: {
              uploadUrl: '{{ route('upload', ['_token' => csrf_token() ]) }}' // Route to handle image upload
            }
        })
        .then(editor => {
            console.log('Lawyer Benefits Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error initializing Lawyer Benefits Editor', error);
        });
        ClassicEditor
        .create(document.getElementById("how_it_works"), {
            ckfinder: {
              uploadUrl: '{{ route('upload', ['_token' => csrf_token() ]) }}'
            }
        })
        .then(editor => {
            console.log('how it works Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error initializing how it works  Editor', error);
        });
  </script>
@endsection
