@extends('layouts.app')

@section('content')
<div class="paymentBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-payment.png">
    </div>
    <a class="paymentTitle">Qual a forma de pagamento?</a>
    <div class="paymentFields">
        <form method="POST">
            @csrf
            <button class="selectPayment" formaction="{{ route('boleto.select') }}">
                <div class="boleto-payment">
                    <i class="fa fa-file-text-o"></i>
                    <p>Boleto</p>
                </div>

            </button>

            <button class="selectPayment" formaction="{{ route('credit_card.select') }}">
                <div class="credit-card-payment">
                    <i class="fa fa-credit-card"></i>
                    <input hidden name="plan_id" value="{{ $plan_id }}">
                    <input hidden name="address_id" value="{{ $address_id }}">

                    <p>Cartão de Crédito</p>
                </div>
            </button>

            <!-- <input type=button class="selectPayment" value="Cartão >" formaction="#lula"> -->
        </form>
        <form method="GET">
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" 
                    formaction="{{ route('address.select', ['plan' =>  $plan_id]) }}">
            </div>
        </form>
    </div>
</div>
@endsection
