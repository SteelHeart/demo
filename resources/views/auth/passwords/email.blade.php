@extends('layouts.guest')

@section('content')

    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="{{ asset('img/illustrations/coworking.svg') }}" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            {{ __('Reset Password') }}
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Veuillez renseigner votre adresse email pour recevoir le lien de réinitialisaion.
          </p>

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email address -->
                <div class="form-group">
                <!-- Label -->
                <label class="form-label">
                    {{ __('E-Mail Address') }}
                </label>

                <!-- Input -->
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus" placeholder="name@address.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
                {{ __('Reset Password') }}
                </button>

                <!-- Link -->
                <div class="text-center">
                <small class="text-muted text-center">
                    Vous vous souvenez de votre mot de passe? <a href="{{ route('login') }}">Connexion</a>.
                </small>
                </div>

          </form>

        </div>
    </div> <!-- / .row -->

@endsection
