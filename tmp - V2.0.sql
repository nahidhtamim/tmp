-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2023 at 03:25 PM
-- Server version: 10.3.38-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nahidhta_tmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `award_certificates`
--

CREATE TABLE `award_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` tinyint(4) NOT NULL DEFAULT 1,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_certificates`
--

INSERT INTO `award_certificates` (`id`, `type_id`, `title`, `description`, `image`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Qality Management ISO-9001-2015', NULL, '1678997475.png', 1, 1, '2023-03-16 14:11:15', '2023-03-16 14:42:24'),
(2, 1, 'Environment Management ISO-14001-2015', NULL, '1678997754.png', 1, 1, '2023-03-16 14:15:54', '2023-03-16 14:42:30'),
(3, 1, 'Occupational Health And Safety Management ISO-45001-2018', NULL, '1678997814.png', 1, 1, '2023-03-16 14:16:54', '2023-03-16 14:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `description_one`, `description_two`, `featured`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '1680188574.jpg', 'Case Study - Kitting Services', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">A leading&nbsp;automotive brands European after sales services division, was looking for a method of servicing the front cover of one of their high mileage vehicles ensuring that the integrity of the oil seals remained.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Originally the in-country service partner would order each of the individual components and would &ldquo;press&rdquo; the oil seal into the cover onsite; however, without specialist pressing equipment the seal could be damaged and the integrity of the oil seal compromised.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The customer approached TMP Manufacturing for a solution.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\">TMP Manufacturing solution</span></span></p>\r\n\r\n<p>A project team was established, consisting of our technical engineer, CAD designer and production manager from our partner company, Total Metal Products. We designed, developed and built a cover assembly station which provided consistent pressing of the oil seal into the cover, controlling the depth, parallelism and cleanliness of the assembly.</p>\r\n\r\n<p>Our supply chain team established purchasing agreements with the customers key component suppliers.</p>\r\n\r\n<p>Bespoke packaging was designed, and the customer&rsquo;s standard labeling system was implemented.&nbsp;</p>\r\n\r\n<p>The customers order processing system was implemented, allowing TMP Manufacturing to automatically receive the daily production scheduling requirements, and update&nbsp;the customer when the schedule is completed awaiting collection.&nbsp;</p>\r\n\r\n<p>TMP Manufacturing now operates 4 cover assembly stations, producing 5 kit variants for the customers European dealer service network.</p>', 1, 'case-study-kitting-services', 1, '2023-03-17 08:35:48', '2023-03-30 20:02:54'),
(2, '1680189265.jpg', 'Case Study - Supplier Insolvency Support', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">Electronic Throttle Controllers (ETC&rsquo;s) are dedicated to usually one specific vehicle.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The original supplier of ETC&#39;s to a leading automotive brand&nbsp;went into receivership, leaving the customer without five service part numbers and no alternative supplier. The customers technical engineer was aware of&nbsp; TMP Manufacturing broad range of skills from a previous insolvency project, and approached us to see if they could take over the production cell and put the service parts back into production.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\"><strong>TMP Manufacturing solution</strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\">We liaised with the administrator and purchased the production assembly cell set-up (which occupied a floor space of approximately 15&sup2;M). The cell was partially disassembled by us before being transported and reassembled at our premises. In conjunction with the customers technical engineer we sourced a new sub-supplier to take over the production of all the required mouldings for the assemblies. We also set up supply arrangements with the various bought-in components, all from the original sources.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The cell was back in production just a few weeks later producing all five part numbers. A former employee of the original supplier was employed by us to ensure no errors were made, during our early production runs.</span></p>\r\n\r\n<p><span style=\"color:#000000\">After two years of maintaining the assembly cell, it was decided to reduce the cell footprint by around 75% to save floor space. The original assembly cell was designed around three operators and now only one was required to keep up with service volumes. Following the build-up of some buffer stocks, this cell redesign was undertaken by in-house teams. The redesigned cell was back in operation within 2 weeks.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Shortly after the assembly cell redesign, a key sub-supplier, who made the electronic sensors, announced they were ceasing production and would only manufacture one final batch of sensors. As the all-time-requirement was still well in excess of 100,000 sensors, we took over responsibility for the sensor assembly, finding and working with a new supplier in this area.</span></p>\r\n\r\n<p><span style=\"color:#000000\">Two years later the annual service demand had fallen by over 60%.&nbsp;&nbsp;Consequently TMP Manufacturing redesigned and manufactured a manual assembly cell, with only 1&sup2;M floor space. This assembly cell still currently in use.</span></p>', 1, 'case-study-supplier-insolvency-support', 1, '2023-03-17 08:36:07', '2023-03-30 20:14:25'),
(3, '1680189279.jpg', 'Case Study - Resourcing Assemblies', '<p><span style=\"color:#c0392b\"><span style=\"font-size:20px\">Customer Requirement</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">In 2017, a German supplier to a leading automotive manufacturer, was producing three variants of an EGR (exhaust gas recirculation) exhaust manifold assembly for an out of production diesel engine.</span></p>\r\n\r\n<p><span style=\"color:#000000\">The supplier wanted to cease production to free up the floor space for a new production part, and asked the customer to find an alternative supplier, whom they would support. The customer approached TMP Manufacturing to continue the production.</span></p>', '<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\">TMP Manufacturing solution</span></span></p>\r\n\r\n<p><span style=\"color:#000000\">A number of planning meetings between the customer, the supplier and TMP Manufacturing were held. The supplier built up an agreed volume of safety stock prior to all nine dedicated production cells were transferred to us, along with all stocks of component parts, an inventory of spare parts for the machines, and letters of introduction to all component suppliers.</span></p>\r\n\r\n<p><span style=\"color:#000000\">We took over the maintenance of all of the production cells and within a short period of time we were able to supply all three part numbers to the customer production schedules. This included procuring and replacing old Windows 95 PC&rsquo;s on a vital test cell.</span></p>', 1, 'case-study-resourcing-assemblies', 1, '2023-03-17 08:36:44', '2023-03-30 20:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_cards`
--

