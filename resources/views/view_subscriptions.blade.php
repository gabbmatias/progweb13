

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
                        <strong>Endereço:</strong><?= "<br>" .strtoupper( $subscription->street). ", " . strtoupper($subscription->street_number) . "<br>" .
                        strtoupper($subscription->complement) ."<br>". strtoupper($subscription->city) . ', ' .  strtoupper($subscription->state) .  "<br>" .
                        strtoupper($subscription->country) ."<br>".  strtoupper($subscription->cep) . '<br><strong> Pagamento:</strong><br>'?> 
                        @if ($subscription->type == 'cartao_credito')
                        <?php $cnumber = explode(" ",$subscription->card_number); echo "XXXX XXXX XXXX " . end($cnumber) . "<br>Pagamento será todo dia <strong>" . $subscription->created_at . "</strong>"?></a>
                        
                        @else
                            Boleto Bancário</a>
                        @endif
                </div>
                <div class="actions">
                    <a href="{{ route('subscription.edit') }}">Editar</a>

                    <form method="POST" action="{{ route('subscription.destroy')}}">
                        @csrf
                        <input hidden name="subscription_id" value="{{ $subscription->subscription_id }}">
                        <input type="submit" onclick="confirm('Tem certeza de que deseja apagar está assinatura?')" value="Deletar"> 
                    </form>
                                 
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection