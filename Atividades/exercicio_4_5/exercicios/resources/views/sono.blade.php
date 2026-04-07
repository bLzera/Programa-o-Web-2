<h2>Avaliar Sono</h2>

<form method="POST">
    @csrf
    Horas dormidas: <input type="text" name="horas"><br>
    <button type="submit">Avaliar</button>
</form>

@if(isset($resultado))
    <p>{{ $resultado }}</p>
@endif