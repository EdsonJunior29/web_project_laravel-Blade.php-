@extends('site.layouts.index')

@section('title', 'Login')
@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-right: auto; margin-left: auto;">
            <form action="login" method="POST">
                @csrf
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email do usuário" class="borda-preta">
                @if ($errors->has('email'))
                    {{ $errors->first('email')}}
                @endif
                <br>
                <input type="password" name="senha" value="{{ old('senha') }}" placeholder="Senha" class="borda-preta">
                @if ($errors->has('senha'))
                    {{ $errors->first('senha')}}
                @endif
                <br>
                <button type="submit" class="borda-preta"> Acessar </button>
            </form>
        </div>
        
    </div>  
</div>

@include('site.layouts._partials.footer')

@endsection