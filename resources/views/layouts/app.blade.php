<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@yield('pageCss')
</head>
<body>
 
@yield('main')
 

</body>
</html>