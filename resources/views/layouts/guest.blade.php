<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <style type="text/css">
            * {
                touch-action: manipulation;
                -webkit-touch-action: manipulation;
                -moz-touch-action: manipulation;
            }
        </style>

        <?php

            if(!isset($description)) {
                $description = 'Official Website of Darul Huda Islamic University Assam Off Campus. DHIU was established as an Islamic Academy in 1986 and formally upgraded to a university in May 2009. The philosophy upheld by DHIU was the unique product of prolonged discourses and deliberations among great visionary scholars and supportive community leaders who were deeply concerned about the dichotomous view towards education as religious and secular.';
            }

            if (!isset($title)) {
                $title = 'Darul Huda Assam Off Campus';
            } else {
                $title .= ' | Darul Huda Assam Off Campus';
            }

            $Simage = asset('img/campus.jpg');
            if(!empty($image)) {
                $Simage = $image;
            }

        ?>

            <title>{{ $title }}</title>

          <meta name="title" content="{{ $title }}">
          <meta name="keywords" content="Darul Huda, Assam, Off Campus, dhiu, Kerala, Islamic University, Admission Portal">
          <meta name="description" content="{{ $description }}">
          <link rel="canonical" href="{{ url()->current() }}">
          <meta property="image" content="{{ $Simage }}" />

          <meta property="og:title" content="{{ $title }}" />
          <meta property="og:description" content="{{ $description }}" />
          <meta property="og:image" content="{{ $Simage }}" />
          <meta property="og:url" content="{{ url('') }}" />

            @if(isset($robots))
            <meta name="robots" content="{{ $robots }}">
            @else
            <meta name="robots" content="noindex,nofollow">
            @endif

        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta property="og:type" content="website" />

        <meta name="twitter:title" content="{{ $title }}" />
        <meta name="twitter:description" content="{{ $description }}" />
        <meta name="twitter:image" content="{{ $Simage }}" />
        <meta name="twitter:url" content="{{ url('') }}" />
        <meta name="twitter:card" content="summary" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css?ver=1.23') }}">
        <style type="text/css">
           [x-cloak] {
            display: none !important;
           }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100">
        <div class="font-sans text-gray-900 antialiased bg-gray-100 overflow-hidden">
            @yield('main')
        </div>
    </body>
</html>
