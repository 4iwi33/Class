SELECT *
FROM zptable;

-- не найти у кого зп не ровна 100




 --найти тех у кого зп больше 100 рублей и работает в отделе  'Director'
SELECT *
FROM zptable
WHERE ZP >=100 AND Profession ='Director';
