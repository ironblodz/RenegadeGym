@extends('master')

@section('title', 'Blog')

@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">

    <main class="flex-shrink-0 m-5">
        @if(count($posts))
            <!-- Blog preview section-->
            <section class="pt-0 pb-0">
            @foreach($posts as $post)
                <div class="container-m px-0 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/gym-e-academy-lucas-gilbert.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="blog-post.html"><h5 class="card-title mb-3">{{$post->title}}</h5></a>
                                    <p class="card-text mb-0">Desde que a pandemia de COVID-19 se instalou no país e no mundo, ser saudável tornou-se ainda mais importante.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{asset('img/logo.png')}}" height="40px" width="40px"/>
                                            <div class="small">
                                                <div class="fw-bold">Kelly Rowan</div>
                                                <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Call to action-->
                    @else
 <h6>No categories registered</h6>
 @endif

                </div>
            </section>

            
        </main>


@endsection
