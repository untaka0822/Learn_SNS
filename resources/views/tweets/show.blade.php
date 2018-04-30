@extends('layout')

@section('content')
  <div class="col-xs-3">
    ユーザー情報
  </div>

  <div class="col-xs-9">
    <div>
      {{ $tweet['tweet'] }} : {{ $tweet['created_at'] }}
      <form method="POST" action="/tweets/{{$tweet['tweet_id']}}" style="display: inline;">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger btn-xs">
      </form>
    </div>

    <a href="/tweets" class="btn btn-default">Timeline</a>
  </div>
@endsection













