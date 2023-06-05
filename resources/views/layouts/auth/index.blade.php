<!doctype html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>@yield('title')</title>
  
  @vite('resources/scss/pages/auth.scss')
</head>
<body class="bg-gray-100">
  <div class="flex w-full">
    <div class="h-screen w-1/2">
      <img class="object-cover h-full w-full" src="{{ asset('/assets/img/auth/inscription.png') }}" alt="Authentication inscription image.">
    </div>
    <div class="w-1/2">
      @yield('content')  
    </div>
  </div> 
</body>
</html>
