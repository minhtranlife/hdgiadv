-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 10:54 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hdgiadv_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `hddvlt`
--

CREATE TABLE `hddvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thaotac` text COLLATE utf8_unicode_ci NOT NULL,
  `hienthi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `plcn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hddvlt`
--

INSERT INTO `hddvlt` (`id`, `mota`, `thaotac`, `hienthi`, `stt`, `plcn`, `created_at`, `updated_at`) VALUES
(1, 'Màn hình tổng quan', '- Màn hình tổng quan của chương trình', '1.PNG', 1, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Xét duyệt hồ sơ kê khai giá', '- Đưa chuột vào menu chính của chương trình và chọn Dịch vụ lưu trú - Xét duyệt kê khai giá dịch vụ lưu trú\n                                                - Các thông tin hiển thị trên màn hình chỉ hiện thị khi hồ sơ kê khai có trạng thái là Duyệt và Chờ Duyệt\n                                                - Dưới trạng thái mỗi hồ sơ xét duyệt đều có xác định thời gian chuyển lên Sở tài chính\n                                                - Các hồ sơ đã được duyệt thì dưới thông tin về số công văn sẽ có thêm thông tin số hồ sơ nhận và ngày nhận hồ sơ', '2.PNG', 2, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Trả lại hồ sơ kê khai giá dịch vụ', '-Tìm kiếm hồ sơ không đủ điều kiện dể duyệt ta có thể trả lại hồ sơ cho cơ sở kinh doanh bổ xung thêm', '3.PNG', 3, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Nhập lý do trả lại hồ sơ kê khai giá dịch vụ', '- Nhập rõ lý do trả lại cho cơ sở kinh doanh sau đó ta chọn Đồng ý để xác nhận chuyển trả lại hồ sơ cho cơ sở kinh doanh', '4.PNG', 4, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Xem chi tiết hồ sơ', '', '5.PNG', 5, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Kê khai giá dịch vụ lưu trú', '- Hiển thị kê khai giá dịch vụ lưu trú\r\n- Ta có thể ấn Ctr + P để in kê khai giá dịch vụ', '6.PNG', 6, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Xét duyệt hồ sơ kê khai giá dịch vụ lưu trú', '- Chọn hồ sơ kê khai đủ điều kiện và chọn Duyệt trên phần thao tác của hồ sơ lúc này trạng thái hồ sơ sẽ chuyển thành Duyệt\n- Sau khi hồ sơ được duyệt xem chi tiết của hồ sơ sẽ hiện thị thông tin số hồ sơ nhận và thời gian nhận hồ sơ\n- Đồng thời hồ sơ sẽ được chuyển sang công bố giá và hiển thị lên trang công bố giá của Sở', '7.PNG', 7, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Quy trình Kê khai giá dịch vụ lưu trú', 'B1: Cơ sở Kinh doanh sẽ nhập hồ sơ kê khai giá\r\nB2:Cơ sở Kinh doanh sẽ chuyển hồ sơ lên cho Sở Tài Chính (nhập thông tin ngừoi chuyển)\r\nB3: Sở tài chính xem xét hồ sơ và Duyệt hoặc Trả lại hồ sơ \r\nB4: Nếu hồ sơ được duyệt chương trình tự động chuyển hồ sơ được duyệt lên trang công bố\r\n', '', 8, 'SoTC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Màn hình tổng quan', 'Màn hình tổng quan của chương trình', '1dn.PNG', 1, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Thông tin doanh nghiệp', '-Đưa chuột sang menu chính của chương trình chọn Dịch vụ lưu trú - Thông tin doanh nghiệp\r\n-Hiển thị thông tin của Doanh nghiệp\r\n-Doanh nghiệp có thể vào chỉnh sửa thông tin của mình', '2dn.PNG', 2, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Kê khai thông tin cơ sở kinh doanh', '- Trong Menu Dịch vụ lưu trú chọn kê khai thông tin cơ sở kinh doanh', '3dn.PNG', 3, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Thêm cơ sở kinh doanh\r\n', '-Tại màn hình danh sách cơ sở kinh doanh chọn Kê khai cơ sở kinh doanh bên góc phải màn hình\r\n-Nhập thông tin về cơ sở kinh doanh; thông tin phòng, quy cách chất lượng sau đó chọn Cập nhật để lưu thông tin phòng\r\n-Sau khi đã cập nhật đầy đủ thông tin của cơ sở kinh doanh ta kéo màn hình nhập xuống cuối và chọn Hoàn thành', '4dn.PNG', 4, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Chọn cơ sở kinh doanh kê khai giá dịch vụ lưu trú', '-Tư menu chính ta chọn Dịch vụ lưu trú - Kê khai giá dịch vụ lưu trú\r\n-Tại màn hình này sẽ hiển thị các thông tin cơ sở kinh doanh của Doanh nghiệp đã cập nhật vào chương trình\r\n-Ta chọn cơ sở cần kê khai giá và chọn kê khai giá ở cột thao tác của cơ sở đó', '5dn.PNG', 5, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Danh sách hồ sơ kê khai giá đã tạo', '- Màn hình hiển thị các hồ sơ kê khai giá đơn vị đã kê khai\r\n-Trang thái của hồ sơ bao gồm: Chờ chuyển- Chờ Duyệt - Bị trả lại - Duyệt\r\n-Hồ sơ khi chuyển lên trên Sở tài chính sẽ bị khóa một số thao tác lên hồ sơ(chỉnh sửa, xóa)\r\n-Khi chuyển hồ sơ lên yêu cầu phải nhập thông tin người chuyển\r\n- Hồ sơ khi chuyển lên hệ thống sẽ tự lưu lại thời gian chuyển lên Sở tài chính hiện thị ngay dưới trạng thái của hồ sơ\r\n-Khi hồ sơ bị trả lại trong thao tác sẽ xuất hiện chức năng lý do tại sao trả lại của Sở tài chính', '6dn.PNG', 6, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Kê khai mới giá dịch vụ lưu trú', '-Cần nhập các thông tin yêu cầu trên màn hình\r\n-Chương trình sẽ tự động lấy ra số công văn, ngày tháng công văn liền kề nếu trong hệ thống đã có\r\n-Kê khai giá phòng mới và nhập thông tin về các dịch vụ thu thêm, thuế GTGT \r\n-Chọn hoàn thành để kết thúc kê khai hồ sơ mới', '7dn.PNG', 7, 'DN', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_19_104852_create_hddvlt_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hddvlt`
--
ALTER TABLE `hddvlt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hddvlt`
--
ALTER TABLE `hddvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
