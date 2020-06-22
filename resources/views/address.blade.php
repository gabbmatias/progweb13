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

        {{-- ======================================== mexer aquiiiiii ========================================--}}
        @foreach ($plans as $plan)
            <div>
                <span>Plano selecionado:</span><br/>
                <span>{{$plan->plan_name}}</span>
            </div>  
        @endforeach
        
        {{-- ======================================== @ ricardok ================================================ --}}

        <div class="enderecosBoxesExample">
        @foreach ($addresses as $address)

            <div class="boxEnderecoExample">
                <div class="box-endereco-textExample">
                <a><?=strtoupper( $address->street). ", " . strtoupper($address->street_number) . "<br>" .
                    strtoupper($address->complement) ."<br>". strtoupper($address->city) . ', ' .  strtoupper($address->state) .  "<br>" .
                    strtoupper($address->country) ."<br>".  strtoupper($address->cep) ?></a>
                </div>
                <div class="actionsAddress">
                    <form action="{{ route('address.edit') }}" method="POST">
                        @csrf
                        <input hidden name="address_id" value="{{ $address->address_id }}">
                        <input type="submit" class="action" name="submit" value="Editar">
                    </form>

                    <a href="" class="selecionar">Selecionar</a>                
                </div>
            </div>
            @endforeach
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