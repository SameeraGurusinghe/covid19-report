@extends('layouts.app')

@section('title', 'COVID-19 STAT REPORT - SRI LANKA')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">COVID-19 STAT REPORT - SRI LANKA</h1>

        <div class="row">
            @foreach ($covid19Data as $data)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Update Date & Time</h5>
                            <span class="list-unstyled">
                                <h4>{{ $data->date }}</h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Active Cases</h5>
                            <span class="list-unstyled">
                                <h1>{{ $data->active_cases }}<h1>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Cases</h5>
                            <span class="list-unstyled">
                                <h1>{{ $data->total_cases }}</h1>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Deaths</h5>
                            <span class="list-unstyled">
                                <h1>{{ $data->deaths }}</h1>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Recovered</h5>
                            <span class="list-unstyled">
                                <h1>{{ $data->recovered }}</h1>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Patient in Hospitals</h5>
                            <span class="list-unstyled">
                                <h1>{{ $data->patient_in_hospitals }}</h1>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection