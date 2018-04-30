@extends('layout')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
@endsection

@section('content')
  
  <div class="col-xs-3">
    ユーザー情報
  </div>

  <div class="col-xs-9">
    {{-- Flash message --}}
    @if(Session::has('delete_message'))
      <div class="alert alert-success">
        {{ Session::get('delete_message') }}
        {{-- echo $_SESSION['delete_message'] --}}
      </div>
    @endif

    @for($i=0;$i<count($tweets);$i++)
      <div class="thumbnail">
        {{ $tweets[$i]['tweet'] }} : {{ $tweets[$i]['created_at'] }}
        <a href="/tweets/{{ $tweets[$i]['tweet_id'] }}">Details</a>
      </div>
      
    @endfor

  </div>
  
@endsection




{{-- コメントアウト --}}








