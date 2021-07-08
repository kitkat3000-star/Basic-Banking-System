
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Himaja', 'himaja@gmail.com', 6949),
(2, 'Anusha', 'anusha@gmail.com', 8593),
(3, 'Kriti', 'kriti@gmail.com', 4000),
(4, 'Ayush', 'aysh@gmail.com', 4000),
(5, 'Suraj', 'suraj@gmail.com', 7000),
(6, 'Anita', 'anita@gmail.com', 10000),
(7, 'Daniel', 'daniel@gmail.com', 9200),
(8, 'Sohail', 'sohail@gmail.com', 3200),
(9, 'Sania', 'sania@gmail.com', 6889),
(10, 'Aditi', 'aditi@gmail.com', 9603);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

