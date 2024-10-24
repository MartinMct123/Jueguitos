<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game</title>
    <link rel="stylesheet" href="{{ asset('css/games/snake.css') }}">
</head>
<body>
    <div id="game-container">
        <canvas id="gameCanvas"></canvas>
        <div id="info">
            <p id="score">Puntuación: 0</p>
            <p id="time">Tiempo: 0s</p>
        </div>
        <div id="game-over">
            <p>¡Perdiste!</p>
            <button id="restartBtn">Reiniciar</button>
            <button id="exitBtn">Salir</button>
        </div>
    </div>
    <script src="{{ asset('js/games/snake.js') }}"></script>
</body>
</html>
