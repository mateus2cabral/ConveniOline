@extends('templates.moldura_professor')
@section('content')

<link rel="stylesheet" href="css/professor/minhas_indicacoes.css">

<div class="feed">
    <!-- Minhas indicações de estagio <br> aparecerão aqui -->

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
                        </tr>
                        
                        
                        @foreach ($meusEstagios as $estagio)
                            <tr align="center">
                            <td>{{ $estagio['nomeAluno'] }}</td>
                            <td>{{ $estagio['matriculaAluno'] }}</td>
                            <td>{{ $estagio['empresa'] }}</td>
                            <td>{{ $estagio['area'] }}</td>
                            <td>{{ $estagio['data'] }}</td>
                            @if ( $estagio['status'] === 'ag')
                                <td>Aberto</td>
                            @endif
                            @if ( $estagio['status'] === 'ap')
                                <td>Aceito</td>
                            @endif
                            @if ( $estagio['status'] === 're')
                                <td>Rejeitado</td>
                            @endif
                            

                        
                        @endforeach  
                    </table>
                
                <div class="end-visualizar"></div>
                
            </div>

        </div>
</div>


@endsection