@extends('templates.moldura_professor')
@section('content')

<link rel="stylesheet" href="css/professor/nova_indicacao_termo.css">

<div class="painel" >
    <!-- Indique um novo aluno <br> para um estágio -->
    <div class="aba_header">
        <div class="aba" >Setor</div>
        <div class="aba" >Empresa</div>
        <div class="aba" >Aluno</div>
        <div class="aba" id="aba_active">Termo de estágio</div>
    </div>
    <div class="aba_content" id="active">
        <div class="aba_title">
            Leia o termo de estágio e confirme 

        </div>

        <div class="aba_options" id="active">
            Eu {{ $info[3] }} indico o aluno {{ $info[0] }} de matricula {{$info[1]}} <br> 
            para um estagio supervisionado na empresa {{ $_SESSION["empresaEstagio"] }} <br>
            na área de {{ $_SESSION["areaEstagio"] }}.
            
            
        </div>
        <div class="aba_button">
            <a href="confirma_termo"><input class="form-submit" type="submit" value="Confirmar"></a>
        </div>
       

    </div>
    
</div>
<script src="js/nova_indicacao.js"></script>

@endsection