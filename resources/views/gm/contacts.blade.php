@extends('master')

@section('title', 'Contactos')

@section('content')
<link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css')}}">
<link rel="preconnect" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}" ></script>
<link rel="stylesheet" href="{{asset('css/contact1.css')}}">


<div class="container">
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Esclareça as suas dúvidas connosco</h3>
            <p class="text"> Preencha o formulário com o que é pedido </p>
            <div class="info">
                <div class="social-information"> <i class="fa fa-map-marker"></i>
                    <p>Rua Álvaro Pires Miranda, Leiria/p>
                </div>
                <div class="social-information"> <i class="fa fa-envelope-o"></i>
                    <p>renegadegym@gmail.com</p>
                </div>
                <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                    <p>+351 92 662 9 767 </p>
                </div>
            </div>
            <div class="social-media">
                <p>Conecte-se conosco :</p>
                <div class="social-icons"> <a href="#"> <i class="fa fa-facebook-f"></i> </a> <a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a> <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>
            </div>
        </div>
        <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
            <form action="#" onclick="return false;" autocomplete="off">
                <h3 class="title">Escreva-nos</h3>
                <div class="social-input-containers"> <input type="text" name="name" class="input" placeholder="Name" /> </div>
                <div class="social-input-containers"> <input type="email" name="email" class="input" placeholder="Email" /> </div>
                <div class="social-input-containers"> <input type="tel" name="phone" class="input" placeholder="Phone" /> </div>
                <div class="social-input-containers textarea"> <textarea name="message" class="input" placeholder="Message"></textarea> </div> <input type="submit" value="Send" class="btn" />
            </form>
        </div>
    </div>
</div>

@endsection