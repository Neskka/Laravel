-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 22, 2025 at 04:32 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dogs`
--

CREATE TABLE `dogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `hair` varchar(255) NOT NULL,
  `adopted` tinyint(1) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `slug`, `sex`, `age`, `size`, `weight`, `height`, `hair`, `adopted`, `description`, `photo_path`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Lonely', 'lonely', 'suczka', 2, 'średni', 14, 45, 'Krótka/mieszana', 0, 'Lonley to piękna, oryginalnie umaszczona a do tego przesympatyczna sunia. Bardzo łagodna, kochana, uległa i posłuszna. Uwielbia pieszczoty, ale nie jest przy tym nachalna. Jest przyjaźnie nastawiona do wszystkich, zarówno dorosłych jak i dzieci. Potrafi pięknie chodzić na smyczy. Lonella pozytywnie reaguje na wszystkie napotkane psiaki, zachęca je wesoło do zabawy. Nigdy nie wykazuje agresji, nie warczy, ma postawę bardzo uległą. W domu tymczasowym mieszka w 7 letnią dziewczynką, jest naprawdę wzorowym pieskiem. Zachowuje czystość, nie niszczy, nie wchodzi na kanapę, nie ściąga jedzenia z kuchennych blatów. Grzecznie zostaje sama w domu kilka godzin. Uwielbia zabawę piłeczką w ogrodzie, widać, że sprawia jej to ogromną radość. Zamienia się wtedy w wulkan energii. Nawet podczas szalonej zabawy jest delikatna i ostrożna (także wobec kilkuletnich dzieci). Nie sprawia żadnych kłopotów podczas jazdy samochodem. To naprawdę idealna sunieczka - wierzymy, że wkrótce ktoś się w niech zakocha. Lonley jest wykastrowana.', 'dog_photos/AeteXaZSeFoN8PCMbwY3kih8q6ULGrjlKIC3JZ6k.jpg', '2025-01-19 13:43:19', '2025-01-21 13:08:21', NULL),
