SELECT * FROM students;

SELECT prenom FROM students;

SELECT prenom, datenaissance, school FROM students;

SELECT * FROM students WHERE genre = "F";

SELECT * FROM students 
WHERE students.school = 1;

SELECT prenom FROM students 
ORDER BY prenom DESC
LIMIT 2;

INSERT INTO students (prenom, nom, genre, datenaissance, school)
VALUES ("Ginette", "Dalor", "F", "1930-01-01", 2);

UPDATE students
SET prenom = "Omer",
      genre = "M"
WHERE idStudent = 31;

DELETE FROM students 
WHERE idStudent = 3;

--CHANGE COL TYPE
ALTER TABLE students
MODIFY COLUMN school varchar(40);
--CHANGE VALUES
UPDATE students
SET school = "Central"
WHERE school = "1";

UPDATE students
SET school = "Anderlecht"
WHERE school = "2";
