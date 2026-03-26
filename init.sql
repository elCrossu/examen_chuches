CREATE TABLE chuches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    info VARCHAR(255) NOT NULL,
    precio DECIMAL(5,2) NOT NULL
);

INSERT INTO chuches (nombre, info, precio) VALUES
('Llave', 'azucar, pica pica', 1.00),
('alubia', 'azucar,', 0.70),
('Ladrillo', 'Regaliz, nata', 0.80);