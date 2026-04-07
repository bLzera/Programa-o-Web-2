<h2>Cálculo de Viagem</h2>

<form method="POST">
    @csrf
    Distância (km): <input type="text" name="distancia"><br>
    Consumo (km/l): <input type="text" name="consumo"><br>
    Preço combustível: <input type="text" name="preco"><br>
    <button type="submit">Calcular</button>
</form>

@if(isset($resultado))
    <p>Custo: R$ {{ $resultado }}</p>
@endif