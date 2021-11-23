@extends ('master')

@section ('title','Contacto')

@section('content')

<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<link href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/contact1.css')}}" rel="stylesheet">


 <div class="contact_info">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                     <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/windows/32/fa314a/two-smartphones.png"/></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Telefone</div>
                             <div class="contact_info_text">+351 936487912</div>
                         </div>
                     </div> <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/fa314a/external-email-ui-essentials-flatart-icons-outline-flatarticons.png"/></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Email</div>
                             <div class="contact_info_text">renegadegym@gmail.com</div>
                         </div>
                     </div> <!-- Contact Item -->
                     <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                         <div class="contact_info_image"><img src="https://img.icons8.com/ios/50/fa314a/address--v1.png"/></div>
                         <div class="contact_info_content">
                             <div class="contact_info_title">Endereço</div>
                             <div class="contact_info_text">Rua Álvaro Pires Miranda, Leiria</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- Contact Form -->
 <div class="contact_form">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="contact_form_container">
                     <div class="contact_form_title">Fale connosco</div>
                     <form action="#" id="contact_form">
                         <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between"> <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="O teu nome" required="required" data-error="Name is required."> <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="O teu email" required="required" data-error="Email is required."> <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="O teu telemóvel"> </div>
                         <div class="contact_form_text"> <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="A tua mensagem" required="required" data-error="Por favor, escreva a sua mensagem"></textarea> </div>
                         <div class="contact_form_button"> <button type="submit" class="button contact_submit_button btn-danger">Enviar mensagem</button> </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div class="panel"></div>
 </div>

 @endsection