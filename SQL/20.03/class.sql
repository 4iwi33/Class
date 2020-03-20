--найти вторую букву из имени 
SELECT *
FROM people
WHERE 
Name LIKE '_e%';

--найти всех у кого последние две буквы в фамилии "а"
SELECT *
FROM people
WHERE 
Name LIKE '%ha%';