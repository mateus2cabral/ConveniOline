<!-- @extends('templates.cadastro') -->

@section('content')


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- <title>ConvênioOnline - UESPI</title> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'> -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/cadastro.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'>
    
</head>



<div class="solicitacao">

    <div class="form-title-solicitacao">Cadastro</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form method="POST" action="cadastrar">
            {{csrf_field() }}
            <!-- <form action="login"> -->
            
            <div>
                <div class="left-side">Nome:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="usuario" autofocus></div>
            </div>

            <div>
                <div class="left-side">E-mail:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="email" autofocus></div>
            </div>
            
            <div>
                <div class="left-side">Senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password" name="senha"></div>
            </div>

            <div>
                <div class="left-side">Confirme a senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password"></div>
            </div>
            
            

            <div class="end-solicitacao"></div>
                
            <div class="form-fields-solicitacao"></div>
    
            <input class="form-submit" type="submit" value="Salvar">
            <a href="login">Login</a>
            <!-- <input class="form-submit" type="submit" value="Enviar"/> -->
        </form>
    </div>

</div>
        
@endsection
