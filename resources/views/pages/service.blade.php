@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>This is Service pages</p>

    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>

@endsection