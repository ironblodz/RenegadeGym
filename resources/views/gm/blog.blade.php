@extends('master')

@section('title', 'Blog')

@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">

    <section id="mainn">
      <div class="containerr">
        <video class="video" autoplay muted loop>
          <source src="{{asset('videos/blog.mp4')}}" type="video/mp4" />
        </video>
      </div>
      <div class="page-content">
      <h1 id="blog-title">Blog</h1>
      </div>
    </section>

    <section id="blog">
      <!-- Blog-Container -->
      <div class="blog-container">

      <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/artigo2.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Dicas</span>
              <a href="" class="blog-title">Alimentação Vs Treino</a>
              <p>Hoje no dia Mundial da Alimentação vamos analisar o impacto da alimentação na atividade física e acredite é bastante!</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/pexels-leon-ardho-1552242.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Treino</span>
              <a href="" class="blog-title">Crossfit: Descubra 10 exercícios para um treino completo!</a>
              <p>O foco do CrossFit é, sobretudo, realizar conjuntos de exercícios num determinado tempo. Desse modo, constitui-se como um desafio de superação individual ou coletiva.</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/jj.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Dicas</span>
              <a href="" class="blog-title">Saciedade: Comer bem e parar de comer na hora certa!</a>
              <p>Compreender e respeitar a sensação de saciedade é essencial para comer bem e saber quando dar uma refeição por terminada.</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        
      </div>
       <!-- ------------------------------------------------------- -->
      <!-- Blog-Container -->
      <div class="blog-container">

      <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/pexels-timothy-700446.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Treino</span>
              <a href="" class="blog-title">Segredos para obter hipertrofia muscular!</a>
              <p>Dá-se o nome de hipertrofia muscular ao crescimento da massa muscular alcançado devido ao aumento da secção transversal dos músculos.</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/kk.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Dicas</span>
              <a href="" class="blog-title">Ser saudável durante a pandemia...</a>
              <p>Desde que a pandemia de COVID-19 se instalou no país e no mundo, ser saudável tornou-se ainda mais importante. A saúde e o bem-estar passaram a ser mais valorizados por todos.</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        <!-- Blog-Box 1 -->
        <div class="blog-box">

        <!-- Blog-Img -->
          <div class="blog-img">
            <img src="img/pexels-nathan-cowley-1153372.jpg" alt="">
          </div>

          <!-- Blog-Text -->
            <div class="blog-text">
              <span>Dicas</span>
              <a href="" class="blog-title">Sabe o que comer antes e depois do treino?</a>
              <p>Para quem se exercita diariamente, é fundamental saber o que comer antes e depois dos treinos.</p>
              <button type="button" class="btn-n">Ler Mais</button>
            </div>

        </div>

        
      </div>


@endsection