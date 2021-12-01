<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css')}}" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="/index"><img class="logo-img" src="img/logo.png" alt=""></a>
        <button id="bg-color-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active @if ($menuOption=='I') active @endif" >
              <a class="nav-link" href="{{route('gm.index')}}">Home</a>
            </li>
            <li class="nav-item @if ($menuOption=='O') active @endif">
              <a class="nav-link" href="{{route('gm.inscricao')}}">Inscrição</a>
            </li>
            <li class="nav-item @if ($menuOption=='B') active @endif">
              <a class="nav-link" href="{{route('gm.Sobrenos')}}">Sobre</a>
            </li>
            <li class="nav-item @if ($menuOption=='C') active @endif">
              <a class="nav-link" href="{{route('gm.clube')}}">Ginásios</a>
            </li>
            <li class="nav-item @if ($menuOption=='D') active @endif">
              <a class="nav-link" href="{{route('gm.blog')}}">Blog</a>
            </li>
            <li class="nav-item @if ($menuOption=='E') active @endif">
              <a class="nav-link" href="{{route('gm.contact')}}">Contacto</a>
            </li>
            <li class="nav-item @if ($menuOption=='F') active @endif">
              <a class="nav-link" href="{{route('login')}}"><img class="account-icon" src="img/account-icon.jpg" alt=""></a>
            </li>
          </ul>
        </div>
    </div>
</nav>


    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
