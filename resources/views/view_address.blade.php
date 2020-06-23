@extends('layouts.app')

@section('content')
<div class="viewAddressBody">
    <a class="addressViewTitle">Endereços</a>

    <div class="enderecosBoxes">
        @foreach ($addresses as $address)
            
        
        <div class="boxEndereco">
            <div class="box-endereco-text">
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
    <div class="addAddress">
        <a href="{{ route('address.create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
        <!-- <a href="{{ route('address.create') }}">Adicionar endereço</a> -->
    </div>
</div>
@endsection