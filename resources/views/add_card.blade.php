@extends('layouts.app')

@section('content')
<div class="cardBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-payment.png">
    </div>
    <a class="cardFormTitle">Qual cartão usará para compra?</a>

    <form class="cardForm" method="POST" action="{{ route('subscription.store') }}">
        @csrf
        <input type="text" name="card_number" id="card_number" placeholder="Número do cartão">
        <input type="text" name="security_number" id="security_number" placeholder="Codígo de seguraça">
        <input type="text" name="expires_date" id="expires_date" placeholder="Vencimento">
        <input type="text" name="card_name" id="card_name" placeholder="Nome do titular do cartão">
        <input hidden name="plan_id" value="{{ $plan_id }}">
        <input hidden name="address_id" value="{{ $address_id }}">
        <input hidden name="type" value="2">
        <input type="submit" value="Finalizar compra">

    <form>      

</div>
@endsection