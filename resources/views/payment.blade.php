@extends('layouts.app')

@section('content')
<div class="paymentBody">
    <a class="paymentTitle">Qual a forma de pagamento?</a>
    <div class="paymentFields">
        <form>
            <input type=button class="selectPayment" value="Boleto >">
            <input type=button class="selectPayment" value="Cartão >" formaction="{{ route('card') }}">
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('address') }}">
            </div>
        </form>
    </div>
</div>
@endsection