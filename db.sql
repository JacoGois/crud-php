CREATE DATABASE IF NOT EXISTS db_name;

USE db_name;

CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    capacity INT NOT NULL,
    description TEXT,
    created_at DATETIME NOT NULL,
    updated_at DATETIME DEFAULT NULL
);

INSERT INTO rooms (name, capacity, description, created_at, updated_at) VALUES
('Conference Room', 50, 'A large room for conferences', NOW(), NULL),
('Meeting Room', 20, 'A small room for meetings', NOW(), NULL),
('Training Room', 30, 'A room equipped for training sessions', NOW(), NULL),
('Interview Room', 10, 'A room for conducting interviews', NOW(), NULL),
('Break Room', 15, 'A room for employees to take breaks', NOW(), NULL);
