@extends('templates.menu_preg')

@section('content')



<div class="visualizar">

    <div class="form-title-visualizar">Solicitações de Convênio</div>
    <div class="form-visualizar">

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Empresa</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Ação</th>
                </tr>
                
                @foreach ($dados as $dado)
                    <!-- O status da solicitação de convenio pode ser: 'd' -> deferido / 'i' -> indeferido / 'a' -> aguardando -->
                    @if ($dado['status'] === 'a')
                        <tr align="center">
                        <td>{{ $dado['empresa'] }}</td>
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