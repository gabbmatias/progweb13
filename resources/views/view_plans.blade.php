@extends('layouts.app')

@section('content')
<div class="body2">
    <a class="title10">Planos</a>
    <div class="viewPlansBoxes">
        @foreach ($plans as $plan)

        <div class="boxViewPlano">
            <div class="box-plano-titulo">
            <a>{{ $plan->plan_name}}</a>
            </div>
            <div class="box-plano-text">
                <a> {{ $plan->description}}<br><strong>Apenas R$ {{ $plan->price }}!</strong></a>
            </div>
            <div class="actionsPlans">

                <form id="update-form" action="{{ route('plan.edit') }}" method="POST">
                    @csrf
                    <input hidden name="plan_id" value="{{ $plan->plan_id }}">
                    <input type="submit" class="actionViewPlan" name="submit" value="Editar">
                </form>
                    
                <form id="update-form" action="{{ route('plan.destroy') }}" method="POST">
                    @csrf
                    <input hidden name="plan_id" value="{{ $plan->plan_id }}">
                    <input type="submit" class="actionViewPlan" name="submit" value="Remover">
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="addPlan">
        <a title="Adicionar Plano" href="{{ route('plan.create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
        <!-- <a href="{{ route('plan.create') }}">assd</a> -->
    </div>
    <img class="generic-background" src="/img/generic-background.png" alt="Uma mão segurando um camisinha emblada.">
</div>
@endsection
