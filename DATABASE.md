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

---Mayuri Yashodha---
-- Table structure for table `user_ registration`

CREATE TABLE `user_ registration` (
  `member_id` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_number` int NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `send_offers` tinyint(1) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Table structure for table `table_reservation`

CREATE TABLE `table_reservation` (
  `reservation_id` int NOT NULL,
  `member_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_number` int NOT NULL,
  `booking_date` date NOT NULL,
  `reservation_date` date NOT NULL,
  `number_of_guests` int NOT NULL,
  `check_in_time` time(5) NOT NULL,
  `check_out_time` time(5) NOT NULL,
  `preferable view` varchar(50) NOT NULL,
  `special_arrangements` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


