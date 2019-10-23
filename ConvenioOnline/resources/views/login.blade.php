@extends('templates.moldura')

@section('content')

<!-- <div class="form"></div> -->

<div class="form">
    <div class="form-title">Efetue login</div>
    <form class="form-fields">
        <div class="user-field">
            <div class="left-side">Usuário:</div> 
            <div class="right-side"><input autofocus></div>
        </div>
        <div class="password-field">
            <div class="left-side">Senha:</div> 
            <div class="right-side"><input type="password"></div>
        </div>
    </form>
    <div class="form-buttons">
        
        <a href="inicio"><button type="submit">Entrar</button></a>
    </div>
</div>

@endsection

