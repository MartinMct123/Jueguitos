<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game</title>
    <link rel="stylesheet" href="{{ asset('css/games/snake.css') }}">
</head>
<body>
    <a href="/" class="back">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z"></path></svg>
    </a>
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
