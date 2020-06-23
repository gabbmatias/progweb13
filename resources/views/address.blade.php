@extends('layouts.app')

@section('content')
<div class="addressBody">
    <div class="imagemFluxo">
        <img src="/img/routeBar-address.png">
    </div>
    <div class="addressFields">
        <!--
            //////////////////////////////////////////////////
            Aqui é apenas o exemplo de como eu quero que fique
            //////////////////////////////////////////////////
        -->

        @foreach ($plans as $plan)
            <div>
                <span class="planoSelecionado">{{$plan->plan_name}}</span>
                <?php 
                    $flag= $plan->plan_id;
                ?>
            </div>  
        @endforeach
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

                    <form action="{{ route('payment.select') }}" method="POST">
                        @csrf
                        <input hidden name="address_id" value="{{ $address->address_id }}">
                        <input hidden name="plan_id" value="<?= $flag ?>">
                        <input type="submit" class="selecionar" name="submit" value="Selecionar">
                    </form>                
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
            <a href="{{ route('address.create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
            <!--<a href="{{ route('address.create') }}">Adicionar Endereço</a>-->
        </div>
        

        <a href="{{ route('plan.select')}}">Voltar</a>
    </div>
</div>
@endsection