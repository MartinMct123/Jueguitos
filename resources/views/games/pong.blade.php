<!DOCTYPE html>
<html>
<head>
  <title>Basic Pong HTML Game</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/games/pong.css') }}">
</head>
<body>
    <a href="/" class="back">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z"></path></svg>
    </a>
<canvas width="750" height="585" id="game"></canvas>
<script src="{{ asset('js/games/pong.js') }}"></script>
</body>
</html>