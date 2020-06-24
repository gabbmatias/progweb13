@extends('layouts.app')

@section('content')
<div class="cardBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-payment.png">
    </div>
    <div class="cardBoxes">
        @if ( $credit_cards != null )
            @foreach ($credit_cards as $credit_card)
                <div class="boxCard">
                    <div class="imagemFluxo">
                        <img src="/img/logo-mastercard-mobile.svg">
                    </div>
                        <div class="box-card-text">
                            <a><?=strtoupper( $credit_card->card_number). "<br/>" . strtoupper($credit_card->card_name) .  "<br/>". 
                            date('m', strtotime($credit_card->expires_date)). '/'. date('y', strtotime($credit_card->expires_date)) ?></a>
                        </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="cardFields">

        <form method="POST" action="{{ route('credit_card.create') }}">
            @csrf
            <div class="addCard">
                <input hidden name="plan_id" value="{{ $plan_id }}">
                <input hidden name="address_id" value="{{ $address_id }}">
                <input type="submit" value="Adicionar Cartão">
            </div>
        </form>
        
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