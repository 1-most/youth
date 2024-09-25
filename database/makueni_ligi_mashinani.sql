-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 08:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makueni_ligi_mashinani`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlogs`
--

CREATE TABLE `auditlogs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_coaches`
--

CREATE TABLE `ligi_coaches` (
  `coach_id` int(11) NOT NULL,
  `coach_name` varchar(100) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_fixtures`
--

CREATE TABLE `ligi_fixtures` (
  `fixture_id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `fixture_date` datetime NOT NULL,
  `fixture_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_matches`
--

CREATE TABLE `ligi_matches` (
  `match_id` int(11) NOT NULL,
  `home_team_id` int(11) NOT NULL,
  `away_team_id` int(11) NOT NULL,
  `match_date` datetime NOT NULL,
  `match_location` varchar(100) NOT NULL,
  `referee_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `match_status` varchar(50) NOT NULL DEFAULT 'Scheduled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_match_results`
--

CREATE TABLE `ligi_match_results` (
  `match_result_id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `home_team_score` int(11) DEFAULT NULL,
  `away_team_score` int(11) DEFAULT NULL,
  `result_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_players`
--

CREATE TABLE `ligi_players` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `player_team_id` int(11) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `player_position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_registrations`
--

CREATE TABLE `ligi_registrations` (
  `registration_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_roles`
--

CREATE TABLE `ligi_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_sports`
--

CREATE TABLE `ligi_sports` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_table_standings`
--

CREATE TABLE `ligi_table_standings` (
  `standing_id` int(11) NOT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `matches_played` int(11) DEFAULT 0,
  `wins` int(11) DEFAULT 0,
  `draws` int(11) DEFAULT 0,
  `losses` int(11) DEFAULT 0,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_teams`
--

CREATE TABLE `ligi_teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `team_manager_id` int(11) DEFAULT NULL,
  `team_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ligi_users`
--

CREATE TABLE `ligi_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone_number` varchar(20) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `user_access_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ligi_users`
--

INSERT INTO `ligi_users` (`user_id`, `user_name`, `user_email`, `user_phone_number`, `user_address`, `user_password`, `password_reset_token`, `user_access_level`) VALUES
(1, '', 'charline.nduva@makueni.go.ke', NULL, NULL, '71fbbea0206b21ef688d33f0160602628dab9c7d', NULL, 'System Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice_user_id` int(11) NOT NULL,
  `notice_details` text NOT NULL,
  `notice_module` varchar(255) NOT NULL,
  `notice_date_posted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_text` text DEFAULT NULL,
  `notification_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Active','Completed','Inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_name` varchar(255) DEFAULT NULL,
  `generated_by` int(11) DEFAULT NULL,
  `generated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `report_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholderprofile`
--

CREATE TABLE `stakeholderprofile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `services_offered` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcounties`
--

CREATE TABLE `subcounties` (
  `subcounty_id` int(11) NOT NULL,
  `subcounty_name` varchar(100) NOT NULL,
  `county_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcounties`
--

INSERT INTO `subcounties` (`subcounty_id`, `subcounty_name`, `county_name`) VALUES
(1, 'Makueni', NULL),
(2, 'Mbooni', NULL),
(3, 'Kilome', NULL),
(4, 'Kaiti', NULL),
(5, 'Kibwezi West', NULL),
(6, 'Kibwezi East', NULL),
(7, 'Headquarters', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `ward_id` int(11) NOT NULL,
  `ward_name` varchar(100) NOT NULL,
  `subcounty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`ward_id`, `ward_name`, `subcounty_id`) VALUES
(2, 'Wote/Nziu', 1),
(3, 'Nzaui/Kilili/Kalamba', 1),
(4, 'Mbitini', 1),
(5, 'Kikumini/Muvau', 1),
(6, 'Kathonzweni', 1),
(7, 'Mavindini', 1),
(8, 'Kitise/Kithuki', 1),
(9, 'Mbooni', 2),
(10, 'Kithungo/Kitundu', 2),
(11, 'Tulimani', 2),
(12, 'Kisau/Kiteta', 2),
(13, 'Kako/Waia', 2),
(14, 'Kalawa', 2),
(15, 'Kiima Kiu/Kalanzoni', 3),
(16, 'Mukaa', 3),
(17, 'Kasikeu', 3),
(18, 'Kee', 4),
(19, 'Kilungu', 4),
(20, 'Ilima', 4),
(21, 'Ukia', 4),
(22, 'Makindu', 5),
(23, 'Kikumbulyu North', 5),
(24, 'Kikumbulyu South', 5),
(25, 'Nguumo', 5),
(26, 'Emali/Mulala', 5),
(27, 'Masongaleni', 6),
(28, 'Mtito Andei', 6),
(29, 'Thange', 6),
(30, 'Ivingoni/Nzambani', 6),
(31, 'Nguu/Masumba', 5),
(33, 'All Wards', 1);

-- --------------------------------------------------------

--
-- Table structure for table `youthprograms`
--

CREATE TABLE `youthprograms` (
  `youth_program_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `participation_date` date DEFAULT NULL,
  `outcome` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `youth_profile`
--

CREATE TABLE `youth_profile` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `citizenship` varchar(100) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `disability_status` tinyint(1) DEFAULT 0,
  `disability_explanation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `youth_profile`
--

INSERT INTO `youth_profile` (`profile_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `location`, `citizenship`, `occupation`, `sector`, `education_level`, `marital_status`, `disability_status`, `disability_explanation`) VALUES
(3, 'charline ', 'Nduva', '2001-03-20', 'Female', 'Wote', 'Kenyan', 'Student', 'tftfyt', 'Degree', 'Married', 0, NULL),
(4, 'Benjamin', 'Wambua', '2024-09-06', 'Male', 'wote', 'Kenyan', 'software engineer', 'ict', 'phd', 'Widowed', 0, NULL),
(6, 'Benjamin', 'Wambua', '2024-09-03', 'Male', 'jhh', 'ewwd', 'df', 'dcxe', 'dcrfe', 'Widowed', 1, NULL),
(7, 'charline', 'muli', '2024-09-06', 'Female', 'wote', 'kenyan', 'farmer', 'ukulima', 'PHD', 'Single', 1, 'I FELL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlogs`
--
ALTER TABLE `auditlogs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ligi_coaches`
--
ALTER TABLE `ligi_coaches`
  ADD PRIMARY KEY (`coach_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `sport_id` (`sport_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ligi_fixtures`
--
ALTER TABLE `ligi_fixtures`
  ADD PRIMARY KEY (`fixture_id`),
  ADD KEY `match_id` (`match_id`);

--
-- Indexes for table `ligi_matches`
--
ALTER TABLE `ligi_matches`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `home_team_id` (`home_team_id`),
  ADD KEY `away_team_id` (`away_team_id`),
  ADD KEY `referee_id` (`referee_id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Indexes for table `ligi_match_results`
--
ALTER TABLE `ligi_match_results`
  ADD PRIMARY KEY (`match_result_id`),
  ADD KEY `match_id` (`match_id`);

--
-- Indexes for table `ligi_players`
--
ALTER TABLE `ligi_players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `player_team_id` (`player_team_id`),
  ADD KEY `sport_id` (`sport_id`);

--
-- Indexes for table `ligi_registrations`
--
ALTER TABLE `ligi_registrations`
  ADD PRIMARY KEY (`registration_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `sport_id` (`sport_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `ligi_roles`
--
ALTER TABLE `ligi_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `ligi_sports`
--
ALTER TABLE `ligi_sports`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `ligi_table_standings`
--
ALTER TABLE `ligi_table_standings`
  ADD PRIMARY KEY (`standing_id`),
  ADD KEY `sport_id` (`sport_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `ligi_teams`
--
ALTER TABLE `ligi_teams`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `sport_id` (`sport_id`),
  ADD KEY `team_manager_id` (`team_manager_id`);

--
-- Indexes for table `ligi_users`
--
ALTER TABLE `ligi_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `notice_user_id` (`notice_user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `generated_by` (`generated_by`);

--
-- Indexes for table `stakeholderprofile`
--
ALTER TABLE `stakeholderprofile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subcounties`
--
ALTER TABLE `subcounties`
  ADD PRIMARY KEY (`subcounty_id`),
  ADD UNIQUE KEY `subcounty_name` (`subcounty_name`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`ward_id`),
  ADD UNIQUE KEY `ward_name` (`ward_name`),
  ADD KEY `subcounty_id` (`subcounty_id`);

--
-- Indexes for table `youthprograms`
--
ALTER TABLE `youthprograms`
  ADD PRIMARY KEY (`youth_program_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `youth_profile`
--
ALTER TABLE `youth_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditlogs`
--
ALTER TABLE `auditlogs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_coaches`
--
ALTER TABLE `ligi_coaches`
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_fixtures`
--
ALTER TABLE `ligi_fixtures`
  MODIFY `fixture_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_matches`
--
ALTER TABLE `ligi_matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_match_results`
--
ALTER TABLE `ligi_match_results`
  MODIFY `match_result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_players`
--
ALTER TABLE `ligi_players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_registrations`
--
ALTER TABLE `ligi_registrations`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_roles`
--
ALTER TABLE `ligi_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_sports`
--
ALTER TABLE `ligi_sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_table_standings`
--
ALTER TABLE `ligi_table_standings`
  MODIFY `standing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_teams`
--
ALTER TABLE `ligi_teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ligi_users`
--
ALTER TABLE `ligi_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholderprofile`
--
ALTER TABLE `stakeholderprofile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcounties`
--
ALTER TABLE `subcounties`
  MODIFY `subcounty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `youthprograms`
--
ALTER TABLE `youthprograms`
  MODIFY `youth_program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youth_profile`
--
ALTER TABLE `youth_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auditlogs`
--
ALTER TABLE `auditlogs`
  ADD CONSTRAINT `auditlogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `ligi_coaches`
--
ALTER TABLE `ligi_coaches`
  ADD CONSTRAINT `ligi_coaches_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `ligi_teams` (`team_id`),
  ADD CONSTRAINT `ligi_coaches_ibfk_2` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`),
  ADD CONSTRAINT `ligi_coaches_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`);

--
-- Constraints for table `ligi_fixtures`
--
ALTER TABLE `ligi_fixtures`
  ADD CONSTRAINT `ligi_fixtures_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `ligi_matches` (`match_id`);

--
-- Constraints for table `ligi_matches`
--
ALTER TABLE `ligi_matches`
  ADD CONSTRAINT `ligi_matches_ibfk_1` FOREIGN KEY (`home_team_id`) REFERENCES `ligi_teams` (`team_id`),
  ADD CONSTRAINT `ligi_matches_ibfk_2` FOREIGN KEY (`away_team_id`) REFERENCES `ligi_teams` (`team_id`),
  ADD CONSTRAINT `ligi_matches_ibfk_3` FOREIGN KEY (`referee_id`) REFERENCES `ligi_users` (`user_id`),
  ADD CONSTRAINT `ligi_matches_ibfk_4` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`);

--
-- Constraints for table `ligi_match_results`
--
ALTER TABLE `ligi_match_results`
  ADD CONSTRAINT `ligi_match_results_ibfk_1` FOREIGN KEY (`match_id`) REFERENCES `ligi_matches` (`match_id`);

--
-- Constraints for table `ligi_players`
--
ALTER TABLE `ligi_players`
  ADD CONSTRAINT `ligi_players_ibfk_1` FOREIGN KEY (`player_team_id`) REFERENCES `ligi_teams` (`team_id`),
  ADD CONSTRAINT `ligi_players_ibfk_2` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`);

--
-- Constraints for table `ligi_registrations`
--
ALTER TABLE `ligi_registrations`
  ADD CONSTRAINT `ligi_registrations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`),
  ADD CONSTRAINT `ligi_registrations_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `ligi_teams` (`team_id`),
  ADD CONSTRAINT `ligi_registrations_ibfk_3` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`),
  ADD CONSTRAINT `ligi_registrations_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `ligi_roles` (`role_id`);

--
-- Constraints for table `ligi_table_standings`
--
ALTER TABLE `ligi_table_standings`
  ADD CONSTRAINT `ligi_table_standings_ibfk_1` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`),
  ADD CONSTRAINT `ligi_table_standings_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `ligi_teams` (`team_id`);

--
-- Constraints for table `ligi_teams`
--
ALTER TABLE `ligi_teams`
  ADD CONSTRAINT `ligi_teams_ibfk_1` FOREIGN KEY (`sport_id`) REFERENCES `ligi_sports` (`sport_id`),
  ADD CONSTRAINT `ligi_teams_ibfk_2` FOREIGN KEY (`team_manager_id`) REFERENCES `ligi_users` (`user_id`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_ibfk_1` FOREIGN KEY (`notice_user_id`) REFERENCES `ligi_users` (`user_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`generated_by`) REFERENCES `ligi_users` (`user_id`);

--
-- Constraints for table `stakeholderprofile`
--
ALTER TABLE `stakeholderprofile`
  ADD CONSTRAINT `stakeholderprofile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `wards`
--
ALTER TABLE `wards`
  ADD CONSTRAINT `wards_ibfk_1` FOREIGN KEY (`subcounty_id`) REFERENCES `subcounties` (`subcounty_id`) ON DELETE CASCADE;

--
-- Constraints for table `youthprograms`
--
ALTER TABLE `youthprograms`
  ADD CONSTRAINT `youthprograms_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `ligi_users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `youthprograms_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
