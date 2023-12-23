{{ $slot }}

<form action="{{ $controller }}" method="POST">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="contact" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1" {{ old('contact') == 1 ? 'selected' : '' }} >Dúvida</option>
        <option value="2" {{ old('contact') == 2 ? 'selected' : '' }} >Elogio</option>
        <option value="3" {{ old('contact') == 3 ? 'selected' : '' }} >Reclamação</option>
    </select>
    <br>
    <textarea name="message"class="borda-preta">
        @if(old('message') != '' )
        {{ old('message') }}
        @else
        Preencha aqui a sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<!-- Auxiliar no debug do lado do front-end -->
<!-- Variável errors pode ser utilizada de forma automática pelo Laravel Blade (Por padrão)-->
<!-- Será apresenta se houver algum erro. Para isso estou utilizando o método any()-->
@if ($errors->any())
    <div style="position: absolute; top: 0px; left: opx; width: 100%; background-color: red;">
        @foreach ( $errors->all() as $error )
            {{ $error }}
            <br>
        @endforeach
    </div>
@endif


