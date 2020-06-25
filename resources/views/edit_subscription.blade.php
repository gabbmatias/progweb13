@extends('layouts.app')

@section('content')
<div class="selectPlansBody">
   
    <a class="selectPlansTitle">Edite sua assinatura!</a>

    <div class="plansBoxes">
       
            
            <div class="boxPlano">
                <div class="box-plano-titulo">
                    <a>Nome Plano</a>
                </div>
                <div class="box-plano-text">
                    <a>Descricao<br><strong>Apenas preco!</strong></a>
                </div>

                <div class="actionsAddress">
                    <a href="{{ route('address.select', ['plan' => $plan->plan_id]) }}" class="selecionar">Selecionar</a>                
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