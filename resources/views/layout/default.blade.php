<html>
  <head>
    <title>@yield('title', '博客')-这是一个测试网站</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
<body>
@include('layout._header')
<div class="container content">@yield('content')</div>
@include('layout._footer')
</body>
</html>
