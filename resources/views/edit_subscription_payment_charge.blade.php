@extends('layouts.app')

@section('content')
<div class="boletoBody">
    
    <div class="boletoFields">
        <div class="boletoBoxesExample">
        

            <div class="boxBoletoExample">
                
                <div class="box-boleto-textExample">
                    <p><strong>Nome do pagante:</strong> </p>
                    <p><strong>Data do Vencimento:</strong> }</p>
                    <p><strong>Preço Total:</strong></p>
                </div>
                
            </div>
            
        </div>
    
        <div class="actionsBoleto">
            
            <form action="#" method="POST">
                
                <input type=submit class="voltarBoleto" value="Voltar" formaction="#">
                <input hidden name="plan_id" value="">
                <input hidden name="address_id" value="">
            </form>  
            
            <div class="backPayment">
                <form action="#" method="POST">
                
                    <input hidden name="plan_id" value="">
                    <input hidden name="address_id" value="">
                    <input hidden name="expires_date" value="">
                    <input hidden name="payer_name" value="">

                    <input hidden name="type" value="1">
                    <input name="submit" type=submit class="finalizarPagamento" value="Finalizar Pagamento" onclick="confirmation()" 
                    formaction="#">
                    
                </form> 
            </div>
                       
        </div>


        <script>
            function confirmation(){
                if(confirm('Tem certeza de que deseja finalizar pagamento?'))
                return true; 
                else 
                event.preventDefault()
                return false
            }
        </script>
        

        
    </div>
</div>
@endsection