@extends('templates.moldura_empresa')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/status_solicitacao_empresa.css'>
<link rel='stylesheet' type='text/css' media='screen' href='./css/empresa/convenio_solicitacao.css'>



<?php

session_start();
// echo $_SESSION["tipo"];

?>



    
<div class="solicitacao">

    <div class="form-title-solicitacao">Status da solicitação</div>
    <div class="form-solicitacao">

        <div class="form-fields-solicitacao"></div>

        <form method="POST" action="enviar_solicitacao">
            
        @foreach ($dados_convenios as $dados_convenio)

            @if ($dados_convenio['login'] === $_SESSION["user"])

            <!-- Início do código para ver os dados da solicitação do usuário -->

                @if ($dados_convenio['status'] === 'i')

                    <table>
                        <tr>
                            <th>Representante:</th>
                            <td>{{ $dados_convenio['representante'] }}</td>
                        </tr>

                        <tr>
                            <th>Razão Social:</th>
                            <td>{{ $dados_convenio['rsocial'] }}</td>
                        </tr>

                        <tr>
                            <th>CNPJ:</th>
                            <td>{{ $dados_convenio['cnpj'] }}</td>
                        </tr>

                        <tr>
                            <th>Ie:</th>
                            <td>{{ $dados_convenio['ie'] }}</td>
                        </tr>

                        <tr>
                            <th>Endereço:</th>
                            <td>{{ $dados_convenio['endereco'] }}</td>
                        </tr>

                        <tr>
                            <th>CEP:</th>
                            <td>{{ $dados_convenio['cep'] }}</td>
                        </tr>

                        <tr>
                            <th>Contato:</th>
                            <td>{{ $dados_convenio['contato'] }}</td>
                        </tr>

                        <tr>
                            <th>CEP:</th>
                            <td>{{ $dados_convenio['cep'] }}</td>
                        </tr>

                        <tr>
                            <th>Área de Conhecimento:</th>
                            <td>{{ $dados_convenio['aconhecimento'] }}</td>
                        </tr>

                        <tr>
                            <th>Data:</th>
                            <td>{{ $dados_convenio['data'] }}</td>
                        </tr>

                        <tr>
                            <th>Justificativa:</th>
                            <td>{{ $dados_convenio['observacao'] }}</td>
                        </tr>

                    </table>

                @endif

                @if ($dados_convenio['status'] === 'a')
                    Desenvolvimento da view para fase de análise da preg
                @endif

                @if ($dados_convenio['status'] ==='d')
                    Desenvolvimento da view para DEFERIDO
                @endif

            <!-- Fim do código para ver os dados da solicitação do usuário -->

            @endif

        @endforeach
            
            

            <div class="end-solicitacao"></div>
                
            <!-- <div class="form-fields-solicitacao"></div> -->
    
            <input class="form-submit" type="submit" value="Voltar">
            
        </form>
    </div>

</div>
        
@endsection


