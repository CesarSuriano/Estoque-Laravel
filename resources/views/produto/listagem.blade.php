@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
<div class="alert alert-danger">Você não tem produtos cadastrados</div>

@else
<h1>Listagem de produtos</h1>
<table class="table table-bordered table-hover table-striped">
	@foreach ($produtos as $p )
	<tr class={{$p->quantidade<=1 ? 'danger' : ''}}>
		<td>{{$p->nome }}</td>
		<td>{{$p->valor}}</td>
		<td>{{$p->descricao }}</td>
		<td>{{$p->quantidade }}</td>
		<td><a href="produtos/mostra/<?=$p->id?>"><span class="glyphicon glyphicon-search"></span></a></td>
	</tr>

	@endforeach
</table>
@endif

<h4>
	<span class="label label-danger pull-right">Estoque baixo</span>
</h4>

<div class="alert alert-success">
	<strong>Sucesso!</strong>
	O produto {{ old('nome') }} foi adicionado.
</div>

@stop

