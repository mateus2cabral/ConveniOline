@extends('templates.moldura')

@section('content')


<div class="menu-bar">
    <div class="inner-menu-bar">
        <ul>
            <a href="inicio"><li>Início</li></a>
            <a href="formulario"><li>Convênio</li></a>
            <a href="login"><li class="exit">Sair</li></a>
        </ul>
    </div>
</div>

<article class="feed">
    
    <div class="feed-msg" >Seu histórico de atividades <br>será mostrado aqui</div>
</article>

<!-- <div class="solicitacao">

    <div class="form-solicitacao">

        <p>Botão para teste da tela solicitação!! </p>
        
        <div class="form-fields-solicitacao"></div>


        <div class="button-solicitacao">
            <a href="formulario"><button type="submit">Solicitar Convênio</button></a>
        </div>
        
        <div class="form-fields-solicitacao"></div>

        <div>

            <p>
                Fazer algo aqui para tela HOME!
            </p>

        </div>

    
    </div>

</div> -->

@endsection