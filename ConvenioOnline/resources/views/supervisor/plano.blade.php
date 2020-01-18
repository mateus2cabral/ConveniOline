@extends('templates.moldura_supervisor')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/supervisor/plano_estagio.css'>
<script>
    let add_atividade = function () {
        let display = document.getElementsByClassName('insert')[0].style.display

        if (display === 'block') {
            document.getElementsByClassName('insert')[0].style.display = 'none';
            document.getElementsByClassName('form-submit')[0].value = 'Add Atividade'
        } else {
            document.getElementsByClassName('insert')[0].style.display = 'block';
            document.getElementsByClassName('form-submit')[0].value = 'Cancelar'
        }
        
        console.log("Deu certo")
    }

</script>

<div class="form-visualizar">
    <div class="visualizar">

        <div class="form-title-visualizar">
            <span style="float: left;">Plano de Estágio ({{ $nomeEstagiario }})</span> 
            <input class="form-submit" onclick="add_atividade()" type="submit" value="Add Atividade" style="float: right;">
            
            <div class="insert">
                <form method="POST" action="att_plano">
                    {{csrf_field() }}
                    
                    <input  type="hidden" name="idEstagio" value="{{ $planoAtual['idEstagio'] }}">
                    <input  type="hidden" name="idPlano" value="{{ $planoAtual['_id'] }}">
                    <input class="insert-field" type="text" name="desc" placeholder="Descrição da atividade...">
                    <input class="form-submit" type="submit" value="salvar" style="float: right;">
                </form>
            </div>  
        </div>

        <div class="form-fields-visualizar"></div>

        <table align="center">
            <tr>
                <th>Descrição</th>
                <th>Data</th>
            </tr>
            @if (sizeof($minhasAtividades) != 0)            
                @foreach ($minhasAtividades as $atividade)
                    <tr>
                        <td align="center">
                            {{ $atividade['desc_atividade'] }}
                        </td>
                        <td align="center">
                            {{ $atividade['data'] }}
                        </td>
                    </tr>                    
                @endforeach     
                             
            @endif
            
        </table>

        <div class="end-visualizar"></div>
        
    </div>

</div>


   
    
@endsection