CREATE DATABASE IF NOT EXISTS guestbook;
CREATE TABLE IF NOT EXISTS guestbook.guests (
    id int,
    firstname varchar(255),
    lastname varchar(255)
);

CREATE USER IF NOT EXISTS 'GuestReader'@'%' IDENTIFIED BY 'JustAnExample';
GRANT SELECT ON guestbook.guests TO 'GuestReader'@'%';


USE guestbook;
INSERT INTO guests VALUES (1, 'Fahad', 'Ayyaz');
INSERT INTO guests VALUES (2, 'Thomas', 'Hennessy');
INSERT INTO guests VALUES (3, 'Stephen', 'Panicho');
