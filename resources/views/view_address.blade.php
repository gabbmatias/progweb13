@extends('layouts.app')

@section('content')
<div class="viewAddressBody">
    <a class="addressViewTitle">Endereços</a>

    <div class="enderecosBoxesView">
        @foreach ($addresses as $address)
            
        
        <div class="boxEnderecoView">
            <div class="box-endereco-text-view">
                <a>{{ $address->street }}<br>{{ $address->street_number }}<br>{{ $address->complement }}<br>{{ $address->neighborhood }}<br>
                    {{ $address->city}}<br>{{ $address->state }}<br>{{ $address->country }}<br>{{ $address->cep }}</a>
            </div>
            <div class="actions">
                
                <form action="{{ route('address.edit') }}" method="POST">
                    @csrf
                    <input hidden name="address_id" value="{{ $address->address_id }}">
                    <input type="submit" class="action" name="submit" value="Editar">
                </form>
                
                
                <form action="{{ route('address.destroy') }}" method="POST">
                    @csrf
                    <input hidden name="address_id" value="{{ $address->address_id }}">
                    <input type="submit" class="action" name="submit" value="Deletar">
                </form>

            </div>
        </div>

        @endforeach
    </div>
    <div class="addAddressView">
        <a href="{{ route('address.create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
    </div>
    <img class= "generic-background" src="/img/generic-background.png">
</div>
@endsection