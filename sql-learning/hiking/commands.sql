-- Ajouts de randonnées

INSERT INTO hiking 
(name, difficulty, distance, duration, height_difference)
VALUES
("Piton des neiges", "Difficile", 15.5, 08:00:00, 1730);

UPDATE hiking
SET duration = 08:00:00
WHERE id = 1

INSERT INTO hiking
(name, difficulty, distance, duration, height_difference)
VALUES
("Piton de la fournaise", "Moyen", 12.3, "05:00:00", 500)

INSERT INTO hiking
(name, difficulty, distance, duration, height_difference)
VALUES
("Boucle vers Grand Bassin", "Difficile", 13.9, "06:00:00", 1050)

INSERT INTO hiking
(name, difficulty, distance, duration, height_difference)
VALUES
("Cascade de Trois Roches", "Difficile", 19, "08:30:00", 1800)

INSERT INTO hiking
(name, difficulty, distance, duration, height_difference)
VALUES
("Aurère par le Sentier Scout", "Difficile", 24.5, "07:00:00", 1250)

-------------------------------------------------

INSERT INTO hiking
(name, difficulty, distance, duration, height_difference)
VALUES 
("Ceci est un test en dur", "Moyen", 22.7, "10:30:00", 890);

-------------------------------------------------
-- USERS --
-------------------------------------------------

INSERT INTO users (login, pwd, firstname, lastname, admin)
VALUES
("laetiC", "1709", "Laetitia", "Cheron", 0);

INSERT INTO users (login, pwd, firstname, lastname, admin)
VALUES
("johnP", "1704", "Jonathan", "Pardons", 1);