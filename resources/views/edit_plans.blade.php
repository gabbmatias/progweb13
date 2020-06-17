@extends('layouts.app')

@section('content')
<div class="editPlansBody">
    <a class="editPlansFormTitle">Editar Plano</a>

    <form class="editPlansForm">
        <input type="text" name="plan_name" id="plan_name" placeholder="Nome Plano">
        <input type="text" name="price" id="price" placeholder="Preço">
        <textarea type="text" name="description" id="Description" placeholder="Descrição" style="height:100px"></textarea>
        <input type="submit" value="Atualizar Plano">
    <form>      

</div>
@endsection