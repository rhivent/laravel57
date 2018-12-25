-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2018 pada 15.00
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel57`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`, `featured_img`) VALUES
(1, 'HALO JAKARTA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2018-11-08 07:05:34', '2018-11-08 01:15:35', NULL, NULL),
(2, 'HALO asdasadsaMASYARAKAT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1WAWJJDJAWJaWD', '2018-11-08 07:05:34', '2018-11-08 23:43:11', NULL, NULL),
(3, 'Halo Mr. Riventus', 'Sekarang waktunya makan siang', '2018-11-08 07:05:34', '2018-11-08 01:15:35', NULL, NULL),
(7, 'Halo idkwokw', 'wkowkowHalo idkwokw', '2018-11-08 07:51:35', '2018-11-08 01:15:35', NULL, NULL),
(8, 'Halo ahuhwuhauwhauw', 'Halo idkwokw', '2018-11-08 07:51:35', '2018-11-08 01:15:35', NULL, NULL),
(9, 'Ini adalah Post baru 1', 'KOWKOAKAOKWOAKOWKAODAKAVAV NOQJWRQKNAA DASNDA', '2018-11-08 20:32:03', '2018-11-08 20:32:03', NULL, NULL),
(10, 'Ini Post baru ke 2 juga', 'AMDAKMDKAWDIWIQJIJQIJDQIJWDQNMANSMDASDA', '2018-11-08 20:33:16', '2018-11-08 20:44:10', '2018-11-08 20:44:10', NULL),
(11, 'asawdawd', 'asasdaokdoakodkaw', '2018-11-08 21:20:16', '2018-11-08 21:20:16', NULL, NULL),
(12, 'QUVlx4N7ja', 'Architecto suscipit rerum voluptas dignissimos cum sed sint magnam. Expedita cupiditate nemo earum maiores illo sit. Eum sed ut et enim velit perferendis molestiae. Possimus ea sapiente unde dolores.', '2018-11-09 05:48:31', NULL, NULL, NULL),
(13, 'wEw2KTJWNU', 'Repellendus molestiae laudantium ipsa similique possimus neque voluptas. Velit rerum odit aut voluptas natus pariatur sunt. Modi debitis voluptatem et id et eaque sequi.', '2018-11-09 05:48:31', NULL, NULL, NULL),
(14, '6IPJ42hXTq', 'In labore nemo qui minus id omnis corporis. Voluptas nam accusamus temporibus dolorem mollitia. Labore excepturi voluptatem ut.', '2018-11-09 05:48:31', NULL, NULL, NULL),
(15, 'tQN7X4XC9w', 'Explicabo commodi veniam enim dolorem enim. Mollitia laudantium fugit optio rerum. Nostrum est fuga rem rerum eveniet dolore omnis. Rerum ab minima aspernatur.', '2018-11-09 05:48:31', NULL, NULL, NULL),
(16, '91DGUwxL92', 'Ipsum eius veniam repellendus molestiae non voluptatem id culpa. Sed animi quas pariatur eum repellendus. Unde minima sunt fugiat veniam accusamus officiis voluptatem.', '2018-11-09 05:48:32', NULL, NULL, NULL),
(17, 'fMmyJOV70s', 'Et qui inventore facilis distinctio cumque eveniet est ut. Ad consequatur quo ut perferendis ipsum laudantium. Tenetur omnis in soluta sint sed.', '2018-11-09 05:48:32', NULL, NULL, NULL),
(18, 'WN9w6ENiYQ', 'Quia sed maiores porro mollitia expedita illo delectus ut. Ipsum nobis doloremque fugit qui aliquam quis. Dolores molestias accusantium est dolore sapiente quis porro at.', '2018-11-09 05:48:32', NULL, NULL, NULL),
(19, 'vcSt9p3ih5', 'Voluptas expedita beatae hic beatae molestiae ut nesciunt. Sed unde tempora commodi qui. Ut non et molestiae accusantium quo aut quia necessitatibus.', '2018-11-09 05:48:32', NULL, NULL, NULL),
(20, 'SJos8PTe2Z', 'Nemo necessitatibus quam quas. Quia aut dignissimos architecto architecto velit.', '2018-11-09 05:48:33', NULL, NULL, NULL),
(21, 'VSNPjuTDfE', 'Libero error officia voluptas ut aut consequatur. Sunt ut sed fuga corrupti explicabo voluptatem. Doloribus sit ea amet fuga sed consequatur voluptas vel.', '2018-11-09 05:48:33', NULL, NULL, NULL),
(22, 'SYyYomyWJV', 'Et sit est expedita accusamus consequatur provident error. Qui id nihil dolorum accusantium suscipit. Deserunt rerum in rerum perferendis vitae.', '2018-11-09 05:48:33', NULL, NULL, NULL),
(23, 'nmglIFFHCl', 'Quis id et eos blanditiis velit tenetur. Sed modi suscipit aut. Adipisci nobis odit laboriosam repellat voluptatum. Molestias quis omnis ad.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(24, 'EjoiPlYA5n', 'Alias omnis et inventore laborum vel quis voluptas. Nobis aliquam cum aut vitae. Excepturi ea et quos laborum autem qui et. Distinctio praesentium et sit magnam iure modi ut.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(25, 'NFGrfufS1f', 'Enim voluptate iste dolores earum eos quidem molestias. Qui in sed id error qui perspiciatis. Nihil rem itaque id sunt iusto voluptate. Quia culpa assumenda omnis quibusdam qui.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(26, 'ie92updE9j', 'Praesentium porro vel amet tempore. Nihil ut ducimus enim veritatis aliquam omnis. Quia harum officiis quam labore quod veniam.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(27, '1p7mk75jSW', 'Voluptates voluptatem reprehenderit minima non. Quia qui et ratione et laboriosam enim sed. Laboriosam quam voluptates explicabo. Fuga eius et et qui.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(28, 'yeKmzVCqSn', 'Quaerat molestiae blanditiis quia eum sunt voluptatibus enim. Quo minima nisi harum placeat. Enim molestiae aut qui dignissimos alias neque.', '2018-11-09 05:59:44', NULL, NULL, NULL),
(29, 'V2JmvstXbU', 'Dolorem quibusdam veritatis sed id cupiditate. Aut repudiandae velit at et sed ad neque. Quia laudantium ea aspernatur quo quia adipisci est.', '2018-11-09 05:59:45', NULL, NULL, NULL),
(30, '5M6eScn4yW', 'Velit saepe sit asperiores eum similique. Sequi ut accusamus amet cumque. Nemo sunt reprehenderit omnis aspernatur totam expedita debitis. Aspernatur qui fuga ipsa omnis est eos ipsam.', '2018-11-09 05:59:45', NULL, NULL, NULL),
(31, 'e31upJ624s', 'Aspernatur dolor molestiae earum porro. Atque voluptatem necessitatibus qui.', '2018-11-09 05:59:45', NULL, NULL, NULL),
(32, 'dOFDCG5bnc', 'Iste ut quia consectetur fugiat natus vel. Ab facere quo culpa ullam beatae sit tenetur. Occaecati laudantium aliquam nobis expedita ipsam.', '2018-11-09 05:59:45', NULL, NULL, NULL),
(33, 'iMh54ZIUfn', 'Magnam quia repellat qui odio et recusandae iste. Perferendis nostrum in aut rerum quos similique ab ipsa. Suscipit et sint debitis. Eos vel dolor fugit dolores.', '2018-11-09 06:02:40', NULL, NULL, NULL),
(34, 'xO6thAjQgb', 'Et provident at ducimus aut rerum amet ut quibusdam. Omnis fugit rem deserunt illum error. Et aut perferendis rerum et ut nihil. Quis ea quas sint incidunt.', '2018-11-09 06:02:40', NULL, NULL, NULL),
(35, '3LqOykZJSB', 'Veritatis et vel et cupiditate impedit. Accusantium eius dolore omnis rerum possimus sit. Impedit architecto adipisci et voluptatem ea.', '2018-11-09 06:02:40', NULL, NULL, NULL),
(36, 'yhUJBaDeyW', 'Quidem amet necessitatibus consequatur omnis veritatis dicta. Vitae rerum tenetur voluptates. Ut iste vitae et dolores quae quia. Voluptatem est laudantium odit voluptatem.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(37, 'G91MBlKG2g', 'Ut sit quos ea qui non. Quaerat numquam excepturi nesciunt qui qui non. Aut ea aut itaque neque nemo et ex. Nemo maxime eos aut blanditiis dolor vero quod.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(38, 'UlcgBKEQZj', 'Voluptatibus et a et libero. Doloribus in voluptas quia et. Quibusdam nihil ut rerum temporibus.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(39, 'BQC2HMXlSp', 'Quo quia ab expedita omnis. Nihil provident mollitia ipsam voluptatem nulla. Dolores cum suscipit et et atque non qui. In beatae sequi nesciunt est minima deserunt.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(40, 'Z3iNJUQYN5', 'Est reiciendis quia optio unde. Quibusdam quaerat eos ea quam sint. Voluptate eos recusandae sequi molestiae earum debitis.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(41, 'gXRnSEfbIY', 'Hic cumque et voluptas labore. Delectus iste aut esse repellendus vel nobis aperiam odio. Nobis repellat eveniet voluptas at eligendi. Quo enim nihil iure quisquam eligendi.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(42, 'Qvv2rN50GE', 'Nobis in quisquam nemo in. Temporibus maxime enim accusantium qui. Quia et et ut exercitationem. Natus et eos blanditiis fugiat est ut.', '2018-11-09 06:02:41', NULL, NULL, NULL),
(43, 'asdasdasdasda', 'SADAODKAOSDKOASD', '2018-11-08 23:43:25', '2018-11-08 23:43:25', NULL, NULL),
(44, 'asdasdas', 'sdSDADadasdas', '2018-11-11 22:19:12', '2018-11-11 22:19:12', NULL, NULL),
(45, 'postingan mail1', 'postingan mail1123k1231', '2018-11-11 22:27:27', '2018-11-11 22:27:27', NULL, NULL),
(46, 'postingan mail2', 'postingan mail2asmdkamskdma', '2018-11-11 22:29:40', '2018-11-11 22:30:17', '2018-11-11 22:30:17', NULL),
(47, 'postingan mail2', 'postingan mail2asmdkamskdma', '2018-11-11 22:30:07', '2018-11-11 22:30:07', NULL, NULL),
(48, 'posting tesssting rounte', 'posting tesssting rounte1111', '2018-11-11 22:44:30', '2018-11-11 22:44:30', NULL, NULL),
(49, 'asdaee1e1e1', 'asdcacacaeeee', '2018-11-12 02:10:23', '2018-11-12 02:10:23', NULL, '1542013822.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_09_042422_create_forums_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
