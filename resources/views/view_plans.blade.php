@extends('layouts.app')

@section('content')
<div class="viewPlansBody">
    <a class="viewPlansTitle">Planos</a>

    <div class="viewPlansBoxes">
        <div class="boxViewPlano">
            <div class="box-plano-titulo">
                <a>Plano Básico</a>
            </div>
            <div class="box-plano-text">
                <a>- 5 camisinhas de sabor +<br>- 5 camisinhas de textura +<br>- 5 camisinhas regulares <br><strong>Apenas 14,99!</strong></a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxViewPlano">
            <div class="box-plano-titulo">
                <a>Plano Premium</a>
            </div>
            <div class="box-plano-text">
                <a>- 5 camisinhas de sabor +<br>- 5 camisinhas de textura +<br>- 5 camisinhas regulares +<br>- 5 camisinhas especiais<br><strong>Apenas 24,99!</strong></a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxViewPlano">
            <div class="box-plano-titulo">
                <a>Plano Exxxtra</a>
            </div>
            <div class="box-plano-text">
                <a>- Escolha 20 camisinhas de sua preferência +<br>- Lubrificante<br><strong>Apenas 59,99!</strong></a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>
    </div>
</div>
@endsection