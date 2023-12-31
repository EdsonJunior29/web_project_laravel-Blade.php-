@extends('app.index')

@section('title', 'Fornecedores')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedores - Listagem</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="fornecedores/adicionar">Novo</a></li>
            <li><a href="/app/fornecedores">Consulta</a></li>
        </ul>
    </div>
    <div class="infomacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
           ..... Lista
        </div>
    </div>
</div>

@endsection