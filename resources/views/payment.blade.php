@extends('layouts.app')

@section('content')
<div class="paymentBody">
    <a class="paymentTitle">Qual a forma de pagamento?</a>
    <div class="paymentFields">
        <form>
           <button class="selectPayment">
                <i class="fa fa-file-text-o"></i>
           </button>

           <button class="selectPayment" formaction="{{ route('card') }}">
                <i class="fa fa-credit-card"></i>
           </button>
       
            <!-- <input type=button class="selectPayment" value="Cartão >" formaction="{{ route('card') }}"> -->
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('address') }}">
            </div>
        </form>
    </div>
</div>
@endsection