-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 01:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monthly_budget` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `name`, `monthly_budget`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'Apas', '1000000', '10.337243', '123.904790', '2017-10-17 08:19:29', '2017-10-17 08:19:29'),
(2, 'Bacayan', '1000000', '10.386846', '123.921393', '2017-10-17 08:19:29', '2017-10-17 08:19:29'),
(3, 'Banilad', '1000000', '10.347796', '123.913114', '2017-10-17 08:19:29', '2017-10-17 08:19:29'),
(4, 'Busay', '4500000', '10.345970', '123.893739', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(5, 'Capitol Site', '3000000', '10.324662', '123.890242', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(6, 'Carreta', '3000000', '10.308078', '123.908605', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(7, 'Day-as', '3000000', '10.301847', '123.902113', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(8, 'Ermita', '3000000', '10.291816', '123.897630', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(9, 'Hipodromo', '3000000', '10.314114', '123.906896', '2017-10-17 08:19:30', '2017-10-17 08:19:30'),
(10, 'Mambaling', '3000000', '10.292132', '123.876446', '2017-10-17 08:19:30', '2017-10-17 08:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicine_class_id` int(10) UNSIGNED NOT NULL,
  `generic_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `drug_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `medicine_class_id`, `generic_name`, `drug_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Captopril', 'Captopril is used to treat high blood pressure (hypertension), congestive heart failure, kidney problems caused by diabetes, and to improve survival after a heart attack.', '2017-10-17 07:32:32', '2017-10-17 07:32:32'),
(2, 1, 'Enalapril ', 'Enalapril is used to treat high blood pressure, heart failure, and asymptomatic left ventricular dysfunction..', '2017-10-17 07:32:32', '2017-10-17 07:32:32'),
(3, 1, 'Candesartan Cilexetil ', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(4, 1, 'Losartan ', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(5, 1, 'Irbesartan + Hydrochlorothiazide', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(6, 1, 'Losartan + Hydrochlorothiazide', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(7, 1, 'Irbesartan', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(8, 1, 'Telmisartan + Hydrochlorothiazide', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(9, 1, 'Valsartan + Hydrochlorothiazide', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(10, 1, 'Valsartan ', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(11, 1, 'Atenolol ', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(12, 1, 'Carvedilol', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(13, 1, 'Metoprolol (as Tartrate)', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(14, 1, 'Propranolol', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:33', '2017-10-17 07:32:33'),
(15, 1, 'Timolol  ', 'is a drug used for treating high blood pressure (hypertension). It is in a class of drugs called angiotensin receptor blockers ', '2017-10-17 07:32:34', '2017-10-17 07:32:34'),
(16, 2, 'Acarbose', 'is a glucosidase inhibitor. It works by slowing down the enzyme that turns carbohydrates into glucose.', '2017-10-17 07:32:34', '2017-10-17 07:32:34'),
(17, 3, 'Glipizide', 'is an oral diabetes medicine that helps control blood sugar levels by helping your pancreas produce insulin. Glipizide is used together with diet and exercise to treat type 2 diabetes ', '2017-10-17 07:32:34', '2017-10-17 07:32:34'),
(18, 3, 'Metformin Hydrochloride', 'Metformin is an oral diabetes medicine that helps control blood sugar levels. ', '2017-10-17 07:32:34', '2017-10-17 07:32:34'),
(19, 4, 'Simvastatin ', 'It reduces levels of bad cholesterol (low-density lipoprotein, or LDL) and triglycerides in the blood, while increasing levels of good cholesterol (high-density lipoprotein, or HDL). ', '2017-10-17 07:32:34', '2017-10-17 07:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_classes`
--

