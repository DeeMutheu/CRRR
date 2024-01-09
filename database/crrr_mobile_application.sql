-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2024 at 05:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crrr_mobile_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency_interactions`
--

CREATE TABLE `emergency_interactions` (
  `emergency_interaction_id` int(200) NOT NULL,
  `emergency_interaction_incident_id` int(200) NOT NULL,
  `emergency_interaction_service_id` int(200) NOT NULL,
  `emergency_interaction_details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(200) NOT NULL,
  `location_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(200) NOT NULL,
  `login_email` varchar(200) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `login_rank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `response_services`
--

CREATE TABLE `response_services` (
  `response_service_id` int(200) NOT NULL,
  `response_service_login_id` int(200) NOT NULL,
  `response_service_name` varchar(200) NOT NULL,
  `response_service_contact_person_name` varchar(200) NOT NULL,
  `response_service_contact_person_phone` varchar(200) NOT NULL,
  `response_service_location` longtext NOT NULL,
  `response_service_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `road_incidents`
--

CREATE TABLE `road_incidents` (
  `road_incident_id` int(200) NOT NULL,
  `road_incident_user_id` int(200) NOT NULL,
  `road_incident_type` varchar(200) NOT NULL,
  `road_incident_location_id` int(200) NOT NULL,
  `road_incident_description` longtext NOT NULL,
  `road_incident_date_reported` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `road_incident_response_service_id` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `road_users`
--

CREATE TABLE `road_users` (
  `user_id` int(200) NOT NULL,
  `user_login_id` int(200) NOT NULL,
  `user_fname` varchar(200) NOT NULL,
  `user_lname` varchar(200) NOT NULL,
  `user_contact_phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_interactions`
--
ALTER TABLE `emergency_interactions`
  ADD PRIMARY KEY (`emergency_interaction_id`),
  ADD KEY `IncidentID` (`emergency_interaction_incident_id`),
  ADD KEY `ServiceID` (`emergency_interaction_service_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `response_services`
--
ALTER TABLE `response_services`
  ADD PRIMARY KEY (`response_service_id`),
  ADD KEY `ResponseServiceLoginID` (`response_service_login_id`);

--
-- Indexes for table `road_incidents`
--
ALTER TABLE `road_incidents`
  ADD PRIMARY KEY (`road_incident_id`),
  ADD KEY `UserID` (`road_incident_user_id`),
  ADD KEY `LocationID` (`road_incident_location_id`);

--
-- Indexes for table `road_users`
--
ALTER TABLE `road_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `UserLoginID` (`user_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_interactions`
--
ALTER TABLE `emergency_interactions`
  MODIFY `emergency_interaction_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `response_services`
--
ALTER TABLE `response_services`
  MODIFY `response_service_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `road_incidents`
--
ALTER TABLE `road_incidents`
  MODIFY `road_incident_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `road_users`
--
ALTER TABLE `road_users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_interactions`
--
ALTER TABLE `emergency_interactions`
  ADD CONSTRAINT `IncidentID` FOREIGN KEY (`emergency_interaction_incident_id`) REFERENCES `road_incidents` (`road_incident_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ServiceID` FOREIGN KEY (`emergency_interaction_service_id`) REFERENCES `response_services` (`response_service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `response_services`
--
ALTER TABLE `response_services`
  ADD CONSTRAINT `ResponseServiceLoginID` FOREIGN KEY (`response_service_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `road_incidents`
--
ALTER TABLE `road_incidents`
  ADD CONSTRAINT `LocationID` FOREIGN KEY (`road_incident_location_id`) REFERENCES `locations` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UserID` FOREIGN KEY (`road_incident_user_id`) REFERENCES `road_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `road_users`
--
ALTER TABLE `road_users`
  ADD CONSTRAINT `UserLoginID` FOREIGN KEY (`user_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
