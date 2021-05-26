CREATE USER 'iron'@'%' IDENTIFIED BY 'iron';
GRANT ALL PRIVILEGES ON `iron`.* TO 'iron'@'%';

CREATE USER 'iron'@'localhost' IDENTIFIED BY 'iron';
GRANT ALL PRIVILEGES ON `iron`.* TO 'iron'@'localhost';