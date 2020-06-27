@extends('layouts.app')

@section('content')
<div class="body1">
    <div class="imagemFluxo">
        <img src="/img/routeBar-confirmation.png">
    </div>
    <div class="confirmationTitle">
        <p>Assinatura Realizada!</p><br>
        @if ($charge_code != null)
        <h1>Código de barras:</h1>
        <h2>{{ $charge_code }}</h2>
        <div class="downloadBoleto">
            <a href="{{ route('charge.create') }}">Download Boleto</a>
        </div>
        @endif
    </div>
    <a href="{{ route('home') }}" class="retornarHome">Me leve à pagina príncipal</a>
</div>
@endsection