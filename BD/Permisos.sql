CREATE USER IF NOT EXISTS 'user'@'localhost' IDENTIFIED BY 'password';

GRANT SELECT,UPDATE,DELETE,INSERT ON gestion.* TO 'user'@'localhost';

FLUSH PRIVILEGES;