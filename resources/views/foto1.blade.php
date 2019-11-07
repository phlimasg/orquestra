@extends('layouts.orquestra')
@section('content')
<link rel="stylesheet" href="{{asset('css/g_style.css')}}">
<link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
<div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url('{{asset('images/album/teatro_municipal/2.jpg')}}'); min-height:350px;" data-aos="fade" data-stellar-background-ratio="0.5">

  <div class="container" id="contato">
    <div class="row align-items-center justify-content-center text-center" style="min-height:350px;">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100" >          
        <h2 >Orquestra La Salle no Teatro Municipal</h2>        
        <p>Acompanhe todos os eventos em que a Orquestra La Salle participou.</p>
      </div>
    </div>
  </div>
</div>
<br>
<main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch"> 
        @php($count = 110)
        @php($col = [3,3,6])
        @for ($i = 1; $i <= $count; $i++)

        <div class="col-6 col-md-6 col-lg-{{$col[rand(0,2)]}}" data-aos="fade-up">
          <a href="{{asset('images/album/teatro_municipal/'.$i.'.jpg')}}" class="d-block photo-item" data-fancybox="gallery">
            <img src="{{asset('images/album/teatro_municipal/'.$i.'.jpg')}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
            
        @endfor 
<!--
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_2.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="images/img_3.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
          <a href="images/img_4.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_5.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
          <a href="images/img_6.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_6.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="images/img_7.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="images/img_7.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
      -->
      </div>
    </div>
  </main>
  
@endsection
