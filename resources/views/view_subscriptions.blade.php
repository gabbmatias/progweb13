@extends('layouts.app')

@section('content')
<div class="viewSubscriptionsBody">
    <a class="viewSubscriptionsTitle">Assinaturas</a>

    <div class="viewSubscriptionsBoxes">
        @foreach ($subscriptions as $subscription)
            <div class="boxViewSubscriptions">
                <div class="box-subscriptions-title">
                    <a>{{ $subscription->plan_name }}</a>
                </div>
                <div class="box-subscriptions-text">
                    <a><strong>Preço:</strong><br>{{ $subscription->price }}<br>
                        <br><strong>Endereço:</strong><?= "<br>" .strtoupper( $subscription->street). ", " . strtoupper($subscription->street_number) . "<br>" .
                        strtoupper($subscription->complement) ."<br>". strtoupper($subscription->city) . ', ' .  strtoupper($subscription->state) .  "<br>" .
                        strtoupper($subscription->country) ."<br>".  strtoupper($subscription->cep) . '<br><strong> Pagamento:</strong><br>' . end(explode(' ', $subscription->card_number ))?></a>
                </div>
                <div class="actions">
                    <a href="{{ route('subscription.edit') }}">Editar</a>
                    <a href="">Deletar</a>                
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection