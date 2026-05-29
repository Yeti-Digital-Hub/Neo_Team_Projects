/// DOm elements

const start_screen = document.getElementById("start_screen");
const quiz_screen = document.getElementById("quiz_screen");
const result_screen = document.getElementById("result_screen");
const Start_button = document.getElementById("start_bnt");
const question_text = document.getElementById("question_text");
const answers_container = document.getElementById("answer_container");
const current_question_span = document.getElementById("curent_question");
const total_questions_span = document.getElementById("total_question");
const score_span = document.getElementById("score");
const final_score_span = document.getElementById("final_score");
const max_score_span = document.getElementById("max_score");
const result_message = document.getElementById("result_message");
const restart_button = document.getElementById("restart_bnt");
const progress_bar = document.getElementById("progress");


const quiz_questions = [
    {
        question: "what is the capital of france ??",
        answer: [
            {Text: "london", correct:false},
            { Text: "Berlin ", correct: false},
            { Text: "Paris ", correct: true},
            { Text: "Madrid", correct: false},
        ],
    }, 
    {
        question: "what is the capital of france ??",
        answer: [
            {Text: "london", correct:false},
            { Text: "Berlin ", correct: false},
            { Text: "Paris ", correct: true},
            { Text: "Madrid", correct: false},
        ],

    },
    {
        question: "what is the capital of france ??",
        answer: [
            {Text: "london", correct:false},
            { Text: "Berlin ", correct: false},
            { Text: "Paris ", correct: true},
            { Text: "Madrid", correct: false},
        ],

    },
    {
        question: "what is the capital of france ??",
        answer: [
            {Text: "london", correct:false},
            { Text: "Berlin ", correct: false},
            { Text: "Paris ", correct: true},
            { Text: "Madrid", correct: false},
        ],

    },
    {
        question: "what is the capital of france ??",
        answer: [
            {Text: "london", correct:false},
            { Text: "Berlin ", correct: false},
            { Text: "Paris ", correct: true},
            { Text: "Madrid", correct: false},
        ],
    },
];

// Quiz State vars

let current_question_index=0;
let score = 0;
let answers_disabled= false;


total_questions_span.textContent = quiz_questions.length;
max_score_span.textContent = quiz_questions.length;


// envent listener

Start_button.addEventListener("click", start_quiz)
restart_button.addEventListener("click", restart_quiz)


function start_quiz(){
    // reset vars
    current_question_index = 0;
    score=0
    score_span.textContent = 0;

    start_screen.classList.remove("active");
    quiz_screen.classList.add("active");

    show_question()

}

function show_question(){

    ///reset state

    answers_disabled = false;

    const current_question = quiz_questions[current_question_index];
    current_question_span.textContent = current_question_index +1;

    const progress_precent = (current_question_index/5) *100;

    progress_bar.style.width = progress_precent + "%";


    question_text.textContent = current_question.question
    
}

function restart_quiz(){
    console.log("quiz restarted");
}

//  to do explain this in a second

answers_container.innerHTML = "";


current_question.answer.foreach(answer => {
    const button = document.createElement("button");
    button.textContent = answer.text;
    button.classList.add("answer_btn");


    // what is  data ddffgdfdfdfgd df g dgfd

    button.dataset.correct = answer.correct;

    button.addEventListener('click',select)
});
