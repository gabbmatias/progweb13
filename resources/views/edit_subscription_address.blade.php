@extends('layouts.app')

@section('content')
<div class="addressBody">
    
    <div class="addressFields">
        <a class="selectPlansTitle">Endereço</a>
        <div class="enderecosBoxesExample">

            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                <a>Rua, número<br>
                    complement<br>Cidade, Estado<br>
                    país<br>cep</a>
                </div>
                <div class="actionsSelectAddress">
                    
                    <form action="#" method="POST">
                        
                        <input hidden name="address_id" value="#">
                        <input hidden name="plan_id" value="#">
                        <input type="submit" class="selecionarEndereco" name="submit" value="Selecionar">
                    </form>               
                </div>
            </div>
        </div>
        
        
        <a class="voltarAddress" href="#">Voltar</a>
    </div>
</div>
@endsection