@extends('layouts/app')
  <?php  
      use App\CustomUser;
      $user = auth()->user();
      $user_id = $user->id;
      
      $profile = CustomUser::where('id',$user_id)->first();
      //dd($profile);
  ?>
  @section('content')
<style>   
    .header {
        margin-top: 2%;
    }
    .description ul li {
        list-style: none;
    }
    .box-1{
        margin-bottom: 1%;
    }
    .button {
        background-color: #008CBA;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
          align-items: center;
        }
        .button2:hover {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        </style>
<div class="col-md-9" style="margin: auto;margin-top: 140px;">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="/update/profile/{{$user_id}}" method="POST">
                          @csrf
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="Your Name" class="form-control here" required="required" type="text" value="{{$profile->name}}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" type="email" value="{{$profile->email}}" disabled>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="phone" class="col-4 col-form-label">Phone</label> 
                                <div class="col-8">
                                  <input id="phone" name="phone" placeholder="Phone" class="form-control here" type="text" value="{{$profile->phone}}">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Office Address</label> 
                                <div class="col-8">
                                  <input id="address" name="address" placeholder="Address" class="form-control here" value="{{$profile->address}}" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Office Role</label> 
                                <div class="col-8">
                                <select id="select" name="office_role" class="custom-select">
                                  <option value="Partner" {{ old('office_role', $profile->office_role) == 'Partner' ? 'selected' : '' }}>Partner</option>
                                  <option value="Senior lawyer" {{ old('office_role', $profile->office_role) == 'Senior lawyer' ? 'selected' : '' }}>Senior Lawyer</option>
                                  <option value="Junior lawyer" {{ old('office_role', $profile->office_role) == 'Junior lawyer' ? 'selected' : '' }}>Junior Lawyer</option>
                                </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">How many years of experience do you have in your specializations?</label> 
                                <div class="col-8">
                                <select id="select" name="experience_years" class="custom-select">
                                  <option value="0-2 jaar" {{ old('experience_years', $profile->experience_years) == '0-2 jaar' ? 'selected' : '' }}>0-2 jaar</option>
                                  <option value="3-5 jaar" {{ old('experience_years', $profile->experience_years) == '3-5 jaar' ? 'selected' : '' }}>3-5 jaar</option>
                                  <option value="6-10 jaar" {{ old('experience_years', $profile->experience_years) == '6-10 jaar' ? 'selected' : '' }}>6-10 jaar</option>
                                  <option value="11+ jaar" {{ old('experience_years', $profile->experience_years) == '11+ jaar' ? 'selected' : '' }}>11+ jaar</option>
                                </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
</div>
@endsection
