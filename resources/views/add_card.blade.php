@extends('layouts.app')

@section('content')
<div class="cardBody">
    <a class="cardFormTitle">Novo Cartão</a>

    <form class="cardForm" action="{{ route('card') }}">
        <input type="text" name="payment_id" id="payment_id" value="1" hidden>
        <input type="text" name="card_number" id="card_number" placeholder="Número do cartão">
        <input type="text" name="security_number" id="security_number" placeholder="Codígo de seguraça">
        <input type="text" name="card_expires" id="card_expires" placeholder="Vencimento">
        <input type="text" name="card_name" id="card_name" placeholder="Nome do titular do cartão">
        <input type="submit" value="Cadastrar Cartão">
    <form>      

</div>
@endsection