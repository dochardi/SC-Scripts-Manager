CREATE TABLE `sc-tafel` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `vww_url` varchar(255) NOT NULL,
  `licence` varchar(225) NOT NULL,
  `Tur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `script_licencen` (
  `config_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `bg_bild` varchar(255) NOT NULL,
  `trans` varchar(255) NOT NULL DEFAULT 'Nein',
  `config_text` text NOT NULL,
  `config_option_2` varchar(255) NOT NULL,
  `config_option_3` varchar(255) NOT NULL,
  `config_option_4` varchar(255) NOT NULL,
  `config_option_5` varchar(255) NOT NULL,
  `config_option_6` varchar(255) NOT NULL,
  `config_option_7` varchar(255) NOT NULL,
  `config_option_8` varchar(255) NOT NULL,
  `config_option_9` varchar(255) NOT NULL,
  `config_option_10` varchar(255) NOT NULL,
  `config_option_11` varchar(255) NOT NULL,
  `config_option_12` varchar(255) NOT NULL,
  `config_option_13` longtext NOT NULL,
  `config_status` varchar(255) NOT NULL,
  `preis` varchar(5) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `script_licencen` (`config_id`, `name`, `club_name`, `bg_bild`, `trans`, `config_text`, `config_option_2`, `config_option_3`, `config_option_4`, `config_option_5`, `config_option_6`, `config_option_7`, `config_option_8`, `config_option_9`, `config_option_10`, `config_option_11`, `config_option_12`, `config_option_13`, `config_status`, `preis`) VALUES
(0000018935, '', 'Promo Team', 'https://www.yourblogs.de/dochardi/wp-content/uploads/sites/6/2022/11/cropped-dc-Twitch-Header.png', 'Ja', '', 'ja', '', '', '', '', '', '', '', '', '', '', '', 'Active', '0.00'),
(0000018936, '', 'DEMO EVENT', '', 'Ja', 'IN DEMO ROOM', '', '', '', '', '', '', '', '', '', '', '', '[{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"}]', 'Active', '0.00'),
(0000018940, 'Demo - LED', '', '', 'Ja', 'Willkommen [username] in Secret City ', '', '', '', '', '', '', '', '', '', '', '', '', 'Active', '0.00'),
(0000018950, '', '', 'https://www.yourblogs.de/dochardi/wp-content/uploads/sites/6/2022/11/cropped-dc-Twitch-Header.png', 'Ja', 'MeBaWo', 'ja', 'TÃ¼rnummer', 'Aussteller', 'VWW', '', '', '', '', '', '', '', '', 'Active', '0.00'),
(0000018956, '', 'apollo.rserve.de', '', 'Nein', '8004', 'ja', '', '', '', 'stream', '', '', '', '', 'sonicpanel', 'Ja', '', 'Active', '0.00'),
(0000018958, '', 'DEMO EVENT', '', 'Nein', 'IN DEMO ROOM2', '', '', '', '', '', '', '', '', '', '', '', '[{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"},{\"id\":\"95687\",\"username\":\"Doc_Hardi_DH\"}]', 'Active', '0.00');


CREATE TABLE `script_secretcity_user` (
  `id` int NOT NULL,
  `mid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `geschlecht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `script_secretcity_user` (`id`, `mid`, `username`, `geschlecht`) VALUES (2, '95687', 'Doc_Hardi_DH', '');


CREATE TABLE `sc_center` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `vww_url` varchar(255) NOT NULL,
  `licence` int NOT NULL,
  `Tur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `sc_intern_werbe_taffel` (
  `id` int NOT NULL,
  `Licence_id` int NOT NULL,
  `imgbild` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `spile_gewinner_taffel` (
  `id` int NOT NULL,
  `Licence_id` int NOT NULL,
  `gewinner_id` int NOT NULL,
  `gewonnern` varchar(255) NOT NULL,
  `spiel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `spile_tressor_taffel` (
  `id` int NOT NULL,
  `Licence_id` int NOT NULL,
  `gewinner_id` int NOT NULL,
  `gewonnern` varchar(255) NOT NULL,
  `code_tressor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `admin_user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `hp_settings`
--

CREATE TABLE `hp_settings` (
  `id` int NOT NULL,
  `data` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `hp_settings`
--

INSERT INTO `hp_settings` (`id`, `data`, `value`) VALUES
(1, 'version', 'v1.0.3');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `hp_settings`
--
ALTER TABLE `hp_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `hp_settings`
--
ALTER TABLE `hp_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


ALTER TABLE `sc-tafel` ADD PRIMARY KEY (`id`);
ALTER TABLE `script_licencen` ADD PRIMARY KEY (`config_id`);
ALTER TABLE `script_secretcity_user`ADD PRIMARY KEY (`id`);
ALTER TABLE `sc_center`ADD PRIMARY KEY (`id`);
ALTER TABLE `sc_intern_werbe_taffel`ADD PRIMARY KEY (`id`);
ALTER TABLE `spile_gewinner_taffel`ADD PRIMARY KEY (`id`);
ALTER TABLE `spile_tressor_taffel`ADD PRIMARY KEY (`id`);
ALTER TABLE `sc-tafel`MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `script_licencen`MODIFY `config_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18959;
ALTER TABLE `script_secretcity_user`MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `sc_center`MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `sc_intern_werbe_taffel` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
ALTER TABLE `spile_gewinner_taffel` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `spile_tressor_taffel`MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;
