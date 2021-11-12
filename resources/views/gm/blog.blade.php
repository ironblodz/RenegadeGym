@extends('master')

@section('title', 'Blog')

@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">

    <section id="main">
        <h1 id="blog-title">Blog</h1>
    </section>

    <div id="blog-margin">
    <h4 id="not-title" class="mb-4">Notícias</h4>

    <div class="container-1">
        <div class="row">
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/artigo2.jpg" alt="">
            <h3 class="blog-title">Alimentação Vs Treino</h3>
            <p class="blog-text">Hoje no dia Mundial da Alimentação vamos analisar o impacto da alimentação na atividade física e acredite é bastante!</p>
            <button type="button" class="btn ">Ver mais</button>
          </div>
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/pexels-leon-ardho-1552242.jpg" alt="">
            <h3 class="blog-title">Crossfit: Descubra 10 exercícios para um treino completo!</h3>
            <p class="blog-text">O foco do CrossFit é, sobretudo, realizar conjuntos de exercícios num determinado tempo. Desse modo, constitui-se como um desafio de superação individual ou coletiva.</p>
            <button type="button" class="btn ">Ver mais</button>
          </div>
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/jj.jpg" alt="">
            <h3 class="blog-title">Saciedade: Comer bem e parar de comer na hora certa!</h3>
            <p class="blog-text">Compreender e respeitar a sensação de saciedade é essencial para comer bem e saber quando dar uma refeição por terminada.</p>
            <button type="button" class="btn">Ver mais</button>
          </div>
        </div>
      </div>
      <div class="container-1">
        <div class="row">
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/pexels-timothy-700446.jpg" alt="">
            <h3 class="blog-title">Segredos para obter hipertrofia muscular!</h3>
            <p class="blog-text">Dá-se o nome de hipertrofia muscular ao crescimento da massa muscular alcançado devido ao aumento da secção transversal dos músculos.</p>
            <button type="button" class="btn ">Ver mais</button>
          </div>
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/kk.jpg" alt="">
            <h3 class="blog-title">Ser saudável durante a pandemia...</h3>
            <p class="blog-text">Desde que a pandemia de COVID-19 se instalou no país e no mundo, ser saudável tornou-se ainda mais importante. A saúde e o bem-estar passaram a ser mais valorizados por todos.</p>
            <button type="button" class="btn ">Ver mais</button>
          </div>
          <div id="artigos" class="col-lg-4">
            <img class="blog-img" src="img/pexels-nathan-cowley-1153372.jpg" alt="">
            <h3 class="blog-title">Sabe o que comer antes e depois do treino?</h3>
            <p class="blog-text">Para quem se exercita diariamente, é fundamental saber o que comer antes e depois dos treinos.</p>
            <button type="button" class="btn ">Ver mais</button>
          </div>
        </div>
      </div>
    </div>

@endsection