let randomNumber = Math.floor(Math.random() * 100) + 1;
const guessButton = document.getElementById('guessButton');
const guessInput = document.getElementById('guessInput');
const message = document.getElementById('message');
const restartButton = document.getElementById('restartButton');

guessButton.addEventListener('click', () => {
    const userGuess = Number(guessInput.value);
    let feedback = '';

    if (userGuess < 1 || userGuess > 100) {
        feedback = 'Por favor, elige un número entre 1 y 100.';
    } else if (userGuess === randomNumber) {
        feedback = '¡Felicidades! Has adivinado el número.';
        guessButton.disabled = true;
        restartButton.style.display = 'block';
    } else {
        const randomResponses = [
            '¡Casi lo logras! Pero es menos el valor.',
            'Te vas a rendir? El número es un poco más alto.',
            'Intenta un número mayor.',
            '¡Sigue intentándolo! Estás cerca.',
            'No, pero estás muy cerca. ¡Inténtalo de nuevo!'
        ];
        feedback = randomResponses[Math.floor(Math.random() * randomResponses.length)];
    }

    message.textContent = feedback;
});

restartButton.addEventListener('click', () => {
    randomNumber = Math.floor(Math.random() * 100) + 1;
    message.textContent = '';
    guessInput.value = '';
    guessButton.disabled = false;
    restartButton.style.display = 'none';
});
