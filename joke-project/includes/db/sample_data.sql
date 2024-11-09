INSERT INTO categories (category_id, category_name) VALUES
(1, 'Puns'),
(2, 'Knock-knock'),
(3, 'One-liners'),
(4, 'Dad Jokes'),
(5, 'Dark Humor'),
(6, 'Animal Jokes'),
(7, 'Tech Jokes'),
(8, 'Classic Jokes'),
(9, 'Wordplay'),
(10, 'Silly Jokes');

INSERT INTO authors (author_id, author_name, author_email) VALUES
(1, 'John Smith', 'john.smith@example.com'),
(2, 'Alice Johnson', 'alice.johnson@example.com'),
(3, 'Robert Brown', 'robert.brown@example.com'),
(4, 'Emily Davis', 'emily.davis@example.com'),
(5, 'Michael Wilson', 'michael.wilson@example.com'),
(6, 'Sarah Moore', 'sarah.moore@example.com'),
(7, 'David Clark', 'david.clark@example.com'),
(8, 'Jessica Miller', 'jessica.miller@example.com'),
(9, 'Daniel Martinez', 'daniel.martinez@example.com'),
(10, 'Laura Thomas', 'laura.thomas@example.com');

INSERT INTO jokes (joke_id, joke_text, joke_date, author_id, category_id) VALUES
(1, 'Why don’t scientists trust atoms? Because they make up everything!', '2024-01-01', 1, 1),
(2, 'Knock, knock. Who’s there? Boo. Boo who? Don’t cry, it’s just a joke!', '2024-01-02', 2, 2),
(3, 'I told my wife she was drawing her eyebrows too high. She looked surprised.', '2024-01-03', 3, 3),
(4, 'Why couldn’t the bicycle stand up by itself? It was two tired.', '2024-01-04', 4, 4),
(5, 'I have a split personality,’ said Tom, being Frank.', '2024-01-05', 5, 5),
(6, 'What do you call a pile of cats? A meowtain.', '2024-01-06', 6, 6),
(7, 'Why do programmers prefer dark mode? Because light attracts bugs.', '2024-01-07', 7, 7),
(8, 'What did the fish say when he swam into a wall? Dam.', '2024-01-08', 8, 8),
(9, 'Did you hear about the guy who invented Lifesavers? He made a mint.', '2024-01-09', 9, 9),
(10, 'Why was the math book sad? It had too many problems.', '2024-01-10', 10, 10);
