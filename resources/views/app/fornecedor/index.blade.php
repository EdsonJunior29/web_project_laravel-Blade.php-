<h3>Fornecedor Index</h3>

@dd($clientes)

@if($clientes > 5)
    <h3>Temos mais de 5 cliente</h3>
@endif

@if(count($fornecedores) > 0 && count($fornecedores) < 5)
    <h3>Temos poucos fornecedores</h3>
@elseif (count($fornecedores) > 5)
    <h3>Temos mais de 5 fornecedores</h3>
@else
    <h3>Temos mais de 10 fornecedores</h3>
@endif

