<h3>Fornecedor Index</h3>

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

<!-- execulta o código se o retorno for true(nesse caso não vai entrar no if) --> 
@if ($material[0]['compraStatus'] == 'R')
    Compra aprovada com sucesso!!!   
@endif

<!-- unless execulta se o retorno da validação for false(nesse caso vai acessar o código dentro do unless) --> 

@unless($material[0]['compraStatus'] == 'R')
    Compra não aprovada! Favor verificar a forma de pagamento.  
@endunless

<!-- Verifica se a variável ou array foi definido. (Retorna True ou false)-->
@isset($edson)
    Esse bloco não será executado. Pois, na view mão está definida a variável
    $edson.
@endisset

@dd($material)

