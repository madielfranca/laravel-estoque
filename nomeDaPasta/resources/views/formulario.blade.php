@extends('principal')

@section('conteudo')
<form action="/produtos/adiciona" method="POST">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
		<label>Nome</label>
	<input name="nome" class="form-control"/>

<div class="form-group">
	<label>Valor</label>
	<input name="valor" class="form-control"/>
</div>

<div class="form-group">
	<label>Quantidade</label>
	<input name="quantidade" class="form-control"/>
</div>

<div class="form-group">
	<label>Descrição</label>
	<textarea name="descricao" class="form-control"></textarea>
</div>

	<button class="btn btn-primary" type="submit">Adicionar</button>
</div>

</form>
@stop