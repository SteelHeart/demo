<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico" type="image/x-icon') }}"/>

    @include('partials.styles')

    <style>body { display: none; }</style>

    <title>{{ config('app.name', 'Express Coursier') }}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-1">
    </script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>

</head>
<body>

    <!-- MODALS -->
    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-list=''>
            <div class="card-header">

              <!-- Title -->
              <h4 class="card-header-title" id="exampleModalCenterTitle">
                Add a member
              </h4>

              <!-- Close -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="card-header">

              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge input-group-reverse">
                  <input class="form-control list-search" type="search" placeholder="Search">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </form>

            </div>
            <div class="card-body">

              <!-- List group -->
              <ul class="list-group list-group-flush list my-n3">
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('img/avatars/profiles/avatar-5.jpg') }}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Miyah Myles</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('img/avatars/profiles/avatar-6.jpg') }}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Ryu Duke</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('img/avatars/profiles/avatar-7.jpg') }}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Glen Rouse</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
                <li class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">

                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('img/avatars/profiles/avatar-8.jpg') }}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ms-n2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Grace Gross</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- OFFCANVAS -->
    @include('partials.off-canvas')

    <!-- NAVIGATION -->
    @include('partials.sidebar')

    <!-- MAIN CONTENT -->
    <div class="main-content">

        @include('partials.header')

        @yield('content')

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT -->
    <!-- Map JS -->

    @include('partials.scripts')

</body>
</html>
