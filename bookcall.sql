CREATE TABLE `bookcall` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `meeting_agenda` text NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `booking_datetime` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
