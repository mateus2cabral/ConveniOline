@extends('templates.moldura')

@section('content')

<div class="form">
    <div class="form-title">Efetue login</div>
    <form class="form-fields" method="POST" action="handle">
        <div class="user-field">
            <div class="left-side" >Usuário:</div> 
            <div  class="right-side"><input class="form-field" type="text" name='usuario' autofocus></div>
        </div>
        <div class="password-field">
            <div class="left-side">Senha:</div> 
            <div class="right-side"><input class="form-field" type="password" name="senha"></div>
        </div>
    </form>
    <div class="form-buttons">
        
        <input class="form-submit" type="submit" name="entrar" value="Entrar">
        <!-- <a href="inicio"><button type="submit" name="entrar">Entrar</button></a> -->
    </div>
</div>

@endsection

