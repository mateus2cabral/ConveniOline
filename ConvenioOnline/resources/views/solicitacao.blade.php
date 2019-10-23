@extends('templates.moldura')

@section('content')

<div class="solicitacao">

    <div class="form-title-solicitacao">Solicitação de Convênio</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form>

            <div>
                <div class="left-side">Representante:</div> 
                <div class="right-side"><input class="input-solicitacao"></div>
            </div>
            
            <div>
                <div class="left-side">Empresa:</div> 
                <div class="right-side"><input class="input-solicitacao"></div>
            </div>
            
            <div>
                <div class="left-side">CNPJ:</div> 
                <div class="right-side"><input class="input-solicitacao"></div>
            </div>
            
            <div>
                <div class="left-side">Endereço:</div> 
                <div class="right-side"><input class="input-solicitacao"></div>
            </div>
            
            <div>
                <div class="left-side">CEP:</div> 
                <div class="right-side"><input class="input-solicitacao"></div>
            </div> 

        </form>

        <div class="end-solicitacao"></div>

        <div class="form-fields-solicitacao"></div>
        
        <div class="button-solicitacao">
            <a href="login"><button type="submit">Solicitar</button></a>
        </div>
    
    </div>

</div>

@endsection