-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2023 at 01:50 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`user_id`, `movie_id`) VALUES
(4, 13),
(4, 14),
(8, 16);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ratings` decimal(10,0) NOT NULL,
  `review` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `coverImage` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `duration`, `genre`, `cast`, `ratings`, `review`, `description`, `coverImage`) VALUES
(11, 'Pulp Fiction', ' 2 hours and 34 minutes', ' Crime, Drama', 'John Travolta, Samuel L. Jackson, Uma Thurman, Bruce Willis', '9', '\"Pulp Fiction\" is a masterpiece directed by Quentin Tarantino, known for its nonlinear narrative and stylized violence. ', '\"Pulp Fiction\" tells the interconnected stories of various characters in the Los Angeles underworld. ', 'uploads/Pulp.png'),
(12, 'Closer', ' 1 hour and 44 minutes', 'Drama, Romance', 'Julia Roberts, Jude Law, Natalie Portman, Clive Owen', '7', '\"Closer\" is an intense and emotionally charged drama that delves into the complexities of love, relationships, and betrayal. With a talented cast delivering powerful performances, the film explores the intricacies of human connections and the consequences of desire. It\'s a thought-provoking examination of the fragility and deception that can exist within relationships.', '\"Closer\" follows the lives of four individuals whose paths intertwine in a web of love, passion, and deception. Anna, a photographer, becomes involved with Dan, an obituary writer, and the two embark on a passionate affair. However, their relationship becomes complicated when Dan encounters Alice, a stripper, and begins a relationship with her as well. As the characters\' lives become increasingly entangled, secrets, lies, and heartbreak come to the surface, challenging their notions of love and loyalty. \"Closer\" is a raw and gripping exploration of human connections and the intricacies of relationships.', 'uploads/MV5BN2I0Y2JmZjQtNjEyOC00ODhkLWE5YWUtOWFkOGQwMGYyODRiXkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_-2.jpg'),
(13, 'Anna Karenina', '2 hours and 9 minutes', 'Drama, Romance', 'Keira Knightley, Jude Law, Aaron Taylor-Johnson, Matthew Macfadyen', '7', '\"Anna Karenina\" (2012) is a visually stunning adaptation of Leo Tolstoy\'s classic novel. With lavish production design and captivating performances, the film brings the tragic tale of love, passion, and societal expectations to life. While it may not fully capture the depth and complexity of the source material, it offers a visually striking and emotionally engaging interpretation.', '\"Anna Karenina\" is set in 19th-century Russia and revolves around the life of Anna Karenina, a married socialite trapped in a loveless marriage to Alexei Karenin. When she encounters Count Vronsky, a dashing young officer, their instant connection ignites a passionate affair that defies societal norms and threatens to destroy everything Anna holds dear. As their love affair unfolds amidst a backdrop of high society and moral conflict, Anna is forced to confront the consequences of her choices.\r\n\r\nThis adaptation of \"Anna Karenina\" presents the story in a unique and theatrical manner, with scenes transitioning seamlessly from one elaborate set to another. The film explores themes of love, passion, duty, and the constraints imposed by societal expectations. It delves into the inner struggles of its characters and offers a poignant portrayal of the human condition, particularly the complexities of desire and the pursuit of happiness.', 'uploads/MV5BMTU0NDgxNDg0NV5BMl5BanBnXkFtZTcwMjE4MzkwOA@@._V1_.jpg'),
(14, 'American Beauty', '2 hours and 2 minutes', 'Drama', 'Kevin Spacey, Annette Bening, Thora Birch, Wes Bentley, Mena Suvari, Chris Cooper', '8', '\"American Beauty\" is a thought-provoking and darkly humorous drama that offers a scathing critique of suburban American life. With exceptional performances and a captivating storyline, the film explores themes of identity, beauty, desire, and the search for meaning in a seemingly perfect but ultimately flawed existence. It leaves a lasting impact and prompts viewers to reflect on the hidden struggles and contradictions beneath the surface of everyday life.', '\"American Beauty\" follows the story of Lester Burnham, a middle-aged man going through a midlife crisis. Trapped in a loveless marriage and disenchanted with his job, Lester becomes infatuated with his daughter\'s attractive friend, Angela Hayes, and begins to reassess his priorities. As his newfound rebelliousness unfolds, it affects not only his own life but also those around him, including his wife Carolyn, their teenage daughter Jane, and their mysterious neighbor Ricky Fitts.\r\n\r\nThrough Lester\'s narrative and the interconnected lives of the characters, \"American Beauty\" examines the façade of happiness and success in suburban America, exposing the underlying dissatisfaction, repression, and emotional turmoil. The film\'s powerful cinematography, introspective narration, and a hauntingly beautiful score contribute to its overall impact, capturing the essence of a society grappling with its own contradictions and desires.', 'uploads/p23514_p_v12_ah.jpg'),
(15, 'La La Land', ' 2 hours and 8 minutes', 'Musical, Drama, Romance', 'Ryan Gosling, Emma Stone, John Legend, Rosemare DeWitt', '9', '\"La La Land\" is a breathtaking musical that pays homage to the golden age of Hollywood while offering a modern and heartfelt story. With mesmerizing performances, beautiful cinematography, and enchanting music, it captures the essence of dreams, love, and the pursuit of artistic passion.', 'Set in modern-day Los Angeles, \"La La Land\" follows the lives of Sebastian, a passionate jazz pianist, and Mia, an aspiring actress. The film showcases their individual struggles and dreams as they navigate the competitive and often unpredictable entertainment industry. As their paths intertwine, a vibrant and passionate love story unfolds against the backdrop of the City of Stars. Through joyous musical numbers and poignant moments, \"La La Land\" explores the sacrifices and choices required to chase one\'s dreams while also examining the bittersweet nature of success and the pursuit of happiness.', 'uploads/LaLaLand_530x@2x.jpg'),
(16, 'Focus', '1 hour and 45 minutes', 'Crime, Drama, Romance', 'Will Smith, Margot Robbie, Rodrigo Santoro, Gerald McRaney', '6', '\"Focus\" is an entertaining crime drama with a touch of romance, featuring charismatic performances by Will Smith and Margot Robbie. While the film may not reach the heights of its potential, it offers an enjoyable and stylish experience with twists and turns that keep audiences engaged.', 'In \"Focus,\" Nicky Spurgeon, an experienced con artist played by Will Smith, takes Jess Barrett, a young and talented grifter portrayed by Margot Robbie, under his wing. As they embark on a series of high-stakes scams, their relationship evolves from mentorship to a complicated romantic connection. However, as the line between trust and deception blurs, their loyalty and skills are put to the ultimate test. With sleek cinematography and a captivating story, \"Focus\" explores the world of con artists and the unpredictable nature of love and deceit.', 'uploads/51m-AsdLbyL._AC_UF1000,1000_QL80_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_import`
--

