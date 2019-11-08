@extends('templates.moldura')

@section('content')

<div class="form">
    <div class="form-title">Efetue login</div>
    <form class="form-fields" method="POST" action="logar">
        {{csrf_field() }}

        <div class="user-field">
            <div class="left-side" >Usuário:</div> 
            <div  class="right-side"><input type="text" name='usuario' autofocus></div>
        </div>
        <div class="password-field">
            <div class="left-side">Senha:</div> 
            <div class="right-side"><input type="password" name="senha"></div>
        </div>

        <div class="form-section"></div>
        <div class="form-buttons">
            
            <input class="login-submit" type="submit" value="Entrar">
            <a href="cadastro">Cadastro</a>
            <!-- <a href="inicio"><button type="submit" name="entrar">Entrar</button></a> -->
        </div>
    </form>
</div>

@endsection

