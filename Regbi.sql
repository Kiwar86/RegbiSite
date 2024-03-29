-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2018 г., 14:59
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Regbi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `min_text` text NOT NULL,
  `full_text` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `min_text`, `full_text`, `photo`, `date`) VALUES
(1, '\"Кузбасс\" улучшает результат!', '', 'С 16 по 21 мая шесть команд вступили в борьбу за звание чемпиона России по регби на колясках. Матчи первого круга чемпионата России по регби на колясках спорта лиц с ПОДА прошли на паралимпийской базе, находящейся в городе Алексин (Тульская область).\r\nКоманда Кемеровской области \"Кузбасс\" участвовала в чемпионате России всего второй раз! В прошлом году спортсмены из Кузбасса впервые играя на таком высоком уровне сразу стали призерами, бронзовые медали, это был большой успех и неожиданный для других сборных. В этот раз наши ребята проиграли только сборной Москвы, которая состоит вся из членов сборной России. \r\nЛучшим игроком чемпионата стал лидер кемеровской команды Илья Мысляев!\r\nОн набрал наибольшее число очков за весь чемпионат!\r\nТатьяна Шишкина, тренер команды, мастер спорта России и отличник физической культуры и спорта, впервые присутствовала на таком чемпионате была очень удивлена высоким уровнем команд и игроков! Команда по приезду домой будет тренироваться и готовиться ко второму туру чемпионата России!\r\nВ соревновании приняли участие шесть команд:\r\n1 место - Сборная города Москвы, 2 место - Сборная Кемеровской области, 3 место - Сборная Московской области, 4 место - Регбийный клуб \"Владивосток\" (Приморский край), 5 место - Регбийный клуб \"Страна гор\" (Республика Дагестан), 6 место - Сборная города Санкт-Петербурга. \r\nПервый круг чемпионата страны завершился 21 мая. Второй круг пройдёт осенью. ', '', '2016-05-25 08:00:00'),
(2, 'Сборная Кузбасса завоевала \"Серебро\" !', '', 'В г. Алексин с 14 по 20 октября прошел чемпионат России по регби на колясках, второй тур! Сборная Кузбасса под руководством тренера Татьяны Шишкиной по итогам двух туров заняла второе место! Это главная сенсация чемпионата! Сибиряки выступают второй год и уже такой результат, в прошлом году заняли третье место! Пропустили на первое место команду Москвы, в которой играют очень опытные спортсмены, практически сборная России! Третье место заняла команда Московской области. В чемпионате принимали участие команды Владивостока, Санкт Петербурга, Ростова и Дагестана.\r\nСамым результативным и лучшим игроком чемпионата стал капитан команды Кузбасса Илья Мысляев, житель г. Прокопьевск. \r\nСборная Кузбасса благодарит за помощь в поездке на чемпионат Краснянского Георгия Леонидовича, компания \"Каракан Инвест\".', '', '2016-10-23 09:17:21'),
(3, 'Шесть команд поспорят за победу на Чемпионате России по регби на колясках в Алексине', '', 'Представители шести регионов разыграют комплекты наград чемпионата России по регби на колясках, который пройдет в г. Алексин (Тульская область) на Республиканской учебно-тренировочной базе Министерства спорта Российской Федерации «Ока».\r\n\r\nСроки проведения турнира – с 23 по 29 ноября.\r\n\r\n \r\n\r\nСоревновательные дни – с 25 по 28 ноября.\r\n\r\nСтарший тренер сборной команды России по регби на колясках Сергей Глушаков рассказал о предстоящем турнире.\r\n\r\n«Заявки на участие в чемпионате России подали шесть команд, - заявил пресс-службе ПКР Сергей Глушаков. – Это сборные Москвы, Московской области, Санкт-Петербурга, Кемеровской области, Республики Крым и Республики Дагестан. Команды сначала сыграют по круговой системе, а потом четыре сильнейшие в полуфинале продолжат борьбу за медали».\r\n\r\n«Победители полуфинальных встреч встретятся в матче за первое место, а проигравшие – за третье», - добавил собеседник.\r\n\r\nВ 2016 году звание чемпиона страны завоевала сборная г. Москвы, серебряными призерами турнира стали спортсмены Кемеровской области, а «бронза» досталась Московской области.\r\n\r\nРегби на колясках – это игра между двумя командами по четыре игрока в каждой. В 1996 году этот вид спорта дебютировал на Паралимпийских играх в Атланте. Целью каждой команды является набор игроками очков путем касания или пересечения линии ворот соперника мячом, над которым осуществляется контроль. Возможны следующие действия с мячом: передача, бросок, удар, крученый удар, дриблинг или передвижение с ним в любом направлении, ограниченном действующими правилами. Команда, набравшая большее количество очков к окончанию игры, признается победительницей.', '', '2017-11-20 15:00:00'),
(4, '\"Кузбасс\" завоевал Бронзу на Чемпионате России по регби на колясках!', '', 'В очень упорной борьбе сборная Кемеровской области в первом туре чемпионата России выиграла бронзовые медали! Третье место среди очень сильных и равных команд со всей России это очень большое достижение наших ребят! У нас у единственных нет своих регбийных колясок и спортсмены тренируются на обычных! Но сила воли и большое желание победить, наш тренер Татьяна Шишкина, сибирский \"кузбасский\" характер - это все помогло нашим ребятам!!!', '', '2018-04-25 16:00:00'),
(5, 'Игроки «Металлурга» помогли Кузбасским регбистам-колясочникам ', '', 'В Тульской области прошёл 2-ой и одновременно финальный этап чемпионата России по регби на колясках. В нём, как и в предыдущем этапе, приняли участие 6 команд: сборные Москвы, Санкт-Петербурга, Владивостока, Московской и Кемеровской областей, а также коллектив из республики Дагестан «Страна Гор», заменивший сборную Ростовской области. Соперники выявляли сильнейших в турнире по круговой системе. </br>\r\n</br>\r\nКузбасская команда, которая на 1-ом этапе завоевала серебряные медали, и в этот раз попала в число призёров. Наши регбисты заняли 3-ье место, пропустив вперёд только спортсменов из Москвы (1-ое место) и Московской области (2-ое место), которым уступили в очных поединках. Остальных конкурентов сборная Кемеровской области переиграла и опередила. В общем зачёте места распределились следующим образом:</br> 1) Москва;</br> 2) Кемеровская область;</br> 3) Московская область;</br> 4) Владивосток;</br> 5) Санкт-Петербург;</br> 6) Страна Гор;</br> 7) Ростовская область. </br>\r\n</br>\r\nПриятно отметить, что в качестве волонтёров и участников группы сопровождения сборной Кузбасса на втором этапе чемпионата страны трудились игроки «Металлурга» Алексей Бурдин и Виталий Тюра. О том, как это было, рассказывает Алексей Бурдин:</br> \r\n</br>\r\n– Сборную Кузбасса по регби на колясках тренирует заместитель декана факультета физической культуры НФИ КемГУ Татьяна Иосифовна Шишкина. Я являюсь выпускником этого факультета, а Виталий – действующим студентом, поэтому мы хорошо знакомы. Когда она попросила помочь команде, ответили согласием без раздумий. </br>\r\n</br>\r\n– Какие задачи стояли перед вами? </br>\r\n</br>\r\n– Как вы знаете, инвалиды из-за физических ограничений не могут совершать некоторые движения, которые здоровые люди привыкли делать каждый день. Поэтому мы оказывали ребятам элементарную бытовую помощь: что-то приносили, передавали, доставали. Помогали пересаживаться из обычных колясок в спортивные. По ходу игры поправляли специальные фиксирующие ремни, поднимали регбистов после падений. К сожалению, не во всех аэропортах есть необходимые для колясочников приспособления, поэтому прямо на руках заносили спортсменов в самолёт. Кроме того, старались поддерживать боевой дух ребят, подбадривали, находили слова. </br>\r\n</br>\r\nВ какой-то момент выяснилось, что команда Кемеровской области – единственная, кто приехал на турнир с группой сопровождения. И, конечно, мы не отказывали, если представители других сборных просили о помощи.</br> \r\n</br>\r\n– В этой поездке вы впервые познакомились с таким видом спорта, как регби на колясках? </br>\r\n</br>\r\n– По-настоящему, наверное, да. Мы с Виталием, конечно, знали, что такой вид спорта существует, но не имели представления, как здесь всё устроено. Поэтому по дороге в Тульскую область обо всём расспрашивали игроков и тренера. Вообще, регби на колясках в России начали развивать совсем недавно, около 5 лет назад, но за это время пройден большой путь, сборная уже успела «пошуметь» на международной арене и одержала немало запоминающихся побед. Большое впечатление производит, когда видишь, как меняются люди, пересаживаясь из обычных колясок в игровые. Загораются глаза, появляется невероятное количество энергии, которая передаётся всем окружающим с первых минут матча или тренировки. Кстати, коляски, на первый взгляд кажущиеся тяжёлыми и неповоротливыми, на самом деле очень быстрые, хорошо маневрируют. Когда ребята развивают приличную скорость, всё это выглядит очень зрелищно. Я бы сказал, что в регби на колясках взято лучшее из гандбола, баскетбола и классического регби. Очень сложно подобрать слова, чтобы описать, это просто надо увидеть. </br>\r\n</br>\r\n– Как насчёт риска для здоровья? </br>\r\n</br>\r\n– Конечно, опасность присутствует, как и практически в любом виде спорта. Капитан сборной Кузбасса, лучший бомбардир чемпионата России Илья Мысляев рассказывал, как на чемпионате Европы игрок сборной Англии сильно разогнался, хотел опередить соперника, в результате врезался в него, оба перевернулись, и англичанин во второй раз получил перелом шеи. Поэтому скрывать здесь нечего – риск есть, и спортсмены знают, на что идут. С другой стороны они все с большим уважением относятся друг к другу и не станут без необходимости провоцировать опасные ситуации на площадке. </br>\r\n</br>\r\n– У регбистов-колясочников есть своя «тусовка»? </br>\r\n</br>\r\n– Конечно, это настоящая семья. Все здесь – единомышленники, которые нашли в спорте новый смысл жизни. Ребята из разных команд друг друга хорошо знают, с удовольствием общаются. Мы достаточно быстро «влились». Нас, наверное, тысячу раз переспросили, правда ли мы профессионально занимаемся регби. Мы с гордостью отвечали, что да, это действительно так, мы защищаем цвета новокузнецкого «Металлурга». Сделали не один десяток совместных фото с колясочниками. Услышали трогательные истории, которые заставляют переосмыслить многое. Один регбист рассказал, что после тяжелой травмы 5 лет не выходил из дома. Просто не мог преодолеть лестницу, да и не видел смысла. Другой рассказал, что до того, как появились ограничения по здоровью, 20 лет проработал механиком и не видел ничего, кроме запчастей и инструментов. Сейчас и тот, и другой входят в основной состав сборной России. За пару лет объездили не только всю нашу страну, но и Европу. Чем не пример для тысяч людей, которые после получения инвалидности ставят на себе крест?', '', '2016-10-25 12:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `news` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `news`, `photo`) VALUES
(1, 1, '1.png'),
(2, 1, '2.png'),
(3, 1, '3.png'),
(4, 2, '4.png'),
(5, 2, '5.png'),
(6, 2, '6.png'),
(7, 5, '7.png'),
(8, 5, '8.png'),
(9, 5, '9.png'),
(10, 3, '10.png'),
(11, 3, '11.png'),
(12, 4, '12.png'),
(13, 4, '13.png'),
(14, 4, '14.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'qqqq', '123'),
(2, 'www', '123'),
(3, '111', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news` (`news`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`news`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
