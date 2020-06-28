@extends('layouts.app')

@section('content')
<div class="body1">

    <div class="title10">
    <p>Pagamento Alterado!</p>
        @if (isset($charge_code))
            <h5>Código de barras:</h5>
            <h6>{{ $charge_code }}</h6>
            <div class="downloadBoleto">
                <a href="{{ route('charge.create') }}">Download Boleto</a>
            </div>
        @endif
       
    </div>
      <form method="GET">
            @csrf
         <input type=submit class="voltarBoleto" value="Voltar para inscrições" formaction="{{ route('subscription.index') }}">
      </form>  
</div>
@endsection