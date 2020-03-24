--найти фамилию продовца из лондона с самыми маленькими комисионнымми
SELECT  SNAME,
MIN(COMM)
FROM salespeople
GROUP BY SNAME;
----------------------------------------------------------------------
SELECT SNAME
FROM salespeople
WHERE COMM <
 ALL(SELECT COMM
FROM salespeople
WHERE CITY = 'London');
---------------------------------------
SELECT SNAME
FROM 
salespeople
WHERE 
CITY ='London' AND COMM =(
    SELECT
    MIN (COMM)
    FROM 
    salespeople
    WHERE 
    CITY = 'London'
)
-------------------------------------------------------------------------------

--найти средний руйтинг покупателей в каждом городе
SELECT CITY,   --вывести города
AVG(RATING)    --средний  RATING
FROM customers
GROUP BY 
CITY;
-------------------------------------------------------------------------------
--Объеденим все таблицы в одну
SELECT *
FROM salespeople, orders, customers
WHERE salespeople.SNUM = orders.SNUM
AND orders.CNUM = customers.CNUM;

--расчитать средний рейтинг покупателей для каждого продовца
SELECT
    SNAME,
    AVG(RATING)
FROM 
    salespeople, 
    orders, 
    customers
WHERE
    salespeople.SNUM = orders.SNUM AND orders.CNUM = customers.CNUM 
GROUP BY 
    SNAME;

--найти среднюю сумму заказов для каждого продовца на каждую дату
SELECT
    ODATE,
    SNAME,
COUNT(*) AS 'Количество заказазов',
AVG(AMT)
FROM 
    salespeople, 
    orders
WHERE
    salespeople.SNUM = orders.SNUM  
GROUP BY
    SNAME, ODATE;

--средняя сумма заказов на каждое число
SELECT
    ODATE,
    AVG(AMT)
FROM 
    orders
GROUP BY 
    ODATE;
    
