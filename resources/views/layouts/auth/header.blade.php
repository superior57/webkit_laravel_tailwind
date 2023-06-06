<header class="flex items-center justify-center gap-5 py-20 my-20">
  <a href="{{ url('/') }}">
    <div class="flex items-center gap-10">
      <img src="{{ asset('/assets/img/logo.png') }}" alt="Logo" width="40" height="40">
      <h6 class="title-6 whitespace-nowrap text-main-primary-beta">UI Webkit</h6>
    </div>
  </a>

  <div class="flex-1 hidden lg:block"></div>

  <div class="hidden text-end lg:block">
    <label class="text-body">Vous avez déjà un compte ?</label>
    <a href="{{ url('/') }}" class="btn btn-text btn-primary">Connectez-vous</a>
  </div>
</header>