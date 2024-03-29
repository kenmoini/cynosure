<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>{{ config('app.name', 'Cynosure') }} - @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <!--
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    -->
    <!-- CSS Files -->
    <link href="/now-ui-dashboard-master/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/now-ui-dashboard-master/assets/css/now-ui-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="/now-ui-dashboard-master/assets/css/bootstrap-switch.min.css?v=1.2.0" rel="stylesheet" />
    <link href="/now-ui-dashboard-master/assets/css/nouislider.min.css?v=1.2.0" rel="stylesheet" />
    <link href="/vendor/fontawesome-free-5.9.0-web/css/all.min.css" rel="stylesheet" />

    <style type="text/css">
    p.category, p.card-category {
        font-size:1rem;
    }
    .card label {
        font-size:1rem;
    }
    .clusterSwitcher div.dropdown, .namespaceSwitcher div.dropdown {
        width:100%;
    }
    .clusterSwitcher div.dropdown button.dropdown-toggle, .namespaceSwitcher div.dropdown button.dropdown-toggle {
        margin-top:0
    }
    .sidebar .logo:after, .off-canvas-sidebar .logo:after {
        background-color:transparent;
    }
    .clusterSwitcher .dropdown-menu.show, .namespaceSwitcher .dropdown-menu.show {
        width:96%;
        left:2% !important;
    }
    .sidebar .nav, .off-canvas-sidebar .nav {
        margin-top:0;
    }
    .sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
        border-radius:0;
    }
    #content-body {
        font-family: 'Source Sans Pro', sans-serif;
    }
    .form-control {
        border-radius:4px;
        border:1px solid #aeaeae;
    }
    .odd-future-row {
        background-color: rgba(0,0,0,0.025);
    }
    .cynosure-setting-row {
        padding:1rem;
    }
    .cynosure-setting-row:hover {
        background-color: rgba(0,0,0,0.05);
    }
    </style>

    @yield('header-css')

  </head>
  <body>
      @include('partials.header-frame')