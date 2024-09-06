<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Phil Mareu">
    <meta name="description" content="Phil Mareu is a Laravel web developer located in the USA.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://philmareu.com/">
    <meta property="og:title" content="">
    <meta property="og:description" content="Phil Mareu is a Laravel web developer located in the USA.">
    <meta property="og:image" content="{{ asset('open-graph-image.jpeg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://philmareu.com/">
    <meta property="twitter:title" content="Phil Mareu">
    <meta property="twitter:description" content="Phil Mareu is a Laravel web developer located in the USA.">
    <meta property="twitter:image" content="{{ asset('twitter-image.jpeg') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-600 bg-slate-100">

<x-navigation />

<div>
    {{ $slot }}
</div>

<x-footer :user="\App\Services\PrimaryUser::retrieve()" />
</body>
</html>
