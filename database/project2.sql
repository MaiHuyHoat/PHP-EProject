-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 18, 2022 lúc 04:16 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.29

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
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `user_name`, `password`, `image`, `deleted`) VALUES
(1, 'Minh TUng', 'minhtung', 123456, 'somethingtowrite', 0);

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
  `product_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `product_id`, `fullname`, `email`, `phone_number`, `subject_name`, `note`) VALUES
(1, 2, 105, 'Hallo World', 'chuunbyou@gmail.com', '0988064708', 'Compliments', 'Nice and perfect'),
(2, 2, 105, 'Dark Mind', 'chuunbyou@gmail.com', '0294082402', 'Compliments', 'Absolute');

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
(45, 114, 'https://www.louisboyd.co.uk/media/catalog/product/imp/ort/P8825-13-53-003.jpg'),
(116, 116, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/19472726/2022/8/11/a8a9d3c0-d42c-453c-b93e-4df5ae8bf9051660221895265Shirts1.jpg'),
(117, 116, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/19472726/2022/8/11/8fa14ff5-0f6f-4e18-ad37-e329d324f8831660221895294Shirts3.jpg'),
(118, 116, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/19472726/2022/8/11/9eaee4e7-d697-4fc1-8355-d587117bd7261660221895303Shirts4.jpg'),
(119, 117, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/17764236/2022/4/5/81f7bc27-e825-431a-bfe9-5fc0daafbe9e1649160842642VeroModaWomenBlueSlimFitLowDistressJeans1.jpg'),
(120, 117, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/17764236/2022/4/5/cb416544-ccab-450e-90ff-e51001c602531649160842667VeroModaWomenBlueSlimFitLowDistressJeans2.jpg'),
(121, 117, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/17764236/2022/4/5/a985e17e-a005-4a44-a759-e496e998b69a1649160842616VeroModaWomenBlueSlimFitLowDistressJeans3.jpg'),
(122, 118, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20224850/2022/9/30/61406eac-8b2b-4502-b2a4-c4d1031811751664484556055Cottonshirt1.jpg'),
(123, 118, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20224850/2022/9/30/087d1477-f6e6-4be5-87e8-a5912a49ead41664484556046Cottonshirt2.jpg'),
(124, 118, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20224850/2022/9/30/b80b213d-6602-412e-a5ff-16f394da59011664484556072Cottonshirt4.jpg'),
(125, 119, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/productimage/2021/7/6/fdf282dd-5f9f-47b2-87cf-c9930a110b2b1625577206730-1.jpg'),
(126, 119, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/productimage/2021/7/6/0725f4f0-f595-4728-bdd9-15b395dbf2e21625577206737-2.jpg'),
(127, 119, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/productimage/2021/7/6/90fdc748-404b-427c-b39a-007e7ab252031625577206746-3.jpg'),
(128, 120, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/18458460/2022/5/28/c28d223f-6a82-46be-8922-6a21172bd2841653714541319AfroJackWomenWhiteSneakers1.jpg'),
(129, 120, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/18458460/2022/5/28/9cc3192b-424a-4f2f-9a35-9ff7da21d9191653714541327AfroJackWomenWhiteSneakers2.jpg'),
(130, 120, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/18458460/2022/5/28/e103f004-c4ca-418a-998d-d9a5205c32291653714541274AfroJackWomenWhiteSneakers3.jpg'),
(131, 121, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/16235296/2022/2/1/ae906153-b090-485f-93a2-64271f49d8e81643659112054ElPasoWomenBlackProGuardAnkleCasualBoots1.jpg'),
(132, 121, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/16235296/2022/2/1/f736f0f8-d1b2-4f7c-96a3-6f7ecc4e2f6a1643659112112ElPasoWomenBlackProGuardAnkleCasualBoots2.jpg'),
(133, 121, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/16235296/2022/2/1/b54e20d0-f3c8-4054-803e-f005e78ba6ec1643659112124ElPasoWomenBlackProGuardAnkleCasualBoots3.jpg'),
(134, 122, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20418546/2022/10/15/d50154df-fe88-4c13-a69a-45b75467a3ee1665846518356CasualShoes1.jpg'),
(135, 122, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20418546/2022/10/15/c1898a11-4244-41a8-b885-de5413b86e201665846518335CasualShoes2.jpg'),
(136, 122, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20418546/2022/10/15/642e586a-fac7-4bca-8ccd-50d90fa4acd51665846518375CasualShoes3.jpg'),
(137, 123, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/11264146/2022/2/24/aa9702ac-fd1f-4ea7-88a9-ab3d8e7a92761645698034884-DressBerry-Women-Blue-Washed-Regular-Fit-Denim-Shorts-130164-1.jpg'),
(138, 123, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/11264146/2022/2/24/28f1adeb-c677-4d0a-b6ca-953581cd44711645698034876-DressBerry-Women-Blue-Washed-Regular-Fit-Denim-Shorts-130164-2.jpg'),
(139, 123, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/11264146/2022/2/24/751b6cfe-0060-4262-8e14-c485c0b9fabd1645698034867-DressBerry-Women-Blue-Washed-Regular-Fit-Denim-Shorts-130164-3.jpg'),
(140, 124, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20515052/2022/10/27/d59e8765-c134-4944-a10e-756f23b3c72c1666860015531Twillshorts1.jpg'),
(141, 124, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20515052/2022/10/27/fc330e2d-7f43-4aaa-932f-06b07d3a7f8b1666860015539Twillshorts2.jpg'),
(142, 124, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/20515052/2022/10/27/5af0e1b5-525e-43c4-a836-2d16cbb4cf591666860015522Twillshorts3.jpg'),
(143, 127, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/12384822/2020/9/1/3901ed9b-db0c-4056-817d-a518ac01a0691598947696216KottyWomenBlackWideLegJeans1.jpg'),
(144, 127, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/12384822/2020/9/1/55cb3f3b-0ff2-4703-a289-f9a5a6d6c2991598947696275KottyWomenBlackWideLegJeans2.jpg'),
(145, 127, 'https://assets.myntassets.com/h_720,q_90,w_540/v1/assets/images/12384822/2020/9/1/b511eceb-3655-4139-a9ab-8d35c759c3461598947696374KottyWomenBlackWideLegJeans4.jpg');

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
  `total_money` float NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `note`, `total_money`, `order_date`, `status`) VALUES
(1, 2, 'Minh Tung', 'chuunbyou@gmail.com', '09880647088', 'National Economics University', 'Perfect brothers', 97.89, '2022-11-16 22:09:16', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `size`, `price`, `num`, `total_money`) VALUES
(1, 1, 105, 45, 98, 1, 98);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price_old` float NOT NULL DEFAULT 0,
  `price` float DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `closed` int(11) NOT NULL,
  `bought` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price_old`, `price`, `description`, `closed`, `bought`, `created_at`, `updated_at`, `deleted`) VALUES
(100, 6, 'ARCHIEVE SHIELD SHIRT IN WHITE', 50, 35.33, 'Explore new possibilities this season with the Shield tee from Gant The original classic cotton crew neck. Cut in a regular fit, this short-sleeve tee features our signature shield logo embroidered at the chest.', 55, 5, '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(101, 6, 'ARCHIEVE SHIELD SHIRT IN BLUE', 70, 35.33, 'Explore new possibilities this season with the Shield tee from Gant The original classic cotton crew neck. Cut in a regular fit, this short-sleeve tee features our signature shield logo embroidered at the chest.', 54, 4, '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(102, 6, 'REPLAY T-SHIRT IN WHITE', 60, 49.99, 'Re-inspire your wardrobe this season with a t-shirt from Replay. This short sleeve crew neck t-shirt in White features printed Replay branding. Complete the look by adding zip hoodie from Superdry available from Louis Boyd Menswear', 53, 3, '2022-10-23 13:52:35', '2022-10-23 13:52:35', 0),
(103, 7, 'ORIGINAL PIQUE RUGGER POLO SHIRT IN WHITE', 93, 69.99, 'For impromptu tennis matches, barbecues, casual Fridays, and everything else the versatile pique polo shirt is a staple for a reason (meaning you can justify one in every color). This iconic polo shirt keeps it easy, simple, and utterly classic, with a regular fit, a traditional flatknit collar with a two-button placket, small side slits, and our signature logo embroidery at the chest. Explore the full Gant Collection at Louis Boyd Online.', 52, 2, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(104, 7, 'MOORES CLASSIC POLOSHIRT IN BURGUNDY', 66, 39.99, 'Enhance your look this season with the Moores classic polo shirt from Farah Vintage. This luxury classic cut short sleeve polo in Burgundy with contrasting neckling and hem. Features button fastening and embroidered logo. Pair with jeans from Tommy Jean collection, available from Louis Boyd Menswear.', 51, 1, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(105, 7, 'BLANES SS POLO SHIRT IN ROYAL', 48, 39.99, 'Enhance your look this season with the Blanes classic polo shirt from Farah Vintage. This luxury classic cut short sleeve polo in Blue features button fastening and embroidered logo. Pair with jeans from Tommy Jean collection, available from Louis Boyd Menswear.', 56, 6, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(106, 8, 'PROVOGUE', 33, 29.99, 'Experience great comfort in this pair of formal shoes from the house of Provogue. Featuring a contemporary refined design with exceptional comfort, this pair is perfect to give your quintessential dressing an upgrade.', 57, 7, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(107, 8, 'ARROW', 55, 29.99, 'A pair of Tan Brown solid pointed-toed formal oxford, has lace-up fastening. The color is actually brown, not tan brown which was the only disappointment. The shoes are sleek and quite classy. The back of the foot was biting initially but after walking for some time it was ok.', 58, 8, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(108, 8, 'WHOLECUT OXFORD', 0, 49.99, 'Được thiết kế chỉ từ một mảnh da bò cao cấp nguyên bản, tạo cảm giác liền mạch và hoàn hảo đến từng chi tiết. Đây cũng chính là điểm đặc biệt làm nên điểm nhấn tinh tế rất riêng của mẫu giày này. Cấu tạo của phần đế cao su với những đường may tỉ mỉ và khéo léo, sở hữu các rãnh chống trơn trượt hiệu quả, giúp phái mạnh dễ dàng di chuyển và hoạt động.', 59, 9, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(109, 9, 'SUPERDRY', 40, 32.55, 'Make a splash with Superdry Vintage Broadshort swim shorts. These water repellent swim shorts in Navy feature, an elasticated drawstring waist, two front open pockets, a single rear pocket with hook and loop fastening and a discreet vent to allow water to escape, and a mesh lining. Finished with a Superdry logo print on one leg, and a rubber Superdry logo badge on the rear pocket. Explore the full collection at Louis Boyd Menswear.', 50, 5, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(110, 9, 'CALVIN KLEIN', 60, 32.55, 'Relax in comfort this season with the Monogram Shorts from Calvin Klein. These regular fitting shorts in Black jersey fabric design, front and back pockets and drawstring waistband. Explore the casual Calvin Klein collection a Louis Boyd Menswear.', 53, 7, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(111, 9, 'REMUS UOMO', 70, 59.95, 'Step forth ready to impress in the Emilio Shorts from Italian inspired designer Remus Uomo. Tailored fitting, four pocket design with button slit rear pockets. Complete the look by pairing with a short sleeve slim fitting shirt from Louis Boyd Menswear.', 54, 9, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(112, 10, 'TOMMY JEANS', 100, 80.99, 'Step forth ready to impress in the Emilio Shorts from Italian inspired designer Remus Uomo. Tailored fitting, four pocket design with button slit rear pockets. Complete the look by pairing with a short sleeve slim fitting shirt from Louis Boyd Menswear.', 60, 10, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(113, 10, 'KENROW', 100, 80.99, 'Update your casual jean collection this season with the Diarmid jean from Kenrow. These regular fitting yet stylish jeans feature a stretched design, five pocket design, button fly and belt loops. Perfectly finished with embroidered branding branding, waistband branding as well as coin pocket and waistband embossed branding. Complete the look by complimenting with a casual shirt from Farah Vintage collection available from Louis Boyd Menswear.', 57, 3, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(114, 10, 'MISH MASH', 60, 59.99, 'Update your casual jean collection this season with the 1984 Tapered fitting jean from Mish Mash. These tapered fitting yet stylish jeans feature a stretched design, five pocket design, button fly and belt loops. Perfectly finished with embroidered Mish Mash branding, waistband branding as well as coin pocket and waistband embossed branding. Complete the look by complimenting with a casual shirt from Farah Vintage collection available from Louis Boyd Menswear.', 54, 5, '2022-10-23 14:10:19', '2022-10-23 14:10:19', 0),
(116, 1, 'Women Grey Formal Shirt', 19, 12.7, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 58, 9, '2022-11-07 16:32:03', '2022-11-07 16:32:03', 0),
(117, 5, 'Conal Slim Jeans in Lt Blue\r\n', 50, 27, 'Model KR087Brand Colour L 155 LIGHT BLUE', 56, 10, '2022-11-17 09:41:53', '2022-11-17 09:41:53', 0),
(118, 1, 'Women White Solid Cotton Shirt', 25, 17, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 55, 5, '2022-11-17 09:45:10', '2022-11-17 09:45:10', 0),
(119, 2, 'The Lifestyle Co Women Mauve Polo Collar T-shirt\r\n', 30, 10, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 52, 6, '2022-11-17 09:48:13', '2022-11-17 09:48:13', 0),
(120, 3, 'Women White Sneakers\r\n', 60, 30, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 53, 5, '2022-11-17 09:49:45', '2022-11-17 09:49:45', 0),
(121, 3, 'Women Black Pro Guard Ankle Casual Boots\r\n', 79.99, 29.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges', 60, 6, '2022-11-17 09:50:46', '2022-11-17 09:50:46', 0),
(122, 3, 'Women Pink Textured Slip-On Sneakers', 49.99, 15.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 66, 7, '2022-11-17 09:51:40', '2022-11-17 09:51:40', 0),
(123, 4, 'Women Stunning Blue Washed Fringed Shorts\r\n', 29.99, 10.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 54, 6, '2022-11-17 09:52:34', '2022-11-17 09:52:34', 0),
(124, 4, 'Women Twill Shorts\r\n', 19.99, 10.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 54, 7, '2022-11-17 09:53:23', '2022-11-17 09:53:23', 0),
(127, 5, 'Women Blue Bootcut High-Rise Clean Look Stretchable Jeans\r\n', 75.99, 29.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 51, 10, '2022-11-17 09:53:23', '2022-11-17 09:53:23', 0),
(128, 5, 'Women Black Wide Leg High-Rise Clean Look Jeans\r\n', 40.99, 19.99, '100% Original Products\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', 0, 0, '2022-11-17 11:00:36', '2022-11-17 11:00:36', 0);

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
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `fullname`, `email`, `phone_number`, `address`, `image`, `point`, `created_at`, `updated_at`, `deleted`) VALUES
(2, 'hoatdfk', '1234', 'Mai Huy Hoạt', 'hoatdfk2001@gmail.com', '0354221364', 'Hải Quang Hải Hậu Nam Định', 'https://cdn.jpegmini.com/user/images/slider_puffin_before_mobile.jpg', 0, '2022-11-02 10:30:18', NULL, 0),
(3, 'quynh', '1111', ' phạm thị diễm quỳnh', 'quynh@gmail.com', '293874827894', 'hải hậu nam định', 'https://vtv1.mediacdn.vn/thumb_w/650/2022/8/23/sc5-16612460541811281836809-crop-16612460704451917537811.jpg', 0, '2022-11-02 17:32:09', '2022-11-02 17:32:09', 0);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

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
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

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
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
