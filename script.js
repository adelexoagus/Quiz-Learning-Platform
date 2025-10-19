function toggleAccordion(element) {
  const content = element.nextElementSibling;
  if(content.style.display === "block") {
    content.style.display = "none";
  } else {
    content.style.display = "block";
  }
}

let currentQuestion = 0;
let score = 0;
let questions = [];

async function loadQuestions() {
  const res = await fetch('php/get_questions.php');
  questions = await res.json();
  showQuestion();
}

function showQuestion() {
  if(currentQuestion >= questions.length) {
    localStorage.setItem("quizScore", score);
    window.location.href = "results.html";
    return;
  }
  
  const q = questions[currentQuestion];
  const container = document.getElementById('quiz-container');
  container.innerHTML = `
    <h3>${q.question}</h3>
    ${q.options.map((opt, i) => `<button onclick="answer(${i})">${opt}</button>`).join('')}
  `;
}

function answer(index) {
  if(index === questions[currentQuestion].answer) score++;
  currentQuestion++;
  showQuestion();
}

document.addEventListener('DOMContentLoaded', () => {
  if(document.getElementById('quiz-container')) {
    loadQuestions();
  }
});
