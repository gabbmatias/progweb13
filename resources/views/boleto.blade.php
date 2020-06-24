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
                <div class="box-boleto-textExample">
                    <p>Nome do pagante</p>
                    <p>Data de vencimento</p>
                    <p>Valor Total</p>
                </div>
            
            </div>
            
        </div>
    
        <!--
            ///////////////////////////////////////////////////////
            /////////////////////Fim do examplo////////////////////
            ///////////////////////////////////////////////////////
        -->


        <div class="actionsBoleto">
            
            <form action="#" method="POST">
                <input type="submit" class="selecionar" name="submit" value="Voltar">
            </form>  
            
            <div class="backPayment">
                <form action="#" method="POST">
                    <input type="submit" class="selecionar"
                    formaction="{{ route('finalizar') }}" name="submit" value="Finalizar Compra">
                </form> 
            </div>
                       
        </div>


        
        

        
    </div>
</div>
@endsection