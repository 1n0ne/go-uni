
-- Database: `bus_db`
-- Table structure for table `bus_driver`

CREATE TABLE bus_driver(
  BUSID INT(100) PRIMARY KEY AUTO_INCREMENT,
  dri_name VARCHAR(200) NOT NULL,
  mobile INT(15) NOT NULL,
  bus_type VARCHAR(100) DEFAULT NULL,
  price INT(4) NOT NULL,
  neigh_id INT(100)
) ;

-- Table structure for table `neighborhood`


CREATE TABLE neighborhood (
  ID INT(100) PRIMARY KEY AUTO_INCREMENT,
  nei_NAME VARCHAR(500) NOT NULL
);

ALTER TABLE bus_driver ADD FOREIGN KEY(neigh_id) REFERENCES neighborhood(ID);
  


--
-- Dumping data for table `neighborhood`
--

INSERT INTO `neighborhood` (`ID`, `nei_NAME`) VALUES
(1, 'الحلقة الغربية - الحلقة الشرقية - القيم'),
(3, 'الحلقة الغربية - الحلقة الشرقية - مخطط القاضي'),
(4, 'وادي النمل - المنتزة'),
(5, 'العرفاء'),
(6, 'ريحه - الواصليه'),
(7, 'السحيلي'),
(8, 'السر - الزوران'),
(9, 'معشي'),
(10, 'الرميدة - الزوران'),
(11, 'البلد'),
(12, 'الواسط - السيل الصغير'),
(13, 'ريحه - رحاب'),
(14, 'قيا');



