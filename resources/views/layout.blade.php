<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  @yield('css')
</head>
<body>
  @include('navbar')

  <div class="container">
    <div class="row">
      {{-- エラーの表示 --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
      @yield('content')
    </div>
  </div>

  {{-- js埋め込み --}}
  <script type="text/javascript" src="{{asset('js/jquery-3.1.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>














