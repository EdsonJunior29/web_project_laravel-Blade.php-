@extends('app.index')

@section('title', 'Fornecedores')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedores - Listagem</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="fornecedores/teladecadastro">Novo</a></li>
            <li><a href="/app/fornecedores">Consulta</a></li>
        </ul>
    </div>
    <div class="infomacao-pagina">
        <div style="width: 90%; margin-left: auto; margin-right: auto;">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Site</th>
                        <th>Email</th>
                        <th>UF</th>
                        <th>Atualizar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $fornecedor )     
                    <tr>
                        <td>{{ $fornecedor->name }}</td>
                        <td>{{ $fornecedor->site }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td>{{ $fornecedor->uf }}</td>
                        <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                        <td><a href="{{ route('app.fornecedor.delete', $fornecedor->id) }}">Excluir</a></td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>
            {{ $fornecedores->appends($request)->links() }}
        </div>
    </div>
</div>

@endsection