@extends('layouts.app')

@section('content')
<div class="selectPlansBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-plans.png">
    </div>
    <a class="selectPlansTitle">Selecione um plano</a>

    @if ($error != null)
        <a>{{ $error }}</a>
    @endif

    <div class="plansBoxes">
        @foreach ($plans as $plan)
            
            <div class="boxPlano">
                <div class="box-plano-titulo">
                    <a>{{ $plan->plan_name }}</a>
                </div>
                <div class="box-plano-text">
                    <a> {{ $plan->description }} <br><strong>Apenas {{ $plan->price}}!</strong></a>
                </div>

                <div class="actionsAddress">
                    <a href="{{ route('address.select', ['plan' => $plan->plan_id]) }}" class="selecionar">Selecionar</a>                
                </div>
            </div>
        @endforeach
        
    </div>
    <form class="plansForm" action="/">
        <div class="navegacao">
            <input type=submit class="cancelar" value="Cancelar">
        </div>
    </form>
</div>
@endsection