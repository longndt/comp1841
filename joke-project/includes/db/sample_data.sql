-- Insert sample data into authors table
INSERT INTO authors (author_id, author_name, author_email) VALUES
(1, 'Alice Johnson', 'alice.johnson@example.com'),
(2, 'Bob Smith', 'bob.smith@example.com'),
(3, 'Charlie Lee', 'charlie.lee@example.com'),
(4, 'Diana Prince', 'diana.prince@example.com'),
(5, 'Eve Adams', 'eve.adams@example.com');

-- Insert sample data into jokes table
INSERT INTO jokes (joke_id, joke_text, joke_date, author_id) VALUES
(1, 'Why did the scarecrow win an award? Because he was outstanding in his field!', '2024-10-20', 1),
(2, 'Why don’t skeletons fight each other? They don’t have the guts.', '2024-10-21', 2),
(3, 'What do you call fake spaghetti? An impasta!', '2024-10-22', 3),
(4, 'How does a penguin build its house? Igloos it together!', '2024-10-23', 4),
(5, 'Why did the bicycle fall over? It was two-tired!', '2024-10-24', 5),
(6, 'What do you get when you cross a snowman with a vampire? Frostbite.', '2024-10-25', 1),
(7, 'Why don’t some couples go to the gym? Because some relationships don’t work out.', '2024-10-26', 2),
(8, 'I told my wife she was drawing her eyebrows too high. She looked surprised.', '2024-10-27', 3),
(9, 'I would avoid the sushi if I was you. It’s a little fishy.', '2024-10-28', 4),
(10, 'Want to hear a joke about construction? I’m still working on it.', '2024-10-29', 5);