'use strict';

// document.querySelector('.message').textContent = 'Correct Number';

// document.querySelector('.number').textContent = 20;

// document.querySelector('.score').textContent = 13;

// document.querySelector('.guess').value = 13;

let secretNumber = Math.trunc(Math.random() * 20) + 1;
// console.log(document.querySelector('.number').textContent = secretNumber);
let score = 20;
let heightScore = 0;

const displayMessage = function(message) {
    document.querySelector('.message').textContent = message;
}

document.querySelector('.check').addEventListener('click',function(){
    const guess = Number(document.querySelector('.guess').value);
    console.log(typeof guess);


    if(!guess) {
        document.querySelector('.message').textContent = 'No Number Please Enter Again';
    }
    else if(guess === secretNumber) {
        displayMessage('Correct Number');
        document.querySelector('.number').textContent = secretNumber;
        document.querySelector('body').style.backgroundColor = 'green';
        document.querySelector('.number').style.width = '30rem';
        
        if(score > heightScore) {
            heightScore = score;
            document.querySelector('.highscore').textContent = heightScore;
        }
    }
    else if(guess !== secretNumber) {
        if(score > 0){
            displayMessage(guess > secretNumber ? 'Height' : 'Low');
            score--;
            document.querySelector('.score').textContent = score;
        }
        else{
            displayMessage('The Game is Over');
            document.querySelector('.score').textContent = 0;
        }
    }
});

document.querySelector('.again').addEventListener('click',function(){
    score = 20;
    secretNumber = Math.trunc(Math.random() * 20) + 1;
    document.querySelector('body').style.backgroundColor = '#222';
    document.querySelector('.number').style.width = '15rem';
    document.querySelector('.number').textContent = '?';
    document.querySelector('.guess').value = ' ';
    displayMessage('Start guessing...');
    document.querySelector('.score').textContent = score;
})
