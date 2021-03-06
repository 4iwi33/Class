SELECT *
FROM zptable;

-- не найти у кого зп не ровна 100




--найти тех у кого зп больше 100 рублей и работает в отделе  'Director'
SELECT *
FROM zptable
WHERE ZP >=100 AND Profession ='Director';

--NOT=не  AND=и OR=или 

--найти всех у кого зп не менее 100 р.
SELECT *
FROM zptable
WHERE NOT ZP <100;

--отсортировать таблицы  от малого к большому (Order by)
SELECT *
FROM zptable
Order by ZP

--ASC сортировать от меньшего к большему
--DESC сортировать от большего к меньшему

--сортировка от большего к меньшему
SELECT *
FROM zptable
Order by ZP DESC

--сортировка по нескольким полям

--отсортировать по проффесиям в алф порядке и по зп в порядке убывания 
SELECT *
FROM zptable
Order by Profession ASC,
ZP DESC;

--формирование вывода взапроса

--AS=как

--запрос перевод название столбцов  на русский язык
SELECT 
Number AS "Номер", FIO AS "ФИО", ZP AS "Зарплата", Profession AS "Профессия" 
FROM zptable

--посчитать налог для каждого работника
SELECT 'FIO' as 'ФИО', Profession as 'Профессия', ZP * 0.13 as 'Налоги' 
FROM zptable


-- чистая зп после вычета налогов
SELECT 'FIO' as 'ФИО', Profession as 'Профессия', ZP - ZP * 0.13 as 'Чистые' 
FROM zptable

