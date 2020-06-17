@extends('layouts.app')

@section('content')
<div class="cardBody">
    <a class="cardTitle">Informe seu cartão para pagamento</a>
    <div class="cardFields">
        <div class="addCard">
            <input type="submit" value="+">
            <a href="{{ route('add_card') }}">Adicionar Cartão</a>
        </div>
        
        <form class="cardForm">
            <!-- Checkbox para selecionar o cartão
            <input type="checkbox" id="" name="">
            -->
            
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('payment') }}">
                <input type=submit value="Finalizar Pagamento" formaction="{{ route('home') }}">
            </div>
        </form>
    </div>
</div>
@endsection