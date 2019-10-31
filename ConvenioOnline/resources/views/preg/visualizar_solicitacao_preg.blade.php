@extends('templates.menu_preg')

@section('content')

<div class="visualizar">

    <div class="form-title-visualizar">Solicitações de Convênio</div>
    <div class="form-visualizar">

        <div class="form-fields-visualizar"></div>

            <table align="center">

                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>CNPJ</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>

                <tr>
                    <td>Positivo Informática</td>
                    <td>Rio de Janeiro</td>
                    <td>2345664</td>
                    <td>24/10/2019</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>

                <tr>
                    <td>Oracle</td>
                    <td>São Paulo</td>
                    <td>33399944</td>
                    <td>02/12/2019</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>

                <tr>
                    <td>Apple</td>
                    <td>Teresina</td>
                    <td>23443285</td>
                    <td>15/02/2018</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>

                <tr>
                    <td>Microsoft</td>
                    <td>Brasília</td>
                    <td>395867</td>
                    <td>22/06/2016</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>

                <tr>
                    <td>UFPI</td>
                    <td>Picos</td>
                    <td>12345678</td>
                    <td>14/04/2013</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>    

                <tr>
                    <td>Samsung</td>
                    <td>União</td>
                    <td>654398</td>
                    <td>14/04/2013</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>
                
                <tr>
                    <td>Dell</td>
                    <td>Timon</td>
                    <td>67574930</td>
                    <td>01/11/2010</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr> 

                <tr>
                    <td>Google</td>
                    <td>São Luís</td>
                    <td>003937</td>
                    <td>30/01/2016</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr> 

                <tr>
                    <td>Facebook</td>
                    <td>Altos</td>
                    <td>11122356</td>
                    <td>04/07/2011</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr> 

                <tr>
                    <td>Amazon</td>
                    <td></td>
                    <td>34455667</td>
                    <td>09/08/2019</td>
                    <td>
                        <a href="/"><button class="button-deferir-indeferir">Deferir</button></a>
                        <a href="/"><button class="button-deferir-indeferir">Indeferir</button></a>
                    </td>
                </tr>

            </table>
        
        <div class="end-visualizar"></div>
        
    </div>

</div>
        
@endsection