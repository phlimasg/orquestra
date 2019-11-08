<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Orquestra La Salle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://matriculas.lasalle.edu.br/assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://matriculas.lasalle.edu.br/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://matriculas.lasalle.edu.br/assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://matriculas.lasalle.edu.br/assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://matriculas.lasalle.edu.br/assets/img/favicon.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    
  </head>
  <body id="myPage">
  
    
    
  
  <div class="site-wrap">

    <div class="site-navbar" style="position: fixed; padding-top: 1.5rem;">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="{{ url('/') }}" class="text-white h2 mb-0"><img src="{{asset('images/logo_br.png')}}" style="max-width: 150px;" alt="" srcset=""></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="">
                  <a href="{{url('/')}}" >Início</a>
                  </li>
                  <li class="">
                    <a href="{{url('/')}}#contato">Contato</a>                    
                  </li>
                  <li><a href="{{ route('album') }}">Fotos</a></li>
                  <!--<li><a href="{{url('/')}}#agenda">Agenda</a></li>                  
                  <li><a href="{{url('/')}}#sobre">Sobre</a></li>-->
                  <li><a href="{{ asset('/album/Orquestra_Lasalle.zip') }}" download class="btn btn-warning text-black" >Baixe o Albúm &nbsp;</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>
    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    @yield('content')
    



    
    

    

 
<!-- redes sociais -->
<div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="https://www.facebook.com/lasalleabel" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
        <a href="https://twitter.com/lasalleabel" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="http://instagram.com/la.salle.abel" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
        <a href="https://www.linkedin.com/school/la-salle-abel/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
        
        <a href="https://www.youtube.com/lasalleabeloficial" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>
  <!-- redes sociais -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Sobre a Orquestra</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegação</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{ url('/') }}">Início</a></li>
                  <li><a href="{{ url('/') }}#contato">Contato</a></li>
                  <li><a href="{{ url('/album') }}">Fotos</a></li>
                  <li><a href="{{ asset('/album/Orquestra_Lasalle.zip') }}">Baixe o Álbum</a></li>
                </ul>
              </div>
            </div>

            

          </div>
          
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Patrocínio do Álbum de 60 Anos</h3>

              <div class="block-16">
                <figure>
                  <a href="https://www.grupoaguasdobrasil.com.br/aguas-niteroi/" target="_blank">
                    <img src="{{ asset('images/logos/aguas_niteroi_logo.png') }}" alt="Águas de Niterói" class="img-fluid rounded">                  
                  </a>
                </figure>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
            

  </div>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
   
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>  
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
    
  <script>
    /* SCRIPT JQUERY PARA TROCAR DE COR NAVBAR  rgb(0,0,0,30%)*/     
    $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".site-navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      if ($(this).scrollTop() > 80) {            
          $('.site-navbar').css("padding-top", "0.5rem");                 
          $('.site-navbar').css("background-color", "rgb(0,0,0,60%)");
          $('.site-navbar').css("-webkit-transition-property", "background-color, padding-top");
          $('.site-navbar').css("-webkit-transition-duration", "1s");
          $('.site-navbar').css("transition-property", "background-color, padding-top");
          $('.site-navbar').css("transition-duration", "1s");
          //$('.site-navbar').css("-webkit-transition", "padding-top 1s");
          //$('.site-navbar').css("transition", "padding-top 1s");
        } else {
          $('.site-navbar').css("padding-top", "1.5rem");
          $('.site-navbar').css("background-color", "transparent");
        }
      $(".site-navbar").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  }) 
    
    
</script>
  </body>
</html>