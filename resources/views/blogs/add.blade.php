@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Add Post
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('blogs.store')}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('blogs.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-danger" name="ok">Save</button>
					<a href="{{route('blogs.index')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
