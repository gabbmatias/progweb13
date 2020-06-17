@extends('layouts.app')

@section('content')
<div class="viewSubscriptionsBody">
    <a class="viewSubscriptionsTitle">Assinaturas</a>

    <div class="viewSubscriptionsBoxes">
        <div class="boxViewSubscriptions">
            <div class="box-subscriptions-title">
                <a>Assinatura 1</a>
            </div>
            <div class="box-subscriptions-text">
                <a><strong>Plano:</strong><br>Plano Exxxtra<br><strong>Endereço:</strong><br>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxViewSubscriptions">
            <div class="box-subscriptions-title">
                <a>Assinatura 2</a>
            </div>
            <div class="box-subscriptions-text">
                <a><strong>Plano:</strong><br>Plano Premium<br><strong>Endereço:</strong><br>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxViewSubscriptions">
            <div class="box-subscriptions-title">
                <a>Assinatura 3</a>
            </div>
            <div class="box-subscriptions-text">
                <a><strong>Plano:</strong><br>Plano Básico<br><strong>Endereço:</strong><br>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_plans') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>
    </div>
</div>
@endsection