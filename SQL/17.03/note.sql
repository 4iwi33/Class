--R--

--добавили 'bear'
INSERT INTO first
    (Name)
VALUES
    ('bear');


--добавили товар и цену 
INSERT INTO first
    (Name, price)
VALUES
    ('free', 2);

--Update--


--присвоили всем товарам цену = 30
UPDATE first Set price = 30;


--присвоили 22 тому id который идёт 5 по счёту
UPDATE first Set price = 22
WHERE  id = 5;

--присвоили пятому и второму 
UPDATE first Set price = 38
WHERE  id = 5
    OR
    id = 2;

--Delete--

--удалим 5 id
DELETE FROM first 
WHERE id = 5;

--удалим price
DELETE FROM first 
WHERE price >20;

--установить цену для всех конкретных товаров цену 20

-----------------------------------------------------------------------------------------------------------------------
--for People.zql
--Оператор - "BETWEEN" 

--вывести всех работников у кого зп от 300 до 450
SELECT *
FROM people
WHERE Salary >= 300
    AND
    Salary <=450

--тоже самое только с Between
SELECT *
FROM people
WHERE Salary 
BETWEEN
300
AND 
400

--Оператор in
--находит всех сотрудников отделов  Driver или Worker
SELECT *
FROM people
WHERE Department = 'Driver'
    OR
    Department = 'Worker'