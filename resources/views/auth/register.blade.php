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
            Créer un compte
        </h1>

        <!-- Subheading -->
        <p class="text-muted text-center mb-5">
            Créer un compte pour accéder à notre plateforme.
        </p>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">

                <!-- Label -->
                <label class="form-label">
                    {{ __('Name') }}
                </label>
                <!-- Input -->
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="John Doe">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Email address -->
            <div class="form-group">
                <!-- Label -->
                <label class="form-label">
                    {{ __('E-Mail Address') }}
                </label>
                <!-- Input -->
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@address.com">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <!-- Label -->
                <label class="form-label">
                    {{ __('Password') }}
                </label>

                <!-- Input group -->
                <div class="input-group input-group-merge">
                    <!-- Input -->
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Renseignez un mot de passe">

                    <!-- Icon -->
                    <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                    </span>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <!-- COnfirm Password -->
            <div class="form-group">
                <!-- Label -->
                <label class="form-label">
                    {{ __('Confirm Password') }}
                </label>

                <!-- Input group -->
                <div class="input-group input-group-merge">
                    <!-- Input -->
                    <input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le de passe">

                    <!-- Icon -->
                    <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                    </span>
                </div>

            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
            Créer
            </button>

            <!-- Link -->
            <div class="text-center">
            <small class="text-muted text-center">
                Vous avez déjà un compte? <a href="{{ route('login') }}">Connexion</a>.
            </small>
            </div>

        </form>

    </div>
</div> <!-- / .row -->

@endsection
