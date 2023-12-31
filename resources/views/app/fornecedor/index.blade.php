@extends('app.index')

@section('title', 'Fornecedores')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedores</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="fornecedores/teladecadastro">Novo</a></li>
            <li><a href="/app/fornecedores">Consulta</a></li>
        </ul>
    </div>
    <div class="infomacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="fornecedores/listar" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Nome" class="borda-preta">
                <input type="text" name="site" placeholder="site" class="borda-preta">
                <input type="text" name="email" placeholder="Email" class="borda-preta">
                <input type="text" name="uf" placeholder="UF" class="borda-preta">
                <button type="submit" class="borda-preta">Pesquisar</button>
            </form>
        </div>
    </div>
</div>

@endsection