@extends('layouts.app')

@section('content')
<div class="viewContactBody">
    <a class="contactViewTitle">Mensagens</a>

    @foreach ($contacts as $contact)
    <div class="contactBoxes">        
        
        <div class="boxContact">
            <div class="box-contact-text">
                <p>Email: {{ $contact->email }}</p>
                <p>Mensagem: {{ $contact->message }} </p>
            </div>
            <div class="actionsContact">
                <form action="#" method="POST">
                    <input hidden name="contact_id" value="{{ $contact->contact_id }}">
                    <input type="submit" class="actionContact" name="submit" value="Deletar">
                </form>

            </div>
        </div>

    </div>
@endforeach
</div>
@endsection