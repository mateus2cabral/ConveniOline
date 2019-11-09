<!-- @extends('templates.menu_preg') -->

@section('content')

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- <title>ConvênioOnline - UESPI</title> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'> -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/preg/visualizar.css'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/moldura.css'> -->
    
</head>





<div class="visualizar">

    <div class="form-title-visualizar">Solicitações de Convênio</div>
    <div class="form-visualizar">

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Ação</th>
                </tr>
                
                @foreach ($dados as $dado)
                    <!-- O status da solicitação de convenio pode ser: 'd' -> deferido / 'i' -> indeferido / 'a' -> aguardando -->
                    @if ($dado['status'] === 'a')
                        <tr align="center">
                        <td>{{ $dado['rsocial'] }}</td>
                        <td>{{ $dado['cnpj'] }}</td>
                        <td>{{ $dado['endereco'] }}</td>
                        <td>{{ $dado['cep'] }}</td>
                        <td>
                            <a href="deferir/{{ $dado['_id'] }}"><button class="button-deferir-indeferir">Deferir</button></a>
                            <a href="indeferir/{{ $dado['_id'] }}"><button class="button-deferir-indeferir">Indeferir</button></a>
                        </tr>
                    @endif
                
                @endforeach

                       

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection

