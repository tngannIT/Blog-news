-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2024 at 04:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_tintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `meta_keyword`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Văn hóa', 'van-hoa', '[{\"value\":\"Culture\"},{\"value\":\"Văn hóa bản sắc dân tộc\"}]', 'Văn hóa Việt Nam', 'Văn hóa là', '2024-07-21 20:44:35', '2024-07-21 20:44:35'),
(2, 'Thể thao', 'the-thao', '[{\"value\":\"Sports\"}]', 'Thể thao 24/7', 'thể thaooooooo', '2024-07-21 20:45:01', '2024-07-21 20:45:01'),
(3, 'Xã hội', 'xa-hoi', '[{\"value\":\"Xã hội\"}]', 'Xã hội Việt Nam', 'Xã hộiiiii', '2024-07-31 02:03:05', '2024-07-31 02:03:05'),
(4, 'Chính trị', 'chinh-tri', '[{\"value\":\"Chính trị\"}]', 'Chính trị Việt Nam và thế giới', 'hahhahha', '2024-07-31 02:03:50', '2024-07-31 02:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `category_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 4, NULL, NULL),
(1, 5, NULL, NULL),
(1, 6, NULL, NULL),
(4, 7, NULL, NULL),
(2, 9, NULL, NULL),
(4, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_10_162728_create_categories_table', 1),
(6, '2024_07_17_162733_create_posts_table', 1),
(7, '2024_07_20_145339_create_category_post_table', 1),
(8, '2024_07_28_153141_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(1, 'App\\Models\\User', 32);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nganbtpd07553@fpt.edu.vn', '$2y$10$acZRT81iRJ4nn712tdvJAeKE6ek9RqYblmGyuxa7k6pIc0SeLB8Wa', '2024-08-03 08:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'view post', 'web', '2024-07-28 08:53:53', '2024-07-28 08:53:53'),
(3, 'create post', 'web', '2024-07-28 08:57:55', '2024-07-28 08:57:55'),
(5, 'delete post', 'web', '2024-07-28 10:20:28', '2024-07-28 10:20:28'),
(6, 'edit post', 'web', '2024-07-28 10:21:51', '2024-07-28 10:21:51'),
(7, 'view category', 'web', '2024-08-01 08:58:38', '2024-08-01 08:58:38'),
(8, 'create category', 'web', '2024-08-01 08:58:38', '2024-08-01 08:58:38'),
(9, 'delete category', 'web', '2024-08-01 08:58:38', '2024-08-01 08:58:38'),
(10, 'edit category', 'web', '2024-08-01 08:58:38', '2024-08-01 08:58:38'),
(16, 'view user', 'web', '2024-08-01 09:41:54', '2024-08-01 09:41:54'),
(17, 'create user', 'web', '2024-08-01 09:41:54', '2024-08-01 09:41:54'),
(18, 'delete user', 'web', '2024-08-01 09:41:54', '2024-08-01 09:41:54'),
(19, 'edit user', 'web', '2024-08-01 09:41:54', '2024-08-01 09:41:54'),
(20, 'view role', 'web', '2024-08-01 09:45:49', '2024-08-01 09:45:49'),
(21, 'create role', 'web', '2024-08-01 09:45:49', '2024-08-01 09:45:49'),
(22, 'delete role', 'web', '2024-08-01 09:45:49', '2024-08-01 09:45:49'),
(23, 'edit role', 'web', '2024-08-01 09:45:49', '2024-08-01 09:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `short_content` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `rank` int NOT NULL DEFAULT '1',
  `view` int DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `content`, `short_content`, `thumbnail`, `status`, `rank`, `view`, `meta_keyword`, `meta_title`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Cuộc sống thường nhật', 'cuoc-song-thuong-nhat', '<p>Cuộc sốngggg</p>', 'Cuộc sống của gia đình tôi', '/userfiles/image/category/menauan.jpg', 'refuse', 1, 100, '[{\"value\":\"Life\"}]', 'Cuộc sống', 'dddd', 1, '2024-07-21 20:51:05', '2024-08-03 00:27:18'),
(2, 'Biển', 'bien', '<p><b>Biển</b>&nbsp;n&oacute;i chung l&agrave; một v&ugrave;ng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/N%C6%B0%E1%BB%9Bc_m%E1%BA%B7n\" title=\"Nước mặn\">nước mặn</a>&nbsp;rộng lớn nối liền với c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BA%A1i_d%C6%B0%C6%A1ng\" title=\"Đại dương\">đại dương</a>, hoặc l&agrave; c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%E1%BB%93\" title=\"Hồ\">hồ</a>&nbsp;lớn chứa nước mặn m&agrave; kh&ocirc;ng c&oacute; đường th&ocirc;ng ra đại dương một c&aacute;ch tự nhi&ecirc;n như&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Bi%E1%BB%83n_Caspi\" title=\"Biển Caspi\">biển Caspi</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Bi%E1%BB%83n_Ch%E1%BA%BFt\" title=\"Biển Chết\">biển Chết</a>. Thuật ngữ n&agrave;y đ&ocirc;i khi cũng được sử dụng với một số hồ nước ngọt kh&eacute;p k&iacute;n hoặc c&oacute; đường th&ocirc;ng tự nhi&ecirc;n ra biển cả như&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Bi%E1%BB%83n_h%E1%BB%93_Galilee\" title=\"Biển hồ Galilee\">biển Galilee</a>&nbsp;ở&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Israel\" title=\"Israel\">Israel</a>&nbsp;l&agrave; một hồ nước ngọt nhỏ kh&ocirc;ng c&oacute; đường th&ocirc;ng tự nhi&ecirc;n ra đại dương hay&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%E1%BB%93_Tonl%C3%A9_Sap\" title=\"Hồ Tonlé Sap\">Biển Hồ</a>&nbsp;ở&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Campuchia\" title=\"Campuchia\">Campuchia</a>. Thuật ngữ n&agrave;y được sử dụng trong đời sống th&ocirc;ng thường như một từ đồng nghĩa với đại dương, như trong c&aacute;c c&acirc;u&nbsp;<i>biển nhiệt đới</i>&nbsp;hay&nbsp;<i>đi ra bờ biển</i>, hoặc cụm từ&nbsp;<i><a href=\"https://vi.wikipedia.org/wiki/N%C6%B0%E1%BB%9Bc_bi%E1%BB%83n\" title=\"Nước biển\">nước biển</a></i>&nbsp;l&agrave; chỉ một c&aacute;ch r&otilde; n&eacute;t tới c&aacute;c v&ugrave;ng nước của đại dương n&oacute;i chung.</p>\r\n\r\n<p>C&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ion\" title=\"Ion\">ion</a>&nbsp;phong ph&uacute; nhất trong nước biển l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Clo\" title=\"Clo\">clo</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Natri\" title=\"Natri\">natri</a>. Nước biển c&ograve;n c&oacute;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Magi%C3%AA\" title=\"Magiê\">magi&ecirc;</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Sulfat\" title=\"Sulfat\">sulfat</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Calci\" title=\"Calci\">calci</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Kali\" title=\"Kali\">kali</a>, v&agrave; nhiều th&agrave;nh phần kh&aacute;c, một số c&oacute; h&agrave;m lượng rất nhỏ. Độ mặn của nước biển thay đổi rất lớn. Biển c&oacute; độ mặn thấp ở những lớp nước gần bề mặt v&agrave; c&aacute;c cửa s&ocirc;ng lớn, v&agrave; cao hơn theo chiều s&acirc;u của đại dương, tuy nhi&ecirc;n, tỷ lệ tương đối của c&aacute;c muối h&ograve;a tan thay đổi nhỏ tr&ecirc;n khắp c&aacute;c đại dương.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Carbon_dioxide\" title=\"Carbon dioxide\">Carbon dioxide</a>&nbsp;từ kh&ocirc;ng kh&iacute; hiện đang được hấp thụ bởi biển với số lượng tăng dần, l&agrave;m giảm độ pH nước biển trong một qu&aacute; tr&igrave;nh được gọi l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ax%C3%ADt_h%C3%B3a_%C4%91%E1%BA%A1i_d%C6%B0%C6%A1ng\" title=\"Axít hóa đại dương\">ax&iacute;t h&oacute;a đại dương</a>, qu&aacute; tr&igrave;nh n&agrave;y c&oacute; khả năng g&acirc;y thiệt hại cho c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%E1%BB%87_sinh_th%C3%A1i_bi%E1%BB%83n\" title=\"Hệ sinh thái biển\">hệ sinh th&aacute;i biển</a>&nbsp;trong tương lai&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Steve_Jobs\" title=\"Steve Jobs\">gần</a>.</p>\r\n\r\n<p><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Sea-chile.jpg/300px-Sea-chile.jpg\" /></p>\r\n\r\n<p><a href=\"https://vi.wikipedia.org/wiki/Gi%C3%B3\" title=\"Gió\">Gi&oacute;</a>&nbsp;thổi tr&ecirc;n bề mặt biển tạo ra&nbsp;<a href=\"https://vi.wikipedia.org/wiki/S%C3%B3ng_bi%E1%BB%83n\" title=\"Sóng biển\">s&oacute;ng</a>, m&agrave; ch&uacute;ng sẽ vỡ khi chạm đến đới nước n&ocirc;ng. Gi&oacute; cũng tạo ra c&aacute;c d&ograve;ng chảy mặt do&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ma_s%C3%A1t\" title=\"Ma sát\">ma s&aacute;t</a>, vận tốc vận chuyển chậm nhưng đi khắp c&aacute;c đại dương. Hướng d&ograve;ng chảy được điều chỉnh bởi c&aacute;c yếu tố bao gồm cả c&aacute;c h&igrave;nh dạng của c&aacute;c ch&acirc;u lục v&agrave; sự quay của Tr&aacute;i Đất (c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/L%E1%BB%B1c_Coriolis\" title=\"Lực Coriolis\">lực Coriolis</a>) d&ograve;ng biển s&acirc;u, được gọi l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/w/index.php?title=D%C3%B2ng_mu%E1%BB%91i_nhi%E1%BB%87t&amp;action=edit&amp;redlink=1\" title=\"Dòng muối nhiệt (trang không tồn tại)\">d&ograve;ng muối nhiệt</a>, mang nước lạnh từ gần c&aacute;c cực đến tất cả c&aacute;c đại dương.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Th%E1%BB%A7y_tri%E1%BB%81u\" title=\"Thủy triều\">Thủy triều</a>&nbsp;thường d&acirc;ng l&ecirc;n v&agrave; hạ xuống 2 lần mỗi ng&agrave;y, được g&acirc;y ra bởi sự quay của Tr&aacute;i Đất v&agrave; c&aacute;c t&aacute;c động&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%8Dng_l%E1%BB%B1c\" title=\"Trọng lực\">trọng lực</a>&nbsp;của&nbsp;<a href=\"https://vi.wikipedia.org/wiki/M%E1%BA%B7t_Tr%C4%83ng\" title=\"Mặt Trăng\">Mặt Trăng</a>&nbsp;quay xung quanh, v&agrave; ở mức ảnh hưởng &iacute;t hơn từ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/M%E1%BA%B7t_Tr%E1%BB%9Di\" title=\"Mặt Trời\">Mặt Trời</a>. Thủy triều c&oacute; thể c&oacute; độ cao lớn ở c&aacute;c vịnh hoặc c&aacute;c cửa s&ocirc;ng.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/S%C3%B3ng_th%E1%BA%A7n\" title=\"Sóng thần\">S&oacute;ng thần</a>&nbsp;c&oacute; thể được g&acirc;y ra bởi c&aacute;c trận&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_%C4%91%E1%BA%A5t\" title=\"Động đất\">động đất</a>&nbsp;dưới biển ph&aacute;t sinh&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Stephen_Hawking\" title=\"Stephen Hawking\">từ</a>&nbsp;sự chuyển động của c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ki%E1%BA%BFn_t%E1%BA%A1o_m%E1%BA%A3ng\" title=\"Kiến tạo mảng\">mảng kiến ​​tạo</a>&nbsp;chuyển động, c&aacute;c vụ phun tr&agrave;o&nbsp;<a href=\"https://vi.wikipedia.org/wiki/N%C3%BAi_l%E1%BB%ADa\" title=\"Núi lửa\">n&uacute;i lửa</a>, lở đất lớn, hoặc t&aacute;c động lớn do&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Thi%C3%AAn_th%E1%BA%A1ch\" title=\"Thiên thạch\">thi&ecirc;n thạch</a>.</p>\r\n\r\n<p>Biển c&oacute; đa dạng về sự sống bao gồm&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Virus\" title=\"Virus\">virus</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Vi_khu%E1%BA%A9n\" title=\"Vi khuẩn\">vi khuẩn</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_v%E1%BA%ADt_nguy%C3%AAn_sinh\" title=\"Động vật nguyên sinh\">động vật nguy&ecirc;n sinh</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/T%E1%BA%A3o\" title=\"Tảo\">tảo</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Th%E1%BB%B1c_v%E1%BA%ADt\" title=\"Thực vật\">thực vật</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/N%E1%BA%A5m\" title=\"Nấm\">nấm</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_v%E1%BA%ADt\" title=\"Động vật\">động vật</a>&nbsp;sống ở biển, trong đ&oacute; cung cấp một loạt c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Sinh_c%E1%BA%A3nh\" title=\"Sinh cảnh\">sinh cảnh</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/H%E1%BB%87_sinh_th%C3%A1i\" title=\"Hệ sinh thái\">hệ sinh th&aacute;i</a>&nbsp;biển thay đổi từ bề mặt nước biển ngập nắng đến c&aacute;c độ s&acirc;u rất lớn với &aacute;p lực lớn của đ&aacute;y biển s&acirc;u tối v&agrave; lạnh. Biển cũng thay đổi theo vĩ độ từ v&ugrave;ng nước lạnh b&ecirc;n dưới lớp băng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/B%E1%BA%AFc_c%E1%BB%B1c\" title=\"Bắc cực\">Bắc cực</a>&nbsp;đến đa dạng đầy m&agrave;u sắc của c&aacute;c&nbsp;<a href=\"https://vi.wikipedia.org/wiki/R%E1%BA%A1n_san_h%C3%B4\" title=\"Rạn san hô\">rạn san h&ocirc;</a>&nbsp;ở v&ugrave;ng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nhi%E1%BB%87t_%C4%91%E1%BB%9Bi\" title=\"Nhiệt đới\">nhiệt đới</a>. Nhiều nh&oacute;m lớn c&aacute;c sinh vật đ&atilde; tiến h&oacute;a từ biển v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ngu%E1%BB%93n_g%E1%BB%91c_s%E1%BB%B1_s%E1%BB%91ng\" title=\"Nguồn gốc sự sống\">nguồn gốc sự sống</a>&nbsp;c&oacute; thể đ&atilde; bắt đầu từ đ&oacute;.</p>\r\n\r\n<p>Biển cung cấp cho con người những&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Th%E1%BB%B1c_ph%E1%BA%A9m\" title=\"Thực phẩm\">thực phẩm</a>&nbsp;đ&aacute;ng kể, chủ yếu l&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/C%C3%A1\" title=\"Cá\">c&aacute;</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_v%E1%BA%ADt_gi%C3%A1p_x%C3%A1c\" title=\"Động vật giáp xác\">động vật gi&aacute;p x&aacute;c</a>,&nbsp;<a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_v%E1%BA%ADt_c%C3%B3_v%C3%BA\" title=\"Động vật có vú\">động vật c&oacute; v&uacute;</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Rong_bi%E1%BB%83n\" title=\"Rong biển\">rong biển</a>&nbsp;th&ocirc;ng qua đ&aacute;nh bắt trong tự nhi&ecirc;n hoặc&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nu%C3%B4i_tr%E1%BB%93ng_th%E1%BB%A7y_s%E1%BA%A3n\" title=\"Nuôi trồng thủy sản\">nu&ocirc;i</a>&nbsp;nh&acirc;n tạo. Việc khai th&aacute;c qu&aacute; mức c&aacute;c nguồn t&agrave;i nguy&ecirc;n thực phẩm n&agrave;y đ&atilde; trở th&agrave;nh một vấn đề lớn.</p>', 'Biển nói chung là một vùng nước mặn rộng lớn nối liền với các đại dương, hoặc là các hồ lớn chứa nước mặn mà không có đường thông ra đại dương một cách tự', '/userfiles/image/category/bien.jpg', 'public', 1, 200, '[{\"value\":\"Sea\"},{\"value\":\"Biển\"},{\"value\":\"Nước\"}]', 'Biển và chúng ta', 'Biển', 1, '2024-07-25 02:01:24', '2024-08-03 00:01:08'),
(4, 'Ngoại trưởng Israel vận động NATO khai trừ Thổ Nhĩ Kỳ', 'ngoai-truong-israel-van-dong-nato-khai-tru-tho-nhi-ky', '<p>Ngoại trưởng Israel chỉ tr&iacute;ch ph&aacute;t ng&ocirc;n của Tổng thống Erdogan, k&ecirc;u gọi mọi th&agrave;nh vi&ecirc;n NATO l&ecirc;n &aacute;n v&agrave; khai trừ Thổ Nhĩ Kỳ.</p>\r\n\r\n<article>\r\n<p>&quot;Sau khi Tổng thống Thổ Nhĩ Kỳ đưa ra những lời đe dọa x&acirc;m lược Israel c&ugrave;ng những luận điệu nguy hiểm kh&aacute;c, Ngoại trưởng Israel Katz chỉ đạo c&aacute;n bộ ngoại giao khẩn trương tiếp x&uacute;c với mọi th&agrave;nh vi&ecirc;n NATO, k&ecirc;u gọi l&ecirc;n &aacute;n Thổ Nhĩ Kỳ v&agrave; y&ecirc;u cầu khai trừ nước n&agrave;y khỏi li&ecirc;n minh khu vực&quot;, Bộ Ngoại giao Israel ng&agrave;y 29/7 th&ocirc;ng b&aacute;o.</p>\r\n\r\n<p>Ngoại trưởng Katz cũng cho rằng Thổ Nhĩ Kỳ đ&atilde; &quot;bước v&agrave;o trục ma quỷ của Iran&quot;, c&aacute;ch gọi của Tel Aviv về li&ecirc;n minh chống Israel do Tehran dẫn đầu, gồm c&aacute;c lực lượng Hezbollah ở Lebanon, Hamas ở Dải Gaza v&agrave; Houthi ở Yemen.</p>\r\n\r\n<p>Thổ Nhĩ Kỳ gia nhập NATO năm 1952, gi&uacute;p li&ecirc;n minh kiểm so&aacute;t vị tr&iacute; chiến lược tại điểm giao giữa ch&acirc;u &Acirc;u v&agrave; ch&acirc;u &Aacute;, nối giữa Biển Đen với Trung Đ&ocirc;ng. Đ&acirc;y l&agrave; nơi Mỹ đặt một căn cứ kh&ocirc;ng qu&acirc;n lớn v&agrave; cất giữ vũ kh&iacute; hạt nh&acirc;n. Nước n&agrave;y cũng giữ vai tr&ograve; quan trọng ở chiến sự Ukraine, khi vừa duy tr&igrave; quan hệ ổn định với Nga vừa viện trợ vũ kh&iacute; cho Ukraine v&agrave; l&agrave; trung gian đ&agrave;m ph&aacute;n giữa hai ph&iacute;a.</p>\r\n\r\n<p>Một ng&agrave;y trước, Tổng thống Thổ Nhĩ Kỳ Recep Tayyip Erdogan g&acirc;y bất ngờ khi b&igrave;nh luận về khả năng &quot;tiến v&agrave;o&quot; Israel tương tự c&aacute;ch can thiệp v&agrave;o nội chiến Libya v&agrave; tranh chấp l&atilde;nh thổ Armenia - Azerbaijan ở v&ugrave;ng Nagorno - Karabakh.</p>\r\n\r\n<p>&Ocirc;ng nhấn mạnh Thổ Nhĩ Kỳ &quot;buộc phải mạnh mẽ&quot; để cứu nh&acirc;n d&acirc;n Palestine, đồng thời cảnh b&aacute;o &quot;kh&ocirc;ng điều g&igrave; l&agrave; kh&ocirc;ng thể&quot;.</p>\r\n\r\n<figure data-size=\"true\" itemprop=\"associatedMedia image\" itemscope=\"\" itemtype=\"http://schema.org/ImageObject\">\r\n<p>&nbsp;</p>\r\n<img alt=\"Tổng thống Thổ Nhĩ Kỳ ngày 27/7 phát biểu tại Rize. Ảnh: AFP\" data-adbro-processed=\"true\" data-ll-status=\"loaded\" data-src=\"https://i1-vnexpress.vnecdn.net/2024/07/30/To-ng-tho-ng-Tho-Nhi-Ky-1674-1722304322.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ZMYyggVjCFbhhaN5IOJf3A\" intrinsicsize=\"680x0\" itemprop=\"contentUrl\" loading=\"lazy\" src=\"https://i1-vnexpress.vnecdn.net/2024/07/30/To-ng-tho-ng-Tho-Nhi-Ky-1674-1722304322.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=ZMYyggVjCFbhhaN5IOJf3A\" />\r\n<p><iframe allow=\"attribution-reporting\" aria-label=\"Advertisement\" data-google-container-id=\"4\" data-load-complete=\"true\" frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Thegioi/Thegioi.detail_0\" marginheight=\"0\" marginwidth=\"0\" name=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Thegioi/Thegioi.detail_0\" scrolling=\"no\" tabindex=\"0\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<figcaption itemprop=\"description\">\r\n<p>Tổng thống Thổ Nhĩ Kỳ ng&agrave;y 27/7 ph&aacute;t biểu tại Rize. Ảnh:&nbsp;<em>AFP</em></p>\r\n</figcaption>\r\n</figure>\r\n\r\n<p>D&ugrave; Tổng thống Erdogan kh&ocirc;ng n&oacute;i cụ thể h&agrave;nh động dự t&iacute;nh với Israel, hai v&iacute; dụ m&agrave; &ocirc;ng đưa ra trong ph&aacute;t biểu tại sự kiện của đảng cầm quyền đều l&agrave; can thiệp qu&acirc;n sự.</p>\r\n\r\n<p>Thổ Nhĩ Kỳ năm 2020 đưa qu&acirc;n đến Libya hỗ trợ Ch&iacute;nh phủ Đo&agrave;n kết D&acirc;n tộc (GNU) được Li&ecirc;n Hợp Quốc c&ocirc;ng nhận v&agrave; Thủ tướng Abdulhamid al-Dbeibah. Viện trợ qu&acirc;n sự từ Thổ Nhĩ Kỳ, đặc biệt l&agrave; c&ocirc;ng nghệ m&aacute;y bay kh&ocirc;ng người l&aacute;i (UAV) v&agrave; huấn luyện, g&oacute;p phần lớn gi&uacute;p Azerbaijan thu hồi v&ugrave;ng Nagorno - Karabakh v&agrave;o năm ngo&aacute;i sau c&aacute;c cuộc đụng độ với lực lượng ly khai được Armenia hậu thuẫn.</p>\r\n\r\n<p>Truyền th&ocirc;ng Israel ng&agrave;y 28/7 c&aacute;o buộc &ocirc;ng Erdogan đe dọa &quot;x&acirc;m lược&quot; nước n&agrave;y. Ngoại trưởng Katz ng&agrave;y 29/7 đăng b&agrave;i tr&ecirc;n mạng x&atilde; hội chỉ tr&iacute;ch Tổng thống Thổ Nhĩ Kỳ &quot;đe dọa tấn c&ocirc;ng Israel&quot; v&agrave; &aacute;m chỉ &ocirc;ng c&oacute; thể chịu chung số phận với cố l&atilde;nh đạo Iraq Saddam Hussein.</p>\r\n</article>', 'Ngoại trưởng Israel chỉ trích phát ngôn của Tổng thống Erdogan, kêu gọi mọi thành viên NATO lên án và khai trừ Thổ Nhĩ Kỳ.', '/userfiles/image/category/ngoaitruong.jpg', 'public', 1, 125, '[{\"value\":\"demo\"}]', 'Chính trị', 'ffff', 1, '2024-07-29 19:54:34', '2024-08-03 00:08:25'),
(5, 'Nhân dân tệ được dùng nhiều thứ hai trong giao dịch tài chính toàn cầu', 'nhan-dan-te-duoc-dung-nhieu-thu-hai-trong-giao-dich-tai-chinh-toan-cau', '<p>Số liệu mới nhất cho thấy nh&acirc;n d&acirc;n tệ đ&atilde; vượt euro để th&agrave;nh tiền tệ được sử dụng nhiều thứ hai trong lĩnh vực t&agrave;i ch&iacute;nh to&agrave;n cầu.</p>\r\n\r\n<article>\r\n<p>Theo Hiệp hội Viễn th&ocirc;ng T&agrave;i ch&iacute;nh li&ecirc;n ng&acirc;n h&agrave;ng to&agrave;n cầu (SWIFT), thị phần của nh&acirc;n d&acirc;n tệ trong th&aacute;ng 6 l&agrave; 5,99%, tăng so với 5,08% hồi th&aacute;ng 5. Thị phần của euro l&agrave; 5,92%.</p>\r\n\r\n<p>Đ&acirc;y kh&ocirc;ng phải lần đầu ti&ecirc;n nh&acirc;n d&acirc;n tệ vượt l&ecirc;n tr&ecirc;n euro về giao dịch t&agrave;i ch&iacute;nh. Số liệu của SWIFT cho thấy lần gần nhất việc n&agrave;y diễn ra l&agrave; th&aacute;ng 11/2023. Giữ thị phần lớn nhất trong lĩnh vực n&agrave;y vẫn l&agrave; USD, với hơn 80%.</p>\r\n\r\n<figure data-size=\"true\" itemprop=\"associatedMedia image\" itemscope=\"\" itemtype=\"http://schema.org/ImageObject\"><img alt=\"Nhân dân tệ đang ngày càng phổ biến trên toàn cầu. Ảnh: Reuters\" data-adbro-processed=\"true\" data-ll-status=\"loaded\" data-src=\"https://i1-kinhdoanh.vnecdn.net/2024/07/30/yuan-reuters-set-1907-1722342386.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=3zSbi9U2GZ7wlw0L645jgQ\" intrinsicsize=\"680x0\" itemprop=\"contentUrl\" loading=\"lazy\" src=\"https://i1-kinhdoanh.vnecdn.net/2024/07/30/yuan-reuters-set-1907-1722342386.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=3zSbi9U2GZ7wlw0L645jgQ\" />\r\n<p><iframe allow=\"attribution-reporting\" aria-label=\"Advertisement\" data-google-container-id=\"4\" data-load-complete=\"true\" frameborder=\"0\" height=\"1\" id=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Kinhdoanh/Kinhdoanh.quocte.detail_0\" marginheight=\"0\" marginwidth=\"0\" name=\"google_ads_iframe_/27973503/Vnexpress/Desktop/Inimage/Kinhdoanh/Kinhdoanh.quocte.detail_0\" scrolling=\"no\" tabindex=\"0\" title=\"3rd party ad content\" width=\"1\"></iframe></p>\r\n\r\n<figcaption itemprop=\"description\">\r\n<p>Nh&acirc;n d&acirc;n tệ đang ng&agrave;y c&agrave;ng phổ biến tr&ecirc;n to&agrave;n cầu. Ảnh:&nbsp;<em>Reuters</em></p>\r\n</figcaption>\r\n</figure>\r\n\r\n<p>Nếu t&iacute;nh chung thanh to&aacute;n to&agrave;n cầu, nh&acirc;n d&acirc;n tệ hiện l&agrave; đồng tiền được sử dụng nhiều thứ 4. Đ&acirc;y l&agrave; th&aacute;ng thứ 8 li&ecirc;n tiếp nh&acirc;n d&acirc;n tệ giữ vị tr&iacute; n&agrave;y, với thị phần 4,61% trong th&aacute;ng 6. Số liệu n&agrave;y nh&iacute;ch nhẹ so với 4,47% th&aacute;ng 5, nhưng lại gần gấp đ&ocirc;i c&ugrave;ng kỳ năm ngo&aacute;i.</p>\r\n\r\n<p>SWIFT cho biết c&aacute;c đồng tiền được sử dụng nhiều nhất trong thanh to&aacute;n to&agrave;n cầu hiện l&agrave; USD, euro, bảng Anh, nh&acirc;n d&acirc;n tệ v&agrave; yen. Thị phần của USD l&agrave; gần 60%.</p>\r\n\r\n<p>Hơn một thập kỷ qua, Trung Quốc t&iacute;ch cực quốc tế h&oacute;a nh&acirc;n d&acirc;n tệ. Họ nỗ lực x&acirc;y dựng cơ sở hạ tầng t&agrave;i ch&iacute;nh phục vụ cho việc thanh to&aacute;n đồng tiền n&agrave;y xuy&ecirc;n bi&ecirc;n giới. Chẳng hạn, nước n&agrave;y th&agrave;nh lập c&aacute;c ng&acirc;n h&agrave;ng thanh to&aacute;n bằng đồng nh&acirc;n d&acirc;n tệ ở thị trường nước ngo&agrave;i. Họ cũng mở rộng Hệ thống thanh to&aacute;n li&ecirc;n ng&acirc;n h&agrave;ng xuy&ecirc;n bi&ecirc;n giới (CIPS).</p>\r\n\r\n<p>V&agrave;i năm gần đ&acirc;y, c&aacute;c quốc gia như Nga v&agrave; Brazil cũng tăng sử dụng nh&acirc;n d&acirc;n tệ trong bối cảnh thiếu USD. Trung Quốc năm ngo&aacute;i từng k&yacute; thỏa thuận ho&aacute;n đổi tiền tệ với Argentina.</p>\r\n</article>', 'Số liệu mới nhất cho thấy nhân dân tệ đã vượt euro để thành tiền tệ được sử dụng nhiều thứ hai trong lĩnh vực ...Số liệu mới nhất cho thấy nhân dân tệ đã vượt', '/userfiles/image/category/yuan-reuters-set-1722342316-3049-1722342386.jpg', 'public', 1, 60, '[{\"value\":\"money\"},{\"value\":\"Tiền\"},{\"value\":\"Trung Quốc\"}]', 'Nhân dân tệ được dùng nhiều...', 'Nhân dân tệ được dùng nhiều thứ hai trong giao dịch tài chính toàn cầu', 1, '2024-07-29 19:56:23', '2024-08-03 00:08:16'),
(6, 'Vì sao mùa mưa lũ năm nay phức tạp, khó lường?', 'vi-sao-mua-mua-lu-nam-nay-phuc-tap-kho-luong', '<h2>Mưa lũ khốc liệt ngay từ đầu m&ugrave;a</h2>\r\n\r\n<p>Trung t&acirc;m Dự b&aacute;o Kh&iacute; tượng Thủy văn Quốc gia nhận định, th&aacute;ng 8 tiếp tục l&agrave; cao điểm mưa lũ ở miền Bắc. Mức độ c&oacute; thể c&ograve;n nghi&ecirc;m trọng hơn mọi năm do hiện tượng La Nina đang c&oacute; dấu hiệu ng&agrave;y c&agrave;ng r&otilde; n&eacute;t. L&uacute;c n&agrave;y những d&ograve;ng hải lưu từ s&acirc;u dưới v&ugrave;ng biển Đ&ocirc;ng Th&aacute;i B&igrave;nh Dương nổi l&ecirc;n tr&ecirc;n bề mặt, tạo ra một v&ugrave;ng nước m&aacute;t hơn b&igrave;nh thường dọc theo đường x&iacute;ch đạo ph&iacute;a Đ&ocirc;ng đến trung t&acirc;m Th&aacute;i B&igrave;nh Dương. Thực tế theo số liệu từ Cơ quan Kh&iacute; quyển v&agrave; Đại dương Quốc gia Hoa Kỳ, th&aacute;ng 7 năm nay ở trung t&acirc;m Th&aacute;i B&igrave;nh Dương đ&atilde; giảm &iacute;t nhất l&agrave; 0,2 độ C so với trung b&igrave;nh mọi năm.</p>\r\n\r\n<p>C&aacute;c d&ograve;ng nước lạnh hơn n&agrave;y đẩy nước ấm sang bờ T&acirc;y Th&aacute;i B&igrave;nh Dương, gần về khu vực Ch&acirc;u &Aacute; hơn, biểu hiện l&agrave; nhiệt độ nước biển ở đ&acirc;y đ&atilde; cao trung b&igrave;nh, c&oacute; nơi cao hơn 1-2 độ C. Đ&acirc;y ch&iacute;nh l&agrave; những dấu hiệu ban đầu cho thấy El Nino đang dần chuyển sang La Nina, nguy&ecirc;n nh&acirc;n h&igrave;nh th&agrave;nh c&aacute;c trận b&atilde;o v&agrave; mưa lũ dồn dập trong giai đoạn vừa qua.</p>\r\n\r\n<figure type=\"Photo\">\r\n<p><a data-fancybox=\"img-lightbox\" href=\"https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2024/7/31/ngap-ung-o-chuong-my-17223911098691708052403.jpg\" target=\"_blank\" title=\"Mưa lũ lịch sử khiến huyện Chương Mỹ chìm trong nước nhiều ngày.\"><img alt=\"Vì sao mùa mưa lũ năm nay phức tạp, khó lường?- Ảnh 2.\" data-adbro-processed=\"true\" data-author=\"\" data-original=\"https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2024/7/31/ngap-ung-o-chuong-my-17223911098691708052403.jpg\" h=\"562\" height=\"\" id=\"img_104563810371964928\" photoid=\"104563810371964928\" rel=\"lightbox\" src=\"https://suckhoedoisong.qltns.mediacdn.vn/thumb_w/640/324455921873985536/2024/7/31/ngap-ung-o-chuong-my-17223911098691708052403.jpg\" title=\"Vì sao mùa mưa lũ năm nay phức tạp, khó lường?- Ảnh 2.\" type=\"photo\" w=\"1000\" width=\"\" /></a></p>\r\n\r\n<figcaption>\r\n<p data-placeholder=\"Nhập chú thích ảnh\">Mưa lũ lịch sử khiến huyện Chương Mỹ ch&igrave;m trong nước nhiều ng&agrave;y.</p>\r\n</figcaption>\r\n</figure>\r\n\r\n<p>Thực tế ở miền Bắc nước ta, từ đầu m&ugrave;a mưa tổng lượng mưa hầu hết đều cao hơn trung b&igrave;nh mọi năm từ 30-80%. Một số nơi c&ograve;n cao hơn 80-100%. Đặc biệt tại Bắc Quang, H&agrave; Giang v&agrave; Quảng H&agrave;, Quảng Ninh lượng mưa ri&ecirc;ng trong th&aacute;ng 6 đ&atilde; l&ecirc;n tới 1105 &ndash; 1271mm, cao gấp đ&ocirc;i so với c&ugrave;ng kỳ.</p>\r\n\r\n<p>Mưa lớn li&ecirc;n tục g&acirc;y ra h&agrave;ng loạt c&aacute;c vụ sạt lở đất, lũ qu&eacute;t nghi&ecirc;m trọng. Đồng thời lũ cũng xảy ra nhiều hơn. Từ th&aacute;ng 6 đến nay, tr&ecirc;n c&aacute;c s&ocirc;ng khu vực Bắc Bộ đ&atilde; xuất hiện 3 đợt lũ vừa v&agrave; lớn. H&agrave;ng loạt c&aacute;c s&ocirc;ng suối đỉnh lũ đ&atilde; l&ecirc;n b&aacute;o động 2- b&aacute;o động 3 như s&ocirc;ng G&acirc;m, s&ocirc;ng L&ocirc; (tại H&agrave; Giang), s&ocirc;ng Nậm P&agrave;n, s&ocirc;ng M&atilde; (Sơn La), s&ocirc;ng Đ&aacute;y (Phủ L&yacute;), s&ocirc;ng Nậm Mức (Điện Bi&ecirc;n).</p>\r\n\r\n<p>Đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; đợt lũ ngay trong c&aacute;c ng&agrave;y 23-26/7 vừa qua do ảnh hưởng của cơn b&atilde;o số 2, h&agrave;ng loạt c&aacute;c hồ thuỷ điện lớn đ&atilde; xả lũ li&ecirc;n tiếp. Hồ thuỷ điện Ho&agrave; B&igrave;nh đ&atilde; mở 4 cửa xả đ&aacute;y, thuỷ điện Sơn La mở 1 cửa xả đ&aacute;y v&agrave; thuỷ điện Lai Ch&acirc;u mở 5 cửa xả mặt. Theo đ&oacute; lũ ở đồng bằng Bắc Bộ l&ecirc;n cao, mực nước tr&ecirc;n s&ocirc;ng Hồng qua H&agrave; Nội đ&atilde; cao hơn cả đỉnh lũ lớn nhất năm ngo&aacute;i. S&ocirc;ng B&ugrave;i qua Chương Mỹ, H&agrave; Nội đến nay vẫn chưa tho&aacute;t được lũ, ngập lụt tr&ecirc;n diện rộng.</p>\r\n\r\n<p>&Ocirc;ng Nguyễn Văn Hưởng, Trưởng ph&ograve;ng Dự b&aacute;o Thời tiết, Trung t&acirc;m Dự b&aacute;o Kh&iacute; tượng Thủy văn Quốc gia cho biết, sang th&aacute;ng 8 tiếp tục l&agrave; thời kỳ cao điểm m&ugrave;a mưa ở c&aacute;c tỉnh miền Bắc nước ta do ảnh hưởng hiện tượng La Nina. Dự b&aacute;o tổng lượng mưa tr&ecirc;n khu vực Bắc bộ dự b&aacute;o ở mức xấp xỉ trung b&igrave;nh nhiều năm với lượng mưa phổ biến ở khu vực miền n&uacute;i ph&iacute;a Bắc, Đ&ocirc;ng Bắc dao động trong khoảng từ 300-400mm; c&oacute; nơi tr&ecirc;n 500mm. V&ugrave;ng đồng bằng v&agrave; trung du Bắc bộ lượng mưa dao động từ 250-350mm, c&oacute; nơi tr&ecirc;n 400mm. Do c&oacute; khả năng xuất hiện những đợt mưa lớn n&ecirc;n nguy cơ xảy ra ngập &uacute;ng ở v&ugrave;ng trũng thấp v&agrave; lũ qu&eacute;t, sạt lở đất ở v&ugrave;ng n&uacute;i rất nguy hiểm.</p>', 'SKĐS - Mùa mưa lũ năm nay ở miền Bắc đang diễn ra khốc liệt hơn. Ngay trong tháng 7 này, mưa, bão lũ liên tục khiến hàng chục người thiệt mạng. Dự báo tháng 8 tiếp tục là cao điểm mưa lũ ở miền Bắc.', '/userfiles/image/category/mualu.jpg', 'public', 1, 45, '[{\"value\":\"Mưa\"},{\"value\":\"Lũ lụt\"}]', 'Mưa lũ miền trung', 'hhhhh', 27, '2024-07-30 19:55:15', '2024-08-02 23:57:13'),
(7, 'bùi tuyết ngânnn', 'bui-tuyet-ngannn', '<p>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>', 'gggg', '/userfiles/image/category/z5451513113816_3891e5e7b629b342a0ee1e330fcd1cae.jpg', 'refuse', 1, NULL, NULL, NULL, NULL, 30, '2024-08-02 20:35:39', '2024-08-02 23:53:41'),
(9, 'aaaa', 'aaaa', '<p>sssssssssss</p>', 'rrrrr', '/userfiles/image/category/mualu.jpg', 'public', 1, NULL, NULL, NULL, NULL, 1, '2024-08-03 07:51:44', '2024-08-03 20:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-07-28 08:39:44', '2024-08-01 07:50:35'),
(2, 'Ban biên tập', 'web', '2024-07-28 08:46:35', '2024-07-28 08:46:35'),
(3, 'Người xem', 'web', '2024-07-30 08:05:22', '2024-08-01 07:50:23'),
(4, 'Tác giả', 'web', '2024-07-30 08:05:35', '2024-07-30 08:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(2, 2),
(3, 2),
(2, 3),
(7, 3),
(16, 3),
(20, 3),
(2, 4),
(3, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ngan', 'nganbtpd07553@fpt.edu.vn', '$2y$10$o/YWbRKC.l3fVQkGZlpJh.mk0sP5YrzeBk1DsaMJfh.mBI5Y1SO22', '2', '1', NULL, 'YLEaId6puM0y7PHq6llTy3rnzbRe94ubYvuAnZGYTh1ivZF2p3PZFFl0KrdQ', NULL, NULL),
(27, 'Bùi Tuyết Ngân', 'buituyetngan5904@gmail.com', '$2y$10$5.D9fx.LV1BNucGhc..5n.4yksxqxwHZPMnOR0QqplHa14cKTFaLi', '1', '1', NULL, 'sa6HXMduRykGmIP75XRIWWU97JsbTZOBqZqTEHkBDZ6Bv3MGvYBzHbbv7CQw', '2024-07-30 07:25:23', '2024-07-30 07:41:57'),
(28, 'Hoa', 'hoa123@gmail.com', '$2y$10$vqg0gdlbVpShTF7wiRTE9OvkoFm8WFMAmX4mdP0wk/.o19HJ01WMy', '1', '1', NULL, NULL, '2024-07-30 08:06:48', '2024-07-30 08:06:48'),
(29, 'Ly', 'ly123@gmail.com', '$2y$10$ILXSrrKPvjCnNP7e5X/fhedoyIWnpYND5.B6Wecakj29MNFxKxoRa', '1', '1', NULL, NULL, '2024-07-30 08:07:13', '2024-07-30 08:07:13'),
(30, 'Tngan', 'bbt@gmail.com', '$2y$10$PyKB38IMu5uMXhe.nWiWs.jTwr2rqOwNc3.77asLnJF2NZqF62da6', '1', '1', NULL, 'HKlf4BpZkRBolQR5JZQ32EZApVLbMx1nG1k1OyDO6ig74Wza8oZtnzwzscZE', '2024-08-02 20:08:31', '2024-08-02 20:08:31'),
(32, 'Ngânnnnn', 'nganoi@gmail.com', '$2y$10$xi5PRy4YUOqV/Vji72El4.BIE3wyMnKJrHgLFQMLjGtGWNrQtyHii', '1', '1', NULL, NULL, '2024-08-03 09:33:52', '2024-08-03 09:33:52'),
(33, 'Bùi Tuyết Ngân', 'nganoii@gmail.com', '$2y$10$Bg2373sOL4pqcnXX8g65IetT2uMPp2Z4ThNOwR8mUq/N.Vwd2/EZy', '1', '1', NULL, NULL, '2024-08-03 09:46:12', '2024-08-03 09:46:12'),
(34, 'Bùi Tuyết Ngân', 'teonv@fpt.edu.vn22', '$2y$10$EfNaHBO4qcxY9zequlg1RuYt3isaKn4gbiQz9qQol3GpqQxp79xNm', '1', '1', NULL, NULL, '2024-08-03 20:18:36', '2024-08-03 20:18:36'),
(35, 'nguyễn văn a', 'ngan12@gmail.com', '$2y$10$ZHy2Rlh/uWIaN0BmCHIPQ.kyn9sr13Wesa117d0NxWvyaunx9mDde', '1', '1', NULL, NULL, '2024-08-04 20:45:26', '2024-08-04 20:45:26'),
(36, 'Bùi Tuyết Ngân2222', 'teonv@fpt.edu.vn22222', '$2y$10$r0wlkHaK4IFt2uRj.SjPduAgx7XizvGgfirDFBKOD7xEpbEPh6KJK', '1', '1', NULL, NULL, '2024-08-04 20:47:16', '2024-08-04 20:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
