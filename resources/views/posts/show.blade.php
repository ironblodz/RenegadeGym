@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Post Information
        </div>
        <div class="card-body">
            @if ($post->image)

			<div>
				<img alt="Post image" src="{{asset('storage/posts_images/'.$post->image)}}">

			</div>
            @endif
            <div><strong>Date:</strong> {{$post->date}} </div><br>
            <div><strong>Category:</strong> {{$post->category}} </div><br>
            <div><strong>Category:</strong> {{$post->category}} </div><br>
            <div><strong>Title:</strong> {{$post->title}} </div><br>
            <div><strong>Description:</strong> {{$post->content}} </div><br>
	</div>
</div>
@endsection
