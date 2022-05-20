@extends('layouts.app')
@section('title', 'All cars')
@section('content')
<h1>List of cars:</h1>
    <ul>
        @foreach($cars as $car)
        <li><a href="/car/{{$car->id}}">Model: {{$car->title}}</a></li>

         @endforeach
    </ul>
@endsection