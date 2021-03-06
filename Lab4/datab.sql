use nyg7208;

CREATE TABLE cars (
car_id int(11) NOT NULL AUTO_INCREMENT, 
make VARCHAR(10),  
model VARCHAR(15),  
price int(10),  
yom int(4),
CONSTRAINT  car_id_pk
PRIMARY KEY (car_id));

INSERT INTO cars VALUES (1,'Holden','Astra',14000,2005),
(2,'Holden','Commodore',13500,2005),
(3,'Holden','Astra',8000,2001),
(4,'Holden','Commodore',28000,2009),
(5,'Toyota','Corolla',20000,2010),
(6,'Toyota','Corolla',12000,2001),
(7,'Ford','Falcon',39000,2010),
(8,'Ford','Falcon',14000,2006),
(9,'Ford','Falcon',7000,2003),
(10,'Ford','Laser',10000,2001);

--Task 2--

SELECT * FROM CARS;

SELECT MAKE, MODEL, PRICE FROM CARS ORDER BY MAKE, MODEL;

SELECT MAKE, MODEL FROM CRAS WHERE PRICE >= 20000;

SELECT MAKE, MODEL FROM CARS WHERE PRICE < 15000;

SELECT MAKE, MODEL, AVG(PRICE) FROM CARS GROUP BY PRICE;

INSERT INTO cars VALUES (1,'Holden','Astra',14000,2005),
(2,'Holden','Commodore',13500,2005),
(3,'Holden','Astra',8000,2001),
(4,'Holden','Commodore',28000,2009),
(5,'Toyota','Corolla',20000,2010),
(6,'Toyota','Corolla',12000,2001),
(7,'Ford','Falcon',39000,2010),
(8,'Ford','Falcon',14000,2006),
(9,'Ford','Falcon',7000,2003),
(10,'Ford','Laser',10000,2001);

--Task 2--

SELECT * FROM CARS;

SELECT MAKE, MODEL, PRICE FROM CARS ORDER BY MAKE, MODEL;

SELECT MAKE, MODEL FROM CRAS WHERE PRICE >= 20000;

SELECT MAKE, MODEL FROM CARS WHERE PRICE < 15000;

SELECT MAKE, MODEL, AVG(PRICE) FROM CARS GROUP BY Model;
