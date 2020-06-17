@extends('layouts.app')

@section('content')
<div class="registerPlansBody">
    <a class="registerPlansFormTitle">Novo Plano</a>

    <form class="registerPlansForm">
        <input type="text" name="plan_name" id="plan_name" placeholder="Nome Plano">
        <input type="text" name="price" id="price" placeholder="Preço">
        <textarea type="text" name="description" id="Description" placeholder="Descrição" style="height:100px"></textarea>
        <input type="submit" value="Cadastrar Plano">
    <form>      

</div>
@endsection