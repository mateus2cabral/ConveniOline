@section('content')
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- <title>ConvênioOnline - UESPI</title> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'> -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/solicitacao.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'>
    
</head>




<!-- @extends('templates.menu_empresa') -->


<div class="solicitacao">

    <div class="form-title-solicitacao">Solicitação de Convênio</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form method="POST" action="enviar_solicitacao">
            {{csrf_field() }}
            
            <div>
                <div class="l-side">Nome do Representante:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="representante" autofocus></div>
            </div>
            
            <div>
                <div class="l-side">Razão Social:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="rsocial"></div>
            </div>
            
            <div>
                <div class="l-side">CNPJ:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="cnpj"></div>
            </div>

            <div>
                <div class="l-side">Ie:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="ie"></div>
            </div>
            
            <div>
                <div class="l-side">Endereço:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="endereco"></div>
            </div>
            
            <div>
                <div class="l-side">CEP:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="cep"></div>
            </div> 

            <div>
                <div class="l-side">Contato:</div> 
                <div class="r-side"><input class="input-solicitacao" type="text" name="contato"></div>
            </div> 

            <div class="end-solicitacao"></div>
                
            <div class="form-fields-solicitacao"></div>
    
            <input class="form-submit" type="submit" value="Enviar">
            <!-- <input class="form-submit" type="submit" value="Enviar"/> -->
        </form>
    </div>

</div>
        
@endsection
