@foreach($tweets as $tweet) 
  {{ $tweet['tweet'] }} <br>
  {{-- echo $tweets[0]['tweet'] --}}
@endforeach