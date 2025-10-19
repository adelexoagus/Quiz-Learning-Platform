<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learning Page | SmartLearn Namibia</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container-box">

  <main class="lessons">
    <h1>Welcome to the Learning Page</h1>
    <p>
      Here you will explore lessons about Namibian History,
      Namibian Culture, and Computer Science Basics.
    </p>
  </main>

  <!-- Lesson Flashcards Container -->
  <main class="lesson-container">

    <!-- Namibian History Card -->
    <div class="lesson-card active" id="history">
      <h2>Namibian History</h2>
      <p>Learn about the key moments and people that shaped Namibia’s journey to independence.</p>

      <div class="accordion">

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>The German Colonial Period</em>
          </div>
          <div class="accordion-content">
            <p>
              <b>From 1884 to 1915</b>, Namibia was a German colony known as <b>German South West Africa</b>.
              This period included tragic events such as the <b>Herero and Nama genocide between 1904–1908</b>,
              one of the darkest moments in Namibia’s past.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>South African Mandate and occupation</em>
          </div>
          <div class="accordion-content">
            <p>
              Following Germany's defeat in World War I, the <b>League of Nations</b> entrusted the territory
              to South Africa <b>as a mandate in 1920</b>.<br>
              After World War II, the South African rule was eventually deemed illegal by the
              <b>ICJ (International Court of Justice)</b>, leading to the 24-year armed struggle for independence.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>Independence Struggle</em>
          </div>
          <div class="accordion-content">
            <p>
              The liberation movement <b>SWAPO (South West Africa People's Organization)</b> launched
              an armed struggle for independence in <b>1966</b>. Namibia gained independence on
              <b>21 March 1990</b> after years of struggle against South African rule. The first
              president was <b>Dr. Sam Nujoma</b>.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Namibian Culture Card -->
    <div class="lesson-card" id="culture">
      <h2>Namibian Culture</h2>
      <p>Explore the diverse traditions, languages, and art forms that make Namibia unique.</p>

      <div class="accordion">

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>Ethnic Diversity in Namibia</em>
          </div>
          <div class="accordion-content">
            <p>
              Namibia is home to many ethnic groups, including the <b>Oshiwambo</b>,
              <b>Herero</b>, <b>Nama</b>, <b>Damara</b>, <b>San</b>, and <b>Caprivians</b>.
              Each group has its own language, traditional clothing, and customs that form
              part of Namibia’s rich cultural identity.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>Namibian Music and Dance</em>
          </div>
          <div class="accordion-content">
            <p>
              Traditional music and dance are an important part of Namibian celebrations
              and ceremonies. Drums, handclaps, and rhythmic movements are used to tell
              stories and bring communities together.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>Traditional Foods</em>
          </div>
          <div class="accordion-content">
            <p>
              Popular Namibian dishes include <b>Kapana</b> (grilled meat sold at open markets),
              <b>Oshifima</b> (mahangu porridge), and <b>Biltong</b>. Food traditions vary across
              regions but are always central to family and community life.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Computer Science Basics Card -->
    <div class="lesson-card" id="computerscience">
      <h2>Computer Science Basics</h2>
      <p>Understand the core principles of computers and web development.</p>

      <div class="accordion">

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>What is a Computer?</em>
          </div>
          <div class="accordion-content">
            <p>
              A computer is an electronic device that processes information using hardware and software.
              It can perform tasks like calculations, communication, and data storage.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>What is HTML?</em>
          </div>
          <div class="accordion-content">
            <p>
              HTML (HyperText Markup Language) defines the structure of web pages using elements
              such as headings, paragraphs, and links. It’s the foundation of web development.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            <em>What is Programming?</em>
          </div>
          <div class="accordion-content">
            <p>
              Programming is writing instructions for a computer to perform specific tasks.
              Languages like <b>Python</b>, <b>Java</b>, and <b>JavaScript</b> are used to develop
              applications, websites, and games.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="lesson-navigation">
      <button onclick="prevCard()">← Previous</button>
      <button onclick="nextCard()">Next →</button>
    </div>
  </main>

  <p style="text-align:center; margin-top:20px;">
    <a href="quiz.php" class="btn">Start Quiz</a>
  </p>

  </div>

  <script src="script.js"></script>
</body>
</html>