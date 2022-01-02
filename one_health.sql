-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2022 at 12:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category_id`, `user_id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Numquam', 6, 4, 'Mollitia laudantium ducimus ut quae laborum id est. Eveniet et ab aut iusto vel deserunt in qui. Eos nesciunt consequatur praesentium odit eum quo libero.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(3, 'Dolorem', 9, 1, 'Voluptas ipsam praesentium eligendi quia quibusdam sequi. Voluptas eveniet delectus quam blanditiis. Non cupiditate cupiditate atque sint iste et reprehenderit. Est vitae odit aut sint quibusdam.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(4, 'Porro', 7, 5, 'Consequatur eligendi sint qui itaque. Illo modi porro blanditiis temporibus. Porro perspiciatis autem aliquid repellendus accusantium fuga eveniet.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(6, 'Eligendi', 5, 5, 'Necessitatibus eos dolores aut. Ipsam libero amet ea dicta quia qui dolore totam. Explicabo dignissimos rerum ex libero. Enim voluptas quas vitae dolorem architecto.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(7, 'Magnam', 6, 3, 'Dolor iusto voluptatem magni ex tempore ullam nobis impedit. Dicta tenetur suscipit deserunt sed. Reiciendis culpa quo et atque quo praesentium.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(8, 'Voluptas', 2, 3, 'Quia nam dolores et odio voluptatem. Libero officiis sequi ab sunt corrupti. Quam qui necessitatibus dolores nihil. Magni autem consequatur aut hic.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(9, 'Est', 2, 6, 'Expedita qui sapiente consectetur qui sed consequatur doloribus. Veritatis aspernatur qui est ea. Magni illo soluta voluptatem. Saepe aut odio accusantium ut.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46'),
(10, 'Nostrum', 2, 9, 'Nostrum nihil ut est ut ea doloremque. Sapiente voluptatem culpa velit ut adipisci sed. Consectetur sunt veniam qui officiis atque est veritatis. Minima mollitia fugit et aut facilis assumenda.', 'blog_5.jpg', '2022-01-02 03:57:46', '2022-01-02 03:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Soluta', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(2, 'Quaerat', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(3, 'Quis', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(4, 'Repellat', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(5, 'Voluptatem', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(6, 'Explicabo', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(7, 'Quo', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(8, 'Porro', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(9, 'Cum', '2022-01-02 03:53:24', '2022-01-02 03:53:24'),
(10, 'Et', '2022-01-02 03:53:24', '2022-01-02 03:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `field_id`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Et', 9, '+1-936-436-9069', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(3, 'Totam', 4, '+1.743.500.2195', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(4, 'Est', 9, '+15402197342', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(5, 'Id', 1, '1-914-539-3853', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(6, 'Quibusdam', 8, '+12122895007', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(8, 'Excepturi', 10, '+1-337-683-9500', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(9, 'Dignissimos', 3, '+1-850-900-5827', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(10, 'Architecto', 1, '1-930-328-5478', 'doctor_3.jpg', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(11, 'Doctor1', 10, '1-256-247-7176', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(12, 'Doctor2', 5, '+14148103857', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(13, 'Doctor3', 10, '+1-559-459-4858', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(14, 'Doctor4', 8, '938.972.6780', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(15, 'Doctor5', 6, '239-768-6063', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(16, 'Doctor6', 5, '801-818-8797', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(17, 'Doctor7', 6, '272.783.6145', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(18, 'Doctor8', 4, '+17815567455', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(19, 'Doctor9', 6, '(680) 737-1625', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(20, 'Doctor10', 2, '770-351-5259', 'doctor_3.jpg', '2021-12-29 21:11:18', '2021-12-29 21:11:18'),
(21, 'Doctor_10', 9, '678.651.4873', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(22, 'Doctor_11', 4, '(424) 990-0444', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(23, 'Doctor_12', 4, '+1.818.913.9747', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(24, 'Doctor_13', 7, '1-774-633-2752', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(25, 'Doctor_14', 7, '478-665-8884', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(26, 'Doctor_15', 6, '+1.820.987.9334', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(27, 'Doctor_16', 3, '(606) 839-7691', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(28, 'Doctor_17', 3, '+1-440-991-6810', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(29, 'Doctor_18', 1, '+1 (505) 873-8155', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(30, 'Doctor_19', 1, '+1-872-752-3200', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(31, 'Doctor_20', 10, '(617) 992-9533', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(32, 'Doctor_21', 6, '+1.309.621.5415', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(33, 'Doctor_22', 9, '(773) 887-5307', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(34, 'Doctor_23', 9, '+1.231.437.8236', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(35, 'Doctor_24', 5, '1-779-298-1960', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(36, 'Doctor_25', 7, '+1-386-649-1127', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(37, 'Doctor_26', 6, '+1 (283) 823-3644', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(38, 'Doctor_27', 3, '+1.606.614.2618', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(39, 'Doctor_28', 3, '+1-510-409-7041', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(40, 'Doctor_29', 2, '+1-830-333-5702', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(41, 'Doctor_30', 1, '+1-678-959-0086', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(42, 'Doctor_31', 6, '423.899.8399', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(43, 'Doctor_32', 7, '1-480-276-2219', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(44, 'Doctor_33', 7, '(575) 740-3551', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(45, 'Doctor_34', 5, '262.287.5524', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(46, 'Doctor_35', 6, '(901) 752-7292', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(47, 'Doctor_36', 1, '+1.860.498.1149', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(48, 'Doctor_37', 1, '+1-332-977-0525', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(49, 'Doctor_38', 3, '(678) 629-4597', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(50, 'Doctor_39', 5, '+1-863-347-3187', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(51, 'Doctor_40', 6, '1-440-290-2930', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(52, 'Doctor_41', 10, '+17756535006', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(53, 'Doctor_42', 5, '469-777-3606', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(54, 'Doctor_43', 4, '1-520-271-8186', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(55, 'Doctor_44', 4, '+12342586047', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(56, 'Doctor_45', 7, '+1-734-994-5488', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(57, 'Doctor_46', 9, '+1.239.532.9928', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(58, 'Doctor_47', 7, '323.309.9473', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(59, 'Doctor_48', 1, '+1-256-838-0638', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(60, 'Doctor_49', 4, '706-870-7302', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(61, 'Doctor_50', 2, '469.774.0490', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(62, 'Doctor_51', 1, '+1 (534) 712-3261', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(63, 'Doctor_52', 6, '+1-270-460-7564', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(64, 'Doctor_53', 7, '+1-954-887-9103', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(65, 'Doctor_54', 9, '(640) 714-5586', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(66, 'Doctor_55', 2, '424-304-5190', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(67, 'Doctor_56', 2, '+1 (989) 582-1090', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(68, 'Doctor_57', 9, '+1 (364) 613-7249', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(69, 'Doctor_58', 10, '+1.719.930.8552', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(70, 'Doctor_59', 2, '279-857-7482', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(71, 'Doctor_60', 6, '731-383-2146', 'doctor_3.jpg', '2021-12-29 21:11:58', '2021-12-29 21:11:58'),
(72, 'Htoo Khant Linn', 4, '123456789', '1640871653.jpg', '2021-12-30 07:10:53', '2021-12-30 07:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Non', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(2, 'In', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(3, 'Illum', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(4, 'Dolor', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(5, 'Tenetur', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(6, 'Voluptas', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(7, 'Cumque', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(8, 'Quo', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(9, 'Sed', '2021-12-20 03:58:09', '2021-12-20 03:58:09'),
(10, 'Eos', '2021-12-20 03:58:09', '2021-12-20 03:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `quantity`, `category_id`, `created_at`, `updated_at`) VALUES
(98, 'Rem', 'Est ab sed numquam et ducimus dolores magnam. Ducimus soluta consequuntur quaerat. Cum voluptatum culpa aliquam est.', 291, 1, '2021-12-21 09:13:10', '2021-12-21 09:13:10'),
(99, 'Vel', 'Velit nostrum nobis illo sunt tempore ut aliquid. Autem consequatur in delectus sapiente molestias repellendus. Error quae facilis totam facere eveniet non consectetur qui. Repellat in fugiat ratione a.', 206, 10, '2021-12-21 09:13:10', '2021-12-21 09:13:10'),
(127, 'In', 'Et cumque asperiores voluptates est veritatis iste aperiam et. Consequuntur unde quisquam dolorem ratione officiis. Distinctio illo impedit et est ea autem. Est omnis deleniti reprehenderit qui voluptas minus velit.', 294, 8, '2021-12-22 01:45:56', '2021-12-22 01:45:56'),
(128, 'Non', 'Provident aspernatur veritatis ipsum odit suscipit velit illo. Quaerat id quia minima dicta suscipit. Modi magnam illum sed dignissimos deleniti aut. Magni doloribus commodi in et. Consectetur eius et aut officia aut omnis praesentium.', 135, 7, '2021-12-22 01:45:56', '2021-12-22 01:45:56'),
(148, 'Sit', 'Doloribus quidem delectus temporibus animi soluta. A sunt exercitationem rerum et nulla amet cupiditate. Voluptas ex sit atque. Quo ad distinctio consectetur et nesciunt.', 215, 8, '2021-12-22 05:46:40', '2021-12-22 05:46:40'),
(149, 'Hello', 'This is Htoo Khant Linn\'s Description.', 181, 3, '2021-12-22 05:46:40', '2021-12-31 21:23:26'),
(150, 'Sit', 'Fugit est vero voluptatem. Quia et ipsam laborum numquam consequatur est molestias neque. Aliquid sunt non consectetur quia aliquid.', 158, 6, '2021-12-22 05:46:40', '2021-12-22 05:46:40'),
(151, 'Et', 'Sunt architecto architecto consectetur. Quia aut occaecati quaerat in ea aut est accusantium.', 182, 5, '2021-12-22 05:46:40', '2021-12-22 05:46:40'),
(152, 'Sapiente', 'Quod enim quaerat labore sit consequatur. Maxime id sit ad cum. Eveniet eius ut accusamus dolores. Fugiat et cum ut est veritatis.', 184, 2, '2021-12-22 05:46:40', '2021-12-22 05:46:40'),
(153, 'Omnis', 'Tempora aliquid et similique ad non quos laudantium et. Ut asperiores et voluptatum suscipit ut quo. Cumque ea dignissimos et facilis.', 118, 8, '2021-12-22 05:46:40', '2021-12-22 05:46:40'),
(167, 'Htoo Khant Linn', 'Rerum quibusdam est nobis tenetur hic. Deleniti fugiat qui alias facilis neque nulla beatae pariatur. Quae quia quo doloribus vel in quidem. Vitae mollitia qui sapiente velit odio reprehenderit.', 900, 5, '2021-12-22 06:43:06', '2021-12-31 21:22:39'),
(168, 'a', 'Quisquam labore aut nisi reiciendis. Laborum corporis rem est excepturi quo dolor. Rerum voluptatem impedit ea doloremque.', 111, 2, '2021-12-22 06:43:06', '2021-12-29 10:00:15'),
(169, 'Quia', 'Et quo sit ratione voluptatem odio id. Voluptas placeat voluptate dicta officiis. Fugiat voluptas sequi doloremque aut vitae alias. Itaque voluptatum earum sint qui.', 264, 5, '2021-12-22 06:43:06', '2021-12-22 06:43:06'),
(170, 'Ad', 'Natus aut et dolore sunt id. Numquam amet rerum quibusdam est aut quidem nam dolores.', 202, 10, '2021-12-22 06:43:06', '2021-12-22 06:43:06'),
(171, 'Incidunt', 'Ex voluptate quam magnam laudantium. Voluptatem nobis voluptatem eveniet voluptatibus error ducimus. Iure error qui aliquid quaerat cum est atque.', 213, 3, '2021-12-22 06:43:06', '2021-12-22 06:43:06'),
(172, 'Ipsa', 'Tenetur quis non maiores voluptas praesentium. Quis iure quia nemo dignissimos quibusdam officiis. Quis ut fuga voluptas quia. Architecto deleniti vero rem ut omnis distinctio at nihil. Hic laudantium accusamus sit aspernatur enim aut.', 265, 9, '2021-12-22 06:43:06', '2021-12-22 06:43:06'),
(180, 'Lorem ispusm', 'Hello, This is description.', 1800, 5, '2021-12-31 21:27:30', '2021-12-31 21:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_12_20_085412_create_addresses_table', 1),
(2, '2021_12_20_085235_create_students_table', 2),
(3, '2021_12_13_073655_create_fields_table', 3),
(4, '2021_12_10_101206_create_doctors_table', 4),
(6, '2014_10_12_100000_create_password_resets_table', 5),
(7, '2019_08_19_000000_create_failed_jobs_table', 5),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(11, '2021_12_18_023215_create_items_table', 5),
(13, '2021_12_20_102052_create_subjects_table', 5),
(14, '2021_12_20_102118_create_student__subjects_table', 5),
(21, '2021_12_14_042705_create_categories_table', 10),
(22, '2014_10_12_000000_create_users_table', 11),
(23, '2021_12_10_095155_create_blogs_table', 12),
(24, '2021_12_19_094210_create_passports_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student__subjects`
--

CREATE TABLE `student__subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aung Aung', 'frederique12@gmail.com', '419-688-6723', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'sT499Gs3TgzlJsuvIr97jmkvMmIvd8XzCsPPOYhXdlCWTuSIZ0UJoYf7jV1U', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(2, 'Ko Ko', 'ustroman@goldner.net', '+1-667-578-5292', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'o3JxZCehDd', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(3, 'Moe Moe', 'carter.wilton@pagac.com', '1-341-364-7001', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'K4npAHfULh', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(4, 'Aye Aye', 'tokeefe@gmail.com', '(564) 491-8431', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', '4uw7Vn5ryd', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(5, 'Aung Ko', 'jwehner@gmail.com', '+16416164409', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', '4hb9iRBCRE', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(6, 'Kyaw Kyaw', 'qroob@effertz.info', '281-529-6647', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'daY9QBfgEq', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(7, 'Bo Bo', 'marquardt.salvatore@stroman.org', '+1-929-913-9910', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'yqmq4u7b3p', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(8, 'Jack', 'jensen51@adams.com', '651-610-8467', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', 'PjaVcs4Rjk', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(9, 'Alice', 'lparisian@yahoo.com', '385.822.8259', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', '9DtUZQlEaV', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(10, 'John', 'dena.collins@yahoo.com', '+1-678-525-5654', '2022-01-02 03:55:53', '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC', '8SjyySXZKL', '2022-01-02 03:55:53', '2022-01-02 03:55:53'),
(15, 'Htoo Khant Linn', 'htookhantlinn18@gmail.com', '09260965397', NULL, '$2y$10$ZbnchFOFh.3EBmpocGGUeefKgnpY68S52SBFavZ07lwjKAxl2zdf6', NULL, '2022-01-02 04:28:05', '2022-01-02 04:28:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_field_id_foreign` (`field_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passports_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_address_id_foreign` (`address_id`);

--
-- Indexes for table `student__subjects`
--
ALTER TABLE `student__subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student__subjects`
--
ALTER TABLE `student__subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `passports`
--
ALTER TABLE `passports`
  ADD CONSTRAINT `passports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
