@extends('layouts.app')

@section('content')
<div class="compraFinalizdaBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-confirmation.png">
    </div>
    <div class="confirmationTitle">
        @if ($charge_code != null)
        <h5>Codigo de barras</h5>
            <h6>{{ $charge_code }}</h6>

            <a href="{{ route("charge.create") }}">Download Boleto</a>
        @endif
        <p>Pedido Confirmado!</p>
    </div>
</div>
@endsection