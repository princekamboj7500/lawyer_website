@extends('layouts.app')
<?php 
    use App\LawyerProfile;
    use App\CustomUser;
    if(!isset($profiles))
        $profiles = CustomUser::where('type','lawyer')->get();
?>
@section('content')

@include('includes.newnavbar');

{{-- <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url({{ asset('images/background.jpg') }});color: rgba(9, 162, 255, 0.85);">
                <div class="text">
                        <h2>Web Portal for Lawyers</h2>
                        <p>Get started now.</p>
                        <button class="btn btn-outline-light btn-lg" type="button"><a href="/register" style="text-decoration: none; color:white;">Register</a></button>
                </div>
        </section>
</main> --}}

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    .main-container{
        margin:0;
        padding:0;
    }
    .wrap{
    background: #f2f2f2;
    font-family: 'Open Sans', sans-serif;
    }

    .search {
    width: 150%;
    position: relative;
    display: flex;
    }

    .searchTerm {
    width: 100%;
    border: 3px solid #00B4CC;
    border-right: none;
    padding: 5px;
    height: 40px;
    border-radius: 5px 0 0 5px;
    outline: none;
    color: #9DBFAF;
    font-size:19px;
    }

    .searchTerm:focus{
    color: #00B4CC;
    }

    .searchButton {
    width: 40px;
    border: 1px solid #00B4CC;
    background: #00B4CC;
    text-align: center;
    color: #fff;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 20px;
    }

    .wrap{
    width: 30%;
    margin-left:400px;
    margin-top:120px;
    /* position: absolute;
    left: 43%;
    top:90%; */
    }

    a.morelink {
        text-decoration:none;
        outline: none;
    }
    .morecontent span {
        display: none;
    }
        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .imagewithtext {
            vertical-align: middle;
            margin-left: 7rem;
        }
        
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            margin-left: 2em;
            -ms-flex-direction: column;
            padding: 0.5rem;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            height: calc(2.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        
        .search-box {
            width: 450px;
            height: 100px;
            position: relative;
            margin-left: 650px;
        }
        
        .input1 {
            position: absolute;
            top: 20px;
            right: 50px;
            box-sizing: border-box;
            width: 600px;
            height: 70px;
            border: 3px solid black;
            border-radius: 50px;
            padding: 0 20px;
            margin-left: 2rem;
            outline: none;
            font-size: 18px;
            transition: all 0.8s ease;
        }
        
        .btt {
            position: absolute;
            width: 90px;
            height: 90px;
            background: black;
            border-radius: 50%;
            top: 10px;
            border: 3px solid #eee;
            right: 40px;
            cursor: pointer;
            text-align: center;
            line-height: 80px;
            font-size: 20px;
            color: #fff;
            transition: all 0.8s ease
        }
        
        .jumbotron {
            margin-left: 1px;
        }
        
        .card1 {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            margin: 1px;
            -ms-flex-direction: column;
            padding: 0.5rem;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }
    </style>
    <div class="wrap" >
    <form id="search" method="POST" action="/search/lawyers" style="margin:0; padding:0">
        {{ csrf_field() }}
        <div class="search">
        <input type="text" class="searchTerm" name="searchTerm" placeholder="Search Lawyers...">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
      </div>
      </form>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    
                        <form method="POST" action="/search/lawyers/category">
                                {{ csrf_field() }}
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Civiel recht" name="category[]"> Civiel recht</label>
                            </div>
                       
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Strafrecht" name="category[]"> Strafrecht</label>
                            </div>
                 
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Arbeidsrecht" name="category[]"> Arbeidsrecht</label>
                            </div>
                      
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Overig" name="category[]"> Overig</label>
                            </div>
                            <br>
                            <div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Location</div>
                <div class="card-body">
                    
                        <form method="POST" action="/search/lawyers/category">
                                {{ csrf_field() }}
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Noord-Nederland" name="location[]"> Noord-Nederland</label>
                            </div>
                       
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Midden-Nederland" name="location[]"> Midden-Nederland</label>
                            </div>
                 
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Zuid-Nederland" name="location[]"> Zuid-Nederland</label>
                            </div>
                      
                            <div class="input-group-text">
                                <label><input type="checkbox" value="Overig" name="location[]"> Overig</label>
                            </div>
                            <br>
                            <div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="jumbotron">
                @if(count($profiles)==0)
                    <h5>No Lawyers Found!</h5>
                @endif
                @foreach ($profiles->all() as $profile)
                    <div class="card1">
                        <div class="card-body">
                            <h5 class="card-text">Name: {{$profile->name}}</h5>
                            <p class="card-text">Category: 
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
                            </p>
                            <p class="card-text">Experience: {{$profile->experience_years}}</p>
                            <p class="card-text">Location: @if ($profile->preferred_regions)
                                @php
                                    $preferred_regions = json_decode($profile->preferred_regions, true);
                                @endphp
                                @if (is_array($preferred_regions))
                                    {{ implode(', ', $preferred_regions) }}
                                @else
                                    {{ $profile->preferred_regions }}
                                @endif
                                @else
                                    No Location listed
                                @endif
                            </p>
                            <p class="card-text">Availability: {{$profile->availability}}</p>
                            <a href="/show/profile/{{$profile->id}}" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                @endforeach
               </div>
        </div>
    </div>
@endsection