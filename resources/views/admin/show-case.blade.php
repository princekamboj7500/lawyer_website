@extends('admin/main')
@section('content')
    <style type="text/css">
        .case_details_table , tbody , tr , td ,th{
            border:1px solid #555;
            padding: 10px;
            background-color: #FFF;
        }
        .table{
            margin-left: 10px;
        }
        .h2class {
            font-size: 1.1em;
            font-weight: normal;
            padding-top: -10px;
            margin-bottom: 10px;
        }
        .container{
            margin-top: 10px;
            margin-bottom:10px;
        }
        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            margin:center;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            align-items: center;
        }
        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        </style>
    <?php
        use App\CustomUser;
        use App\Hearing;

        $user = auth()->user();
        $userType = "client";
        if (strcmp($user->type, "lawyer") == 0) {
            $userType = "lawyer";
        }

        $client = CustomUser::find($case['client_id']);
        $lawyer = CustomUser::find($case['lawyer_id']);
    ?>
    <div style="margin-top:140px">
    <a href="/admin/cases" style="padding-left:76px;color:#000;" class="back-btn">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
    </a>
    <h1 class="text-center">Case Details</h1>
    <br>
    <div class="container">
        <table width="100%" class="case_details_table" style="font-size:1em; ">
            <tr>
                <td ><label style="font-weight:bold;">Client's Name</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$client->name}}</td>
            </tr>
            <tr>
                <td ><label style="font-weight:bold;">Client's Email</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$client->email}}</td>
            </tr>
            <tr>
                <td ><label style="font-weight:bold;">Client's Phone</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$client->phone}}</td>
            </tr>
            <tr>
                <td ><label style="font-weight:bold;">Lawyer's Name</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$lawyer->name}}</td>
            </tr>
            <tr>
                <td ><label style="font-weight:bold;">Lawyer's Email</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$lawyer->email}}</td>
            </tr>
            <tr>
                <td ><label style="font-weight:bold;">Lawyer's Phone</label>
                </td>
                <td colspan="3" style="font-size:1.1em;">{{$lawyer->phone}}</td>
            </tr>
            <tr>
                <td><label style="font-weight:bold;">Case Type</label></td>
                <td colspan="3" style="text-transform:uppercase;font-size:1.1em;">{{$case->type}}</td>
            </tr>
            <tr>
            {{-- <td>
                <label style="font-weight:bold;">Filing Number</label>
            </td>
            <td style="font-weight:bold;">{{$case->filing_number}} &nbsp;</td> --}}
            <td >
                <label style="font-weight:bold;">Filing Date</label>
            </td>
            <td style="font-weight:bold;"> {{$case->filing_date}} &nbsp;</td>
            </tr>

            {{-- <tr>
                <td><label style="font-weight:bold;">Registration Number</label></td>
                <td>
                <label style="font-weight:bold;">{{$case->registration_number}}</label>
                </td>
                <td><label style="font-weight:bold;">Registration Date</label>
                </td>
                <td>
                <label style="font-weight:bold;">{{$case->registration_date}}</label>
                </td>
            </tr> --}}
            <tr>
                <td><b>
                    <label style="font-weight:bold;">CNR Number</label></b>
                </td>
                <td colspan="3">
                    <span style="font-size:1.2em;font-weight:bold;color:#df3527">{{$case->cnr}}</span>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <h2 class=" text-bold m-0 font-weight-normal">Case Status</h2>
        <br>
        <table width="100%"  class="case_details_table" style="font-size:1em;">
            <?php
            $hearing = Hearing::where('case_id', $case->case_no)->orderBy('id')->limit(1)->get();

            foreach ($hearing->all() as $h) {
                $firstHearing = $h->starting_date;
            }
            $hearing = Hearing::where('case_id', $case->case_no)->orderBy('id', 'DESC')->limit(1)->get();
            foreach ($hearing->all() as $h) {
                $nextHearing = $h->next_hearing_date;
            }
            ?>

            {{-- <tr>
                <td>
                <label><strong>First Hearing Date </strong></label>
                </td>
            <td colspan="4"><strong>{{$firstHearing}}</strong></td>
            </tr> --}}
            {{-- <tr>
                <td><label><strong>Next Hearing Date</strong></label></td>
                <td colspan="4"><strong>{{$nextHearing}}</strong></td>
            </tr> --}}
            <tr>
                <td><label><strong>Stage of Case</strong></label></td>
                <td colspan="4"><label>{{$case->status}}</label></td>
            </tr>
            <tr>
                <td><label><strong>Court Number </strong></label></td>
                <td colspan="4"><label>{{$case->court_number}}</label></td>
            </tr>
            <tr>
                <td><label><strong>Judge</strong></label></td>
                <td colspan="4"><label>{{$case->judge_name}}</label></td>
            </tr>

        </table>

        <br>
        <h2 class=" text-bold m-0 font-weight-normal">Case Related Acts @if(strcmp($userType,'lawyer')==0)<span class="float-right"></span><button class="button button2 float-md-right " data-toggle="modal" data-target="#update_acts">Update Acts</button>@endif</h2>
            <br>
        <table width="100%"  class="case_details_table" style="font-size:1em;">
            <tbody>
            <tr>
                <th><strong>Under Act(s)</strong></th><th><b>Under Section(s)</b></th>
            </tr>
            <tr>
                <td><label><strong>PENAL CODE</strong></label></td>
                <td colspan="4"><label><strong> {{$case->penal_code}}</strong></label></td>
            </tr>


            </tbody>
        </table>

        <br>
        <h2 class=" text-bold m-0 font-weight-normal">Petitioner @if(strcmp($userType,'lawyer')==0)<span class="float-right"></span><button class="button button2 float-md-right " data-toggle="modal" data-target="#update_pdetails">Update Details</button>@endif</h2>
        <br>
        <table width="100%" class="case_details_table" style="font-size:1em;">
            <tbody>
            <tr>

                <td><label><strong>Petitioner</strong></label></td>
                <td colspan="4"><label>{{$case->petitioner}}</label></td>

            </tr>

            </tbody>
        </table>
        <br>

        <h2 class=" text-bold m-0 font-weight-normal">Respondent @if(strcmp($userType,'lawyer')==0)<span class="float-right"></span><button class="button button2 float-md-right " data-toggle="modal" data-target="#update_rdetails">Update Details</button> @endif</h2>
        <br>
        <table width="100%" align="center" border="1" class="case_details_table" style="font-size:1em;">
            <tbody>
            <tr>

                <td><label><strong>Respondent</strong></label></td>
                <td colspan="4"><label>{{$case->respondent}}</label></td>

            </tr>

            </tbody>
        </table>

        <br>
        <br>
        <h2 class=" text-bold m-0 font-weight-normal">Case Description<span class="float-right"></span></h2>
        <br>
        <table width="100%" class="case_details_table" style="font-size:1em;">
        <tbody>
            <tr>
            <td colspan="4"><label>{{$case->description}}</label></td>
        </tr>
        </tbody>
        </table>
        <br>
        <h2 class=" text-bold m-0 font-weight-normal">Case Related Documents<span class="float-right"></span></h2>
        <br>
        <table id="Table" width="100%" align="center" border="1" class="case_details_table" style="font-size:1em;">
            <tbody class="text-center">
            <tr>
                <th scope="col" >Document Name<br><br><i id="5" class="arrow down"></i></th>
                <th scope="col" >Document Description<br><br></th>
                <th scope="col" >Uploaded by<br><br></th>
                <th scope="col" >Uploaded On<br><br><i id="8" class="arrow down"></i></th>
                <th scope="col" >view<br><br><br></th>

            </tr>
            @foreach ($docs as $doc)
            <tr>
                <td>{{$doc->document_name}}</td>
                <td>{{$doc->description}}</td>
                <td>
                @if ($doc->uploadedBy)
                    {{$doc->uploadedBy->name}}
                @else

                @endif
                </td>
                <td>{{$doc->upload_on}}</td>
                <td><a href="/view/{{$doc['path']}}"> Preview</a><br>
                <a href="/download/{{$doc['path']}}">Download</a></td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection




