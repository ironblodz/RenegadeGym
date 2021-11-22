
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
				<img alt="Photo" src="{{asset('storage/users_photos/'.$user->photo)}}">
			</div>
			@endif

			<div><strong>Nome:</strong>{{$user->name}}</div>
			<div><strong>Email:</strong> {{$user->email}} </div>
		</div>
	</div>
</div>
@endsection