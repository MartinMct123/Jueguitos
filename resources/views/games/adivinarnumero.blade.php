<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
    <link rel="stylesheet" href="{{ asset('css/games/adivinarnumero.css') }}">
</head>
<body>
    <div class="container">
        <h1>Adivina el Número</h1>
        <p>Estoy pensando en un número entre 1 y 100.</p>
        <input type="number" id="guessInput" placeholder="Introduce tu número" />
        <button id="guessButton">Adivinar</button>
        <p id="message"></p>
        <button id="restartButton" style="display:none;">Reiniciar Juego</button>
    </div>
    <script src="{{ asset('js/games/adivinarnumero.js') }}"></script>
</body>
</html>
