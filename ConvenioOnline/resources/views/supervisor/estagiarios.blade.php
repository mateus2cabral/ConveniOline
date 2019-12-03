@extends('templates.moldura_supervisor')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/supervisor/estagiarios.css'>

<div class="form-visualizar">
    <div class="visualizar">

        <div class="form-title-visualizar">
            Estagiários
        </div>

        <div align="center">LISTAGEM <br><br><strong> NÃO SINCRONIZADA</strong> <br><br> AO BANCO DE DADOS</div>
        

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>
                
                <tr align="center">
                    <td>Jeffrey Preston Bezos</td>
                    <td>jeffbezos@amazom.com</td>
                    <td>
                        <a href="frequencia"><button class="button-frequencia">Frequência</button></a>
                    </tr>
                </tr>

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection

