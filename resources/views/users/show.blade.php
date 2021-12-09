
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Utilizador
        </div>
        <div class="card-body">
        	@if ($user->photo)

			<div>
				<img alt="Photo" height="120px" width="120px" src="{{asset('storage/users_photos/'.$user->photo)}}">
			</div>
			@endif
            <div><strong>Imagem:</strong>{{$user->image}}</div><br>
			<div><strong>Nome:</strong>{{$user->name}}</div><br>
			<div><strong>Email:</strong> {{$user->email}} </div><br>
            <div><strong>Nif:</strong> {{$user->nif}} </div><br>
            <div><strong>Contacto:</strong> {{$user->contact}} </div><br>
            <div><strong>Género:</strong> {{$user->gender}} </div><br>
            <div><strong>Birthdate:</strong> {{$user->birthdate}} </div><br>
            <div><strong>Role:</strong> {{$user->role}} </div>
		</div>
	</div>
</div>
@endsection
