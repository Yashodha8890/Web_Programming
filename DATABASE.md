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
