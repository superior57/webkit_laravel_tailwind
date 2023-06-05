<!doctype html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>@yield('title')</title>
  
  @vite('resources/scss/pages/app.scss')
</head>
<body class="bg-gray-100">
  @yield('content')  

  @vite('resources/js/app.js')
</body>
</html>
