--
-- Table structure for table `cart`
--
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_oriprice` double(10,2) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_save` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`,  `item_oriprice`,`item_price`,`item_save`, `item_image`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 14999,12999,2000, 'assest/products/1.png'),
(2, 'Redmi', 'Redmi Note 7', 12999,10999,1000, 'assest/products/2.png'),
(3, 'Redmi', 'Redmi Note 6', 11999,10499,1500, 'assest/products/3.png'),
(4, 'Redmi', 'Redmi Note 5', 14999,12999,2000, 'assest/products/4.png'),
(5, 'Redmi', 'Redmi Note 4', 10999,8499,1500, 'assest/products/5.png'),
(6, 'Redmi', 'Redmi Note 8', 14999,12999,2000, 'assest/products/6.png'),
(7, 'Redmi', 'Redmi Note 9', 13999,11499,2500, 'assest/products/8.png'),
(8, 'Redmi', 'Redmi Note', 9999,6999,3000, 'assest/products/10.png'),
(9, 'Samsung', 'Samsung Galaxy S6', 14999,12999,2000, 'assest/products/11.png'),
(10, 'Samsung', 'Samsung Galaxy S7', 15999,12499,3500, 'assest/products/12.png'),
(11, 'Apple', 'Apple iPhone 5', 39999,37999,2000, 'assest/products/13.png'),
(12, 'Apple', 'Apple iPhone 6', 40999,39999,1000, 'assest/products/14.png'),
(13, 'Apple', 'Apple iPhone 7', 35999,33499,2500, 'assest/products/15.png'),
(14, 'Samsung', 'Samsung Galaxy 10', 15999,13999,2000, 'assest/products/1.png'), 
(15, 'Redmi', 'Redmi Power', 11999,9499,2500, 'assest/products/2.png'),
(16, 'Redmi', 'Redmi Prime', 11999,10499,1500, 'assest/products/3.png'),
(17, 'Redmi', 'Redmi Note 5', 14999,12999,2000, 'assest/products/4.png'),
(18, 'Samsung', 'Samsung M32', 14999,13999,1000, 'assest/products/5.png'),
(19, 'Redmi', 'Redmi Note 8', 13999,12999,1000, 'assest/products/6.png'),
(20, 'Samsung', 'Samsung M12', 8999,8499,500, 'assest/products/8.png'),
(21, 'Redmi', 'Redmi Note Pro', 13499,11999,1500, 'assest/products/10.png'),
(22, 'Samsung', 'Samsung Samart', 14999,12999,2000, 'assest/products/11.png'),
(23, 'Samsung', 'Samsung Galaxy S7', 14999,12999,2000, 'assest/products/12.png'),
(24, 'Apple', 'Apple iPhone 11', 45999,42999,3000, 'assest/products/13.png'),
(25, 'Apple', 'Apple iPhone 10', 41999,40999,1000, 'assest/products/14.png');



--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `register_date` datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);



--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

