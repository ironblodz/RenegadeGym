@extends ('layout.auth')
@section ('title', 'Login')
@section ('image')
{{asset('img/13.jpg')}}
@endsection
@section('content')
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Registar</h1>
            <form method="POST" action="{{route('register')}}">
              @csrf
            	<div class="form-group">
                <label for="name">Nome Próprio</label>
                <input type="text" name="name" id="nome" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="escreve aqui o teu nome">
                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="escreve o teu email">

                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="escreve a tua password">

                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
               <div class="form-group mb-4">
                <label for="cpassword">Confirme a password:</label>
                <input type="password" name="password_confirmation" id="cpassword" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus placeholder="confirma a tua password">

                @error('cpassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

              <input name="login" id="login" class="btn btn-block btn-danger" type="submit" value="Registar">
              <br>
              <p>Já tem conta? <a href="{{route('login')}}" class="text-reset">Dê login</a></p>
            </form>


          </div>
          @endsection
