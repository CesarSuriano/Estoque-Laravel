@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>
<form action="/laravel/estoque/public/produtos/adiciona" method="post">

<input type="hidden" name="_token" value="{{{csrf_token()}}}">

	<div class="form-group">
		<label>Novo</label>
		<input class="form-control" type="" name="novo">	
	</div>
	
	<div class="form-group">
		<label>Descrição</label>
		<input class="form-control" type="" name="descricao">	
	</div>
	

	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" type="" name="valor">		
	</div>

	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="number" name="quantidade">		
	</div>



	<button type="submit" class="btn btn-primary btn-block">Enviar</button>

</form>
@stop