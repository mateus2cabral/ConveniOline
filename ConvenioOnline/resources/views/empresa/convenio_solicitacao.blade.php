@extends('templates.menu_empresa')

@section('content')

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
