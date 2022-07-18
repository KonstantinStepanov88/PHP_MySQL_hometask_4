CREATE TABLE Groupmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT
);


INSERT INTO Groupmates VALUES (0001, 'Ivan', 25, 'Moscow');
INSERT INTO Groupmates VALUES (0002, 'Petr', 30, 'Kazan');
INSERT INTO Groupmates VALUES (0003, 'Anna', 19, 'Rostov');
INSERT INTO Groupmates VALUES (0004, 'John', 41, 'Sochi');
INSERT INTO Groupmates VALUES (0005, 'Vasya', 17, 'Moscow');

select * from Groupmates where address = 'Moscow'
