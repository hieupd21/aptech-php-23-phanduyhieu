CREATE DATABASE aptech_php_23_05;

CREATE TABLE aptech_php_23_05.users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE
);

CREATE TABLE aptech_php_23_05.passports (
	id INT PRIMARY KEY AUTO_INCREMENT,
	serial VARCHAR(50) UNIQUE,
    u_id INT,
    FOREIGN KEY (u_id) REFERENCES users(id)
);

INSERT INTO aptech_php_23_05.users (name)
VALUES ('Nam'),
	('Nu'),
    ('Hieu');
    
INSERT INTO aptech_php_23_05.passports (serial, u_id)
VALUES ('a', 3),
	('b', 1),
    ('c', 2);
    
SELECT * FROM aptech_php_23_05.users;

SELECT a.id, a.name, p.serial
FROM aptech_php_23_05.users AS a
JOIN aptech_php_23_05.passports AS p
ON a.id = p.u_id
WHERE p.serial = 'a';

CREATE TABLE aptech_php_23_05.vehicles (
	id INT PRIMARY KEY AUTO_INCREMENT,
    bs VARCHAR(3),
    u_id INT,
    FOREIGN KEY (u_id) REFERENCES users(id)
);

INSERT INTO aptech_php_23_05.vehicles (bs, u_id)
VALUES ('43A', 3),('43B', 2),('43C', 3);

SELECT * FROM aptech_php_23_05.vehicles;

SELECT a.name, v.bs
FROM aptech_php_23_05.users AS a
JOIN aptech_php_23_05.vehicles AS v
ON a.id = v.u_id
WHERE a.name = 'Hieu';