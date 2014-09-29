-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 29 Wrz 2014, 13:11
-- Wersja serwera: 5.5.32
-- Wersja PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `rozwojowiec`
--
CREATE DATABASE IF NOT EXISTS `rozwojowiec` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rozwojowiec`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `yii_book`
--

CREATE TABLE IF NOT EXISTS `yii_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `publisher` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `realese_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Zrzut danych tabeli `yii_book`
--

INSERT INTO `yii_book` (`id`, `title`, `author`, `publisher`, `comment`, `realese_date`) VALUES
(6, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Time Warner Books UK', 'Personal finance author and lecturer Robert T. Kiyosaki developed his unique economic perspective from two very different influences - his two fathers. One father (Robert''s real father) was a highly educated man but fiscally poor. The other father was the father of Robert''s best friend - that Dad was an eighth-grade drop-out who became a self-made multi-millionaire. The lifelong monetary problems experienced by his poor dad pounded home the counterpoint communicated by his rich dad. Taking that message to heart, Kiyosaki was able to retire at 47.', 1997),
(7, 'Think and Grow Rich', 'Napoleon Hill', 'Tarcher', 'Think and Grow Rich has been called the "Granddaddy of All Motivational Literature." It was the first book to boldly ask, "What makes a winner?" The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world''s winners himself. The most famous of all teachers of success spent "a fortune and the better part of a lifetime of effort" to produce the "Law of Success" philosophy that forms the basis of his books and that is so powerfully summarized in this one.', 1938),
(8, 'The Lean Startup', 'Eric Ries', 'Crown Business', 'Most startups fail. But many of those failures are preventable.  The Lean Startup is a new approach being adopted across the globe, changing the way companies are built and new products are launched. Eric Ries defines a startup as an organization dedicated to creating something new under conditions of extreme uncertainty. This is just as true for one person in a garage or a group of seasoned professionals in a Fortune 500 boardroom. What they have in common is a mission to penetrate that fog of uncertainty to discover a successful path to a sustainable business. ', 2011),
(9, 'Running Lean', 'Ash Maurya', 'O''Reilly Media', 'We live in an age of unparalleled opportunity for innovation. We’re building more products than ever before, but most of them fail—not because we can’t complete what we set out to build, but because we waste time, money, and effort building the wrong product. What we need is a systematic process for quickly vetting product ideas and raising our odds of success. That’s the promise of Running Lean. In this inspiring book, Ash Maurya takes you through an exacting strategy for achieving a "product/market fit" for your fledgling venture, based on his own experience in building a wide array of products from high-tech to no-tech. Throughout, he builds on the ideas and concepts of several innovative methodologies, including the Lean Startup, Customer Development, and bootstrapping.', 2012),
(10, 'The 4-Hour Work Week', 'Timothy Ferriss', 'Crown', 'What do you do? Tim Ferriss has trouble answering the question. Depending on when you ask this controversial Princeton University guest lecturer, he might answer: "I race motorcycles in Europe." "I ski in the Andes." "I scuba dive in Panama." "I dance tango in Buenos Aires." He has spent more than five years learning the secrets of the New Rich, a fast-growing subculture who has abandoned the "deferred-life plan" and instead mastered the new currencies-time and mobility-to create luxury lifestyles in the here and now. Whether you are an overworked employee or an entrepreneur trapped in your own business, this book is the compass for a new and revolutionary world. Join Tim Ferriss as he teaches you: ? How to outsource your life to overseas virtual assistants for $5 per hour and do whatever you want ? How blue-chip escape artists travel the world without quitting their jobs ? How to eliminate 50% of your work in 48 hours using the principles of a forgotten Italian economist ? How to trade a long-haul career for short work bursts and freuent "mini-retirements" ? What the crucial difference is between absolute and relative income ? How to train your boss to value performance over presence, or kill your job (or company) if it''s beyond repair ? What automated cash-flow "muses" are and how to create one in 2 to 4 weeks ? How to cultivate selective ignorance-and create time-with a low-information diet ? What the management secrets of Remote Control CEOs are ? How to get free housing worldwide and airfare at 50-80% off ? How to fill the void and create a meaningful life after removing work and the office', 2007),
(11, 'Getting Things Done', 'David Allen', 'Penguin Books', 'In today''s world, yesterday''s methods just don''t work. In Getting Things Done, veteran coach and management consultant David Allen shares the breakthrough methods for stress-free performance that he has introduced to tens of thousands of people across the country. Allen''s premise is simple: our productivity is directly proportional to our ability to relax. Only when our minds are clear and our thoughts are organized can we achieve effective productivity and unleash our creative potential', 2001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
