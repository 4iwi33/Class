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
