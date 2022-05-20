@extends('layouts.app')
@section('title', 'Single car')
@section('content')
    <h1>Information about a car:</h1>
        <ul>
            <li>ID: {{$car->id}}</li>
            <li>Model: {{$car->title}}</li>
            <li>Producer: {{$car->producer}}</li>
            <li>Number of doors: {{$car->number_of_doors}}</li>
        </ul>
@endsection