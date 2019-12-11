@extends('templates.moldura_supervisor')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/supervisor/estagiarios.css'>

<div class="form-visualizar">
    <div class="visualizar">

        <div class="form-title-visualizar">
            Estagiários
        </div>

        <!-- <div align="center">LISTAGEM <br><br><strong> NÃO SINCRONIZADA</strong> <br><br> AO BANCO DE estagiarioS</div> -->
        

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Ação</th>
                </tr>
                
                @foreach ($estagiarios as $estagiario)
                    <!-- O status da solicitação de convenio pode ser: 'd' -> deferido / 'i' -> indeferido / 'a' -> aguardando -->
                    
                    @if ($estagiario['rsocialEstagio'] === $usuario['empresa'] && $estagiario['areaEstagio'] === $usuario['area'])
                        <tr align="center">
                        <td>{{ $estagiario['nome'] }}</td>
                        <td>{{ $estagiario['matricula'] }}</td>
                        <td>
                        <form method="POST" action="aluno_frequencia">
                        {{csrf_field() }}

                        <button class="button-frequencia">Frequência</button>
                        <input type="hidden" name="id" value="{{ $estagiario['_id'] }}">

                        </form>
                            <!-- <a href="frequencia/{{ $estagiario['_id'] }}"><button class="button-frequencia">Frequência</button></a> -->
                        </tr>

                    @endif
                        
                    
                    
                
                @endforeach 

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection

