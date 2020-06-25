@extends('layouts.app')

@section('content')
<div class="selectPlansBody">
    <a class="selectPlansTitle">Selecione um plano</a>

    <div class="plansBoxes">
        
            
            <div class="boxPlano">
                <div class="box-plano-titulo">
                    <a>Nome do plano</a>
                </div>
                <div class="box-plano-text">
                    <a> Descricao <br><strong>Apenas Preco!</strong></a>
                </div>

                <div class="actionsAddress">
                    <a href="#" class="selecionar">Selecionar</a>                
                </div>
            </div>
        
        
    </div>
    <form class="plansForm" action="/">
        <div class="navegacao">
            <input type=submit class="cancelar" value="Cancelar">
        </div>
    </form>
</div>
@endsection