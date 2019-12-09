@extends('templates.moldura_professor')
@section('content')

<link rel="stylesheet" href="css/professor/nova_indicacao.css">

<div class="painel" >
    <!-- Indique um novo aluno <br> para um estágio -->
    <div class="aba_header">
        <div class="aba" id="aba_active" onclick="aba_transicao(0)">Setor</div>
        <div class="aba" onclick="aba_transicao(1)">Empresa</div>
        <div class="aba" onclick="aba_transicao(2)">Aluno</div>
        <div class="aba" onclick="aba_transicao(3)">Termo de estágio</div>
    </div>
    <div class="aba_content" id="active">
        Escoha um setor

        <!-- <div class="aba_options">
            <ul>
            @php
                echo sizeof($areas);
            @endphp
            
            @foreach ($areas as $area)
                echo $i++;
                <li>
                    l
                    <input id="{{ $area }}" type="radio" name="radio" value="{{ $area }}">
                    <label for="{{ $area }}">{{ $area }}</label>
                </li>

            @endforeach
            </ul>
        </div> -->
    </div>
    <div class="aba_content">
        Escoha uma empresa 

    </div>
    <div class="aba_content">
        Escoha um aluno
    </div>
    <div class="aba_content">
        Termo de estágio
    </div>
</div>
<script src="js/nova_indicacao.js"></script>

@endsection