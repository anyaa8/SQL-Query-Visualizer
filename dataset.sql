-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 04:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dname` varchar(255) NOT NULL,
  `Dnumber` int(11) NOT NULL,
  `Mgr_ssn` int(11) NOT NULL,
  `Mgr_start_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dname`, `Dnumber`, `Mgr_ssn`, `Mgr_start_date`) VALUES
('Research', 5, 333445555, '1988-05-22'),
('Administration', 4, 987654321, '1995-01-01'),
('Headquarters', 1, 888665555, '1981-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `Essn` int(11) NOT NULL,
  `Dependent_name` varchar(255) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Bdate` date NOT NULL,
  `Relationship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`Essn`, `Dependent_name`, `Sex`, `Bdate`, `Relationship`) VALUES
(333445555, 'Alice', 'F', '1986-04-05', 'Daughter'),
(333445555, 'Theodore', 'M', '1983-10-25', 'Son'),
(333445555, 'Joy', 'F', '1958-05-03', 'Spouse'),
(987654321, 'Abner', 'M', '1942-02-28', 'Spouse'),
(123456789, 'Michael', 'M', '1988-01-04', 'Son'),
(123456789, 'Alice', 'F', '1988-12-30', 'Daughter'),
(123456789, 'Elizabeth', 'F', '1967-05-05', 'Spouse');

-- --------------------------------------------------------

--
-- Table structure for table `dept_locations`
--

CREATE TABLE `dept_locations` (
  `Dnumber` int(11) NOT NULL,
  `Dlocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_locations`
--

INSERT INTO `dept_locations` (`Dnumber`, `Dlocation`) VALUES
(1, 'Houston'),
(4, 'Stafford'),
(5, 'Bellaire'),
(5, 'Sugarland'),
(5, 'Houston');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Fname` varchar(255) NOT NULL,
  `Minit` char(1) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Ssn` int(11) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Super_ssn` int(11) NOT NULL,
  `Dno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Fname`, `Minit`, `Lname`, `Ssn`, `Bdate`, `Address`, `Sex`, `Salary`, `Super_ssn`, `Dno`) VALUES
('John', 'B', 'Smith', 123456789, '1965-01-09', '731 Fondren, Houston, TX', 'M', 30000, 333445555, 1),
('Franklin', 'T', 'Wong', 333445555, '1955-12-08', '638 Voss, Houston, TX', 'M', 40000, 888665555, 5),
('Alicia', 'J', 'Zelaya', 999887777, '1968-01-19', '3321 Castle, Spring, TX', 'F', 25000, 987654321, 4),
('Jennifer', 'S', 'Wallace', 987654321, '1941-06-20', '291 Berry, Bellaire, TX', 'F', 43000, 888665555, 4),
('Ramesh', 'K', 'Narayan', 666884444, '1962-09-15', '975 Fire Oak, Humble, TX', 'M', 38000, 333445555, 5),
('Joyce', 'A', 'English', 453453453, '1972-07-31', '5631 Rice, Houston, TX', 'F', 25000, 333445555, 5),
('Ahmad', 'V', 'Jabbar', 987987987, '1969-03-29', '980 Dallas, Houston, TX', 'M', 25000, 987654321, 4),
('James', 'E', 'Borg', 888665555, '1937-11-10', '450 Stone, Houston, TX', 'M', 55000, 0, 1);

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `deleteemp` BEFORE DELETE ON `employee` FOR EACH ROW Insert into logsemp VALUES(OLD.Fname	
,OLD.Minit	
,OLD.Lname	
,OLD.Ssn	
,OLD.Bdate	
,OLD.Address	
,OLD.Sex	
,OLD.Salary	
,OLD.Super_ssn	
,OLD.Dno
,'DELETED'                 
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertemp` AFTER INSERT ON `employee` FOR EACH ROW Insert into logsemp VALUES(NEW.Fname	
,NEW.Minit	
,NEW.Lname	
,NEW.Ssn	
,NEW.Bdate	
,NEW.Address	
,NEW.Sex	
,NEW.Salary	
,NEW.Super_ssn	
,NEW.Dno
,'INSERTED'                 
)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateemp` BEFORE UPDATE ON `employee` FOR EACH ROW Insert into logsemp VALUES(OLD.Fname	
,OLD.Minit	
,OLD.Lname	
,OLD.Ssn	
,OLD.Bdate	
,OLD.Address	
,OLD.Sex	
,OLD.Salary	
,OLD.Super_ssn	
,OLD.Dno
,'Before Update'                 
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logsemp`
--

CREATE TABLE `logsemp` (
  `Fname` varchar(255) NOT NULL,
  `Minit` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Ssn` int(11) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Super_ssn` int(11) NOT NULL,
  `Dno` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Pname` varchar(255) NOT NULL,
  `Pnumber` int(11) NOT NULL,
  `Plocation` varchar(255) NOT NULL,
  `Dnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Pname`, `Pnumber`, `Plocation`, `Dnum`) VALUES
('ProductX', 1, 'Bellaire', 5),
('ProductY', 2, 'Sugarland', 5),
('ProductZ', 3, 'Houston', 5),
('Computerization', 10, 'Stafford', 4),
('Reorganization', 20, 'Houston', 1),
('Newbenefits', 30, 'Stafford', 4);

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE `works_on` (
  `Essn` int(11) NOT NULL,
  `Pno` int(11) NOT NULL,
  `Hours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_on`
--

INSERT INTO `works_on` (`Essn`, `Pno`, `Hours`) VALUES
(123456789, 1, 32.5),
(123456789, 2, 7.5),
(666884444, 3, 40),
(453453453, 1, 20),
(453453453, 2, 20),
(333445555, 2, 10),
(333445555, 3, 10),
(333445555, 10, 10),
(333445555, 20, 10),
(999887777, 30, 30),
(999887777, 10, 10),
(987987987, 10, 35),
(987987987, 30, 5),
(666884444, 30, 20),
(666884444, 20, 15),
(888665555, 20, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
