-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2024 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `longvlhph38689`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `name_category`) VALUES
(11, 'Fruits'),
(12, 'Vegetables'),
(13, 'Meat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `username`, `product_id`, `date`, `status`) VALUES
(23, 'adada', 'admin', 59, '2023-12-01 05:17:47', 0),
(24, 'ad', 'admin', 59, '2023-12-01 05:18:12', 0),
(25, '', 'admin', 59, '2023-12-01 05:18:13', 1),
(26, '', 'admin', 59, '2023-12-01 05:18:13', 1),
(27, 'adad', 'admin', 59, '2023-12-01 05:18:14', 1),
(28, 'adada', 'admin', 59, '2023-12-01 05:18:22', 1),
(29, 'adad', 'admin', 59, '2023-12-01 05:18:25', 0),
(30, 'adad', 'admin', 59, '2023-12-01 05:19:04', 1),
(31, 'adad', 'admin', 59, '2023-12-01 05:19:05', 1),
(32, 'ada', 'admin', 59, '2023-12-01 05:19:06', 1),
(33, 'q1', 'admin', 59, '2023-12-01 05:19:11', 1),
(34, 'qqqq', 'admin', 59, '2023-12-01 05:19:17', 1),
(35, 'a1', 'admin', 59, '2023-12-01 05:20:19', 1),
(36, 'ac', 'admin', 59, '2023-12-01 05:20:23', 1),
(37, 'ngon @@@', 'admin', 59, '2023-12-01 14:56:48', 1),
(38, 'xx', 'admin', 59, '2023-12-01 14:57:03', 1),
(39, 'okl hge', 'admin', 59, '2023-12-01 14:58:45', 1),
(40, 'GOOD', 'admin', 62, '2023-12-01 15:05:36', 1),
(42, 'oknjnkjnkjnkjbn', 'admin', 59, '2023-12-02 02:43:54', 1),
(43, 'lllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'admin', 59, '2023-12-05 01:43:32', 1),
(44, 'ok', 'admin', 61, '2023-12-05 01:45:18', 1),
(45, 'binh luan', 'admin', 59, '2023-12-05 02:14:00', 1),
(46, '\r\n', 'admin', 64, '2023-12-07 12:16:58', 1),
(47, 'a', 'admin', 64, '2023-12-07 12:19:50', 1),
(48, 'ok', 'admin', 60, '2023-12-08 13:49:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `code_coupon` varchar(10) NOT NULL,
  `percent_discount` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`code_coupon`, `percent_discount`) VALUES
('VULONG1234', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `name_transport` varchar(50) NOT NULL,
  `code_coupon` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_methods` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_order`, `username`, `date`, `name_transport`, `code_coupon`, `total`, `payment_methods`, `status`) VALUES
(54, 'admin', '2023-12-01 00:54:41', 'Express Delivery', '', 44, 'Paypal', 'Received'),
(55, 'admin', '2023-12-01 14:25:53', 'Standard Shipping ', '', 202, 'Cash On Delivery', 'Cancelled'),
(56, 'admin', '2022-12-01 15:11:20', 'Express Delivery', '', 617, 'Paypal', 'Received'),
(57, 'admin', '2023-12-01 15:19:16', 'Standard Shipping ', '', 340, 'Paypal', 'Cancelled'),
(58, 'admin', '2023-12-01 15:21:56', 'Standard Shipping ', '', 470, 'Cash On Delivery', 'Cancelled'),
(59, 'admin', '2023-12-01 21:25:01', 'Standard Shipping ', '', 175, 'Paypal', 'Awaiting Confirmation'),
(60, 'admin', '2023-12-02 08:04:58', 'Express Delivery', 'VULONG1234', 40, 'Cash On Delivery', 'Cancelled'),
(61, 'admin', '2023-12-02 08:08:57', 'Standard Shipping ', '', 100, 'Paypal', 'In transit'),
(62, 'admin', '2023-12-02 08:11:30', 'Standard Shipping ', '', 194, 'Cash On Delivery', 'Received'),
(63, 'admin', '2023-12-04 16:43:30', 'Express Delivery', 'VULONG1234', 158, 'Paypal', 'Awaiting Confirmation'),
(64, 'admin1', '2023-12-05 07:39:14', 'Express Delivery', '', 323, 'Cash On Delivery', 'Awaiting Confirmation'),
(65, 'admin', '2023-12-05 08:12:48', 'Express Delivery', '', 424, 'Cash On Delivery', 'Cancelled'),
(66, 'admin', '2023-12-06 10:01:43', 'Express Delivery', '', 158, 'Cash On Delivery', 'Awaiting Confirmation'),
(67, 'admin', '2023-12-06 10:41:06', 'Standard Shipping ', '', 64, 'VNPAY(Vietnamese)', 'Awaiting Confirmation'),
(68, 'admin', '2023-12-06 10:44:54', 'Standard Shipping ', '', 34, 'Cash On Delivery', 'Cancelled'),
(69, 'admin', '2023-12-06 10:45:22', 'Standard Shipping ', '', 65, 'Cash On Delivery', 'In transit'),
(70, 'admin', '2023-12-06 10:48:21', 'Standard Shipping ', '', 65, 'VNPAY(Vietnamese)', 'Awaiting Confirmation'),
(71, 'admin', '2023-12-07 09:58:58', 'Standard Shipping ', '', 56, 'Cash On Delivery', 'Cancelled'),
(78, 'admin', '2023-12-09 08:06:58', 'Standard Shipping ', 'VULONG1234', 120, 'VNPAY(Vietnamese)', 'Received');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_product_variant` int(11) NOT NULL,
  `id_origin` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `quanlity` int(5) NOT NULL,
  `price` int(8) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `order_id`, `id_product_variant`, `id_origin`, `id_type`, `quanlity`, `price`, `total`) VALUES
(11, 54, 18, 1, 2, 2, 12, 24),
(12, 55, 11, 1, 1, 2, 46, 92),
(13, 55, 13, 4, 1, 4, 25, 100),
(14, 56, 12, 2, 1, 5, 55, 275),
(15, 56, 11, 1, 1, 7, 46, 322),
(16, 57, 14, 2, 1, 10, 33, 330),
(17, 58, 11, 1, 1, 10, 46, 460),
(18, 59, 12, 2, 1, 3, 55, 165),
(19, 60, 14, 2, 1, 1, 33, 33),
(20, 61, 20, 2, 1, 5, 18, 90),
(21, 62, 11, 1, 1, 4, 46, 184),
(22, 63, 11, 1, 1, 5, 46, 230),
(23, 64, 11, 1, 1, 3, 46, 138),
(24, 64, 12, 2, 1, 3, 55, 165),
(25, 65, 14, 2, 1, 3, 33, 99),
(26, 65, 13, 4, 1, 3, 25, 75),
(27, 65, 11, 1, 1, 5, 46, 230),
(28, 66, 11, 1, 1, 3, 46, 138),
(29, 67, 20, 2, 1, 3, 18, 54),
(30, 68, 18, 1, 2, 2, 12, 24),
(31, 69, 12, 2, 1, 1, 55, 55),
(32, 70, 12, 2, 1, 1, 55, 55),
(33, 71, 11, 1, 1, 1, 46, 46),
(34, 72, 11, 1, 1, 4, 46, 184),
(35, 72, 12, 2, 1, 3, 55, 165),
(36, 73, 20, 2, 1, 3, 18, 54),
(37, 74, 20, 2, 1, 3, 18, 54),
(38, 75, 11, 1, 1, 3, 46, 138),
(39, 76, 12, 2, 1, 1, 55, 55),
(40, 77, 20, 2, 1, 1, 18, 18),
(41, 78, 11, 1, 1, 4, 46, 184);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `origin`
--

CREATE TABLE `origin` (
  `id_origin` int(11) NOT NULL,
  `value_origin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `origin`
--

INSERT INTO `origin` (`id_origin`, `value_origin`) VALUES
(1, 'Vietnam'),
(2, 'America'),
(3, 'Australia'),
(4, 'China');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_methods`
--

CREATE TABLE `payment_methods` (
  `name_payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_methods`
--

INSERT INTO `payment_methods` (`name_payment`) VALUES
('Cash On Delivery'),
('VNPAY(Vietnamese)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(8) NOT NULL,
  `desciption` text NOT NULL,
  `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `desciption`, `sub_category_id`) VALUES
(59, 'Fuji Apple', 5, 'Fuji apples are a crisp and sweet variety known for their vibrant red and yellow skin. Named after Mount Fuji in Japan, these apples are a cross between two American apple varieties, the Red Delicious and Ralls Janet. The result is a juicy and refreshing fruit with a fine-grained texture. Fuji apples are often medium to large in size and are characterized by their round shape. They have a high sugar content, making them exceptionally sweet, and a pleasant, firm flesh that provides a satisfying crunch with every bite. Fuji apples are not only delicious eaten fresh but are also favored for use in salads, desserts, and various culinary creations due to their well-balanced flavor and pleasant aroma.', 25),
(60, 'Yellow Doll Watermelon', 12, '\r\nYellow Doll Watermelon is a unique and visually striking variety that stands out with its vibrant yellow flesh and bright green rind. This refreshing fruit, a hybrid cultivar, offers a delightful departure from traditional red-fleshed watermelons', 36),
(61, 'Bosco Apple Fruit', 35, 'Bosco Apple Fruit is a visual and culinary delight. With its vibrant red and green skin, this apple offers a crisp texture and a perfect balance of sweetness and tartness. Whether savored on its own or used in recipes, Bosco Apple Fruit promises a refreshing and flavorful experience, embodying the pinnacle of orchard excellence.', 25),
(62, 'Green Cauliflower', 17, 'Green cauliflower, also known as broccoflower or Romanesco broccoli, is a unique and visually striking vegetable. Distinguished by its vibrant lime-green color, this cruciferous delight is a hybrid of cauliflower and broccoli. Its intricate fractal pattern and spiral-shaped florets set it apart, giving it an almost otherworldly appearance. Beyond its captivating looks, green cauliflower offers a mild, nutty flavor, combining the best qualities of both its parent vegetables. Rich in nutrients and versatility, it can be enjoyed raw, steamed, roasted, or incorporated into a variety of dishes, bringing a pop of color and a distinct taste to your culinary creations. Green cauliflower is not just a feast for the eyes but also a flavorful addition to a healthy and vibrant diet.', 37),
(63, 'Mandarin Orange', 37, '\r\nMandarin oranges, renowned for their sweet and citrusy flavor, are a popular and refreshing fruit. These small, easy-to-peel citrus wonders are known for their bright orange hue and segmented, juicy interior. With a balance of sweetness and a hint of tartness, mandarins offer a delightful burst of flavor in every bite. Their convenient, naturally segmented structure makes them a convenient snack, perfect for on-the-go indulgence. Packed with vitamin C and other essential nutrients, mandarin oranges not only tantalize the taste buds but also contribute to a healthy and nutritious diet. Whether enjoyed fresh, squeezed into juice, or incorporated into salads and desserts, mandarin oranges are a delicious and vibrant addition to the world of citrus fruits.', 27),
(64, 'Organic Tomato', 12, 'Organic tomatoes, cultivated without synthetic pesticides or fertilizers, offer a delightful burst of flavor and nutrition. Their vibrant red hue and juicy texture speak to the care taken in organic farming practices. Rich in antioxidants and essential nutrients, these tomatoes make a wholesome addition to salads, sauces, or enjoyed fresh. Opting for organic tomatoes not only enhances taste but also aligns with eco-friendly and sustainable agricultural choices, promoting both personal health and environmental well-being.', 24),
(66, 'Strawberry Red', 33, 'StrawberryStrawberryStrawberry', 39);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id_image` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(400) NOT NULL,
  `main` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id_image`, `product_id`, `image_path`, `main`) VALUES
