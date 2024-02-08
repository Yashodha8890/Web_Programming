======== Database tables ===========

1. Yashodha Amarasinghe

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

2. Mayuri Yashodha

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


3. Udashi Jayaneththi

-- Table structure for table `event_booking`

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

-- Table structure for table `delivery`

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


4. Kapila Bandara