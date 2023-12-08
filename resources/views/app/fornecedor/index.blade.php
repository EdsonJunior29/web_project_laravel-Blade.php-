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

<br>

@empty($cliente2)
<!-- Para o PHP as variável são consideraveis vazias quando:
    string vazia ex: $a = '';
    Int com o valor 0 ex: $b = 0;
    Float com valor 0.0 ex: $c = 0.0;
    string com caractere 0 ex: $d = '0';
    valores null ex: $e = null;
    valores false ex: $f = false;
    array vazio ex: $g = []; ou $g = array();
    variavel sem valores ex: var $h; 
-->
    Variável está vazia......
@endempty
<br>
@isset($material)
    {{ $material[0]['preco'] ?? 'Não existe dados nesse campo'}}
@endisset

<br>

@switch($material[0]['DDD'])
    @case('11')
        São Paulo
        @break
    @case('21')
        Rio de Janeiro
        @break
    @default
        Outros estados
@endswitch

<br>
<hr>
@for ($i = 0; isset($material[$i]); $i++ )
    Name : {{ $material[$i]['name'] }}
    <br>
    CompraStatus : {{ $material[$i]['compraStatus']  }}
    <br>
    DDD : {{ $material[$i]['DDD'] }}
@endfor
<hr>
<br>

@php
    $i = 0  
@endphp 
@while(isset($material[$i]))
    
    Name : {{ $material[$i]['name'] }}
    <br>
    CompraStatus : {{ $material[$i]['compraStatus']  }}
    <br>
    DDD : {{ $material[$i]['DDD'] }}
    @php
        $i++  
    @endphp
@endwhile

<br>
<hr>

@foreach ($material as $indice => $fornecedor)
    Name : {{ $fornecedor['name'] }}  
    <br>
    CompraStatus : {{ $fornecedor['compraStatus']  }}
    <br>
    DDD : {{ $fornecedor['DDD'] }}

@endforeach

<br>
<hr>
@foreach ($material as $indice => $fornecedor)
    @switch($fornecedor['DDD'])
        @case('11')
            São Paulo
            @break
        @case('21')
            Rio de Janeiro
            @break
        @default
            Outros estados
    @endswitch
    <br>
@endforeach
