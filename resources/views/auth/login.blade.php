@extends('layouts.guest')

@section('content')

    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="{{ asset('img/illustrations/happiness.svg') }}" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Connexion
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Bon retour parmis nous !
          </p>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label class="form-label">
                {{ __('E-Mail Address') }}
              </label>

              <!-- Input -->
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@address.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label class="form-label">
                    {{ __('Password') }}
                  </label>

                </div>
                <div class="col-auto">

                  <!-- Help text -->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="form-text small text-muted">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="Enter your password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Icon -->
                <span class="input-group-text">
                  <i class="fe fe-eye"></i>
                </span>

              </div>
            </div>

            <div class="row mb-3 form-group">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <!-- Submit -->
            <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
              Connexion
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Vous n'avez pas encore de compte? <a href="{{ route('register') }}">Créer un compte</a>.
              </small>
            </div>

        </form>

        </div>
      </div> <!-- / .row -->

@endsection
