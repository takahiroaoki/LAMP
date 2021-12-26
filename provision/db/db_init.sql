# Register a user
CREATE USER 'lamp'@'%';
GRANT ALL PRIVILEGES ON *.* TO 'lamp'@'%';
FLUSH PRIVILEGES;

# Setting DB
CREATE DATABASE IF NOT EXISTS lamp_db DEFAULT CHARACTER SET utf8;
USE lamp_db;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    user_id INT(5) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(50) NOT NULL,
    PRIMARY KEY(user_id)
);

INSERT INTO users (user_name) VALUES ('Alice');