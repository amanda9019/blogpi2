-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2019 às 23:05
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blogpi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `body`, `post_id`, `created_at`, `updated_at`) VALUES
(16, 2, 'Legal! Do balacobaco!', 25, '2019-07-08 11:52:52', '2019-07-08 11:52:52'),
(17, 2, 'comentario teste', 28, '2019-07-08 23:56:49', '2019-07-08 23:56:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_02_020522_create_posts_table', 1),
(4, '2019_07_02_062846_add_user_id_to_posts', 2),
(5, '2019_07_03_005848_add_cover_image_to_posts', 3),
(6, '2019_07_06_034613_create_comments_table', 4),
(7, '2019_07_06_061303_create_comments_table', 5),
(8, '2019_07_07_020402_add_post_id_to_comments', 6),
(9, '2019_07_07_043926_add_post_id_to_comments', 7),
(10, '2019_07_07_053609_create_comments_table', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(25, 'Flappy Mario', '<p>O projeto Flappy Mario foi criado durante o primeiro ano do curso de Ci&ecirc;ncia da Computa&ccedil;&atilde;o da Unifil, como Projeto Interdisciplinar do 1&deg; per&iacute;odo, em 2018.</p>\r\n\r\n<p>Durante a primeira etapa, o jogo foi desenvolvido no Scratch, uma linguagem de programa&ccedil;&atilde;o criada no Media Lab do MIT, pois n&atilde;o exige conhecimento pr&eacute;vio de outras linguagens de programa&ccedil;&atilde;o al&eacute;m da programa&ccedil;&atilde;o ser em blocos, o que o torna uma boa linguagem para iniciantes em programa&ccedil;&atilde;o.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/aU8MHDw.png\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p>Para fazer o jogo foi usado como base o jogo Flappy Bird por ser um jogo que n&atilde;o &eacute; t&atilde;o complexo em quest&atilde;o de programa&ccedil;&atilde;o. J&aacute; para a interface, foram usados sprites da franquia de jogos Mario, juntamente dos efeitos sonoros, m&uacute;sica e a imagem de fundo, sendo todos os cr&eacute;ditos para a empresa Nintendo, empresa a qual a franquia de jogos pertence.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/z2pILig.png\" style=\"height:500px; width:800px\" /></p>\r\n\r\n<p>Partindo para a segunda etapa, o desenvolvimento do jogo foi passado para o Greenfoot, tendo que aprender e desenvolver o jogo na ferramenta, adaptando-se &agrave; ela.</p>\r\n\r\n<p>O Greenfoot &eacute; uma ferramenta de software que ensina programa&ccedil;&atilde;o orientada a objeto com Java, desenvolvido na Universidade de Kent.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.oracle.com/webfolder/technetwork/tutorials/OracleAcademy/GreenfootSelfStudyV1/images/L1S5_ActMethod.png\" style=\"height:585px; width:700px\" /></p>\r\n\r\n<p>Basicamente a interface do jogo permanece a mesma, o que diferencia &eacute; a linguagem de programa&ccedil;&atilde;o usada pela ferramenta que &eacute; diferente da usada pelo Scratch, tendo que criar &ldquo;atores&rdquo; e &ldquo;mundos&rdquo; a fim de criar o programa gr&aacute;fico.</p>\r\n\r\n<p>Concluindo, ambas as ferramentas s&atilde;o boas para pessoas iniciantes em programa&ccedil;&atilde;o, sendo o Scratch o mais f&aacute;cil de aprender e manusear e o Greenfoot para utilizar o Java como linguagem para seus projetos gr&aacute;ficos, al&eacute;m das duas serem f&aacute;ceis e visuais.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/aEZMaSm.png\" style=\"height:105px; width:300px\" /></p>', '2019-07-08 11:18:43', '2019-07-08 11:33:07', 1, 'flappyMario_1562573923.PNG'),
(26, 'Snake Game', '<p>O projeto Snake Game foi criado durante o 3&deg; per&iacute;odo do curso de Ci&ecirc;ncia da Computa&ccedil;&atilde;o da Unifil, na disciplina de T&eacute;cnicas de Programa&ccedil;&atilde;o II, em 2019.</p>\r\n\r\n<p>Nessa disciplina tivemos a escolha entre desenvolver o Jogo da Cobrinha ou o jogo de cartas Vinte-e-Um (ou BlackJack). A finalidade do desenvolvimento de um dos jogos era aprender sobre os Tipos Abstratos de Dados (TDAs), cole&ccedil;&atilde;o bem definida de dados, principalmente sobre Pilhas e Filas.</p>\r\n\r\n<p>Era poss&iacute;vel desenvolver o jogo no Greenfoot, JMonkeyEngine ou LitiEngine, e foi escolhido o Greenfoot para isso pelo f&aacute;cil entendimento.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/brlVK9M.png\" style=\"height:826px; width:854px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para o desenvolvimento do jogo Snake seria mais apropriado utilizar o esquema de fila, enquanto o BlackJack seria por pilha.</p>\r\n\r\n<p>Filas e Pilhas s&atilde;o tipos abstratos utilizados para modelar o comportamento do processamento de dados. As pilhas estabelecem o esquema LIFO (Last in, first out) de acesso aos dados, ou seja, o dado mais recente a ser inserido &eacute; primeiro a ser retirado, como a pilha de cartas. J&aacute; as filas t&ecirc;m o esquema FIFO (First in, first out), ou seja, o dado mais antigo inserido &eacute; o primeiro a ser retirado, como a fila de quadrados que constituem a cobra.</p>\r\n\r\n<p>Para o jogo da cobrinha, foi necess&aacute;rio tr&ecirc;s &ldquo;atores&rdquo; e um &ldquo;mundo&rdquo;. O &ldquo;mundo&rdquo; seria o cen&aacute;rio de fundo, o qual suas margens delimitam os movimentos da cobra, impedindo que ela ultrapasse os limites do cen&aacute;rio, al&eacute;m de um contador de pontos implementado que &eacute; atualizado a cada vez que &eacute; adquirido uma ma&ccedil;&atilde;.</p>\r\n\r\n<p>A ma&ccedil;&atilde; &eacute; um &ldquo;ator&rdquo; programado para aparecer aleatoriamente no cen&aacute;rio, com a exce&ccedil;&atilde;o de que ela n&atilde;o poderia aparecer onde a cabe&ccedil;a e o corpo da cobra est&atilde;o situados, e soma 1 ponto no contador quando a cobra &ldquo;come&rdquo; a ma&ccedil;&atilde;.</p>\r\n\r\n<p>A cabe&ccedil;a e o corpo s&atilde;o dois &ldquo;atores&rdquo; tamb&eacute;m. O primeiro sendo programado para virar a cabe&ccedil;a conforme a tecla pressionada (cima, baixo, direita ou esquerda) e encerrar o jogo se a cabe&ccedil;a colidir com alguma parte do corpo, al&eacute;m de evitar que ela volte da dire&ccedil;&atilde;o que estava vindo, por exemplo, se ela est&aacute; indo para a direita ela n&atilde;o pode ir para a esquerda, apenas virar para cima, para baixo ou continuar para a direita. E o corpo foi desenvolvido para seguir os passos da cabe&ccedil;a, aumentando seu comprimento, atrav&eacute;s de fila, a cada vez que a cobra come uma ma&ccedil;&atilde;.</p>', '2019-07-08 11:36:19', '2019-07-08 11:36:19', 1, 'snake3_1562574978.PNG'),
(27, 'Projeção do Bomberman na Realidade', '<p>A pesquisa foi realizada durante o 3&deg; per&iacute;odo do curso de Ci&ecirc;ncia da Computa&ccedil;&atilde;o da Unifil, na disciplina de C&aacute;lculo Diferencial e Integral, em 2019.</p>\r\n\r\n<p>O intuito da pesquisa era aplicar o conhecimento matem&aacute;tico em outras &aacute;reas. Para essa pesquisa escolhemos uma &aacute;rea que fosse de interesse em comum do grupo: os jogos.</p>\r\n\r\n<p>Escolhida a &aacute;rea, era necess&aacute;rio agora um tema para a pesquisa e foi chegado &agrave; conclus&atilde;o de calcular e analisar o tamanho e a pot&ecirc;ncia, em escala real, de uma bomba do jogo Bomberman.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/csO15Hp.png\" style=\"height:525px; width:800px\" /></p>\r\n\r\n<p>Para come&ccedil;ar, teria que saber o tamanho oficial do Bomberman para assim, calcular o tamanho da bomba do jogo, o que impedia de calcular o tamanho da bomba &eacute; que n&atilde;o temos a altura oficial de nenhum dos dois.</p>\r\n\r\n<p>Felizmente, h&aacute; jogos em que o Bomberman e o Mario aparecem juntos, como no jogo Super Smash Bros Ultimate. Sabendo que a altura oficial do Mario &eacute; 1,55m, de acordo com a pr&oacute;pria Nintendo, era s&oacute; fazer a compara&ccedil;&atilde;o dos modelos dos personagens e da bomba extra&iacute;dos do jogo e convenientemente, os dois personagens t&ecirc;m a mesma altura no jogo.</p>\r\n\r\n<p>Ent&atilde;o, considerando que o Bomberman possui mais ou menos a altura do Mario, &eacute; poss&iacute;vel agora calcular a altura da bomba. Analisando o tamanho do Mario em pixels (335) e em metros (1,55) e o tamanho da bomba em pixels (200 pixels, desconsiderando o pavio), &eacute; s&oacute; aplicar a regra de 3 para chegar &agrave; altura da bomba em metros (0,925).</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/zGXgayv.png\" style=\"height:539px; width:800px\" /></p>\r\n\r\n<p>Fazendo uma pesquisa pelo tipo da bomba, chega-se &agrave; conclus&atilde;o de que o modelo de bomba assemelham-se &agrave;s das bombas usadas em mortars, que eram usadas no s&eacute;culo 18, de acordo com um artigo publicado pelo <a href=\"https://www.atlasobscura.com/articles/why-we-picture-bombs-as-round-black-balls-with-a-burning-wick\">Atlas Obscura</a>.</p>\r\n\r\n<p>De acordo com o livro Artillery Through the Ages, mortars continham proj&eacute;teis feitos de ferro com aproximadamente 12,7cm a 33cm de di&acirc;metro, cheias de p&oacute;lvora com um pavio encaixado em um &lsquo;colarinho&rsquo;, sendo que cada muni&ccedil;&atilde;o pesava aproximadamente de 20 a 90kg. Com isso, &eacute; poss&iacute;vel descobrir a quantidade de p&oacute;lvora contida em uma bomba do Bomberman proporcionalmente &agrave;s bombas usadas na antiguidade.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/Tp6ACZZ.png\" style=\"height:100px; width:500px\" /></p>\r\n\r\n<p>Sabendo que o di&acirc;metro da bomba em pixels (32), o seu tamanho em metros (0,925) e o di&acirc;metro da parte interna da bomba em pixels (24), &eacute; poss&iacute;vel encontrar o tamanho da c&acirc;mara interna em metros (0,69375) aplicando a regra de 3. E com o tamanho da c&acirc;mara interna &eacute; poss&iacute;vel calcular o volume do casco de ferro da bomba.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/zcaBnkT.png\" style=\"height:183px; width:500px\" /></p>\r\n\r\n<p>Calculado o volume de ferro da bomba, pode-se calcular ent&atilde;o o seu peso e comparar com o peso esperado de uma bomba de mesma propor&ccedil;&atilde;o. E calculando a quantidade p&oacute;lvora contida na bomba, encontra-se o peso total da bomba.</p>\r\n\r\n<p>Ent&atilde;o, se 163,81kg de p&oacute;lvora equivale &agrave; 3,878 MJ de energia e y kg de TNT equivale a 4,186 MJ, aplicando uma regra de 3 chega-se &agrave; conclus&atilde;o de que y = 151,76kg de TNT.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/6HmiBA9.png\" style=\"height:443px; width:800px\" /></p>\r\n\r\n<p>Inserindo essa quantidade de TNT no site da <a href=\"https://www.un.org/disarmament/un-saferguard/explosion-consequence-analysis/\">UN</a>, &eacute; poss&iacute;vel calcular e analisar os danos causados a certas dist&acirc;ncias por uma bomba do Bomberman em escala real.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i.imgur.com/c1iWOUa.png\" style=\"height:575px; width:800px\" /></p>', '2019-07-08 11:43:54', '2019-07-08 11:43:54', 1, 'Game_Theory_1562575434.png'),
(28, 'Teste', '<p><em>pipipi </em><strong>popopo</strong></p>', '2019-07-08 23:56:15', '2019-07-08 23:56:15', 2, 'noimage.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amanda', 'amandamika9019@gmail.com', NULL, '$2y$10$AAid9GaDlFeehUpmN/PdoO70RgEKECPnNrdF96ewTH1j42sAevb5u', NULL, '2019-07-02 09:23:21', '2019-07-02 09:23:21'),
(2, 'Fulano', 'fulano@test.com', NULL, '$2y$10$nMSoa01dy7Z7rt9m9rgL2eng/OlW64QlgrCUPjUkULGLSDGooZ8Hu', NULL, '2019-07-03 02:56:15', '2019-07-03 02:56:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
