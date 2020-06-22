@extends('layouts.app')

@section('content')
<div class="addressBody">
    <a class="addressTitle">Informe seu endereço para entrega</a>
    <div class="addressFields">
        <!--
            //////////////////////////////////////////////////
            Aqui é apenas o exemplo de como eu quero que fique
            //////////////////////////////////////////////////
        -->
        <div class="enderecosBoxesExample">
            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                    <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
                </div>
                <div class="actionsAddress">
                    <a href="{{ route('address.edit') }}">Editar</a>
                    <a href="" class="selecionar">Selecionar</a>                
                </div>
            </div>

            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                    <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
                </div>
                <div class="actionsAddress">
                    <a href="{{ route('address.edit') }}">Editar</a>
                    <a href="" class="selecionar">Selecionar</a>                
                </div>
            </div>

            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                    <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
                </div>
                <div class="actionsAddress">
                    <a href="{{ route('address.edit') }}">Editar</a>
                    <a href="" class="selecionar">Selecionar</a>                
                </div>
            </div>

            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                    <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
                </div>
                <div class="actionsAddress">
                    <a href="{{ route('address.edit') }}">Editar</a>
                    <a href="" class="selecionar">Selecionar</a>                
                </div>
            </div>
        </div>
        <!--
            ///////////////////////////////////////////////////////
            /////////////////////Fim do examplo////////////////////
            ///////////////////////////////////////////////////////
        -->





        <div class="addAddress">
            <input type="submit" value="+">
            <a href="{{ route('address.create') }}">Adicionar Endereço</a>
        </div>
        
        <form class="addressForm">
            <!-- Checkbox para selecionar o endereço
            <input type="checkbox" id="" name="">
            -->
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar">
                <input type=submit value="Próximo" formaction="#">
            </div>
        </form>
    </div>
</div>
@endsection