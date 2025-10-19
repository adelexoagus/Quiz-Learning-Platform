function toggleAccordion(header) {
  const content = header.nextElementSibling;
  const isOpen = content.classList.contains('active');

  // Close all open accordions first 
  document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('active'));

  // Toggle current one
  if (!isOpen) {
    content.classList.add('active');
  }
}

// Change Cursor on Hover
document.querySelectorAll('.accordion-header').forEach(header => {
  header.style.cursor = 'pointer';
});

//Lesson Card Navigation

let currentIndex = 0;
const cards = document.querySelectorAll('.lesson-card');

function showCard(index) {
  cards.forEach((card, i) => {
    card.classList.toggle('active', i === index);
  });
}

function nextCard() {
  currentIndex = (currentIndex + 1) % cards.length;
  showCard(currentIndex);
}

function prevCard() {
  currentIndex = (currentIndex - 1 + cards.length) % cards.length;
  showCard(currentIndex);
}