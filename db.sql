-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2021 at 04:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nooriwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `button`, `link`, `created_at`, `updated_at`) VALUES
(1, 'About Noori Wave', 'mt26UcpMYeV1mBSJhqVDWrdcRL0QMsOSuFSndwI4.jpeg', '<p>Noori Wave ICT is a fast-growing organization that strives to provide its clients with the best of the best when it comes to their Technology Solution needs. We accomplish this by always analyzing each client&rsquo;s situation and coming up with a customized solution. At Noori Wave ICT, you won&rsquo;t necessarily pay more for a custom solution than you would pay for the standardized solutions offered by our competitors.</p>', 'Contact us', 'http://nooriwave.com/contact', '2021-03-10 19:30:00', '2021-03-11 13:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nooriwave Admin', 'admin', '$2y$10$e9B4tH0WaBe5NtbWHFyZPeYKcb37ALBlHYru6Ckax2F7U83hC2KOy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aims`
--

DROP TABLE IF EXISTS `aims`;
CREATE TABLE IF NOT EXISTS `aims` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aims`
--

INSERT INTO `aims` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Aim', '<p>We aim to be one of the best IT Services providers in the industry by ensuring we have a team that has the right attitude, committed, and skilled to deliver the services you want. With over 9 years of experience in the IT services industry providing services to small, medium, and large enterprises, the Noori Wave team has the expertise and the understanding of what is required to deliver quality and reliable services from Remote Support, Onsite Support, Networking, Data Recovery, Customized Application Development, CCTV, Access control, Printing Solutions, Retail Solutions, Hosted Solutions (Servers, Exchange, Cloud Backups, Cloud PBX), Hardware (------) Rentals/Financing, Project management, and IT Management to Complete Outsourcing of IT Needs for any organization.</p>', '62XbKrh92Nzxvs1iIpWA4Ve21sieVXbe5F3q4ppf.svg', NULL, '2021-03-12 14:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, '5NCRC4CLK7CO2VdMeiTdcx0BOyP6s1cDGgCh47a7.svg', '2021-03-11 15:11:15', '2021-03-11 15:11:15'),
(4, 'QyRKAFdzmwIoAaoQmQkCWkMh5gKyd1cZ769LcQ2W.svg', '2021-03-11 15:11:15', '2021-03-11 15:11:15'),
(5, 'mfV0wb3nC4NXTMOMe7RhY7UiHT0WzmpAImloC5cr.svg', '2021-03-11 15:11:16', '2021-03-11 15:11:16'),
(6, 'F2noyWi73bLMqvn7TVDTBk78MFUi1FWG376Pm0Xw.svg', '2021-03-11 15:11:16', '2021-03-11 15:11:16'),
(7, 'PA6zOINfNBTLTZoYIHoHq1JGv0JFflHidDmyhERd.svg', '2021-03-11 15:11:17', '2021-03-11 15:11:17'),
(8, 'DVBSzocSPZ5jpDG25HqRreE0dVfMhTT3Ghgwow1C.svg', '2021-03-11 15:11:17', '2021-03-11 15:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `collaborations`
--

DROP TABLE IF EXISTS `collaborations`;
CREATE TABLE IF NOT EXISTS `collaborations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collaborations`
--

INSERT INTO `collaborations` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Collaboration', '<p>We maintain close contact with our most important suppliers, which means that we are always informed about the latest technological developments and we can therefore provide our clients with the best solutions at the best price. We like to work with companies that believe quality is important and have proven themselves in the market.</p>', 'Rb66HvAZ3tMZb7YxYtqoJ9ScuBySBb4v22T8j9ey.svg', NULL, '2021-03-12 14:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Atal Atal', 'realatalatal@gmail.com', 'kajh', 'asdf', '2021-03-13 05:20:40', '2021-03-13 05:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `developments`
--

DROP TABLE IF EXISTS `developments`;
CREATE TABLE IF NOT EXISTS `developments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `developments`
--

INSERT INTO `developments` (`id`, `title`, `icon`, `image`, `slider_title`, `slider_subtitle`, `excerpt`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', 'jsqxkPq8wEgwlBZBSrRzXTN6SQkkh4s0SGH0lGbw.png', 'iOuE4Fpx0gfLp36MYFDdIh3ChDKyNQCH6MyUlyff.png', 'Let us build your next thing in mind', 'We have the skills, the ability and the resources to build whatever you are thinking of right now', 'It seems that only fragments of the original text remain in the Lorem Ipsum texts used today.', '<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Our Software Development services include:</p>', NULL, '2021-03-12 13:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `footer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `footer`, `email`, `phone`, `phone2`, `facebook`, `twitter`, `instagram`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Build responsive, mobile-first projects on the web with the world\'s most popular front-end component library.', 'info@nooriwave.co', '+93747668037', '+10798003553', 'http://www.facebook.com/nooriwave', 'http://www.twitter.com/nooriwave', 'http://www.instagram.com/nooriwave', 'Shahr-e-Naw Kabul, Afghanistan', NULL, '2021-03-13 05:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_01_052244_create_admins_table', 1),
(5, '2021_03_09_100247_create_sliders_table', 2),
(6, '2021_03_09_103649_create_clients_table', 3),
(7, '2021_03_11_055234_create_testimonials_table', 4),
(8, '2021_03_11_081019_create_abouts_table', 5),
(9, '2021_03_11_082532_create_organizations_table', 6),
(10, '2021_03_11_093527_create_collaborations_table', 7),
(11, '2021_03_11_094207_create_aims_table', 8),
(12, '2021_03_11_105140_create_networks_table', 9),
(13, '2021_03_11_153232_create_services_table', 10),
(14, '2021_03_11_163715_create_developments_table', 11),
(15, '2021_03_11_165229_create_servers_table', 12),
(16, '2021_03_13_091424_create_contacts_table', 13),
(17, '2021_03_13_095532_create_infos_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

DROP TABLE IF EXISTS `networks`;
CREATE TABLE IF NOT EXISTS `networks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `title`, `icon`, `image`, `slider_title`, `slider_subtitle`, `excerpt`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IT Solutions', '0g7TnR9VaLeqRgWWJy2CQObtKM8rUT2sP99wu6y8.png', 'sLmMdmIOAagu1oGlBdQs1NBBBcFf7prslPNWL7Gb.png', 'Best VoIP and <br> Network Solutions in Kabul', 'Choose Noori Wave as your network client to get the best of both worlds', 'It seems that only fragments of the original text remain in the Lorem Ipsum texts used today.', '<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Our IT Solutions include:</p>', NULL, '2021-03-12 13:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Organization', '<p>Noori Wave ICT was founded in 2020 by Mojeeb Noori. with our partners, we form a close-knit team of young professionals skilled at solutions for facilitating ICT, marketing, and business optimization.</p>', 'B9YXA7ZxPWGqO9xlljROnbZhnQgAcBxPj8ikTWpC.svg', NULL, '2021-03-12 14:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

DROP TABLE IF EXISTS `servers`;
CREATE TABLE IF NOT EXISTS `servers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `title`, `icon`, `image`, `slider_title`, `slider_subtitle`, `excerpt`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hosting and Domain registration', 'zpalaW3sTAOchPyrSwnLpMi9XEuodRdDs7z2vaUA.png', 'G04KKzLQ9V1B8z9r0hu19ze9RdKvB32MDrIK6pPa.png', 'Best <br> Hosting and <br> Domain Services', 'Fastest response time winner in the flani event in India', 'It seems that only fragments of the original text remain in the Lorem Ipsum texts used today.', '<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p style=\"text-align: justify;\">Our Hosting Services include:</p>', NULL, '2021-03-12 12:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `title`, `icon`, `image`, `excerpt`, `description`, `created_at`, `updated_at`) VALUES
(9, '1', 'Internet Connectivity', 'asMUYMcWdCtm6F5LR8cwFDouIMjV93GEDJEws1aN.png', 'BoiXOAadPHLoMx9IFuQhfEZcAQuBgXygyRncYGGr.png', 'The most well-known dummy text is the \'Lorem\', which well-known is said which is said to have in.', 'Shared Hosting', '2021-03-12 12:35:48', '2021-03-12 12:35:48'),
(2, '0', 'VoIP (Voice Over IP)', 'GCBzTG29QTZCSYPGD7kdhB2WE3JcsEHNaZXpoM43.png', '7eb2SJJylPzuQ0SN3TwrRqvpiMmIDlkiEEPvlrUQ.jpeg', 'Noori Wave implements a cost-saving VOIP service that will allow for quick, quality calls from any device.', '<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p>Which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p>&nbsp;</p>\r\n<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>\r\n<p>Which will later be filled with \'real\' content. This is required when, for example, the final text is not yet available. Dummy text is also known as \'fill text\'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>', '2021-03-11 14:15:30', '2021-03-12 12:07:04'),
(3, '0', 'CCTV Security', '4YDQetJoFYMRKyGxC2tEdBwwIWNOvcQB2pXVTYXl.png', 'NuXl5v9K2rrvfEvGU1ga8900QvxXzwawRdrAWmrn.png', 'Advanced surveillance and security methods are united with standardization CCTV installation services.', '<p>asdf</p>', '2021-03-11 14:19:52', '2021-03-11 14:39:26'),
(4, '0', 'Cloud Services', 'xnKVrEl0CbdsjduY0yNwlnRP2F17tzhoAQjpch0E.png', 'oOvymyvE7LLoKnysKW9gQmtsnXo2kFJE7XdJnbCQ.png', 'Cloud computing reduces the cost of information technology. Cloud solutions are available from anywhere.', '<p>alsdfkajs</p>', '2021-03-11 14:38:03', '2021-03-12 11:47:30'),
(5, '3', 'Shared Hosting', 'asMUYMcWdCtm6F5LR8cwFDouIMjV93GEDJEws1aN.png', 'BoiXOAadPHLoMx9IFuQhfEZcAQuBgXygyRncYGGr.png', 'The most well-known dummy text is the \'Lorem\', which well-known is said which is said to have in.', 'Shared Hosting', '2021-03-12 12:35:48', '2021-03-12 12:35:48'),
(6, '3', 'VPS Hosting', 'Z0nmvUx6cuPF8UMjzUrddQFlN1m68NNWa2t9v5yz.png', 'Vah7CWpToSs0V81ZetvOwJKRYKSRDANEQ2NVdKZh.png', 'One disadvantage of Lorum Ipsum is that in certain letters which are said appear more than.', 'One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.', '2021-03-12 12:41:42', '2021-03-12 12:41:42'),
(7, '3', 'Dedicated Hosting', '9EfeZG2GFvKv9prspoQ8pU6j7zyCEUQJvYOB4aix.png', 'Wd70Flrn2us2fe5YyvKAarPUNnZwMrBHRQq0rthO.png', 'Moreover, in Latin, only words at the beginning of sentences which is said are capitalized right.', '<p>&nbsp;</p>\r\n<p class=\"text-muted mt-2\" style=\"box-sizing: border-box; margin-top: 0.5rem !important; margin-bottom: 1rem; font-size: 16px; line-height: 1.6; color: #8492a6 !important; font-family: \'Nunito Sans\', sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>', '2021-03-12 12:44:13', '2021-03-12 12:49:19'),
(8, '3', 'Reseller Hosting', 'pZNwXiMGutEHCyWaqS0x4VsLMSHQWBFCoCLhzDeC.png', 'hmry8TsDyk8G1ORFB7ICHTlnj2SZxiQETcF6ZW2V.png', 'There is now an abundance of readable dummy texts. These are which well-known is said text is.', NULL, '2021-03-12 12:52:43', '2021-03-12 12:53:03'),
(10, '1', 'Cabling and Networking', 'Z0nmvUx6cuPF8UMjzUrddQFlN1m68NNWa2t9v5yz.png', 'Vah7CWpToSs0V81ZetvOwJKRYKSRDANEQ2NVdKZh.png', 'One disadvantage of Lorum Ipsum is that in certain letters which are said appear more than.', 'One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.', '2021-03-12 12:41:42', '2021-03-12 12:41:42'),
(11, '1', 'VoIP Solutions', '9EfeZG2GFvKv9prspoQ8pU6j7zyCEUQJvYOB4aix.png', 'Wd70Flrn2us2fe5YyvKAarPUNnZwMrBHRQq0rthO.png', 'Moreover, in Latin, only words at the beginning of sentences which is said are capitalized right.', '<p>&nbsp;</p>\r\n<p class=\"text-muted mt-2\" style=\"box-sizing: border-box; margin-top: 0.5rem !important; margin-bottom: 1rem; font-size: 16px; line-height: 1.6; color: #8492a6 !important; font-family: \'Nunito Sans\', sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>', '2021-03-12 12:44:13', '2021-03-12 12:49:19'),
(12, '1', 'Mobile Networking', 'pZNwXiMGutEHCyWaqS0x4VsLMSHQWBFCoCLhzDeC.png', 'hmry8TsDyk8G1ORFB7ICHTlnj2SZxiQETcF6ZW2V.png', 'There is now an abundance of readable dummy texts. These are which well-known is said text is.', NULL, '2021-03-12 12:52:43', '2021-03-12 12:53:03'),
(13, '2', 'SEO', 'asMUYMcWdCtm6F5LR8cwFDouIMjV93GEDJEws1aN.png', 'BoiXOAadPHLoMx9IFuQhfEZcAQuBgXygyRncYGGr.png', 'The most well-known dummy text is the \'Lorem\', which well-known is said which is said to have in.', 'Shared Hosting', '2021-03-12 12:35:48', '2021-03-12 12:35:48'),
(14, '2', 'Web Development', 'Z0nmvUx6cuPF8UMjzUrddQFlN1m68NNWa2t9v5yz.png', 'Vah7CWpToSs0V81ZetvOwJKRYKSRDANEQ2NVdKZh.png', 'One disadvantage of Lorum Ipsum is that in certain letters which are said appear more than.', 'One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.One disadvantage of Lorum Ipsum is that in certain letters which is said appear more than.', '2021-03-12 12:41:42', '2021-03-12 12:41:42'),
(15, '2', 'Database Development', '9EfeZG2GFvKv9prspoQ8pU6j7zyCEUQJvYOB4aix.png', 'Wd70Flrn2us2fe5YyvKAarPUNnZwMrBHRQq0rthO.png', 'Moreover, in Latin, only words at the beginning of sentences which is said are capitalized right.', '<p>&nbsp;</p>\r\n<p class=\"text-muted mt-2\" style=\"box-sizing: border-box; margin-top: 0.5rem !important; margin-bottom: 1rem; font-size: 16px; line-height: 1.6; color: #8492a6 !important; font-family: \'Nunito Sans\', sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Moreover, in Latin only words at the beginning of sentences which is said are capitalized.</p>', '2021-03-12 12:44:13', '2021-03-12 12:49:19'),
(16, '2', 'Mobile App Development', 'pZNwXiMGutEHCyWaqS0x4VsLMSHQWBFCoCLhzDeC.png', 'hmry8TsDyk8G1ORFB7ICHTlnj2SZxiQETcF6ZW2V.png', 'There is now an abundance of readable dummy texts. These are which well-known is said text is.', NULL, '2021-03-12 12:52:43', '2021-03-12 12:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `link`, `button`, `created_at`, `updated_at`) VALUES
(2, 'Unleash Creativity in Business', 'Start work with Leaping. Build responsive, mobile-first projects on the web with the world\'s most popular front-end component library.', 'JduROEmJFME56mVUus0pgekisildsMCG9iT5o3Ag.jpeg', 'http://nooriwave.com/services', 'Visit', '2021-03-11 13:11:37', '2021-03-11 13:11:37'),
(3, 'Start Your Business With Noori Wave', 'Start work with Noori Wave. Build responsive, mobile-first projects on the web with the world\'s most popular front-end component library.', 'pW79ltXAun1ty7YDobZocjEni9w8FqwRXc5rgSRU.jpeg', 'http://127.0.01:8000/services', 'Visit Services', '2021-03-11 13:16:23', '2021-03-11 13:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saying` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `organization`, `image`, `saying`, `created_at`, `updated_at`) VALUES
(1, 'Zakarya Noori', 'CFO', 'Netlinks', 'xzOdxXqyv6tUo6fZzODSLtY7CXDGPm7YsvIk5Ymr.jpeg', 'It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain', '2021-03-11 01:51:08', '2021-03-11 15:04:29'),
(2, 'Zafar Arifi', 'CTO', 'Netlinks', 'MrCGoGG4QmwSO5r5zWZpbGokDNbU4LtntojYiVxp.jpeg', 'It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain', '2021-03-11 15:03:43', '2021-03-11 15:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
