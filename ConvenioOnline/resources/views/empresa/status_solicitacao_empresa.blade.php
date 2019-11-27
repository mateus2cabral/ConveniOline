@extends('templates.moldura_empresa')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/status_solicitacao_empresa.css'>
<!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/convenio_solicitacao.css'> -->

    
<div class="panel">

    <div class="panel-title-solicitacao">Status da solicitação</div>

    <div class="panel_container">
        <div class="data_solicitacao">Solicitado em {{$convenio['data']}}</div>

        
        <div class="panel_block_50">
            <div class="label">
                Representante
            </div>
            <div class="content">
                {{ $convenio['representante'] }}
            </div>
        </div>
        
        <div class="panel_block_50">
            <div class="label">
                Razão Social
            </div>
            <div class="content">
                {{ $convenio['rsocial'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                CNPJ
            </div>
            <div class="content">
            {{ $convenio['cnpj'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Ie
            </div>
            <div class="content">
            {{ $convenio['ie'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Endereço
            </div>
            <div class="content">
            {{ $convenio['endereco'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                CEP
            </div>
            <div class="content">
            {{ $convenio['cep'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Contato
            </div>
            <div class="content">
            {{ $convenio['contato'] }}
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Status
            </div>
            <div class="content">

                @if( $convenio['status'] === "a")
                    Aguardando analise
                @endif

                @if( $convenio['status'] === "i")
                    Pedido indeferido
                @endif

                @if( $convenio['status'] === "d")
                    Pedido deferido
                @endif
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Areas ofertadas
            </div>
            <div class="content">
                @for ($i = 0; $i < sizeof($convenio['0']); $i++)
                    {{ $convenio['0'][$i] }};  
                @endfor
               
            </div>
        </div>

        <div class="panel_block_50">
            <div class="label">
                Observações 
            </div>
            <div class="content">

                @if ($convenio['observacao'] === "")
                    Não há observações
                @else
                    {{ $convenio['observacao'] }}
                @endif

            </div>
        </div>

    </div>

    
  

</div>
        
@endsection


