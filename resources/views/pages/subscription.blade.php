@extends('layouts/app')
@section('content')
    <div id="content" style="margin-top:140px">
        <div class="container">
            <h2 class=" text-bold m-0 font-weight-normal">Subscription Plans</h2>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plan Type</th>
                    <th scope="col">Plan Date</th>
                    <th scope="col">Expires On</th>
                    <th scope="col">Renewal Date</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($plans->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">No data available</td>
                        </tr>
                    @else
                        @foreach($plans as $plan)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $plan->plan_type }}</td>
                            <td>{{ $plan->start_date }}</td>
                            <td>{{ $plan->end_date }}</td>
                            <td>{{ $plan->renewal_date }}</td>
                            <td><button class="btn btn-primary">Renew</button></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>

            </table>
        </div>
    </div>
@endsection