-- phpMyAdmin SQL Dump
    -- version 4.9.5
    -- https://www.phpmyadmin.net/
    --

    -- Host: localhost:3306
    -- Generation Time: Oct 24, 2020 at 01:10 PM
    -- Server version: 5.6.49
    -- PHP Version: 7.3.6
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
    AUTOCOMMIT = 0;
START TRANSACTION
    ;
SET
    time_zone = "+00:00";
    --

    -- Database: `yuserver_blog`
    --

CREATE DATABASE IF NOT EXISTS `yuserver_blog` DEFAULT CHARACTER SET
    latin1 COLLATE latin1_swedish_ci;
USE
    `yuserver_blog`;
    -- --------------------------------------------------------
    --

    -- Table structure for table `blogs`
    --

DROP TABLE IF EXISTS
    `blogs`;
CREATE TABLE `blogs`(
    `id` INT(11) NOT NULL,
    `slug` VARCHAR(512) NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- --------------------------------------------------------
--

-- Table structure for table `blog_contents`
--

DROP TABLE IF EXISTS
    `blog_contents`;
CREATE TABLE `blog_contents`(
    `id` INT(11) NOT NULL,
    `blog_id` INT(11) NOT NULL,
    `title` VARCHAR(512) NOT NULL,
    `description` VARCHAR(882) NOT NULL,
    `content` LONGTEXT NOT NULL,
    `created` DATETIME NOT NULL,
    `modified` DATETIME NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `views` INT(11) NOT NULL DEFAULT '0'
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- --------------------------------------------------------
--

-- Table structure for table `comments`
--

DROP TABLE IF EXISTS
    `comments`;
CREATE TABLE `comments`(
    `id` INT(11) NOT NULL,
    `blog_id` INT(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `website` VARCHAR(255) DEFAULT NULL,
    `message` TEXT NOT NULL,
    `created` DATETIME NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- --------------------------------------------------------
--

-- Table structure for table `users`
--

DROP TABLE IF EXISTS
    `users`;
CREATE TABLE `users`(
    `id` INT(11) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created` DATETIME DEFAULT NULL,
    `modified` DATETIME DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--

-- Truncate table before insert `users`
--

TRUNCATE TABLE
    `users`;
    --

    -- Dumping data for table `users`
    --

INSERT INTO `users`(
    `
id`,
    `email
`,
    `password`,
    `created`,
    `modified`
)
VALUES(
    1,
    'admin@yuserver.in',
    '$2y$10$4KcIFdc2lw2EaL9DufvxWODtmstzQkm5sLvPU.W/FGb50pY8UPqrm',
    '2020-07-09 08:05:32',
    '2020-07-09 08:05:32'
);
--

-- Indexes for dumped tables
--

--

-- Indexes for table `blogs`
--

ALTER TABLE
    `blogs` ADD PRIMARY KEY(`id`),
    ADD UNIQUE KEY `slug`(`slug`);
    --

    -- Indexes for table `blog_contents`
    --

ALTER TABLE
    `blog_contents` ADD PRIMARY KEY(`id`);
    --

    -- Indexes for table `comments`
    --

ALTER TABLE
    `comments` ADD PRIMARY KEY(`id`);
    --

    -- Indexes for table `users`
    --

ALTER TABLE
    `users` ADD PRIMARY KEY(`id`);
    --

    -- AUTO_INCREMENT for dumped tables
    --

    --

    -- AUTO_INCREMENT for table `blogs`
    --

ALTER TABLE
    `blogs` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
    --

    -- AUTO_INCREMENT for table `blog_contents`
    --

ALTER TABLE
    `blog_contents` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
    --

    -- AUTO_INCREMENT for table `comments`
    --

ALTER TABLE
    `comments` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
    --

    -- AUTO_INCREMENT for table `users`
    --

ALTER TABLE
    `users` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

    --

    -- #24 October 2020
    --
ALTER TABLE
    `blog_contents` ADD `keywords` VARCHAR(255) NULL AFTER `blog_id`;
    
    COMMIT
    ;