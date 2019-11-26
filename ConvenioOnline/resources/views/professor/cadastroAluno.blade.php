@extends('templates.moldura_professor')
@section('content')

<div class="formulario">

    <div class="from-title-formulario">Cadastro do Aluno para Estagio</div>
    <div class="corpo-formulario">


        <from method="POST" action="enviarFormulario">

        {{csrf_field() }}
            <!-- <form action="login"> -->
            <!-- <div>
                <div class="left-side">Tipo de usuário:</div> 
                <div class="option">
                    <select name="tipo" id="1">
                        <option value="empr">Empresa</option>
                        <option value="preg">Preg</option>
                    </select>
                </div>
            </div> -->
            <table align="center">

                <tr>
                    <th>Empresa</th>
                    <th>Area de solicitação</th>
                    <th>contato</th>
                </tr>

            </table>
            
            
        </from>
    </div>

</div>

@endsection