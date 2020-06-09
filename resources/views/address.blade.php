@extends('layouts.app')

@section('content')
<div class="addressBody">
    <a class="addressTitle">Informe seu endereço para entrega</a>
    <div class="addressFields">
        <div class="addAddress">
            <input type="submit" value="+">
            <a href="{{ route('add_address') }}">Adicionar Endereço</a>
        </div>
        
        <form class="addressForm">
            <!-- Checkbox para selecionar o endereço
            <input type="checkbox" id="" name="">
            -->
            
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar">
                <input type=submit value="Próximo" formaction="{{ route('payment') }}">
            </div>
        </form>
    </div>
</div>
@endsection