CREATE TABLE `equipment_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_cards`
--

INSERT INTO `equipment_cards` (`id`, `serial`, `title`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kitting Services', '1679937985.jpg', 'https://tmp.nahidhtamim.top/our-services/Kitting-Services', 1, '2023-03-11 12:55:36', '2023-03-27 11:26:25'),
(2, 2, 'After Sales Parts', '1679938001.png', 'https://tmp.nahidhtamim.top/our-services/After-Sales-Parts', 1, '2023-03-11 12:55:50', '2023-03-27 11:26:41'),
(3, 3, 'After Market Parts', '1681821598.png', 'https://tmp.nahidhtamim.top/our-services/Aftermarket-Parts', 1, '2023-03-11 12:56:04', '2023-04-18 17:39:58'),
(4, 4, 'Low volume production', '1679938045.png', 'https://tmp.nahidhtamim.top/our-services/Low-volume-production', 1, '2023-03-11 12:56:17', '2023-03-28 15:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image_id`)),
  `service_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` tinyint(11) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `cat_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 2, '167976281173.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(7, 2, '167976281134.jpg', 1, '2023-03-25 10:46:51', '2023-03-25 10:46:51'),
(11, 2, '167976281145.jpg', 1, '2023-03-25 10:46:51', '2023-04-17 07:30:58'),
(17, 1, '168167816697.jpg', 0, '2023-04-16 14:49:26', '2023-04-17 04:53:17'),
(18, 1, '168167816632.jpg', 1, '2023-04-16 14:49:26', '2023-04-16 14:49:26'),
(20, 1, '168168095261.jpg', 0, '2023-04-16 15:35:52', '2023-04-17 04:52:45'),
(24, 11, '168176011966.jpg', 1, '2023-04-17 13:35:19', '2023-04-17 13:35:19'),
(25, 11, '168176011961.jpg', 1, '2023-04-17 13:35:19', '2023-04-17 13:35:19'),
(26, 12, '168180566991.jpg', 1, '2023-04-18 13:14:29', '2023-04-18 13:14:29'),
(27, 12, '168180566966.png', 1, '2023-04-18 13:14:29', '2023-04-18 13:14:29'),
(28, 12, '168180566915.png', 1, '2023-04-18 13:14:29', '2023-04-18 13:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `image_categories`
--

CREATE TABLE `image_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `serial`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'General images', 1, '2023-04-17 13:31:01', '2023-04-18 14:43:55'),
(2, 2, 'TMP Manufacturing Images', 1, '2023-04-17 07:54:45', '2023-04-18 14:44:12'),
(3, 3, 'TMP Images', 1, '2023-04-16 13:05:38', '2023-04-18 14:44:25'),
(12, 4, 'Project Album #1', 1, '2023-04-18 13:12:50', '2023-04-18 14:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_25_210405_create_links_table', 1),
(6, '2023_01_29_194205_create_socials_table', 1),
(7, '2023_01_29_202327_create_teams_table', 1),
(8, '2023_02_03_173721_create_partners_table', 1),
(9, '2023_02_08_222825_create_services_table', 1),
(10, '2023_03_11_175500_create_equipment_cards_table', 1),
(11, '2023_03_11_183127_create_solutions_table', 1),
(12, '2023_03_11_193644_create_services_table', 2),
(13, '2023_03_15_213754_create_videos_table', 3),
(14, '2023_03_15_220047_create_pages_table', 4),
(15, '2023_03_15_233323_create_award_certificates_table', 5),
(16, '2023_03_17_140032_create_blogs_table', 6),
(17, '2023_03_24_215204_create_timelines_table', 7),
(18, '2023_03_25_092441_create_images_table', 8),
(19, '2023_04_05_174011_create_galleries_table', 9),
(20, '2023_04_16_184052_create_image_categories_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `serial`, `image`, `name`, `description_one`, `description_two`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1679940340.jpg', 'About', '<h2><span style=\"color:#c0392b\"><strong><span style=\"font-size:28px\">Why TMP Manufacturing?</span></strong></span></h2>\r\n\r\n<p>Established in 2015, TMP Manufacturing specialises in prototype, low volume and end of life component manufacture / assembly plus inventory management services.</p>\r\n\r\n<p>Our manufacturing and inventory management solutions are efficient, flexible, innovative, and financially stable. Whether high or low volume manufacture or assembly, production or aftermarket parts, current or end-of-life, TMP Manufacturing can assist your business.</p>', '<h2><strong><span style=\"color:#c0392b\"><span style=\"font-size:28px\">Manufacturing Services</span></span></strong></h2>\r\n\r\n<p>TMP Manufacturing was established to support the Automotive sector; however, our skill set can be applied across multiple sectors.</p>\r\n\r\n<p>Currently we are supporting Ford Motor Company, Jaguar Land Rover, Aston Martin and the London Taxi Company.</p>\r\n\r\n<p>Our engineering background enables us to come up with low cost and innovative manufacturing techniques and production solutions, for both old and new products.</p>\r\n\r\n<p>Combining the design, engineering and toolmaking expertise of Total Metal Products, our Partner company within the TMP Group, with the custom production manufacturing and supply chain management skills of TMP Manufacturing, housed in their dedicated facilities on the same site, we are confident that we can provide you with a manufacturing service which is innovative, customer focused and most importantly cost effective.</p>\r\n\r\n<p>Our in-house skill sets, and production services include:</p>\r\n\r\n<ul>\r\n	<li>Low volume all time runs</li>\r\n	<li>Supplier insolvency support</li>\r\n	<li>Resourcing assemblies</li>\r\n	<li>Service kit production</li>\r\n	<li>Stretch bending / forming</li>\r\n	<li>Sub-assembly production from customer provided components / production machinery</li>\r\n	<li>Bonded storage for bailment stock components</li>\r\n	<li>Supply chain services</li>\r\n	<li>Roll forming</li>\r\n	<li>Laser welding of plastics</li>\r\n	<li>Customer specified packing</li>\r\n	<li>Scheduled delivery services</li>\r\n</ul>', 'About', 1, '2023-03-15 17:00:49', '2023-03-27 12:05:40'),
(2, 2, '1679940432.png', 'Accreditations', '<h2><span style=\"color:#c0392b\"><span style=\"font-size:28px\"><strong>Internationally Recognised Accreditations</strong></span></span></h2>\r\n\r\n<p>TMP Manufacturing as part of the TMP Group of companies, along with Total Metal Products has implemented a suite of internationally recognised ISO accreditations.</p>\r\n\r\n<p>Through achieving these accreditations, the TMP Group of companies, are able to demonstrate our commitment to continually improve our working methods and services offered to our stakeholders.</p>', '<h3><strong><span style=\"color:#c0392b\"><span style=\"font-size:18px\">ISO 9001: 2015</span></span></strong></h3>\r\n\r\n<p>Customer satisfaction is key to our business success and growth, we seek to continually improve our customer experience. Our accredited Quality Management System (QMS) supports our customer centred approach.</p>\r\n\r\n<p>Through monitoring and feedback, we ensure that we adapt to meet your needs and expectations.</p>\r\n\r\n<h3><strong><span style=\"color:#c0392b\"><span style=\"font-size:18px\">ISO 14001: 2015</span></span></strong></h3>\r\n\r\n<p>Our Environmental Management System (EMS) confirms our compliance with environmental legislation and demonstrates our commitment to responsible corporate citizenship.</p>\r\n\r\n<p>Our aim is to improve sustainability through partnership with our stakeholders to optimise the use of resources and improved management of any waste.</p>\r\n\r\n<h3><strong><span style=\"color:#c0392b\"><span style=\"font-size:18px\">ISO 45001: 2018</span></span></strong></h3>\r\n\r\n<p>ISO 45001: 2018 is the world&rsquo;s international standard for occupational health and safety (OH&amp;S), issued to protect employees and visitors from work-related accidents and diseases. Our OH&amp;S system has been developed to mitigate any factors that can cause employees and businesses irreparable harm.</p>\r\n\r\n<p>Our aim is to provide the safest working environment possible for our staff, contractors and visitors.</p>', 'Accreditations', 1, '2023-03-15 17:00:49', '2023-03-27 12:07:12'),
(3, 3, '1679940547.png', 'Global Reach', '<h2><span style=\"color:#c0392b;font-size:28px;\"><strong>TMP Manufacturing Global Reach</strong></span></h2><p>TMP has business development, project management, engineering and marketing in each territory to ensure that our customers, old and new, have access to a local contact via a local contact number.</p>', '<p>TMP are committed to expand its operations, establishing a presence in each new territory as we deliver new business.</p><p>By the end of 2022 TMP established a sales, support, and project management operation in Turkey which supports both our in-country and regional customers.</p><p>In 2023 TMP set up a sales, support and project management operation in the United States to support our expanding North American customer base.</p><h3><strong>Key Contact Details:</strong></h3><h3><span style=\"color:#c0392b;font-size:20px;\"><strong>Europe</strong></span></h3><p>Steve Richards<br><a href=\"mailto:SteveRichards@totalmetalproducts.com\">SteveRichards@totalmetalproducts.com</a><br>+44 1594 543222</p><h3><span style=\"color:#c0392b;font-size:20px;\"><strong>Middle East&nbsp;&nbsp;</strong></span></h3><p>Ertan Tamer<br><a href=\"mailto:ErtanTamer@totalmetalproducts.com\">ErtanTamer@totalmetalproducts.com</a><br>+90 532 564 2946</p><h3><span style=\"color:#c0392b;font-size:20px;\"><strong>North America&nbsp;</strong></span></h3><p>Greg Filipek<br><a href=\"mailto:GregFilipek@totalmetalproducts.com\">GregFilipek@totalmetalproducts.com</a><br>+1 800 690 1027</p>', 'global-reach', 1, '2023-03-27 12:09:07', '2023-04-18 15:07:40'),
(4, 4, '1679940626.jpg', 'Corporate Social Responsibility', '<h2><span style=\"color:#c0392b\"><strong><span style=\"font-size:28px\">Corporate Social Responsibility Policy</span></strong></span></h2>\r\n\r\n<p>We recognise that the delivery of our services has a direct impact on the environment, communities affected by our business activities and our employees. We have a responsibility to be a good neighbour, a good employer and a responsible consumer of resources.&nbsp;Our Corporate Social Responsibility (CSR) policy statement sets out our commitment and responsibility.</p>\r\n\r\n<p>We undertake to contribute to our community and mitigate our impact on the environment, operating our business in a manner that is both sensitive and responsible with proper regard for our legal obligations, directives, regulations and codes of practice.</p>', '<p><strong><span style=\"font-size:18px\">A copy of TMP Groups&nbsp;Corporate Social Responsibility (CSR) Policy Statement can be provided on request</span></strong></p>', 'Corporate-Social-Responsibility', 1, '2023-03-27 12:10:26', '2023-03-27 12:10:26'),
(5, 5, '1679940757.gif', 'Total Metal Products', '<p>Established in 2010 Total Metal Products Ltd (TMP) are a sector leading machine design and tool making company.</p><p>Based from our purpose-built premises in South Gloucestershire, close to the M5 &amp; M4 motorways and a number of major airports, TMP has grown into a toolmaking design, manufacturing and production business with a turnover in excess of £5m per annum.</p><p>Our in-house teams have an extensive knowledge of and experience in Stretch Forming, Stretch Bending, Roll Forming, Welding Jigs, Assembly Jigs, Metal Punching, Metal Piercing, Tool Making Design, Tool Room production services and Manufacturing Services.</p><p>At our core are our staff. We are proud of our team of very highly skilled personnel, who have many years expertise in design, toolmaking, manufacturing process design, machine manufacture, system build, commission and after sales service.</p><p>One of our key business objectives is to keep our toolroom assets up to date with the latest technologies. For over 10 years TMP has invested heavily into our toolroom.</p>', '<h2><span style=\"color:#c0392b;font-size:28px;\"><strong>CNC Machines</strong></span></h2><p>Our current toolroom consists of the following CNC machines, which are all fitted with Renishaw tool and spindle probes:</p><p>Haas UMC 750 - full simultaneous 5-Axis CNC machining centre</p><ul><li>Mazak QT250MY - CNC turning centre with live tooling turning / milling</li><li>Haas VM-3 – high-performance VMC with 4-Axis</li><li>Haas VF-9/40 – large capacity VMC with 4-Axis</li><li>Haas VF-4SS - high-performance Super-Speed VMC</li><li>Haas VF-4 – 3-Axis VMC</li></ul><p>Our CNC machines are supported by a comprehensive range of automated and manual tool room equipment.</p><p>TMP Manufacturing has a continual commitment to invest in our toolroom assets, expanding our team of qualified and experienced tool makers, as well as promoting our apprenticeship program.</p><h2><span style=\"color:#c0392b;\">Tooling</span></h2><p>Our ‘in-house’ tool design, tool manufacture and build areas, and industry experienced project management team, allow us to control projects very tightly and we are able to react quickly and effectively to customer requirements, changes in specification, modifications etc.</p><p>Our extensive tooling design and toolmaking across multiple sectors enables us to come up with solutions from basic concepts to innovative high end production solutions. Through our associated engineering services team, we can also assess feasibility of customer produced component designs, both speeding up product development and also reducing tooling costs.</p><p>Via our Group company, TMP Manufacturing, we can provide a full range prototype services and provide a lower cost low volume production service.</p><p>We have extensive market experience in the UK, Europe, North America, Turkey and China.<br><br>For more information please visit <a href=\"www.totalmetalproducts.com\">www.totalmetalproducts.com</a></p>', 'total-metal-products', 1, '2023-03-27 12:12:37', '2023-04-18 14:53:16'),
(6, 6, '1679940838.jpg', 'Compliance Information', '<h2><span style=\"color:#c0392b\"><span style=\"font-size:28px\">Compliance Management System</span></span></h2>\r\n\r\n<p>TMP Manufacturing and Total Metal Products, companies with the TMP Group, place great value on dealing responsibly and fairly with:</p>\r\n\r\n<ul>\r\n	<li>our customers</li>\r\n	<li>suppliers</li>\r\n	<li>employees</li>\r\n	<li>our business partners</li>\r\n</ul>\r\n\r\n<p>We have introduced a Compliance Management System (CMS) within the TMP Group companies to support our objective to ensure that all our employees and business representatives, conduct business morally, ethically and legally.</p>\r\n\r\n<p>We have implemented a Code of Conduct, which applies to both TMP Group companies and where appropriate our business partners, and a series of supporting policies which form the core of our Compliance Management System.</p>', '<p><strong><span style=\"font-size:18px\">A copy of our Employee Code of Conduct is available on request.</span></strong></p>', 'Compliance-Information', 1, '2023-03-27 12:13:58', '2023-03-27 12:13:58'),
(7, 7, '1679940964.png', 'The Future at TMP', '<h2><span style=\"color:#c0392b;font-size:28px;\"><strong>At TMP We Continually Reinvest in the Business</strong></span></h2><p>TMP Group continues to demonstrate its commitment to continually reinvest in the business and reduce its environmental impact, with the recent installation of an additional 22 kWp solar system; our solar farm now produces in excess of 86 kW of AC power.</p><p>By producing clean energy, we have reduced our greenhouse gas emissions that contribute to climate change. At the same time, producing clean energy allows TMP Group to increase its energy security and reduce the energy costs for our administration and manufacturing operations, significantly reducing our environmental impact.</p>', '<h2><span style=\"color:#c0392b;font-size:28px;\"><strong>Continued Investment</strong></span></h2><p>Unit 1 was purchased in 2021 to provide a dedicated TMP Manufacturing facility with over 400sqm of production, warehousing and administration space to accommodate our expansion needs.</p><p>With operations in North America (USA) and the Middle East (Turkey), we have invested in an experienced team and supporting infrastructure to provide sales, project management, production and service to our customers in those regions.</p><p>We continue to invest in our infrastructure, machinery, systems&nbsp;and employee development. As well as the new premises and new business operations, we continue to invest into the UK and have added staff across our operations, including design, project management, toolmakers, administrative and production team members.</p>', 'the-future-at-tmp', 1, '2023-03-27 12:16:04', '2023-04-18 15:11:17'),
(8, 8, '1681934772.jpg', 'www.tmpmanufacturing.com', '<p>Write a description</p>', '<p>Write a description</p>', 'wwwtmpmanufacturingcom', 0, '2023-04-20 01:06:12', '2023-04-20 01:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `link` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ford FCSD', '1679938154.svg', NULL, 1, '2023-03-11 13:04:50', '2023-03-27 11:29:14'),
(2, 'Land Rover', '1679938210.svg', NULL, 1, '2023-03-11 13:05:02', '2023-03-27 11:30:10'),
(3, 'Aston Martin', '1679938221.svg', NULL, 1, '2023-03-11 13:05:17', '2023-03-27 11:30:21'),
(4, 'Gestamp', '1679938230.jpg', NULL, 1, '2023-03-11 13:06:13', '2023-03-27 11:30:30'),
(5, 'LEVC', '1679938245.svg', NULL, 1, '2023-03-11 13:06:35', '2023-03-27 11:30:45'),
(6, 'Jaguar', '1679938370.svg', NULL, 1, '2023-03-11 13:06:58', '2023-03-27 11:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `type_id` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description_one`, `description_two`, `slug`, `status`, `type_id`, `created_at`, `updated_at`) VALUES
(1, '1679938519.jpg', 'Kitting Services', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our kitting services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing has the supply chain control and inhouse expertise to handle low &ndash; medium volume kitting of service style kits, we have expertise in handling these services from a low volume (less than 100 kits PA) through to 100,000 kits per annum.<br />\r\n<br />\r\nOur assembly and supply chain management combined with our logistical controls, means we can ship worldwide.<br />\r\n<br />\r\nWe have comprehensive inhouse stock and process controls and are comfortable handling an international supply chain to bring all this together for a global customer base.</span></span></p>', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">What are kitting services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Kitting is a cost-effective way of providing customers with the items they need in one package. It is&nbsp;the process of assembling related materials into a single package or kit. It is used by businesses to save time and money by grouping components together in one package, eliminating the need for multiple orders and shipments. Kitting can be used for material kitting, product kitting, and service part kitting.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Kitting has become an increasingly popular option for businesses of all sizes as it offers numerous advantages such as reduced inventory costs, improved customer satisfaction, and increased efficiency. With kitting, companies can provide their customers with everything they need in one package, making it easier for them to get what they need quickly and easily.</span></span></p>\r\n\r\n<h1><span style=\"font-size:20px\"><span style=\"color:#c0392b\">If your organisation has material or kitting requirements, please do not hesitate to contact us.</span></span></h1>', 'kitting-services', 1, 1, '2023-03-11 14:23:52', '2023-03-30 14:57:04'),
(2, '1678566232.jpg', 'Demo One', '<p>TMP prides itself on quality and project delivery. All tooling is made to your specification using a combination of time proven, and cutting-edge techniques. Our toolmakers are trained in traditional tool making methods to ensure a solid grounding and progress to the latest manufacturing disciplines. We believe that this ethos of respecting traditional craftsmanship, as well as embracing new exciting technologies, makes our tooling robust, accurate, efficient and innovative.</p>\r\n\r\n<p>We have extensive experience when it comes to automotive tooling and we supply the automotive industry with a large range of products through the use of stretch bending and stretch forming tools, from single op, low volume, try-out tools to complex progression tooling. By working with several Tier 1 automotive manufacturers, we are confident in our ability to produce the results you require and solve the problems you may encounter.</p>\r\n\r\n<p>The manufacture of precision tooling is carried out using the latest CNC machinery within our comprehensive machine shop.</p>\r\n\r\n<p>We can produce a single machine to meet a particular production need, or a complete production line to suit an application or customer requirement.</p>', '<p>Toolmaking is the making precision tools that are used in manufacturing to create products and parts.</p>\r\n\r\n<p>Common tooling includes metal forming rolls, metal punching / piercing tools, fixtures, jigs or even whole machine tools used to manufacture, hold, and / or test products during their fabrication.</p>\r\n\r\n<p>Due to the unique nature of a tool maker&#39;s work, it is often necessary to fabricate custom tools or modify standard tools.</p>', 'Demo-One', 0, 2, '2023-03-11 14:23:52', '2023-03-27 12:33:14'),
(3, '1678566232.jpg', 'Demo Two', '<p>TMP prides itself on quality and project delivery. All tooling is made to your specification using a combination of time proven, and cutting-edge techniques. Our toolmakers are trained in traditional tool making methods to ensure a solid grounding and progress to the latest manufacturing disciplines. We believe that this ethos of respecting traditional craftsmanship, as well as embracing new exciting technologies, makes our tooling robust, accurate, efficient and innovative.</p>\r\n\r\n<p>We have extensive experience when it comes to automotive tooling and we supply the automotive industry with a large range of products through the use of stretch bending and stretch forming tools, from single op, low volume, try-out tools to complex progression tooling. By working with several Tier 1 automotive manufacturers, we are confident in our ability to produce the results you require and solve the problems you may encounter.</p>\r\n\r\n<p>The manufacture of precision tooling is carried out using the latest CNC machinery within our comprehensive machine shop.</p>\r\n\r\n<p>We can produce a single machine to meet a particular production need, or a complete production line to suit an application or customer requirement.</p>', '<p>Toolmaking is the making precision tools that are used in manufacturing to create products and parts.</p>\r\n\r\n<p>Common tooling includes metal forming rolls, metal punching / piercing tools, fixtures, jigs or even whole machine tools used to manufacture, hold, and / or test products during their fabrication.</p>\r\n\r\n<p>Due to the unique nature of a tool maker&#39;s work, it is often necessary to fabricate custom tools or modify standard tools.</p>', 'Demo-Two', 0, 3, '2023-03-11 14:23:52', '2023-03-27 12:33:17'),
(4, '1680171731.png', 'After Sales Parts', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our After Sales Parts Services</span></span><br />\r\n<br />\r\n<span style=\"color:#000000\"><span style=\"font-size:16px\">If you are a brand owner and you are looking for an after sales/after sales partner because:</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you have a supplier who is at risk or has become insolvent;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want an additional supplier to protect / bolster your supply chain;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want an in-country supplier to reduce your resupply time or reduce cross border cost / administration;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to produce a service kit from a number of individual service parts;</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to produce a low volume / all time run; or</span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:16px\">you want to resource parts from former suppliers who have have ceased trading</span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing can provide you with a service partner who can eliminate your challenge and support your after sales network.&nbsp;</span></span></p>', '<p><span style=\"font-size:36px\"><span style=\"color:#c0392b\">How can we support your After Sales Parts requirements?</span></span><br />\r\n<span style=\"font-size:16px\"><span style=\"color:#000000\">At TMP Manufacturing we have the experience and expertise to meet your after sales part needs.&nbsp;<br />\r\n<br />\r\nAs highlighted in our </span><a href=\"https://tmp.nahidhtamim.top/blogs\"><span style=\"color:#000000\">News / Blog page</span></a><span style=\"color:#000000\">&nbsp;we have worked with a number of brand owners to supply after sales parts to their business network.&nbsp;<br />\r\n<br />\r\nWith comprehensive in-house stock control processes, we are comfortable handling an international supply chain to bring all this together for our customer base. And&nbsp;</span></span><span style=\"font-size:16px\"><span style=\"color:#000000\">combined&nbsp;with our logistical controls we can ship worldwide.</span></span></p>\r\n\r\n<p><strong><span style=\"font-size:20px\"><span style=\"color:#c0392b\">If your organisation has any after sale parts requirements, please do not hesitate to contact us.</span></span></strong><br />\r\n&nbsp;</p>', 'after-sales-parts', 1, 1, '2023-03-11 14:23:52', '2023-03-30 16:07:38'),
(5, '1678566232.jpg', 'Demo One Two', '<p>TMP prides itself on quality and project delivery. All tooling is made to your specification using a combination of time proven, and cutting-edge techniques. Our toolmakers are trained in traditional tool making methods to ensure a solid grounding and progress to the latest manufacturing disciplines. We believe that this ethos of respecting traditional craftsmanship, as well as embracing new exciting technologies, makes our tooling robust, accurate, efficient and innovative.</p>\r\n\r\n<p>We have extensive experience when it comes to automotive tooling and we supply the automotive industry with a large range of products through the use of stretch bending and stretch forming tools, from single op, low volume, try-out tools to complex progression tooling. By working with several Tier 1 automotive manufacturers, we are confident in our ability to produce the results you require and solve the problems you may encounter.</p>\r\n\r\n<p>The manufacture of precision tooling is carried out using the latest CNC machinery within our comprehensive machine shop.</p>\r\n\r\n<p>We can produce a single machine to meet a particular production need, or a complete production line to suit an application or customer requirement.</p>', '<p>Toolmaking is the making precision tools that are used in manufacturing to create products and parts.</p>\r\n\r\n<p>Common tooling includes metal forming rolls, metal punching / piercing tools, fixtures, jigs or even whole machine tools used to manufacture, hold, and / or test products during their fabrication.</p>\r\n\r\n<p>Due to the unique nature of a tool maker&#39;s work, it is often necessary to fabricate custom tools or modify standard tools.</p>', 'Demo-One-Two', 0, 2, '2023-03-11 14:23:52', '2023-03-27 12:33:21'),
(6, '1678566232.jpg', 'Demo Two Three', '<p>TMP prides itself on quality and project delivery. All tooling is made to your specification using a combination of time proven, and cutting-edge techniques. Our toolmakers are trained in traditional tool making methods to ensure a solid grounding and progress to the latest manufacturing disciplines. We believe that this ethos of respecting traditional craftsmanship, as well as embracing new exciting technologies, makes our tooling robust, accurate, efficient and innovative.</p>\r\n\r\n<p>We have extensive experience when it comes to automotive tooling and we supply the automotive industry with a large range of products through the use of stretch bending and stretch forming tools, from single op, low volume, try-out tools to complex progression tooling. By working with several Tier 1 automotive manufacturers, we are confident in our ability to produce the results you require and solve the problems you may encounter.</p>\r\n\r\n<p>The manufacture of precision tooling is carried out using the latest CNC machinery within our comprehensive machine shop.</p>\r\n\r\n<p>We can produce a single machine to meet a particular production need, or a complete production line to suit an application or customer requirement.</p>', '<p>Toolmaking is the making precision tools that are used in manufacturing to create products and parts.</p>\r\n\r\n<p>Common tooling includes metal forming rolls, metal punching / piercing tools, fixtures, jigs or even whole machine tools used to manufacture, hold, and / or test products during their fabrication.</p>\r\n\r\n<p>Due to the unique nature of a tool maker&#39;s work, it is often necessary to fabricate custom tools or modify standard tools.</p>', 'Demo-Two-Three', 0, 3, '2023-03-11 14:23:52', '2023-03-27 11:38:36'),
(7, '1679938767.png', 'Gary Burley', '<p>Gary is a really nice man</p>', NULL, 'Gary-Burley', 0, 3, '2023-03-27 11:39:27', '2023-03-27 11:39:43'),
(8, '1680171419.png', 'Aftermarket Parts', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our Aftermarket Parts Services</span></span><br />\r\n<br />\r\n<span style=\"font-size:16px\"><span style=\"color:#000000\">TMP Manufacturing have roll forming and stretch bending expertise within our portfolio of skills and capacity.<br />\r\n<br />\r\nWe can manufacture goods such as side step finishers, roof racks, dog guard systems, bike carriers.<br />\r\n<br />\r\nWe can handle low to medium volume, either fully packaged or shipped into customer base for further added value work.</span></span></p>', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">How can we support your Aftermarket Parts requirements?</span></span><br />\r\n<span style=\"color:#000000\"><span style=\"font-size:16px\">At TMP Manufacturing we pride ourselves on quality and project delivery.<br />\r\n<br />\r\nOur dedicated design team will work with you to define your end product requirements, identify material specification, finishes and any post production added value services.&nbsp;All our production and assembly tooling is made to your specification using a combination of time proven, and cutting-edge techniques.<br />\r\n<br />\r\nOur project team will work with you to define any timing cycles, specialist services, packaging and delivery requirements.<br />\r\n<br />\r\nOur toolmaking team have extensive experience when it comes to manufacturing and building production tooling, assembly jigs, fixtures and assembly cells. We supply to the automotive, architectural and assembly sectors which provides us with the experience to develop the most effective production methods for your aftermarket part requirements; our inhouse experience includes&nbsp;stretch bending, stretch forming tools, roll forming.</span></span><br />\r\n<br />\r\n<span style=\"color:#c0392b\"><span style=\"font-size:20px\">If your organisation has aftermarket part requirements, please do not hesitate to contact us.</span></span></p>', 'aftermarket-parts', 1, 1, '2023-03-27 11:40:10', '2023-03-30 15:20:51'),
(9, '1679938883.png', 'Low volume production', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our low volume production services</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing specialise in the production of low volume components, either through reverse engineering, CNC manufacture, remanufacture using resourced components, or using special purpose equipment.&nbsp;&nbsp;<br />\r\n<br />\r\nOur group partner company, Total Metal Products, is a special purpose machine tool manufacturer &ndash; operating from the neighbouring business unit. This brings the advantage of direct &amp; immediate access to PLC or Hydraulic experts when we are running older equipment that may be taken over when rehoming projects with us.&nbsp;<br />\r\n<br />\r\nTMP Manufacturing&#39;s&nbsp;low volume production services are an excellent way of keeping your overheads low and your product quality high, especially when producing low volume or custom products. No matter what you are producing, TMP Manufacturing are a high quality, high reliability manufacturing partner who will reduce / alleviate your production burdens.</span></span></p>', '<p><span style=\"font-size:36px\"><span style=\"color:#c0392b\">Why use TMP Manufacturing&#39;s services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">As your trusted manufacturer, our engineers will work with your drawings and documentation to manufacture your products from start to finish reducing your production burden. Alternatively, via our in-house design &amp; manufacture services, we can produce drawings and manufacturing documentation in partnership with you, prior to commencing production.<br />\r\n<br />\r\nRationalising your direct workforce, reducing your on-site space and equipment by partnering with TMP Manufacturing, as your low volume production part manufacturer, your company can reduce / eliminate many of the overhead costs of running your business.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">A partnership with TMP Manufacturing will reduce your operational expenditure (opex) and increase your profitability. We provide you with the following business benefits:</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Resource Savings / Reduced Labour</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Moving your low volume production to TMP Manufacturing allows&nbsp;you to redirect or rationalise your direct labour force, reducing your direct labour&nbsp;costs.</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Reduced Operations Costs</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Partnering with TMP Manufacturing will allow you to dedicate your valuable production and storage areas to your higher volume / regular products.</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Faster Turnaround time</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing keeps your production systems &quot;warm&quot; and ready for production, saving you valuable time setting up for short production runs.</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Scalability</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">We are a business set-up to provide small and medium batch volumes allowing you to concentrate on the higher production volumes.</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Ideal for Start-ups and Small Businesses</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">With no requirement to invest in production space, or experienced machinists etc. as a start-up or small business you can cost effectively produce low volume runs transform your ideas to tangible products with significantly reduced investment.</span></span></p>\r\n\r\n<p><strong><span style=\"color:#000000\"><span style=\"font-size:16px\">Fixed costs</span></span></strong></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing can provide you with a fixed cost per product model.</span></span></p>', 'low-volume-production', 1, 1, '2023-03-27 11:41:23', '2023-03-30 18:16:11'),
(10, '1680183514.png', 'Prototyping', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">Our Prototype services?</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Our prototype service is designed to save you cost and time.<br />\r\n<br />\r\nTMP Manufacturing&#39;s prototyping service reduces total project cost, shortens overall project time and provides a cost-effective solution for low volume production, pre-series or end-of-life requirements.</span></span></p>', '<p><span style=\"color:#c0392b\"><span style=\"font-size:36px\">How can we support your prototype requirements?</span></span><br />\r\n<span style=\"color:#000000\"><span style=\"font-size:16px\">TMP Manufacturing has the in-house capability to design, manufacture and build one-offs, or the prototype or production tooling, assembly jigs &amp; fixtures and / or assembly cells required to produce your low volume, pre-production parts.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Our teams are integrated&nbsp;to provide a prototyping service from within one building, where changes to design specification, material requirement, manufacturing &amp; assembly processes etc, can rapidly and cost-effectively be made. This &ldquo;under one roof&rdquo; service can significantly foreshorten your project timetable and maximise project cost effectiveness.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">Our prototyping service helps you significantly reduce the timeline from initial product requirement to implementation and production, at the same time reducing your costs.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\">TMP&#39;s prototyping service is also used by customers fulfill their low volume production requirements.</span></span></p>', 'prototyping', 1, 1, '2023-03-27 11:42:06', '2023-03-30 19:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Consult', '1681808012.png', 1, '2023-03-11 12:57:46', '2023-04-18 14:11:29'),
(2, 'Design', '1681808030.png', 1, '2023-03-11 12:58:26', '2023-04-18 13:53:50'),
(3, 'Manufacture', '1681808046.png', 1, '2023-03-11 12:58:41', '2023-04-18 13:54:06'),
(4, 'Supply Chain Management', '1681808063.png', 1, '2023-03-11 12:58:54', '2023-04-18 13:54:23'),
(5, 'Automate', '1681808080.png', 1, '2023-03-11 12:59:31', '2023-04-18 13:54:40'),
(6, 'Protype Design', '1681808097.png', 1, '2023-03-11 13:01:49', '2023-04-18 13:54:57'),
(7, 'Prototyping', '1681935257.png', 1, '2023-04-20 01:14:17', '2023-04-20 01:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `timelines`
--

CREATE TABLE `timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`id`, `serial`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2010', 'Total Metal Products formed in May 2010', 1, '2023-03-24 16:50:38', '2023-03-24 16:50:38'),
(2, 2, '2011', 'Total Metal Products moves into its own dedicated workshop (leasehold property)', 1, '2023-03-24 16:51:17', '2023-03-24 16:51:17'),
(3, 3, '2012', 'Invested in our first CNC Mill', 1, '2023-03-24 17:27:25', '2023-03-24 17:27:25'),
(4, 4, '2013', 'Investment into a second mill and a CNC lathe', 1, '2023-03-24 17:27:45', '2023-03-24 17:27:45'),
(5, 5, '2014', 'Invested in a new Haas VF9 Milling machine c/w 4th Axis', 1, '2023-03-24 17:28:04', '2023-03-24 17:28:04'),
(6, 6, '2015', '<p>TMP Manufacturing formed<br />\r\nWinners of the Monmouthshire Business Awards 2015</p>\r\n\r\n<p>&ldquo;Company Demonstrating Sustained Growth&rdquo;<br />\r\nTotal Metal Products completed a large R&amp;D Project</p>', 1, '2023-03-27 12:22:51', '2023-03-29 00:03:28'),
(7, 7, '2016', 'TMP Group formed\r\nMoved into current premises\r\nBuilding extended to create a \r\ndedicated manufacturing are', 1, '2023-03-27 12:23:12', '2023-03-27 12:23:12'),
(8, 8, '2017', 'Investment into EDM Wire \r\nCutting technology\r\n.Winners of The Forester \r\nBusiness Awards 2017 -\r\n\"Business of the Year\"', 1, '2023-03-27 12:23:31', '2023-03-27 12:23:31'),
(9, 9, '2018', 'Unit 1 purchased to future proof and \r\nfacilitate business expansion. \r\nTMP wins ‘Company of the Year’ at Forest of \r\nDean and Wye Valley Business Awards.\r\nPurchased a MAZAK CNC lathe', 1, '2023-03-27 12:23:47', '2023-03-27 12:23:47'),
(10, 10, '2019', '<p>HAAS UMC-750 5-Axis &amp; VF-4 VMC CNC purchased<br />\r\nWinners of the Forest of Dean &amp; Wye Valley Business Awards &ldquo;Business of the Year&rdquo;<br />\r\nTMP Manufacturing relocates to Unit 1<br />\r\nISO 45001:2018 accredited</p>', 1, '2023-03-27 12:24:04', '2023-03-29 12:27:45'),
(11, 11, '2020', 'Invested in a 10’ span FARO Arm CMM with \r\nfull faro software, new Haas VM-3 highperformance VMC and 2nd Panther pressing station.\r\nISO 9001:2015 and ISO 14001:2015 accredited.', 1, '2023-03-27 12:24:25', '2023-03-27 12:24:25'),
(12, 12, '2021', 'TMP Group invests in a 66.60 kWp solar farm.', 1, '2023-03-27 12:24:43', '2023-03-27 12:24:43'),
(13, 13, '2022', '<p>TMP Manufacturing installs an additional 22 kWp solar farm.<br>Total Metal Products revised website launched.</p>', 1, '2023-03-27 12:25:04', '2023-04-18 14:41:49'),
(14, 14, '2023', 'TMP Manufacturing website launched', 1, '2023-03-28 12:57:43', '2023-03-28 12:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$D1IMwLbzT2w3BxqtgSz5H.s1c91U2NjGeRiSlq8Ts7zFbuS4vCczW', 1, NULL, '2023-03-11 12:53:16', '2023-03-11 12:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `created_at`, `updated_at`) VALUES
(1, '1678922030.mp4', '2023-03-15 17:13:50', '2023-03-15 17:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award_certificates`
--
ALTER TABLE `award_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `equipment_cards`
--
ALTER TABLE `equipment_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_categories`
--
ALTER TABLE `image_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `award_certificates`
--
ALTER TABLE `award_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipment_cards`
--
ALTER TABLE `equipment_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `image_categories`
--
ALTER TABLE `image_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
