@extends('layouts.app')

@section('content')
<div class="subscriptionBody">
    <a class="subscriptionFormTitle">Nova Assinatura</a>

    <form class="subscriptionForm" action="">
        <input type="text" name="client_id" id="client_id" value="1" hidden>

        <label for="address_id">Endereço</label>
        <select name="address_id" id="address_id">
            <option>    </option>
        </select>

        <label for="plan_id">Plano</label>
        <select name="plan_id" id="plan_id">
            <option>    </optinon>
        </select>
        
        <input type="submit" value="Cadastrar Assinatura">
    <form>      

</div>
@endsection