(2, 'Lento', 'lento', 'piesek', 1, 'mały', 12, 38, 'Długa/mieszana', 0, 'Lento jest przyjaznym, niestrachliwym i bardzo śmiałym pieskiem. Przypuszczamy, że żył w mieście, bo nie boi się przejeżdżających aut i dużych skupisk ludzi czy psów. Radośnie wita każdego człowieka, a w boksie staje na dwóch łapkach i szczeka, chcąc zwrócić na siebie uwagę. Ma dobre relacje z psami ze swojego kojca, na spacerach też jest spokojny wobec psów, chyba, że są duże. Takich się boi i szczeka na nie. Lento ładnie chodzi na smyczy i bardzo lubi spacery u boku człowieka. Powinien wpasować się w rodzinkę z dziećmi, oczywiście takimi, które potrafią szanować psie granice. Lento to typ pieszczocha, który będzie wiernie podążał za Tobą.', 'dog_photos/UpOt5CtJTe71msgneSjpksAyFzIECfkGhZdfDhNC.jpg', '2025-01-19 13:45:31', '2025-01-21 11:17:28', NULL),
(3, 'Carlo', 'carlo', 'piesek', 3, 'średni', 25, 58, 'Krótka', 1, 'Carlo to duży, bardzo energiczny samiec. Chce biegać, spacerować zwiedzać świat. Ze względu na swój temperament potrafi pociągnąć na smyczy. Aktywna zabawa to dla niego coś najwspanialszego. Dla Carlo wszystko co najlepsze jest z człowiekiem. Bo ludzi Carlo kocha ponad wszystko. Przytulanie, głaskanie, czochranie za uszami, to właśnie uwielbia. Nie przepada za bliskością innych psów-samców, chociaż na spacerze potrafi się grzecznie mijać. Carlo to wymarzony psiak dla aktywnych osób! Nie odnajdzie się w spokojnym domu, na kanapie... Ruch to jego żywioł. Obecnie Crlo mieszka w domu tymczasowym z duża sunią, z którą pięknie się bawi. Carlo akceptuje także koty.', 'dog_photos/Rucub2j7bGZQTEZKqH8qhSKuJ92g2MA9k5a0yAgE.jpg', '2025-01-19 13:46:45', '2025-01-22 10:04:14', 13),
(4, 'Cheddar', 'cheddar', 'piesek', 2, 'duży', 22, 60, 'Długa/mieszana', 0, 'Cheddar to wyjątkowy piesek, który trafił do nas bardzo zaniedbany, z obciętym ogonem, sflicowaną sierścią, bardzo zabiedzony (ma duża niedowagę). Z początkowo niepewnego w schronisku szybko zmienił się w otwartego wesołka. W sytuacjach nowych oparcia szuka w człowieku. Cheddar jest bardzo uległy w stosunku do opiekuna, przytula się, pragnie kontaktu, liże. Jest jednak ostrożny i na gwałtowny dotyk reaguje warknięciem. Na pewno spotkało go coś złego. W relacjach z psami ze swojego boksu jest przyjacielski i otwarty, nie przepada za obcymi samcami. Cheddar jest bardzo delikatnym psem, wyłącznie dla wyjątkowego człowieka. Będzie potrzebował czasu, spokoju, kogoś kto nie zrazi się gdy wystąpią problemy. Ten pies musi już trafić do tego jedynego domu na zawsze. Dom z małymi dziećmi - wykluczony. Cezar bardzo ładnie spaceruje na smyczy, lubi długie spokojne spacery. Czy ty też?', 'dog_photos/R86b92JAaWYngZe3ye7saVU3YMgASAbug8qDYVx7.jpg', '2025-01-19 13:47:57', '2025-01-21 11:17:33', NULL),
(5, 'Eika', 'eika', 'suczka', 1, 'średni', 12, 40, 'Krótka/mieszana', 0, 'Eika to bardzo delikatna sunia, którą schronisko kompletnie przytłacza. Nie rozumie jakie panują tu zasady, dlaczego zawsze jest hałas. W pierwszej chwili po wyjściu ze schroniska nie chce chodzić, ale gdy już ochłonie zaczyna wstawać i spokojnie spacerować. Pomalutku próbuje zwiedzać otoczenie i węszyć. Gdy czegoś się przestraszy, przystaje lub kładzie się. Eika lubi dotyk człowieka, głaski sprawiają jej radość. Jest łasa na smaczki i zaczyna powoli ogonkiem okazywać zadowolenie. Jest przyjacielska w stosunku do innych psiaków. Eika w nowym domu będzie potrzebowała czasu na oswojenie się z miejscem. Jeśli podarujesz jej miłość, dasz czas i otuchę Eika rozkwitnie. Szukamy domu bez małych dzieci, dom z innym psem mile widziany.', 'dog_photos/YtTR76tZphfSmZgjQkc80TKkyGET2CpaGtcCoVri.jpg', '2025-01-19 13:49:28', '2025-01-20 21:57:58', NULL),
(6, 'Varian', 'varian', 'piesek', 2, 'duży', 28, 60, 'Krótka', 0, 'Varian to wielki pieszczoch, ciałem i duchem. Przeczący fatalnym stereotypom, że dużemu psu do szczęścia potrzebne jest podwórko. Varianowi trzeba człowieka, który przytuli, posadzi na kanapie obok siebie, a wcześnie go \"wybiega\". Varian bardzo ładnie chodzi na smyczy, przeskakuje kałuże i reaguje na komendy siad, daj łapę, chodź. Prawdopodobnie był bity, bo kuli się, gdy człowiek machnie gwałtownie ręką. Psiaki to dla niego zarówno przyjaciele, nieintersujące \"obiekty\" jak i wrogowie. Nie z każdym będzie się przyjaźnił. Za to ludzi uwielbia wszystkich. Varian czeka na osobę, która zapewni mu energetyczne spacery i przytulne wieczory razem.', 'dog_photos/LMgB8YtEyzYiNPyQKURR191B6zBq4e8sPuWG0B0x.jpg', '2025-01-19 13:51:12', '2025-01-19 13:51:12', NULL),
(7, 'Luni', 'luni', 'piesek', 3, 'średni', 12, 46, 'Długa/mieszana', 0, 'Luni to przesłodziak, łagodny i kochany. Bardzo pragnie człowieka, bez pardonu wpycha się na kolana i nie przepuści żadnej okazji by dać buziaka. Luni wspaniale chodzi na smyczy. Byłby wspaniałym przyjacielem dużego dziecka (wiek szkolny). Luni to delikatny piesek, któremu brak pewności siebie, w sytuacjach stresowych chowa się, udaje niewidzialnego. Nie jest aktywny, osoba starsza także da sobie z nim radę. Dobrze reaguje na psy w schronisku. To przekochany psiak, który bardzo szybko musi znaleźć się w najlepszym domu.', 'dog_photos/isGdHUgmbiP79Z9f6pNP1pkAmWe1xg2yHuWRiJxA.jpg', '2025-01-19 13:51:59', '2025-01-19 13:51:59', NULL),
(8, 'Argon', 'argon', 'piesek', 2, 'średni', 18, 58, 'Krótka', 0, 'Argon to psiak naładowany pozytywną energią, której musi dać ujście. Bieganie, węszenie, zdobywanie nowych terenów - to powinien być jego chleb powszedni. Tego oczekujemy od przyszłego opiekuna - czasu dla psa, aktywności, otwartości na jego potrzeby. Argon słucha opiekuna, jest bardzo kontaktowy i bystry. Lubi dzieci, na pewno żył w jakiejś rodzinie. Uwielbia pieszczoty i czas, w którym człowiek się nim interesuje. Na spacerach szczeka do innych psów, ale nieagresywnie. Pięknie chodzi na smyczy.', 'dog_photos/OD99yv0gCBWdsKRhfcg3YJLiplwMe4FL2Dl4xgap.jpg', '2025-01-19 13:52:47', '2025-01-19 13:52:47', NULL),
(9, 'Sonar', 'sonar', 'piesek', 2, 'duży', 33, 65, 'Krótka', 0, 'Sonar to duży, kochany, cudowny pies. Wygląda na groźnego ale nic bardziej mylnego. To anioł w psiej skórze. Bardzo łagodny, kochany, przytulas. Idealnie zachowuje się w kontaktach z człowiekiem. Słucha, podąża i korzysta z każdej okazji by być blisko. Idealnie wręcz chodzi na smyczy - mimo siły, którą dysponuje, nie ciągnie, ładnie spaceruje podążając za opiekunem. Na pewno jednak będzie wymagał aktywności na co dzień. Sonar jest samcem dominującym w schroniskowym boksie, jeśli miałby iść do domu z innym psem to musiałaby być to uległa suczka. Sonar to słodziak jakich mało.', 'dog_photos/qT58WjHYq0aQc1eMhsZmIzgFYG6Esikj88N7FPPT.jpg', '2025-01-19 13:53:30', '2025-01-20 15:05:54', NULL),
(10, 'Alistar', 'alistar', 'piesek', 4, 'duży', 32, 59, 'Długa', 1, 'Alistar to pies szczególny, bardzo duży, młody a do tego pełen emocji. To niełatwa mieszanka, zwłaszcza przy psie przebywającym w schronisku. To pies, który potrzebuje ułożenia, wyciszenia, ogłady, treningu. A przede wszystkim człowieka, który da mu zasady i zadania do wykonania. Nie każdy poradzi sobie z takim psem. Alistar lubi aktywność, ale ładnie chodzi na smyczy. Różnie reaguje na mijane psy. Szukamy mu domu bez dzieci (podgryza w emocjach). Jeśli lubisz psy w typie owczarka i masz doświadczenie w pracy z psem to Alistar czeka na Ciebie.', 'dog_photos/aIYo6cK8ygokyKMQaUxGhwNhYl5zSKtzKSWLQZxA.jpg', '2025-01-19 13:54:16', '2025-01-19 13:54:16', NULL),
(11, 'Ariko', 'ariko', 'piesek', 5, 'średni', 13, 38, 'Krótka/mieszana', 1, 'Ariko to psiak, który musiał sporo przejść w życiu; do schroniska trafił zaniedbany i wycofany. Nie umiał chodzić na smyczy, nie wiedział, że człowiek może chcieć dla niego dobrze. Jednak bardzo szybko się wszystkiego uczy. Teraz bardzo czeka na swoją kolej na spacer i na kontakt z człowiekiem. Pięknie spaceruje na smyczy, powolutku drepcząc przy człowieku. Jest łasy na smaczki i lubi głaskanie po główce czy szyi. Ariko bardzo lubi inne psiaki i świetnie się z nimi dogaduje. Ariko nadal boi się przy zapinaniu i odpinaniu obroży, nie wie do końca czego się spodziewać, straszy wtedy zębami. Przyszła rodzina musi to z nim ćwiczyć, trzeba też będzie dać mu czas na oswojenie się z nowym miejscem. Po tym jak szybko zmienia się w schronisku wiemy, że kiedy już komuś w pełni zaufa będzie naprawdę wiernym członkiem rodziny. Wykluczamy dom z dziećmi, do Ariko trzeba podchodzić spokojnie i z wyczuciem, szanować jego początkowe granice świeżo po adopcji. Jeśli masz doświadczenie z psami i dużo cierpliwości Ariko czeka właśnie na Ciebie.', 'dog_photos/Rnt2j7ifHBXbLN1sF0JMfAcABZK1luNNRiJaE271.jpg', '2025-01-19 13:55:11', '2025-01-19 13:55:11', NULL),
(12, 'Gohan', 'gohan', 'piesek', 3, 'duży', 33, 62, 'Długa', 1, 'Gohan jest wspaniałym, młodym i dużym psem. Bardzo mądrym i chętnym do współpracy z człowiekiem. Do tego łagodnym i przyjacielskim. Pięknie spaceruje na smyczy, nie zaczepiając podczas spacerów innych psów. Lubi aktywność, z natury jest energiczny. Bardzo słucha człowieka , podąża za nim. Kto da mu prawdziwy dom?', 'dog_photos/NAY5bxApNMKpXMncB427XtP0PRSWNBGRbmVJgtTI.jpg', '2025-01-19 13:56:25', '2025-01-21 13:31:58', NULL),
(13, 'Shine', 'shine', 'piesek', 5, 'średni', 18, 42, 'Długa/mieszana', 1, 'Shine w pierwszych chwilach znajomości jest wstydziuszkiem. Ale osoba ciepła i spokojna, która da mu czas szybko zyska w nim prawdziwego przyjaciela. Gdy czuje się bezpieczny pokazuje naturę wesołego i bardzo przyjacielskiego psiaka. To typowo stadny chłopak, który nie ma żadnych problemów w relacjach z psami i może zamieszkać w nawet bardzo \"zapsionym\" domu. Shine umie chodzić na smyczy, lubi spokojnie spacerować z osobą, przy której czuje się pewnie. Szukamy domu z osobami dorosłymi lub dziećmi w wieku szkolnym.', 'dog_photos/uAnBxiwb0vsQVdRGW16gcWzdMiEAVRa2Mxcci09f.jpg', '2025-01-19 13:57:30', '2025-01-19 13:57:30', NULL),
(14, 'Tasil', 'tasil', 'piesek', 3, 'średni', 18, 51, 'Długa/mieszana', 1, 'Tasil to ze wszech miar pies cudowny. Bardzo ułożony, łagodny i stonowany. Słucha człowieka, podąża za nim. W schronisku jest niezwykle opanowany, co w takich warunkach dla psa nie jest łatwe. Widać po zachowaniu, że jego dotychczasowe relacje z ludźmi były dobre. Pięknie chodzi na smyczy, stoi spokojnie gdy zatrzymuje się człowiek. Bardzo dobrze reaguje na inne psy. Tasil dopasuje się zarówno do rodziny z dziećmi, kogoś na emeryturze jak i domu z innym psem. On jest fantastycznym psem!', 'dog_photos/77Nmfa6QQOrrH1BjTwMQTth0Jkkq1RoTWl5IijVi.jpg', '2025-01-19 13:58:22', '2025-01-19 13:58:22', NULL),
(23, 'Loki', 'loki', 'piesek', 2, 'mały', 22, 2, 'Długa', 0, '222', 'dog_photos/FCdzhozLygU0T9YDllalOU4sYB1sLZ4po4sQSPYR.png', '2025-01-22 10:06:31', '2025-01-22 10:06:31', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dog_photos`
--

CREATE TABLE `dog_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dog_id` bigint(20) UNSIGNED NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dog_photos`
--

INSERT INTO `dog_photos` (`id`, `dog_id`, `photo_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'dog_photos/V9b2hv8FD961sOxiANySlyzk0FmAAEi2AdZMn609.jpg', '2025-01-19 13:43:19', '2025-01-19 13:43:19'),
(2, 1, 'dog_photos/sRynOvu75uRrWHyD4SLcr2GCwEEssEvsAwVucu8g.jpg', '2025-01-19 13:43:19', '2025-01-19 13:43:19'),
(3, 1, 'dog_photos/LI03WByz4B8b4qyg3z99IoCgJ1cFU2WXPPdFFHTd.jpg', '2025-01-19 13:43:19', '2025-01-19 13:43:19'),
(4, 1, 'dog_photos/Qlha4zR7bKOOkqdJ9K0VubObhVBESL4EWiAMlzHo.jpg', '2025-01-19 13:43:19', '2025-01-19 13:43:19'),
(5, 2, 'dog_photos/pX8jfE0fPl9u7m5tnGFnTJj8fwPnVaRlDyzrmMkV.jpg', '2025-01-19 13:45:31', '2025-01-19 13:45:31'),
(6, 2, 'dog_photos/jkZTolLn2HZZPE1GssCtHHPatumHLu1Sl3q72PdD.jpg', '2025-01-19 13:45:31', '2025-01-19 13:45:31'),
(7, 2, 'dog_photos/Q1K1dylXd5I2m3kKxMk2u2vLY0NBZLhuW3G3RlU2.jpg', '2025-01-19 13:45:31', '2025-01-19 13:45:31'),
(8, 2, 'dog_photos/dDRyHXL1gRB9YhsfFd6YSqQHMrmNXxjHwQOLWVNj.jpg', '2025-01-19 13:45:31', '2025-01-19 13:45:31'),
(9, 3, 'dog_photos/AB51O6Fk3hqmRT4rktmNnwvCCAR0Z8h4onQnCwnb.jpg', '2025-01-19 13:46:45', '2025-01-19 13:46:45'),
(10, 3, 'dog_photos/GwUK9PBVY7mModnW2aio56nyyXbW4lf5LXk1lMqE.jpg', '2025-01-19 13:46:45', '2025-01-19 13:46:45'),
(11, 3, 'dog_photos/x9PqJgmHco86SD8GtzqHgHfh5FxGo9vAPAQ7A8cE.jpg', '2025-01-19 13:46:45', '2025-01-19 13:46:45'),
(12, 3, 'dog_photos/vFsrwZJK79dMOnI7K0cdJFukONVorZVy5It1xdfh.jpg', '2025-01-19 13:46:45', '2025-01-19 13:46:45'),
(13, 4, 'dog_photos/Bt0hmD6djfmqDX5hl15yABa97iGc4KZyHavI4Nk4.jpg', '2025-01-19 13:47:57', '2025-01-19 13:47:57'),
(14, 4, 'dog_photos/DxzOztB7MU57fXiQSGqemeEU7cTtLWkmXCJvCgr6.jpg', '2025-01-19 13:47:57', '2025-01-19 13:47:57'),
(15, 4, 'dog_photos/MLH4T3Xr0aXUdj8lihEtEg3YQ2CxaLBRC7MxLVs0.jpg', '2025-01-19 13:47:57', '2025-01-19 13:47:57'),
(16, 4, 'dog_photos/zQmzrE1tWRR6QrbDJPOFwyLPybiIhnUhv3e1madg.jpg', '2025-01-19 13:47:57', '2025-01-19 13:47:57'),
(17, 5, 'dog_photos/czw3IOigNbV17Bb1NYnblhLAG265DltXoZY0fWzd.jpg', '2025-01-19 13:49:28', '2025-01-19 13:49:28'),
(18, 5, 'dog_photos/TXvATj7jNwtOgD7p7xd6ojSXo9YkEYTch5bVdPP9.jpg', '2025-01-19 13:49:28', '2025-01-19 13:49:28'),
(19, 5, 'dog_photos/o77N8tRMP53OvFdAP8kFwGoEbWgtn7ZQu73Yzg50.jpg', '2025-01-19 13:49:28', '2025-01-19 13:49:28'),
(20, 6, 'dog_photos/b4PAmzDCqClEcFWugdpOKz5mBNVAVgp8linysNO5.jpg', '2025-01-19 13:51:13', '2025-01-19 13:51:13'),
(21, 6, 'dog_photos/BYxWVb3G7LsJW1pcQVfHmSMTnYbKQz4oe4oTp60r.jpg', '2025-01-19 13:51:13', '2025-01-19 13:51:13'),
(22, 6, 'dog_photos/HAtjMTrIiicDfUUSnaRFeZCfGEvg7RfTngxqljkV.jpg', '2025-01-19 13:51:13', '2025-01-19 13:51:13'),
(23, 7, 'dog_photos/SHWyk8yaAjbRAWVAwFEGrBr5lbDGOFElbANJmsA6.jpg', '2025-01-19 13:51:59', '2025-01-19 13:51:59'),
(24, 7, 'dog_photos/hGXXoQQK21wlzMSCEnX4zvkf1UasDl6QswAviNfs.jpg', '2025-01-19 13:51:59', '2025-01-19 13:51:59'),
(25, 7, 'dog_photos/nTcBb4X2Z81B06qHujBREAjiLwMZy5TXJIvU3pOR.jpg', '2025-01-19 13:51:59', '2025-01-19 13:51:59'),
(26, 8, 'dog_photos/vA4lVXh1LdT853W3iuaMyfsMDg8nSbS5wwtGWvqJ.jpg', '2025-01-19 13:52:47', '2025-01-19 13:52:47'),
(27, 8, 'dog_photos/8AEbYXER1YkTAezfdQdDLe6ur5kf1s6iPvbTPsMa.jpg', '2025-01-19 13:52:47', '2025-01-19 13:52:47'),
(28, 8, 'dog_photos/Jici2uuzbtZfsikoEBWunIUiXQy4JjbySxgzyX9G.jpg', '2025-01-19 13:52:47', '2025-01-19 13:52:47'),
(29, 8, 'dog_photos/GWg4DQQTGxPOwLpjbapRNfefX6n466m3ym4sbZ95.jpg', '2025-01-19 13:52:47', '2025-01-19 13:52:47'),
(30, 9, 'dog_photos/8R0JlCgWn9nr83gInur2zqdvcOBp630tqrDQKHJ5.jpg', '2025-01-19 13:53:30', '2025-01-19 13:53:30'),
(31, 9, 'dog_photos/TWGm4oFpVlHHVRriHdvTWyWMhhHyBpYjgfLo2CrN.jpg', '2025-01-19 13:53:30', '2025-01-19 13:53:30'),
(32, 9, 'dog_photos/KMtuB8DIilfB00Sxty3AfJ1VwxbHYMFzToc9EFKx.jpg', '2025-01-19 13:53:30', '2025-01-19 13:53:30'),
(33, 9, 'dog_photos/aK73FX8rV4q0xX7vpB8TtVQPp6hU2LknZn71fHZ2.jpg', '2025-01-19 13:53:30', '2025-01-19 13:53:30'),
(34, 10, 'dog_photos/CQgpD4H5eje2vBi510EvZJbMi1ZEi8QWAhjWGvoE.jpg', '2025-01-19 13:54:16', '2025-01-19 13:54:16'),
(35, 10, 'dog_photos/XHQdKUo7qTYxgZbXVkiAySgUaQYwPhBGCsvqUlfd.jpg', '2025-01-19 13:54:16', '2025-01-19 13:54:16'),
(36, 10, 'dog_photos/KlhYL25MkqLOBwwRLPcFPpB1SBh0tA5qmxQZs7yc.jpg', '2025-01-19 13:54:16', '2025-01-19 13:54:16'),
(37, 11, 'dog_photos/WWVzkAltaN73a4H0lL5THrMZzNMTDtu1N93R18Sl.jpg', '2025-01-19 13:55:11', '2025-01-19 13:55:11'),
(38, 11, 'dog_photos/mzCw2kC5nLkhOWF70ju74lCR0jE9nGxejaTwjlC5.jpg', '2025-01-19 13:55:11', '2025-01-19 13:55:11'),
(39, 11, 'dog_photos/9jhw7tAqyEYuhO4FJr1F8BRU94nUuwwXxCcHBPzs.jpg', '2025-01-19 13:55:11', '2025-01-19 13:55:11'),
(40, 12, 'dog_photos/BfWDIase9aEdjWsUXM5v2Wn4Nv2lkpDS7EYxItta.jpg', '2025-01-19 13:56:25', '2025-01-19 13:56:25'),
(41, 12, 'dog_photos/KzDiPY62TpgAIYpfmbNTMeaapL3Zvx79m9BTC8QB.jpg', '2025-01-19 13:56:25', '2025-01-19 13:56:25'),
(42, 12, 'dog_photos/t2mFBC8J3uqU1Ws3lDnqcnMPhLh73RyzyLscvKFi.jpg', '2025-01-19 13:56:25', '2025-01-19 13:56:25'),
(43, 12, 'dog_photos/aXh8yy9QA6oY3pzDDKDX1OLiAvgn6m1ahtRS0PHz.jpg', '2025-01-19 13:56:25', '2025-01-19 13:56:25'),
(44, 13, 'dog_photos/3CbuKUDx2PjbDKTZAimDFx3N5b8YeRQYOpkMaWUn.jpg', '2025-01-19 13:57:30', '2025-01-19 13:57:30'),
(45, 13, 'dog_photos/a3jflrtjsPpN0CrhNl3h0swXrfk0CT8FZQ7TlESC.jpg', '2025-01-19 13:57:30', '2025-01-19 13:57:30'),
(46, 13, 'dog_photos/dNTVLtJnwWSjQ0PVa7NtrYzyb4SaSQjKyTkQjz0p.jpg', '2025-01-19 13:57:30', '2025-01-19 13:57:30'),
(47, 13, 'dog_photos/eFHj05TwGjc1sw5fbEwpdDm8dH0w0kzg18BUtKXc.jpg', '2025-01-19 13:57:30', '2025-01-19 13:57:30'),
(48, 14, 'dog_photos/blBO2Cjr59asaffsLnhbhkB3en69qNdOFUhlXPeL.jpg', '2025-01-19 13:58:22', '2025-01-19 13:58:22'),
(49, 14, 'dog_photos/ey9hbOJkqWycMz4zErW7jFsvsRO5urhlCcValez8.jpg', '2025-01-19 13:58:22', '2025-01-19 13:58:22'),
(50, 14, 'dog_photos/PaKKCXYMDO2CHb5sU3XTlYRLUm8dXX5SWTePdwio.jpg', '2025-01-19 13:58:22', '2025-01-19 13:58:22');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '0001_01_01_000000_create_users_table', 1),
(66, '0001_01_01_000001_create_cache_table', 1),
(67, '0001_01_01_000002_create_jobs_table', 1),
(68, '2025_01_10_190751_create_dogs_table', 1),
(69, '2025_01_11_184724_create_dog_photos_table', 1),
(71, '2025_01_19_142633_update_dogs_table', 2),
(72, '2025_01_19_153651_add_user_id_to_dogs_table', 2),
(73, '2025_01_19_161824_add_adopter_details_to_dogs_table', 3),
(74, '2025_01_19_181754_remove_unused_columns_from_dogs_table', 4),
(75, '2025_01_19_182222_add_surname_and_phone_to_users_table', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eK27j418V4gFVYyi8TvXu7SM4gdYRbGZPdIJJt1t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ09vbk80NkVJYWMwcXliMEFDN2ZPTmVVem1BT054VWNMMWxmeXRRdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1737485169),
('JlH1WXnrB1SrHYQBAMve56gpCVgTGPQvQR9AAABE', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic3Z4NFNscWJoVkdaWkZ4UmJ3WW9UeUN6aFVESmZMT0IzTkx6aUVDMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wc3kiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTczNzU0Mzk0MTt9fQ==', 1737543995);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(4, 'Agnieszka', 'Marzęda', '535987990', 'aga.marzeda@o2.pl', NULL, '$2y$12$cj3WIDb8TgN9nLm8Xh0dcuv7VfXKg1/8vcXg2aPfG/..d7V3K0rUK', NULL, '2025-01-20 13:52:42', '2025-01-20 13:52:42', 1),
(8, 'Konrad', 'Filipek', '510930214', 'k4sto@o2.pl', NULL, '$2y$12$zkglJkNzWMW1Gs/79AIDuOIYLmNtdnQzPrBjyCgKnFYdtHA2ymHpW', NULL, '2025-01-20 21:30:02', '2025-01-20 22:36:31', 1),
(12, 'Lonely', 'L', '3', 'dsa@fs.pl', NULL, '$2y$12$H07RelTKlggM8.D28EB9g.L.rHkY7fXa9VUgz4ISSRBvBPcN62H/2', NULL, '2025-01-21 17:27:46', '2025-01-21 17:27:46', 0),
(13, 'Aga', 'Ma', '123456789', 'fgcb@jng', NULL, '$2y$12$r9H1ajO8OqiZK6ZktyJSXu7ST4xuzeWGUjMVhkmVmuEchedZMKgaW', NULL, '2025-01-22 10:03:01', '2025-01-22 10:04:34', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeksy dla tabeli `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dogs_slug_unique` (`slug`),
  ADD KEY `dogs_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `dog_photos`
--
ALTER TABLE `dog_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dog_photos_dog_id_foreign` (`dog_id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeksy dla tabeli `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dog_photos`
--
ALTER TABLE `dog_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dogs`
--
ALTER TABLE `dogs`
  ADD CONSTRAINT `dogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `dog_photos`
--
ALTER TABLE `dog_photos`
  ADD CONSTRAINT `dog_photos_dog_id_foreign` FOREIGN KEY (`dog_id`) REFERENCES `dogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
