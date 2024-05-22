@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Departures</h1>
   <ul>
       @foreach ($trains as $train)
       <li>{{$train->company}}</li>
       @endforeach
   </ul>
   
    </div>
</main>


