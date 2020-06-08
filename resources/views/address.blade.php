@extends('layouts.app')

@section('content')
<div class="enderecoBody">
    <a class="formTitle">Novo Endereço</a>

    <form class="addressForm" action="{{ route('address.store') }}">
        <input type="text" name="client_id" id="client_id" value="1" hidden>
        <input type="text" name="street" id="street" placeholder="Rua">
        <input type="text" name="street_numeber" id="street_number" placeholder="Número">
        <input type="text" name="complement" id="complement" placeholder="Complemento">
        <input type="text" name="neighbohood" id="neighborhood" placeholder="Bairro">
        <input type="text" name="cep" id="cep" placeholder="CEP">
        <input type="text" name="city" id="city" placeholder="Cidade">
        <input type="text" name="state" id="state" placeholder="Estado">
        <input type="text" name="country" id="country" placeholder="País">
        <input type="submit" value="Cadastrar Endereço">
    <form>      

</div>
@endsection