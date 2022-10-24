-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 24, 2022 lúc 04:41 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `gender`, `type`) VALUES
(1, 0, 'Shirt'),
(2, 0, 'Polo'),
(3, 0, 'Shoes'),
(4, 0, 'Shorts'),
(5, 0, 'Jeans'),
(6, 1, 'Shirt'),
(7, 1, 'Polo'),
(8, 1, 'Shoes'),
(9, 1, 'Shorts'),
(10, 1, 'Jeans');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `galery`
--

INSERT INTO `galery` (`id`, `product_id`, `thumbnail`) VALUES
(1, 100, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-38-0-001.jpg'),
(2, 100, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-38-0-002.jpg'),
(3, 100, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-38-0-003.jpg'),
(4, 101, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-3-0-001.jpg'),
(5, 101, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-3-0-002.jpg'),
(6, 101, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8801-3-0-004.jpg'),
(7, 102, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P10215-38-0-001.jpg'),
(8, 102, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P10215-38-0-002.jpg'),
(9, 102, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P10215-38-0-003.jpg'),
(10, 103, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8673-38-0-001.jpg'),
(11, 103, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8673-38-0-002.jpg'),
(12, 103, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8673-38-0-003.jpg'),
(13, 104, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9799-5-0-001.jpg'),
(14, 104, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9799-5-0-002.jpg'),
(15, 104, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9799-5-0-003.jpg'),
(16, 105, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P7486-30-0-001.jpg'),
(17, 105, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P7486-30-0-002.jpg'),
(18, 105, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P7486-30-0-003.jpg'),
(19, 106, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD22_Den_1_1200x.jpg'),
(20, 106, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD19_Den_2_1200x.jpg'),
(21, 106, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD19_Den_3_1200x.jpg'),
(22, 107, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD17_Nau_1_1200x.jpg'),
(23, 107, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD17_Nau_2_1200x.jpg'),
(24, 107, 'https://cdn.shopify.com/s/files/1/1404/4249/products/GRD17_Nau_3_1200x.jpg'),
(25, 108, 'https://cdn.shopify.com/s/files/1/1404/4249/products/G0128_Den_1_1200x.jpg'),
(26, 108, 'https://cdn.shopify.com/s/files/1/1404/4249/products/G0128_Den_2_1200x.jpg'),
(27, 108, 'https://cdn.shopify.com/s/files/1/1404/4249/products/G0128_Den_3_1200x.jpg'),
(28, 109, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9311-46-0-006.jpg'),
(29, 109, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9311-46-0-001.jpg'),
(30, 109, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9311-46-0-003.jpg'),
(31, 110, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9201-2-0-001.jpg'),
(32, 110, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9201-2-0-002.jpg'),
(33, 110, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9201-2-0-003.jpg'),
(34, 111, 'https://www.louisboyd.co.uk/media/catalog/product/p/7/p7749-46-0-002.jpg'),
(35, 111, 'https://www.louisboyd.co.uk/media/catalog/product/p/7/p7749-46-0-003.jpg'),
(36, 111, 'https://www.louisboyd.co.uk/media/catalog/product/p/7/p7749-46-0-004.jpg'),
(37, 112, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9165-34-53-001.jpg'),
(38, 112, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9165-34-53-002.jpg'),
(39, 112, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P9165-34-53-003.jpg'),
(40, 113, 'https://www.louisboyd.co.uk/media/catalog/product/2/1/2111251101.jpeg'),
(41, 113, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8831-13-53-002.jpg'),
(42, 113, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8831-13-53-003.jpg'),
(43, 114, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8825-13-53-001.jpg'),
(44, 114, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8825-13-53-002.jpg'),
(45, 114, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8825-13-53-003.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(100, 6, 'ARCHIEVE SHIELD SHIRT IN WHITE', 35.33, 'Explore new possibilities this season with the Shield tee from Gant The original classic cotton crew neck. Cut in a regular fit, this short-sleeve tee features our signature shield logo embroidered at the chest.', '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(101, 6, 'ARCHIEVE SHIELD SHIRT IN BLUE', 35.33, 'Explore new possibilities this season with the Shield tee from Gant The original classic cotton crew neck. Cut in a regular fit, this short-sleeve tee features our signature shield logo embroidered at the chest.', '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(102, 6, 'REPLAY T-SHIRT IN WHITE', 49.99, 'Re-inspire your wardrobe this season with a t-shirt from Replay. This short sleeve crew neck t-shirt in White features printed Replay branding. Complete the look by adding zip hoodie from Superdry available from Louis Boyd Menswear', '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(103, 7, 'ORIGINAL PIQUE RUGGER POLO SHIRT IN WHITE', 69.99, 'For impromptu tennis matches, barbecues, casual Fridays, and everything else the versatile pique polo shirt is a staple for a reason (meaning you can justify one in every color). This iconic polo shirt keeps it easy, simple, and utterly classic, with a regular fit, a traditional flatknit collar with a two-button placket, small side slits, and our signature logo embroidery at the chest. Explore the full Gant Collection at Louis Boyd Online.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(104, 7, 'MOORES CLASSIC POLOSHIRT IN BURGUNDY', 39.99, 'Enhance your look this season with the Moores classic polo shirt from Farah Vintage. This luxury classic cut short sleeve polo in Burgundy with contrasting neckling and hem. Features button fastening and embroidered logo. Pair with jeans from Tommy Jean collection, available from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(105, 7, 'BLANES SS POLO SHIRT IN ROYAL', 39.99, 'Enhance your look this season with the Blanes classic polo shirt from Farah Vintage. This luxury classic cut short sleeve polo in Blue features button fastening and embroidered logo. Pair with jeans from Tommy Jean collection, available from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(106, 8, 'PROVOGUE', 29.99, 'Experience great comfort in this pair of formal shoes from the house of Provogue. Featuring a contemporary refined design with exceptional comfort, this pair is perfect to give your quintessential dressing an upgrade.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(107, 8, 'ARROW', 29.99, 'A pair of Tan Brown solid pointed-toed formal oxford, has lace-up fastening. The color is actually brown, not tan brown which was the only disappointment. The shoes are sleek and quite classy. The back of the foot was biting initially but after walking for some time it was ok.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(108, 8, 'WHOLECUT OXFORD', 49.99, 'Được thiết kế chỉ từ một mảnh da bò cao cấp nguyên bản, tạo cảm giác liền mạch và hoàn hảo đến từng chi tiết. Đây cũng chính là điểm đặc biệt làm nên điểm nhấn tinh tế rất riêng của mẫu giày này. Cấu tạo của phần đế cao su với những đường may tỉ mỉ và khéo léo, sở hữu các rãnh chống trơn trượt hiệu quả, giúp phái mạnh dễ dàng di chuyển và hoạt động.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(109, 9, 'SUPERDRY', 32.55, 'Make a splash with Superdry Vintage Broadshort swim shorts. These water repellent swim shorts in Navy feature, an elasticated drawstring waist, two front open pockets, a single rear pocket with hook and loop fastening and a discreet vent to allow water to escape, and a mesh lining. Finished with a Superdry logo print on one leg, and a rubber Superdry logo badge on the rear pocket. Explore the full collection at Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(110, 9, 'CALVIN KLEIN', 32.55, 'Relax in comfort this season with the Monogram Shorts from Calvin Klein. These regular fitting shorts in Black jersey fabric design, front and back pockets and drawstring waistband. Explore the casual Calvin Klein collection a Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(111, 9, 'REMUS UOMO', 59.95, 'Step forth ready to impress in the Emilio Shorts from Italian inspired designer Remus Uomo. Tailored fitting, four pocket design with button slit rear pockets. Complete the look by pairing with a short sleeve slim fitting shirt from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(112, 10, 'TOMMY JEANS', 80.99, 'Step forth ready to impress in the Emilio Shorts from Italian inspired designer Remus Uomo. Tailored fitting, four pocket design with button slit rear pockets. Complete the look by pairing with a short sleeve slim fitting shirt from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(113, 10, 'KENROW', 80.99, 'Update your casual jean collection this season with the Diarmid jean from Kenrow. These regular fitting yet stylish jeans feature a stretched design, five pocket design, button fly and belt loops. Perfectly finished with embroidered branding branding, waistband branding as well as coin pocket and waistband embossed branding. Complete the look by complimenting with a casual shirt from Farah Vintage collection available from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(114, 10, 'MISH MASH', 59.99, 'Update your casual jean collection this season with the 1984 Tapered fitting jean from Mish Mash. These tapered fitting yet stylish jeans feature a stretched design, five pocket design, button fly and belt loops. Perfectly finished with embroidered Mish Mash branding, waistband branding as well as coin pocket and waistband embossed branding. Complete the look by complimenting with a casual shirt from Farah Vintage collection available from Louis Boyd Menswear.', '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
