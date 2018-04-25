@extends('layout')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
@endsection

@section('content')
  @for($i=0;$i<count($tweets);$i++)
    <div>
      {{ $tweets[$i]['tweet'] }} : {{ $tweets[$i]['created_at'] }}
      <a href="/tweets/{{ $tweets[$i]['tweet_id'] }}">Details</a>
    </div>
  @endfor
@endsection




{{-- コメントアウト --}}
