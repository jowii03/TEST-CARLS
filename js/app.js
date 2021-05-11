const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestion = [];
let availableOptions = [];
let correctAnswers = 0;
let wrongAnswers = 0;

//Push the questions into availableQuestion Array


function setAvailableQuestion() {
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        availableQuestion.push(quiz[i])
    }
}

//Set question number and question
function getNewQuestion() {

    //set question number
    questionNumber.innerHTML = "Question " + (questionCounter + 1) + " of " + quiz.length;

    //set Question text
    //get random Question

    const questionIndex = availableQuestion[Math.floor(Math.random() * availableQuestion.length)];
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;

    //Get the position of "questionIndex" from the availableQuestion array
    const index1 = availableQuestion.indexOf(questionIndex);

    //remove the 'questionIndex' from the avalableQuestion array so that it wont repeat
    availableQuestion.splice(index1, 1);

    //set options
    //get the length of options
    const optionlen = currentQuestion.options.length
        // push options into availableOptions Array
    for (let i = 0; i < optionlen; i++) {
        availableOptions.push(i);
    }
    optionContainer.innerHTML = '';
    let animationDelay = 0.15;
    //create options in HTML
    for (let i = 0; i < optionlen; i++) {
        //random option
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
        //Get the position of Optionindex from availableOptions
        const index2 = availableOptions.indexOf(optionIndex);
        //Remove the optionIndex to the available optopns
        // so that the option does not repeat
        availableOptions.splice(index2, 1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option);
        option.setAttribute("onclick", "getResult(this)");
    }

    console.log(availableOptions)
    questionCounter++;
}

// get the result of current attempt
function getResult(element) {
    const id = parseInt(element.id);
    //get the answer by comparing the id of the clicked option
    if (id === currentQuestion.correct_answer) {
        //set the green color to the correct option
        element.classList.add("correct");
        //add the indicator to the correct mark
        UpdateAnswerIndicator("correct");
        correctAnswers++;
    } else {
        //set the Red color to the Wrong option
        element.classList.add("wrong");
        //add the indicator to the Wrong mark
        UpdateAnswerIndicator("wrong");
        wrongAnswers++;
        //if the answer is incorrect show the correct answer 
        //by adding green color to the correct answer

        const optionlen = optionContainer.children.length;
        for (var i = 0; i < optionlen; i++) {
            if (parseInt(optionContainer.children[i].id) === currentQuestion.correct_answer) {
                optionContainer.children[i].classList.add("correct");
            }
        }
    }

    unclickableOptions();
}


function UpdateAnswerIndicator(marktype) {
    answersIndicatorContainer.children[questionCounter - 1].classList.add(marktype)
}
//Make all options unclikable once the user select an option
//restrict user to change answer
function unclickableOptions() {
    const optionlen = optionContainer.children.length;
    for (var i = 0; i < optionlen; i++) {

        optionContainer.children[i].classList.add("already-answered");
    }
}

function answersIndicator() {
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}

function next() {
    if (questionCounter === quiz.length) {
        console.log("QUIZ OVER");
        quizOver();
    } else {
        getNewQuestion();
    }
}

function quizOver() {
    // hide quiz box
    quizBox.classList.add("hide");
    // show result-Box
    resultBox.classList.remove("hide");
    quizResult();
}

function resetQuiz() {

    questionCounter = 0;
    correctAnswers = 0;
    wrongAnswers = 0;
}

function quizResult() {
    resultBox.querySelector(".total-question").innerHTML = quiz.length;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = wrongAnswers;
    const percentage = (correctAnswers / quiz.length) * 100;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz.length;

}


// ### STARTING POINT OF QUIZ ###
function startQuiz() {

    // hide home-box
    homeBox.classList.add("hide");
    // show quiz-box
    quizBox.classList.remove("hide");

    //set all questions into array..
    setAvailableQuestion();
    //call geteNewQuestion fnction
    getNewQuestion();
    //to create indicators of answer
    answersIndicator();
}

window.onload = function() {
    homeBox.querySelector(".total-questions").innerHTML = quiz.length;
}