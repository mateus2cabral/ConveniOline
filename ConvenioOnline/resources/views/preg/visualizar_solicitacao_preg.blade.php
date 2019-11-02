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
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Ação</th>
                </tr>
                
                <?php for ($i=0; $i < count($empresa); $i++) { ?>

                        <tr>

                            <td>
                                <?php echo $empresa[$i]?>
                            </td>
                            <td>
                                <?php echo $cnpj[$i]?>
                            </td>
                            <td>
                                <?php echo $endereco[$i]?>
                            </td>
                            <td>
                                <?php echo $cep[$i]?>
                            </td>
                            <td>
                                <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                                <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                            </td>

                        </tr>

                <?php } ?>

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection