@extends('templates.moldura_empresa')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/convenio__solicitacao.css'>



<?php
session_start();

// echo $_SESSION["user"];

?>



    
<div class="solicitacao">

    <div class="form-title-solicitacao">Solicitação de Convênio</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form method="POST" action="enviar_solicitacao">
            {{csrf_field() }}
            
            <div>
                <div class="l-side">Nome do Representante:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="representante" autofocus required></div>
            </div>
            
            <div>
                <div class="l-side">Razão Social:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="rsocial" required></div>
            </div>
            
            <div>
                <div class="l-side">CNPJ:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="cnpj" required ></div>
            </div>

            <div>
                <div class="l-side">Ie:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="ie" required></div>
            </div>
            
            <div>
                <div class="l-side">Endereço:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="endereco" required></div>
            </div>
            
            <div>
                <div class="l-side">CEP:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="cep" required></div>
            </div> 

            <div>
                <div class="l-side">Contato:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="contato" required ></div>
            </div>

            <div>
                <div class="l-side">Áreas de interesse:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="aconhecimento" required ></div>
            </div>

            <div class="end-solicitacao"></div>
                
            <div class="form-fields-solicitacao"></div>
    
            <input class="form-submit" type="submit" value="Enviar">
            
        </form>
    </div>

</div>
        
@endsection


