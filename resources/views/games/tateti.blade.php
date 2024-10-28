<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/games/tateti.css') }}">
    <title>TA TE TI</title>
</head>
<body>
    <a href="/" class="back">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z"></path></svg>
    </a>
    <div class="score">
        <h3>Puntos</h3>
        <div class="score-container">
            <p>X: <label id="X-points">0</label></p>
            <p>-</p>
            <p>O: <label id="O-points">0</label></p>
        </div>
    </div>
    <div class="turn-container">
        <h3>Turno de</h3>
        <div class="turn-box align">X</div>
        <div class="turn-box align">O</div>
        <div class="bg"></div>
    </div>
    <div class="main-grid">
        <div class="box align">0</div>
        <div class="box align">1</div>
        <div class="box align">2</div>
        <div class="box align">3</div>
        <div class="box align">4</div>
        <div class="box align">5</div>
        <div class="box align">6</div>
        <div class="box align">7</div>
        <div class="box align">8</div>
    </div>
    <h2 id="results"></h2>
    <button id="play-again">Jugar de nuevo</button>
    <script src="{{ asset('js/games/tateti.js') }}"></script>
</body>
</html>