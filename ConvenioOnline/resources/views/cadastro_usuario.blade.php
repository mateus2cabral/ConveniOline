@extends('templates.moldura')

@section('content')

    <link rel='stylesheet' type='text/css' media='screen' href='./css/cadastro_usuario.css'>

<div class="solicitacao">

    <div class="form-title-solicitacao">Cadastro</div>
    <div class="form-solicitacao">

        

        <form method="POST" action="cadastrar">
            {{csrf_field() }}
            
            <div>
                <div class="left-side">Tipo de usuário:</div> 
                <div class="option">
                    <select name="tipo" id="1">
                        <option value="empr">Empresa</option>
                        <option value="preg">Preg</option>
                    </select>
                </div>
            </div>
            
            <div>
                <div class="left-side">Nome:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="nome" autofocus required></div>
            </div>

            <div>
                <div class="left-side">E-mail:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="email" autofocus required></div>
            </div>

            <div>
                <div class="left-side">Usuário:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="usuario" autofocus required></div>
            </div>
            
            <div>
                <div class="left-side">Senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password" name="senha" required></div>
            </div>

            <div>
                <div class="left-side">Confirme a senha:</div> 
                <div class="right-side"><input class="input-solicitacao" type="password" name="conf_senha" required></div>
            </div>

            

            <div>
                <a class="bt-login left-side" href="login">Já possui uma conta?</a>
                <input class="form-submit" type="submit" value="Salvar">
            </div>
        </form>
    </div>

</div>
        
@endsection
