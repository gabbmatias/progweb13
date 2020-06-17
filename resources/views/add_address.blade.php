@extends('layouts.app')

@section('content')
<div class="addressBody">
    <a class="addressFormTitle">Novo Endereço</a>

    <form class="addressForm" method="POST" action="{{ route('address.store') }}">
        @csrf
        <input type="text" name="client_id" id="client_id" value="{{ Auth::user()->id }}" hidden>
        <input type="text" name="street" id="street" placeholder="Rua">
        <input type="text" name="street_number" id="street_number" placeholder="Número">
        <input type="text" name="complement" id="complement" placeholder="Complemento">
        <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro">
        <input type="text" name="cep" id="cep" placeholder="CEP">
        <input type="text" name="city" id="city" placeholder="Cidade">
        <input type="text" name="state" id="state" placeholder="Estado">
        <input type="text" name="country" id="country" placeholder="País">
        
        <input type="submit" value="Cadastrar Endereço">
    <form>      

</div>
@endsection