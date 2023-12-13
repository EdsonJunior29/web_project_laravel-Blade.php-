@extends('site.layouts.index')

@section('title', 'Contato')
@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>
    <div class="informacao-pagina">
        <div class="contato-principal">
            <form action="contato" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Nome" class="borda-preta">
                <br>
                <input name="phone" type="text" placeholder="Telefone" class="borda-preta">
                <br>
                <input name="email" type="text" placeholder="E-mail" class="borda-preta">
                <br>
                <select name="contact" class="borda-preta">
                    <option value="">Qual o motivo do contato?</option>
                    <option value="1">Dúvida</option>
                    <option value="2">Elogio</option>
                    <option value="3">Reclamação</option>
                </select>
                <br>
                <textarea name="message" class="borda-preta">Preencha aqui a sua mensagem</textarea>
                <br>
                <button type="submit" class="borda-preta">ENVIAR</button>
            </form>
        </div>
    </div>  
</div>

@include('site.layouts._partials.footer')

@endsection