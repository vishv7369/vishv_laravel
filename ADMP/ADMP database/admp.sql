-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 11:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `img`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$nNJItlaUF084ywUf5lyYLusc.9CPgIJa7ubFYbufE/3ER53mRokOG', '1660111265_img.jpg', NULL, '2022-08-10 00:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `created_at`, `updated_at`, `city_id`, `area_name`) VALUES
(1, NULL, NULL, 1, 'Maninagar'),
(2, NULL, NULL, 1, 'CTM'),
(3, '2022-08-17 23:15:45', '2022-08-17 23:15:45', 4, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `created_at`, `updated_at`, `sid`, `city_name`) VALUES
(1, NULL, NULL, 1, 'Ahmedabad'),
(2, NULL, NULL, 1, 'Surat'),
(3, NULL, NULL, 1, 'Vadodara'),
(4, NULL, NULL, 1, 'Rajkot'),
(5, NULL, NULL, 1, 'Bhavnagar'),
(6, NULL, NULL, 1, 'Jamnagar'),
(7, NULL, NULL, 1, 'Gandhinagar'),
(8, NULL, NULL, 1, 'Junagadh'),
(9, NULL, NULL, 1, 'Anand'),
(10, NULL, NULL, 1, 'Navsari'),
(11, '2022-08-05 05:57:37', '2022-08-05 05:57:37', 1, 'Morbi'),
(12, '2022-08-05 05:57:37', '2022-08-05 05:57:37', 1, 'Nadiad');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Available','Not Available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `profile_img`, `visiting_card`, `status`, `created_at`, `updated_at`) VALUES
(2, 'kinjal enterprise', 'kinjal', 'patel', 'kinjal@gmail.com', '$2y$10$/W2HqztrTACrxEvip51rROHNKGpvReWrMRlIhTcqxQStgHqVtn9MS', '1659361491_profile_img.jpg', '1659361491_visiting_card.jpg', 'Available', '2022-08-01 08:14:51', '2022-08-01 08:14:51'),
(3, 'riya enterprise', 'reena', 'valekar', 'riya@gmail.com', '$2y$10$3DmJMT3kQwRwAXrsjo60eOi4sattujHRBf6gwB4Oh88BrFKpp/GH2', '1659419351_profile_img.jpg', '1659419351_visiting_card.jpg', 'Available', '2022-08-02 00:19:11', '2022-08-02 00:19:11'),
(4, 'RiyaEnterprise', 'Reena', 'valekar', 'vishv@gmail.com', '$2y$10$DwoewdH4oAfVLvh1LBnv2OwDJhj0cI12VSwFVXj5IMdM.hmEub/6G', '1659512562_profile_img.jpg', '1659512562_visiting_card.jpg', 'Available', '2022-08-03 02:12:42', '2022-08-03 02:12:42'),
(5, 'Ayushi medicare', 'Ayushi', 'maurya', 'ayushimaurya@gmail.com', '$2y$10$MwRKJ57pP2OIiekys4jEBObGdOeJrFfI20UcslyPTud0hHy2ctYcO', '1659674474_profile_img.png', '1659674474_visiting_card.png', 'Available', '2022-08-04 23:11:14', '2022-08-04 23:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `specialist_id` bigint(20) UNSIGNED NOT NULL,
  `short_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liacence_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` bigint(20) UNSIGNED NOT NULL,
  `city` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_morning_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_morning_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_afternoon_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_afternoon_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_evening_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_evening_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consulting_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followup_fees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `hospital_status` enum('Enable','Disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disable',
  `area` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `gender`, `first_name`, `last_name`, `created_at`, `updated_at`, `specialist_id`, `short_tittle`, `email`, `password`, `dob`, `profile_img`, `liacence_no`, `education`, `experience`, `hospital_name`, `hospital_img`, `dr_mobile`, `office_no`, `visit_card`, `about`, `state`, `city`, `address`, `pincode`, `google_map`, `day`, `hospital_morning_to`, `hospital_morning_from`, `hospital_afternoon_to`, `hospital_afternoon_from`, `hospital_evening_to`, `hospital_evening_from`, `consulting_fees`, `followup_fees`, `notification`, `doctor_status`, `hospital_status`, `area`) VALUES
(1, 'Male', 'Harsh', 'Maurya', '2022-08-05 00:18:35', '2022-08-16 02:26:21', 6, 'vish', 'harsh2005@gmail.com', '$2y$10$LKB28gBcmMWBhAYTWR868OuLPg9QwnDHBOrlPjNk9Pa/gsfByWDEa', '2022-08-11', '1659678515_profile_img.jpg', '32154658', 'diploma', '3 year', 'Rukshmani', '1660636581hospital_img.jpg,1660636581hospital_img.jpg,1660636581hospital_img.jpg', '9725456541', '218565', '1659678515_visit_card_img.jpg', 'hello', 1, 1, 'Muktanand, ctm, ahmedabad', '382429', 'https://g.page/TOPS-Technologies-Maninagar?share', 'Monday', '14:17', '16:17', NULL, NULL, NULL, NULL, '1250', '125', 'thanks for', 'Unblock', 'Disable', 1),
(2, 'Male', 'Harsh', 'Mauryaa', '2022-08-05 00:23:31', '2022-08-16 02:44:29', 6, 'vishv', 'mohinimaurya622001@gmail.com', '$2y$10$rfr4Wlu32E5AOXoLyeIsVOBOM.OGY8F6nyDgw0BJFnjL8pJJoCxQe', '2022-08-11', '1659678811_profile_img.jpg', '32154658', 'diploma', '3 year', 'Rukshmani', '1660637669hospital_img.jpg,1660637669hospital_img.jpg', '9725456541', '218565', '1659678811_visit_card_img.jpg', 'hello', 1, 1, 'Muktanand, ctm, ahmedabad', '382429', 'https://g.page/TOPS-Technologies-Maninagar?share', 'Monday', '14:17', '16:17', NULL, NULL, NULL, NULL, '1250', '125', 'thanks for', 'Unblock', 'Disable', 1),
(3, 'Male', 'vishv', 'unjiya', '2022-08-05 03:31:06', '2022-08-16 05:44:42', 5, 'mr', 'vishv@gmail.com', '$2y$10$rfr4Wlu32E5AOXoLyeIsVOBOM.OGY8F6nyDgw0BJFnjL8pJJoCxQe', '2000-04-06', '1659936418_profile_img.jpg', '63276', 'diploma', '2 year', 'Rukshmani', '1660648481hospital_img.jpg,1660648481hospital_img.jpg,1660648481hospital_img.jpg', '7236536111', '21548', '1659936418_visit_card_img.jpg', 'im a', 1, 1, 'maninagar', '382429', 'https://github.com/RajeshNagar701/03Jan_Laravel_Rajesh', 'Tuesday,Thursday,Friday,Saturday,Sunday', '14:29', '19:29', NULL, NULL, '03:03', '02:02', '1250', '1254', 'kjkjghm', 'Unblock', 'Disable', 2),
(4, 'Male', 'Darren', 'Elder', '2022-08-08 08:19:33', '2022-08-08 08:19:33', 1, 'BDS, MDS - Oral & Maxillofacial Surgery', 'darrenelder@gmail.com', '$2y$10$FFO6chJJt3OvCRrVWX9U0upZkYIx5BpSUwMGyED7ldVClrgQib4qq', '1995-08-05', '1659966573_profile_img.jpg', '1664664', 'American Dental Medical University', '5 year', 'Comfort Care Dental Clinic', '1659966573_hospital_img.jpg', '0142536789', '147258369', '1659966573_visit_card_img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 1, 'Khokhra, Ahmedabad', '125478', 'https://goo.gl/maps/5dmkmgMZA4Le3i7T6', 'Wednesday,Thursday,Friday,Saturday', '05:00', '08:00', NULL, NULL, '13:00', '17:00', '1500', '500', 'if any problem then contact me', 'Unblock', 'Disable', 1),
(5, 'Female', 'ritika', 'maurya', '2022-08-12 23:03:31', '2022-08-12 23:03:31', 6, 'ms.', 'ritika@gmail.com', '$2y$10$.abLEwf2hche4LPwOnVT5uHaZSTxpfdXSDiil.mMV7URAIeGCC/BC', '1995-05-20', '1660365211_profile_img.jpg', '23215548', 'MBBS, MD', '4 year', 'appolo', '1660365211hospital_img.jpg', '7412589632', '124578', '1660365211_visit_card_img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, 1, 'maninagar, ahmedabad', '362514', 'https://web.whatsapp.com/', 'Friday,Saturday,Sunday', '06:00', '10:00', '13:00', '15:00', '18:00', '21:00', '2000', '1256', 'if any query then contact with me.', 'Unblock', 'Disable', 2),
(7, 'Male', 'rajesh', 'sir', '2022-08-16 07:07:27', '2022-08-16 07:07:27', 1, 'nice', 'rajesh@gmail.com', '$2y$10$PeGOC5.tUM/cYlocJjpkl.TivFMUDf4H6iSr0e4QYVudDfjQt15Re', '2022-08-03', '1660653447_profile_img.jpg', '1234567890', 'MBBS', '4 years', 'Appolo', '1660653447hospital_img.jpg,1660653447hospital_img.jpg,1660653447hospital_img.jpg', '4569852365', '5', '1660653447_visit_card_img.png', 'hee', 1, 1, 'ctm', '145632', 'https://www.webslesson.info/2021/04/laravel-8-tutorial-join-multiple-table-using-eloquent-model.html', 'Monday', '19:06', '19:06', '22:04', '22:04', NULL, NULL, '2000', '20', 'heee', 'Unblock', 'Disable', 1),
(8, 'Female', 'chatur', 'chandni', '2022-08-16 23:54:38', '2022-08-16 23:54:38', 1, 'fine', 'charu@gmail.com', '$2y$10$zHQSDFGFpB.rBaRQh/E4zOTyJzij2yQ3AoGAQgGCVc3vFjsjUTVKK', '2022-08-01', '1660713878_profile_img.jpg', '1234567890', 'MBBS', '4 years', 'Appolo', '166071387899999hospital_img.jpg,1660713878100000hospital_img.jpg,166071387899999hospital_img.jpg', '1023654789', '5', '1660713878_visit_card_img.jpg', 'hiiiii', 1, 1, 'ctm', '456982', 'https://admissions.nic.in/guj/Applicant/Choice/ChoiceFilling.aspx', 'Monday,Tuesday', '15:53', '13:53', NULL, NULL, NULL, NULL, '200', '20', 'hello', 'Unblock', 'Disable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drspecialities`
--

CREATE TABLE `drspecialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drspecialities`
--

INSERT INTO `drspecialities` (`id`, `created_at`, `updated_at`, `doctor_id`, `title`) VALUES
(1, '2022-08-08 02:28:33', '2022-08-08 02:28:33', 3, 'bvbgc'),
(2, '2022-08-08 02:34:36', '2022-08-08 02:34:36', 3, 'dfdrf'),
(3, '2022-08-10 00:06:05', '2022-08-10 00:06:05', 2, 'abcd'),
(4, '2022-08-10 00:06:13', '2022-08-10 00:06:13', 2, 'efgh');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_daytimes`
--

CREATE TABLE `hospital_daytimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morning_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evening_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `Manager_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `created_at`, `updated_at`, `company_id`, `Manager_name`, `first_name`, `last_name`, `email`, `password`, `profile_img`, `visiting_card`, `status`) VALUES
(2, '2022-08-02 00:11:27', '2022-08-02 23:02:10', 2, 'hetasvi Patel', 'freena', 'valekar', 'riya@gmail.com', '$2y$10$chW4btfUKgCuaxVFhH1rC.DuF4tKjtQ7FHnmIAboPsPotkAZgX/zi', '1659418887_profile_img.jpg', '1659418887_visiting_card.jpg', 'Unblock'),
(3, '2022-08-03 02:28:39', '2022-08-03 02:28:39', 4, 'kinjalpatel', 'vishv', 'unjiya', 'vishv@gmail.com', '$2y$10$opveTS/Xxt0613UJfwmSb.MpRk2fwOGN0SjhG1g.1Onuig7gLre9K', '1659513519_profile_img.jpg', '1659513519_visiting_card.jpg', 'Unblock'),
(4, '2022-08-04 23:58:04', '2022-08-04 23:58:04', 2, 'Vishv', 'Reena', 'Valekar', 'reena@gmail.com', '$2y$10$AwCs5NXaokAUAH8nXwqiZ.or93xKDnt47q6r3cpueIxX6CqhVkWpW', '1659677284_profile_img.jpg', '1659677284_visiting_card.jpg', 'Unblock');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_07_27_085653_create_specialists_table', 1),
(10, '2022_07_27_085721_add_column_to_specialists_table', 1),
(17, '2022_07_28_053546_create_admins_table', 5),
(18, '2022_07_28_053703_add_columns_to_admins_table', 5),
(20, '2022_07_27_085528_create_states_table', 6),
(21, '2022_07_27_085553_add_column_to_states_table', 6),
(23, '2022_08_01_071347_create_cities_table', 7),
(24, '2022_08_01_071416_add_columns_to_cities_table', 7),
(25, '2022_08_01_071553_create_areas_table', 8),
(26, '2022_08_01_071626_add_columns_to_areas_table', 8),
(28, '2022_08_01_071737_create_doctors_table', 9),
(29, '2022_08_01_071811_add_columns_to_doctors_table', 9),
(30, '2022_08_01_065830_create_companies_table', 10),
(31, '2022_08_01_070043_add_columns_to_companies_table', 10),
(32, '2022_08_01_072348_create_drspecialities_table', 11),
(33, '2022_08_01_072424_add_columns_to_drspecialities_table', 11),
(34, '2022_08_01_072609_create_hospital_daytimes_table', 12),
(35, '2022_08_01_072649_add_columns_to_hospital_daytimes_table', 12),
(36, '2022_08_01_073128_create_managers_table', 13),
(37, '2022_08_01_073158_add_columns_to_managers_table', 13),
(38, '2022_08_01_073614_create_mrs_table', 14),
(39, '2022_08_01_073632_add_columns_to_mrs_table', 14),
(40, '2022_08_01_073852_create_stockiests_table', 15),
(41, '2022_08_01_073921_add_columns_to_stockiests_table', 15),
(42, '2022_08_01_074211_create_products_table', 16),
(43, '2022_08_01_075049_create_products_table', 17),
(44, '2022_08_01_075106_add_columns_to_products_table', 17),
(45, '2022_08_08_054742_create_services_table', 18),
(46, '2022_08_08_054948_add_columns_to_services_table', 18),
(47, '2022_08_13_045609_create__patients_table', 19),
(48, '2022_08_13_045751_add_columns_to__patients', 19),
(49, '2022_08_13_050437_create_patients_table', 20),
(50, '2022_08_13_050547_add_columns_to_patients', 20),
(51, '2022_08_13_051816_create_patients_table', 21),
(52, '2022_08_13_051909_add_columns_to_patients', 21),
(53, '2022_08_13_071543_create_patient_fav_table', 22),
(54, '2022_08_13_073342_create_patient_favs_table', 23),
(55, '2022_08_13_073432_add_columns_to_patient_favs_table', 23),
(58, '2022_08_17_090708_create_patient_slots_table', 24),
(59, '2022_08_17_091048_add_columns_to_patient_slots_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `mrs`
--

CREATE TABLE `mrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiting_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mrs`
--

INSERT INTO `mrs` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `profile_img`, `visiting_card`, `status`) VALUES
(1, '2022-08-02 09:03:46', '2022-08-02 23:03:18', 3, 2, 'Riya Toys', 'vishv', 'unjiya', 'vishv@gmail.com', '$2y$10$zknLPNQ.gFbdUb8DUZi3zOWj7oE88QHd7aBJbDhayM1zd/r596XYG', '1659501198_profile_img.jpg', '1659501198_visiting_card.jpg', 'Unblock'),
(2, '2022-08-03 02:36:22', '2022-08-03 02:36:22', 2, 3, 'RiyaEnterprise', 'Harsh', 'Maurya', 'harsh@gmail.com', '$2y$10$wLJefEp4JI5CzTX20ZBOV.e9q8BwwbFX/R9AAZ.JbfJkjF5k428si', '1659513982_profile_img.jpg', '1659513982_visiting_card.jpg', 'Unblock'),
(3, '2022-08-05 00:00:21', '2022-08-05 00:00:21', 5, 4, 'Ayushi Maurya', 'Anand', 'Maurya', 'anand@gmail.com', '$2y$10$m3f/Ya5oObzk.8gCu/QSFO.Y8SoOJs7DLNNJFDf/nihSzj4Z2Uh1y', '1659677421_profile_img.jpg', '1659677421_visiting_card.jpg', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `mobileno`, `email`, `password`, `gender`, `profile_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ayushi Maurya', '1425369872', 'ayushimaurya@gmail.com', '$2y$10$FvqH7871P2KNh.Mm/ozL5ut9M1IprJP.3xdi3jqkR.39dmkw/JPgq', 'Female', '1660373296_profile_img.jpg', 'Unblock', '2022-08-13 00:03:51', '2022-08-14 07:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `patient_favs`
--

CREATE TABLE `patient_favs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_slots`
--

CREATE TABLE `patient_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_timing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_slots`
--

INSERT INTO `patient_slots` (`id`, `created_at`, `updated_at`, `doc_id`, `day`, `slot_timing`, `time`) VALUES
(38, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '09:15', 'Morning'),
(39, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '09:30', 'Morning'),
(40, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '09:45', 'Morning'),
(41, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '10:00', 'Morning'),
(42, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '10:15', 'Morning'),
(43, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '10:30', 'Morning'),
(44, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '10:45', 'Morning'),
(45, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '11:00', 'Morning'),
(46, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '11:15', 'Morning'),
(47, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '11:30', 'Morning'),
(48, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '11:45', 'Morning'),
(49, '2022-08-17 13:29:49', '2022-08-17 13:29:49', 2, 'Monday', '12:00', 'Morning'),
(50, '2022-08-17 13:33:07', '2022-08-17 13:33:07', 2, 'Monday', '03:15', 'Afternoon'),
(51, '2022-08-17 13:33:07', '2022-08-17 13:33:07', 2, 'Monday', '03:30', 'Afternoon'),
(52, '2022-08-17 13:33:07', '2022-08-17 13:33:07', 2, 'Monday', '03:45', 'Afternoon'),
(53, '2022-08-17 13:33:07', '2022-08-17 13:33:07', 2, 'Monday', '04:00', 'Afternoon');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creater_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `doctor_id`, `title`) VALUES
(1, '2022-08-08 02:08:13', '2022-08-08 02:08:13', 1, 'fefadc'),
(2, '2022-08-08 02:23:10', '2022-08-08 02:23:10', 3, 'vdcd'),
(3, '2022-08-08 02:29:44', '2022-08-08 02:29:44', 3, 'dfvgd'),
(4, '2022-08-08 02:31:17', '2022-08-08 02:31:17', 3, 'helllo'),
(5, '2022-08-08 02:34:28', '2022-08-08 02:34:28', 3, 'xcsxd'),
(6, '2022-08-10 00:05:44', '2022-08-10 00:05:44', 2, 'tooth'),
(7, '2022-08-10 00:05:54', '2022-08-10 00:05:54', 2, 'foot');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Dentist', '1659193869_img.png', NULL, '2022-07-30 09:41:09'),
(2, 'heart suergon', '1659193836_img.png', NULL, '2022-07-30 09:40:36'),
(5, 'Urology', '1659194312_img.png', '2022-07-30 09:48:32', '2022-07-30 09:48:32'),
(6, 'neurologists', '1659592445_img.png', '2022-08-04 00:24:05', '2022-08-04 00:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gujarat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stockiests`
--

CREATE TABLE `stockiests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Block','Unblock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockiests`
--

INSERT INTO `stockiests` (`id`, `created_at`, `updated_at`, `company_id`, `manager_id`, `name`, `state`, `city`, `area`, `address`, `pincode`, `status`) VALUES
(1, NULL, NULL, 3, 3, 'Ritika Maurya', 'Gujarat', 'Ahmedabad', 'Ghatlodiya', 'Nutan School', '324585', 'Unblock'),
(2, NULL, NULL, 2, 2, 'Ayushi Maurya', 'Gujarat', 'Ahmedabad', 'Ctm', 'Gurukrupa School', '382449', 'Unblock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_sid_foreign` (`sid`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_specialist_id_foreign` (`specialist_id`),
  ADD KEY `doctors_state_foreign` (`state`),
  ADD KEY `doctors_city_foreign` (`city`),
  ADD KEY `doctors_area_foreign` (`area`);

--
-- Indexes for table `drspecialities`
--
ALTER TABLE `drspecialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drspecialities_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_daytimes_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `managers_company_id_foreign` (`company_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrs`
--
ALTER TABLE `mrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mrs_company_id_foreign` (`company_id`),
  ADD KEY `mrs_manager_id_foreign` (`manager_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_favs`
--
ALTER TABLE `patient_favs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_favs_doctor_id_foreign` (`doctor_id`),
  ADD KEY `patient_favs_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_slots`
--
ALTER TABLE `patient_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_slots_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockiests`
--
ALTER TABLE `stockiests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stockiests_company_id_foreign` (`company_id`),
  ADD KEY `stockiests_manager_id_foreign` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drspecialities`
--
ALTER TABLE `drspecialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `mrs`
--
ALTER TABLE `mrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_favs`
--
ALTER TABLE `patient_favs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_slots`
--
ALTER TABLE `patient_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stockiests`
--
ALTER TABLE `stockiests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_sid_foreign` FOREIGN KEY (`sid`) REFERENCES `states` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_area_foreign` FOREIGN KEY (`area`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `doctors_city_foreign` FOREIGN KEY (`city`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `doctors_specialist_id_foreign` FOREIGN KEY (`specialist_id`) REFERENCES `specialists` (`id`),
  ADD CONSTRAINT `doctors_state_foreign` FOREIGN KEY (`state`) REFERENCES `states` (`id`);

--
-- Constraints for table `drspecialities`
--
ALTER TABLE `drspecialities`
  ADD CONSTRAINT `drspecialities_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `hospital_daytimes`
--
ALTER TABLE `hospital_daytimes`
  ADD CONSTRAINT `hospital_daytimes_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `mrs`
--
ALTER TABLE `mrs`
  ADD CONSTRAINT `mrs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `mrs_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

--
-- Constraints for table `patient_favs`
--
ALTER TABLE `patient_favs`
  ADD CONSTRAINT `patient_favs_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `patient_favs_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_slots`
--
ALTER TABLE `patient_slots`
  ADD CONSTRAINT `patient_slots_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `stockiests`
--
ALTER TABLE `stockiests`
  ADD CONSTRAINT `stockiests_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `stockiests_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
