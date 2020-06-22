@extends('layouts.app')

@section('content')
<div class="container-body-all">
    <div class="boxes">
        <div class="box-blured">
            <div class="box-title">
                <span>Fale Conosco</span>
            </div>
            <div class="container">

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                    <input type="text" id="email" name="email" placeholder="Seu E-mail">
                    <textarea id="subject" name="message" placeholder="Sua Mensagem" style="height:100px"></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <div class="box-blured">
            <div class="box-title">
                <span>Contato</span>
            </div>
            <div class="box-message-contact">
                <a>Telefone:<br><br>0800-SE-PRESERVE<br><br><br>E-mail:<br><br>preserve@preserve.com</a>
            </div>

        </div>
        
    </div>
</div>
@endsection