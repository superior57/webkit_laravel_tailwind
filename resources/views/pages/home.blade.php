@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Home page</h1>

    <p class="mb-4 leading-relaxed">This is Home page</p>

    <a href="{{ url('/register') }}" class="btn btn-primary btn-small m-30 max-w-sm ml-auto">Go to Register</a>
  </div>
@endsection