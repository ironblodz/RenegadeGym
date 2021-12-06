<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-gride.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <title>Footer 07</title>
  </head>
  <body>

    <footer class="footer-48201">

      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-md-5">
            <a href="{{route('gm.index')}}" class="footer-site-logo d-block mb-4">Renegade Gym</a>
            <p>Somos um ginásio aberto ao público, sem fins lucrativos</p>
          </div>
          <div class="col-md">
            <ul class="list-unstyled nav-links">
              <li><a href="{{route('gm.index')}}">Home</a></li>
              <li><a href="{{route('gm.Sobrenos')}}">Sobre nós</a></li>
              <li><a href="{{route('gm.clube')}}">Ginásios</a></li>
              <li><a href="{{route('gm.blog')}}">Blog</a></li>
            </ul>
          </div>
          <div class="col-md">
            <ul class="list-unstyled nav-links">
              <li><a href="#">FAQ</a></li>
              <li><a href="https://renegadegym.biz/wp/Loja" target="_blank">Loja</a></li>
            </ul>
          </div>
          <div class="col-md text-md-center">
            <ul class="social list-unstyled">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p class=""><a href="{{route('gm.contact')}}" class="btn btn-tertiary">Contacta-nos</a></p>
          </div>
        </div>


    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
