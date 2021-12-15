@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Ginásio
        </div>
        <div class="card-body">
            @if ($gym->image)

			<div>
				<img alt="Gym image" src="{{asset('storage/gym_images/'.$gym->image)}}">
			</div>
            @endif
            <div><strong>Date:</strong> {{$gym->date}} </div><br>
            <div><strong>Category:</strong> {{$gym->category}} </div><br>
            <div><strong>Image:</strong> {{$gym->image}} </div><br>
            <div><strong>Title:</strong> {{$gym->title}} </div><br>
            <div><strong>Description:</strong> {{$gym->content}} </div><br>
	</div>
</div>
@endsection
