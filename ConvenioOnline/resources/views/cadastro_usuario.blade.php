@extends('templates.cadastro')

@section('content')

<div class="solicitacao">

    <div class="form-title-solicitacao">Cadastro</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <!-- <form method="POST" action="enviar_solicitacao"> -->
            <!-- {{csrf_field() }} -->
            <form action="login">
            
            <div>
                <div class="left-side">Nome:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="nome_usuario" autofocus></div>
            </div>

            <div>
                <div class="left-side">E-mail:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="e-mail" autofocus></div>
            </div>
            
            <div>
                <div class="left-side">Senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password" name="senha"></div>
            </div>

            <div>
                <div class="left-side">Confirme a senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password" name="senha"></div>
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
