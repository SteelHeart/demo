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
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <div class="container">

        @yield('content')

    </div>

    @include('partials.scripts')

</body>
</html>
