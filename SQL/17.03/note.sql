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

