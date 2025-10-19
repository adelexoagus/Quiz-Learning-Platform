CREATE DATABASE quiz_platform;

USE quiz_platform;

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic VARCHAR(100),
    question TEXT,
    option1 VARCHAR(255),
    option2 VARCHAR(255),
    option3 VARCHAR(255),
    option4 VARCHAR(255),
    answer INT
);

-- Sample questions
INSERT INTO questions (topic, question, option1, option2, option3, option4, answer)
VALUES 
('Namibian History', 'When did Namibia gain independence?', '1989', '1990', '1991', '1992', 1),
('Namibian Culture', 'Which is a traditional Namibian dish?', 'Pizza', 'Kapana', 'Burger', 'Pasta', 1),
('Computer Science', 'What is HTML?', 'Programming language', 'Markup language', 'Database', 'Operating system', 1);
