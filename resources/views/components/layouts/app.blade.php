<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="ltr"
>

<head>
    <meta charset="utf-8">

    <meta
        name="application-name"
        content="{{ config('app.name') }}"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    {{-- START: Don't allow search engines to index the site --}}
    <meta
        name="robots"
        content="noindex, nofollow"
    >
    <meta
        name="googlebot"
        content="noindex, nofollow"
    >
    {{-- END: Don't allow search engines to index the site --}}

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link
        type="font/woff2"
        href="{{ Vite::asset('resources/fonts/Fund-Light.woff2') }}"
        rel="preload"
        as="font"
        crossorigin
    >
    <link
        type="font/woff2"
        href="{{ Vite::asset('resources/fonts/Fund-Medium.woff2') }}"
        rel="preload"
        as="font"
        crossorigin
    >
    <link
        type="font/woff2"
        href="{{ Vite::asset('resources/fonts/Fund-Regular.woff2') }}"
        rel="preload"
        as="font"
        crossorigin
    >
    <link
        type="font/woff2"
        href="{{ Vite::asset('resources/fonts/Fund-SemiBold.woff2') }}"
        rel="preload"
        as="font"
        crossorigin
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @filamentStyles
    @stack('beforeHeadClose')
</head>

<body class="antialiased">
    <x-layouts.partials.header />
    {{ $slot }}
    @livewireScriptConfig
    @filamentScripts
</body>

</html>
