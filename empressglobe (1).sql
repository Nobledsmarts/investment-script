-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 02:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empressglobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_funding_requests`
--

CREATE TABLE `account_funding_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `type` enum('deposit_balance','currently_invested','referral_bonus') COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` enum('credit','debit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_funding_requests`
--

INSERT INTO `account_funding_requests` (`id`, `user_id`, `receiver_id`, `amount`, `type`, `action`, `created_at`, `updated_at`, `approved_at`, `deleted_at`, `denied_at`) VALUES
(1, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 12:34:41', '2021-12-08 12:34:41', '2021-12-08 12:34:41', NULL, NULL),
(2, 2, 2, '100.00', 'currently_invested', 'credit', '2021-12-08 12:34:54', '2021-12-08 12:34:54', '2021-12-08 12:34:54', NULL, NULL),
(3, 2, 2, '100.00', 'currently_invested', 'debit', '2021-12-08 12:35:02', '2021-12-08 12:35:02', '2021-12-08 12:35:02', NULL, NULL),
(4, 2, 2, '100.00', 'currently_invested', 'debit', '2021-12-08 12:35:10', '2021-12-08 12:35:10', '2021-12-08 12:35:10', NULL, NULL),
(5, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 12:36:44', '2021-12-08 12:36:44', '2021-12-08 12:36:44', NULL, NULL),
(6, 2, 2, '100.00', 'currently_invested', 'credit', '2021-12-08 12:36:58', '2021-12-08 12:36:58', '2021-12-08 12:36:58', NULL, NULL),
(7, 2, 2, '200.00', 'currently_invested', 'credit', '2021-12-08 12:41:50', '2021-12-08 12:41:50', '2021-12-08 12:41:50', NULL, NULL),
(8, 2, 2, '1000.00', 'currently_invested', 'debit', '2021-12-08 12:42:02', '2021-12-08 12:42:02', '2021-12-08 12:42:02', NULL, NULL),
(9, 2, 2, '100.00', 'currently_invested', 'debit', '2021-12-08 12:42:17', '2021-12-08 12:42:17', '2021-12-08 12:42:17', NULL, NULL),
(10, 2, 2, '100.00', 'currently_invested', 'debit', '2021-12-08 12:43:55', '2021-12-08 12:43:55', '2021-12-08 12:43:55', NULL, NULL),
(11, 2, 2, '1000.00', 'currently_invested', 'credit', '2021-12-08 12:44:06', '2021-12-08 12:44:06', '2021-12-08 12:44:06', NULL, NULL),
(12, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 12:54:50', '2021-12-08 12:54:50', '2021-12-08 12:54:50', NULL, NULL),
(13, 2, 2, '1000.00', 'currently_invested', 'credit', '2021-12-08 12:56:06', '2021-12-08 12:56:06', '2021-12-08 12:56:06', NULL, NULL),
(14, 2, 2, '100.00', 'currently_invested', 'debit', '2021-12-08 12:56:13', '2021-12-08 12:56:13', '2021-12-08 12:56:13', NULL, NULL),
(15, 2, 2, '1000.00', 'currently_invested', 'debit', '2021-12-08 12:56:20', '2021-12-08 12:56:20', '2021-12-08 12:56:20', NULL, NULL),
(16, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 12:56:28', '2021-12-08 12:56:28', '2021-12-08 12:56:28', NULL, NULL),
(17, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 12:56:36', '2021-12-08 12:56:36', '2021-12-08 12:56:36', NULL, NULL),
(18, 2, 2, '500.00', 'currently_invested', 'debit', '2021-12-08 12:56:44', '2021-12-08 12:56:44', '2021-12-08 12:56:44', NULL, NULL),
(19, 2, 2, '1000.00', 'currently_invested', 'credit', '2021-12-08 12:56:52', '2021-12-08 12:56:52', '2021-12-08 12:56:52', NULL, NULL),
(20, 2, 2, '200.00', 'referral_bonus', 'debit', '2021-12-08 12:58:16', '2021-12-08 12:58:16', '2021-12-08 12:58:16', NULL, NULL),
(21, 2, 2, '100.00', 'referral_bonus', 'debit', '2021-12-08 12:58:25', '2021-12-08 12:58:25', '2021-12-08 12:58:25', NULL, NULL),
(22, 2, 2, '200.00', 'referral_bonus', 'debit', '2021-12-08 13:01:32', '2021-12-08 13:01:32', '2021-12-08 13:01:32', NULL, NULL),
(23, 2, 2, '1000.00', 'referral_bonus', 'credit', '2021-12-08 13:01:46', '2021-12-08 13:01:46', '2021-12-08 13:01:46', NULL, NULL),
(24, 2, 2, '200.00', 'referral_bonus', 'debit', '2021-12-08 13:01:55', '2021-12-08 13:01:55', '2021-12-08 13:01:55', NULL, NULL),
(25, 2, 2, '567.00', 'referral_bonus', 'debit', '2021-12-08 13:02:03', '2021-12-08 13:02:03', '2021-12-08 13:02:03', NULL, NULL),
(26, 2, 2, '1000.00', 'referral_bonus', 'debit', '2021-12-08 13:02:10', '2021-12-08 13:02:10', '2021-12-08 13:02:10', NULL, NULL),
(27, 2, 2, '200.00', 'deposit_balance', 'debit', '2021-12-08 13:02:44', '2021-12-08 13:02:44', '2021-12-08 13:02:44', NULL, NULL),
(28, 2, 2, '1000.00', 'deposit_balance', 'credit', '2021-12-08 13:02:55', '2021-12-08 13:02:55', '2021-12-08 13:02:55', NULL, NULL),
(29, 2, 2, '100.00', 'deposit_balance', 'debit', '2021-12-08 13:03:07', '2021-12-08 13:03:07', '2021-12-08 13:03:07', NULL, NULL),
(30, 2, 2, '100.00', 'deposit_balance', 'debit', '2021-12-08 13:03:34', '2021-12-08 13:03:34', '2021-12-08 13:03:34', NULL, NULL),
(31, 2, 2, '1000.00', 'deposit_balance', 'credit', '2021-12-08 13:03:45', '2021-12-08 13:03:45', '2021-12-08 13:03:45', NULL, NULL),
(32, 2, 2, '200.00', 'referral_bonus', 'debit', '2021-12-08 13:04:03', '2021-12-08 13:04:03', '2021-12-08 13:04:03', NULL, NULL),
(33, 2, 2, '567.00', 'referral_bonus', 'credit', '2021-12-08 13:04:14', '2021-12-08 13:04:14', '2021-12-08 13:04:14', NULL, NULL),
(34, 2, 2, '1000.00', 'referral_bonus', 'credit', '2021-12-08 13:04:25', '2021-12-08 13:04:25', '2021-12-08 13:04:25', NULL, NULL),
(35, 2, 2, '1000.00', 'referral_bonus', 'debit', '2021-12-08 13:04:35', '2021-12-08 13:04:35', '2021-12-08 13:04:35', NULL, NULL),
(36, 2, 2, '1000.00', 'referral_bonus', 'debit', '2021-12-08 13:04:43', '2021-12-08 13:04:43', '2021-12-08 13:04:43', NULL, NULL),
(37, 2, 2, '567.00', 'referral_bonus', 'debit', '2021-12-08 13:04:52', '2021-12-08 13:04:52', '2021-12-08 13:04:52', NULL, NULL),
(38, 2, 2, '200.00', 'currently_invested', 'debit', '2021-12-08 13:05:05', '2021-12-08 13:05:05', '2021-12-08 13:05:05', NULL, NULL),
(39, 2, 2, '1000.00', 'currently_invested', 'credit', '2021-12-08 13:05:17', '2021-12-08 13:05:17', '2021-12-08 13:05:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallets`
--

CREATE TABLE `admin_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_traded` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_investment_plans`
--

CREATE TABLE `child_investment_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_investment_plan_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `maximum_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `interest_rate` decimal(5,2) NOT NULL,
  `referral_bonus` decimal(5,2) NOT NULL DEFAULT '1.00',
  `duration` int(11) NOT NULL DEFAULT '1',
  `total_deposited` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_accepted` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_denied` decimal(20,2) NOT NULL DEFAULT '0.00',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_investment_plans`
--

INSERT INTO `child_investment_plans` (`id`, `parent_investment_plan_id`, `name`, `minimum_amount`, `maximum_amount`, `interest_rate`, `referral_bonus`, `duration`, `total_deposited`, `total_accepted`, `total_denied`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'starter', '1000.00', '5000.00', '12.00', '122.00', 122, '19000.00', '5000.00', '1000.00', 1, '2021-08-10 17:53:58', '2021-08-13 06:28:27', NULL),
(2, 1, 'starter by', '1000.00', '5000.00', '12.00', '122.00', 122, '15000.00', '3000.00', '5000.00', 1, '2021-08-10 18:00:20', '2021-08-12 18:32:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cron_jobs`
--

CREATE TABLE `cron_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `child_investment_plan_id` bigint(20) UNSIGNED NOT NULL,
  `user_wallet_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `remaining_duration` int(11) NOT NULL,
  `reinvestment` tinyint(1) NOT NULL DEFAULT '0',
  `expires_at` timestamp NULL DEFAULT NULL,
  `is_expired` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `running` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `child_investment_plan_id`, `user_wallet_id`, `transaction_hash`, `amount`, `remaining_duration`, `reinvestment`, `expires_at`, `is_expired`, `status`, `running`, `created_at`, `updated_at`, `deleted_at`, `approved_at`, `denied_at`) VALUES
(1, 2, 1, 1, '46a0f6b1909347d8725606a6e9ae5d40f8fca335704d810381', '1000.05', 122, 0, '2021-08-01 18:01:26', 0, 'accepted', 1, '2021-08-11 11:03:46', '2021-08-11 13:12:45', '2021-08-11 13:12:45', '2021-08-11 12:33:54', NULL),
(2, 2, 1, 1, 'fb33e8646f116959fe456ec73d4997b2c12bf7c0eda4e184e7', '1000.00', 122, 0, '2021-08-03 18:01:35', 0, 'accepted', 1, '2021-08-11 11:03:59', '2021-08-11 13:12:53', '2021-08-11 13:12:53', '2021-08-11 12:32:52', NULL),
(3, 2, 1, 1, 'bb2e81b6147f40b314e6a3e5c042b8381266263bfb4f7fb4cf', '1000.00', 122, 0, '2021-08-03 18:01:40', 0, 'accepted', 0, '2021-08-11 11:04:03', '2021-08-15 12:37:40', NULL, '2021-08-11 12:34:07', NULL),
(4, 2, 1, 1, '8f10ad64c049744db47987295b16904472d6ddbfd72c2be564', '1000.00', 122, 0, '2021-08-02 18:01:49', 0, 'accepted', 0, '2021-08-11 11:04:07', '2021-08-15 12:37:55', NULL, '2021-08-11 12:34:21', NULL),
(5, 2, 2, 1, '5c1df028f76327cdc102b47b9800cd51c39a171fd561d18945', '1000.00', 122, 0, '2021-08-15 18:01:57', 0, 'accepted', 0, '2021-08-11 11:05:32', '2021-08-15 12:38:16', NULL, '2021-08-11 12:34:30', NULL),
(6, 2, 2, 1, '339d2b22ac17d6859e9ecc9254458d303a327658a4768807c3', '1000.00', 122, 0, '2021-08-02 18:02:04', 0, 'accepted', 1, '2021-08-11 11:05:36', '2021-08-11 12:34:39', NULL, '2021-08-11 12:34:39', NULL),
(7, 2, 2, 2, '5069a4fa9e21ba34fcaad74d2c1eaa0dbac4108daed8032944', '1000.00', 122, 0, '2021-08-09 18:02:08', 0, 'accepted', 0, '2021-08-11 11:05:42', '2021-08-15 12:00:34', NULL, '2021-08-11 12:34:49', NULL),
(8, 2, 2, 3, '6c99f595f13c36bfc9a1fa0324d5e950307d732412e9875419', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:05:47', '2021-08-11 13:03:10', '2021-08-11 13:03:10', NULL, '2021-08-11 12:47:47'),
(9, 2, 2, 4, '311e868b6d0e94fd3f5a53683f06122fb548acf9c6b9427605', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:05:58', '2021-08-11 13:06:13', '2021-08-11 13:06:13', NULL, '2021-08-11 12:48:11'),
(10, 2, 2, 5, 'e3cc26a4e0e48d22dc0d2930d7d48dcd0a1972c5579967d253', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:06:04', '2021-08-11 12:48:20', NULL, NULL, '2021-08-11 12:48:20'),
(11, 2, 2, 5, '878c8ba1c3540e0df86bd20c273ab0358e82fa99b3e7fa9334', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:06:07', '2021-08-11 12:48:30', NULL, NULL, '2021-08-11 12:48:30'),
(12, 2, 2, 1, 'ec450ce67fe4be7fc51c4784b96f948881a67fa74f9b20722b', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-11 11:06:47', '2021-08-11 12:57:52', '2021-08-11 12:57:52', NULL, NULL),
(13, 2, 2, 5, '0d36d95acd3d8ffa68bede0bb8869b562fd04cba8f113025dd', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-11 11:06:58', '2021-08-11 12:58:03', '2021-08-11 12:58:03', NULL, NULL),
(14, 2, 2, 5, '0d55dc8dcb49cf1e062c84da0ab01ea7ed6d5ac368ecad77db', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:08:24', '2021-08-11 12:58:11', NULL, NULL, '2021-08-11 12:58:11'),
(15, 2, 1, 1, '195be39e32c215f79892983b0a54aa3fd2c51437a833adc05b', '1000.00', 122, 0, NULL, 0, 'denied', 0, '2021-08-11 11:23:40', '2021-08-11 12:58:20', NULL, NULL, '2021-08-11 12:58:20'),
(16, 2, 1, 1, 'e7e9fbdea98b4f944aa79cddff2b10099dd7af6208f0a1ba46', '1000.00', 122, 0, '2021-12-12 08:42:37', 0, 'accepted', 1, '2021-08-12 08:42:01', '2021-08-12 08:42:37', NULL, '2021-08-12 08:42:37', NULL),
(17, 2, 1, 1, 'e93c00f68fe18e229844a478a1403976959e077a7c8e24dc58', '1000.00', 122, 1, NULL, 0, 'pending', 0, '2021-08-12 16:18:02', '2021-08-12 16:18:02', NULL, NULL, NULL),
(18, 2, 1, 1, 'ba2012b253e9f1da293fbe9680aa72e4faf836ec410a81db30', '2000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:19:43', '2021-08-12 18:19:43', NULL, NULL, NULL),
(19, 2, 1, 1, '91cac31b778bdb7133336d0ed814b84ec0dd608887778ebc67', '2000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:21:09', '2021-08-12 18:21:09', NULL, NULL, NULL),
(20, 2, 2, 1, '8150ee704e460992d7750fe33eac17d341189f7f8cd7ac5113', '2000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:28:10', '2021-08-12 18:28:10', NULL, NULL, NULL),
(21, 2, 2, 1, '54f37c4145831113bc2cccf9f7101ff1c2ca9badd4eb5a4b0a', '2000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:31:40', '2021-08-12 18:31:40', NULL, NULL, NULL),
(22, 2, 2, 2, 'a0dea3a422d88af95cbd9cc1be808652c0f059ba09c93e01ea', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:32:46', '2021-08-12 18:32:46', NULL, NULL, NULL),
(23, 2, 1, 2, '3f0eb1e0e1660e66b588f44623cd0d400f13b1232020d29bb2', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:36:57', '2021-08-12 18:36:57', NULL, NULL, NULL),
(24, 2, 1, 1, 'feb42c41f4a368e2d4e144364e073c3be26a4cc1dd2d332854', '2000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:41:05', '2021-08-12 18:41:05', NULL, NULL, NULL),
(25, 2, 1, 1, '13a5da8069f303b3b30a8336654dc5b16cc419abdf69f8ce68', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:43:17', '2021-08-12 18:43:17', NULL, NULL, NULL),
(26, 2, 1, 2, '48cbbfc8241bba0ce03455d07d7922bac3c1261e054f25fd13', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:45:29', '2021-08-12 18:45:29', NULL, NULL, NULL),
(27, 2, 1, 5, '66e82395181d3d93b2fe42dd31a7a67a66cf7c56b497575e61', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:45:43', '2021-08-12 18:45:43', NULL, NULL, NULL),
(28, 2, 1, 5, '4672af76f464aa1bc6843b1cdcd4c77eedd7918c57767b9cb8', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-12 18:51:14', '2021-08-12 18:51:14', NULL, NULL, NULL),
(29, 2, 1, 1, 'b10d37141febd10286101ebb911d35e5ce0e9b60f0c3c16522', '1000.00', 122, 0, NULL, 0, 'pending', 0, '2021-08-13 06:28:27', '2021-08-13 06:28:27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_tokens`
--

CREATE TABLE `email_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_tokens`
--

INSERT INTO `email_tokens` (`id`, `token`, `email`, `created_at`, `updated_at`, `deleted_at`, `expired_at`) VALUES
(1, 697067, 'nobledsmarts@gmail.com', '2021-08-09 11:23:22', '2021-08-09 11:23:22', NULL, NULL),
(2, 525727, 'nobledsmarts@gmail.com', '2021-08-09 11:25:38', '2021-08-09 11:25:38', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `priority`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'whats this company all about edited?', 'i dont really know lets just find out', 1, NULL, '2021-08-14 22:19:55', NULL),
(2, 'whats this company all about now', 'Answer... leoehfnf fj ilsdnf dsonidso', 1, NULL, NULL, NULL),
(3, 'fjjfk fkfm\'p;mf fop\'f ffe;rom', 'Answer... rkonmre reoij0opre reomojre reojrepre', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_wallets`
--

CREATE TABLE `main_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_wallets`
--

INSERT INTO `main_wallets` (`id`, `currency`, `currency_symbol`, `active`, `has_memo`, `currency_address`, `memo_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dodge mm', 'doge', 1, 0, 'tfkflfloenndjdjhd', NULL, '2021-08-10 10:04:23', '2021-08-10 14:50:11', NULL),
(2, 'tronxx', 'tx', 1, 0, 'tfkflfloenndjdjhd', NULL, '2021-08-10 10:08:41', '2021-08-10 14:33:47', NULL),
(3, 'adaxx', 'ada', 1, 0, 'tfkflfloenndjdjhd', NULL, '2021-08-10 10:11:06', '2021-08-10 11:18:59', NULL),
(4, 'ethereum', 'eth', 1, 1, 'nibo', 'memo here', '2021-08-10 10:46:41', '2021-08-10 18:52:44', NULL),
(6, 'adaaad', 'adakk', 1, 1, 'wid0jw0opmeidnuew0iopopsdaomineunuilwe', 'memo here', '2021-08-10 16:15:08', '2021-08-10 19:24:31', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_08_175644_create_parent_investment_plans_table', 1),
(5, '2021_07_08_175836_create_child_investment_plans_table', 1),
(6, '2021_07_08_180043_create_admin_wallets_table', 1),
(7, '2021_07_08_180043_create_main_wallets_table', 1),
(8, '2021_07_08_180120_create_user_wallets_table', 1),
(9, '2021_07_08_185113_create_deposits_table', 1),
(10, '2021_07_08_190124_create_email_tokens_table', 1),
(11, '2021_07_08_221751_create_transactions_table', 1),
(12, '2021_07_09_095700_create_referrers_interest_relationships_table', 1),
(13, '2021_07_09_213353_create_withdrawals_table', 1),
(14, '2021_07_10_120641_create_withdraw_referral_bonuses_table', 1),
(15, '2021_07_10_121534_create_account_funding_requests_table', 1),
(16, '2021_07_10_172842_create_reviews_table', 1),
(17, '2021_07_10_173756_create_cron_jobs_table', 1),
(18, '2021_07_10_173907_create_profit_cron_jobs_table', 1),
(19, '2021_07_10_180301_create_faqs_table', 1),
(20, '2021_07_10_184041_create_files_table', 1),
(21, '2021_07_10_184810_create_site_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parent_investment_plans`
--

CREATE TABLE `parent_investment_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_investment_plans`
--

INSERT INTO `parent_investment_plans` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'depositx', '2021-08-10 16:40:58', '2021-08-10 17:01:38', NULL),
(2, 'forex', '2021-08-10 16:45:18', '2021-08-10 16:45:18', NULL);

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
-- Table structure for table `profit_cron_jobs`
--

CREATE TABLE `profit_cron_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deposit_id` bigint(20) UNSIGNED NOT NULL,
  `child_investment_plan_id` bigint(20) UNSIGNED NOT NULL,
  `user_wallet_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_received` decimal(20,2) NOT NULL,
  `deposit_balance` decimal(20,2) NOT NULL,
  `currently_invested_balance` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrers_interest_relationships`
--

CREATE TABLE `referrers_interest_relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interest_receiver_id` bigint(20) UNSIGNED NOT NULL,
  `depositor_id` bigint(20) UNSIGNED NOT NULL,
  `deposit_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'An empty review',
  `active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `active`, `user`, `occupation`, `plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'review', '1', 'fred orthon', 'business icon', 2, '2021-08-13 13:36:22', '2021-08-13 13:45:25', NULL),
(3, 'review', '1', 'fidelityassetslimited', 'business icon', 1, '2021-08-13 13:48:57', '2021-08-13 13:49:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_about_us` longtext COLLATE utf8mb4_unicode_ci,
  `terms_and_conditions` longtext COLLATE utf8mb4_unicode_ci,
  `privacy_and_policy` longtext COLLATE utf8mb4_unicode_ci,
  `how_it_works` longtext COLLATE utf8mb4_unicode_ci,
  `meet_our_traders` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_handles_active` tinyint(1) NOT NULL DEFAULT '0',
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `whatsapp_number`, `site_address`, `site_name`, `site_logo`, `site_about_us`, `terms_and_conditions`, `privacy_and_policy`, `how_it_works`, `meet_our_traders`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `telegram`, `medium`, `social_handles_active`, `site_email`, `visit_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'about us here blah blah blah', '<ul><li>terms one</li><li>terms two</li></ul>', 'checking privacy and policy', 'how do we really work?', 'meet our traders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 542, NULL, '2021-08-15 12:38:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_hash`, `amount`, `currency`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '46a0f6b1909347d8725606a6e9ae5d40f8fca335704d810381', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:03:46', '2021-08-11 11:03:46', NULL),
(2, 2, 'fb33e8646f116959fe456ec73d4997b2c12bf7c0eda4e184e7', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:04:00', '2021-08-11 11:04:00', NULL),
(3, 2, 'bb2e81b6147f40b314e6a3e5c042b8381266263bfb4f7fb4cf', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:04:03', '2021-08-11 11:04:03', NULL),
(4, 2, '8f10ad64c049744db47987295b16904472d6ddbfd72c2be564', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:04:07', '2021-08-11 11:04:07', NULL),
(5, 2, '5c1df028f76327cdc102b47b9800cd51c39a171fd561d18945', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:05:32', '2021-08-11 11:05:32', NULL),
(6, 2, '339d2b22ac17d6859e9ecc9254458d303a327658a4768807c3', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:05:36', '2021-08-11 11:05:36', NULL),
(7, 2, '5069a4fa9e21ba34fcaad74d2c1eaa0dbac4108daed8032944', '1000.00', 'tronxx', 'deposit', '2021-08-11 11:05:42', '2021-08-11 11:05:42', NULL),
(8, 2, '6c99f595f13c36bfc9a1fa0324d5e950307d732412e9875419', '1000.00', 'ethereum', 'deposit', '2021-08-11 11:05:48', '2021-08-11 11:05:48', NULL),
(9, 2, '311e868b6d0e94fd3f5a53683f06122fb548acf9c6b9427605', '1000.00', 'adaxx', 'deposit', '2021-08-11 11:05:58', '2021-08-11 11:05:58', NULL),
(10, 2, 'e3cc26a4e0e48d22dc0d2930d7d48dcd0a1972c5579967d253', '1000.00', 'adaaad', 'deposit', '2021-08-11 11:06:04', '2021-08-11 11:06:04', NULL),
(11, 2, '878c8ba1c3540e0df86bd20c273ab0358e82fa99b3e7fa9334', '1000.00', 'adaaad', 'deposit', '2021-08-11 11:06:07', '2021-08-11 11:06:07', NULL),
(12, 2, 'ec450ce67fe4be7fc51c4784b96f948881a67fa74f9b20722b', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:06:47', '2021-08-11 11:06:47', NULL),
(13, 2, '0d36d95acd3d8ffa68bede0bb8869b562fd04cba8f113025dd', '1000.00', 'adaaad', 'deposit', '2021-08-11 11:06:58', '2021-08-11 11:06:58', NULL),
(14, 2, '0d55dc8dcb49cf1e062c84da0ab01ea7ed6d5ac368ecad77db', '1000.00', 'adaaad', 'deposit', '2021-08-11 11:08:24', '2021-08-11 11:08:24', NULL),
(15, 2, '195be39e32c215f79892983b0a54aa3fd2c51437a833adc05b', '1000.00', 'dodge mm', 'deposit', '2021-08-11 11:23:41', '2021-08-11 11:23:41', NULL),
(16, 2, '4a33244b967b4217534a093c52118a3aeb46021cf6dba50669', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 17:19:50', '2021-08-11 17:19:50', NULL),
(17, 2, '5dc74bf013a25c45eae425a07287146b6b1030f21e668c9085', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 17:21:24', '2021-08-11 17:21:24', NULL),
(18, 2, '1de26c3717a72e15013f9d642dd727a5100a450d0f75581f9f', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 17:21:36', '2021-08-11 17:21:36', NULL),
(19, 2, '613e52950a43edabc0c64deacd5b9dbe2d147c624115485657', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 17:21:58', '2021-08-11 17:21:58', NULL),
(20, 2, 'c8010bf54883af7504b6a59f5f04a33f378a35909d752448c7', '100.00', 'dodge mm', 'withdrawal', '2021-08-11 17:25:51', '2021-08-11 17:25:51', NULL),
(21, 2, 'a8e21b7be627f88b5930c68759826913b104818eeaa00a568e', '1000.00', 'ethereum', 'withdrawal', '2021-08-11 17:26:04', '2021-08-11 17:26:04', NULL),
(22, 2, '93a221e9b22d76267b50290ab4d04002d13669b12adb2a5873', '500.00', 'adaaad', 'withdrawal', '2021-08-11 17:26:20', '2021-08-11 17:26:20', NULL),
(23, 2, 'a57600b7708c94f7bac71f4e5a03f64d0ada0ba1154382e95f', '1000.00', 'tronxx', 'withdrawal', '2021-08-11 17:29:32', '2021-08-11 17:29:32', NULL),
(24, 2, 'e7b203e093426d2c63d3f222a3529ddf44f833390062b37545', '1000.00', 'tronxx', 'withdrawal', '2021-08-11 17:30:01', '2021-08-11 17:30:01', NULL),
(25, 2, '6cb825e6085d5f19218c598af390d1e9a144ef7caec858b354', '567.00', 'adaaad', 'withdrawal', '2021-08-11 17:30:12', '2021-08-11 17:30:12', NULL),
(26, 2, '9b5fc37f363d6f379c3fa56c3d1ccf3a1f095df3aeba58d1e0', '567.00', 'dodge mm', 'withdrawal', '2021-08-11 18:35:40', '2021-08-11 18:35:40', NULL),
(27, 2, 'aa6d2d011264077bc722cf443c658ee0312b750d79cbbe06b1', '1000.00', 'adaxx', 'withdrawal', '2021-08-11 18:39:53', '2021-08-11 18:39:53', NULL),
(28, 2, '2d4296894dd7e26cc7b5a3215d9149c647e7862087f8697faa', '200.00', 'dodge mm', 'withdrawal', '2021-08-11 19:08:32', '2021-08-11 19:08:32', NULL),
(29, 2, '356ada863983908c534652a7d4bf5c1244f1c07864acf0a1c6', '567.00', 'dodge mm', 'withdrawal', '2021-08-11 19:08:49', '2021-08-11 19:08:49', NULL),
(30, 2, '5c4bd9c3ac487d9bfaa01f18927b0bf62b49b25d808c0e133b', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 19:09:00', '2021-08-11 19:09:00', NULL),
(31, 2, 'a364be3f5b606175de434ac6673f0a03799c2066e1dfcd5e07', '1000.00', 'dodge mm', 'withdrawal', '2021-08-11 19:09:23', '2021-08-11 19:09:23', NULL),
(32, 2, '0e565c3de1bcf1af6cdeb9d89414ec96b1ca7460033c022ec0', '1000.00', 'tronxx', 'withdrawal', '2021-08-11 19:10:01', '2021-08-11 19:10:01', NULL),
(33, 2, 'efbf9e4cf19aa8d25e66ddc3b35033bb19868069123395b682', '567.00', 'dodge mm', 'withdrawal', '2021-08-11 19:10:11', '2021-08-11 19:10:11', NULL),
(34, 2, 'e7894966d27f707a5e9e2c13a58f4d21dfa59699f2bbb2cc18', '567.00', 'ethereum', 'withdrawal', '2021-08-11 19:10:24', '2021-08-11 19:10:24', NULL),
(35, 2, '72f9369b6639e529d9d39c38592907fc4198e38037ba9bb5cc', '567.00', 'adaxx', 'withdrawal', '2021-08-11 19:10:36', '2021-08-11 19:10:36', NULL),
(36, 2, 'e7e9fbdea98b4f944aa79cddff2b10099dd7af6208f0a1ba46', '1000.00', 'dodge mm', 'deposit', '2021-08-12 08:42:01', '2021-08-12 08:42:01', NULL),
(37, 2, '4a8448b2d71b6bddc0d56977bcf64867cf9558254cf3361ff6', '200.00', 'tronxx', 'withdrawal', '2021-08-12 11:34:00', '2021-08-12 11:34:00', NULL),
(38, 2, 'e93c00f68fe18e229844a478a1403976959e077a7c8e24dc58', '1000.00', 'dodge mm', 'reinvestment', '2021-08-12 16:18:02', '2021-08-12 16:18:02', NULL),
(39, 2, 'ba2012b253e9f1da293fbe9680aa72e4faf836ec410a81db30', '2000.00', 'dodge mm', 'deposit', '2021-08-12 18:19:43', '2021-08-12 18:19:43', NULL),
(40, 2, '91cac31b778bdb7133336d0ed814b84ec0dd608887778ebc67', '2000.00', 'dodge mm', 'deposit', '2021-08-12 18:21:09', '2021-08-12 18:21:09', NULL),
(41, 2, '8150ee704e460992d7750fe33eac17d341189f7f8cd7ac5113', '2000.00', 'dodge mm', 'deposit', '2021-08-12 18:28:10', '2021-08-12 18:28:10', NULL),
(42, 2, '54f37c4145831113bc2cccf9f7101ff1c2ca9badd4eb5a4b0a', '2000.00', 'dodge mm', 'deposit', '2021-08-12 18:31:40', '2021-08-12 18:31:40', NULL),
(43, 2, 'a0dea3a422d88af95cbd9cc1be808652c0f059ba09c93e01ea', '1000.00', 'tronxx', 'deposit', '2021-08-12 18:32:46', '2021-08-12 18:32:46', NULL),
(44, 2, '3f0eb1e0e1660e66b588f44623cd0d400f13b1232020d29bb2', '1000.00', 'tronxx', 'deposit', '2021-08-12 18:36:57', '2021-08-12 18:36:57', NULL),
(45, 2, 'feb42c41f4a368e2d4e144364e073c3be26a4cc1dd2d332854', '2000.00', 'dodge mm', 'deposit', '2021-08-12 18:41:06', '2021-08-12 18:41:06', NULL),
(46, 2, '13a5da8069f303b3b30a8336654dc5b16cc419abdf69f8ce68', '1000.00', 'dodge mm', 'deposit', '2021-08-12 18:43:17', '2021-08-12 18:43:17', NULL),
(47, 2, '48cbbfc8241bba0ce03455d07d7922bac3c1261e054f25fd13', '1000.00', 'tronxx', 'deposit', '2021-08-12 18:45:29', '2021-08-12 18:45:29', NULL),
(48, 2, '66e82395181d3d93b2fe42dd31a7a67a66cf7c56b497575e61', '1000.00', 'adaaad', 'deposit', '2021-08-12 18:45:43', '2021-08-12 18:45:43', NULL),
(49, 2, '4672af76f464aa1bc6843b1cdcd4c77eedd7918c57767b9cb8', '1000.00', 'adaaad', 'deposit', '2021-08-12 18:51:14', '2021-08-12 18:51:14', NULL),
(50, 2, 'b10d37141febd10286101ebb911d35e5ce0e9b60f0c3c16522', '1000.00', 'dodge mm', 'deposit', '2021-08-13 06:28:27', '2021-08-13 06:28:27', NULL),
(51, 2, '3e19058d6b9f2813422ec4034ed0d3b405aebafd87dfb8a546', '100.00', 'tronxx', 'withdrawal', '2021-08-13 10:43:52', '2021-08-13 10:43:52', NULL),
(52, 2, '0c7cb73ceee30767da18719846e423136f9add05c9ee04467d', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 10:45:33', '2021-08-13 10:45:33', NULL),
(53, 2, '3e4b288e3cc695deb705afbe81c4be435602860a286e63f4d9', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:46:44', '2021-08-13 10:46:44', NULL),
(54, 2, '0f105f07e28c3d651c63cf780965127bf6846d4b355eeb2635', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:49:36', '2021-08-13 10:49:36', NULL),
(55, 2, 'ebe08436ed294edb75d93526c07819ee443a5dae8884d2115b', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:49:47', '2021-08-13 10:49:47', NULL),
(56, 2, '7805258704bd0930961dd659ff2802d1431023434cfff23c66', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:51:16', '2021-08-13 10:51:16', NULL),
(57, 2, '8312b7fd6adaa6785b644e5058eba71280ccbec29a82592095', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:52:57', '2021-08-13 10:52:57', NULL),
(58, 2, 'edf88aa3993dc2179c8438eda792e1c53bb055f05b764b3d02', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:54:59', '2021-08-13 10:54:59', NULL),
(59, 2, '5052bec7b100c74456ea1aab50cb1882ef1a7402e8fb03fe07', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:56:46', '2021-08-13 10:56:46', NULL),
(60, 2, '2cdad80e093e8152d2c74f771e8b6d4013d1e9c6ab833bde23', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:57:18', '2021-08-13 10:57:18', NULL),
(61, 2, 'f4ca64ae45ce5c878dc4d54d368f6eaef2f2288db740587d35', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:57:57', '2021-08-13 10:57:57', NULL),
(62, 2, '97b63774725dbc01b7fc7fea06016e7517989969f9250b23ce', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:58:29', '2021-08-13 10:58:29', NULL),
(63, 2, '0d2830c8d609e1076782158a5ef3da1461ff1bad4bbb55339f', '200.00', 'tronxx', 'withdrawal', '2021-08-13 10:58:56', '2021-08-13 10:58:56', NULL),
(64, 2, '5d7c640b5ada1fe2ac093dad22e00bd4de67fbb5602225ba3b', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 11:06:31', '2021-08-13 11:06:31', NULL),
(65, 2, '970ed667921a21f5396e2b59f43fe4a83c32717af82e952245', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 11:09:05', '2021-08-13 11:09:05', NULL),
(66, 2, 'd13b4c68a42ae6b0a6152e9a8ce6bd963eee33151ab9da53d5', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 11:09:57', '2021-08-13 11:09:57', NULL),
(67, 2, '31483c05cdd848d0534c5bda39643038cde9b358c882fb95ef', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 11:11:58', '2021-08-13 11:11:58', NULL),
(68, 2, '8e59b72c58102278674fd1d6cc3b72d571ec84738b7daeb9ed', '200.00', 'dodge mm', 'withdrawal', '2021-08-13 11:13:44', '2021-08-13 11:13:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `permission` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `invested` tinyint(1) NOT NULL DEFAULT '0',
  `currently_invested` decimal(20,2) NOT NULL DEFAULT '0.00',
  `total_withdrawn` decimal(20,2) NOT NULL DEFAULT '0.00',
  `referrer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_balance` decimal(20,2) NOT NULL DEFAULT '0.00',
  `referral_bonus` decimal(20,2) NOT NULL DEFAULT '0.00',
  `deposit_interest` decimal(20,2) NOT NULL DEFAULT '0.00',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `uid`, `firstname`, `middlename`, `lastname`, `avatar`, `permission`, `suspended`, `invested`, `currently_invested`, `total_withdrawn`, `referrer`, `deposit_balance`, `referral_bonus`, `deposit_interest`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'noble', 1, 'nobledsmarts@gmail.com', '2021-08-09 12:46:06', '$2y$10$A2ZuhwuqVaW6I7DlYyg7JOyetmq9XTTDqOG8eCjrGMzk6BjSDHvpq', '5ea751', 'richard', 'franklin', 'chinedu', NULL, '2', 0, 0, '7900.00', '2000.00', NULL, '3546786800.00', '62656.10', '2243.00', NULL, '2021-08-09 11:25:38', '2021-08-12 11:30:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `main_wallet_id` bigint(20) UNSIGNED NOT NULL,
  `currency_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memo_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_memo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wallets`
--

INSERT INTO `user_wallets` (`id`, `user_id`, `main_wallet_id`, `currency_address`, `memo_token`, `has_memo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'edit', NULL, 0, '2021-08-10 18:40:38', '2021-08-10 20:12:06', NULL),
(2, 2, 2, 'registration', NULL, 0, '2021-08-10 18:43:17', '2021-08-10 18:43:17', NULL),
(3, 2, 4, 'laravel', NULL, 0, '2021-08-10 18:43:47', '2021-08-10 18:43:47', NULL),
(4, 2, 3, 'adaxx address', NULL, 0, '2021-08-10 20:11:31', '2021-08-10 20:12:53', NULL),
(5, 2, 6, 'adaaad address', NULL, 1, '2021-08-10 20:13:26', '2021-08-10 20:13:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_wallet_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('deposit_balance','referral_bonus','deposit_interest') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deposit_balance',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `user_wallet_id`, `transaction_hash`, `amount`, `status`, `type`, `created_at`, `updated_at`, `deleted_at`, `approved_at`, `denied_at`) VALUES
(1, 2, 1, '4a33244b967b4217534a093c52118a3aeb46021cf6dba50669', '1000.00', 'accepted', 'deposit_balance', '2021-08-11 17:19:50', '2021-08-11 20:31:23', '2021-08-11 20:31:23', '2021-08-11 19:53:12', NULL),
(2, 2, 1, '5dc74bf013a25c45eae425a07287146b6b1030f21e668c9085', '1000.00', 'accepted', 'deposit_balance', '2021-08-11 17:21:24', '2021-08-11 19:53:23', NULL, '2021-08-11 19:53:23', NULL),
(3, 2, 1, '1de26c3717a72e15013f9d642dd727a5100a450d0f75581f9f', '1000.00', 'denied', 'deposit_balance', '2021-08-11 17:21:36', '2021-08-11 20:29:14', '2021-08-11 20:29:14', NULL, '2021-08-11 20:05:14'),
(4, 2, 1, '613e52950a43edabc0c64deacd5b9dbe2d147c624115485657', '1000.00', 'denied', 'deposit_balance', '2021-08-11 17:21:58', '2021-08-11 20:29:25', '2021-08-11 20:29:25', NULL, '2021-08-11 20:05:22'),
(5, 2, 1, 'c8010bf54883af7504b6a59f5f04a33f378a35909d752448c7', '100.00', 'denied', 'deposit_balance', '2021-08-11 17:25:51', '2021-08-11 20:29:34', '2021-08-11 20:29:34', NULL, '2021-08-11 20:05:46'),
(6, 2, 3, 'a8e21b7be627f88b5930c68759826913b104818eeaa00a568e', '1000.00', 'denied', 'deposit_balance', '2021-08-11 17:26:04', '2021-08-11 20:05:56', NULL, NULL, '2021-08-11 20:05:56'),
(7, 2, 5, '93a221e9b22d76267b50290ab4d04002d13669b12adb2a5873', '500.00', 'denied', 'deposit_balance', '2021-08-11 17:26:20', '2021-08-11 20:06:06', NULL, NULL, '2021-08-11 20:06:06'),
(8, 2, 2, 'a57600b7708c94f7bac71f4e5a03f64d0ada0ba1154382e95f', '1000.00', 'denied', 'deposit_balance', '2021-08-11 17:29:32', '2021-08-11 20:06:16', NULL, NULL, '2021-08-11 20:06:16'),
(9, 2, 2, 'e7b203e093426d2c63d3f222a3529ddf44f833390062b37545', '1000.00', 'denied', 'deposit_balance', '2021-08-11 17:30:01', '2021-08-11 20:06:27', NULL, NULL, '2021-08-11 20:06:27'),
(10, 2, 5, '6cb825e6085d5f19218c598af390d1e9a144ef7caec858b354', '567.00', 'denied', 'deposit_balance', '2021-08-11 17:30:11', '2021-08-11 20:06:37', NULL, NULL, '2021-08-11 20:06:37'),
(11, 2, 1, '9b5fc37f363d6f379c3fa56c3d1ccf3a1f095df3aeba58d1e0', '567.00', 'denied', 'deposit_balance', '2021-08-11 18:35:40', '2021-08-11 20:07:45', NULL, NULL, '2021-08-11 20:07:45'),
(12, 2, 4, 'aa6d2d011264077bc722cf443c658ee0312b750d79cbbe06b1', '1000.00', 'denied', 'deposit_balance', '2021-08-11 18:39:53', '2021-08-11 20:07:53', NULL, NULL, '2021-08-11 20:07:53'),
(13, 2, 1, '2d4296894dd7e26cc7b5a3215d9149c647e7862087f8697faa', '200.00', 'denied', 'deposit_balance', '2021-08-11 19:08:31', '2021-08-11 20:08:32', NULL, NULL, '2021-08-11 20:08:32'),
(14, 2, 1, '356ada863983908c534652a7d4bf5c1244f1c07864acf0a1c6', '567.00', 'denied', 'deposit_interest', '2021-08-11 19:08:49', '2021-08-11 20:08:40', NULL, NULL, '2021-08-11 20:08:40'),
(15, 2, 1, '5c4bd9c3ac487d9bfaa01f18927b0bf62b49b25d808c0e133b', '1000.00', 'denied', 'deposit_interest', '2021-08-11 19:09:00', '2021-08-11 20:08:51', NULL, NULL, '2021-08-11 20:08:51'),
(16, 2, 1, 'a364be3f5b606175de434ac6673f0a03799c2066e1dfcd5e07', '1000.00', 'pending', 'referral_bonus', '2021-08-11 19:09:23', '2021-08-12 07:53:25', '2021-08-12 07:53:25', NULL, NULL),
(17, 2, 2, '0e565c3de1bcf1af6cdeb9d89414ec96b1ca7460033c022ec0', '1000.00', 'pending', 'referral_bonus', '2021-08-11 19:10:01', '2021-08-12 07:53:42', '2021-08-12 07:53:42', NULL, NULL),
(18, 2, 1, 'efbf9e4cf19aa8d25e66ddc3b35033bb19868069123395b682', '567.00', 'denied', 'deposit_interest', '2021-08-11 19:10:11', '2021-08-12 07:58:54', NULL, NULL, '2021-08-12 07:58:54'),
(19, 2, 3, 'e7894966d27f707a5e9e2c13a58f4d21dfa59699f2bbb2cc18', '567.00', 'pending', 'deposit_interest', '2021-08-11 19:10:24', '2021-08-11 19:10:24', NULL, NULL, NULL),
(20, 2, 4, '72f9369b6639e529d9d39c38592907fc4198e38037ba9bb5cc', '567.00', 'pending', 'deposit_interest', '2021-08-11 19:10:36', '2021-08-11 19:10:36', NULL, NULL, NULL),
(21, 2, 2, '4a8448b2d71b6bddc0d56977bcf64867cf9558254cf3361ff6', '200.00', 'pending', 'deposit_balance', '2021-08-12 11:34:00', '2021-08-12 11:34:00', NULL, NULL, NULL),
(22, 2, 2, '3e19058d6b9f2813422ec4034ed0d3b405aebafd87dfb8a546', '100.00', 'pending', 'deposit_balance', '2021-08-13 10:43:52', '2021-08-13 10:43:52', NULL, NULL, NULL),
(23, 2, 1, '0c7cb73ceee30767da18719846e423136f9add05c9ee04467d', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:45:33', '2021-08-13 10:45:33', NULL, NULL, NULL),
(24, 2, 2, '3e4b288e3cc695deb705afbe81c4be435602860a286e63f4d9', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:46:44', '2021-08-13 10:46:44', NULL, NULL, NULL),
(25, 2, 2, '0f105f07e28c3d651c63cf780965127bf6846d4b355eeb2635', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:49:36', '2021-08-13 10:49:36', NULL, NULL, NULL),
(26, 2, 2, 'ebe08436ed294edb75d93526c07819ee443a5dae8884d2115b', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:49:47', '2021-08-13 10:49:47', NULL, NULL, NULL),
(27, 2, 2, '7805258704bd0930961dd659ff2802d1431023434cfff23c66', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:51:16', '2021-08-13 10:51:16', NULL, NULL, NULL),
(28, 2, 2, '8312b7fd6adaa6785b644e5058eba71280ccbec29a82592095', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:52:57', '2021-08-13 10:52:57', NULL, NULL, NULL),
(29, 2, 2, 'edf88aa3993dc2179c8438eda792e1c53bb055f05b764b3d02', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:54:59', '2021-08-13 10:54:59', NULL, NULL, NULL),
(30, 2, 2, 'fcdf8efaff97e17db718cfbd29ccedb5561a3c18e50e9bf7a7', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:55:56', '2021-08-13 10:55:56', NULL, NULL, NULL),
(31, 2, 2, '7a9591f176f0ea0d8f544ce35544fd330992915829e0dd2d87', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:56:26', '2021-08-13 10:56:26', NULL, NULL, NULL),
(32, 2, 2, '5052bec7b100c74456ea1aab50cb1882ef1a7402e8fb03fe07', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:56:46', '2021-08-13 10:56:46', NULL, NULL, NULL),
(33, 2, 2, '2cdad80e093e8152d2c74f771e8b6d4013d1e9c6ab833bde23', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:57:17', '2021-08-13 10:57:17', NULL, NULL, NULL),
(34, 2, 2, 'f4ca64ae45ce5c878dc4d54d368f6eaef2f2288db740587d35', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:57:57', '2021-08-13 10:57:57', NULL, NULL, NULL),
(35, 2, 2, '97b63774725dbc01b7fc7fea06016e7517989969f9250b23ce', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:58:29', '2021-08-13 10:58:29', NULL, NULL, NULL),
(36, 2, 2, '0d2830c8d609e1076782158a5ef3da1461ff1bad4bbb55339f', '200.00', 'pending', 'deposit_balance', '2021-08-13 10:58:55', '2021-08-13 10:58:55', NULL, NULL, NULL),
(37, 2, 1, '5d7c640b5ada1fe2ac093dad22e00bd4de67fbb5602225ba3b', '200.00', 'pending', 'deposit_balance', '2021-08-13 11:06:31', '2021-08-13 11:06:31', NULL, NULL, NULL),
(38, 2, 1, '970ed667921a21f5396e2b59f43fe4a83c32717af82e952245', '200.00', 'pending', 'deposit_balance', '2021-08-13 11:09:04', '2021-08-13 11:09:04', NULL, NULL, NULL),
(39, 2, 1, 'd13b4c68a42ae6b0a6152e9a8ce6bd963eee33151ab9da53d5', '200.00', 'pending', 'deposit_balance', '2021-08-13 11:09:57', '2021-08-13 11:09:57', NULL, NULL, NULL),
(40, 2, 1, '31483c05cdd848d0534c5bda39643038cde9b358c882fb95ef', '200.00', 'pending', 'deposit_balance', '2021-08-13 11:11:58', '2021-08-13 11:11:58', NULL, NULL, NULL),
(41, 2, 1, '8e59b72c58102278674fd1d6cc3b72d571ec84738b7daeb9ed', '200.00', 'pending', 'deposit_balance', '2021-08-13 11:13:44', '2021-08-13 11:13:44', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_referral_bonuses`
--

CREATE TABLE `withdraw_referral_bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('pending','accepted','denied') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `denied_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_funding_requests_user_id_foreign` (`user_id`),
  ADD KEY `account_funding_requests_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_wallets_currency_unique` (`currency`),
  ADD UNIQUE KEY `admin_wallets_currency_symbol_unique` (`currency_symbol`);

--
-- Indexes for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `child_investment_plans_name_unique` (`name`),
  ADD KEY `child_investment_plans_parent_investment_plan_id_foreign` (`parent_investment_plan_id`);

--
-- Indexes for table `cron_jobs`
--
ALTER TABLE `cron_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deposits_transaction_hash_unique` (`transaction_hash`),
  ADD KEY `deposits_user_id_foreign` (`user_id`),
  ADD KEY `deposits_child_investment_plan_id_foreign` (`child_investment_plan_id`),
  ADD KEY `deposits_user_wallet_id_foreign` (`user_wallet_id`);

--
-- Indexes for table `email_tokens`
--
ALTER TABLE `email_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_wallets`
--
ALTER TABLE `main_wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_wallets_currency_unique` (`currency`),
  ADD UNIQUE KEY `main_wallets_currency_symbol_unique` (`currency_symbol`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_investment_plans`
--
ALTER TABLE `parent_investment_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_investment_plans_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profit_cron_jobs_user_id_foreign` (`user_id`),
  ADD KEY `profit_cron_jobs_child_investment_plan_id_foreign` (`child_investment_plan_id`),
  ADD KEY `profit_cron_jobs_user_wallet_id_foreign` (`user_wallet_id`),
  ADD KEY `profit_cron_jobs_deposit_id_foreign` (`deposit_id`);

--
-- Indexes for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referrers_interest_relationships_interest_receiver_id_foreign` (`interest_receiver_id`),
  ADD KEY `referrers_interest_relationships_depositor_id_foreign` (`depositor_id`),
  ADD KEY `referrers_interest_relationships_deposit_id_foreign` (`deposit_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_uid_unique` (`uid`);

--
-- Indexes for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_wallets_user_id_foreign` (`user_id`),
  ADD KEY `user_wallets_main_wallet_id_foreign` (`main_wallet_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`),
  ADD KEY `withdrawals_user_wallet_id_foreign` (`user_wallet_id`);

--
-- Indexes for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdraw_referral_bonuses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `admin_wallets`
--
ALTER TABLE `admin_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cron_jobs`
--
ALTER TABLE `cron_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `email_tokens`
--
ALTER TABLE `email_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_wallets`
--
ALTER TABLE `main_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `parent_investment_plans`
--
ALTER TABLE `parent_investment_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_funding_requests`
--
ALTER TABLE `account_funding_requests`
  ADD CONSTRAINT `account_funding_requests_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `account_funding_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `child_investment_plans`
--
ALTER TABLE `child_investment_plans`
  ADD CONSTRAINT `child_investment_plans_parent_investment_plan_id_foreign` FOREIGN KEY (`parent_investment_plan_id`) REFERENCES `parent_investment_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_child_investment_plan_id_foreign` FOREIGN KEY (`child_investment_plan_id`) REFERENCES `child_investment_plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deposits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deposits_user_wallet_id_foreign` FOREIGN KEY (`user_wallet_id`) REFERENCES `user_wallets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profit_cron_jobs`
--
ALTER TABLE `profit_cron_jobs`
  ADD CONSTRAINT `profit_cron_jobs_child_investment_plan_id_foreign` FOREIGN KEY (`child_investment_plan_id`) REFERENCES `child_investment_plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profit_cron_jobs_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `deposits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profit_cron_jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profit_cron_jobs_user_wallet_id_foreign` FOREIGN KEY (`user_wallet_id`) REFERENCES `user_wallets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `referrers_interest_relationships`
--
ALTER TABLE `referrers_interest_relationships`
  ADD CONSTRAINT `referrers_interest_relationships_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `deposits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrers_interest_relationships_depositor_id_foreign` FOREIGN KEY (`depositor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `referrers_interest_relationships_interest_receiver_id_foreign` FOREIGN KEY (`interest_receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `child_investment_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD CONSTRAINT `user_wallets_main_wallet_id_foreign` FOREIGN KEY (`main_wallet_id`) REFERENCES `main_wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdrawals_user_wallet_id_foreign` FOREIGN KEY (`user_wallet_id`) REFERENCES `user_wallets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdraw_referral_bonuses`
--
ALTER TABLE `withdraw_referral_bonuses`
  ADD CONSTRAINT `withdraw_referral_bonuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
