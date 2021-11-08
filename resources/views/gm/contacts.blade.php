@extends('master')

@section('title', 'Contactos')

@section('content')
<link rel="stylesheet" href="css/contacts.css">

<div class="container contact-form">
            <div class="contact-image">
                <img src="img/logo.png" alt="Logotipo"/>
            </div>
            <form method="post">
                <h3>Envia a tua mensagem</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="O teu nome *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="O teu e-mail *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="O teu número de telefone *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="A tua mensagem*" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
@endsection