(18, 48, 'photo-1506972849873-0ce0dfc4d187.avif', 0),
(19, 48, 'premium_photo-1686855057846-1fd77f3eefc5.avif', 1),
(21, 49, 'photo-1506972849873-0ce0dfc4d187.avif', 0),
(22, 49, '1.avif', 1),
(23, 50, '1.avif', 0),
(24, 50, 'Biểu đồ không có tiêu đề.drawio.png', 1),
(25, 50, '1.drawio.png', 0),
(26, 50, 'photo-1506972849873-0ce0dfc4d187.avif', 0),
(27, 50, 'premium_photo-1686855057846-1fd77f3eefc5.avif', 0),
(28, 51, '1.avif', 1),
(29, 52, '1.drawio.png', 1),
(30, 53, 'photo-1506972849873-0ce0dfc4d187.avif', 1),
(32, 54, '1.avif', 1),
(33, 55, 'premium_photo-1686855057846-1fd77f3eefc5.avif', 1),
(34, 56, '1.drawio.png', 1),
(35, 57, '1.drawio.png', 1),
(36, 58, 'Fuji.webp', 1),
(37, 60, '813UaHY14GL.jpg', 1),
(38, 59, 'Fuji.webp', 1),
(39, 61, 'product_details_1_1.jpg', 1),
(40, 62, 'product_1_2.jpg', 1),
(41, 63, 'product_1_3.jpg', 1),
(42, 64, 'product_1_12.jpg', 1),
(43, 65, 'avatar1.png', 1),
(44, 59, 'product_1_2.jpg', 0),
(46, 59, 'product_1_12.jpg', 0),
(47, 59, 'product_1_3.jpg', 0),
(51, 59, 'product_1_3.jpg', 0),
(52, 59, 'product_1_2.jpg', 0),
(53, 59, 'product_details_1_1.jpg', 0),
(55, 64, 'product_1_3.jpg', 0),
(56, 64, 'product_1_2.jpg', 0),
(57, 64, 'product_details_1_1.jpg', 0),
(58, 66, 'photo-1601004890684-d8cbf643f5f2.avif', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variant`
--

CREATE TABLE `product_variant` (
  `id_product_variant` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_origin` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `price_product_variant` int(8) NOT NULL,
  `quanlity_inventory` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variant`
--

INSERT INTO `product_variant` (`id_product_variant`, `id_product`, `id_origin`, `id_type`, `price_product_variant`, `quanlity_inventory`) VALUES
(11, 59, 1, 1, 46, 343),
(12, 59, 2, 1, 55, 229),
(13, 61, 4, 1, 25, 153),
(14, 61, 2, 1, 33, 25),
(15, 60, 1, 1, 15, 0),
(18, 60, 1, 2, 12, 154),
(20, 60, 2, 1, 18, 90),
(22, 64, 1, 2, 12, 0),
(23, 63, 2, 2, 34, 90),
(24, 60, 4, 2, 10000, 222),
(25, 60, 4, 2, 144, 3636),
(26, 60, 3, 1, 252, 55);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_category`
--

CREATE TABLE `sub_category` (
  `id_sub_category` int(11) NOT NULL,
  `name_sub_category` varchar(50) NOT NULL,
  `parent_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_category`
--

INSERT INTO `sub_category` (`id_sub_category`, `name_sub_category`, `parent_category_id`) VALUES
(24, 'Tomato', 12),
(25, 'Apple', 11),
(26, 'Grapes', 11),
(27, 'Orange', 11),
(28, 'Carrot', 12),
(29, 'Pumpkin', 12),
(30, 'Sweet Potato', 12),
(31, 'Cucumber', 12),
(32, 'Chicken', 13),
(33, 'Beef', 13),
(34, 'Fish', 13),
(35, 'Seafood', 13),
(36, 'Watermelon', 11),
(37, 'Cauliflower', 12),
(39, 'Strawberry', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transport`
--

CREATE TABLE `transport` (
  `name_transport` varchar(50) NOT NULL,
  `fee` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `transport`
--

INSERT INTO `transport` (`name_transport`, `fee`) VALUES
('Express Delivery', 20),
('Standard Shipping ', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trending_product`
--

CREATE TABLE `trending_product` (
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trending_product`
--

INSERT INTO `trending_product` (`product_id`) VALUES
(61),
(62),
(64);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `value_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id_type`, `value_type`) VALUES
(1, '1kg'),
(2, '1 unit');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL DEFAULT 'avatar1.png',
  `address` varchar(200) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `full_name`, `email`, `image`, `address`, `telephone`, `role`) VALUES
('adda', '@longdz2004', '', 'longprovip2508@gmail.com', 'product_details_1_1.jpg', '', '', 0),
('admin', '@long222', 'Vũ Linh Hoàng Long', 'longprovip2508@gmail.com', 'Hinh-nen-We-Bare-Bear-22.jpg', 'Xã An Lâm, Huyện Nam Sách, Tỉnh Hải Dương', '0344847295', 1),
('admin11', '@long222', '', 'longprovip2508@gmail.com', 'avatar1.png', '', '', 0),
('test111', '@longdz2004', '', 'longprovip2508@gmail.com', 'avatar1.png', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wish_list`
--

CREATE TABLE `wish_list` (
  `id_wish_lish` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `wish_list`
--

INSERT INTO `wish_list` (`id_wish_lish`, `username`, `product_id`, `date_added`) VALUES
(54, '', 59, '2023-12-01 12:55:38'),
(55, '', 61, '2023-12-01 12:55:49'),
(60, '', 59, '2023-12-02 01:50:36'),
(61, '', 61, '2023-12-02 16:18:08'),
(62, 'admin11', 59, '2023-12-05 02:08:24'),
(65, 'admin', 60, '2023-12-09 08:12:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Chỉ mục cho bảng `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`id_origin`);

--
-- Chỉ mục cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`name_payment`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id_image`);

--
-- Chỉ mục cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`id_product_variant`);

--
-- Chỉ mục cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id_sub_category`);

--
-- Chỉ mục cho bảng `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`name_transport`);

--
-- Chỉ mục cho bảng `trending_product`
--
ALTER TABLE `trending_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id_wish_lish`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `origin`
--
ALTER TABLE `origin`
  MODIFY `id_origin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `id_product_variant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id_sub_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id_wish_lish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
