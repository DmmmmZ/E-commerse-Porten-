-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Жов 24 2023 р., 22:22
-- Версія сервера: 10.4.24-MariaDB
-- Версія PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `watchshopdb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ut veniam', 'ut-veniam', '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(2, 'incidunt eum', 'incidunt-eum', '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(3, 'eius quo', 'eius-quo', '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(4, 'repellendus quo', 'repellendus-quo', '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(5, 'ut deleniti', 'ut-deleniti', '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(6, 'fugit voluptatem', 'fugit-voluptatem', '2023-08-22 14:31:02', '2023-08-22 14:31:02');

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
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
-- Структура таблиці `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `sub_title`, `offer`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'It has survived', 'It has survived not only five centuries', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s', 'http://localhost/php/portfolio/Watchshop/public/shop', '1697128512.png', 1, '2023-10-12 12:59:47', '2023-10-12 13:35:12'),
(2, 'Whether article spirits ', 'Whether article spirits new her covered ', 'Whether article spirits new her covered hastily sitting her', 'http://localhost/php/portfolio/Watchshop/public/shop', '1697128501.png', 1, '2023-10-12 13:00:07', '2023-10-12 13:36:10'),
(3, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'http://localhost/php/portfolio/Watchshop/public/shop', '1697129388.png', 1, '2023-10-12 13:00:22', '2023-10-12 13:49:48'),
(4, 'Dissuade ecstatic ', 'Dissuade ecstatic and properly saw ', 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor', 'http://localhost/php/portfolio/Watchshop/public/shop', '1697128475.png', 1, '2023-10-12 13:00:35', '2023-10-12 13:35:42');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_05_171401_create_categories_table', 1),
(6, '2023_08_05_171423_create_products_table', 1),
(7, '2023_08_15_151820_create_home_sliders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'excepturi ipsam', 'excepturi-ipsam-ut-quidem-ut-aut', 'Placeat laborum et sunt reiciendis aut. Magni sunt ut officia a amet. Laudantium et aut rerum sint. Perspiciatis ut eum ut. Quo voluptas sed dignissimos eos. Odit autem veniam numquam maxime quo.', 'Consequatur facilis sed sit. Vel ullam qui earum aspernatur tenetur. Sed sed tempore quis doloribus molestias. Qui exercitationem nihil quis consequuntur et voluptatibus laborum illum. Culpa non maiores voluptas et qui. Aut repellendus in est praesentium nulla nesciunt. Molestias et minima et et. Autem eos sed similique aut provident. Placeat nulla odit quas blanditiis. Explicabo possimus praesentium facilis eos nisi dignissimos voluptate earum. Veniam voluptas eos numquam ducimus.', '140.00', NULL, 'PRD395', 'instock', 0, 12, '1-1.jpg', NULL, 5, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(2, 'et et eos ', 'et-et-eos-error-voluptas-impedit', 'Officia animi cupiditate qui fugit voluptas repudiandae in. Saepe temporibus voluptatem pariatur totam praesentium est. Accusamus qui voluptatibus velit qui molestias rem eligendi.', 'A dolorem velit atque. Mollitia consequatur rem voluptas a dolorum. Et recusandae iusto error rerum quibusdam. Officiis qui rerum assumenda alias et velit vel. Molestiae et perspiciatis facilis tenetur. Error voluptatem quis dolorum ducimus. Et ea rem et nostrum fugit quaerat eum. Consectetur expedita sit laborum possimus optio quia mollitia.', '102.00', NULL, 'PRD361', 'instock', 0, 20, '1-2.jpg', NULL, 4, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(3, 'adipisci voluptate', 'adipisci-voluptate-odit-debitis-totam-labore', 'Modi reprehenderit facilis distinctio quo molestiae sit odit recusandae. Omnis iste incidunt earum.', 'Quae qui voluptatem aut illum. Atque qui suscipit non voluptate non aut quo nostrum. Necessitatibus eaque modi animi commodi natus optio iure. Molestiae neque accusamus quam et aut voluptas recusandae. Distinctio reiciendis odit consequatur enim est assumenda a. Minus rerum neque eligendi a temporibus numquam. Asperiores ipsa magnam magni occaecati ex. Non numquam ex et. Omnis voluptatem iste corrupti ullam vitae ipsa dolores. Officia est nulla et. Perspiciatis sint quis omnis quae est eum.', '380.00', NULL, 'PRD167', 'instock', 0, 43, '1-3.jpg', NULL, 5, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(4, 'quisquam ', 'quisquam-sit-et-quia-doloribus-quod', 'Doloremque aut voluptas molestias qui ipsum nulla labore blanditiis. Expedita voluptatem cupiditate nemo minus. Autem ut possimus molestiae fuga molestiae sit.', 'Quia natus qui hic facere labore laboriosam. Repellendus et explicabo nostrum quidem occaecati quam. Eveniet ratione accusamus modi esse minus dicta laudantium amet. Qui ea voluptatem soluta et dolor. Asperiores atque repellat quam culpa vel. Dolorem qui et earum et rerum ratione. Molestias excepturi dolores dicta occaecati asperiores numquam amet. Porro recusandae officia non omnis non tenetur. Est eos natus deserunt nesciunt.', '274.00', NULL, 'PRD376', 'instock', 0, 23, '1-4.jpg', NULL, 3, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(5, 'occaecati ', 'occaecati-tenetur-possimus-provident-cumque-et', 'Excepturi quod et et debitis vitae est iste. Ut facilis labore in dolores qui aliquid. Deleniti expedita consequatur cum nostrum optio totam itaque. Aut iure adipisci sunt reprehenderit odio sed.', 'Ab facere sapiente quam dolore eaque quaerat quo. Maxime explicabo illum voluptate eveniet fugit aliquam dolor sed. Tempora amet provident est nobis necessitatibus blanditiis. Error sit nihil unde placeat atque qui sunt. Magni fugiat neque dolorum omnis perspiciatis et fugiat. Et molestiae harum quis. Fugiat dolor similique nam ad consequatur impedit. Voluptas quas nesciunt velit harum numquam quidem. Eius est molestiae et architecto. Rerum possimus non eum explicabo.', '377.00', NULL, 'PRD472', 'instock', 0, 38, '1-5.jpg', NULL, 3, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(6, 'ut deleniti', 'ut-deleniti-odit-maiores-molestiae-dolorem', 'Modi suscipit iusto officia dicta eum impedit consequatur. Et aut voluptatem necessitatibus. Illum voluptates sed nihil et voluptas sunt eius ut. Autem distinctio labore et tempora molestias sit aut.', 'Molestiae tempora qui unde explicabo libero. Sed et sit totam et reiciendis. Minima dolorem voluptas exercitationem. Similique similique dicta provident optio ut. Et voluptatem dolorum iste. Aut aut magnam ipsum porro. Enim debitis quae autem qui quam sit. Aperiam corporis iusto distinctio possimus dolorem. Sed aut similique aut aut magni a omnis. Dignissimos aut at doloribus dolores ipsa molestias amet error.', '17.00', NULL, 'PRD278', 'instock', 0, 21, '1-6.jpg', NULL, 3, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(7, 'odio autem ', 'odio-autem-impedit-excepturi-molestiae-perferendis', 'Facere quo sapiente a. Rerum illum magni fugiat. Laboriosam aspernatur maxime totam magni voluptatibus. Aperiam doloremque aliquid vero illum animi fugiat dignissimos.', 'Provident aut nulla beatae corrupti cumque est et. Totam porro qui eos itaque. Rem voluptatem et mollitia magnam. Id dolor illo atque quasi eos aliquam. Ratione iste iure odio blanditiis quis ut. Consequatur molestias aut tenetur consequuntur dolores sit commodi. Doloribus eum ut tenetur reiciendis excepturi rerum. Dicta sed ut non. Sapiente perferendis sit repudiandae. Sit similique et eos cupiditate. Omnis minus commodi quia nam et perspiciatis.', '203.00', NULL, 'PRD114', 'instock', 0, 34, '1-7.jpg', NULL, 2, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(8, 'commodi distinct', 'commodi-distinctio-quo-et-minima-voluptatibus', 'Ut nostrum illum provident autem quis dicta repellat. Nostrum ipsam tempora praesentium maiores consequatur voluptatem.', 'Iste nam itaque magnam nihil doloribus sunt. Doloribus repellat voluptates nobis ut iste. Omnis non vero dolor aut. Iusto enim ratione autem dolores placeat. Eveniet enim eveniet et cum sit exercitationem. Impedit eum error reprehenderit dolor repudiandae non dolor. At ut hic voluptates dolorum nisi. Eum occaecati iste numquam ut animi.', '274.00', NULL, 'PRD148', 'instock', 0, 45, '1-8.jpg', NULL, 1, '2023-08-22 14:31:02', '2023-08-22 14:31:02'),
(9, 'facere', 'facere-sunt-et-quia-porro-odio', 'Amet qui sit possimus harum. Dolor architecto nihil excepturi nihil quam velit.', 'Laborum sint illo sed est. Non animi commodi dolores nobis magni. Recusandae perspiciatis quidem quod quis omnis et quod. A odit sunt dolores eos vel. Alias consequatur eveniet sed eum neque eos. Illum ut quia consequatur non minus aut expedita ex. Rerum quidem earum et quisquam sit. Ducimus eligendi est est a. Iure vel omnis enim. Odio tempore quia pariatur hic voluptatibus. Asperiores qui qui aspernatur itaque id commodi maiores.', '182.00', NULL, 'PRD471', 'instock', 0, 24, '1-9.jpg', NULL, 4, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(10, 'reru', 'rerum-sunt-nisi-nisi-natus-molestias', 'Nulla qui a ea earum fugit rerum possimus. Cumque accusantium molestiae delectus ratione. Quia quia molestiae blanditiis debitis itaque. Ab vel quaerat facilis voluptatem.', 'Nesciunt distinctio labore ea enim accusantium. Sequi non sed delectus praesentium aliquam non iusto consequatur. Provident consequatur sapiente facilis et. Voluptatem id illum culpa provident. Deserunt dolorem libero ut id. Earum impedit dolores nemo nemo ipsa. Eveniet eveniet non aut non. Qui explicabo accusantium vitae.', '321.00', NULL, 'PRD202', 'instock', 0, 40, '1-10.jpg', NULL, 2, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(11, 'voluptas vol', 'voluptas-voluptatem-velit-sit-inventore-voluptatem', 'Maiores facilis perspiciatis odio consectetur. Dolorum est in est ipsam. Unde tempora cumque magni eaque voluptas quia molestias. Minus error voluptatem facilis dolorem molestias est.', 'Inventore non aperiam a. Vitae adipisci quod fuga rerum nam veniam. Dolores dolore at autem minima mollitia sit quam. Hic aut enim cupiditate placeat repudiandae. Qui vero consequatur assumenda. Aut ea non eligendi sapiente. Nemo molestiae molestiae vero praesentium porro porro. Iure repellendus veniam qui eius impedit. Id non qui et dicta. Corrupti fugit rerum eius et repellendus sunt fuga enim. Temporibus recusandae qui tenetur est amet at.', '167.00', NULL, 'PRD180', 'instock', 0, 42, '1-11.jpg', NULL, 5, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(12, 'assumend', 'assumenda-ut-inventore-rerum-dolorem-facere', 'Quasi voluptatem molestiae sed est aut. Optio commodi vitae voluptatem facere. Et impedit animi reprehenderit atque eius error repudiandae. Numquam amet quidem et.', 'Molestiae modi veritatis ratione molestias. Veritatis consequatur non ad quibusdam placeat dolores sit voluptatem. Facere et ad repellendus iusto qui. Ipsa maiores enim reprehenderit nam natus voluptas dolor eum. Tempore reiciendis molestiae dolores deserunt labore eos. Non voluptatem eum iste sed earum deleniti id. Perferendis velit nihil possimus officiis.', '30.00', NULL, 'PRD446', 'instock', 0, 32, '1-12.jpg', NULL, 5, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(13, 'error molestia', 'error-molestiae-aut-id-et-eaque', 'Et tempore qui odit tempore quo. Officia aut eos architecto aliquam non. Distinctio magnam quaerat et.', 'Laboriosam pariatur voluptate ad. Deleniti voluptatum esse mollitia soluta porro. Quidem vero animi distinctio ab. Impedit facilis nobis vel placeat. Culpa aut corporis aut maiores qui quo libero. Ut ut deleniti amet recusandae natus. Culpa et et tempora rerum et. Vitae earum laborum repellat et officiis culpa ut.', '260.00', NULL, 'PRD172', 'instock', 0, 42, '1-13.jpg', NULL, 3, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(14, 'suscipit deserunt', 'suscipit-deserunt-mollitia-distinctio-ut-nesciunt', 'Et error velit sint reprehenderit dicta. Nemo qui quia eaque voluptatem excepturi nihil inventore.', 'Quis enim corporis dolor consequuntur deserunt. Doloremque omnis fugiat tempora ratione eveniet hic in. Nam molestiae eos quod error nemo sit quis et. Modi ex qui exercitationem debitis sapiente praesentium occaecati omnis. Ut omnis molestiae quis hic consequatur. Aut neque neque pariatur modi eum non amet sit. Quia voluptas perferendis sed odit. Qui itaque et consequatur voluptatem. Placeat minima dolorum qui nisi facilis voluptas voluptates quasi.', '281.00', NULL, 'PRD134', 'instock', 0, 35, '1-14.jpg', NULL, 1, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(15, 'facere accusantium', 'facere-accusantium-ut-delectus-deleniti-distinctio', 'In debitis nostrum explicabo in. Et ipsa cumque totam ut eos dignissimos repudiandae. Quidem in aut nihil voluptatem sed sequi beatae.', 'Et illo necessitatibus culpa quisquam quo consequatur vitae. Est dolorum laborum veritatis quibusdam voluptatem et. Itaque perspiciatis quasi aut est quia dolorem. Est tempora iusto eaque doloremque earum quo facilis. Autem iusto dicta consequatur totam voluptates quia labore. Soluta ut rerum occaecati aut dolorem nesciunt. Blanditiis quae natus quam qui mollitia voluptas sequi. Voluptate soluta id ab porro.', '445.00', NULL, 'PRD467', 'instock', 0, 29, '1-15.jpg', NULL, 3, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(16, 'voluptat', 'voluptates-amet-quaerat-veritatis-aspernatur-perferendis', 'Magnam molestias voluptas ut voluptas odit deleniti amet dolore. Sed est incidunt ea saepe molestiae autem. Consequatur voluptatem eligendi sint et. In et repellat rerum.', 'Alias vero eaque voluptatem et possimus necessitatibus et. Qui animi sapiente culpa minus ea. Voluptatem fugit at eius aperiam aut. Eum molestias sequi ipsam dolores aperiam aut mollitia. Commodi necessitatibus nobis rerum eos ea quis. Aliquam iusto nostrum quisquam consectetur. Doloribus sunt at dicta distinctio.', '264.00', NULL, 'PRD424', 'instock', 0, 37, '1-16.jpg', NULL, 2, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(17, 'ipsa', 'ipsa-qui-ut-aliquam-quasi-recusandae', 'Quisquam doloribus tempore omnis inventore adipisci. Asperiores vel ut facilis velit. Quae atque vero iusto autem repellat perspiciatis.', 'Facere qui deserunt optio blanditiis dolorem. Hic officia aspernatur voluptas minima incidunt sunt pariatur cumque. Maiores velit facilis omnis. Quod iste consequatur quia ut debitis. Qui et nostrum hic aliquid ad. Et mollitia quidem ab eaque nihil eum neque. Odio impedit ab id quod quis eum nostrum. Blanditiis minus sit necessitatibus minima. Debitis sed qui aut. Quidem debitis deserunt voluptatum sint quam. Deserunt est eius nihil aut soluta minus et.', '176.00', NULL, 'PRD250', 'instock', 0, 44, '1-17.jpg', NULL, 4, '2023-08-22 14:31:03', '2023-08-22 14:31:03'),
(18, 'moles', 'molestiae-placeat-nesciunt-saepe-tempore-est', 'Ex vero voluptas voluptas vel quasi. Repudiandae adipisci accusamus aliquam eius. Aspernatur et voluptatibus totam fugit et. Laudantium nobis enim tenetur hic ut totam perspiciatis enim.', 'Voluptatem et aliquid vitae quibusdam eveniet aperiam. Ex labore reiciendis quia qui qui consequuntur nesciunt. Eos praesentium molestiae saepe vitae sed voluptatem. Nihil quia sequi iste neque sit corrupti. Consequatur dolore mollitia exercitationem velit reprehenderit at. Id nihil vel ea inventore quibusdam. Facere deleniti laudantium et voluptatem. Iure non dolorum vel vel vel cupiditate sit. Iusto eaque quidem accusantium ipsum nulla autem. Qui quia animi ea in molestiae nam.', '358.00', NULL, 'PRD137', 'instock', 0, 22, '1-18.jpg', NULL, 2, '2023-08-22 14:31:03', '2023-08-22 14:31:03');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for Normal User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Dmz', 'Ukraine0988@gmail.com', NULL, '$2y$10$hjaey.AHuQxnjd1TCSYH5uOpG1sf0ZHGWrjKGkb/ZTER0stoATzyW', 'ADM', NULL, '2023-10-12 12:57:27', '2023-10-12 12:57:27');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Індекси таблиці `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
