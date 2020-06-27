@extends('layouts.app')

@section('content')
<div class="cardBody">
    
    <a class="cardFormTitle">Qual cartão usará para compra?</a>

    <form class="cardForm" method="POST" action="#">
       
        <input required type="text" name="card_number" id="card_number" minlength="19" placeholder="Número do cartão">
        <input required type="text" name="security_number" minlength="3" maxlength="3" id="security_number" placeholder="Codígo de seguraça">
        <input required type="text" name="expires_date" minlength="5" id="expires_date" placeholder="Vencimento">
        <input required type="text" name="card_name" id="card_name" placeholder="Nome do titular do cartão">
        <input hidden name="plan_id" value="">
        <input hidden name="address_id" value="">
        <input hidden type="text" name="security_number-typed" id="security_number-typed">
        <input hidden name="type" value="2">
        <input type="submit" class="finalizarPagamento" name="submit" value="Finalizar compra">

    <form>      

</div>


@endsection