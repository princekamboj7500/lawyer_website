@extends('admin/main')
@section('content')
  <div class="d-flex justify-content-center">
      <div class="w-75" style="margin-top:140px">
          <a href="/admin" style="padding-left:20px;color:#000;" class="back-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
          <h1 class="text-center">User Details</h1>
          <br>
          <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">User Type</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          {{ $profile->type }}
                      </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $profile->name }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $profile->email }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $profile->phone }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $profile->address }}
                  </div>
                </div>
                @if($profile->type == 'lawyer')
                  <div id="lawyer-details">
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Office Role</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $profile->office_role }}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Availability</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $profile->availability }}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Specializations</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        @if(!empty($profile->specializations))
                          {{ implode(', ', json_decode($profile->specializations)) }}
                        @else
                          No specializations listed.
                        @endif
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Experience</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $profile->experience_years }}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Preferred Regions</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        @if(!empty($profile->preferred_regions))
                          {{ implode(', ', json_decode($profile->preferred_regions)) }}
                        @else
                          No preferred regions listed.
                        @endif
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Services</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        @if(!empty($profile->services))
                          {{ implode(', ', json_decode($profile->services)) }}
                        @else
                          No services listed.
                        @endif
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Online Cases</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{ $profile->online_cases }}
                      </div>
                    </div>
                  </div>
                @endif
                @if (!auth()->check())
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="/request/appointment/{{ $profile->user_id }}">Request Lawyer</a>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>
      </div>
  </div>
@endsection
