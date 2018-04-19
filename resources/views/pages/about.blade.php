@extends('layout')

@section('content')
    <h1>About Me: {{ $data['first_name'] }} : {{ $data['last_name'] }}</h1>
@endsection