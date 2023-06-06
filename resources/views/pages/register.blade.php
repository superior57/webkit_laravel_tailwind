@extends('layouts.auth.index')

@section('title', 'Register')

@section('content')
  @php
    $options = [
      'Designer UX',
      'Designer UI',
      'Développeur front',
      'Développeur back',
      'Étudiant'
    ];    
  @endphp
  <div class="container max-w-sm mx-auto">
    <h3 class="mb-40 title-3 text-main-primary">Inscription</h3>

    <p class="mb-24 subtitle-2">1/2 - Vous êtes…</p>

    <div class="mb-40">
      @foreach ($options as $option)
      <div class="radio">
        <input type="radio" name="type" id="radio-{{ $option }}">
        <label for="radio-{{ $option }}">
          <div class="option-outline">
            <span class="active"></span>
          </div>
          <span class="option-label border-b-p-default border-b-1">
            {{ $option }}
          </span>
        </label>
      </div>          
      @endforeach
    </div>

    <button class="btn btn-primary btn-medium">Question suivante
      @svg('assets/svg/icon-next.svg', 'ml-12')
    </button>
  </div>
@endsection