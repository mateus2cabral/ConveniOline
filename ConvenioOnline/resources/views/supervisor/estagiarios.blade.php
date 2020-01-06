@extends('templates.moldura_supervisor')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/supervisor/estagiarios.css'>

<div class="form-visualizar">
    <div class="visualizar">

        <div class="form-title-visualizar">
            Estagiários
        </div>

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Carga Horária</th>
                    <th>Ação</th>
                </tr>

                
                @foreach ($estagiarios as $estagiario)
                    @if ($estagiario['empresa'] === $usuario['empresa'] && $estagiario['area'] === $usuario['area'] && $estagiario['status'] === 'a')
                        <tr align="center">
                            <td>{{ $estagiario['nomeAluno'] }}</td>
                            <td>{{ $estagiario['matriculaAluno'] }}</td>
                            <td>

                            @if ($frequencias == '[]')
                                0h
                            @else
                            
                                @foreach ($frequencias as $frequencia)

                                    
                                
                                    @if ($estagiario['nomeAluno'] === $frequencia['estagiario'])
                                        {{ $frequencia['ch'] }}h
                                    @endif
                                
                                @endforeach
                            @endif
                            
                            </td>

                            <td>
                            <form method="POST" action="aluno_frequencia">
                                {{csrf_field() }}

                                <button class="button-frequencia">Frequência</button>
                                <input type="hidden" name="id" value="{{ $estagiario['_id'] }}">

                            </form>
                        </tr>

                    @endif
                
                @endforeach 

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection
