@extends('site.layouts.index')

@section('title', 'Contato')
@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>
    <div class="informacao-pagina">
        <div class="contato-principal">
           @component('site.layouts._components.form', ['controller' => 'contato/store'])
               <p>Nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível.</p>
               <p>Nosso tempo médio de resposta é de 48 horas.</p>
           @endcomponent
        </div>
    </div>  
</div>

@include('site.layouts._partials.footer')

@endsection