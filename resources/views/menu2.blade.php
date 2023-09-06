<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'radees.ma') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('bootstrap/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="{{ asset('bootstrap/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <!-- Styles -->
</head>


<section class="home-section">
                    <nav>
                      <div class="sidebar-button">
                        <i class='bx bx-menu sidebarBtn'></i>
                        <span class="dashboard">Dashboard</span>
                      </div>
                      <div class="search-box">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search' ></i>
                      </div>
                      <div class="profile-details">
                        <span class="admin_name">{{ Auth::guard('employee')->user()->nom }}</span>
                      </div>
                    </nav>

<div class="sidebar">
    <div class="logo-details">
    <img class="bxz" src="../assets/img/skld.svg" width="35" height="30">
      <span class="logo_name">RADEES</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('/dashboard') }}" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/demander/create') }}">
            <i class='bx bx-box' ></i>
            <span class="links_name">Demander</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/suivi') }}">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">suivi les demandes</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/d_accepter_employee') }}">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">suivi les Remboursement</span>
          </a>
        </li>
        
        <li class="log_out">
          
          <a class="btn btn-primary" href="{{ route('logout') }}"
          
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 
    <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-item">
       @csrf
   </form>
        </li>
      </ul>
  </div>