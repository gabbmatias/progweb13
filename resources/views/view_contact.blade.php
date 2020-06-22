@extends('layouts.app')

@section('content')
<div class="viewContactBody">
    <a class="contactViewTitle">Mensagens</a>

    
    <div class="contactBoxes">        
    @foreach ($contacts as $contact)    
        <div class="boxContact">
            <div class="box-contact-text">
                <p>{{ $contact->email }}</p>
                <textarea disabled>{{ $contact->message }}</textarea>
            </div>
            <div class="actionsContact">
                <form action="#" method="POST">
                    <input hidden name="contact_id" value="{{ $contact->contact_id }}">
                    <input type="submit" class="actionContact" name="submit" value="Deletar">
                </form>

            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection