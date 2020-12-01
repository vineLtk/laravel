<html>
  <head>
    <title>@yield('title', '博客')-这是一个测试网站</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">博客</a>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">关于</a></li>
    </ul>
  </div>
</nav>
<div class="container">@yield('content')</div>
</body>
</html>
