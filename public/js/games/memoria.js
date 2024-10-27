const colors = ['red', 'blue', 'green', 'yellow', 'purple', 'orange', 'pink', 'cyan'];
let gameColors = [];
let firstSquare = null;
let secondSquare = null;
let lockBoard = false;

function createBoard() {
    gameColors = [...colors, ...colors]; 
    gameColors.sort(() => 0.5 - Math.random()); 

    const gameBoard = document.getElementById('game-board');
    gameBoard.innerHTML = ''; 

    gameColors.forEach(color => {
        const square = document.createElement('div');
        square.classList.add('square');
        square.dataset.color = color;

        square.addEventListener('click', handleSquareClick);
        gameBoard.appendChild(square);
    });
}

function handleSquareClick(event) {
    const square = event.target;

    if (lockBoard || square.classList.contains('revealed')) return;

    square.style.backgroundColor = square.dataset.color; 
    square.classList.add('revealed');

    if (!firstSquare) {
        firstSquare = square;
    } else {
        secondSquare = square;
        checkForMatch();
    }
}

function checkForMatch() {
    lockBoard = true;

    if (firstSquare.dataset.color === secondSquare.dataset.color) {
        resetBoard();
    } else {
        setTimeout(() => {
            firstSquare.style.backgroundColor = 'white'; 
            secondSquare.style.backgroundColor = 'white'; 
            firstSquare.classList.remove('revealed'); 
            secondSquare.classList.remove('revealed'); 
            resetBoard();
        }, 1000);
    }
}

function resetBoard() {
    [firstSquare, secondSquare] = [null, null];
    lockBoard = false;
}

document.getElementById('restart-button').addEventListener('click', createBoard);

createBoard();