CREATE TABLE `movie_import` (
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year` int DEFAULT NULL,
  `released` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `score` double DEFAULT NULL,
  `votes` double DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `star` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `gross` double DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `runtime` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_import`
--

INSERT INTO `movie_import` (`name`, `rating`, `genre`, `year`, `released`, `score`, `votes`, `director`, `writer`, `star`, `country`, `budget`, `gross`, `company`, `runtime`) VALUES
('*batteries not included', 'PG', 'Comedy', 1987, 'December 18, 1987 (United States)', 6.7, 32000, 'Matthew Robbins', 'Mick Garris', 'Hume Cronyn', 'United States', 25000000, 65088797, 'Universal Pictures', 106),
('9 to 5', 'PG', 'Comedy', 1980, 'December 19, 1980 (United States)', 6.9, 29000, 'Colin Higgins', 'Patricia Resnick', 'Jane Fonda', 'United States', 10000000, 103300686, 'IPC Films', 109),
('A Nightmare on Elm Street 3: Dream Warriors', 'R', 'Fantasy', 1987, 'February 27, 1987 (United States)', 6.6, 73000, 'Chuck Russell', 'Wes Craven', 'Heather Langenkamp', 'United States', 4500000, 44793222, 'New Line Cinema', 96),
('Absence of Malice', 'PG', 'Drama', 1981, 'December 18, 1981 (United States)', 6.9, 12000, 'Sydney Pollack', 'Kurt Luedtke', 'Paul Newman', 'United States', 12000000, 40716963, 'Columbia Pictures', 116),
('Adventures in Babysitting', 'PG-13', 'Adventure', 1987, 'July 3, 1987 (United States)', 6.9, 40000, 'Chris Columbus', 'David Simkins', 'Elisabeth Shue', 'United States', 7000000, 34368475, 'Touchstone Pictures', 102),
('Airplane!', 'PG', 'Comedy', 1980, 'July 2, 1980 (United States)', 7.7, 221000, 'Jim Abrahams', 'Jim Abrahams', 'Robert Hays', 'United States', 3500000, 83453539, 'Paramount Pictures', 88),
('American Gigolo', 'R', 'Crime', 1980, 'February 1, 1980 (United States)', 6.2, 22000, 'Paul Schrader', 'Paul Schrader', 'Richard Gere', 'United States', 4800000, 22743674, 'Paramount Pictures', 117),
('An American Werewolf in London', 'R', 'Comedy', 1981, 'August 21, 1981 (United States)', 7.5, 97000, 'John Landis', 'John Landis', 'David Naughton', 'United Kingdom', 10000000, 30669378, 'Polygram Pictures', 97),
('Angel Heart', 'X', 'Horror', 1987, 'March 6, 1987 (United States)', 7.3, 83000, 'Alan Parker', 'William Hjortsberg', 'Mickey Rourke', 'United Kingdom', 17000000, 17186348, 'Carolco International N.V.', 113),
('Any Which Way You Can', 'PG', 'Action', 1980, 'December 17, 1980 (United States)', 6.1, 18000, 'Buddy Van Horn', 'Stanford Sherman', 'Clint Eastwood', 'United States', 15000000, 70687344, 'The Malpaso Company', 116),
('Arthur', 'PG', 'Comedy', 1981, 'July 17, 1981 (United States)', 6.9, 27000, 'Steve Gordon', 'Steve Gordon', 'Dudley Moore', 'United States', 7000000, 95461682, 'Orion Pictures', 97),
('Barfly', 'R', 'Comedy', 1987, 'October 16, 1987 (United States)', 7.2, 19000, 'Barbet Schroeder', 'Charles Bukowski', 'Mickey Rourke', 'United States', 3000000, 3221568, 'Golan-Globus Productions', 100),
('Beverly Hills Cop II', 'R', 'Action', 1987, 'May 20, 1987 (United States)', 6.5, 111000, 'Tony Scott', 'Danilo Bach', 'Eddie Murphy', 'United States', 28000000, 299965036, 'Paramount Pictures', 100),
('Black Widow', 'R', 'Crime', 1987, 'February 6, 1987 (United States)', 6.4, 9000, 'Bob Rafelson', 'Ronald Bass', 'Debra Winger', 'United States', 10500000, 25205460, 'Amercent Films', 102),
('Blind Date', 'PG-13', 'Comedy', 1987, 'March 27, 1987 (United States)', 6, 21000, 'Blake Edwards', 'Dale Launer', 'Kim Basinger', 'United States', 18000000, 39337581, 'TriStar Pictures', 95),
('Blow Out', 'R', 'Crime', 1981, 'July 24, 1981 (United States)', 7.4, 47000, 'Brian De Palma', 'Brian De Palma', 'John Travolta', 'United States', 18000000, 12000000, 'Filmways Pictures', 108),
('Blue City', 'R', 'Action', 1986, 'May 2, 1986 (United States)', 4.4, 1100, 'Michelle Manning', 'Ross Macdonald', 'Judd Nelson', 'United States', 10000000, 6947787, 'Paramount Pictures', 83),
('Born American', 'R', 'Action', 1986, 'December 19, 1986 (Finland)', 4.1, 1900, 'Renny Harlin', 'Renny Harlin', 'Mike Norris', 'United States', 3401376, 3388020, 'Cinema Group Ventures', 95),
('Brighton Beach Memoirs', 'PG-13', 'Comedy', 1986, 'December 25, 1986 (United States)', 6.8, 3400, 'Gene Saks', 'Neil Simon', 'Blythe Danner', 'United States', 18000000, 11957943, 'Rastar Pictures', 108),
('Broadcast News', 'R', 'Comedy', 1987, 'December 25, 1987 (United States)', 7.2, 28000, 'James L. Brooks', 'James L. Brooks', 'William Hurt', 'United States', 20000000, 67331309, 'Amercent Films', 133),
('Bronco Billy', 'PG', 'Action', 1980, 'June 11, 1980 (United States)', 6.1, 11000, 'Clint Eastwood', 'Dennis Hackin', 'Clint Eastwood', 'United States', 6500000, 24265659, 'Warner Bros.', 116),
('Brubaker', 'R', 'Crime', 1980, 'June 20, 1980 (United States)', 7.2, 17000, 'Stuart Rosenberg', 'W.D. Richter', 'Robert Redford', 'United States', 9000000, 37121708, 'Twentieth Century Fox', 131),
('Buddy Buddy', 'R', 'Comedy', 1981, 'December 11, 1981 (United States)', 6.5, 4500, 'Billy Wilder', 'Francis Veber', 'Jack Lemmon', 'United States', 10000000, 7258543, 'Heron Productions', 96),
('Bustin\' Loose', 'R', 'Comedy', 1981, 'May 22, 1981 (United States)', 6.1, 2900, 'Oz Scott', 'Lonne Elder III', 'Richard Pryor', 'United States', 11000000, 31261269, 'Universal Pictures', 94),
('Caddyshack', 'R', 'Comedy', 1980, 'July 25, 1980 (United States)', 7.3, 108000, 'Harold Ramis', 'Brian Doyle-Murray', 'Chevy Chase', 'United States', 6000000, 39846344, 'Orion Pictures', 98),
('Carbon Copy', 'PG', 'Comedy', 1981, 'September 25, 1981 (United States)', 5.6, 2600, 'Michael Schultz', 'Stanley Shapiro', 'George Segal', 'United States', 6000000, 9566593, 'DeHaven/Shapiro Productions', 92),
('Cattle Annie and Little Britches', 'PG', 'Drama', 1980, 'April 24, 1981 (United States)', 6.1, 604, 'Lamont Johnson', 'David Eyre', 'Scott Glenn', 'United States', 5100000, 534816, 'Cattle Annie Productions', 97),
('Chariots of Fire', 'PG', 'Biography', 1981, 'April 9, 1982 (United States)', 7.2, 56000, 'Hugh Hudson', 'Colin Welland', 'Ben Cross', 'United Kingdom', 5500000, 59303359, 'Enigma Productions', 125),
('Clash of the Titans', 'PG', 'Action', 1981, 'June 12, 1981 (United States)', 6.9, 42000, 'Desmond Davis', 'Beverley Cross', 'Laurence Olivier', 'United Kingdom', 15000000, 41092328, 'Charles H. Schneer Productions', 118),
('Creepshow 2', 'R', 'Fantasy', 1987, 'May 1, 1987 (United States)', 6.1, 23000, 'Michael Gornick', 'Stephen King', 'George Kennedy', 'United States', 3500000, 14000000, 'New World Pictures', 92),
('Cruising', 'R', 'Crime', 1980, 'February 15, 1980 (United States)', 6.5, 20000, 'William Friedkin', 'William Friedkin', 'Al Pacino', 'West Germany', 11000000, 19814523, 'Lorimar Film Entertainment', 102),
('Cutter\'s Way', 'R', 'Crime', 1981, 'February 10, 1982 (France)', 6.9, 5300, 'Ivan Passer', 'Newton Thornburg', 'Jeff Bridges', 'United States', 3000000, 1752634, 'Gurian Entertainment', 109),
('Deadly Blessing', 'R', 'Horror', 1981, 'August 14, 1981 (United States)', 5.6, 5200, 'Wes Craven', 'Glenn M. Benest', 'Maren Jensen', 'United States', 2500000, 8279042, 'PolyGram Filmed Entertainment', 100),
('Dirty Dancing', 'PG-13', 'Drama', 1987, 'August 21, 1987 (United States)', 7, 211000, 'Emile Ardolino', 'Eleanor Bergstein', 'Patrick Swayze', 'United States', 6000000, 214577242, 'Great American Films Limited Partnership', 100),
('Dragnet', 'PG-13', 'Comedy', 1987, 'June 26, 1987 (United States)', 6, 33000, 'Tom Mankiewicz', 'Dan Aykroyd', 'Dan Aykroyd', 'United States', 20000000, 66673516, 'Applied Action', 106),
('Dragonslayer', 'PG', 'Action', 1981, 'June 26, 1981 (United States)', 6.7, 16000, 'Matthew Robbins', 'Hal Barwood', 'Peter MacNicol', 'United Kingdom', 18000000, 14110013, 'Paramount Pictures', 109),
('Dressed to Kill', 'R', 'Crime', 1980, 'July 25, 1980 (United States)', 7.1, 37000, 'Brian De Palma', 'Brian De Palma', 'Michael Caine', 'United States', 6500000, 31899000, 'Filmways Pictures', 104),
('Empire of the Sun', 'PG', 'Action', 1987, 'December 25, 1987 (United States)', 7.7, 119000, 'Steven Spielberg', 'Tom Stoppard', 'Christian Bale', 'United States', 35000000, 22238696, 'Amblin Entertainment', 153),
('Ernest Goes to Camp', 'PG', 'Comedy', 1987, 'May 22, 1987 (United States)', 5.5, 11000, 'John R. Cherry III', 'John R. Cherry III', 'Jim Varney', 'United States', 3500000, 23509382, 'Emshell Producers', 92),
('Escape from New York', 'R', 'Action', 1981, 'July 10, 1981 (United States)', 7.2, 131000, 'John Carpenter', 'John Carpenter', 'Kurt Russell', 'United States', 6000000, 25244626, 'AVCO Embassy Pictures', 99),
('Evil Dead II', 'R', 'Comedy', 1987, 'March 13, 1987 (United States)', 7.7, 152000, 'Sam Raimi', 'Sam Raimi', 'Bruce Campbell', 'United States', 3600000, 5923798, 'Renaissance Pictures', 84),
('Excalibur', 'R', 'Adventure', 1981, 'April 10, 1981 (United States)', 7.4, 59000, 'John Boorman', 'Thomas Malory', 'Nigel Terry', 'United Kingdom', 11000000, 34971136, 'Cinema \'84', 140),
('Eyes of a Stranger', 'R', 'Horror', 1981, 'March 27, 1981 (United States)', 6, 2400, 'Ken Wiederhorn', 'Ron Kurz', 'Lauren Tewes', 'United States', 800000, 1118634, 'Georgetown Productions Inc.', 84),
('Eyewitness', 'R', 'Crime', 1981, 'February 13, 1981 (United States)', 6, 4500, 'Peter Yates', 'Steve Tesich', 'William Hurt', 'United States', 8500000, 6400000, 'Twentieth Century Fox', 103),
('Fatal Attraction', 'R', 'Drama', 1987, 'September 18, 1987 (United States)', 6.9, 79000, 'Adrian Lyne', 'James Dearden', 'Michael Douglas', 'United States', 14000000, 320145693, 'Paramount Pictures', 119),
('For Your Eyes Only', 'PG', 'Action', 1981, 'June 26, 1981 (United States)', 6.7, 94000, 'John Glen', 'Richard Maibaum', 'Roger Moore', 'United Kingdom', 28000000, 54813222, 'Eon Productions', 127),
('Friday the 13th', 'R', 'Horror', 1980, 'May 9, 1980 (United States)', 6.4, 123000, 'Sean S. Cunningham', 'Victor Miller', 'Betsy Palmer', 'United States', 550000, 39754601, 'Paramount Pictures', 95),
('Friday the 13th Part 2', 'R', 'Horror', 1981, 'May 1, 1981 (United States)', 6.1, 61000, 'Steve Miner', 'Ron Kurz', 'Betsy Palmer', 'United States', 1250000, 21722776, 'Georgetown Productions Inc.', 87),
('Full Metal Jacket', 'R', 'Drama', 1987, 'July 10, 1987 (United States)', 8.3, 691000, 'Stanley Kubrick', 'Stanley Kubrick', 'Matthew Modine', 'United Kingdom', 30000000, 46357676, 'Natant', 116),
('Good Morning, Vietnam', 'R', 'Biography', 1987, 'January 15, 1988 (United States)', 7.3, 131000, 'Barry Levinson', 'Mitch Markowitz', 'Robin Williams', 'United States', 13000000, 123922370, 'Touchstone Pictures', 121),
('Halloween II', 'R', 'Horror', 1981, 'October 30, 1981 (United States)', 6.5, 77000, 'Rick Rosenthal', 'John Carpenter', 'Jamie Lee Curtis', 'United States', 2500000, 25533818, 'Dino De Laurentiis Company', 92),
('Harry and the Hendersons', 'PG', 'Comedy', 1987, 'June 5, 1987 (United States)', 6, 32000, 'William Dear', 'William Dear', 'John Lithgow', 'United States', 10000000, 49998613, 'Amblin Entertainment', 110),
('Heartbeeps', 'PG', 'Comedy', 1981, 'December 18, 1981 (United States)', 4.3, 1300, 'Allan Arkush', 'John Hill', 'Andy Kaufman', 'United States', 12000000, 2154696, 'Universal Pictures', 78),
('Heaven\'s Gate', 'R', 'Adventure', 1980, 'April 24, 1981 (United States)', 6.8, 14000, 'Michael Cimino', 'Michael Cimino', 'Kris Kristofferson', 'United States', 44000000, 3484523, 'Partisan Productions', 219),
('History of the World: Part I', 'R', 'Comedy', 1981, 'June 12, 1981 (United States)', 6.9, 47000, 'Mel Brooks', 'Mel Brooks', 'Mel Brooks', 'United States', 11000000, 31672907, 'Brooksfilms', 92),
('Indiana Jones and the Raiders of the Lost Ark', 'PG', 'Action', 1981, 'June 12, 1981 (United States)', 8.4, 905000, 'Steven Spielberg', 'Lawrence Kasdan', 'Harrison Ford', 'United States', 18000000, 389925971, 'Paramount Pictures', 115),
('Innerspace', 'PG', 'Action', 1987, 'July 1, 1987 (United States)', 6.8, 56000, 'Joe Dante', 'Chip Proser', 'Dennis Quaid', 'United States', 27000000, 25893810, 'Warner Bros.', 120),
('Ishtar', 'PG-13', 'Action', 1987, 'May 15, 1987 (United States)', 4.5, 11000, 'Elaine May', 'Elaine May', 'Warren Beatty', 'United States', 55000000, 14375181, 'Columbia Pictures', 107),
('Jaws: the Revenge', 'PG-13', 'Adventure', 1987, 'July 17, 1987 (United States)', 3, 42000, 'Joseph Sargent', 'Peter Benchley', 'Lorraine Gary', 'United States', 23000000, 51881013, 'Universal Pictures', 89),
('La Bamba', 'PG-13', 'Biography', 1987, 'July 24, 1987 (United States)', 6.9, 30000, 'Luis Valdez', 'Luis Valdez', 'Lou Diamond Phillips', 'United States', 6500000, 54215416, 'Columbia Pictures', 108),
('Lethal Weapon', 'R', 'Action', 1987, 'March 6, 1987 (United States)', 7.6, 243000, 'Richard Donner', 'Shane Black', 'Mel Gibson', 'United States', 15000000, 120207127, 'Warner Bros.', 109),
('Mad Max 2', 'R', 'Action', 1981, 'May 21, 1982 (United States)', 7.6, 170000, 'George Miller', 'Terry Hayes', 'Mel Gibson', 'Australia', 3000000, 23668369, 'Kennedy Miller Productions', 96),
('Maid to Order', 'PG', 'Fantasy', 1987, 'July 31, 1987 (United States)', 5.5, 3300, 'Amy Holden Jones', 'Amy Holden Jones', 'Ally Sheedy', 'United States', 3000000, 9868521, 'Vista Organization', 93),
('Mannequin', 'PG', 'Comedy', 1987, 'February 13, 1987 (United States)', 5.9, 30000, 'Michael Gottlieb', 'Edward Rugoff', 'Andrew McCarthy', 'United States', 6000000, 42721196, 'Gladden Entertainment', 90),
('Masters of the Universe', 'PG', 'Action', 1987, 'August 7, 1987 (United States)', 5.4, 38000, 'Gary Goddard', 'David Odell', 'Dolph Lundgren', 'United States', 22000000, 17336370, 'Golan-Globus Productions', 106),
('Melvin and Howard', 'R', 'Comedy', 1980, 'September 19, 1980 (United States)', 6.8, 4500, 'Jonathan Demme', 'Bo Goldman', 'Paul Le Mat', 'United States', 7000000, 4309490, 'Universal Pictures', 95),
('Modern Problems', 'PG', 'Comedy', 1981, 'December 25, 1981 (United States)', 5.1, 4900, 'Ken Shapiro', 'Ken Shapiro', 'Chevy Chase', 'United States', 8000000, 26154211, 'Twentieth Century Fox', 93),
('Mommie Dearest', 'R', 'Biography', 1981, 'September 25, 1981 (United States)', 6.7, 15000, 'Frank Perry', 'Christina Crawford', 'Faye Dunaway', 'United States', 5000000, 19032261, 'Paramount Pictures', 129),
('Moonstruck', 'PG', 'Comedy', 1987, 'January 15, 1988 (United States)', 7.1, 53000, 'Norman Jewison', 'John Patrick Shanley', 'Cher', 'United States', 15000000, 80642217, 'Metro-Goldwyn-Mayer (MGM)', 102),
('Motel Hell', 'R', 'Comedy', 1980, 'October 24, 1980 (United States)', 6, 11000, 'Kevin Connor', 'Robert Jaffe', 'Rory Calhoun', 'United States', 3000000, 6342668, 'Camp Hill', 101),
('Native Son', 'PG', 'Drama', 1986, 'December 12, 1986 (United States)', 5.8, 525, 'Jerrold Freedman', 'Richard Wesley', 'Victor Love', 'United States', 2000000, 1301121, 'American Playhouse', 111),
('Near Dark', 'R', 'Action', 1987, 'January 8, 1988 (United Kingdom)', 7, 35000, 'Kathryn Bigelow', 'Kathryn Bigelow', 'Adrian Pasdar', 'United States', 5000000, 3369307, 'F/M', 94),
('Neighbors', 'R', 'Comedy', 1981, 'December 18, 1981 (United States)', 5.6, 7600, 'John G. Avildsen', 'Thomas Berger', 'John Belushi', 'United States', 8500000, 29916207, 'Columbia Pictures', 94),
('Nighthawks', 'R', 'Action', 1981, 'April 10, 1981 (United States)', 6.4, 18000, 'Bruce Malmuth', 'David Shaber', 'Sylvester Stallone', 'United States', 5000000, 19905359, 'Universal Pictures', 99),
('No Man\'s Land', 'R', 'Crime', 1987, 'October 23, 1987 (United States)', 6.1, 4400, 'Peter Werner', 'Dick Wolf', 'Charlie Sheen', 'United States', 8000000, 2877571, 'Orion Pictures', 106),
('No Way Out', 'R', 'Action', 1987, 'August 14, 1987 (United States)', 7.1, 37000, 'Roger Donaldson', 'Kenneth Fearing', 'Kevin Costner', 'United States', 15000000, 35509515, 'Orion Pictures', 114),
('Oh Heavenly Dog', 'PG', 'Comedy', 1980, 'July 11, 1980 (United States)', 5.4, 2400, 'Joe Camp', 'Rod Browning', 'Chevy Chase', 'United States', 6000000, 6216067, 'Mulberry Square Productions', 103),
('One from the Heart', 'R', 'Drama', 1981, 'February 11, 1982 (United States)', 6.5, 5700, 'Francis Ford Coppola', 'Armyan Bernstein', 'Frederic Forrest', 'United States', 26000000, 636796, 'Zoetrope Studios', 107),
('Ordinary People', 'R', 'Drama', 1980, 'September 19, 1980 (United States)', 7.7, 49000, 'Robert Redford', 'Judith Guest', 'Donald Sutherland', 'United States', 6000000, 54766923, 'Paramount Pictures', 124),
('Outland', 'R', 'Action', 1981, 'May 22, 1981 (United States)', 6.6, 28000, 'Peter Hyams', 'Peter Hyams', 'Sean Connery', 'United Kingdom', 16000000, 17374595, 'The Ladd Company', 109),
('Over the Top', 'PG', 'Action', 1987, 'February 13, 1987 (United States)', 5.8, 51000, 'Menahem Golan', 'Gary Conway', 'Sylvester Stallone', 'United States', 25000000, 16057580, 'The Cannon Group', 93),
('Overboard', 'PG', 'Comedy', 1987, 'December 16, 1987 (United States)', 6.9, 55000, 'Garry Marshall', 'Leslie Dixon', 'Goldie Hawn', 'United States', 22000000, 26713187, 'Metro-Goldwyn-Mayer (MGM)', 112),
('Pennies from Heaven', 'R', 'Drama', 1981, 'January 1, 1982 (United States)', 6.5, 5300, 'Herbert Ross', 'Dennis Potter', 'Steve Martin', 'United States', 22000000, 9171289, 'Metro-Goldwyn-Mayer (MGM)', 108),
('Phobia', 'R', 'Drama', 1980, 'September 9, 1980 (United States)', 4, 546, 'John Huston', 'Gary Sherman', 'Paul Michael Glaser', 'Canada', 5100000, 59167, 'Borough Park Productions', 94),
('Planes, Trains & Automobiles', 'R', 'Comedy', 1987, 'November 25, 1987 (United States)', 7.6, 128000, 'John Hughes', 'John Hughes', 'Steve Martin', 'United States', 30000000, 49530280, 'Paramount Pictures', 93),
('Popeye', 'PG', 'Adventure', 1980, 'December 12, 1980 (United States)', 5.3, 30000, 'Robert Altman', 'Jules Feiffer', 'Robin Williams', 'United States', 20000000, 49823037, 'Paramount Pictures', 114),
('Porky\'s', 'R', 'Comedy', 1981, 'March 19, 1982 (United States)', 6.2, 40000, 'Bob Clark', 'Bob Clark', 'Dan Monahan', 'Canada', 2500000, 111289673, 'Astral Bellevue Pathé', 94),
('Predator', 'R', 'Action', 1987, 'June 12, 1987 (United States)', 7.8, 381000, 'John McTiernan', 'Jim Thomas', 'Arnold Schwarzenegger', 'United States', 15000000, 98268458, 'Twentieth Century Fox', 107),
('Prince of Darkness', 'R', 'Horror', 1987, 'October 23, 1987 (United States)', 6.7, 39000, 'John Carpenter', 'John Carpenter', 'Donald Pleasence', 'United States', 3000000, 14182492, 'Alive Films', 102),
('Prince of the City', 'R', 'Crime', 1981, 'August 26, 1981 (United States)', 7.5, 7600, 'Sidney Lumet', 'Jay Presson Allen', 'Treat Williams', 'United States', 8600000, 8124257, 'Orion Pictures', 167),
('Private Benjamin', 'R', 'Comedy', 1980, 'October 10, 1980 (United States)', 6.2, 24000, 'Howard Zieff', 'Nancy Meyers', 'Goldie Hawn', 'United States', 10000000, 69847348, 'Warner Bros.', 109),
('Private Lessons', 'R', 'Comedy', 1981, 'June 10, 1981 (United States)', 5.2, 3400, 'Alan Myerson', 'Dan Greenburg', 'Sylvia Kristel', 'United States', 2800000, 26279000, 'Barry & Enright Productions', 87),
('Quest for Fire', 'R', 'Adventure', 1981, 'February 12, 1982 (United States)', 7.3, 21000, 'Jean-Jacques Annaud', 'Gérard Brach', 'Everett McGill', 'Canada', 12500000, 20962615, 'International Cinema Corporation (ICC)', 100),
('Radio Days', 'PG', 'Comedy', 1987, 'January 30, 1987 (United States)', 7.5, 32000, 'Woody Allen', 'Woody Allen', 'Mia Farrow', 'United States', 16000000, 14792779, 'Jack Rollins & Charles H. Joffe Productions', 88),
('Raging Bull', 'R', 'Biography', 1980, 'December 19, 1980 (United States)', 8.2, 330000, 'Martin Scorsese', 'Jake LaMotta', 'Robert De Niro', 'United States', 18000000, 23402427, 'Chartoff-Winkler Productions', 129),
('Raising Arizona', 'PG-13', 'Comedy', 1987, 'April 17, 1987 (United States)', 7.3, 130000, 'Joel Coen', 'Ethan Coen', 'Nicolas Cage', 'United States', 6000000, 29180280, 'Circle Films', 94),
('Reds', 'PG', 'Biography', 1981, 'December 25, 1981 (United States)', 7.3, 21000, 'Warren Beatty', 'Warren Beatty', 'Warren Beatty', 'United States', 32000000, 40382659, 'Barclays Mercantile Industrial Finance', 195),
('RoboCop', 'R', 'Action', 1987, 'July 17, 1987 (United States)', 7.5, 240000, 'Paul Verhoeven', 'Edward Neumeier', 'Peter Weller', 'United States', 13000000, 53424681, 'Orion Pictures', 102),
('Roxanne', 'PG', 'Comedy', 1987, 'June 19, 1987 (United States)', 6.6, 42000, 'Fred Schepisi', 'Edmond Rostand', 'Steve Martin', 'United States', 12000000, 40050884, 'Columbia Pictures Industries', 107),
('S.O.B.', 'R', 'Comedy', 1981, 'July 1, 1981 (United States)', 6.4, 5700, 'Blake Edwards', 'Blake Edwards', 'Julie Andrews', 'United States', 12000000, 14867086, 'Artista Management', 122),
('Sky Bandits', 'PG', 'Action', 1986, 'October 31, 1986 (United States)', 4.6, 258, 'Zoran Perisic', 'Thom Keyes', 'Scott McGinnis', 'United Kingdom', 18000000, 2295500, 'J&M Entertainment', 105),
('Somewhere in Time', 'PG', 'Drama', 1980, 'October 3, 1980 (United States)', 7.2, 27000, 'Jeannot Szwarc', 'Richard Matheson', 'Christopher Reeve', 'United States', 5100000, 9709597, 'Rastar Pictures', 103),
('Spaceballs', 'PG', 'Adventure', 1987, 'June 24, 1987 (United States)', 7.1, 176000, 'Mel Brooks', 'Mel Brooks', 'Mel Brooks', 'United States', 22700000, 38119483, 'Brooksfilms', 96),
('Sphinx', 'PG', 'Adventure', 1981, 'February 11, 1981 (United States)', 5.2, 1300, 'Franklin J. Schaffner', 'John Byrum', 'Lesley-Anne Down', 'United Kingdom', 14000000, 2022771, 'Orion Pictures', 118),
('Star Wars: Episode V - The Empire Strikes Back', 'PG', 'Action', 1980, 'June 20, 1980 (United States)', 8.7, 1200000, 'Irvin Kershner', 'Leigh Brackett', 'Mark Hamill', 'United States', 18000000, 538375067, 'Lucasfilm', 124),
('Stardust Memories', 'PG', 'Comedy', 1980, 'September 26, 1980 (United States)', 7.3, 22000, 'Woody Allen', 'Woody Allen', 'Woody Allen', 'United States', 10000000, 10389003, 'Jack Rollins & Charles H. Joffe Productions', 89),
('Stripes', 'R', 'Comedy', 1981, 'June 26, 1981 (United States)', 6.9, 68000, 'Ivan Reitman', 'Len Blum', 'Bill Murray', 'United States', 10000000, 85297000, 'Columbia Pictures', 106),
('Superman II', 'PG', 'Action', 1980, 'June 19, 1981 (United States)', 6.8, 101000, 'Richard Lester', 'Jerry Siegel', 'Gene Hackman', 'United States', 54000000, 108185706, 'Dovemead Films', 127),
('Superman IV: The Quest for Peace', 'PG', 'Action', 1987, 'July 24, 1987 (United States)', 3.7, 44000, 'Sidney J. Furie', 'Jerry Siegel', 'Christopher Reeve', 'United Kingdom', 17000000, 15681020, 'Cannon Films', 90),
('Tai-Pan', 'R', 'Adventure', 1986, 'November 7, 1986 (United States)', 5.6, 1600, 'Daryl Duke', 'John Briley', 'Bryan Brown', 'United States', 25000000, 4007250, 'De Laurentiis Entertainment Group (DEG)', 127),
('Taps', 'PG', 'Drama', 1981, 'December 25, 1981 (United States)', 6.8, 17000, 'Harold Becker', 'Darryl Ponicsan', 'George C. Scott', 'United States', 14000000, 35856053, 'Major Studio Partners', 126),
('Tarzan the Ape Man', 'Approved', 'Adventure', 1981, 'July 24, 1981 (United States)', 3.4, 5300, 'John Derek', 'Tom Rowe', 'Bo Derek', 'United States', 6500000, 36565280, 'Metro-Goldwyn-Mayer (MGM)', 115),
('Teen Wolf Too', 'PG', 'Comedy', 1987, 'November 20, 1987 (United States)', 3.4, 11000, 'Christopher Leitch', 'Jeph Loeb', 'Jason Bateman', 'United States', 3000000, 7888703, 'Atlantic Entertainment Group', 95),
('The Bedroom Window', 'R', 'Crime', 1987, 'January 16, 1987 (United States)', 6.4, 5100, 'Curtis Hanson', 'Anne Holden', 'Steve Guttenberg', 'United States', 8300000, 12640385, 'De Laurentiis Entertainment Group (DEG)', 112),
('The Beyond', 'R', 'Horror', 1981, 'November 11, 1983 (United States)', 6.8, 21000, 'Lucio Fulci', 'Dardano Sacchetti', 'Catriona MacColl', 'Italy', 400000, 123843, 'Fulvia Film', 87),
('The Blue Lagoon', 'R', 'Adventure', 1980, 'July 2, 1980 (United States)', 5.8, 65000, 'Randal Kleiser', 'Henry De Vere Stacpoole', 'Brooke Shields', 'United States', 4500000, 58853106, 'Columbia Pictures', 104),
('The Blues Brothers', 'R', 'Action', 1980, 'June 20, 1980 (United States)', 7.9, 188000, 'John Landis', 'Dan Aykroyd', 'John Belushi', 'United States', 27000000, 115229890, 'Universal Pictures', 133),
('The Cannonball Run', 'PG', 'Action', 1981, 'June 19, 1981 (United States)', 6.2, 34000, 'Hal Needham', 'Brock Yates', 'Burt Reynolds', 'United States', 18000000, 72179579, 'Golden Harvest Company', 95),
('The Evil Dead', 'NC-17', 'Horror', 1981, 'April 15, 1983 (United States)', 7.5, 192000, 'Sam Raimi', 'Sam Raimi', 'Bruce Campbell', 'United States', 350000, 2956630, 'Renaissance Pictures', 85),
('The Final Conflict', 'R', 'Horror', 1981, 'March 20, 1981 (United States)', 5.6, 19000, 'Graham Baker', 'David Seltzer', 'Sam Neill', 'United Kingdom', 5000000, 20471382, 'Twentieth Century Fox', 108),
('The Final Countdown', 'PG', 'Action', 1980, 'August 1, 1980 (United States)', 6.7, 22000, 'Don Taylor', 'Thomas Hunter', 'Kirk Douglas', 'United States', 12000000, 16647800, 'Bryna Productions', 103),
('The Fog', 'R', 'Horror', 1980, 'February 8, 1980 (United States)', 6.8, 66000, 'John Carpenter', 'John Carpenter', 'Adrienne Barbeau', 'United States', 1000000, 21448782, 'AVCO Embassy Pictures', 89),
('The Fox and the Hound', 'G', 'Animation', 1981, 'July 10, 1981 (United States)', 7.3, 87000, 'Directors', 'Daniel P. Mannix', 'Mickey Rooney', 'United States', 12000000, 63456988, 'Walt Disney Animation Studios', 83),
('The Garbage Pail Kids Movie', 'PG', 'Adventure', 1987, 'August 22, 1987 (United States)', 2.6, 7600, 'Rod Amateau', 'Linda Palmer', 'Anthony Newley', 'United States', 1000000, 1576615, 'Atlantic Entertainment Group', 100),
('The Gods Must Be Crazy', 'PG', 'Adventure', 1980, 'October 26, 1984 (United States)', 7.3, 54000, 'Jamie Uys', 'Jamie Uys', 'N!xau', 'South Africa', 5000000, 30031783, 'C.A.T. Films', 109),
('The Hidden', 'R', 'Horror', 1987, 'October 30, 1987 (United States)', 7, 18000, 'Jack Sholder', 'Jim Kouf', 'Kyle MacLachlan', 'United States', 5000000, 9747988, 'Heron Communications', 97),
('The Hollywood Knights', 'R', 'Comedy', 1980, 'May 30, 1980 (United States)', 6.3, 4300, 'Floyd Mutrux', 'Floyd Mutrux', 'Tony Danza', 'United States', 4000000, 10000000, 'PolyGram Filmed Entertainment', 91),
('The Howling', 'R', 'Horror', 1981, 'April 10, 1981 (United States)', 6.6, 32000, 'Joe Dante', 'Gary Brandner', 'Dee Wallace', 'United States', 1000000, 17985893, 'Embassy Pictures', 91),
('The Island', 'R', 'Action', 1980, 'June 13, 1980 (United States)', 5.3, 3900, 'Michael Ritchie', 'Peter Benchley', 'Michael Caine', 'United States', 22000000, 15716828, 'Universal Pictures', 109),
('The Last Flight of Noah\'s Ark', 'G', 'Adventure', 1980, 'June 25, 1980 (United States)', 5.8, 1300, 'Charles Jarrott', 'Ernest K. Gann', 'Elliott Gould', 'United States', 6000000, 11000000, 'Walt Disney Productions', 97),
('The Legend of the Lone Ranger', 'PG', 'Action', 1981, 'May 22, 1981 (United States)', 5.1, 2000, 'William A. Fraker', 'Ivan Goff', 'Klinton Spilsbury', 'United States', 18000000, 12617845, 'Eaves Movie Ranch', 98),
('The Living Daylights', 'PG', 'Action', 1987, 'July 31, 1987 (United States)', 6.7, 91000, 'John Glen', 'Richard Maibaum', 'Timothy Dalton', 'United Kingdom', 40000000, 51186259, 'Eon Productions', 130),
('The Long Riders', 'R', 'Biography', 1980, 'May 16, 1980 (United States)', 7, 10000, 'Walter Hill', 'Bill Bryden', 'David Carradine', 'United States', 10000000, 15795189, 'United Artists', 100),
('The Monster Squad', 'PG-13', 'Action', 1987, 'August 14, 1987 (United States)', 7, 30000, 'Fred Dekker', 'Shane Black', 'Andre Gower', 'United States', 12000000, 3769990, 'TAFT Entertainment Pictures', 79),
('The Nude Bomb', 'PG', 'Action', 1980, 'May 9, 1980 (United States)', 5.1, 3100, 'Clive Donner', 'Mel Brooks', 'Don Adams', 'United States', 15000000, 14662035, 'Universal Pictures', 94),
('The Octagon', 'R', 'Action', 1980, 'August 15, 1980 (United States)', 5.1, 5200, 'Eric Karson', 'Leigh Chapman', 'Chuck Norris', 'United States', 4000000, 18971000, 'American Cinema Productions', 103),
('The Postman Always Rings Twice', 'R', 'Crime', 1981, 'March 20, 1981 (United States)', 6.6, 22000, 'Bob Rafelson', 'David Mamet', 'Jack Nicholson', 'West Germany', 12000000, 12376625, 'CIP Filmproduktion GmbH', 122),
('The Princess Bride', 'PG', 'Adventure', 1987, 'October 9, 1987 (United States)', 8.1, 402000, 'Rob Reiner', 'William Goldman', 'Cary Elwes', 'United Kingdom', 16000000, 30902642, 'Act III Communications', 98),
('The Running Man', 'R', 'Action', 1987, 'November 13, 1987 (United States)', 6.7, 144000, 'Paul Michael Glaser', 'Stephen King', 'Arnold Schwarzenegger', 'United States', 27000000, 38122105, 'TAFT Entertainment Pictures', 101),
('The Secret of My Success', 'PG-13', 'Comedy', 1987, 'April 10, 1987 (United States)', 6.5, 31000, 'Herbert Ross', 'Jim Cash', 'Michael J. Fox', 'United States', 12000000, 110996879, 'Rastar Pictures', 111),
('The Shining', 'R', 'Drama', 1980, 'June 13, 1980 (United States)', 8.4, 927000, 'Stanley Kubrick', 'Stephen King', 'Jack Nicholson', 'United Kingdom', 19000000, 46998772, 'Warner Bros.', 146),
('The Stunt Man', 'R', 'Action', 1980, 'June 27, 1980 (United States)', 7.1, 9000, 'Richard Rush', 'Lawrence B. Marcus', 'Peter O\'Toole', 'United States', 3500000, 7063886, 'Melvin Simon Productions', 131),
('The Untouchables', 'R', 'Crime', 1987, 'June 3, 1987 (United States)', 7.9, 289000, 'Brian De Palma', 'David Mamet', 'Kevin Costner', 'United States', 25000000, 76270454, 'Paramount Pictures', 119),
('The Witches of Eastwick', 'R', 'Comedy', 1987, 'June 12, 1987 (United States)', 6.6, 65000, 'George Miller', 'John Updike', 'Jack Nicholson', 'United States', 22000000, 63766510, 'Warner Bros.', 118),
('Thief', 'R', 'Action', 1981, 'March 27, 1981 (United States)', 7.4, 27000, 'Michael Mann', 'Frank Hohimer', 'James Caan', 'United States', 5500000, 11492915, 'Mann/Caan Productions', 123),
('Three Men and a Baby', 'PG', 'Comedy', 1987, 'November 25, 1987 (United States)', 6.1, 50000, 'Leonard Nimoy', 'Coline Serreau', 'Tom Selleck', 'United States', 11000000, 167780960, 'Touchstone Pictures', 102),
('Throw Momma from the Train', 'PG-13', 'Comedy', 1987, 'December 11, 1987 (United States)', 6.3, 35000, 'Danny DeVito', 'Stu Silver', 'Danny DeVito', 'United States', 14000000, 57915972, 'Orion Pictures', 88),
('Time Bandits', 'PG', 'Adventure', 1981, 'November 6, 1981 (United States)', 7, 60000, 'Terry Gilliam', 'Michael Palin', 'Sean Connery', 'United Kingdom', 5000000, 42368025, 'HandMade Films', 110),
('Tough Guys Don\'t Dance', 'R', 'Comedy', 1987, 'September 18, 1987 (United States)', 4.8, 1300, 'Norman Mailer', 'Norman Mailer', 'Ryan O\'Neal', 'United States', 5000000, 858250, 'Golan-Globus Productions', 110),
('True Confessions', 'R', 'Crime', 1981, 'September 25, 1981 (United States)', 6.3, 7500, 'Ulu Grosbard', 'John Gregory Dunne', 'Robert De Niro', 'United States', 10000000, 12850276, 'Chartoff-Winkler Productions', 108),
('Under the Rainbow', 'PG', 'Comedy', 1981, 'July 31, 1981 (United States)', 5.4, 2600, 'Steve Rash', 'Fred Bauer', 'Chevy Chase', 'United States', 20000000, 18826490, 'Innovisions', 98),
('Victory', 'PG', 'Drama', 1981, 'July 31, 1981 (United States)', 6.7, 29000, 'John Huston', 'Yabo Yablonsky', 'Michael Caine', 'United Kingdom', 10000000, 10853418, 'Lorimar Film Entertainment', 116),
('Violets Are Blue...', 'PG-13', 'Drama', 1986, 'April 25, 1986 (United States)', 5.9, 906, 'Jack Fisk', 'Naomi Foner', 'Sissy Spacek', 'United States', 10000000, 4743287, 'Rastar Films', 88),
('Wall Street', 'R', 'Crime', 1987, 'December 11, 1987 (United States)', 7.4, 147000, 'Oliver Stone', 'Stanley Weiser', 'Charlie Sheen', 'United States', 15000000, 43848069, 'Twentieth Century Fox', 126),
('When Time Ran Out...', 'PG', 'Action', 1980, 'March 28, 1980 (United States)', 4.6, 2600, 'James Goldstone', 'Gordon Thomas', 'Paul Newman', 'United States', 20000000, 3763988, 'International Cinema', 121),
('Willie & Phil', 'R', 'Comedy', 1980, 'August 15, 1980 (United States)', 5.9, 415, 'Paul Mazursky', 'Jean Gruault', 'Michael Ontkean', 'United States', 5500000, 4400000, 'Twentieth Century Fox', 115),
('Wolfen', 'R', 'Horror', 1981, 'July 24, 1981 (United States)', 6.3, 9400, 'Michael Wadleigh', 'Whitley Strieber', 'Albert Finney', 'United States', 17000000, 10626725, 'Orion Pictures', 115),
('Xanadu', 'PG', 'Fantasy', 1980, 'August 8, 1980 (United States)', 5.3, 12000, 'Robert Greenwald', 'Richard Christian Danus', 'Olivia Newton-John', 'United States', 20000000, 22762571, 'Universal Pictures', 96),
('Zoot Suit', 'R', 'Drama', 1981, 'January 1, 1982 (United States)', 6.8, 1100, 'Luis Valdez', 'Luis Valdez', 'Daniel Valdez', 'United States', 2700000, 3256082, 'Universal Pictures', 103);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_movies`
--

CREATE TABLE `recommended_movies` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommended_movies`
--

INSERT INTO `recommended_movies` (`id`, `user_id`, `movie_name`) VALUES
(1, 4, '9 to 5'),
(2, 4, 'Blind Date'),
(3, 4, 'Buddy Buddy'),
(4, 4, 'American Gigolo'),
(5, 4, 'Airplane!'),
(6, 4, 'Adventures in Babysitting');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `username`, `role`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 1, 'admin'),
(4, 'Rafaela', 'Santana', 'rafa@rafa.com', 'Rafa', 0, '$2y$10$2fr.BAEEMLzYiR0Tek6A4ezqqqd.0.r1EdPzCIGxYgGjWwRHY8fju'),
(5, 'Magdalena', 'Musterfrau', 'magdalena@musterfrau.com', 'magdalena', 0, '$2y$10$IXBSuxycd6N0COnhUp.qaecYcdutiFfAp0pEpfkOmDQfElmDk7Y3G'),
(6, 'Livia', 'Zylja', 'liviazylja@gmail.com', 'Liv', 0, '$2y$10$bJvd3r2MD0P91HRcMsZULushKKkP4Wm6D58UzGBpXwhdNozqgmr4q'),
(8, 'Max', 'Mustermann', 'max@mustermann.com', 'max', 0, '$2y$10$3squgO4uRwD3nSWNLLCZlOy7CFKqd/kzQ/btSjbcA.qIY9LnWIuBi');

