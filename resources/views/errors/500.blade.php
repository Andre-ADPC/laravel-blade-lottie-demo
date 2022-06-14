<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="{{ asset('vendor/lottie/app.js') }}" defer></script>

</head>

<body class="antialiased">
    <h2 class="display-3">500</h2>
    <p class="display-5">Oh no! Something is wrong on the server.</p>
    <x-lottie-hello />
</body>

</html>
