<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="sidebar-mini" cz-shortcut-listen="true" style="height: auto;">
    <div class="wrapper">
    
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contact</a>
    </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
        @if (Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @endif
    
    </ul>
    </nav>
    
    
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">Shopping</span>
    </a>
    
    <div class="sidebar">
    
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    </div>
    
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
    <button class="btn btn-sidebar">
    <i class="fas fa-search fa-fw"></i>
    </button>
    </div>
    </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
    </div>
    
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    Starter Pages
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="#" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>Active Page</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Inactive Page</p>
    </a>
    </li>
    </ul>
    </li>
    <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
    Simple Link
    </p>
    </a>
    </li>
    </ul>
    </nav>
    
    </div>
    
    </aside>
    
    <div class="content-wrapper" style="min-height: 244.75px;">
    
    <div class="content-header">
    <div class="container-fluid">
    
    </div>
    </div>
    
    
    <div class="content">
    <div class="container-fluid">
        
        @yield('content')
     
    </div>
    </div>
    
    </div>
    
    
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    
    <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
    </div>
    </aside>
    
    
    <footer class="main-footer">
    
    <div class="float-right d-none d-sm-inline">
    Anything you want
    </div>
    
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    <div id="sidebar-overlay"></div></div>
    
    
    
    <script src="plugins/jquery/jquery.min.js"></script>
    
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
    
    
    </body>
</html>
