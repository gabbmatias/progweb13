@extends('layouts.app')

@section('content')
<div class="boletoBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-payment.png">
    </div>
    <div class="boletoFields">
        <!--
            //////////////////////////////////////////////////
            Aqui é apenas o exemplo de como eu quero que fique
            //////////////////////////////////////////////////
        -->

       
        <div class="boletoBoxesExample">
        

            <div class="boxBoletoExample">
                @foreach($plans as $plan)
                <div class="box-boleto-textExample">
                    <p><strong>Nome do pagante:</strong> {{ $payer_name }}</p>
                    <p><strong>Data do Vencimento:</strong> {{ $expires_date }}</p>
                    <p><strong>Preço Total:</strong> {{ $plan->price }}</p>
                </div>
                @endforeach
            </div>
            
        </div>
    
        <!--
            ///////////////////////////////////////////////////////
            /////////////////////Fim do examplo////////////////////
            ///////////////////////////////////////////////////////
        -->


        <div class="actionsBoleto">
            
            <form action="#" method="POST">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('payment.select') }}">
            </form>  
            
            <div class="backPayment">
                <form action="#" method="POST">
                @csrf
                    <input hidden name="plan_id" value="{{ $plan->plan_id }}">
                    <input hidden name="address_id" value="{{ $address_id }}">
                    <input hidden name="expires_date" value="{{ $expires_date }}">
                    <input hidden name="payer_name" value="{{ $payer_name }}">

                    <input hidden name="type" value="1">
                    <input name="submit" type=submit class="selecionar" value="Finalizar Pagamento" onclick="confirm('Tem certeza de que deseja finalizar pagamento?')" 
                    formaction="{{ route('subscription.charge') }}">
                    
                </form> 
            </div>
                       
        </div>


        
        

        
    </div>
</div>
@endsection