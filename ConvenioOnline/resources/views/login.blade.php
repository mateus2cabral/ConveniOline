@section('content')
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- <title>ConvênioOnline - UESPI</title> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/login.css'>
    
</head>




<!-- @extends('templates.moldura') -->


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

