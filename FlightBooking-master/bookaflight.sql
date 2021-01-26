CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `flights` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_number` varchar(10) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `depart_day` date DEFAULT NULL,
  `depart` time DEFAULT NULL,
  `arrival_day` date DEFAULT NULL,
  `arrival` time DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `seats_available` int(11) DEFAULT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `flights` VALUES 
(1,'BG101','HSI','SAI','2020-06-04','12:00:00','2020-06-04','13:25:00','2h25m',2000,8),
(2,'BG102','HSI','OIA','2020-06-04','19:30:00','2020-06-04','20:55:00','2h25m',1800,8),
(3,'BG103','HSI','CBA','2020-06-04','08:45:00','2020-04-20','12:45:00','15h00m',2500,9),
(4,'BG104','HSI','SMA','2020-06-04','10:30:00','2020-04-20','14:30:00','15h00m',1900,9),
(5,'BG105','SAI','HSI','2020-06-04','10:00:00','2020-06-04','11:15:00','4h15m',2000,4),
(6,'BG106','SAI','OIA','2020-06-04','19:45:00','2020-06-04','21:00:00','4h15m',2100,6),
(7,'BG107','SAI','CBA','2020-06-04','08:30:00','2020-06-04','11:35:00','2h05m',1850,6),
(8,'BG108','SAI','SMA','2020-06-04','15:30:00','2020-06-04','18:35:00','2h05m',2500,4),
(9,'BG109','OIA','HSI','2020-06-04','14:00:00','2020-04-20','18:10:00','14h10m',2250,7),
(10,'BG110','OIA','SAI','2020-06-04','16:30:00','2020-04-20','19:50:00','13h20m',2150,9),
(11,'BG111','OIA','CBA','2020-06-04','06:00:00','2020-06-04','06:35:00','2h35m',2050,4),
(12,'BG112','OIA','SMA','2020-06-04','14:30:00','2020-06-04','15:05:00','2h35m',2300,10),
(13,'BG113','CBA','HSI','2020-06-04','14:00:00','2020-06-04','14:40:00','13h40m',2350,6),
(14,'BG114','CBA','SAI','2020-06-04','09:00:00','2020-06-04','07:55:00','12h55m',1950,10),
(15,'BG115','CBA','OIA','2020-06-04','16:00:00','2020-06-04','15:20:00','12h20m',2450,4),
(16,'BG116','CBA','SMA','2020-06-04','18:00:00','2020-06-04','15:50:00','11h50m',1800,1),
(17,'BG117','SMA','HSI','2020-06-04','07:30:00','2020-06-04','14:05:00','3h35m',2100,8),
(18,'BG118','SMA','SAI','2020-06-04','16:00:00','2020-06-04','22:35:00','3h35m',1850,6),
(19,'BG119','SMA','OIA','2020-06-04','11:30:00','2020-06-04','14:50:00','2h20m',2150,2),
(20,'BG120','SMA','CBA','2020-06-04','20:00:00','2020-06-04','23:20:00','2h20m',2400,3),
(21,'BG101','HSI','SAI','2020-06-05','12:00:00','2020-06-05','13:25:00','2h25m',1950,10),
(22,'BG113','CBA','HSI','2020-06-05','19:30:00','2020-06-05','20:55:00','2h25m',1900,6),
(23,'BG106','SAI','OIA','2020-06-05','08:45:00','2020-04-23','12:45:00','15h00m',2300,4),
(24,'BG115','CBA','OIA','2020-06-05','10:30:00','2020-04-23','14:30:00','15h00m',2250,6),
(25,'BG111','OIA','CBA','2020-06-05','10:00:00','2020-06-05','11:15:00','4h15m',1800,8);

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberSeq` int(11) NOT NULL,
  `totalCost` float DEFAULT NULL,
  `tripType` varchar(50) DEFAULT NULL,
  `depart_id` int(11) NOT NULL,
  `return_id` int(11) NOT NULL,
  `passengers` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;