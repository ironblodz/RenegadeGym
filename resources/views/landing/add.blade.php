@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Adicionar Frase
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('landing.store')}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('landing.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-danger" name="ok">Guardar</button>
					<a href="{{route('landing.index')}}" class="btn btn-danger">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
