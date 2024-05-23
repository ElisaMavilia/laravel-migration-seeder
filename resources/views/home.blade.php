@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container mt-4">
    <h1 class="pt-5 pb-3">Departures</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Platform</th>
                <th scope="col">Departure time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Train Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                    <tr class="table-dark table-striped">
                        
                        <td>{{$train->platform}}</td>
                        <td class="text-success">{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td scope="row">{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->train_code}}</td>

                    </tr>
                </tbody>
            @endforeach
    </table>
    </div>
</main>

@endsection