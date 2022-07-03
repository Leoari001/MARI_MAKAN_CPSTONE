@extends('frontend.layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Temukan Restoran atau tempat makan yang <span>Menarik</span> dan <span>Nyaman</span> dengan banyak menu pilihan di <span>Website</span> kami</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('makanan.index') }}" class="btn-book-a-table">Get Started</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  @endsection