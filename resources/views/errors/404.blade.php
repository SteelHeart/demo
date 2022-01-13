@extends('layouts.guest')

@section('content')
    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="{{ asset('img/illustrations/lost.svg') }}" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

          <div class="text-center">

            <!-- Preheading -->
            <h6 class="text-uppercase text-muted mb-4">
              404 error
            </h6>

            <!-- Heading -->
            <h1 class="display-4 mb-3">
              Cette page n'existe pas 😭
            </h1>

            <!-- Subheading -->
            <p class="text-muted mb-4">
              Cette page à laquelle vous essayez d'accéder n'existe pas ou a été déplacée !
            </p>

            <!-- Button -->
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary">
              Retouner à l'accueil
            </a>

          </div>

        </div>
    </div> <!-- / .row -->
@endsection
