<h2>Calcular IMC</h2>

<form method="POST">
    @csrf
    Peso: <input type="text" name="peso"><br>
    Altura: <input type="text" name="altura"><br>
    <button type="submit">Calcular</button>
</form>

@if(isset($resultado))
    <p>IMC: {{ $resultado }}</p>
@endif