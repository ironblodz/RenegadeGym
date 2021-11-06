<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="/"><img class="logo-img" src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gm.blog')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gm.contacts')}}">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gm.login')}}"><img class="account-icon" src="img/account-icon.jpg" alt=""></a>
            </li>
          </ul>
        </div>
    </div>
</nav>
