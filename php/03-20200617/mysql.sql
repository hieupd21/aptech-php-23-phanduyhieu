CREATE DATABASE aptech_php_23;

DROP DATABASE aptech_php_23;

CREATE TABLE aptech_php_23.users (
	id INT,
    username VARCHAR(50),
    userpass VARCHAR(50)
);

DROP TABLE aptech_php_23.users;

ALTER TABLE aptech_php_23.users
ADD userrole VARCHAR(50);

INSERT INTO aptech_php_23.users VALUE (1, 'Hieu', 'admin', 'admin');
INSERT INTO aptech_php_23.users VALUE (2, 'user1', 'user1', 'user');
INSERT INTO aptech_php_23.users VALUE (3, 'user2', 'user2', 'tester');
INSERT INTO aptech_php_23.users VALUE (4, 'user3', 'user3', 'user');

SELECT * FROM aptech_php_23.users;

SELECT *
FROM aptech_php_23.users
WHERE id = 1;

UPDATE aptech_php_23.users
SET users.userpass = '1234'
WHERE users.id = 2;

DELETE FROM aptech_php_23.users
WHERE users.id = 4;

ALTER TABLE aptech_php_23.users ADD PRIMARY KEY(id);