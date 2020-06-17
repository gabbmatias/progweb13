@extends('layouts.app')

@section('content')
<div class="viewPlansBody">
    <a class="viewPlansTitle">Planos</a>

    @foreach ($plans as $plan)

        <div class="viewPlansBoxes">
            <div class="boxViewPlano">
                <div class="box-plano-titulo">
                <a>{{ $plan->plan_name}}</a>
                </div>
                <div class="box-plano-text">
                    <a> {{ $plan->description}}
                        <br><strong>Apenas R$ {{ $plan->price }}!</strong></a>
                </div>
                <div class="actions">

                    <form id="update-form" action="{{ route('plan.edit') }}" method="POST">
                        @csrf
                        <input hidden name="plan_id" value="{{ $plan->plan_id }}">
                        <input type="submit" name="submit" value="Editar">
                    </form>
                    
                    <form id="update-form" action="{{ route('plan.destroy') }}" method="POST">
                        @csrf
                        <input hidden name="plan_id" value="{{ $plan->plan_id }}">
                        <input type="submit" name="submit" value="Remover">
                    </form>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
