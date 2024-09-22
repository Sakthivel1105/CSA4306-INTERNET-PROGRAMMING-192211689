CREATE TABLE `admins` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(100) NOT NULL
);

CREATE TABLE `candidates` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(100) NOT NULL
);

CREATE TABLE `exams` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `exam_date` DATE NOT NULL,
    `questions` TEXT NOT NULL,
    `results` TEXT NOT NULL
);
