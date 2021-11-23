<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1, ">
  <title>Login</title>
  <link href="{{asset('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div>
            <img src="{{asset('img/logo.png')}}" height="80px" width="80px" alt="logo" class="logo">
          </div> 
          <div class="login-wrapper my-auto">
            <h1 class="login-title">{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
              <button name="login" id="login" class="btn btn-block btn-danger" type="submit">{{ __('Login') }}</button>
              @if (Route::has('password.request'))
                                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                                        {{ __('Perdeste a tua password?') }}
                                    </a>
                                @endif
              </div>
            </form>
            <p class="login-wrapper-footer-text">Não tem conta? <a href="{{route('register')}}" class="text-reset">Regista-te</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block img-fluid">
          <img src="{{asset('img/12.jpg')}}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  
</body>
</html>
