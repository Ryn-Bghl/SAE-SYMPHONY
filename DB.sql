CREATE TABLE USER (
  `id` AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
);

CREATE TABLE BEER (
    `id` NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) DEFAULT NULL,
    `under-title` varchar(255) DEFAULT NULL,
    `price` decimal(10, 2) DEFAULT NULL,
    `description` text DEFAULT NULL,
    `volume` int(11) DEFAULT NULL,
    `alcohol` decimal(5, 2) DEFAULT NULL,
    `stock` int(11) DEFAULT NULL,
)

-- CREATE TABLE STOCK (
--     `id` NOT NULL AUTO_INCREMENT PRIMARY KEY,
--     `beer_id` int(11) DEFAULT NULL,
--     `quantity` int(11) DEFAULT NULL,
--     FOREIGN KEY (`beer_id`) REFERENCES BEER(`id`) ON DELETE CASCADE
-- )