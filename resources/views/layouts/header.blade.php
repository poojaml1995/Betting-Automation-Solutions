<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('./assets/css/style.css')}}">
 </head>
  <body>
    <nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo/Betting_Logo_2025.png')}}" alt="Logo" width="150" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>      
      <form class="d-flex" role="search">
        <div class="input-group">
          <input class="form-control form-control-sm" style="width:350px;" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-light text-secondary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
    </div>
    <div>
      <a href="#" class="btn theme-green-btn btn-sm text-light p-1"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
      <a href="#" class="btn theme-orange-btn btn-sm text-light p-1"><i class="fa-solid fa-user"></i> Registration</a>
    </div>
  </div>
</nav>

<!-- Catogory Nav -->
 <nav class="navbar navbar-expand-lg theme-navbar-light">
  <div class="container-fluid">    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-dark active" aria-current="page" href="{{url('/')}}">All Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{url('category/category1/1')}}">In-Play</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Casino</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Fantasy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Extra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Contact</a>
          </li>
        </ul>
    </div>
  </div>
</nav>