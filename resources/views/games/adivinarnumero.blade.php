<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
    <link rel="stylesheet" href="{{ asset('css/games/adivinarnumero.css') }}">
</head>
<body>
    <a href="/" class="back">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z"></path></svg>
    </a>
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
