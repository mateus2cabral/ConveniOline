@extends('templates.moldura_professor')
@section('content')

<link rel="stylesheet" href="css/professor/nova_indicacao_alunos.css">

<div class="painel" >
    <!-- Indique um novo aluno <br> para um estágio -->
    <div class="aba_header">
        <div class="aba" >Setor</div>
        <div class="aba" >Empresa</div>
        <div class="aba" id="aba_active">Aluno</div>
        <div class="aba">Termo de estágio</div>
    </div>
    <div class="aba_content" id="active">
        <div class="aba_title">
            Insira as informações do aluno 
        </div>

        <div class="aba_options" id="active">
            <form action="nova_indicacao_termo" method="post">
            {{csrf_field() }}

                <ul>
                
                
                </ul>
            
            
        </div>
        <div class="aba_button">
            <input type="hidden" name="aba" value="">
            <input class="form-submit" type="submit" value="Next">
        </div>
        </form>

    </div>
    
</div>
<script src="js/nova_indicacao.js"></script>

@endsection