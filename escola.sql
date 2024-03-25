-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2023 às 21:22
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_22_170921_create_professors_table', 1),
(6, '2023_09_22_193311_create_relatorio_produtos_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `idade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`id`, `nome`, `salario`, `idade`, `created_at`, `updated_at`) VALUES
(1, 'carlos', 1000.00, 97, '2023-09-22 21:09:06', '2023-09-22 21:09:06'),
(4, 'julio', 5.00, 8, '2023-09-22 21:57:32', '2023-09-22 21:57:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio_produtos`
--

CREATE TABLE `relatorio_produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descAparelho` varchar(255) NOT NULL,
  `defeitoRelatado` varchar(255) NOT NULL,
  `dataEntrada` char(10) NOT NULL,
  `dataSaida` char(10) NOT NULL,
  `nomeCliente` varchar(255) NOT NULL,
  `telefoneContato` char(15) NOT NULL,
  `capa` varchar(3) NOT NULL,
  `chip` int(11) NOT NULL,
  `operadoras` varchar(255) NOT NULL,
  `caboUSB` varchar(3) NOT NULL,
  `cartaoMemoria` int(11) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `assinatura` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `relatorio_produtos`
--

INSERT INTO `relatorio_produtos` (`id`, `descAparelho`, `defeitoRelatado`, `dataEntrada`, `dataSaida`, `nomeCliente`, `telefoneContato`, `capa`, `chip`, `operadoras`, `caboUSB`, `cartaoMemoria`, `observacao`, `assinatura`, `created_at`, `updated_at`) VALUES
(14, 'Telefone', 'Quebrou', '09/11/2023', '22/11/2023', 'Jorge', '(11) 98348-8399', 'Sim', 2, 'Tim, Claro', 'Não', 128, 'Quebrou quando minha esposa jogou em mim', 'JorgeGado', '2023-11-09 23:16:10', '2023-11-09 23:16:10'),
(15, 'Esposo', 'Falta dinheiro', '08/11/2000', '09/11/2000', 'Anfiza', '(11) 98487-3892', 'Sim', 1, 'Vivo', 'Sim', 0, 'Esse marido é uma bosta', 'AnfizaGATONA', '2023-11-09 23:18:09', '2023-11-09 23:18:09'),
(16, 'Anã', 'Muito brava', '09/12/2023', '22/11/2024', 'Colt', '(12) 98347-3473', 'Não', 1, 'Claro', 'Sim', 64, 'Vive estressada', 'ColtOMAISGOSTOSO', '2023-11-09 23:20:16', '2023-11-09 23:20:16'),
(17, 'Test', 'eee', '11/11/1111', '22/22/2222', 'wd2d', '(12) 22222-2222', 'Não', 2, 'Tim, Claro, Vivo', 'Não', 128, 'ojdapoewcoiew', 'dwadwadaw', '2023-11-09 23:21:34', '2023-11-09 23:21:34'),
(18, 'Test', 'eee', '11/11/1111', '22/22/2222', 'wd2d', '(12) 22222-2222', 'Não', 2, 'Tim, Claro, Vivo', 'Não', 128, 'ojdapoewcoiew', 'dwadwadaw', '2023-11-09 23:21:37', '2023-11-09 23:21:37'),
(19, 'Test', 'eee', '11/11/1111', '22/22/2222', 'wd2d', '(12) 22222-2222', 'Não', 2, 'Tim, Claro, Vivo', 'Não', 128, 'ojdapoewcoiew', 'dwadwadaw', '2023-11-09 23:21:40', '2023-11-09 23:21:40'),
(20, 'Test', 'eee', '11/11/1111', '22/22/2222', 'wd2d', '(12) 22222-2222', 'Não', 2, 'Tim, Claro, Vivo', 'Não', 128, 'ojdapoewcoiew', 'dwadwadaw', '2023-11-09 23:21:42', '2023-11-09 23:21:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `relatorio_produtos`
--
ALTER TABLE `relatorio_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professors`
--
ALTER TABLE `professors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `relatorio_produtos`
--
ALTER TABLE `relatorio_produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