CREATE TABLE `medicine_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `treatment_of` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `some_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicine_classes`
--

INSERT INTO `medicine_classes` (`id`, `treatment_of`, `some_text`, `created_at`, `updated_at`) VALUES
(1, 'Heart Disease & High Blood Pressure', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quia repudiandae, fugiat accusantium, nisi pariatur.', '2017-10-17 07:32:32', '2017-10-17 07:32:32'),
(2, 'Diabetes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, quis aliquid', '2017-10-17 07:32:32', '2017-10-17 07:32:32'),
(3, 'High Cholesterol', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat laudantium facilis libero consequuntur debitis saepe alias, illum quibusdam nemo!', '2017-10-17 07:32:32', '2017-10-17 07:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_dosages`
--

CREATE TABLE `medicine_dosages` (
  `id` int(10) UNSIGNED NOT NULL,
  `dosage_volume` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `form` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `file_mime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicine_dosages`
--

INSERT INTO `medicine_dosages` (`id`, `dosage_volume`, `form`, `price`, `medicine_id`, `file_name`, `file_size`, `file_mime`, `file_path`, `created_at`, `updated_at`) VALUES
(1, '20mg', 'Capsule', 40.00, 15, 'h2YrKU1xaekEwuJ5ZxZ0gIx7A5CweeyzxKEtgtrV.jpeg', '31620', 'image/jpeg', 'medicines/h2YrKU1xaekEwuJ5ZxZ0gIx7A5CweeyzxKEtgtrV.jpeg', '2017-10-18 08:20:27', '2017-10-18 08:20:27'),
(2, '20mg', 'Capsule', 50.00, 5, 'xzgaz470jhKodLqe9PaB6ZXLpqAuyUviUjP8SSvU.jpeg', '12093', 'image/jpeg', 'medicines/xzgaz470jhKodLqe9PaB6ZXLpqAuyUviUjP8SSvU.jpeg', '2017-10-18 08:37:34', '2017-10-18 08:37:34'),
(3, '5mg', 'Tablet', 35.00, 4, 'EcGJa2mRtl8j0a4O5EcG8FuTrYhcQHEPrQKGqKqS.jpeg', '31620', 'image/jpeg', 'medicines/EcGJa2mRtl8j0a4O5EcG8FuTrYhcQHEPrQKGqKqS.jpeg', '2017-10-20 00:49:33', '2017-10-20 00:49:33'),
(4, '20mg', 'Capsule', 75.00, 17, 'iAX5YP1c3AIlrzjXEfF1Pul8fzi2SmhZRag9lsmt.jpeg', '31620', 'image/jpeg', 'medicines/iAX5YP1c3AIlrzjXEfF1Pul8fzi2SmhZRag9lsmt.jpeg', '2017-10-20 01:01:20', '2017-10-20 01:01:20'),
(5, '25mg', 'Capsule', 50.00, 13, 'iHGvDHyEZ3T4MZeV8VtWoUCbB64Uha86PqAy1R6x.jpeg', '31620', 'image/jpeg', 'medicines/iHGvDHyEZ3T4MZeV8VtWoUCbB64Uha86PqAy1R6x.jpeg', '2017-10-20 01:01:56', '2017-10-20 01:01:56'),
(6, '25mL', 'Tablet', 21.30, 12, 'p0BgASvRtewLZQJ8GmWPzWBLhpl18jfLbzMHEQEb.jpeg', '31620', 'image/jpeg', 'medicines/p0BgASvRtewLZQJ8GmWPzWBLhpl18jfLbzMHEQEb.jpeg', '2017-10-23 00:37:30', '2017-10-23 00:37:30'),
(7, '30mg', 'Tablet', 55.00, 8, '3TMrf5y37ttgPW3ZIs0Dx9DVyGtfNYc3URPcM1Se.jpeg', '31620', 'image/jpeg', 'medicines/3TMrf5y37ttgPW3ZIs0Dx9DVyGtfNYc3URPcM1Se.jpeg', '2017-10-23 12:47:07', '2017-10-23 12:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_10_15_125148_create_user_roles_table', 1),
(2, '2017_10_15_131500_CREATE_barangays_table_alter_users_table', 1),
(3, '2017_10_15_203117_create_medicine_classes_table', 1),
(4, '2017_10_15_204210_create_senior_citizens_table', 1),
(11, '2017_10_19_183258_create_senior_citizen_medicine_dosages_table', 2),
(24, '2017_10_20_141806_create_medicine_dosage_senior_citizens_table', 3),
(25, '2017_10_21_165947_user_informations', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `courier_id` int(10) UNSIGNED NOT NULL,
  `medicine_dosage_id` int(10) UNSIGNED NOT NULL,
  `senior_citizen_id` int(10) UNSIGNED NOT NULL,
  `daily_frequency` int(11) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `placed_on` datetime NOT NULL,
  `delivery_status` enum('undelivered','delivered','pending') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`courier_id`, `medicine_dosage_id`, `senior_citizen_id`, `daily_frequency`, `delivery_date`, `placed_on`, `delivery_status`) VALUES
(36, 1, 67201375, 3, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(39, 1, 67201376, 1, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(41, 1, 67201381, 1, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(43, 1, 67201381, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(37, 2, 67201372, 1, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(35, 2, 67201379, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(40, 3, 67201372, 3, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(41, 3, 67201378, 1, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(43, 3, 67201378, 3, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(34, 4, 67201372, 2, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(36, 4, 67201374, 3, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(34, 4, 67201375, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(40, 4, 67201375, 1, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(34, 4, 67201376, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(36, 4, 67201377, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(40, 4, 67201380, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(34, 5, 67201373, 1, '2017-10-25 18:18:26', '2017-10-21 18:18:26', 'undelivered'),
(37, 5, 67201376, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(36, 5, 67201377, 2, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(40, 5, 67201377, 1, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered'),
(34, 5, 67201379, 3, '2017-10-25 18:21:49', '2017-10-21 18:21:49', 'undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizens`
--

CREATE TABLE `senior_citizens` (
  `id` int(10) UNSIGNED NOT NULL,
  `barangay_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caretakers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caretakers_mobile_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `senior_citizens`
--

INSERT INTO `senior_citizens` (`id`, `barangay_id`, `first_name`, `middle_name`, `last_name`, `mobile_phone`, `telephone`, `caretakers_name`, `caretakers_mobile_phone`, `lat`, `lng`, `city_name`, `complete_address`, `created_at`, `updated_at`) VALUES
(2314, 1, 'Thomas', '', 'Moore', '9332998610', '2730258', 'Nadine Lustre', '9332998610', '10.33702160', '123.90645862', 'Cebu City', '1414 Omega St, Apas, Cebu City, Cebu, Philippines', NULL, NULL),
(4852, 2, 'Lebron', '', 'James', '9332998610', '2730258', 'Kim Domingo', '9981618950', '10.38752597', '123.92121601', 'Cebu City', 'Jerusalem Street, Cebu City, Cebu, Philippines', NULL, NULL),
(44521, 9, 'Michio', '', 'Kaku', '9327473899', '2730258', 'Earl Tagud', '9332998610', '10.31418884', '123.90741615', 'Cebu City', 'Paradise St, Cebu City, Cebu, Philippines', NULL, NULL),
(45123, 1, 'Miguel', '', 'Costa', '9981618950', '2730258', 'Liza Soberano', '9332998610', '10.29931827', '123.89248112', 'Cebu City', '47 J. Alcantara St, Cebu City, Cebu, Philippines', NULL, NULL),
(344326, 1, 'Matthew', '', 'Lucas', '9327473899', '2730258', 'Jackie Rice', '9981618950', '10.33763662', '123.90467632', 'Cebu City', '1985 Wilson St, Apas, Cebu City, 6000 Cebu, Philippines', NULL, NULL),
(1573802, 2, 'Kyrie', '', 'Irving', '9327473899', '2730258', 'Jerc Macasero', '998168950', '10.38640709', '123.92158616', 'Cebu City', 'Jerusalem Street, Cebu City, Cebu, Philippines', NULL, NULL),
(67201341, 9, 'Isaac', '', 'Newton', '9332998610', '2730258', 'Abrham Bas', '9327473899', '10.31431572', '123.90686630', 'Cebu City', 'C. Mina, Cebu City, Cebu, Philippines', '2017-10-19 05:56:24', '2017-10-19 05:56:21'),
(67201372, 1, 'Drake', 'Lueilwitz', 'Kemmer', '93332998610', '1-866-347-1229', 'Mrs. Jazmyne Morissette PhD', '9332998610', '10.31364300', '123.90069100', 'Cebu City', '312 Toy Way\nNorth Lysanneview, HI 14594-2603', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201373, 1, 'Lera', 'Erdman', 'Lind', '93332998610', '844-784-1649', 'Jack Murphy', '9332998610', '10.31549100', '123.90054000', 'Cebu City', '697 Runte Divide Suite 864\nMayerborough, MD 89539-4736', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201374, 1, 'Delmer', 'Hagenes', 'Olson', '93332998610', '800-727-7317', 'Jayne Rowe', '9332998610', '10.32751800', '123.89233000', 'Cebu City', '81463 Eliezer Drives\nNorth Theaview, CA 86088-4309', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201375, 1, 'Erich', 'Larson', 'Kunze', '93332998610', '800-574-2296', 'Bryce Adams', '9332998610', '10.31981400', '123.89322300', 'Cebu City', '549 Angie Centers Suite 702\nRoselynport, MA 75817', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201376, 1, 'Jess', 'Kris', 'Berge', '93332998610', '(855) 951-3687', 'Brad O\'Connell', '9332998610', '10.30309100', '123.89154500', 'Cebu City', '1291 Stephania Road\nLake Dorotheastad, TN 82682-7669', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201377, 1, 'Neal', 'Hilpert', 'Will', '93332998610', '844-632-4351', 'Aryanna Casper', '9332998610', '10.31545700', '123.89279800', 'Cebu City', '81954 Missouri Well Suite 959\nSchmidttown, MN 47956', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201378, 1, 'Micheal', 'Kris', 'Cronin', '93332998610', '(888) 249-6994', 'Prof. Leonora Schaefer I', '9332998610', '10.30673600', '123.89638100', 'Cebu City', '13733 Fredrick Orchard\nVivienneport, OK 72489', '2017-10-19 10:09:09', '2017-10-19 10:09:09'),
(67201379, 1, 'Cloyd', 'O\'Keefe', 'Hackett', '93332998610', '877-710-3958', 'Prof. Laurence Kertzmann', '9332998610', '10.30431500', '123.89035500', 'Cebu City', '213 Marlon Forks\nSouth Corineland, HI 81723-1044', '2017-10-19 10:09:10', '2017-10-19 10:09:10'),
(67201380, 1, 'Ryann', 'Kub', 'Bauch', '93332998610', '1-855-475-0137', 'Mr. Jarrett Ziemann II', '9332998610', '10.30356400', '123.89964100', 'Cebu City', '20330 Schmeler Course Apt. 210\nNorth Ari, NV 70048', '2017-10-19 10:09:10', '2017-10-19 10:09:10'),
(67201381, 1, 'Hailey', 'Orn', 'O\'Connell', '93332998610', '1-888-720-5478', 'Domenica Muller', '9332998610', '10.33641300', '123.89589500', 'Cebu City', '56671 Turcotte Locks\nSophiafurt, NH 58207', '2017-10-19 10:09:10', '2017-10-19 10:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `barangay_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `barangay_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(34, 'Hallie Dickinson', 'garland.erdman@example.net', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'Rya6o0Sv537PfFvSxnhm5dN5bssMT4SE2XX9IE1DGK3dpfM0XisZE73nJVzC', '2017-10-17 09:30:56', '2017-10-17 09:30:56'),
(35, 'Mr. Roscoe Hartmann', 'amccullough@example.net', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'UhMEwZMmQ8IETuxDlGivaagPU0vxLI', '2017-10-17 09:30:56', '2017-10-17 09:30:56'),
(36, 'Guy Lowe', 'durgan.maye@example.org', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'qcX0Q0SuGWl3GRcDBgZIZnNs4xgB87', '2017-10-17 09:30:56', '2017-10-17 09:30:56'),
(37, 'Jessy Bode DVM', 'marcos68@example.org', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', '4ivB55V8uCi6NTFArNu53DactdXYeZ', '2017-10-17 09:30:56', '2017-10-17 09:30:56'),
(38, 'Jermaine Ernser MD', 'murazik.ernesto@example.net', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'lLfuJ6L7ZGmtcc5ny5LUSr8JDXe6TU', '2017-10-17 09:30:56', '2017-10-17 09:30:56'),
(39, 'Ms. Winona Davis', 'reuben.kertzmann@example.net', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', '1M9lOURnOeTi8qRHCxI7dj0m4CwWF3r9Rl4NiAqc4amhlLd0qvWXmSIkMkDO', '2017-10-17 09:31:17', '2017-10-17 09:31:17'),
(40, 'Angela Feeney', 'abernier@example.org', 'secret', 2, 5, 'active', 'sOZUz5Q02SYGxVNFadf1WvihOvIMVM', '2017-10-17 09:31:18', '2017-12-07 16:13:50'),
(41, 'Nicolas Pollich', 'runte.troy@example.net', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'TYqrZ6sB3IjfU5LGHg0kJqZF0H0frIrOmoXEcRy3WnYvJiEF6qJ9tXxOed05', '2017-10-17 09:31:18', '2017-10-17 09:31:18'),
(42, 'Prof. Leanne Kovacek', 'crona.emilio@example.org', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'A9esvY1wPoUf4S2EgBGDCpP3ib6ccJ', '2017-10-17 09:31:18', '2017-10-17 09:31:18'),
(43, 'Kamryn Zieme II', 'lroberts@example.org', '$2y$10$nmL7C/iupLcOjGOzY/k.LO1vpLuj.pQSmvx4zGLy/8TiFQLmRt0je', 3, NULL, 'active', 'u4nZ9nq38MrALLEOnnyA8l12wYyU1j', '2017-10-17 09:31:18', '2017-10-17 09:31:18'),
(44, 'Kathryn Wolff Sr.', 'claudie.schowalter@example.net', '$2y$10$j6988qOWdLjyS.2OQDJX5uChqNtgQFO2sBZNZSC3lXw8CJ7jmAnTS', 1, NULL, 'active', '5vOzuM0HalKIYdD8CazwBv1sV4tQMCqowghiUix6Dm9moBlQtJkCC7wteKDS', '2017-10-17 09:31:29', '2017-10-17 09:31:29'),
(45, 'Ms. Emily Moore PhD', 'ikeeling@example.net', '$2y$10$j6988qOWdLjyS.2OQDJX5uChqNtgQFO2sBZNZSC3lXw8CJ7jmAnTS', 1, NULL, 'active', 'yA3l2FMvjon8a65HIpp7T5gcdspgSM', '2017-10-17 09:31:29', '2017-10-17 09:31:29'),
(46, 'Karianne Watsica DVM', 'reina21@example.net', '$2y$10$j6988qOWdLjyS.2OQDJX5uChqNtgQFO2sBZNZSC3lXw8CJ7jmAnTS', 1, NULL, 'active', 'kfvwwc0yro5UQ9IhY1olTd48cv6RJP', '2017-10-17 09:31:29', '2017-10-17 09:31:29'),
(47, 'Thaddeus Stark', 'moore.monroe@example.net', '$2y$10$j6988qOWdLjyS.2OQDJX5uChqNtgQFO2sBZNZSC3lXw8CJ7jmAnTS', 1, NULL, 'active', 'gaZHHuemB3hRFJhPZ44kXDCrx5cRGJVnn6WQ6Htu6jnCOR3FoRaFCRyL11FW', '2017-10-17 09:31:29', '2017-10-17 09:31:29'),
(48, 'Phyllis Dooley', 'dicki.reina@example.org', '$2y$10$j6988qOWdLjyS.2OQDJX5uChqNtgQFO2sBZNZSC3lXw8CJ7jmAnTS', 1, NULL, 'active', 'T6uqzUXpO5teNUxOES5CI6F6Bd2mHi1AqM5eFmFvYgl3eg3PcfXMYbURbJgM', '2017-10-17 09:31:29', '2017-10-17 09:31:29'),
(49, 'John Doe', 'jonsnow@gmail.com', '$2y$10$tGS.VktNBwx1x8EHXeOHTOy7efltt45V019seUvCIxjeAoejcUD/6', 2, 8, 'active', NULL, '2017-10-17 10:07:35', '2017-10-17 10:07:35'),
(50, 'Elliott O\'Reilly', 'bbeer@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 2, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(51, 'Lauretta O\'Keefe', 'kunde.verdie@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 3, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(52, 'Tyrese Koelpin', 'lauren14@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 8, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(53, 'Garrison Sporer', 'annalise77@example.net', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 10, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(54, 'Gayle Jenkins II', 'sandra.tillman@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 5, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(55, 'Lelia Lindgren', 'katelyn.oconner@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 9, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(56, 'Prof. Modesta Olson', 'fhudson@example.net', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 1, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(57, 'Deborah Donnelly DVM', 'dane68@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 3, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(58, 'Elnora Towne', 'bruen.richie@example.net', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 3, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(59, 'Dr. Tate Runte', 'bfisher@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 2, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(60, 'Cindy Kihn V', 'perry.stracke@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 4, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(61, 'Jerrold Stamm', 'caterina.treutel@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 4, 'active', NULL, '2017-10-19 10:13:50', '2017-10-19 10:13:50'),
(62, 'Uriel Torres', 'rina@gmail.com', 'Pa$$w0rd!', 3, 2, '', NULL, '2017-10-19 10:13:50', '2017-12-07 07:19:57'),
(63, 'Willie Hand', 'emely.hyatt@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 6, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(64, 'Prof. Constance Schmeler II', 'teagan.hintz@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 3, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(65, 'Marty Funk', 'humberto65@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 7, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(66, 'Ward Sipes', 'selmer21@example.net', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 3, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(67, 'Lionel Emmerich', 'hegmann.audie@example.org', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 7, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(68, 'Dr. Lonnie Carter', 'okuneva.vita@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 8, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(69, 'Evans Corkery', 'kgreenfelder@example.com', '$2y$10$0GBcUn.CKvAwFGkEr4ESFOjRNkyUx2D93J3BXTDu.P.d34EhgvO2u', 2, 9, 'active', NULL, '2017-10-19 10:13:51', '2017-10-19 10:13:51'),
(70, 'Cordell Fay', 'anita.bartell@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 2, 'active', 'EG31rT5kP2', '2017-10-20 11:12:49', '2017-10-20 11:12:49'),
(71, 'Einar Mann', 'modesto.gulgowski@example.net', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 9, 'active', 'UFW1p4KEcV', '2017-10-20 11:12:49', '2017-10-20 11:12:49'),
(73, 'Virgil Thompson Jr.', 'grady.marcelle@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 7, 'active', 'L20fmkXGNf', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(74, 'Jackie Bergstrom', 'clueilwitz@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 9, 'active', 'kYS2SqXBx0', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(76, 'Camila Daniel', 'mwelch@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 1, 'active', 'qD5wIQaJoF', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(77, 'Layla Nolan', 'ryan.keagan@example.net', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 3, 'active', 'h2CSuYRcHm', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(78, 'Gunner Renner DDS', 'gwest@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 1, 'active', 'c4Irzo9lHd', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(79, 'Mr. Louisa Pfannerstill', 'amely73@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 3, 'active', 'OGKA6gBh57', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(80, 'Ms. Karlie Bradtke', 'nelson.mcclure@example.net', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 3, 'active', 'ejuKI4Csvg', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(81, 'Miss Mia Hane Jr.', 'yasmeen.gottlieb@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 7, 'active', '9U84z8uBsN', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(82, 'Derek Kulas', 'kessler.elva@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 9, 'active', '6mENFWfi14', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(83, 'Coty Bosco', 'hammes.betsy@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 2, 'active', 'k8hFzqXwJL', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(84, 'Mr. Orlando Metz III', 'junius.sipes@example.net', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 6, 'active', '4QmcweRB64', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(85, 'Julien Bechtelar Sr.', 'trevor.smith@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 3, 'active', 'zWBk7koeYi', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(86, 'Rita Keeling', 'quitzon.maggie@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 1, 'active', 'lHtGA2JzCX', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(87, 'Brandi Macejkovic', 'jamal.russel@example.com', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 10, 'active', 'Ml1krJCR23', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(88, 'Prof. Adelia McDermott', 'klein.narciso@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 7, 'active', '8qXtX6KqXm', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(89, 'Carlotta DuBuque', 'maverick.klein@example.org', '$2y$10$HCD2WE8rj4.a/PIcx.VQ2uGtIRv5v9X7dA8Cm5twe4inrOjgAu30O', 2, 8, 'active', '5wZXlngb06', '2017-10-20 11:12:50', '2017-10-20 11:12:50'),
(90, 'Jon Snow', 'myemail@gmail.com', '$2y$10$StpHsjmPaLMrZMeH8mjpkOpjEbmj8j2hsh9NLrNKOQzZMZ21qPgB6', 2, 8, 'active', NULL, '2017-10-23 02:42:48', '2017-10-23 02:42:48'),
(91, 'Teegan Walter', 'tugyz@gmail.com', '$2y$10$MnIm6K.0Mr50SaAhKJQaU.6JEhoXMZlI.oGuL1z8Wo9/vkGHixEoi', 3, 5, 'inactive', NULL, '2017-12-07 03:57:38', '2017-12-07 03:57:38'),
(92, 'Adena Eaton', 'tezudaqeg@hotmail.com', '$2y$10$HjlGKAu88lBmfjqcXIcyJOoDznIMKZ4/eayCCDd5y09RN//.6gJIi', 2, 9, 'inactive', NULL, '2017-12-07 03:58:52', '2017-12-07 03:58:52'),
(93, 'Rae Parrish', 'mitimafi@gmail.com', '$2y$10$jrlkmBLEutJWbEYyyfn2Fe2UPgk4fiUbOQINVBnGEOWC0PGrXv0nS', 3, 10, 'inactive', NULL, '2017-12-07 03:59:25', '2017-12-07 03:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_informations`
--

CREATE TABLE `user_informations` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_ontact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_informations`
--

INSERT INTO `user_informations` (`user_id`, `present_address`, `mobile_phone`, `telephone`, `company`, `alternate_email`, `emergency_ontact`, `created_at`, `updated_at`) VALUES
(38, '109 Rosalind Port\nNew Ole, NH 67331-0606', '(742) 273-0712', '1-802-315-3946 x8090', 'Stracke-Ward', 'boehm.abigale@example.org', 'Miss Jailyn Heathcote', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(40, '4827 West Field\nAmaratown, MT 30980-8725', '798.977.9073 x791', '+1-371-242-5337', 'Hilpert-Gusikowski', 'muller.lyla@example.net', 'Prof. Gladyce Wehner', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(43, '43614 Bode Burg Suite 103\nNorth Favian, HI 79231-2124', '429.964.0419 x461', '661-612-6092 x23673', 'Watsica-Kemmer', 'jermaine.parisian@example.com', 'Krystel Donnelly V', '2017-10-21 10:17:36', '2017-10-21 10:17:36'),
(45, '6473 Aracely Rapid\nPort Eliezertown, FL 72541-9721', '881.520.1913', '327-806-4352', 'Rogahn and Sons', 'feeney.aiden@example.org', 'Miss Asha Gerhold DVM', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(46, '2091 Cloyd Village\nReynoldsbury, WA 31749', '419-498-5556', '+1-774-780-9340', 'Dicki LLC', 'littel.savannah@example.org', 'Jaycee Stamm', '2017-10-21 10:17:36', '2017-10-21 10:17:36'),
(48, '694 Oliver Ridge\nNorth Rosendoside, IL 55916-7934', '798.761.4582', '1-728-301-2491 x36203', 'Larson Inc', 'walker.hegmann@example.com', 'Brice Gulgowski', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(73, '73307 Oleta Pike Apt. 597\nHansenside, NJ 22579-4861', '925.266.0577 x251', '604-357-8277', 'Harvey Inc', 'eusebio04@example.net', 'Prof. Abraham Langosh', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(80, '6308 Collin Views Apt. 357\nDariusview, AZ 34924', '768-823-7766 x85189', '839-360-2122 x52214', 'Ruecker, Tremblay and Klein', 'germaine.cruickshank@example.net', 'Rhett Connelly', '2017-10-21 10:17:23', '2017-10-21 10:17:23'),
(88, '19168 Batz Drive Suite 642\nBogisichhaven, WA 12565-3926', '989-487-8477', '(289) 868-8916 x93514', 'Lemke and Sons', 'yprohaska@example.net', 'Mrs. Evelyn Conn II', '2017-10-21 10:17:23', '2017-10-21 10:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `task`) VALUES
(1, 'Administrator', 'Adds staffs to site'),
(2, 'Social Worker ', 'Facilitates the registration and orders of every barangays'),
(3, 'Courier', 'delivers the medicines in to houses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_medicine_class_id_foreign` (`medicine_class_id`);

--
-- Indexes for table `medicine_classes`
--
ALTER TABLE `medicine_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_dosages`
--
ALTER TABLE `medicine_dosages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicine_dosages_medicine_id_foreign` (`medicine_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`medicine_dosage_id`,`senior_citizen_id`,`courier_id`),
  ADD KEY `parcels_medicine_dosage_id_index` (`medicine_dosage_id`),
  ADD KEY `parcels_senior_citizen_id_index` (`senior_citizen_id`),
  ADD KEY `courier_id` (`courier_id`);

--
-- Indexes for table `senior_citizens`
--
ALTER TABLE `senior_citizens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senior_citizens_barangay_id_foreign` (`barangay_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_barangay_id_foreign` (`barangay_id`);

--
-- Indexes for table `user_informations`
--
ALTER TABLE `user_informations`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `medicine_classes`
--
ALTER TABLE `medicine_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medicine_dosages`
--
ALTER TABLE `medicine_dosages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `senior_citizens`
--
ALTER TABLE `senior_citizens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67201382;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_medicine_class_id_foreign` FOREIGN KEY (`medicine_class_id`) REFERENCES `medicine_classes` (`id`);

--
-- Constraints for table `medicine_dosages`
--
ALTER TABLE `medicine_dosages`
  ADD CONSTRAINT `medicine_dosages_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`);

--
-- Constraints for table `parcels`
--
ALTER TABLE `parcels`
  ADD CONSTRAINT `parcels_courier_id_foreign` FOREIGN KEY (`courier_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `parcels_medicine_dosage_id_foreign` FOREIGN KEY (`medicine_dosage_id`) REFERENCES `medicine_dosages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcels_senior_citizen_id_foreign` FOREIGN KEY (`senior_citizen_id`) REFERENCES `senior_citizens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `senior_citizens`
--
ALTER TABLE `senior_citizens`
  ADD CONSTRAINT `senior_citizens_barangay_id_foreign` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_barangay_id_foreign` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`id`);

--
-- Constraints for table `user_informations`
--
ALTER TABLE `user_informations`
  ADD CONSTRAINT `user_informations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
