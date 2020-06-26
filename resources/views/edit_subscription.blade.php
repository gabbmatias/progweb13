@extends('layouts.app')

@section('content')
<div class="selectSubscriptionBody">

    <a class="selectSubscriptionTitle">Edite sua assinatura!</a>
    @foreach ($subscriptions as $subscription)

        <div class="editSubscriptionBoxes">
            <div class="boxEditSubscription">
                    <div class="box-subscription-titulo">
                        <a>{{ $subscription->plan_name }}</a>
                    </div>
                    <div class="box-subscription-text">
                        <a>{{ $subscription->description}}
                            <br><strong>Apenas R$ {{ $subscription->price}}!</strong></a>
                    </div>

                    <div class="actionsEditSubscriptions">
                        <form method="POST" action="{{ route('subscription.edit.plan')}}">
                            @csrf
                            <input hidden type="text" name="subscription_id" value="{{ $subscription->subscription_id }}">
                            <input type="submit" class="upgradeDowngrade" value="Fazer upgrade ou downgrade">
                        </form>
                    </div>
                
            </div>
            <div class="boxEditSubscription">
                    <div class="box-subscription-titulo">
                        <a>Endereco</a>
                    </div>
                    <div class="box-subscription-text">
                        <a><?=strtoupper( $subscription->street). ", " . strtoupper($subscription->street_number) . "<br>" .
                            strtoupper($subscription->complement) ."<br>". strtoupper($subscription->city) . ', ' .  strtoupper($subscription->state) .  "<br>" .
                            strtoupper($subscription->country) ."<br>".  strtoupper($subscription->cep) ?></a>
                    </div>

                    <div class="actionsEditSubscriptions">
                        <a href="{{ route('address.edit') }}" class="editarEnderecoPlano">Editar</a>
                    </div>
                
            </div>
            <div class="boxEditSubscription">
                    @if ($subscription->type == 'boleto')
                    <div class="box-subscription-icone">
                        <i class="fa fa-barcode" aria-hidden="true"></i>
                    </div>
                    @else
                    <div class="box-subscription-icone">
                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    </div>
                    @endif
                    <div class="box-subscription-text">
                        @if ($subscription->type == 'boleto')
                        <a>Boleto Bancário <br>{{ $subscription->payer_name }}</a>
                        @else
                        <a><?php $cnumber = explode(" ",$subscription->card_number); echo "XXXX XXXX XXXX " . end($cnumber)?><br/>
                            {{ $subscription->card_name }} <br />
                            <?= date('m', strtotime($subscription->expires_date)). '/'. date('y', strtotime($subscription->expires_date)) ?></a>
                        @endif
                    </div>
                    <div class="actionsEditSubscriptions">
                        <form method="POST" action="{{ route('subscription.edit.plan')}}">
                            <input hidden type="text" name="subscription_id" value="{{ $subscription->subscription_id }}">
                            <input type="submit" class="editarCartaoPlano" value="Editar">
                        </form>
                    </div>
                
            </div>
        </div>

    <form class="subscriptionForm">
        <div class="navegacaoSubscription">
        <input type=submit class="cancelar" formaction="{{ route('subscription.index') }}"" value="Cancelar">
        </div>
    </form>
    @endforeach
</div>
@endsection
