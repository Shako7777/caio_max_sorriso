-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2021 às 03:51
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `max_sorriso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `casos`
--

CREATE TABLE `casos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doutor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paciente_id` bigint(20) UNSIGNED DEFAULT NULL,
  `codigo_caso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cirurgia` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `casos`
--

INSERT INTO `casos` (`id`, `doutor_id`, `paciente_id`, `codigo_caso`, `data_cirurgia`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '225557', '2021-05-25', 'aguardando preenchimento de dados do paciente', '2021-05-25 04:33:03', '2021-05-25 04:33:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doutores`
--

CREATE TABLE `doutores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `uf` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crm` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `doutores`
--

INSERT INTO `doutores` (`id`, `nome`, `email`, `telefone`, `data_nascimento`, `uf`, `crm`, `created_at`, `updated_at`) VALUES
(1, 'Fulano Sicrano', 'fulano@sicrano.com', '55 11 88888-8888', '1970-05-10', 'SP', '2277780', '2021-05-25 04:31:12', '2021-05-25 04:31:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2021_05_23_211637_create_pacientes_table', 1),
(17, '2021_05_23_232054_create_doutores_table', 1),
(18, '2021_05_23_235326_create_casos_table', 1),
(19, '2021_05_24_015657_create_statuses_table', 1),
(20, '2021_05_24_222335_create_tomografias_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `email`, `telefone`, `data_nascimento`, `created_at`, `updated_at`) VALUES
(1, 'Caio Vinicius dos Santos', 'caio_surfing@icloud.com', '55 11 99999-9999', '1988-04-18', '2021-05-25 04:30:44', '2021-05-25 04:30:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aguardando preenchimento de dados do paciente', NULL, NULL),
(2, 'aguardando envio da tc', NULL, NULL),
(3, 'em andamento', NULL, NULL),
(4, 'finalizado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tomografias`
--

CREATE TABLE `tomografias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caso_id` bigint(20) UNSIGNED DEFAULT NULL,
  `codigo_projeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `espessura_tc` int(11) NOT NULL,
  `nome_arquivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasta_arquivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tomografias`
--

INSERT INTO `tomografias` (`id`, `caso_id`, `codigo_projeto`, `espessura_tc`, `nome_arquivo`, `pasta_arquivo`, `created_at`, `updated_at`) VALUES
(1, 1, '22289', 10, 'PROVA - BACK-END.pdf', '/storage/uploads/PROVA - BACK-END.pdf', '2021-05-25 04:33:03', '2021-05-25 04:33:03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `casos_codigo_caso_unique` (`codigo_caso`),
  ADD UNIQUE KEY `casos_doutor_id_unique` (`doutor_id`),
  ADD UNIQUE KEY `casos_paciente_id_unique` (`paciente_id`);

--
-- Índices para tabela `doutores`
--
ALTER TABLE `doutores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doutores_email_unique` (`email`),
  ADD UNIQUE KEY `doutores_crm_unique` (`crm`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pacientes_email_unique` (`email`);

--
-- Índices para tabela `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tomografias`
--
ALTER TABLE `tomografias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tomografias_codigo_projeto_unique` (`codigo_projeto`),
  ADD KEY `tomografias_caso_id_foreign` (`caso_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casos`
--
ALTER TABLE `casos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `doutores`
--
ALTER TABLE `doutores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tomografias`
--
ALTER TABLE `tomografias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `casos`
--
ALTER TABLE `casos`
  ADD CONSTRAINT `casos_doutor_id_foreign` FOREIGN KEY (`doutor_id`) REFERENCES `doutores` (`id`),
  ADD CONSTRAINT `casos_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Limitadores para a tabela `tomografias`
--
ALTER TABLE `tomografias`
  ADD CONSTRAINT `tomografias_caso_id_foreign` FOREIGN KEY (`caso_id`) REFERENCES `casos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
