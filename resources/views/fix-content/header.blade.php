<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <title>E-commerce - @yield('title-page')</title>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="title" content="E-commerce">
    <meta name="author" content="Benjamin Rossin" />
    <meta name="description" content="Site e-commerce de vêtement" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- LINK -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/animate.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <script>
    window.baseUrl = "{{ asset('img/') }}";
    </script>
</head>

<body>