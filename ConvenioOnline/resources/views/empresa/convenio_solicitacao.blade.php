@extends('templates.menu_empresa')

@section('content')

<div class="solicitacao">

    <div class="form-title-solicitacao">Solicitação de Convênio</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form method="POST" action="enviar_solicitacao">
            {{csrf_field() }}
            
            <div>
                <div class="left-side">Representante:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="representante" autofocus></div>
            </div>
            
            <div>
                <div class="left-side">Empresa:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="empresa"></div>
            </div>
            
            <div>
                <div class="left-side">CNPJ:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="cnpj"></div>
            </div>
            
            <div>
                <div class="left-side">Endereço:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="endereco"></div>
            </div>
            
            <div>
                <div class="left-side">CEP:</div> 
                <div class="right-side"><input class="input-solicitacao" type="text" name="cep"></div>
            </div> 

            <div class="end-solicitacao"></div>
                
            <div class="form-fields-solicitacao"></div>
    
            <input class="form-submit" type="submit" value="Enviar">
            <!-- <input class="form-submit" type="submit" value="Enviar"/> -->
        </form>
    </div>

</div>
        
@endsection
