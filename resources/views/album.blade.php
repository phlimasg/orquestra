@extends('layouts.orquestra')
@section('content')
<link rel="stylesheet" href="{{asset('css/g_style.css')}}">
<div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url('{{asset('images/album/teatro_municipal/'.rand(1,2).'.jpg')}}'); min-height:350px;" data-aos="fade" data-stellar-background-ratio="0.5">

  <div class="container" id="contato">
    <div class="row align-items-center justify-content-center text-center" style="min-height:350px;">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100" >          
        <h2 >Album</h2>        
        <p>Acompanhe todos os eventos em que a Orquestra La Salle participou.</p>
      </div>
    </div>
  </div>
</div>
<br>
<main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('mak') }}" class="d-block photo-item">
            <img src="{{asset('images/album/making_off/'.rand(1,95).'.jpg')}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Fotos do making-off</h3>
              <span class="meta">95 Fotos</span>
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
          <a href="{{ route('teatro') }}" class="d-block photo-item">
            <img src="{{asset('images/album/teatro_municipal/'.rand(1,110).'.jpg')}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Orquestra La Salle no Teatro Municipal</h3>
              <span class="meta">110 Fotos</span>
            </div>
            </div>
          </a>
        </div>
        

      </div>     
    </div>
  </main>

@endsection
