@extends('layouts.app')

@section('content')
<div class="subBar">
  <div class="blurred-box">
    <a class="text-title">PreservSign</a>
    <a class="text-description">Você pode receber camisinhas exclusivas<br> e acessórios para apimentar sua relação<br> na segurança e discrição da sua casa!</a>
    <a href="#" class="btn-signUp">Eu Quero!</a>
  </div>
</div>
<div class="instrucoes">
  <div class="assine">
    <div class="assine-box">
      <i class="fa fa-cart-plus"></i>
      <p><strong>ESCOLHA O PLANO DE SUA PREFERÊNICA</strong></p>
      <div class="description-icon">Adquira quantas camisinhas você desejar</div>
    </div>
  </div>

  <div class="assinaturas">
    <div class="assinaturas-left">
      <i class="fa fa-credit-card" ></i>
      <p><strong>CARTÃO DE CRÉDITO</strong></p>
      <div class="description-icon">Aceitamos todas as bandeiras de cartão <br> para você realizar o seu pagamento</div>
    </div>
    <div class="assinaturas-right">
      <i class="fa fa-file"></i>
      <p><strong>EMISSÃO DE BOLETOS</strong></p>
      <div class="description-icon">Emitimos boleto para você realizar <br> o seu pagamento</div>
    </div>
  
  </div>
  <div class="produtos">
      <div class="produtos-left">
          <i class="fa fa-calendar"></i>
          <p><strong>TODO MÊS PARA VOCÊ</strong></p>
          <div class="description-icon">Assine já e desfrute de todos o benefícios sem preocupação</div>
      </div>
      <div class="produtos-right">
        <i class="fa fa-home"></i>
        <p><strong>RECEBA SEU PRODUTO EM CASA</strong></p>
        <div class="description-icon">Receba seu produto com segurança no conforto de sua residência</div>
      </div>
      <div class="produtos-center">
          <i class="fa fa-truck"></i>
          <p><strong>FRETE GRÁTIS</strong></p>
          <div class="description-icon">Entregamos para qualquer região do Brasil</div>
      </div>
  </div>
</div>
@endsection