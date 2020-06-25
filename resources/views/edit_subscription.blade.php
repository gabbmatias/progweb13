@extends('layouts.app')

@section('content')
<div class="selectSubscriptionBody">
   
    <a class="selectSubscriptionTitle">Edite sua assinatura!</a>

    <div class="rowBoxes">
        <div class="subscriptionBoxes">
            <div class="boxSubscriptionPlan">
                <div class="box-subscription-titulo-plan">
                    <a>Premium</a>
                </div>
                <div class="box-subscription-text-plan">
                    <a>Receba 20 camisinhas diretamente na sua residência! Quatro variadades! Contendo cinco camisinhas de cada variedade!
                        <br><strong>Apenas 24.99!</strong></a>
                </div>

                <div class="actionsAddress">
                    <a href="{{ route('subscription.edit.plan') }}" class="selecionar">Fazer upgrade ou downgrade</a>                
                </div>
            </div>
        </div>
        <div class="subscriptionBoxes">
            <div class="boxSubscriptionEndereco">
                <div class="box-subscription-titulo">
                    <a>Endereco</a>
                </div>
                <div class="box-subscription-text">
                    <a>RUA GUAIRA<br>2141<br>CASA<br>neighboor<br>
                    GUARAPUAVA<br>PR<br>BRAZIL<br>85065240</a>
                </div>

                <div class="actionsAddress">
                    <a href="#" class="selecionar">Editar</a>                
                </div>
            </div>
        </div>

        <div class="subscriptionBoxes">   
            <div class="boxSubscriptionCard">
            
                <div class="box-card-icone">
                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                </div>
                <div class="box-card-text">

                    <a>0000 0000 0000 0000 <br/> ERICCA RICKLI <br/> 
                    05/05</a>
                </div>
                <div class="actionsAddress">
                    <a href="#" class="selecionar">Editar</a>                
                </div>
            </div>
        </div>
    </div>
    
    <form class="subscriptionForm">
        <div class="navegacaoSuncription">
            <input type=submit class="confirmar" formaction="#" value="Atualizar plano.">
        </div>
        <div class="navegacaoSuncription">
            <input type=submit class="cancelar" formaction="#" value="Cancelar">
        </div>
    </form>
</div>
@endsection