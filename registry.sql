
/*! How to make this proyect */

--database_name: `grades`

/*! How to create table for this proyect */
 
CREATE TABLE `Menu_de_Comida` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `platillo` VARCHAR(80) NOT NULL,
  `descripcion` VARCHAR(120) NOT NULL,
  `precioMX` DECIMAL(6,2) NOT NULL,
  `precioUSD` DECIMAL(6,2) AS (precioMX / 17.31),
  `porcion` varchar(25) NOT NULL,
  `dieta` VARCHAR(50) NOT NULL
);


--Add content to said table, in order to register students and their grades accordingly. 
INSERT INTO `Menu_de_Comida` (`platillo`, `descripcion`, `precioMX`, `porcion`,`dieta`) VALUES
('Nuggets de pollo', 'Pollo orgánico empanizado, frito en aceite de coco.', '85', '10 piezas + papas fritas', 'Libre de gluten.'),
('Nuggets de pollo', 'Sustituto de pollo (Beyond Meat) empanizado, frito en aceite de coco.', '100', '10 piezas + papas fritas', 'Vegano, vegetariano.'),
('Alitas BBQ', 'Alitas de pollo bañadas en salsa BBQ.', '140', '320g', 'Libre de gluten.'),
('Alitas BBQ', 'Alitas de sustituto de pollo (Beyond Meat) bañadas en salsa BBQ.', '160', '320g', 'Vegano, vegetariano.'),
('Hamburguesa San Lucas', 'Pan con mantequilla recién horneado, carne, tocino, lechuga y tomate.', '120', '200g', '---'),
('Hamburguesa Feliz', 'Pan con mantequilla recién horneado, portobello, lechuga, aguacate y tomate.', '140', '200g', 'Vegetariano'),
('Hamburguesa Alegre', 'Pan recién horneado, portobello o sustituto de carne (Beyond Meat), lechuga, aguacate y tomate.', '150', '200g', 'Vegano, vegetariano.'),
('Orden de papas fritas', 'A la francesa, en rajas, en cubos o española.', '75', '100g', 'Vegano, vegetariano.'),
('Orden de guacamole', 'Guacamole con tomate, cebolla, chile serrano, especias y limón.', '65', '100g', 'Vegano, vegetariano.'),
('Nachos con queso', 'Nachos con queso manchego y monterrey jack, frijoles fritos y aguacate', '150', '220g', 'Vegetariano.'),
('Nachos con carne', 'Nachos con queso manchego y monterrey jack, carne asada, frijoles fritos y aguacate', '180', '220g', '---');
