@extends('layouts.app')

@section('content')
<div class="endereco-body">
    <div class="endereco-form"> 
        <a class="title-address">Novo Endereço</a>

        <form>
            <input type="text" name="street" id="street" placeholder="Rua">
            <input type="text" name="street_numeber" id="street_number" placeholder="Número">
            <input type="text" name="complement" id="complement" placeholder="Complemento">
            <input type="text" name="neighbohood" id="neighborhood" placeholder="Bairro">
            <input type="text" name="cep" id="cep" placeholder="CEP">
            <input type="text" name="city" id="city" placeholder="Cidade">
            <input type="text" name="state" id="state" placeholder="Estado">
            <input type="text" name="country" id="country" placeholder="País">
                
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>
@endsection