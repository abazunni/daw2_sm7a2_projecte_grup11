-- Create empresa.sql file in /home/vagrant/scripts/
-- This script creates the database and user for the application

-- Drop database if exists
DROP DATABASE IF EXISTS empresa;

-- Create database
CREATE DATABASE empresa CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Drop user if exists
DROP USER IF EXISTS 'administrador'@'localhost';

-- Create user
CREATE USER 'administrador'@'localhost' IDENTIFIED BY 'FjeClot24#';

-- Grant privileges
GRANT ALL PRIVILEGES ON empresa.* TO 'administrador'@'localhost';

-- Flush privileges
FLUSH PRIVILEGES;

-- Show confirmation
SELECT 'Database and user created successfully!' AS 'Message';