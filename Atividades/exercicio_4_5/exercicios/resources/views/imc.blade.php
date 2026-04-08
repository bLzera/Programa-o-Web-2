<style>
    div.containerAtividade{
        display: flex;
        flex-direction: column;
        border: 1px solid #cacaca;
        border-radius: 8px;
        padding: 24px;
        gap: 8px;
        align-items: center;
        justify-content: center;
    }

    form.atividadeForm{
        display: flex;
        flex-direction: column;
        gap: 12px;
        border: 1px solid #cacaca;
        padding: 8px;
        max-width: fit-content;
    }

    div.containerInput{
        display: flex;
        flex-direction: column;
        gap: 4px;
        padding: 12px;
        align-items: flex-start;
        max-width: fit-content;
    }

    button.atividadeSubmit{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        line-height: 100%;
        color: white;
        background: #000000;
        transition: all .3s ease;
        text-decoration: none!important;
        max-width: 100%;
        cursor: pointer;
    }

    button.atividadeSubmit:hover{
        background:rgb(51, 51, 51)!important;
    }
</style>
<div class="containerAtividade">
    <h2 class="tituloPagina">Calcular IMC</h2>

    <form class="atividadeForm"method="POST">
        @csrf
        <div class="containerInput">
            <label class="inputLabel" for="peso">Peso</label>
            <input class="atividadeInput"type="text" name="peso" placeholder="Peso...">
        </div>
        <div class="containerInput">
            <label for="altura" class="inputLabel">Altura</label>
            <input class="atividadeInput" type="text" name="altura" placeholder="Altura...">
        </div>
        <button class="atividadeSubmit" type="submit">Calcular</button>
    </form>

    @if(isset($resultado))
        <span class="atividadeRetorno">IMC: {{ $resultado }}</span>
    @endif
</div>