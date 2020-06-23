@extends('layouts.app')

@section('content')
<div class="cardBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-payment.png">
    </div>
    <a class="cardTitle">Escolha ou adicione um cartão</a>
    <div class="cardBoxes">
        <div class="boxCard">
                <div class="box-card-text">
                    
                </div>
        </div>
    </div>
    <div class="cardFields">
        <div class="addCard">
            <input type="submit" value="+">
            <a href="{{ route('credit_card.create') }}">Adicionar Cartão</a>
        </div>
        
        <form class="cardForm" method="POST">
            <!-- Checkbox para selecionar o cartão
            <input type="checkbox" id="" name="">
            -->
            
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('payment.select') }}">
                <input type=submit value="Finalizar Pagamento" formaction="{{ route('home') }}">
            </div>
        </form>
    </div>
</div>
@endsection