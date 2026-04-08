<style>
    .containerOpcoes{
        display: flex;
        flex-direction: column;
        border: 1px solid #cacaca;
        border-radius: 8px;
        padding: 24px;
        gap: 8px;
    }

    .botaoOpcao{
        display: flex;
        padding: 12px 16px;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        line-height: 100%;
        background: #000000;
        transition: all .3s ease;
        text-decoration: none!important;
    }

    .botaoOpcao:hover{
        background:rgb(51, 51, 51)!important;
    }
</style>
<div class="containerOpcoes">
    <h1 class="tituloPagina">Escolha uma opção</h1>

    <a class="botaoOpcao opcaoImc" href="/imc">Calcular IMC</a>
    <a class="botaoOpcao opcaoSono" href="/sono">Avaliar Sono</a>
    <a class="botaoOpcao opcaoViagem" href="/viagem">Cálculo de Viagem</a>
</div>