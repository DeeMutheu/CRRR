-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2024 at 05:53 AM
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

--
-- Dumping data for table `emergency_interactions`
--

INSERT INTO `emergency_interactions` (`emergency_interaction_id`, `emergency_interaction_incident_id`, `emergency_interaction_service_id`, `emergency_interaction_details`) VALUES
(1, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 3, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(200) NOT NULL,
  `location_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`) VALUES
(2, 'Kimathi Way'),
(3, 'Kenyatta Road'),
(4, 'Naivas Gakere Street'),
(5, 'Chania Bridge'),
(6, 'Bantu Africa Resort'),
(7, 'Giakanga Shopping Center '),
(8, 'Dedan Kimathi University'),
(10, 'Manjengo'),
(11, 'Ring Road'),
(12, 'King\'og\'o'),
(13, 'Temple Road');

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

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_email`, `login_password`, `login_rank`) VALUES
(1, 'martdevelopers254@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Admin'),
(2, 'info@redcross.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Response Service'),
(3, 'info@aar.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Response Service'),
(4, 'stjohns@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Response Service'),
(5, 'james@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Road User'),
(6, 'info@mart.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Road User');

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

--
-- Dumping data for table `response_services`
--

INSERT INTO `response_services` (`response_service_id`, `response_service_login_id`, `response_service_name`, `response_service_contact_person_name`, `response_service_contact_person_phone`, `response_service_location`, `response_service_description`) VALUES
(1, 2, 'Red Cross', 'John Doe', '0712679084', 'Nairobi Kenya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 3, 'AAR', 'Jane Doe', '076574392344', 'Machakos', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 4, 'St Johns Ambulance', 'Joephas Doe', '0755463182', 'Nairobi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `road_incidents`
--

CREATE TABLE `road_incidents` (
  `road_incident_id` int(200) NOT NULL,
  `road_incident_user_id` int(200) NOT NULL,
  `road_incident_type` varchar(200) NOT NULL,
  `road_incident_location_id` varchar(200) DEFAULT NULL,
  `road_incident_description` longtext NOT NULL,
  `road_incident_date_reported` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `road_incident_response_service_id` int(200) DEFAULT NULL,
  `incident_lat` varchar(200) DEFAULT NULL,
  `incident_lng` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `road_incidents`
--

INSERT INTO `road_incidents` (`road_incident_id`, `road_incident_user_id`, `road_incident_type`, `road_incident_location_id`, `road_incident_description`, `road_incident_date_reported`, `road_incident_response_service_id`, `incident_lat`, `incident_lng`) VALUES
(1, 1, 'Road Accident', '4', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-01-15 06:20:54.761957', 1, NULL, NULL),
(2, 1, 'Fire Accident', '8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-01-15 06:54:46.428597', 1, NULL, NULL),
(3, 2, 'Road Accident', '4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-01-15 10:16:38.387018', 1, NULL, NULL),
(5, 3, 'Fire Accident', '0', 'Fire accident', '2024-02-16 09:54:32.094396', NULL, '0.431', '36.959'),
(6, 3, 'Medical Emergency', '0', 'medical emergency', '2024-02-16 09:55:17.441776', NULL, '0.09042785540472717', '36.882095703124996');

-- --------------------------------------------------------

--
-- Table structure for table `road_users`
--

CREATE TABLE `road_users` (
  `user_id` int(200) NOT NULL,
  `user_login_id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_contact_phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `road_users`
--

INSERT INTO `road_users` (`user_id`, `user_login_id`, `user_name`, `user_contact_phone`) VALUES
(1, 1, 'Martin Mbithi', '0740847563'),
(2, 5, 'James Doe', '0865342356'),
(3, 6, 'Martin Mbithi', '0745896523');

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
  MODIFY `emergency_interaction_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `response_services`
--
ALTER TABLE `response_services`
  MODIFY `response_service_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `road_incidents`
--
ALTER TABLE `road_incidents`
  MODIFY `road_incident_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `road_users`
--
ALTER TABLE `road_users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
