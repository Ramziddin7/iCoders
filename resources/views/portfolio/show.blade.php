@extends('layouts.app')

@section('title', 'Portfolio')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs pt-4">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio</h2>
          
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
     <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details" >
        <div class="container"> 
          <div class="row">
          <!-- ======= Hero Section ======= -->
          <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                @foreach (json_decode($portfolio->image) as $image )
                <div class="carousel-item {{ ($loop->index == 0) ? 'active':'' }}" style="background-image: url('{{ asset($image) }}'); background-position:center;">
                  <div class="carousel-container d-flex justify-content-center">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                      <a href="{{ asset($image)}}" data-gallery="portfolioGallery" class=" text-center" title="Portfolio image"><i class="bx bx-search text-center"></i> </a>           
                    </div>
                  </div>
                </div>                
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
              </a>
              <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            </div>
          </section><!-- End Hero -->
            <div class="col-md-12 pt-2">
             <div class="row">
              <div class="col-md-6">
                <div class="portfolio-info">
                  <h3>Project information</h3>
                  <ul>
                    <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                    <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                    <li><strong>Project date</strong>: {{ $portfolio->created_at }}</li>
                    <li><strong>Project URL</strong>: <a href="{{ $portfolio->link }}">{{ $portfolio->link }}</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-description">
                  <h2>Portfolio detail</h2>
                  <p>
                      {{ $portfolio->detail_en }}
                  </p>
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </section><!-- End Portfolio Details Section -->
@endsection