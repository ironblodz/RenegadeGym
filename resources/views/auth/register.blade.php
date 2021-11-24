@extends ('layout.auth')
@section ('title', 'Login')
@section ('image')
{{asset('img/12.jpg')}}
@endsection
@section('content')
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Registar</h1>
            <form method="POST" action="{{route('register')}}">
              @csrf
            	<div class="form-group">
                <label for="name">Nome Próprio</label>
                <input type="text" name="name" id="nome" class="form-control" placeholder="escreve aqui o teu nome">
                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="escreve a tua email">

                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="escreve a tua password">

                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
               <div class="form-group mb-4">
                <label for="cpassword">Confirme a password:</label>
                <input type="password" name="password_confirmation" id="cpassword" class="form-control" placeholder="confirma a tua password">
              </div>
              <input name="login" id="login" class="btn btn-block btn-danger" type="submit" value="Registar">
              <br>
              <p>Já tem conta? <a href="{{route('login')}}" class="text-reset">Dê login</a></p>
            </form>


          </div>
          @endsection
