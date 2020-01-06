@extends('templates.moldura_professor')
@section('content')

<link rel="stylesheet" href="css/professor/minhas_indicacoes.css">

<div class="feed">

    <div class="form-visualizar">
        <div class="visualizar">

            <div class="form-title-visualizar">Minhas indicações de estágio</div>

                <div class="form-fields-visualizar"></div>

                    <table align="center">

                        <tr>
                            <th>Aluno</th>
                            <th>Matricula</th>
                            <th>Empresa</th>
                            <th>Área</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Plano de estagio</th>
                            <th>Frequencia</th>
                        </tr>
                        
                        @foreach ($meusEstagios as $estagio)
<<<<<<< HEAD
                            <tr align="center">
                            <td>{{ $estagio['nomeAluno'] }}</td>
                            <td>{{ $estagio['matriculaAluno'] }}</td>
                            <td>{{ $estagio['empresa'] }}</td>
                            <td>{{ $estagio['area'] }}</td>
                            <td>{{ $estagio['data'] }}</td>
                            @if ( $estagio['status'] === 'ae')
                                <td>Aguardando analise da empresa</td>
                            @endif
                            @if ( $estagio['status'] === 'ap')
                                <td>Aguardando analise da PREG</td>
                            @endif
                            @if ( $estagio['status'] === 'a')
                                <td>Aprovado</td>
                            @endif
                            @if ( $estagio['status'] === 'rp')
                                <td>Rejeitado pela PREG</td>
                            @endif
                            @if ( $estagio['status'] === 're')
                                <td>Rejeitado pela empresa</td>
                            @endif
                        <td>
                            <a href="plano_estagio"><button class="button-plano">Analisar</button></a>
                        </td>
                        <td>
                            <a><button class="button-plano">Verificar</button>
                        </td>
                            
=======
                            <a href="inicio_professor">

                                <tr class="table-row" align="center">
                                    <td>{{ $estagio['nomeAluno'] }}</td>
                                    <td>{{ $estagio['matriculaAluno'] }}</td>
                                    <td>{{ $estagio['empresa'] }}</td>
                                    <td>{{ $estagio['area'] }}</td>
                                    <td>{{ $estagio['data'] }}</td>
                                    @if ( $estagio['status'] === 'ae')
                                    <td>Aguardando analise da empresa</td>
                                    @endif
                                    @if ( $estagio['status'] === 'ap')
                                    <td>Aguardando analise da PREG</td>
                                    @endif
                                    @if ( $estagio['status'] === 'a')
                                    <td>Aprovado</td>
                                    @endif
                                    @if ( $estagio['status'] === 'rp')
                                    <td>Rejeitado pela PREG</td>
                                    @endif
                                    @if ( $estagio['status'] === 're')
                                    <td>Rejeitado pela empresa</td>
                                    @endif
                                </tr>
                            </a>
>>>>>>> 925baa2d48fe9c091f10251d696ab7792936b1b2
                        @endforeach  
                    </table>
                
                <div class="end-visualizar"></div>
                
            </div>

        </div>
</div>

@endsection