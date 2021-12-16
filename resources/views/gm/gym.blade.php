@extends('master')

@section ('title', 'Ginásio')

@section ('content')


<link rel="stylesheet" href="{{asset('css/clubcss2.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('css/clubcss.css')}}" media="screen">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>



    <section class="u-align-left u-clearfix u-white u-section-1" id="sec-cfca">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-radius-15 u-shape u-shape-round u-white u-shape-1"></div>
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Ginásios</h1>
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-2">O nosso espaço</h2>
        <p class="u-large-text u-text u-text-variant u-text-3"> Damos ao cliente a vantagem de praticar exercicio em vários ginásios em zonas diferentes escolhidas por nós.</p>
        <img class="u-expanded-width-xs u-image u-image-default u-image-1" src="{{asset('img/gym1.png')}}" alt="" data-image-width="972" data-image-height="610">
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="carousel_688d">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Localizações</h1>
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-2">Onde estamos localizados</h2>
        @foreach($gyms as $gym)
            <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-3">{{ $gym->title }}</h1>
            <img class="u-expanded-width-xs u-image u-image-default u-image-1" src="{{asset('storage/gym_images/'.$gym->photo) }}" class="img-post">
        @endforeach
      </div>
    </section>
    <section class="u-align-left u-clearfix u-white u-section-3" id="carousel_54fb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Galeria de fotos</h1>
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-2">Alguns dos nossos ginásios</h2>
        <img class="u-image u-image-default u-image-1" src="{{asset('img/9df47a144b5f9c6ffce69c86b3f740a1-754x394.jpg')}}" alt="" data-image-width="754" data-image-height="394">
        <img class="u-image u-image-default u-image-2" src="{{asset('img/gym-e-academy-lucas-gilbert.jpg')}}" alt="" data-image-width="3863" data-image-height="2578">
        <img class="u-image u-image-default u-image-3" src="{{asset('img/ginasios-770x470-aafc.jpg')}}" alt="" data-image-width="770" data-image-height="470">
        <img class="u-image u-image-default u-image-4" src="{{asset('img/danielle-cerullo-CQfNt66ttZM-unsplash-scaled.jpg')}}" alt="" data-image-width="2560" data-image-height="1707">
        <img class="u-image u-image-default u-image-5" src="{{asset('img/gopr4573_1499510047720_high-011-min-2000x1200.jpg')}}" alt="" data-image-width="2000" data-image-height="1200">
        <img class="u-image u-image-default u-image-6" src="{{asset('img/_113577452_conditioning-coach-lee-chambers.jpg')}}" alt="" data-image-width="976" data-image-height="549">
        <img class="u-image u-image-default u-image-7" src="{{asset('img/BackofGym-1380x600.jpg')}}" alt="" data-image-width="1380" data-image-height="600">
        <img class="u-image u-image-default u-image-8" src="{{asset('img/tuv-rheinland-gym-equipment.jpg')}}" alt="" data-image-width="800" data-image-height="533">
        <img class="u-image u-image-default u-image-9" src="{{asset('img/Weights-gym-right-aligned.jpg')}}" alt="" data-image-width="4032" data-image-height="2384">
      </div>
    </section>






@endsection
