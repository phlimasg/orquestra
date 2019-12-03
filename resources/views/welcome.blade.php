@extends('layouts.orquestra')
@section('content')
 
@php
    $bg = ['1','2','3','4'];
@endphp

<div id="inicio" class="site-blocks-cover overlay" style="background-image: url('images/album/teatro_municipal/{{(array_rand($bg,1))+1}}.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                <h1>Orquestra La Salle</h1>
                <p class="mb-4"><span class="small">60 anos</span></p>
                <a href="#video" onclick="playVideo()" class="btn btn-warning">Clique e assista ao teaser</a>
                
                <div id="playerContainer"></div>
                
            </div>
        </div>
    </div>
</div>
</div>
<!--
FIM TOPO -->

  <!-- Eventos 
  <div class="pb-5" style="margin-top: -100px;">
    <div class="container-fluid">

      <div class="row no-gutters">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_1.jpg');"></div>
            <div class="unit-9-content">
              <h2>Art Gossip</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>Good Morning Show</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_3.jpg');"></div>
            <div class="unit-9-content">
              <h2>Blues Radio</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="unit-9">
            <div class="image" style="background-image: url('images/img_4.jpg');"></div>
            <div class="unit-9-content">
              <h2>Classic Songs</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>-->
  <!-- Eventos -->
  <div class="container-fluid ">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mt-5">Ouça na sua plataforma favorita</h2>
            <p>O álbum de comemoração da Orquestra La Salle, está disponível nas principais plataformas de streaming.</p>
          </div>
        </div>
  </div>
  <div class="container site-block-retro d-block " data-aos="fade-up" data-aos-delay="400">
      <div class="row">
          <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <a href="https://www.deezer.com/br/album/92659872" class="unit-9" target="_blank">
                <div class="image" style="background-size: 100%; background-image: url('{{asset('images/logos/deezer.png')}}');"></div>                
              </a>
            </div>
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <a href="https://open.spotify.com/album/5b9y2BC7m7qRtqsCUG9Aic" class="unit-9" target="_blank">
                  <div class="image" style="background-size: 95%;background-image: url('{{asset('images/logos/spotify.png')}}');"></div>                
                </a>
              </div>
              <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <a href="https://music.apple.com/br/album/60-anos/1458673345" class="unit-9" target="_blank">
                    <div class="image" style="background-size: 100%;background-image: url('{{asset('images/logos/ap_music.png')}}');"></div>                
                  </a>
                </div>
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" target="_blank">
                    <a href="https://music.youtube.com/playlist?list=OLAK5uy_lwZlCHoj1geWrnq2PyE2_jeIYa3CYpECM" class="unit-9">
                      <div class="image" style="background-size: 100%;background-image: url('{{asset('images/logos/yt_music.png')}}');"></div>                
                    </a>
                  </div>
        
      </div>
  </div>
<div>
</div>
  <!-- agenda -->
  <div class="site-section bg-light">

    <div class="container">

      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
          <h2 class="mb-5">Assista ao Teaser</h2>
          <p>Preparamos, com todo carinho, um teaser da gravação do nosso álbum de comemoração. Espere que gostem!</p>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-sm-8">
          <br>
            <video width="100%" controls id="video" poster="{{asset('images/video_bg.jpg')}}" preload="none" onclick="playVideo2()">
              <source src="{{asset('videos/teaser_full.mp4')}}" type="video/mp4">                
                Your browser does not support HTML5 video.
              </video>
        </div>
        <div class="col-sm-3 text-center">        
          Ouça uma prévia!
          <iframe src="https://open.spotify.com/embed/artist/3jwyEpyMZBAAYvs9Ea8Vr1" width="100%" height="94%" frameborder="0" allowtransparency="true" autoplay=1 allow="encrypted-media"></iframe>
        
        </div>
      </div>
        
       
      
      
      
    </div>
  </div>
  <!-- agenda -->


  <!-- depoimentos
  <div class="site-section  block-13">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Love By Our Listeners</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
        </div>
      </div>
      <div class="nonloop-block-13 owl-carousel">
        
        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Megan Smith</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Brooke Cagle</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Philip Martin</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Steven Ericson</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Nathan Dumlao</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

        <div class="text-center p-3 p-md-5 bg-white">
          <div class="mb-4">            
            <img src="images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
          </div>
          <div class="">
            <h3 class="font-weight-light h5">Brook Smith</h3>
            <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- depoimentos -->


  <!-- Inscreva-se-->
  <div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url('{{asset('images/album/teatro_municipal/'.((array_rand($bg,1))+1).'.jpg')}}'); min-height:780px;" data-aos="fade" data-stellar-background-ratio="0.5">

    <div class="container" id="contato">
      <div class="row align-items-center justify-content-center text-center">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100" style="padding-top: 40px;">          
          <h2 class="mb-5">Contato</h2>          
          <div role="main" id="orquestra-la-salle-817b9f32f88d5dd20f53"></div>
          
        </div>
      </div>
    </div>
  </div>  
  <!-- Inscreva-se-->


  <!-- membros 
  <div class="site-section">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
          <h2 class="mb-5">Our DJs</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_1.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_2.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_3.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_4.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_5.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
          <div class="team-member">

            <img src="images/person_6.jpg" alt="Image" class="img-fluid">

            <div class="text">

              <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
              <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
              <p>
                <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
              </p>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- membros -->

  
  <!-- Agenda? 
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
          <h2 class="mb-5">Agenda</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
            <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- membros -->

  

  <script>
    function playVideo2() {   
      video.play();
    }
    function playVideo() {   
      video.play();
      openFullscreen();

    }
    function openFullscreen() {
      if (video.requestFullscreen) {
        video.requestFullscreen();
      } else if (video.mozRequestFullScreen) { /* Firefox */
        video.mozRequestFullScreen();
      } else if (video.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
        video.webkitRequestFullscreen();
      } else if (video.msRequestFullscreen) { /* IE/Edge */
        video.msRequestFullscreen();
      }
    }
  </script>
  <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
  <script type="text/javascript">
    new RDStationForms('orquestra-la-salle-817b9f32f88d5dd20f53-html', 'UA-37597615-1').createForm();
  </script>
@endsection
