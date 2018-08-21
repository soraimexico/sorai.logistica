CREATE TABLE `transporte` (
  `codigo` varchar(7) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `vehiculo` varchar(50) NOT NULL,
  `carga` varchar(15) NOT NULL,
  `especial` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `medicamentos` (`codigo`, `conductor`, `articulo`, `vehiculo`, `carga`, `especial`,`estado`, `ubicacion`,`created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('TG18901', 'los palomos', 'ligero', 'terrestre', '900 gr','normal', 'curso', '19.361032, -99.278705', '2017-07-24 16:43:20', 1, '2017-07-26 02:09:06')
