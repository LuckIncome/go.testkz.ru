-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 30 2022 г., 08:28
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `004_go`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `excerpt`, `image`, `alt_title`, `created_at`, `updated_at`) VALUES
(1, 'Казахстанская Федерация Го', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ultrices velit ut nibh. Turpis venenatis, tempor, cras id at. Lectus id odio amet magna felis phasellus. Sed fames integer interdum euismod tellus eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ultrices velit ut nibh. Turpis venenatis, tempor, cras id at. Lectus id odio amet magna felis phasellus. Sed fames integer interdum euismod tellus eget odio.', 'abouts\\June2022\\I6zArjK0PAiioHHIIYpP.jpg', 'Казахстанская Федерация Го', '2022-06-29 08:52:23', '2022-06-29 08:52:23');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort_id` int(11) DEFAULT 0,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `alt_image`, `image_source`, `content`, `slug`, `status`, `sort_id`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Имена нарушителей с \"красным\" статусом опубликовали в Алматы', 'articles\\June2022\\jjR23bHcug58ybvm15Wv.jpg', 'Имена нарушителей с \"красным\" статусом опубликовали в Алматы', NULL, '<p>В ведомстве сообщили, что 80 жителей города с \"красным\" статусом\" был оштрафован на 30 МРП (прим.: МРП составляет 2917 тенге) за нарушение режима самоизоляции с помощью Ashyq. Они пытались пройти в ЦОН, рестораны, фитнес-центры, аэропорт и другие объекты. <br />Нарушающие режим самоизоляции жители являются сотрудниками банков, вузов, торговли, ресторанов, организаций образования, связи, пенсионного фонда и других объектов. <br />\"В этой связи Департамент санитарно-эпидемиологического контроля призывает горожан, находящихся на амбулаторном лечении, не нарушать режим самоизоляции и проявить гражданскую ответственность перед обществом. Лицам, находившимся в контакте с зараженными, также следует соблюдать режим самоизоляции и воздержаться от посещения мест массового скопления во избежание заражения других людей\", - отметили в ДСЭК.</p>', 'imena-narushitelej-s-krasnym-statusom-opublikovali-v-almaty', 1, 1, 'Имена нарушителей с \"красным\" статусом опубликовали в Алматы', 'Имена нарушителей с \"красным\" статусом опубликовали в Алматы', 'Имена нарушителей с \"красным\" статусом опубликовали в Алматы', '2022-06-29 10:11:30', '2022-06-29 10:11:30');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort_id` int(11) DEFAULT 0,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `alt_image`, `image_source`, `content`, `slug`, `status`, `sort_id`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'История игры Го', 'blogs\\June2022\\DjJ8k5p0SyCAShbWV6Ia.jpg', 'История игры Го', NULL, '<p>Легенды, отражённые в древних китайских летописях, относят появление го к третьему или началу второго тысячелетия до нашей эры, приписывая её создание одному из легендарных китайских императоров или их ближайшим придворным[2]. Объективные исторические свидетельства позволяют утверждать, что игра определённо существовала и была достаточно распространена 2500 лет назад &mdash; именно к этим временам относятся первые упоминания о го в документах[2]. Первые материальные свидетельства (найденные археологами доски и камни для го) и достоверные записи сыгранных партий относятся к первым векам нашей эры. В VII веке го попало в Японию, где, начиная с XV века, пережило сильнейший подъём[3]. В XX веке го, ранее культивировавшееся лишь в Азии, стало известно и постепенно распространилось в Европе и Америке[4][5]. К настоящему времени большинство европейских стран, в том числе и Россия, имеют собственные федерации го, хотя количество игроков и уровень игры на Западе пока не достигли показателей Кореи, Японии и Китая.</p>', 'istoriya-igry-go', 1, 1, 'История игры Го', 'История игры Го', 'История игры Го', '2022-06-29 09:13:00', '2022-06-29 09:13:55');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(2, NULL, 1, 'Category 2', 'category-2', '2022-06-28 22:26:54', '2022-06-28 22:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('phone','graph','social','address','email','map') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'phone',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translate_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `type`, `icon`, `value`, `translate_value`, `link`, `status`, `sort_id`, `created_at`, `updated_at`) VALUES
(1, 'phone', NULL, '+ 7 (707) 777 77 77', NULL, '+77077777777', 1, 1, '2022-06-29 06:09:00', '2022-06-29 06:09:44'),
(2, 'email', NULL, 'info@gofederation.ru', NULL, NULL, 1, 1, '2022-06-29 06:10:02', '2022-06-29 06:10:02'),
(3, 'address', NULL, NULL, 'г. Алматы, ул. Назарбаева, 47', NULL, 1, 1, '2022-06-29 06:10:00', '2022-06-29 16:52:41'),
(4, 'map', NULL, '<iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3Aef26ceb9c78e585f5a86a6be2f35c59ef89fd01491b0fd1428c15fa6f64bb5ca&amp;source=constructor\" width=\"\" height=\"\" frameborder=\"0\">\r\n</iframe>', NULL, NULL, 1, 1, '2022-06-29 06:13:16', '2022-06-29 06:13:16'),
(5, 'social', 'contacts\\June2022\\wDuwsDn82Qx0J2PgA7Yy.svg', 'BLACK', 'VK', 'https://vk.com/', 1, 1, '2022-06-29 06:15:00', '2022-06-29 06:16:25'),
(6, 'social', 'contacts\\June2022\\KFjChbkEyoQ2fhq8MCkX.svg', 'BLACK', 'Instagram', 'https://www.instagram.com/', 1, 2, '2022-06-29 06:19:17', '2022-06-29 06:19:17'),
(7, 'social', 'contacts\\June2022\\ZSzrROUmIzpYweCktkb1.svg', 'BLACK', 'Telegram', 'https://web.telegram.org/', 1, 3, '2022-06-29 06:20:07', '2022-06-29 06:20:07'),
(8, 'social', 'contacts\\June2022\\w3kmBmCp3o7DgpNoR5h9.svg', 'WHITE', 'VK', 'https://vk.com/', 1, 1, '2022-06-29 06:21:03', '2022-06-29 06:21:03'),
(9, 'social', 'contacts\\June2022\\IUzGworxzkfu7Np6RwVe.svg', 'WHITE', 'Instagram', 'https://www.instagram.com/', 1, 2, '2022-06-29 06:21:58', '2022-06-29 06:21:58'),
(10, 'social', 'contacts\\June2022\\qYTqiRFRcaRe6wuqu3kE.svg', 'WHITE', 'Telegram', 'https://web.telegram.org/', 1, 3, '2022-06-29 06:22:37', '2022-06-29 06:22:37');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Заголовок', 1, 1, 1, 1, 1, 1, '{}', 4),
(47, 6, 'excerpt', 'text_area', 'Краткое описание', 0, 0, 0, 0, 0, 0, '{}', 6),
(48, 6, 'body', 'rich_text_box', 'Контент', 0, 0, 1, 1, 1, 1, '{}', 7),
(49, 6, 'slug', 'text', 'Ссылка (Уникальная)', 1, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"unique:pages,slug\"}}', 8),
(50, 6, 'meta_description', 'text_area', 'Meta Описание', 0, 0, 1, 1, 1, 1, '{}', 11),
(51, 6, 'meta_keywords', 'text_area', 'Meta Ключевые слова', 0, 0, 1, 1, 1, 1, '{}', 12),
(52, 6, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"\\u041e\\u0422\\u041a\\u041b\\u042e\\u0427\\u0415\\u041d\\u041e\",\"ACTIVE\":\"\\u0412\\u041a\\u041b\\u042e\\u0427\\u0415\\u041d\\u041e\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 0, 0, 0, '{}', 13),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(55, 6, 'image', 'image', 'Изображения', 0, 0, 0, 0, 0, 0, '{\"resize\":{\"width\":\"1200\",\"height\":null},\"quality\":\"90%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"],\"thumbnails\":[{\"name\":\"small\",\"scale\":\"25%\"}]}', 5),
(56, 6, 'type', 'select_dropdown', 'Тип страницы', 1, 1, 1, 1, 1, 1, '{\"default\":\"simple\",\"options\":{\"home\":\"\\u0413\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f \\u0441\\u0442\\u0440\\u0430\\u043d\\u0438\\u0446\\u0430\",\"about\":\"\\u041e \\u0424\\u0435\\u0434\\u0435\\u0440\\u0430\\u0446\\u0438\\u0438\",\"event\":\"\\u041c\\u0435\\u0440\\u043e\\u043f\\u0440\\u0438\\u044f\\u0442\\u0438\\u044f\",\"news\":\"\\u041d\\u043e\\u0432\\u043e\\u0441\\u0442\\u0438\",\"blog\":\"\\u0411\\u043b\\u043e\\u0433\",\"contacts\":\"\\u041a\\u043e\\u043d\\u0442\\u0430\\u043a\\u0442\\u044b\",\"simple\":\"\\u0414\\u0440\\u0443\\u0433\\u043e\\u0435\"}}', 3),
(57, 6, 'seo_title', 'text', 'SEO Заголовок', 0, 0, 1, 1, 1, 1, '{}', 10),
(58, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(59, 7, 'type', 'select_dropdown', 'Тип', 1, 1, 1, 1, 1, 1, '{\"default\":\"phone\",\"options\":{\"phone\":\"\\u0422\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d\",\"graph\":\"\\u0413\\u0440\\u0430\\u0444\\u0438\\u043a \\u0440\\u0430\\u0431\\u043e\\u0442\\u044b\",\"social\":\"\\u0421\\u043e\\u0446\\u0441\\u0435\\u0442\\u044c\",\"address\":\"\\u0410\\u0434\\u0440\\u0435\\u0441\",\"email\":\"Email\",\"map\":\"\\u041a\\u0430\\u0440\\u0442\\u0430 (JS)\"}}', 2),
(60, 7, 'icon', 'image', 'Иконка (svg)', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"],\"thumbnails\":[{\"name\":\"small\",\"scale\":\"25%\"}]}', 3),
(61, 7, 'value', 'text_area', 'Значение', 0, 0, 1, 1, 1, 1, '{}', 4),
(62, 7, 'translate_value', 'text_area', 'Значение c Переводом', 0, 0, 1, 1, 1, 1, '{}', 5),
(63, 7, 'link', 'text', 'Ссылка', 0, 1, 1, 1, 1, 1, '{}', 6),
(64, 7, 'status', 'checkbox', 'Статус', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0412\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"off\":\"\\u041e\\u0442\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"checked\":true}', 7),
(65, 7, 'sort_id', 'number', 'Порядковый номер', 1, 1, 1, 1, 1, 1, '{}', 8),
(66, 7, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 9),
(67, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(68, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(69, 8, 'title', 'text', 'Заголовок', 1, 1, 1, 1, 1, 1, '{}', 2),
(70, 8, 'content', 'rich_text_box', 'Контент №1', 0, 0, 1, 1, 1, 1, '{}', 3),
(71, 8, 'excerpt', 'text_area', 'Контент №2', 0, 0, 1, 1, 1, 1, '{}', 6),
(72, 8, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 4),
(73, 8, 'alt_title', 'text', 'Alt Изображение', 1, 1, 1, 1, 1, 1, '{}', 5),
(74, 8, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 7),
(75, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(76, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(77, 9, 'title', 'text', 'Заголовок', 0, 1, 1, 1, 1, 1, '{}', 2),
(78, 9, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 3),
(79, 9, 'alt_image', 'text', 'Alt Изображение', 0, 0, 1, 1, 1, 1, '{}', 4),
(80, 9, 'image_source', 'text', 'Фото: источник', 0, 1, 1, 1, 1, 1, '{}', 5),
(81, 9, 'content', 'rich_text_box', 'Контент', 0, 0, 1, 1, 1, 1, '{}', 6),
(82, 9, 'slug', 'text', 'Ссылка (Уникальная)', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 7),
(83, 9, 'status', 'checkbox', 'Статус', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0412\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"off\":\"\\u041e\\u0442\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"checked\":true}', 8),
(84, 9, 'sort_id', 'number', 'Порядковый номер', 0, 0, 1, 1, 1, 1, '{}', 9),
(85, 9, 'seo_title', 'text', 'SEO Заголовок', 0, 0, 1, 1, 1, 1, '{}', 10),
(86, 9, 'meta_description', 'text_area', 'Meta Описание', 0, 0, 1, 1, 1, 1, '{}', 11),
(87, 9, 'meta_keywords', 'text_area', 'Meta Ключевые слова', 0, 0, 1, 1, 1, 1, '{}', 12),
(88, 9, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 13),
(89, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(90, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 10, 'title', 'text', 'Заголовок', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 10, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 3),
(93, 10, 'alt_image', 'text', 'Alt Изображение', 0, 0, 1, 1, 1, 1, '{}', 4),
(94, 10, 'image_source', 'text', 'Фото: источник', 0, 1, 1, 1, 1, 1, '{}', 5),
(95, 10, 'content', 'rich_text_box', 'Контент', 0, 0, 1, 1, 1, 1, '{}', 6),
(96, 10, 'slug', 'text', 'Ссылка (Уникальная)', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 7),
(97, 10, 'status', 'checkbox', 'Статус', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0412\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"off\":\"\\u041e\\u0442\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"checked\":true}', 8),
(98, 10, 'sort_id', 'number', 'Порядковый номер', 0, 0, 1, 1, 1, 1, '{}', 9),
(99, 10, 'seo_title', 'text', 'SEO Заголовок', 0, 0, 1, 1, 1, 1, '{}', 10),
(100, 10, 'meta_description', 'text_area', 'Meta Описание', 0, 0, 1, 1, 1, 1, '{}', 11),
(101, 10, 'meta_keywords', 'text_area', 'Meta Ключевые слова', 0, 0, 1, 1, 1, 1, '{}', 12),
(102, 10, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 13),
(103, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(104, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(105, 11, 'title', 'text', 'Заголовок', 0, 1, 1, 1, 1, 1, '{}', 2),
(106, 11, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 3),
(107, 11, 'alt_image', 'text', 'Alt Изображение', 0, 0, 1, 1, 1, 1, '{}', 4),
(108, 11, 'image_source', 'text', 'Фото: источник', 0, 0, 0, 0, 0, 0, '{}', 5),
(109, 11, 'content', 'rich_text_box', 'Контент', 0, 0, 1, 1, 1, 1, '{}', 6),
(110, 11, 'slug', 'text', 'Ссылка (Уникальная)', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 8),
(111, 11, 'status', 'checkbox', 'Статус', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0412\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"off\":\"\\u041e\\u0442\\u043a\\u043b\\u044e\\u0447\\u0435\\u043d\\u043e\",\"checked\":true}', 9),
(112, 11, 'sort_id', 'number', 'Порядковый номер', 0, 0, 1, 1, 1, 1, '{}', 10),
(113, 11, 'seo_title', 'text', 'SEO Заголовок', 0, 0, 1, 1, 1, 1, '{}', 11),
(114, 11, 'meta_description', 'text_area', 'Meta Описание', 0, 0, 1, 1, 1, 1, '{}', 12),
(115, 11, 'meta_keywords', 'text_area', 'Meta Ключевые слова', 0, 0, 1, 1, 1, 1, '{}', 13),
(116, 11, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 14),
(117, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(118, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(120, 12, 'excerpt', 'text_area', 'Краткое описание', 0, 0, 1, 1, 1, 1, '{}', 3),
(121, 12, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 4),
(122, 12, 'alt_image', 'text', 'Alt Изображение', 0, 1, 1, 1, 1, 1, '{}', 5),
(123, 12, 'link', 'text', 'Ссылка', 0, 1, 1, 1, 1, 1, '{}', 6),
(124, 12, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 7),
(125, 12, 'updated_at', 'timestamp', 'Дата обновление', 0, 0, 0, 0, 0, 0, '{}', 8),
(126, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(127, 13, 'title', 'text', 'Заголовок', 0, 1, 1, 1, 1, 1, '{}', 2),
(128, 13, 'image', 'image', 'Изображение', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"100%\",\"upsize\":false,\"formats\":[\"original\",\"webp\"]}', 3),
(129, 13, 'excerpt', 'text_area', 'Краткое описание', 0, 1, 1, 1, 1, 1, '{}', 4),
(130, 13, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 1, 0, 1, '{}', 7),
(131, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(132, 14, 'id', 'text', 'Номер', 1, 1, 0, 0, 0, 0, '{}', 1),
(133, 14, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 2),
(134, 14, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 1, 0, 1, '{}', 3),
(135, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(136, 15, 'id', 'text', 'Номер', 1, 1, 0, 0, 0, 0, '{}', 1),
(137, 15, 'surname', 'text', 'Фамилия', 0, 1, 1, 1, 1, 1, '{}', 2),
(138, 15, 'name', 'text', 'Имя', 0, 1, 1, 1, 1, 1, '{}', 3),
(139, 15, 'phone', 'text', 'Номер телефона', 0, 1, 1, 1, 1, 1, '{}', 4),
(140, 15, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 5),
(141, 15, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 1, 0, 1, '{}', 6),
(142, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(143, 16, 'id', 'text', 'Номер', 1, 1, 0, 0, 0, 0, '{}', 1),
(144, 16, 'surname', 'text', 'Фамилия', 0, 1, 1, 1, 1, 1, '{}', 2),
(145, 16, 'name', 'text', 'Имя', 0, 1, 1, 1, 1, 1, '{}', 3),
(146, 16, 'phone', 'text', 'Номер телефона', 0, 1, 1, 1, 1, 1, '{}', 4),
(147, 16, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 5),
(148, 16, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 1, 0, 1, '{}', 6),
(149, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(150, 11, 'register', 'checkbox', 'Показать Заявку', 1, 0, 1, 1, 1, 1, '{\"on\":\"\\u0414\\u0430\",\"off\":\"\\u041d\\u0435\\u0442\",\"checked\":true}', 7),
(151, 13, 'button_text', 'text', 'Текст кнопки', 0, 0, 1, 1, 1, 1, '{}', 5),
(152, 13, 'hide_button', 'checkbox', 'Скрыть кнопку', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0414\\u0430\",\"off\":\"\\u041d\\u0435\\u0442\",\"checked\":true}', 6),
(153, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(154, 17, 'pages', 'select_dropdown', 'Страницы', 0, 1, 1, 1, 1, 1, '{\"options\":{\"home\":\"\\u0413\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f \\u0441\\u0442\\u0440\\u0430\\u043d\\u0438\\u0446\\u0430\",\"contacts\":\"\\u041a\\u043e\\u043d\\u0442\\u0430\\u043a\\u0442\\u044b\"}}', 2),
(155, 17, 'hide_block', 'checkbox', 'Скрыть рассылку?', 1, 1, 1, 1, 1, 1, '{\"on\":\"\\u0414\\u0430\",\"off\":\"\\u041d\\u0435\\u0442\",\"checked\":true}', 3),
(156, 17, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 1, 0, 1, '{}', 4),
(157, 17, 'updated_at', 'timestamp', 'Дата обновление', 0, 1, 0, 0, 0, 0, '{}', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(6, 'pages', 'pages', 'Страница', 'Страницы', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-06-28 22:26:54', '2022-06-29 16:38:21'),
(7, 'contacts', 'contacts', 'Контакт', 'Контакты', 'voyager-location', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 05:24:04', '2022-06-29 06:09:27'),
(8, 'abouts', 'abouts', 'О федерации', 'О федерации', 'voyager-company', 'App\\Models\\About', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-29 08:51:17', '2022-06-29 08:51:17'),
(9, 'blogs', 'blogs', 'Блог', 'Блог', 'voyager-window-list', 'App\\Models\\Blog', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 09:11:48', '2022-06-29 09:12:35'),
(10, 'articles', 'articles', 'Новость', 'Новости', 'voyager-news', 'App\\Models\\Article', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(11, 'events', 'events', 'Мероприятия', 'Мероприятия', 'voyager-wand', 'App\\Models\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 11:08:19', '2022-06-29 17:02:00'),
(12, 'partners', 'partners', 'Наши партнёры', 'Наши партнёры', 'voyager-people', 'App\\Models\\Partner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 14:48:25', '2022-06-29 14:52:44'),
(13, 'titles', 'titles', 'Текст Гл. стр.', 'Текст Гл. стр.', 'voyager-character', 'App\\Models\\Title', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 15:20:23', '2022-06-30 04:10:16'),
(14, 'subscribers', 'subscribers', 'Подписка', 'Подписка', 'voyager-pen', 'App\\Models\\Subscriber', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(15, 'feedback', 'feedback', 'Заявку на участие', 'Заявку на участие', 'voyager-pen', 'App\\Models\\Feedback', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 16:03:56', '2022-06-29 16:10:21'),
(16, 'eventbacks', 'eventbacks', 'Заявки на Мероприятия', 'Заявки на Мероприятия', 'voyager-pen', 'App\\Models\\Eventback', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-29 16:24:56', '2022-06-29 16:26:03'),
(17, 'mailings', 'mailings', 'Скрыть рассылку', 'Скрыть рассылку', 'voyager-check', 'App\\Models\\Mailing', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-06-30 04:52:08', '2022-06-30 04:52:08');

-- --------------------------------------------------------

--
-- Структура таблицы `eventbacks`
--

CREATE TABLE `eventbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort_id` int(11) DEFAULT 0,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `register` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `alt_image`, `image_source`, `content`, `slug`, `status`, `sort_id`, `seo_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `register`) VALUES
(1, 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', 'events\\June2022\\4jj5kPAflyxDaTrbBJLx.jpg', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'otkrytie-vsemirnogo-festivalya-po-go-genius-extreme', 1, 1, 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 11:09:00', '2022-06-30 03:12:59', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `mailings`
--

CREATE TABLE `mailings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_block` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mailings`
--

INSERT INTO `mailings` (`id`, `pages`, `hide_block`, `created_at`, `updated_at`) VALUES
(1, 'home', 0, '2022-06-30 04:53:00', '2022-06-30 04:57:43'),
(2, 'contacts', 0, '2022-06-30 04:53:00', '2022-06-30 04:59:43');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(2, 'header_menu', '2022-06-29 05:40:58', '2022-06-29 05:40:58');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Панель Управления', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2022-06-28 22:26:53', '2022-06-29 04:54:33', 'voyager.dashboard', 'null'),
(2, 1, 'Медиа файлы', '', '_self', 'voyager-images', '#000000', 5, 4, '2022-06-28 22:26:53', '2022-06-29 04:55:59', 'voyager.media.index', 'null'),
(3, 1, 'Пользователи', '', '_self', 'voyager-person', '#000000', 5, 6, '2022-06-28 22:26:53', '2022-06-29 04:55:59', 'voyager.users.index', 'null'),
(4, 1, 'Роли', '', '_self', 'voyager-lock', '#000000', 5, 5, '2022-06-28 22:26:53', '2022-06-29 04:55:59', 'voyager.roles.index', 'null'),
(5, 1, 'Инструменты', '', '_self', 'voyager-tools', '#000000', NULL, 10, '2022-06-28 22:26:53', '2022-06-30 04:52:56', NULL, ''),
(6, 1, 'Конструктор Меню', '', '_self', 'voyager-list', '#000000', NULL, 7, '2022-06-28 22:26:53', '2022-06-30 04:52:56', 'voyager.menus.index', 'null'),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 1, '2022-06-28 22:26:53', '2022-06-29 04:54:28', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 2, '2022-06-28 22:26:53', '2022-06-29 04:54:28', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 3, '2022-06-28 22:26:53', '2022-06-29 04:54:28', 'voyager.bread.index', NULL),
(10, 1, 'Настройки', '', '_self', 'voyager-settings', '#000000', 15, 3, '2022-06-28 22:26:53', '2022-06-29 15:22:01', 'voyager.settings.index', 'null'),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 5, 7, '2022-06-28 22:26:54', '2022-06-29 04:55:59', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, 5, 8, '2022-06-28 22:26:54', '2022-06-29 04:55:59', 'voyager.posts.index', NULL),
(13, 1, 'Страницы', '', '_self', 'voyager-file-text', '#000000', 15, 2, '2022-06-28 22:26:54', '2022-06-29 05:24:55', 'voyager.pages.index', 'null'),
(14, 1, 'Контакты', '', '_self', 'voyager-location', NULL, 15, 1, '2022-06-29 05:24:04', '2022-06-29 05:24:48', 'voyager.contacts.index', NULL),
(15, 1, 'Настройки', '', '_self', 'voyager-settings', '#000000', NULL, 9, '2022-06-29 05:24:43', '2022-06-30 04:52:56', NULL, ''),
(16, 2, 'О Федерации', 'about', '_self', NULL, '#000000', NULL, 5, '2022-06-29 05:41:22', '2022-06-29 05:41:22', NULL, ''),
(17, 2, 'Мероприятия', 'event', '_self', NULL, '#000000', NULL, 6, '2022-06-29 05:41:35', '2022-06-29 11:12:00', NULL, ''),
(18, 2, 'Новости', 'news', '_self', NULL, '#000000', NULL, 7, '2022-06-29 05:41:52', '2022-06-29 05:41:52', NULL, ''),
(19, 2, 'Блог', 'blog', '_self', NULL, '#000000', NULL, 8, '2022-06-29 05:42:08', '2022-06-29 10:03:36', NULL, ''),
(20, 2, 'Контакты', 'contacts', '_self', NULL, '#000000', NULL, 9, '2022-06-29 05:42:19', '2022-06-29 05:42:19', NULL, ''),
(21, 1, 'О федерации', '', '_self', 'voyager-company', NULL, NULL, 6, '2022-06-29 08:51:18', '2022-06-29 15:22:06', 'voyager.abouts.index', NULL),
(22, 1, 'Блог', '', '_self', 'voyager-window-list', NULL, NULL, 5, '2022-06-29 09:11:48', '2022-06-29 15:22:06', 'voyager.blogs.index', NULL),
(23, 1, 'Новости', '', '_self', 'voyager-news', NULL, NULL, 4, '2022-06-29 10:10:09', '2022-06-29 15:22:06', 'voyager.articles.index', NULL),
(24, 1, 'Мероприятия', '', '_self', 'voyager-wand', NULL, NULL, 3, '2022-06-29 11:08:19', '2022-06-29 15:22:06', 'voyager.events.index', NULL),
(25, 1, 'Наши партнёры', '', '_self', 'voyager-people', NULL, 27, 2, '2022-06-29 14:48:25', '2022-06-29 15:22:07', 'voyager.partners.index', NULL),
(26, 1, 'Текст Гл. стр.', '', '_self', 'voyager-character', NULL, 27, 1, '2022-06-29 15:20:23', '2022-06-29 15:22:05', 'voyager.titles.index', NULL),
(27, 1, 'Гл. стр.', '', '_self', 'voyager-home', '#000000', NULL, 2, '2022-06-29 15:21:52', '2022-06-29 15:22:03', NULL, ''),
(28, 1, 'Подписка', '', '_self', 'voyager-pen', NULL, 29, 1, '2022-06-29 15:36:03', '2022-06-29 15:36:44', 'voyager.subscribers.index', NULL),
(29, 1, 'Почта', '', '_self', 'voyager-mail', '#000000', NULL, 8, '2022-06-29 15:36:39', '2022-06-30 04:52:56', NULL, ''),
(30, 1, 'Заявку на участие', '', '_self', 'voyager-pen', NULL, 29, 2, '2022-06-29 16:03:56', '2022-06-29 16:04:21', 'voyager.feedback.index', NULL),
(31, 1, 'Заявки на Мероприятия', '', '_self', 'voyager-pen', '#000000', 29, 3, '2022-06-29 16:24:56', '2022-06-29 16:25:34', 'voyager.eventbacks.index', 'null'),
(32, 1, 'Скрыть рассылку', '', '_self', 'voyager-check', NULL, 27, 3, '2022-06-30 04:52:08', '2022-06-30 04:52:56', 'voyager.mailings.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(29, '2022_06_29_110602_create_contacts_table', 3),
(31, '2022_06_29_143632_create_abouts_table', 4),
(33, '2022_06_29_150122_create_blogs_table', 5),
(34, '2022_06_29_160624_create_articles_table', 6),
(35, '2022_06_29_170016_create_events_table', 7),
(37, '2022_06_29_204449_create_partners_table', 8),
(38, '2022_06_29_211718_create_titles_table', 9),
(39, '2022_06_29_212932_create_subscribers_table', 10),
(41, '2022_06_29_220104_create_feedback_table', 11),
(42, '2022_06_29_222217_create_eventbacks_table', 12),
(43, '2022_06_29_230006_add_register_to_events_table', 13),
(44, '2022_06_30_100643_add_button_to_titles_table', 14),
(45, '2022_06_30_104723_create_mailings_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `type`, `title`, `excerpt`, `body`, `image`, `slug`, `seo_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'home', 'Главная страница', NULL, NULL, NULL, 'home', 'Главная страница', 'Главная страница', 'Главная страница', 'ACTIVE', '2022-06-29 04:57:45', '2022-06-29 04:57:45'),
(2, 1, 'about', 'О Федерации', NULL, NULL, NULL, 'about', 'О Федерации', 'О Федерации', 'О Федерации', 'ACTIVE', '2022-06-29 06:25:36', '2022-06-29 06:25:36'),
(3, 1, 'event', 'Мероприятия', NULL, NULL, NULL, 'event', 'Мероприятия', 'Мероприятия', 'Мероприятия', 'ACTIVE', '2022-06-29 06:25:55', '2022-06-29 11:11:45'),
(4, 1, 'news', 'Новости', NULL, NULL, NULL, 'news', 'Новости', 'Новости\n', 'Новости\n', 'ACTIVE', '2022-06-29 06:26:22', '2022-06-29 06:26:22'),
(5, 1, 'blog', 'Блог', NULL, NULL, NULL, 'blog', 'Блог', 'Блог', 'Блог', 'ACTIVE', '2022-06-29 06:26:39', '2022-06-29 09:31:03'),
(6, 1, 'contacts', 'Контакты', NULL, NULL, NULL, 'contacts', 'Контакты', 'Контакты', 'Контакты', 'ACTIVE', '2022-06-29 06:27:02', '2022-06-29 06:27:02'),
(7, 1, 'simple', 'Политика конфиденциальности', NULL, '<p><strong> Настоящее Пользовательское соглашение (далее также &ndash; &laquo;Соглашение&raquo;) регулирует отношения по использованию функций Сайта и общие условия возможного оказания Услуг между Исполнителем (далее также - &laquo;Владелец Сайта&raquo;), с одной стороны, и физическим или юридическим лицом Заказчиком, принявшим условия настоящего Соглашения путём присоединения к настоящему Соглашению в целом и безоговорочно (далее также &ndash; &laquo;Пользователь сайта&raquo;), с другой стороны, далее при совместном упоминании именуемые &laquo;Стороны&raquo;, а по отдельности &ndash; &laquo;Сторона&raquo;. </strong></p>\n<p>Настоящее Соглашение и отношения Сторон, возникшие из настоящего Соглашения, регулируются законодательством.</p>\n<h2>Общие положения Пользовательского соглашения</h2>\n<p>В настоящем документе и вытекающих или связанным с ним отношениях Сторон применяются следующие термины и определения:</p>\n<ul>\n<li>а) Сайт Владельца/ Сайт &mdash; интернет-сайт, размещенные в домене Владельца сайта и его поддоменах.</li>\n<li>б) Соглашение &mdash; настоящее соглашение со всеми дополнениями и изменениями.</li>\n<li>в) Администрация/представитель Сайта, Владельца Сайта &ndash; лицо уполномоченное Владельцем сайта на действия предусмотренные Соглашением.</li>\n<li>г) Посетитель - любое лицо, которое перешло на Сайт и находится на нем, используя его свойства для ознакомления с контентом размещенным на Сайте.</li>\n<li>д) Пользователь &mdash; дееспособное физическое лицо, присоединившееся к настоящему Соглашению в собственном интересе либо выступающее от имени и в интересах представляемого им юридического лица.</li>\n</ul>\n<p>Любой посетитель Сайта по собственной воле может заполнить предоставленную для этого форму и стать Пользователем.</p>\n<p>Сайт содержит информацию и материалы о товарах и услугах, которые в последующем могут быть предоставлены Пользователю в случае заключения реального Договора. Если какое-то физическое лицо зарегистрировалось в качестве Пользователя от имени уполномочившего его на то юридического лица, это означает, что юридическое лицо принимает Соглашение в полном объеме с последующими из этого последствиями.</p>\n<p>В частности, при использовании Сайта, Пользователь не вправе выдавать себя за другого человека или представителя организации и/или сообщества без достаточных на то прав, в том числе за сотрудников Сайта, а также применять любые другие формы и способы незаконного представительства других лиц в сети Интернет, а также вводить Пользователей, Сайт и его представителей в заблуждение относительно свойств и характеристик каких- либо субъектов или объектов.</p>\n<p>В случае обнаружения нарушения прав и/или интересов в связи с использованием Сайта, в том числе иным Пользователем, следует сообщить об этом Владельцу сайта, путем направления письменного уведомления, сообщения по телефону с подробным изложением обстоятельств нарушения и/или гипертекстовой ссылкой на страницу, содержащую материалы, которыми нарушаются соответствующие права и/или интересы Сайта.</p>\n<h2>Интеллектуальные права</h2>\n<p>Все объекты, доступные при помощи Сайта, в том числе элементы дизайна, текст, графические изображения, иллюстрации, видео, компьютерные программы, базы данных, музыка, звуки и другие объекты, размещенные в рамках Сайта, являются объектами исключительных прав Сайта и других правообладателей. Сайт предоставляет Пользователю право его функционального использования в пределах его общих функциональных возможностей.</p>\n<p>Использование Сайта иными способами, в том числе путем копирования (воспроизведения) размещенного на Сайте Контента, а также входящих в состав Сайта элементов дизайна, компьютерных программ и баз данных, их декомпиляция, модификация, и последующее распространение, публичный показ, доведение до всеобщего сведения, строго запрещены, если иное не предусмотрено настоящим Соглашением и заключенными Договорами.</p>\n<p>Пользователь не вправе воспроизводить, повторять и копировать, продавать, а также использовать для каких-либо коммерческих целей какие-либо части Сайта (включая Контент, доступный Пользователю посредством Приложений), или доступ к ним, кроме тех случаев, когда Пользователь получил такое разрешение от Сайта/Владельцев Сайта, либо когда это прямо предусмотрено дополнительными документами (Договорами, Приложениями и т.п.).</p>\n<p>Использование Пользователем Сайта, а также размещенного в нем Контента для личного некоммерческого использования допускается при условии соблюдения всех законов охраны авторского права, смежных прав, товарных знаков, других уведомлений об авторстве, сохранения имени (или псевдонима) автора/наименования правообладателя в неизменном виде, сохранении соответствующего объекта в неизменном виде. Исключение составляют случаи, прямо предусмотренные законодательством, регулирующее общую защиту данных или дополнительными документами на использование Сайта.</p>\n<p>Сайт может содержать ссылки на сайты в сети Интернет (сайты третьих лиц). Указанные третьи лица и их контент не проверяются Сайтом на соответствие тем или иным требованиям (достоверности, полноты и т.п.). Сайт не несет ответственности за любую информацию, материалы, размещенные на сайтах третьих лиц, к которым Пользователь получает доступ в связи с использованием Сайта, а также за доступность таких сайтов или информации и последствия их использования Пользователем.</p>\n<p>Ссылка (в любой форме) на любой сайт, продукт, услугу, любую информацию коммерческого или некоммерческого характера, размещенная на Сайте, не является одобрением или рекомендацией данных продуктов (услуг, деятельности) со стороны Сайта, за исключением случаев, когда Сайт на это прямо указывает.</p>\n<h2>Уведомления</h2>\n<p>Владелец Сайта/Администрация/Представитель сайта и лица, представителями которых является Сайт, вправе посылать Пользователю на указанный им электронный адрес, телефон, ссылку на страничку в социальных сетях информационные электронные сообщения о событиях, происходящих в рамках Сайта или в связи с ним и лиц которых он представляет.</p>\n<h2>Заключительные положения</h2>\n<p>Данное Соглашение регулируется и толкуется в соответствии с действующим законодательством, регулирующее общую защиту данных . Вопросы, не урегулированные настоящим Соглашением, подлежат разрешению в соответствии с законодательством. Все возможные споры, вытекающие из отношений, регулируемые настоящим Соглашением, разрешаются в порядке, установленном действующим законодательством.</p>\n<p>Если по тем или иным причинам одно или несколько положений настоящего Соглашения будут признаны недействительными или не имеющими юридической силы, это не означает что остальные положения Соглашения являются не действительными или не применимыми.</p>\n<p>Временное бездействие со стороны Сайта в случае нарушения Пользователем либо иными Пользователями положений Соглашений не лишает Сайт права предпринять соответствующие действия в защиту своих интересов позднее, а также не означает, что Сайт отказался от своих прав в случае совершения в последующем подобных либо сходных нарушений.</p>\n<p>Все споры по Соглашению или в связи с ним подлежат рассмотрению в суде по месту нахождения Сайта в соответствии с действующим законодательством.</p>\n<p>Данное ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ разработано и действует в рамках действующего Законодательства о защите физических лиц в отношении обработки персональных данных и о свободном перемещении таких данных.</p>\n<h2>Политика конфиденциальности</h2>\n<p>Настоящая Политика является неотъемлемой частью Пользовательского соглашения (далее &mdash; &laquo;Соглашение&raquo;), размещенного и/или доступного в сети Интернет на домене Сайта, а также иных заключенных с Пользователем договоров, или договоров которые могут быть заключены с Пользователем.</p>\n<p>Пользуясь услугами Сайта, Пользователь выражает свое согласие с Политикой конфиденциальности персональных данных сайта (далее - Политикой Конфиденциальности), и по своей воле и в своих интересах дает письменное согласие на следующие способы обработки Персональной информации: сбор, запись, систематизация, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение в установленных настоящей Политикой целях с использованием средств автоматизации или без использования таких средств по усмотрению. В случае несогласия с условиями Политики конфиденциальности Клиент/Пользователь не должен передавать персональные данные путем заполнения соответствующих форм.</p>\n<p>Политика конфиденциальности действует в отношении всей персональной информации, которую Сайт, может получить о Клиенте/Пользователе во время использования сайта, программ и продуктов сайта.</p>\n<h2>Цели сбора персональной информации пользователя</h2>\n<p>Сайта может использовать персональные данные Клиента/Пользователя в целях:</p>\n<p>Идентификации Пользователя, зарегистрированного на Сайте.</p>\n<p>Предоставления Пользователю доступа к ресурсам Сайта и партнеров Сайта.</p>\n<p>Установления с Пользователем обратной связи, включая телефонный звонок, направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработка запросов и заявок от Пользователя, направления рекламной и другой информации об акциях и других услугах Сайта.</p>\n<p>Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.</p>\n<p>Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.</p>\n<p>Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем связанных с использованием Сайта.</p>\n<p>Предоставления Пользователю обновлений услуг, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени Сайта или от имени партнеров Сайта.</p>\n<p>Осуществления рекламной деятельности Сайта.</p>\n<p>Предоставления доступа Пользователю на сайты или сервисы партнеров Сайта с целью получения продуктов, обновлений и услуг.</p>', NULL, 'privacy', 'Политика конфиденциальности', 'Политика конфиденциальности', 'Политика конфиденциальности', 'ACTIVE', '2022-06-29 16:37:59', '2022-06-30 03:11:14');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `excerpt`, `image`, `alt_image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\bdR9Vuh4h2QagIsNLju0.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:53:00', '2022-06-29 14:53:21'),
(2, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\Td5lSihd6H2xalzvbrPA.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:53:34', '2022-06-29 14:53:34'),
(3, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\1ypuzo1fEGHeZ2e9Ctet.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:53:46', '2022-06-29 14:53:46'),
(4, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\FDmQfSMCgD7q2Wykyj32.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:53:57', '2022-06-29 14:53:57'),
(5, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\GymqH484bIqxSiugn7eD.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:54:06', '2022-06-29 14:54:06'),
(6, 'Lorem Ipsum is simply dummy industry', 'partners\\June2022\\bLPySj0B5QM90Qvx2oNk.jpg', 'Lorem Ipsum is simply dummy industry', '#', '2022-06-29 14:54:16', '2022-06-29 14:54:16');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(2, 'browse_bread', NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(3, 'browse_database', NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(4, 'browse_media', NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(5, 'browse_compass', NULL, '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(6, 'browse_menus', 'menus', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(7, 'read_menus', 'menus', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(8, 'edit_menus', 'menus', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(9, 'add_menus', 'menus', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(10, 'delete_menus', 'menus', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(11, 'browse_roles', 'roles', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(12, 'read_roles', 'roles', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(13, 'edit_roles', 'roles', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(14, 'add_roles', 'roles', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(15, 'delete_roles', 'roles', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(16, 'browse_users', 'users', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(17, 'read_users', 'users', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(18, 'edit_users', 'users', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(19, 'add_users', 'users', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(20, 'delete_users', 'users', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(21, 'browse_settings', 'settings', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(22, 'read_settings', 'settings', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(23, 'edit_settings', 'settings', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(24, 'add_settings', 'settings', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(25, 'delete_settings', 'settings', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(26, 'browse_categories', 'categories', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(27, 'read_categories', 'categories', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(28, 'edit_categories', 'categories', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(29, 'add_categories', 'categories', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(30, 'delete_categories', 'categories', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(31, 'browse_posts', 'posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(32, 'read_posts', 'posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(33, 'edit_posts', 'posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(34, 'add_posts', 'posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(35, 'delete_posts', 'posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(36, 'browse_pages', 'pages', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(37, 'read_pages', 'pages', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(38, 'edit_pages', 'pages', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(39, 'add_pages', 'pages', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(40, 'delete_pages', 'pages', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(41, 'browse_contacts', 'contacts', '2022-06-29 05:24:04', '2022-06-29 05:24:04'),
(42, 'read_contacts', 'contacts', '2022-06-29 05:24:04', '2022-06-29 05:24:04'),
(43, 'edit_contacts', 'contacts', '2022-06-29 05:24:04', '2022-06-29 05:24:04'),
(44, 'add_contacts', 'contacts', '2022-06-29 05:24:04', '2022-06-29 05:24:04'),
(45, 'delete_contacts', 'contacts', '2022-06-29 05:24:04', '2022-06-29 05:24:04'),
(46, 'browse_abouts', 'abouts', '2022-06-29 08:51:18', '2022-06-29 08:51:18'),
(47, 'read_abouts', 'abouts', '2022-06-29 08:51:18', '2022-06-29 08:51:18'),
(48, 'edit_abouts', 'abouts', '2022-06-29 08:51:18', '2022-06-29 08:51:18'),
(49, 'add_abouts', 'abouts', '2022-06-29 08:51:18', '2022-06-29 08:51:18'),
(50, 'delete_abouts', 'abouts', '2022-06-29 08:51:18', '2022-06-29 08:51:18'),
(51, 'browse_blogs', 'blogs', '2022-06-29 09:11:48', '2022-06-29 09:11:48'),
(52, 'read_blogs', 'blogs', '2022-06-29 09:11:48', '2022-06-29 09:11:48'),
(53, 'edit_blogs', 'blogs', '2022-06-29 09:11:48', '2022-06-29 09:11:48'),
(54, 'add_blogs', 'blogs', '2022-06-29 09:11:48', '2022-06-29 09:11:48'),
(55, 'delete_blogs', 'blogs', '2022-06-29 09:11:48', '2022-06-29 09:11:48'),
(56, 'browse_articles', 'articles', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(57, 'read_articles', 'articles', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(58, 'edit_articles', 'articles', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(59, 'add_articles', 'articles', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(60, 'delete_articles', 'articles', '2022-06-29 10:10:09', '2022-06-29 10:10:09'),
(61, 'browse_events', 'events', '2022-06-29 11:08:19', '2022-06-29 11:08:19'),
(62, 'read_events', 'events', '2022-06-29 11:08:19', '2022-06-29 11:08:19'),
(63, 'edit_events', 'events', '2022-06-29 11:08:19', '2022-06-29 11:08:19'),
(64, 'add_events', 'events', '2022-06-29 11:08:19', '2022-06-29 11:08:19'),
(65, 'delete_events', 'events', '2022-06-29 11:08:19', '2022-06-29 11:08:19'),
(66, 'browse_partners', 'partners', '2022-06-29 14:48:25', '2022-06-29 14:48:25'),
(67, 'read_partners', 'partners', '2022-06-29 14:48:25', '2022-06-29 14:48:25'),
(68, 'edit_partners', 'partners', '2022-06-29 14:48:25', '2022-06-29 14:48:25'),
(69, 'add_partners', 'partners', '2022-06-29 14:48:25', '2022-06-29 14:48:25'),
(70, 'delete_partners', 'partners', '2022-06-29 14:48:25', '2022-06-29 14:48:25'),
(71, 'browse_titles', 'titles', '2022-06-29 15:20:23', '2022-06-29 15:20:23'),
(72, 'read_titles', 'titles', '2022-06-29 15:20:23', '2022-06-29 15:20:23'),
(73, 'edit_titles', 'titles', '2022-06-29 15:20:23', '2022-06-29 15:20:23'),
(74, 'add_titles', 'titles', '2022-06-29 15:20:23', '2022-06-29 15:20:23'),
(75, 'delete_titles', 'titles', '2022-06-29 15:20:23', '2022-06-29 15:20:23'),
(76, 'browse_subscribers', 'subscribers', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(77, 'read_subscribers', 'subscribers', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(78, 'edit_subscribers', 'subscribers', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(79, 'add_subscribers', 'subscribers', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(80, 'delete_subscribers', 'subscribers', '2022-06-29 15:36:03', '2022-06-29 15:36:03'),
(81, 'browse_feedback', 'feedback', '2022-06-29 16:03:56', '2022-06-29 16:03:56'),
(82, 'read_feedback', 'feedback', '2022-06-29 16:03:56', '2022-06-29 16:03:56'),
(83, 'edit_feedback', 'feedback', '2022-06-29 16:03:56', '2022-06-29 16:03:56'),
(84, 'add_feedback', 'feedback', '2022-06-29 16:03:56', '2022-06-29 16:03:56'),
(85, 'delete_feedback', 'feedback', '2022-06-29 16:03:56', '2022-06-29 16:03:56'),
(86, 'browse_eventbacks', 'eventbacks', '2022-06-29 16:24:56', '2022-06-29 16:24:56'),
(87, 'read_eventbacks', 'eventbacks', '2022-06-29 16:24:56', '2022-06-29 16:24:56'),
(88, 'edit_eventbacks', 'eventbacks', '2022-06-29 16:24:56', '2022-06-29 16:24:56'),
(89, 'add_eventbacks', 'eventbacks', '2022-06-29 16:24:56', '2022-06-29 16:24:56'),
(90, 'delete_eventbacks', 'eventbacks', '2022-06-29 16:24:56', '2022-06-29 16:24:56'),
(91, 'browse_mailings', 'mailings', '2022-06-30 04:52:08', '2022-06-30 04:52:08'),
(92, 'read_mailings', 'mailings', '2022-06-30 04:52:08', '2022-06-30 04:52:08'),
(93, 'edit_mailings', 'mailings', '2022-06-30 04:52:08', '2022-06-30 04:52:08'),
(94, 'add_mailings', 'mailings', '2022-06-30 04:52:08', '2022-06-30 04:52:08'),
(95, 'delete_mailings', 'mailings', '2022-06-30 04:52:08', '2022-06-30 04:52:08');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-06-28 22:26:54', '2022-06-28 22:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-06-28 22:26:53', '2022-06-28 22:26:53'),
(2, 'user', 'Normal User', '2022-06-28 22:26:53', '2022-06-28 22:26:53');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\June2022\\IXoHzbzBhYiGslcrjN6P.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'GO', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Казахстанская Федерация Го', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\June2022\\56GGbRq66hZUWwVe9aLe.svg', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\June2022\\6LAoduJx8KCnBbswcNAV.svg', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.favicon', 'FAVICON', 'settings\\June2022\\j4rnJut9NM77YakBtOnF.svg', NULL, 'image', 6, 'Site'),
(12, 'site.header_logo', 'Логотип в Шапке', 'settings\\June2022\\MqdglP7MAaLgB5Yo9PZT.svg', NULL, 'image', 7, 'Site'),
(13, 'site.footer_logo', 'Нижний логотип', 'settings\\June2022\\NGb5UlqbcNnWLhe7cmd8.svg', NULL, 'image', 8, 'Site');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_button` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `titles`
--

