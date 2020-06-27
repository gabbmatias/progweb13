@extends('layouts.app')

@section('content')
<div class="compraFinalizdaBody">
    
    <p>Pagamento Alterado!</p>
    <div class="confirmationTitle">
        
        @if (isset($charge_code))
            <h5>Código de barras:</h5>
            <h6>{{ $charge_code }}</h6>
            <div class="downloadBoleto">
                <a href="{{ route('charge.create') }}">Download Boleto</a>
            </div>
        @endif
       
    </div>
      <form method="POST">
            @csrf
            <input hidden type="text" name="subscription_id" value="{{ $subscription_id }}">
         <input type=submit class="voltarBoleto" value="Voltar para inscrições" formaction="{{ route('subscription.edit') }}">
      </form>  
</div>
@endsection