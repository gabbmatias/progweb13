@extends('layouts.app')

@section('content')

<div class="cardBody">
    <div class="cardBoxes">
        
            <div class="boxCard">
                <div class="box-card-icone">
                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                </div>
                <div class="box-card-text">

                    <a>Número do cartão<br/>Nome do cartão<br/>Expires date</a>
                </div>
            </div>    
    </div>  
    <div class="cardFields">
        <form method="POST" action="#">
        
            <div class="addCard">
                <input hidden name="plan_id" value="">
                <input hidden name="address_id" value="">
                <input type="submit" value="Alterar Cartão">
            </div>
        </form>
    </div>
        
        <div class="cardFields">

            <form method="POST" action="#">
                
                <div class="addCard">
                    <input hidden name="plan_id" value="">
                    <input hidden name="address_id" value="">
                    <input type="submit" value="Adicionar Cartão">
                </div>
            </form>
        </div>
        
            
            <form name="confirm_form" id="confirm_form" class="cardForm" method="POST">
                
                        <input hidden name="plan_id" value="">
                        <input hidden name="address_id" value="">
                        <input hidden type="text" name="card_number" id="card_number" value="">
                        <input hidden type="text" name="security_number" id="security_number" value="">
                        <input hidden type="text" name="expires_date" id="expires_date" value="">
                        <input hidden type="text" name="card_name" id="card_name" value="">
                        <input hidden name="type" value="2">
                        <div class="confirmacaoCartao">
                            <input type="text" name="security_number-typed" maxlength="3" id="security_number-typed" placeholder="Digite o CVV do cartão">
                        </div>
                    <span id="error_cvv"></span>
    
                    
                    <input hidden name="plan_id" value="">
                    <input hidden name="address_id" value="">
                    <div class="navegacaoCartao">
                        <input type=submit class="voltarCartao" value="Voltar" formaction="#">
                        
                            <input type=submit name="submit" id="doit" class="finalizarPagamento" value="Finalizar Pagamento" onclick="confirmation()" formaction="#">
                        
                    </div>
                
            </form>
</div>

@endsection