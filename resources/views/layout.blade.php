<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  @yield('css')
</head>
<body>
  <div class="container">
    <div class="row">
      {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
      @yield('content')
    </div>
  </div>
</body>
</html>