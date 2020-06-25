@extends('layouts.app')

@section('content')
<div class="selectPlansBody">
    <a class="selectPlansTitle">Selecione um plano</a>

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

                <form class="plansForm" onsubmit="if(confirm('Você tem certeza que deseja alterar seu plano para {{ $plan->plan_name }}?')) return true; else event.preventDefault()" method="POST" action="{{ route('subscription.plan.update') }}">
                    @csrf
                    <div class="navegacao">
                        <input hidden type="text" name="plan_id" value="{{ $plan->plan_id }}">
                        <input hidden type="text" name="subscription_id" value="{{ $subscription_id }}">
                        <input type='submit' class="cancelar" value="Selecionar">
                    </div>
                </form>             
            </div>
        </div>
    @endforeach
        
        
    </div>
    <form class="plansForm" method="POST" action="{{ route('subscription.edit') }}">
        @csrf
        <div class="navegacao">
            <input hidden type="text" name="subscription_id" value="{{ $subscription_id }}">
            <input type=submit class="cancelar" value="Cancelar">
        </div>
    </form>
</div>
@endsection