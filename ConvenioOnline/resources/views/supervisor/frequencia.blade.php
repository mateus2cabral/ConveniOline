@extends('templates.moldura_supervisor')
@section('content')

<link rel='stylesheet' type='text/css' media='screen' href='./css/supervisor/frequencia.css'>

<div class="form-visualizar">
    <div class="visualizar">

        <div class="form-title-visualizar">
            Frequência (Jeffrey Preston Bezos)
        </div>

        <!-- <div align="center">LISTAGEM <br><br><strong> NÃO SINCRONIZADA</strong> <br><br> AO BANCO DE DADOS</div> -->
        

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Data</th>
                    <th>Dia da semana</th>
                    <th>Presença</th>
                    <th>Falta</th>
                </tr>
                
                <tr align="center">
                    <td>02/12/2019</td>
                    <td>Segunda-feira</td>
                    <td><input class="radio-frequencia" type="radio" name="segunda"></td>
                    <td><input class="radio-frequencia" type="radio" name="segunda"></td>
                </tr>

                <tr align="center">
                    <td>03/12/2019</td>
                    <td>Terça-feira</td>
                    <td><input class="radio-frequencia" type="radio" name="terca"></td>
                    <td><input class="radio-frequencia" type="radio" name="terca"></td>
                </tr>

                <tr align="center">
                    <td>04/12/2019</td>
                    <td>Quarta-feira</td>
                    <td><input class="radio-frequencia" type="radio" name="quarta"></td>
                    <td><input class="radio-frequencia" type="radio" name="quarta"></td>
                </tr>

                <tr align="center">
                    <td>05/12/2019</td>
                    <td>Quinta-feira</td>
                    <td><input class="radio-frequencia" type="radio" name="quinta"></td>
                    <td><input class="radio-frequencia" type="radio" name="quinta"></td>
                </tr>

                <tr align="center">
                    <td>06/12/2019</td>
                    <td>Sexta-feira</td>
                    <td><input class="radio-frequencia" type="radio" name="sexta"></td>
                    <td><input class="radio-frequencia" type="radio" name="sexta"></td>
                </tr>
            
            </table>
            <input class="form-submit" type="submit" value="Salvar">

        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection

