<!doctype html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>@yield('title')</title>
  
  @vite('resources/scss/pages/auth.scss')
</head>
<body>
  <div class="grid md:grid-cols-2">
    <div class="hidden h-screen md:block">
      <img class="object-cover w-full h-full" src="{{ asset('/assets/img/auth/inscription.png') }}" alt="Authentication inscription image.">
    </div>
    <div class="flex flex-col h-screen overflow-auto px-15 md:px-30">
      @include('layouts.auth.header')

      <main class="container flex-1 my-50 lg:my-100">
        @yield('content') 
      </main> 

      @include('layouts.auth.footer')
    </div>
  </div> 
</body>
</html>