-- --------------------------------------------------------

--
-- Table structure for table `watched`
--

CREATE TABLE `watched` (
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watched`
--

INSERT INTO `watched` (`user_id`, `movie_id`) VALUES
(4, 11),
(4, 12),
(8, 15);

-- --------------------------------------------------------

--
-- Table structure for table `watch_later`
--

CREATE TABLE `watch_later` (
  `user_id` int NOT NULL,
  `movie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watch_later`
--

INSERT INTO `watch_later` (`user_id`, `movie_id`) VALUES
(8, 13),
(4, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_import`
--
ALTER TABLE `movie_import`
  ADD PRIMARY KEY (`name`,`director`);

--
-- Indexes for table `recommended_movies`
--
ALTER TABLE `recommended_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_name` (`movie_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watched`
--
ALTER TABLE `watched`
  ADD PRIMARY KEY (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `watch_later`
--
ALTER TABLE `watch_later`
  ADD PRIMARY KEY (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `recommended_movies`
--
ALTER TABLE `recommended_movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `recommended_movies`
--
ALTER TABLE `recommended_movies`
  ADD CONSTRAINT `recommended_movies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `recommended_movies_ibfk_2` FOREIGN KEY (`movie_name`) REFERENCES `movie_import` (`name`);

--
-- Constraints for table `watched`
--
ALTER TABLE `watched`
  ADD CONSTRAINT `watched_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `watched_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `watch_later`
--
ALTER TABLE `watch_later`
  ADD CONSTRAINT `watch_later_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `watch_later_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
