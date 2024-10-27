
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Memoria de Colores</title>
    <link rel="stylesheet" href="{{ asset('css/games/memoria.css') }}">
</head>
<body>
    <div class="container">
        <h1>Juego de Memoria de Colores</h1>
        <div id="game-board" class="game-board"></div>
        <button id="restart-button">Reiniciar Juego</button>
    </div>
    <script src="{{ asset('js/games/memoria.js') }}"></script>
</body>
</html>
