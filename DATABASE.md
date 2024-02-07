======== Database tables ===========

-- Table structure for table `food_categores`

CREATE TABLE `food_categores` 
(
  `catergoryId` int NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Table structure for table `food_items`

CREATE TABLE `food_items` (
  `itemNo` int NOT NULL,
  `itemName` varchar(150) NOT NULL,
  `catergoryId` int NOT NULL,
  `itemCategory` varchar(50) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Table structure for table `oderDetails`

CREATE TABLE `oderDetails` (
  `orderNumber` int NOT NULL,
  `memberId` int NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `quantity` int NOT NULL,
  `unitPrice` decimal(10,0) NOT NULL,
  `totalUnitPrice` decimal(10,0) NOT NULL,
  `orderStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `event_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `select_room` varchar(50) NOT NULL,
  `number_of_guest` int NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `menu_style` varchar(50) NOT NULL,
  `event_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_booking`
--

INSERT INTO `event_booking` (`event_id`, `first_name`, `last_name`, `phone_number`, `email`, `select_room`, `number_of_guest`, `event_date`, `start_time`, `end_time`, `menu_style`, `event_status`) VALUES
(1, 'Illeperumaarachchige Sarith', 'Ilapperuma', '+358417226220', 'i.sarithilapperuma@gmail.com', 'BBCAP20', 15, '2024-10-23', '00:00:01', '00:00:03', 'BBCAP22', 0),
(2, 'Illeperumaarachchige Sarith', 'Ilapperuma', '+358417226220', 'i.sarithilapperuma@gmail.com', 'BBCAP20', 15, '2024-10-23', '00:00:01', '00:00:03', 'BBCAP22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int NOT NULL,
  `oder_id` int NOT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `delivery_method` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `oder_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

