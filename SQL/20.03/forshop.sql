--Найти средний размер комиссионых продавцов в каждом городе
SELECT
CITY,
AVG(COMM)
FROM salespeople
GROUP BY 
CITY;

--Having--
--Условие записанное после ключевого слова WHERE применяются к каждой записи в таблице в отдельности условие записанные после слова HAVING применяются 
--к группам записей поэтому инструкция having не use без инструкции group by .
--так как условие записываемые после having применяются к группам записей это даёт возможность use в условиях функции агрегирования: min max sum avg count


--вывести список городов которых средний размер комисионых продавцов больше 0.14 
SELECT
CITY,
AVG(COMM)
FROM salespeople
GROUP BY 
CITY
HAVING AVG(COMM)> 0.14;

--найти средний рэйтинг покупателей в каждом городе
SELECT
CITY,
AVG(RATING)
FROM customers
GROUP BY CITY;

--вывести список городов в которых минимальный рейтинг покупателей выше среднего рейтинга всех покупателей
SELECT
CITY,
MIN(RATING)
FROM customers
GROUP BY CITY
HAVING MIN(RATING) > (SELECT AVG(RATING)
FROM customers);

--Вложеные запросы возвращающие не единственное значение 

--найти покупателей у которых рейтинг выше рейтинга любового покупателя из London
SELECT *
FROM customers
WHERE RATING >
ALL (SELECT RATING
FROM customers
WHERE CITY = 'London');
--any
SELECT *
FROM customers
WHERE RATING >
ANY (SELECT RATING
FROM customers
WHERE CITY = 'London');
--some
SELECT *
FROM customers
WHERE RATING >
SOME (SELECT RATING
FROM customers
WHERE CITY = 'London');