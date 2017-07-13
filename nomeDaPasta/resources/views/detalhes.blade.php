@extends('principal')

@section('conteudo')
<h1>detalhes do produtos {{$p->nome}}</h1>
<ul>
	<li>Descrição:{{$p->descricao}}</li>
</ul>

<ul>
	<li>Valor:{{$p->valor}}</li>
</ul>
<ul>
	<li>Quantidade:{{$p->quantidade}}</li>
</ul>
@stop