INSERT INTO `titles` (`id`, `title`, `image`, `excerpt`, `created_at`, `updated_at`, `button_text`, `hide_button`) VALUES
(1, 'Деловая программа 41-го чемпионата мира по Го', 'titles\\June2022\\ye9cGdfz6NCJEUdkSCXr.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ultrices velit ut nibh. Turpis venenatis, tempor, cras id at. Lectus id odio amet magna felis phasellus.', '2022-06-29 15:22:00', '2022-06-30 04:15:34', 'Подать заявку', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2022-06-28 22:26:54', '2022-06-28 22:26:54'),
(31, 'data_rows', 'display_name', 44, 'en', 'ID', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(32, 'data_rows', 'display_name', 45, 'en', 'Author', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(33, 'data_rows', 'display_name', 56, 'en', 'Тип страницы', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(34, 'data_rows', 'display_name', 46, 'en', 'Заголовок', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(35, 'data_rows', 'display_name', 47, 'en', 'Краткое описание', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(36, 'data_rows', 'display_name', 48, 'en', 'Body', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(37, 'data_rows', 'display_name', 55, 'en', 'Изображения', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(38, 'data_rows', 'display_name', 49, 'en', 'Ссылка (Уникальная)', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(39, 'data_rows', 'display_name', 57, 'en', 'SEO Заголовок', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(40, 'data_rows', 'display_name', 50, 'en', 'Meta Описание', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(41, 'data_rows', 'display_name', 51, 'en', 'Meta Ключевые слова', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(42, 'data_rows', 'display_name', 52, 'en', 'Статус', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(43, 'data_rows', 'display_name', 53, 'en', 'Дата создания', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(44, 'data_rows', 'display_name', 54, 'en', 'Updated At', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(45, 'data_types', 'display_name_singular', 6, 'en', 'Страница', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(46, 'data_types', 'display_name_plural', 6, 'en', 'Страницы', '2022-06-29 06:25:10', '2022-06-29 06:25:10'),
(47, 'data_rows', 'display_name', 44, 'kz', 'ID', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(48, 'data_rows', 'display_name', 45, 'kz', 'Author', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(49, 'data_rows', 'display_name', 56, 'kz', 'Тип страницы', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(50, 'data_rows', 'display_name', 46, 'kz', 'Заголовок', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(51, 'data_rows', 'display_name', 47, 'kz', 'Краткое описание', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(52, 'data_rows', 'display_name', 48, 'kz', 'Body', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(53, 'data_rows', 'display_name', 55, 'kz', 'Изображения', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(54, 'data_rows', 'display_name', 49, 'kz', 'Ссылка (Уникальная)', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(55, 'data_rows', 'display_name', 57, 'kz', 'SEO Заголовок', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(56, 'data_rows', 'display_name', 50, 'kz', 'Meta Описание', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(57, 'data_rows', 'display_name', 51, 'kz', 'Meta Ключевые слова', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(58, 'data_rows', 'display_name', 52, 'kz', 'Статус', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(59, 'data_rows', 'display_name', 53, 'kz', 'Дата создания', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(60, 'data_rows', 'display_name', 54, 'kz', 'Updated At', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(61, 'data_types', 'display_name_singular', 6, 'kz', 'Страница', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(62, 'data_types', 'display_name_plural', 6, 'kz', 'Страницы', '2022-06-29 08:12:25', '2022-06-29 08:12:25'),
(63, 'pages', 'title', 6, 'en', 'Contacts', '2022-06-29 08:12:36', '2022-06-29 08:40:37'),
(64, 'pages', 'seo_title', 6, 'en', 'Contacts', '2022-06-29 08:12:36', '2022-06-29 08:40:37'),
(65, 'pages', 'meta_description', 6, 'en', 'Contacts', '2022-06-29 08:12:36', '2022-06-29 08:40:37'),
(66, 'pages', 'meta_keywords', 6, 'en', 'Contacts', '2022-06-29 08:12:36', '2022-06-29 08:40:37'),
(67, 'pages', 'title', 1, 'kz', 'Басты бет', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(68, 'pages', 'title', 1, 'en', 'Home ', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(69, 'pages', 'seo_title', 1, 'kz', 'Басты бет', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(70, 'pages', 'seo_title', 1, 'en', 'Home ', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(71, 'pages', 'meta_description', 1, 'kz', 'Басты бет', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(72, 'pages', 'meta_description', 1, 'en', 'Home ', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(73, 'pages', 'meta_keywords', 1, 'kz', 'Басты бет', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(74, 'pages', 'meta_keywords', 1, 'en', 'Home ', '2022-06-29 08:37:54', '2022-06-29 08:37:54'),
(75, 'pages', 'title', 2, 'kz', 'Федерация Туралы', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(76, 'pages', 'title', 2, 'en', 'About the Federation', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(77, 'pages', 'seo_title', 2, 'kz', 'Федерация Туралы', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(78, 'pages', 'seo_title', 2, 'en', 'About the Federation', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(79, 'pages', 'meta_description', 2, 'kz', 'Федерация Туралы', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(80, 'pages', 'meta_description', 2, 'en', 'About the Federation', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(81, 'pages', 'meta_keywords', 2, 'kz', 'Федерация Туралы', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(82, 'pages', 'meta_keywords', 2, 'en', 'About the Federation', '2022-06-29 08:38:28', '2022-06-29 08:38:28'),
(83, 'pages', 'title', 3, 'kz', 'Іс-шара', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(84, 'pages', 'title', 3, 'en', 'Events', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(85, 'pages', 'seo_title', 3, 'kz', 'Іс-шара', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(86, 'pages', 'seo_title', 3, 'en', 'Events', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(87, 'pages', 'meta_description', 3, 'kz', 'Іс-шара', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(88, 'pages', 'meta_description', 3, 'en', 'Events', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(89, 'pages', 'meta_keywords', 3, 'kz', 'Іс-шара', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(90, 'pages', 'meta_keywords', 3, 'en', 'Events', '2022-06-29 08:39:00', '2022-06-29 08:39:00'),
(91, 'pages', 'title', 4, 'kz', 'Жаңалықтар', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(92, 'pages', 'title', 4, 'en', 'News', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(93, 'pages', 'seo_title', 4, 'kz', 'Жаңалықтар', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(94, 'pages', 'seo_title', 4, 'en', 'News', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(95, 'pages', 'meta_description', 4, 'kz', 'Жаңалықтар', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(96, 'pages', 'meta_description', 4, 'en', 'News\n', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(97, 'pages', 'meta_keywords', 4, 'kz', 'Жаңалықтар', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(98, 'pages', 'meta_keywords', 4, 'en', 'News\n', '2022-06-29 08:39:26', '2022-06-29 08:39:26'),
(99, 'pages', 'title', 5, 'kz', 'Блог', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(100, 'pages', 'title', 5, 'en', 'Blog', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(101, 'pages', 'seo_title', 5, 'kz', 'Блог', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(102, 'pages', 'seo_title', 5, 'en', 'Blog', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(103, 'pages', 'meta_description', 5, 'kz', 'Блог', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(104, 'pages', 'meta_description', 5, 'en', 'Blog', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(105, 'pages', 'meta_keywords', 5, 'kz', 'Блог', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(106, 'pages', 'meta_keywords', 5, 'en', 'Blog', '2022-06-29 08:40:03', '2022-06-29 08:40:03'),
(107, 'pages', 'title', 6, 'kz', 'Байланыстар', '2022-06-29 08:40:37', '2022-06-29 08:40:37'),
(108, 'pages', 'seo_title', 6, 'kz', 'Байланыстар', '2022-06-29 08:40:37', '2022-06-29 08:40:37'),
(109, 'pages', 'meta_description', 6, 'kz', 'Байланыстар', '2022-06-29 08:40:37', '2022-06-29 08:40:37'),
(110, 'pages', 'meta_keywords', 6, 'kz', 'Байланыстар', '2022-06-29 08:40:37', '2022-06-29 08:40:37'),
(111, 'menu_items', 'title', 16, 'kz', 'Федерация Туралы', '2022-06-29 08:41:16', '2022-06-29 08:41:16'),
(112, 'menu_items', 'title', 16, 'en', 'About the Federation', '2022-06-29 08:41:16', '2022-06-29 08:41:16'),
(113, 'menu_items', 'title', 19, 'kz', 'Блог', '2022-06-29 08:41:35', '2022-06-29 08:41:35'),
(114, 'menu_items', 'title', 19, 'en', 'Blog', '2022-06-29 08:41:35', '2022-06-29 08:41:35'),
(115, 'menu_items', 'title', 18, 'kz', 'Жаңалықтар', '2022-06-29 08:41:54', '2022-06-29 08:41:54'),
(116, 'menu_items', 'title', 18, 'en', 'News', '2022-06-29 08:41:54', '2022-06-29 08:41:54'),
(117, 'menu_items', 'title', 17, 'kz', 'Іс-шара', '2022-06-29 08:42:15', '2022-06-29 08:42:15'),
(118, 'menu_items', 'title', 17, 'en', 'Events', '2022-06-29 08:42:15', '2022-06-29 08:42:15'),
(119, 'menu_items', 'title', 20, 'kz', 'Байланыстар', '2022-06-29 08:42:44', '2022-06-29 08:42:44'),
(120, 'menu_items', 'title', 20, 'en', 'Contacts', '2022-06-29 08:42:44', '2022-06-29 08:42:44'),
(121, 'data_rows', 'display_name', 76, 'en', 'Id', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(122, 'data_rows', 'display_name', 77, 'en', 'Заголовок', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(123, 'data_rows', 'display_name', 78, 'en', 'Изображение', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(124, 'data_rows', 'display_name', 79, 'en', 'Alt Изображение', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(125, 'data_rows', 'display_name', 80, 'en', 'Фото: источник', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(126, 'data_rows', 'display_name', 81, 'en', 'Контент', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(127, 'data_rows', 'display_name', 82, 'en', 'Ссылка (Уникальная)', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(128, 'data_rows', 'display_name', 83, 'en', 'Статус', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(129, 'data_rows', 'display_name', 84, 'en', 'Порядковый номер', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(130, 'data_rows', 'display_name', 85, 'en', 'SEO Заголовок', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(131, 'data_rows', 'display_name', 86, 'en', 'Meta Описание', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(132, 'data_rows', 'display_name', 87, 'en', 'Meta Ключевые слова', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(133, 'data_rows', 'display_name', 88, 'en', 'Дата создания', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(134, 'data_rows', 'display_name', 89, 'en', 'Updated At', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(135, 'data_types', 'display_name_singular', 9, 'en', 'Блог', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(136, 'data_types', 'display_name_plural', 9, 'en', 'Блог', '2022-06-29 09:12:35', '2022-06-29 09:12:35'),
(137, 'data_rows', 'display_name', 118, 'en', 'Id', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(138, 'data_rows', 'display_name', 120, 'en', 'Заголовок', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(139, 'data_rows', 'display_name', 121, 'en', 'Краткое описание', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(140, 'data_rows', 'display_name', 122, 'en', 'Изображение', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(141, 'data_rows', 'display_name', 123, 'en', 'Alt Изображение', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(142, 'data_rows', 'display_name', 124, 'en', 'Ссылка', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(143, 'data_rows', 'display_name', 125, 'en', 'Дата создания', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(144, 'data_types', 'display_name_singular', 12, 'en', 'Наши партнёры', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(145, 'data_types', 'display_name_plural', 12, 'en', 'Наши партнёры', '2022-06-29 14:52:44', '2022-06-29 14:52:44'),
(146, 'titles', 'title', 1, 'en', 'Деловая программа 41-го чемпионата мира по Го', '2022-06-29 15:27:01', '2022-06-29 15:27:01'),
(147, 'titles', 'excerpt', 1, 'en', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ultrices velit ut nibh. Turpis venenatis, tempor, cras id at. Lectus id odio amet magna felis phasellus.', '2022-06-29 15:27:01', '2022-06-29 15:27:01'),
(148, 'titles', 'title', 1, 'kz', 'Деловая программа 41-го чемпионата мира по Го', '2022-06-29 15:27:08', '2022-06-29 15:27:08'),
(149, 'titles', 'excerpt', 1, 'kz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ultrices velit ut nibh. Turpis venenatis, tempor, cras id at. Lectus id odio amet magna felis phasellus.', '2022-06-29 15:27:08', '2022-06-29 15:27:08'),
(150, 'data_rows', 'display_name', 136, 'en', 'Номер', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(151, 'data_rows', 'display_name', 137, 'en', 'Фамилия', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(152, 'data_rows', 'display_name', 138, 'en', 'Имя', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(153, 'data_rows', 'display_name', 139, 'en', 'Номер телефона', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(154, 'data_rows', 'display_name', 140, 'en', 'Email', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(155, 'data_rows', 'display_name', 141, 'en', 'Дата создания', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(156, 'data_rows', 'display_name', 142, 'en', 'Updated At', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(157, 'data_types', 'display_name_singular', 15, 'en', 'Заявку на участие', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(158, 'data_types', 'display_name_plural', 15, 'en', 'Заявку на участие', '2022-06-29 16:10:21', '2022-06-29 16:10:21'),
(159, 'menu_items', 'title', 31, 'en', 'Заявку на Мероприятия', '2022-06-29 16:25:26', '2022-06-29 16:25:26'),
(160, 'data_rows', 'display_name', 143, 'en', 'Номер', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(161, 'data_rows', 'display_name', 144, 'en', 'Фамилия', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(162, 'data_rows', 'display_name', 145, 'en', 'Имя', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(163, 'data_rows', 'display_name', 146, 'en', 'Номер телефона', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(164, 'data_rows', 'display_name', 147, 'en', 'Email', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(165, 'data_rows', 'display_name', 148, 'en', 'Дата создания', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(166, 'data_rows', 'display_name', 149, 'en', 'Updated At', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(167, 'data_types', 'display_name_singular', 16, 'en', 'Заявку на Мероприятия', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(168, 'data_types', 'display_name_plural', 16, 'en', 'Заявку на Мероприятия', '2022-06-29 16:26:03', '2022-06-29 16:26:03'),
(169, 'pages', 'title', 7, 'en', 'Privacy Policy', '2022-06-29 16:38:57', '2022-06-29 16:39:49'),
(170, 'pages', 'seo_title', 7, 'en', 'Политика конфиденциальности', '2022-06-29 16:38:57', '2022-06-29 16:38:57'),
(171, 'pages', 'meta_description', 7, 'en', 'Политика конфиденциальности', '2022-06-29 16:38:57', '2022-06-29 16:38:57'),
(172, 'pages', 'meta_keywords', 7, 'en', 'Политика конфиденциальности', '2022-06-29 16:38:57', '2022-06-29 16:38:57'),
(173, 'pages', 'title', 7, 'kz', 'Құпиялылық саясаты', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(174, 'pages', 'body', 7, 'kz', '<h1>Политика конфиденциальности</h1>\n<p><strong> Настоящее Пользовательское соглашение (далее также &ndash; &laquo;Соглашение&raquo;) регулирует отношения по использованию функций Сайта и общие условия возможного оказания Услуг между Исполнителем (далее также - &laquo;Владелец Сайта&raquo;), с одной стороны, и физическим или юридическим лицом Заказчиком, принявшим условия настоящего Соглашения путём присоединения к настоящему Соглашению в целом и безоговорочно (далее также &ndash; &laquo;Пользователь сайта&raquo;), с другой стороны, далее при совместном упоминании именуемые &laquo;Стороны&raquo;, а по отдельности &ndash; &laquo;Сторона&raquo;. </strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Настоящее Соглашение и отношения Сторон, возникшие из настоящего Соглашения, регулируются законодательством.</p>\n<h2>Общие положения Пользовательского соглашения</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В настоящем документе и вытекающих или связанным с ним отношениях Сторон применяются следующие термины и определения:</p>\n<ul>\n<li>а) Сайт Владельца/ Сайт &mdash; интернет-сайт, размещенные в домене Владельца сайта и его поддоменах.</li>\n<li>б) Соглашение &mdash; настоящее соглашение со всеми дополнениями и изменениями.</li>\n<li>в) Администрация/представитель Сайта, Владельца Сайта &ndash; лицо уполномоченное Владельцем сайта на действия предусмотренные Соглашением.</li>\n<li>г) Посетитель - любое лицо, которое перешло на Сайт и находится на нем, используя его свойства для ознакомления с контентом размещенным на Сайте.</li>\n<li>д) Пользователь &mdash; дееспособное физическое лицо, присоединившееся к настоящему Соглашению в собственном интересе либо выступающее от имени и в интересах представляемого им юридического лица.</li>\n</ul>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Любой посетитель Сайта по собственной воле может заполнить предоставленную для этого форму и стать Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайт содержит информацию и материалы о товарах и услугах, которые в последующем могут быть предоставлены Пользователю в случае заключения реального Договора. Если какое-то физическое лицо зарегистрировалось в качестве Пользователя от имени уполномочившего его на то юридического лица, это означает, что юридическое лицо принимает Соглашение в полном объеме с последующими из этого последствиями.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В частности, при использовании Сайта, Пользователь не вправе выдавать себя за другого человека или представителя организации и/или сообщества без достаточных на то прав, в том числе за сотрудников Сайта, а также применять любые другие формы и способы незаконного представительства других лиц в сети Интернет, а также вводить Пользователей, Сайт и его представителей в заблуждение относительно свойств и характеристик каких- либо субъектов или объектов.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В случае обнаружения нарушения прав и/или интересов в связи с использованием Сайта, в том числе иным Пользователем, следует сообщить об этом Владельцу сайта, путем направления письменного уведомления, сообщения по телефону с подробным изложением обстоятельств нарушения и/или гипертекстовой ссылкой на страницу, содержащую материалы, которыми нарушаются соответствующие права и/или интересы Сайта.</p>\n<h2>Интеллектуальные права</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Все объекты, доступные при помощи Сайта, в том числе элементы дизайна, текст, графические изображения, иллюстрации, видео, компьютерные программы, базы данных, музыка, звуки и другие объекты, размещенные в рамках Сайта, являются объектами исключительных прав Сайта и других правообладателей. Сайт предоставляет Пользователю право его функционального использования в пределах его общих функциональных возможностей.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Использование Сайта иными способами, в том числе путем копирования (воспроизведения) размещенного на Сайте Контента, а также входящих в состав Сайта элементов дизайна, компьютерных программ и баз данных, их декомпиляция, модификация, и последующее распространение, публичный показ, доведение до всеобщего сведения, строго запрещены, если иное не предусмотрено настоящим Соглашением и заключенными Договорами.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Пользователь не вправе воспроизводить, повторять и копировать, продавать, а также использовать для каких-либо коммерческих целей какие-либо части Сайта (включая Контент, доступный Пользователю посредством Приложений), или доступ к ним, кроме тех случаев, когда Пользователь получил такое разрешение от Сайта/Владельцев Сайта, либо когда это прямо предусмотрено дополнительными документами (Договорами, Приложениями и т.п.).</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Использование Пользователем Сайта, а также размещенного в нем Контента для личного некоммерческого использования допускается при условии соблюдения всех законов охраны авторского права, смежных прав, товарных знаков, других уведомлений об авторстве, сохранения имени (или псевдонима) автора/наименования правообладателя в неизменном виде, сохранении соответствующего объекта в неизменном виде. Исключение составляют случаи, прямо предусмотренные законодательством, регулирующее общую защиту данных или дополнительными документами на использование Сайта.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайт может содержать ссылки на сайты в сети Интернет (сайты третьих лиц). Указанные третьи лица и их контент не проверяются Сайтом на соответствие тем или иным требованиям (достоверности, полноты и т.п.). Сайт не несет ответственности за любую информацию, материалы, размещенные на сайтах третьих лиц, к которым Пользователь получает доступ в связи с использованием Сайта, а также за доступность таких сайтов или информации и последствия их использования Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Ссылка (в любой форме) на любой сайт, продукт, услугу, любую информацию коммерческого или некоммерческого характера, размещенная на Сайте, не является одобрением или рекомендацией данных продуктов (услуг, деятельности) со стороны Сайта, за исключением случаев, когда Сайт на это прямо указывает.</p>\n<h2>Уведомления</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Владелец Сайта/Администрация/Представитель сайта и лица, представителями которых является Сайт, вправе посылать Пользователю на указанный им электронный адрес, телефон, ссылку на страничку в социальных сетях информационные электронные сообщения о событиях, происходящих в рамках Сайта или в связи с ним и лиц которых он представляет.</p>\n<h2>Заключительные положения</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Данное Соглашение регулируется и толкуется в соответствии с действующим законодательством, регулирующее общую защиту данных . Вопросы, не урегулированные настоящим Соглашением, подлежат разрешению в соответствии с законодательством. Все возможные споры, вытекающие из отношений, регулируемые настоящим Соглашением, разрешаются в порядке, установленном действующим законодательством.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Если по тем или иным причинам одно или несколько положений настоящего Соглашения будут признаны недействительными или не имеющими юридической силы, это не означает что остальные положения Соглашения являются не действительными или не применимыми.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Временное бездействие со стороны Сайта в случае нарушения Пользователем либо иными Пользователями положений Соглашений не лишает Сайт права предпринять соответствующие действия в защиту своих интересов позднее, а также не означает, что Сайт отказался от своих прав в случае совершения в последующем подобных либо сходных нарушений.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Все споры по Соглашению или в связи с ним подлежат рассмотрению в суде по месту нахождения Сайта в соответствии с действующим законодательством.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Данное ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ разработано и действует в рамках действующего Законодательства о защите физических лиц в отношении обработки персональных данных и о свободном перемещении таких данных.</p>\n<h2>Политика конфиденциальности</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Настоящая Политика является неотъемлемой частью Пользовательского соглашения (далее &mdash; &laquo;Соглашение&raquo;), размещенного и/или доступного в сети Интернет на домене Сайта, а также иных заключенных с Пользователем договоров, или договоров которые могут быть заключены с Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Пользуясь услугами Сайта, Пользователь выражает свое согласие с Политикой конфиденциальности персональных данных сайта (далее - Политикой Конфиденциальности), и по своей воле и в своих интересах дает письменное согласие на следующие способы обработки Персональной информации: сбор, запись, систематизация, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение в установленных настоящей Политикой целях с использованием средств автоматизации или без использования таких средств по усмотрению. В случае несогласия с условиями Политики конфиденциальности Клиент/Пользователь не должен передавать персональные данные путем заполнения соответствующих форм.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Политика конфиденциальности действует в отношении всей персональной информации, которую Сайт, может получить о Клиенте/Пользователе во время использования сайта, программ и продуктов сайта.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<h2>Цели сбора персональной информации пользователя</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайта может использовать персональные данные Клиента/Пользователя в целях:</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Идентификации Пользователя, зарегистрированного на Сайте.</p>\n<p>&nbsp;</p>\n<p>Предоставления Пользователю доступа к ресурсам Сайта и партнеров Сайта.</p>\n<p>&nbsp;</p>\n<p>Установления с Пользователем обратной связи, включая телефонный звонок, направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработка запросов и заявок от Пользователя, направления рекламной и другой информации об акциях и других услугах Сайта.</p>\n<p>&nbsp;</p>\n<p style=\"color: red;\">Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.</p>\n<p>&nbsp;</p>\n<p>Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.</p>\n<p>Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем связанных с использованием Сайта.</p>\n<p>&nbsp;</p>\n<p>Предоставления Пользователю обновлений услуг, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени Сайта или от имени партнеров Сайта.</p>\n<p>&nbsp;</p>\n<p>Осуществления рекламной деятельности Сайта.</p>\n<p>&nbsp;</p>\n<p>Предоставления доступа Пользователю на сайты или сервисы партнеров Сайта с целью получения продуктов, обновлений и услуг.</p>\n<p><br /><br /></p>\n<p>&nbsp;</p>', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(175, 'pages', 'body', 7, 'en', '<h1>Политика конфиденциальности</h1>\n<p><strong> Настоящее Пользовательское соглашение (далее также &ndash; &laquo;Соглашение&raquo;) регулирует отношения по использованию функций Сайта и общие условия возможного оказания Услуг между Исполнителем (далее также - &laquo;Владелец Сайта&raquo;), с одной стороны, и физическим или юридическим лицом Заказчиком, принявшим условия настоящего Соглашения путём присоединения к настоящему Соглашению в целом и безоговорочно (далее также &ndash; &laquo;Пользователь сайта&raquo;), с другой стороны, далее при совместном упоминании именуемые &laquo;Стороны&raquo;, а по отдельности &ndash; &laquo;Сторона&raquo;. </strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Настоящее Соглашение и отношения Сторон, возникшие из настоящего Соглашения, регулируются законодательством.</p>\n<h2>Общие положения Пользовательского соглашения</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В настоящем документе и вытекающих или связанным с ним отношениях Сторон применяются следующие термины и определения:</p>\n<ul>\n<li>а) Сайт Владельца/ Сайт &mdash; интернет-сайт, размещенные в домене Владельца сайта и его поддоменах.</li>\n<li>б) Соглашение &mdash; настоящее соглашение со всеми дополнениями и изменениями.</li>\n<li>в) Администрация/представитель Сайта, Владельца Сайта &ndash; лицо уполномоченное Владельцем сайта на действия предусмотренные Соглашением.</li>\n<li>г) Посетитель - любое лицо, которое перешло на Сайт и находится на нем, используя его свойства для ознакомления с контентом размещенным на Сайте.</li>\n<li>д) Пользователь &mdash; дееспособное физическое лицо, присоединившееся к настоящему Соглашению в собственном интересе либо выступающее от имени и в интересах представляемого им юридического лица.</li>\n</ul>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Любой посетитель Сайта по собственной воле может заполнить предоставленную для этого форму и стать Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайт содержит информацию и материалы о товарах и услугах, которые в последующем могут быть предоставлены Пользователю в случае заключения реального Договора. Если какое-то физическое лицо зарегистрировалось в качестве Пользователя от имени уполномочившего его на то юридического лица, это означает, что юридическое лицо принимает Соглашение в полном объеме с последующими из этого последствиями.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В частности, при использовании Сайта, Пользователь не вправе выдавать себя за другого человека или представителя организации и/или сообщества без достаточных на то прав, в том числе за сотрудников Сайта, а также применять любые другие формы и способы незаконного представительства других лиц в сети Интернет, а также вводить Пользователей, Сайт и его представителей в заблуждение относительно свойств и характеристик каких- либо субъектов или объектов.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>В случае обнаружения нарушения прав и/или интересов в связи с использованием Сайта, в том числе иным Пользователем, следует сообщить об этом Владельцу сайта, путем направления письменного уведомления, сообщения по телефону с подробным изложением обстоятельств нарушения и/или гипертекстовой ссылкой на страницу, содержащую материалы, которыми нарушаются соответствующие права и/или интересы Сайта.</p>\n<h2>Интеллектуальные права</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Все объекты, доступные при помощи Сайта, в том числе элементы дизайна, текст, графические изображения, иллюстрации, видео, компьютерные программы, базы данных, музыка, звуки и другие объекты, размещенные в рамках Сайта, являются объектами исключительных прав Сайта и других правообладателей. Сайт предоставляет Пользователю право его функционального использования в пределах его общих функциональных возможностей.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Использование Сайта иными способами, в том числе путем копирования (воспроизведения) размещенного на Сайте Контента, а также входящих в состав Сайта элементов дизайна, компьютерных программ и баз данных, их декомпиляция, модификация, и последующее распространение, публичный показ, доведение до всеобщего сведения, строго запрещены, если иное не предусмотрено настоящим Соглашением и заключенными Договорами.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Пользователь не вправе воспроизводить, повторять и копировать, продавать, а также использовать для каких-либо коммерческих целей какие-либо части Сайта (включая Контент, доступный Пользователю посредством Приложений), или доступ к ним, кроме тех случаев, когда Пользователь получил такое разрешение от Сайта/Владельцев Сайта, либо когда это прямо предусмотрено дополнительными документами (Договорами, Приложениями и т.п.).</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Использование Пользователем Сайта, а также размещенного в нем Контента для личного некоммерческого использования допускается при условии соблюдения всех законов охраны авторского права, смежных прав, товарных знаков, других уведомлений об авторстве, сохранения имени (или псевдонима) автора/наименования правообладателя в неизменном виде, сохранении соответствующего объекта в неизменном виде. Исключение составляют случаи, прямо предусмотренные законодательством, регулирующее общую защиту данных или дополнительными документами на использование Сайта.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайт может содержать ссылки на сайты в сети Интернет (сайты третьих лиц). Указанные третьи лица и их контент не проверяются Сайтом на соответствие тем или иным требованиям (достоверности, полноты и т.п.). Сайт не несет ответственности за любую информацию, материалы, размещенные на сайтах третьих лиц, к которым Пользователь получает доступ в связи с использованием Сайта, а также за доступность таких сайтов или информации и последствия их использования Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Ссылка (в любой форме) на любой сайт, продукт, услугу, любую информацию коммерческого или некоммерческого характера, размещенная на Сайте, не является одобрением или рекомендацией данных продуктов (услуг, деятельности) со стороны Сайта, за исключением случаев, когда Сайт на это прямо указывает.</p>\n<h2>Уведомления</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Владелец Сайта/Администрация/Представитель сайта и лица, представителями которых является Сайт, вправе посылать Пользователю на указанный им электронный адрес, телефон, ссылку на страничку в социальных сетях информационные электронные сообщения о событиях, происходящих в рамках Сайта или в связи с ним и лиц которых он представляет.</p>\n<h2>Заключительные положения</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Данное Соглашение регулируется и толкуется в соответствии с действующим законодательством, регулирующее общую защиту данных . Вопросы, не урегулированные настоящим Соглашением, подлежат разрешению в соответствии с законодательством. Все возможные споры, вытекающие из отношений, регулируемые настоящим Соглашением, разрешаются в порядке, установленном действующим законодательством.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Если по тем или иным причинам одно или несколько положений настоящего Соглашения будут признаны недействительными или не имеющими юридической силы, это не означает что остальные положения Соглашения являются не действительными или не применимыми.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Временное бездействие со стороны Сайта в случае нарушения Пользователем либо иными Пользователями положений Соглашений не лишает Сайт права предпринять соответствующие действия в защиту своих интересов позднее, а также не означает, что Сайт отказался от своих прав в случае совершения в последующем подобных либо сходных нарушений.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Все споры по Соглашению или в связи с ним подлежат рассмотрению в суде по месту нахождения Сайта в соответствии с действующим законодательством.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Данное ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ разработано и действует в рамках действующего Законодательства о защите физических лиц в отношении обработки персональных данных и о свободном перемещении таких данных.</p>\n<h2>Политика конфиденциальности</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Настоящая Политика является неотъемлемой частью Пользовательского соглашения (далее &mdash; &laquo;Соглашение&raquo;), размещенного и/или доступного в сети Интернет на домене Сайта, а также иных заключенных с Пользователем договоров, или договоров которые могут быть заключены с Пользователем.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Пользуясь услугами Сайта, Пользователь выражает свое согласие с Политикой конфиденциальности персональных данных сайта (далее - Политикой Конфиденциальности), и по своей воле и в своих интересах дает письменное согласие на следующие способы обработки Персональной информации: сбор, запись, систематизация, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение в установленных настоящей Политикой целях с использованием средств автоматизации или без использования таких средств по усмотрению. В случае несогласия с условиями Политики конфиденциальности Клиент/Пользователь не должен передавать персональные данные путем заполнения соответствующих форм.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Политика конфиденциальности действует в отношении всей персональной информации, которую Сайт, может получить о Клиенте/Пользователе во время использования сайта, программ и продуктов сайта.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<h2>Цели сбора персональной информации пользователя</h2>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Сайта может использовать персональные данные Клиента/Пользователя в целях:</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Идентификации Пользователя, зарегистрированного на Сайте.</p>\n<p>&nbsp;</p>\n<p>Предоставления Пользователю доступа к ресурсам Сайта и партнеров Сайта.</p>\n<p>&nbsp;</p>\n<p>Установления с Пользователем обратной связи, включая телефонный звонок, направление уведомлений, запросов, касающихся использования Сайта, оказания услуг, обработка запросов и заявок от Пользователя, направления рекламной и другой информации об акциях и других услугах Сайта.</p>\n<p>&nbsp;</p>\n<p style=\"color: red;\">Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.</p>\n<p>&nbsp;</p>\n<p>Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.</p>\n<p>Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем связанных с использованием Сайта.</p>\n<p>&nbsp;</p>\n<p>Предоставления Пользователю обновлений услуг, специальных предложений, информации о ценах, новостной рассылки и иных сведений от имени Сайта или от имени партнеров Сайта.</p>\n<p>&nbsp;</p>\n<p>Осуществления рекламной деятельности Сайта.</p>\n<p>&nbsp;</p>\n<p>Предоставления доступа Пользователю на сайты или сервисы партнеров Сайта с целью получения продуктов, обновлений и услуг.</p>\n<p>&nbsp;</p>', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(176, 'pages', 'seo_title', 7, 'kz', 'Политика конфиденциальности', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(177, 'pages', 'meta_description', 7, 'kz', 'Политика конфиденциальности', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(178, 'pages', 'meta_keywords', 7, 'kz', 'Политика конфиденциальности', '2022-06-29 16:39:49', '2022-06-29 16:39:49'),
(179, 'contacts', 'translate_value', 3, 'kz', 'Алматы қ., Назарбаев к-сі, 47', '2022-06-29 16:52:41', '2022-06-29 16:52:41'),
(180, 'contacts', 'translate_value', 3, 'en', 'Almaty, Nazarbayev str., 47', '2022-06-29 16:52:41', '2022-06-29 16:52:41'),
(181, 'data_rows', 'display_name', 104, 'en', 'Id', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(182, 'data_rows', 'display_name', 105, 'en', 'Заголовок', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(183, 'data_rows', 'display_name', 106, 'en', 'Изображение', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(184, 'data_rows', 'display_name', 107, 'en', 'Alt Изображение', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(185, 'data_rows', 'display_name', 108, 'en', 'Фото: источник', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(186, 'data_rows', 'display_name', 109, 'en', 'Контент', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(187, 'data_rows', 'display_name', 110, 'en', 'Ссылка (Уникальная)', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(188, 'data_rows', 'display_name', 111, 'en', 'Статус', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(189, 'data_rows', 'display_name', 112, 'en', 'Порядковый номер', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(190, 'data_rows', 'display_name', 113, 'en', 'SEO Заголовок', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(191, 'data_rows', 'display_name', 114, 'en', 'Meta Описание', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(192, 'data_rows', 'display_name', 115, 'en', 'Meta Ключевые слова', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(193, 'data_rows', 'display_name', 116, 'en', 'Дата создания', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(194, 'data_rows', 'display_name', 117, 'en', 'Updated At', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(195, 'data_types', 'display_name_singular', 11, 'en', 'Мероприятия', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(196, 'data_types', 'display_name_plural', 11, 'en', 'Мероприятия', '2022-06-29 17:02:00', '2022-06-29 17:02:00'),
(197, 'events', 'title', 1, 'en', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:02:11', '2022-06-29 17:02:11'),
(198, 'events', 'content', 1, 'en', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-06-29 17:02:11', '2022-06-29 17:02:11'),
(199, 'events', 'seo_title', 1, 'en', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:02:11', '2022-06-29 17:02:11'),
(200, 'events', 'meta_description', 1, 'en', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:02:11', '2022-06-29 17:02:11'),
(201, 'events', 'meta_keywords', 1, 'en', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:02:11', '2022-06-29 17:02:11'),
(202, 'events', 'title', 1, 'kz', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:03:25', '2022-06-29 17:03:25'),
(203, 'events', 'content', 1, 'kz', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-06-29 17:03:25', '2022-06-29 17:03:25'),
(204, 'events', 'seo_title', 1, 'kz', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:03:25', '2022-06-29 17:03:25'),
(205, 'events', 'meta_description', 1, 'kz', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:03:25', '2022-06-29 17:03:25'),
(206, 'events', 'meta_keywords', 1, 'kz', 'Открытие всемирного фестиваля по го «GENIUS EXTREME»', '2022-06-29 17:03:25', '2022-06-29 17:03:25'),
(207, 'data_rows', 'display_name', 126, 'en', 'Id', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(208, 'data_rows', 'display_name', 127, 'en', 'Заголовок', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(209, 'data_rows', 'display_name', 128, 'en', 'Изображение', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(210, 'data_rows', 'display_name', 129, 'en', 'Краткое описание', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(211, 'data_rows', 'display_name', 130, 'en', 'Дата создания', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(212, 'data_rows', 'display_name', 131, 'en', 'Updated At', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(213, 'data_types', 'display_name_singular', 13, 'en', 'Текст Гл. стр.', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(214, 'data_types', 'display_name_plural', 13, 'en', 'Текст Гл. стр.', '2022-06-30 04:10:16', '2022-06-30 04:10:16'),
(215, 'titles', 'button_text', 1, 'kz', 'Өтінім', '2022-06-30 04:15:34', '2022-06-30 04:15:34'),
(216, 'titles', 'button_text', 1, 'en', 'Submit ', '2022-06-30 04:15:34', '2022-06-30 04:15:52');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$2HaEV8sbwIFSMK3Pnhf57e/wxSAMnJn/mizoEt/v1Onrs6vb4.GiG', 'KsTT5zRXImh3XG6YoOeGCgS0XCDlbIkgandQ9N9Zajuk5P6QY3JhijZDTwUh', '{\"locale\":\"ru\"}', '2022-06-28 22:26:54', '2022-06-29 04:49:45');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `eventbacks`
--
ALTER TABLE `eventbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mailings`
--
ALTER TABLE `mailings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `eventbacks`
--
ALTER TABLE `eventbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `mailings`
--
ALTER TABLE `mailings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
