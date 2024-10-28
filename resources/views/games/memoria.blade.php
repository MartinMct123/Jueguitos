
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Memoria de Colores</title>
    <link rel="stylesheet" href="{{ asset('css/games/memoria.css') }}">
</head>
<body>
    <a href="/" class="back">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z"></path></svg>
    </a>
    <div class="container">
        <h1>Juego de Memoria de Colores</h1>
        <div id="game-board" class="game-board"></div>
        <button id="restart-button">Reiniciar Juego</button>
    </div>
    <script src="{{ asset('js/games/memoria.js') }}"></script>
</body>
</html>
