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

-------------------------------------------------------------------------------------------------------------------------------------------------------------
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
-----------------------------------------------------------------------------------------------------------------------------------------------------------
--Оператор - "IN"
--находит всех сотрудников отделов  Driver или Worker
SELECT *
FROM people
WHERE Department = 'Driver'
    OR
    Department = 'Worker'

-- тоже самое через in
SELECT *
FROM people
WHERE
Department IN('Driver', 'Worker')


-------------------------------------------------------------------------------------------------------------------------------------------------------
--Оператор - "LIKE"


--
SELECT *
FROM people
WHERE 
Name LIKE 
    'Pe%r';


--вывести вусех сотрудников которые работают в отделе название которого содержит ровно 6 символов
SELECT *
FROM people
WHERE 
Name LIKE 
    '';
----------------------------------------------------------------------------------------------------------------------------------------------------------
--Функции Агрегирования:
--MIN 
--MAX
--SUM
--COUNT
--AVG

--Функции Агрегирования вычисляют групповые характеристики полей и таблицы
--подсчитаем максимальную зп 
SELECT MAX(Salary)
FROM people;

--сумарная зп
SELECT SUM(Salary), MIN(Salary), MAX(Salary)
FROM people;

--COUNT
SELECT COUNT(Salary)
FROM people;

--удалим зп со значением 300
DELETE FROM people 
WHERE Salary = 300;

--удалим зп из  id 5
UPDATE people SET Salary = NULL WHERE id = 5;
SELECT COUNT(Salary)
FROM people;


-- 
SELECT COUNT(*)
FROM people;

--------------------------------------------------------------------------------------------------------------------------------------------------------
--Вложеные запросы
SELECT *
FROM people
WHERE Salary>
(SELECT AVG(Salary)
FROM people);

--найти работника с самой большой зп как его зовут?
SELECT *
FROM people
WHERE Salary=
(SELECT MAX(Salary)
FROM people);

--найти работника с самой маленькой зп как его зовут?
SELECT *
FROM people
WHERE Salary=
(SELECT MIN(Salary)
FROM people);


--вывести инфу о сотрудниках имеющих зп больше средней зп в 'Driver'



    