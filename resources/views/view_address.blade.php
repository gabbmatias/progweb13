@extends('layouts.app')

@section('content')
<div class="viewAddressBody">
    <a class="addressViewTitle">Endereços</a>

    <div class="enderecosBoxes">
        <div class="boxEndereco">
            <div class="box-endereco-text">
                <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_address') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>
        
        <div class="boxEndereco">
            <div class="box-endereco-text">
                <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_address') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxEndereco">
            <div class="box-endereco-text">
                <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_address') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxEndereco">
            <div class="box-endereco-text">
                <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_address') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>

        <div class="boxEndereco">
            <div class="box-endereco-text">
                <a>Rua: Rua Um<br>Núm.: 32<br>Comp.: Apto 19<br>Bairro: Centro<br>Cid.:Campo Grande<br>UF: MS<br>País: Brasil<br>CEP: 79065-012</a>
            </div>
            <div class="actions">
                <a href="{{ route('edit_address') }}">Editar</a>
                <a href="">Deletar</a>                
            </div>
        </div>
    </div>
</div>
@endsection