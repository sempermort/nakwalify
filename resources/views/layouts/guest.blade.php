<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nakwalify</title>
    <base href="/">

    <link rel="icon" type="image/png" href="./assets/images/fav.png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    @font-face {
    font-family: "Kaushan_Script";
    src:  url('../assets/fonts/Kaushan_Script/KaushanScript-Regular.ttf');
  }
</style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
