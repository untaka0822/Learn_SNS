@extends('layout')

@section('content')
  <div class="col-xs-6 col-xs-offset-3">
    <form method="POST" action="/tweets">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Tweet:</label>
        <input type="text" name="tweet" class="form-control" value="{{old('tweet')}}">
      </div>

      <input type="hidden" name="member_id" value="1">

      <div class="form-group">
        <input type="submit" value="Tweet" class="btn btn-primary form-control">
      </div>
    </form>
  </div>
@endsection












