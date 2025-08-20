@extends('layouts.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/Slide2.png')}}" class="d-block w-100" alt="Slider 1">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/Slide1.png')}}" class="d-block w-100" alt="Slider 2">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/Slide3.png')}}" class="d-block w-100" alt="Slider 3">
    </div>    
    <div class="carousel-item">
      <img src="{{asset('assets/images/Slide4.png')}}" class="d-block w-100" alt="Slider 4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Betting Count Section -->
 <section>
    <div class="row my-5">
        <div class="col-lg-2"></div>
        <div class="d-flex align-items-center p-2 col-lg-2 mx-auto">
            <i class="fa-solid fa-arrow-down me-4"></i>
            <div>
                <p class="mb-1">Total Withdraw</p>
                <h4 class="fw-bold mb-0">945,000</h4>
            </div>            
        </div>
        <div class="d-flex align-items-center p-2 col-lg-2 mx-auto">
            <i class="fa-solid fa-credit-card me-4"></i>
            <div>
                <p class="mb-1">Total Deposit</p>
                <h4 class="fw-bold mb-0">4,845,000</h4>
            </div>            
        </div>
        <div class="d-flex align-items-center p-2 col-lg-2 mx-auto">
            <i class="fa-solid fa-trophy me-4"></i>
            <div>
                <p class="mb-1">Total Winners</p>
                <h4 class="fw-bold mb-0">845,000</h4>
            </div>            
        </div>
        <div class="d-flex align-items-center p-2 col-lg-2 mx-auto">
            <i class="fa-solid fa-users me-4"></i>
            <div>
                <p class="mb-1">Total Users</p>
                <h4 class="fw-bold mb-0">1,255,000</h4>
            </div>            
        </div>
        <div class="col-lg-2"></div>
 </section>
<!-- product Section -->
<section class="my-5">
<div class="container">
    <div class="d-flex">
        <div class="flex-grow-1"><h2 class="mb-4">Our Top Games</h2></div>
        <div class=""><a href="#" class="btn btn-sm theme-green-btn text-light">View All</a></div>
    </div>
    <div class="row theme-games">
        <div class="col-lg-3">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/games/1.jpg')}}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;"></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Card Finding</a></h6>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-warning mb-3">Play Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/games/2.jpg')}}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;"></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Head & Tail</a></h6>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-warning mb-3">Play Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/games/3.jpg')}}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;"></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Spin Wheel</a></h6>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-warning mb-3">Play Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <a href="#"><img src="{{asset('assets/images/games/4.jpg')}}" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;"></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Dice Rolling</a></h6>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-warning mb-3">Play Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

