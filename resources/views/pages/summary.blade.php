@extends('layouts/app')
@section('content')

<style>

</style>
<div class="col-md-9" style="margin: auto;margin-top: 140px;">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Case Summary</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(isset($session['bot_evidence']))
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Name</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_user_name']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Region</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_region']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Consulated Laywyer?</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_consulted_lawyer']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Case Type</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_issue_type']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Steps Taken</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_legal_steps_taken']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Start Date</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_start_date']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Urgency</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_urgent']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Parties Involved</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_parties']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Other Parties Involved</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_other_parties']}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Relationship With Parties</label> 
                            <div class="col-8">
                                <input class="form-control here" type="text" value="{{$session['bot_relationship']}}">
                            </div>
                        </div>
                        
                    </form>
                    @endif
                    
                    @foreach ($lawyers as $profile)
                    <div class="lawyer-item border-box" style="border: 1px solid #dbc7c7;margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-sm-7 col-xs-12">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="media-object img-responsive" alt="" style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3); width:86px;" src="https://www.dgvaishnavcollege.edu.in/dgvaishnav-c/uploads/2021/01/dummy-profile-pic.jpg">
                                    </div>
                                    <div class="media-body">
                                        <div class="small-info">
                                            <a href="#" title="Advocate Shubham Aggarwal">
                                            <h2 class="media-heading" style="line-height:1.1;">
                                                Advocate {{$profile->name}}</h2>
                                            </a>
                                            <div class="location">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span>{{$profile->address}}</span> 
                                            </div>
                                            <div class="experience">
                                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                <span>{{$profile->experience_years}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-5 alpha hidden-xs">
                                    <div class="rating">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    <span class="score">4.9 | 5</span>
                                    </div>
                                    <div class="area-skill">
                                    <strong>Practice area &amp; skills</strong>
                                    <div>
                                        @if ($profile->specializations)
                                        @php
                                            $specializations = json_decode($profile->specializations, true);
                                        @endphp
                                        @if (is_array($specializations))
                                            {{ implode(', ', $specializations) }}
                                        @else
                                            {{ $profile->specializations }}
                                        @endif
                                        @else
                                            No specializations listed.
                                        @endif
                                    </div>
                                    </div>
                                    <div class="cta margin-small-top">
                                        <p class="card-text">Availability: {{$profile->availability}}</p>
                                        <a href="/show/profile/{{$profile->id}}" class="btn btn-primary">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    @endforeach

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
