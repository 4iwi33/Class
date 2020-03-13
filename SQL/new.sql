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