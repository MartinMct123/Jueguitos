const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

canvas.width = 400;
canvas.height = 400;

const grid = 20;
let snake = [{x: 160, y: 160}, {x: 140, y: 160}, {x: 120, y: 160}];
let dx = grid;
let dy = 0;
let food = getRandomFoodPosition();
let score = 0;
let time = 0;
let speed = 100; // Velocidad inicial (100 ms)
let gameInterval;
let timeInterval;

document.addEventListener("keydown", changeDirection);
const restartBtn = document.getElementById("restartBtn");
const exitBtn = document.getElementById("exitBtn");

restartBtn.addEventListener("click", restartGame);
exitBtn.addEventListener("click", () => window.close());

function startGame() {
    gameInterval = setInterval(updateGame, speed);
    timeInterval = setInterval(updateTime, 1000);
}

function updateGame() {
    if (checkCollision()) {
        gameOver();
        return;
    }
    
    moveSnake();
    if (eatFood()) {
        score++;
        document.getElementById("score").textContent = `Puntuación: ${score}`;
        food = getRandomFoodPosition();
        
        // Incrementa la velocidad al comer, pero de forma moderada
        speed = Math.max(30, speed - 5);  // Velocidad mínima a 30ms
        clearInterval(gameInterval);
        gameInterval = setInterval(updateGame, speed);
    }
    
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawFood();
    drawSnake();
}

function moveSnake() {
    const head = {x: snake[0].x + dx, y: snake[0].y + dy};
    snake.unshift(head);
    snake.pop();
}

function changeDirection(event) {
    const keyPressed = event.keyCode;

    if (keyPressed === 37 && dx === 0) { // Izquierda
        dx = -grid;
        dy = 0;
    }
    if (keyPressed === 38 && dy === 0) { // Arriba
        dx = 0;
        dy = -grid;
    }
    if (keyPressed === 39 && dx === 0) { // Derecha
        dx = grid;
        dy = 0;
    }
    if (keyPressed === 40 && dy === 0) { // Abajo
        dx = 0;
        dy = grid;
    }
}

function eatFood() {
    if (snake[0].x === food.x && snake[0].y === food.y) {
        snake.push({...snake[snake.length - 1]});
        return true;
    }
    return false;
}

function drawSnake() {
    snake.forEach((segment, index) => {
        ctx.fillStyle = index === 0 ? "#000" : "#00aaff"; // Cabeza negra, cuerpo azul
        ctx.fillRect(segment.x, segment.y, grid, grid);
    });
}

function drawFood() {
    ctx.fillStyle = "#ff0000";
    ctx.fillRect(food.x, food.y, grid, grid);
}

function getRandomFoodPosition() {
    return {
        x: Math.floor(Math.random() * (canvas.width / grid)) * grid,
        y: Math.floor(Math.random() * (canvas.height / grid)) * grid,
    };
}

function checkCollision() {
    // Comprobar colisión con los bordes del canvas
    if (
        snake[0].x < 0 ||
        snake[0].x >= canvas.width ||
        snake[0].y < 0 ||
        snake[0].y >= canvas.height
    ) {
        return true;
    }

    // Comprobar colisión con el cuerpo de la serpiente (empezando a partir del 4º movimiento)
    for (let i = 3; i < snake.length; i++) {
        if (snake[0].x === snake[i].x && snake[0].y === snake[i].y) {
            return true;
        }
    }

    return false;
}

function updateTime() {
    time++;
    document.getElementById("time").textContent = `Tiempo: ${time}s`;
}

function gameOver() {
    clearInterval(gameInterval);
    clearInterval(timeInterval);
    document.getElementById("game-over").style.display = "flex";
}

function restartGame() {
    snake = [{x: 160, y: 160}, {x: 140, y: 160}, {x: 120, y: 160}];
    dx = grid;
    dy = 0;
    food = getRandomFoodPosition();
    score = 0;
    time = 0;
    speed = 100; // Restablecer velocidad inicial
    document.getElementById("score").textContent = `Puntuación: ${score}`;
    document.getElementById("time").textContent = `Tiempo: ${time}s`;
    document.getElementById("game-over").style.display = "none";
    startGame();
}

startGame();
