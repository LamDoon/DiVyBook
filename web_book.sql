-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2020 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(11) NOT NULL,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`IdAdmin`, `name`, `pass`) VALUES
(7, 'LamDoon', '123'),
(8, 'HuynhVy', '456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `HinhAnh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `MaDH` int(10) NOT NULL,
  `MaND` int(10) NOT NULL,
  `MaSach` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` decimal(10,0) NOT NULL,
  `TinhTrang` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`HinhAnh`, `MaDH`, `MaND`, `MaSach`, `DonGia`, `SoLuong`, `ThanhTien`, `TinhTrang`) VALUES
('kns1.png', 0, 18, 'B044', '92000', 1, '92000', 'CHUA'),
('kt3.jpg', 0, 18, 'B049', '62000', 1, '62000', 'CHUA'),
('tt09.jpg', 52, 14, 'B030', '83000', 4, '332000', 'GIAO'),
('tt9.jpg', 52, 14, 'B031', '41000', 9, '369000', 'GIAO'),
('kns7.jpg', 52, 14, 'B037', '65000', 4, '260000', 'GIAO'),
('kns099.jpg', 52, 14, 'B039', '83000', 1, '83000', 'GIAO'),
('kns34.png', 52, 14, 'B040', '64000', 1, '64000', 'GIAO'),
('kt3.jpg', 52, 14, 'B049', '62000', 4, '248000', 'GIAO'),
('kns1.png', 55, 14, 'B044', '92000', 10, '920000', 'GIAO'),
('kns34.png', 56, 14, 'B040', '64000', 10, '640000', 'GIAO'),
('kns1.png', 56, 14, 'B044', '92000', 3, '276000', 'GIAO'),
('tn4.jpg', 57, 14, 'B001', '51000', 7, '357000', 'GIAO'),
('kns78.jpg', 58, 14, 'B041', '68000', 5, '340000', 'GIAO'),
('kt3.jpg', 58, 14, 'B049', '62000', 9, '558000', 'GIAO'),
('tt9.jpg', 62, 18, 'B031', '41000', 1, '41000', 'GIAO'),
('vh7.jpg', 63, 18, 'B033', '156000', 1, '156000', 'GIAO'),
('kns34.png', 63, 18, 'B040', '64000', 1, '64000', 'GIAO'),
('kns78.jpg', 63, 18, 'B041', '68000', 1, '68', 'GIAO'),
('tt12.jpg', 65, 18, 'B029', '87000', 1, '87000', 'GIAO'),
('tn4.jpg', 66, 18, 'B001', '51000', 1, '51000', 'GIAO'),
('tl3.jpg', 66, 18, 'B014', '75000', 14, '1050000', 'GIAO'),
('kns9.jpg', 66, 18, 'B038', '71000', 1, '71000', 'GIAO'),
('tl3.jpg', 67, 18, 'B014', '75000', 3, '225000', 'GIAO'),
('tn45.jpg', 68, 18, 'B020', '45000', 20, '900000', 'GIAO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(10) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaND` int(10) NOT NULL,
  `Sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDH`, `NgayLap`, `MaND`, `Sdt`, `DiaChi`, `TongTien`) VALUES
(52, '2020-08-08', 14, '0987541203', 'Hải châu- Đà Nẵng', '248000'),
(55, '2020-08-08', 14, '0987541203', 'JIYEON', '920000'),
(56, '2020-08-08', 14, '0987541203', 'hải châu', '916000'),
(57, '2020-08-08', 14, '0963201245', 'Khánh Hòa', '357000'),
(58, '2020-08-08', 14, '0987541203', 'Khánh Hòa - đà nẵng', '898000'),
(60, '2020-08-08', 18, '0364507725', 'danang', '682000'),
(61, '2020-08-08', 18, '07796767', 'gg', '92000'),
(62, '2020-08-09', 18, '0364507725', 'danang', '195000'),
(63, '2020-08-10', 18, '', '', '220068'),
(64, '2020-08-10', 18, '0364507725', 'thanh sơn thanh bình hải châu đà nẵng', '220068'),
(65, '2020-08-10', 18, '', '', '87000'),
(66, '2020-08-10', 18, '07796767', 'Hà Nội', '1172000'),
(67, '2020-08-10', 18, '0496950493', 'danang', '225000'),
(68, '2020-08-10', 18, '0496950493', 'gg', '900000'),
(69, '2020-08-10', 18, '', '', '92000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisach`
--

CREATE TABLE `loaisach` (
  `MaLoai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisach`
--

INSERT INTO `loaisach` (`MaLoai`, `TenLoai`) VALUES
('KNS', 'Kỹ năng sống'),
('KT', 'Kinh Tế'),
('NN', 'Ngoại Ngữ'),
('TL', 'Tâm Linh - Tôn Giáo'),
('TN', 'Truyện Tranh - Thiếu Nhi'),
('TT', 'Tiểu Thuyết'),
('VH', 'Văn Hóa - Lịch Sử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(10) NOT NULL,
  `TenND` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `TenND`, `MatKhau`, `Sdt`, `DiaChi`) VALUES
(14, 'lamdoon123', '123', '0987541203', 'Ninh Hòa - Khánh Hòa'),
(18, 'vy', '123', '0364507725', 'danang'),
(19, 'fffffffffff fffff', '123', '0364507725', 'danang'),
(20, 'nam', '123', '07796767', 'gg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNXB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenNXB` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`) VALUES
('GD', 'Giáo Dục VN'),
('HNV', 'Hội Nhà Văn'),
('KD', 'Kim Đồng'),
('LD', 'Lao Động'),
('QT', 'Quốc Tế'),
('TH', 'Tổng hợp Tp.HCM'),
('Tre', 'Trẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `iD` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Anhqc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hang` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `NgayQC` date NOT NULL,
  `ThoiGian` int(10) NOT NULL,
  `ThuLoi` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`iD`, `Anhqc`, `Link`, `Hang`, `NgayQC`, `ThoiGian`, `ThuLoi`) VALUES
('QC001', 'qc1.jpg', 'https://kinhmatviettin.vn/', 'Việt Tín', '2020-08-21', 20, '2300000'),
('QC002', 'qc2.jpg', 'https://dibao.com.vn/', 'Dibao', '2020-08-24', 10, '2300000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenSach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `MoTa` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaNXB` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `MaTG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `DaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`MaSach`, `TenSach`, `SLuong`, `DonGia`, `MoTa`, `MaLoai`, `MaNXB`, `HinhAnh`, `MaTG`, `DaBan`) VALUES
('B001', 'Cô bé bán diêm', 70, '51000', 'Đây là bộ truyện nói về một cô bé nhà nghèo phải đi bán diêm giữa trời đông giá lạnh để mưu sinh qua ngày.', 'TN', 'TH', 'tn4.jpg', 'TG013', 8),
('B002', 'Kinh tế học', 45, '34000', 'Chính sách tài khóa cùng với chính sách tiền tệ là các chính sách kinh tế vĩ mô quan trọng, nhằm ổn định và phát triển kinh tế.', 'KT', 'LD', 'kt7.jpg', 'TG006', 0),
('B003', 'Kinh Tế Vi Mô', 56, '53000', 'Chính sách tài khóa (fiscal policy) trong kinh tế học vĩ mô là chính sách thông qua chế độ thuế và đầu tư công để tác động tới nền kinh tế. Chính sách tài khóa cùng với chính sách tiền tệ là các chính sách kinh tế vĩ mô quan ', 'KT', 'TH', 'kt9.jpg', 'TG010', 0),
('B004', 'Từ điển Nhật Việt', 12, '47000', 'Các em nhớ rằng để có thể nâng trình tiếng Anh giao tiếp của em một cách rõ rệt bên cạnh phương pháp học tốt phải đi kèm với nó là những tài liệu học tiếng Anh giao tiếp chất lượng.', 'NN', 'TH', 'nn5.jpg', 'TG011', 0),
('B005', 'Sổ tay giao tiếp tiếng nhật cấp tốc', 29, '67000', 'Các em nhớ rằng để có thể nâng trình tiếng Nhật giao tiếp của em một cách rõ rệt bên cạnh phương pháp học tốt phải đi kèm với nó là những tài liệu học tiếng Nhật giao tiếp chất lượng.', 'NN', 'Tre', 'nn7.jpg', 'TG013', 0),
('B006', 'Những quy tắc trong công việc', 12, '45000', 'Những quy tắc trong công việc là một cuốn sách về kỹ năng làm việc hữu ích cho các bạn trẻ đặc biệt là sinh viên mới ra trường', 'KNS', 'Tre', 'kns5.jpg', 'TG004', 0),
('B007', '6000 câu giao tiếp tiếng Hàn theo chủ đề', 57, '123000', 'Như tựa đề của cuốn sách chắc hẳn các đều biết đây là tài liệu luyện nghe tiếng Hàn. Muốn nói được tiếng Hàn trước hết chúng ta phải luyện NGHE', 'NN', 'TH', 'nn3.jpg', 'TG007', 0),
('B008', 'Ngữ pháp tiếng Hàn bỏ túi', 33, '97000', 'Muốn nói được tiếng Hàn trước hết chúng ta phải luyện NGHE, Tactics For Listening gồm 3 cuốn tương đương với 3 cấp độ cơ bản, mở rộng và nâng cao. ', 'NN', 'HNV', 'nn4.jpg', 'TG011', 14),
('B009', 'Học tiếng Anh giao tiếp chỉ trong 30 ngày', 22, '38000', 'Như tựa đề của cuốn sách chắc hẳn các đều biết đây là tài liệu luyện nghe tiếng Anh. Muốn nói được tiếng Anh trước hết chúng ta phải luyện NGHE.', 'NN', 'GD', 'nn67.png', 'TG006', 0),
('B010', '8 Phút tự học giao tiếp tiếng Anh', 54, '32000', 'Tactics For Listening gồm 3 cuốn tương đương với 3 cấp độ cơ bản, mở rộng và nâng cao. ', 'NN', 'GD', 'nn2.jpg', 'TG011', 0),
('B011', 'Giao tiếp tiếng Anh thế kỉ 21', 25, '34000', 'Như tựa đề của cuốn sách chắc hẳn các đều biết đây là tài liệu luyện nghe tiếng Anh. Muốn nói được tiếng Anh trước hết chúng ta phải luyện NGHE, Tactics For Listening gồm 3 cuốn tương đương với 3 cấp độ cơ bản, mở rộng và nân', 'NN', 'LD', 'nn21.jpg', 'TG005', 0),
('B012', 'Những quy tắc để con có cuộc sống hạnh phúc', 45, '89000', 'Đây là một cuốn sách rất bổ ích cho bậc làm cho mẹ trong việc dạy dỗ con nên người...', 'KNS', 'TH', 'kns6.jpg', 'TG011', 0),
('B013', 'Người đua diều', 13, '43000', 'Đây là một cuốn sách nói về sự bí hiểm của một tổ chức bí vật. Vấn đề tâm linh được ẩn chứa.', 'TL', 'LD', 'tt1.jpg', 'TG011', 0),
('B014', 'Hồ sơ bí ẩn', 62, '75000', 'Chưa bao giờ người đọc sách tôn giáo tâm linh lại nhiều như hiện nay. Những cuốn sách ấy, thậm chí có thể xếp vào hàng Best Seller và mang lại lợi nhuận không ít cho các nhà xuất bản.', 'TL', 'HNV', 'tl3.jpg', 'TG002', 3),
('B020', 'Dế mèn phiêu lưu kí', 42, '45000', 'Anh việc gì phải kéo cày ? Giá tôi ở địa vị anh thì tôi không có chịu. Chủ mà lấy roi quật tôi, tôi sẽ tung vó đá lại. Sáng ngày hôm sau ngựa đực bèn làm theo lời ngựa cái. Bác nông dân thấy ngựa đực trở nên ương bướng, bèn đ', 'TN', 'KD', 'tn45.jpg', 'TG003', 20),
('B028', 'Miền Tây', 31, '37000', 'Tình bạn trẻ thơ dần dần biến thành tình yêu thầm lặng của Ngạn dành cho Hà Lan. Đến khi lớn hơn một chút, cả hai phải rời làng ra thành phố để tiếp tục học. ', 'TT', 'KD', 'tt7.jpg', 'TG003', 0),
('B029', 'Tình yêu không trốn chạy', 55, '87000', 'Tình bạn trẻ thơ dần dần biến thành tình yêu thầm lặng của Ngạn dành cho Hà Lan. Đến khi lớn hơn một chút, cả hai phải rời làng ra thành phố để tiếp tục học. ', 'TT', 'Tre', 'tt12.jpg', 'TG008', 1),
('B030', 'Yêu em từ cái nhìn đầu tiên', 4, '83000', 'Tình bạn trẻ thơ dần dần biến thành tình yêu thầm lặng của Ngạn dành cho Hà Lan. Đến khi lớn hơn một chút, cả hai phải rời làng ra thành phố để tiếp tục học. ', 'TT', 'Tre', 'tt09.jpg', 'TG004', 8),
('B031', '5 Centimet trên giây', 22, '41000', 'Tình bạn trẻ thơ dần dần biến thành tình yêu thầm lặng của Ngạn dành cho Hà Lan. Đến khi lớn hơn một chút, cả hai phải rời làng ra thành phố để tiếp tục học. ', 'TT', 'KD', 'tt9.jpg', 'TG007', 1),
('B033', 'Xã hội học văn hóa', 23, '156000', 'Xã hội học là khoa học về các quy luật và tính quy luật xã hội chung, và đặc thù của sự phát triển và vận hành của hệ thống xã hội xác định về mặt lịch sử;', 'VH', 'Tre', 'vh7.jpg', 'TG011', 1),
('B034', 'Văn hóa với sự phát triển của xã hội Việt Nam', 32, '99000', 'Tính tất yếu đó thể hiện ở nhu cầu và sự phát triển chín muồi các điều kiện và tiền đề biến đổi và nhận thức đời sống xã hội. Các biến động to lớn trong đời sống kinh tế, chính trị và xã hội', 'VH', 'TH', 'vh8.jpg', 'TG004', 0),
('B035', 'Sự kiến tạo xã hội về thực tại', 21, '85000', 'Tính tất yếu đó thể hiện ở nhu cầu và sự phát triển chín muồi các điều kiện và tiền đề biến đổi và nhận thức đời sống xã hội. Các biến động to lớn trong đời sống kinh tế, chính trị và xã hội', 'VH', 'LD', 'vh12.jpg', 'TG008', 0),
('B037', 'Kỹ năng sống cho học sinh THPT', 31, '65000', 'Kỹ năng sống không phải tự nhiên mà có nó phải trải qua quá trình rèn luyện lâu dài. Bạn có thể tích lũy kỹ năng qua một số cuốn sách dạy kỹ năng sống nổi tiếng trên thế giới và chiếm được lòng tin của độc giả.', 'KNS', 'GD', 'kns7.jpg', 'TG012', 0),
('B038', '100 Phương pháp thúc đẩy mọi người', 16, '71000', 'Kỹ năng sống không phải tự nhiên mà có nó phải trải qua quá trình rèn luyện lâu dài. Bạn có thể tích lũy kỹ năng qua một số cuốn sách dạy kỹ năng sống nổi tiếng trên thế giới và chiếm được lòng tin của độc giả.', 'KNS', 'Tre', 'kns9.jpg', 'TG002', 0),
('B039', 'Kỹ năng thoát nạn', 62, '83000', 'Với tôi, sách luôn là bạn, người đồng hành tuyệt vời nhất trong cuộc sống. Nếu bạn cũng giống tôi, muốn tìm những cuốn sách nói về kỹ năng sống thì những đầu sách sau đây có thể là những gì bạn đang muốn tìm kiếm.', 'KNS', 'GD', 'kns099.jpg', 'TG008', 0),
('B040', 'Bạn đắt giá bao nhiêu', 65, '64000', 'Với tôi, sách luôn là bạn, người đồng hành tuyệt vời nhất trong cuộc sống. Nếu bạn cũng giống tôi, muốn tìm những cuốn sách nói về kỹ năng sống thì những đầu sách sau đây có thể là những gì bạn đang muốn tìm kiếm.', 'KNS', 'TH', 'kns34.png', 'TG009', 13),
('B041', 'Không tự khinh bỉ Không tự phí hoài', 66, '68000', 'Bạn cũng như tôi, luôn mong muốn hoàn thành xuất sắc công việc. Tuy nhiên, bạn cũng sẽ phải nếm trải cuộc sống theo cách mà bạn ngày càng khó nắm bắt, nếu không muốn nói là không thể nắm bắt được khi phải làm việc quá nhiều.', 'KNS', 'HNV', 'kns78.jpg', 'TG009', 5),
('B044', 'Đắc nhân tâm', 49, '92000', 'Tôi cho rằng, hiệu quả là một điều tốt. Những gì bạn đang làm có thể quan trọng, thú vị, hữu dụng, hoặc có thể không, nhưng vẫn phải thực hiện chúng. ', 'KNS', 'TH', 'kns1.png', 'TG013', 12),
('B049', 'Kinh tế học vi mô', 28, '62000', 'Đọc sách để mỗi người đều thấy được rằng: Mơ ước là xuất phát điểm của thành công, quyết tâm là tiếng súng xuất phát của cuộc đua, hành động được ví như là sự nỗ lực chạy hết mình của vận động viên', 'KT', 'Tre', 'kt3.jpg', 'TG005', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `Id` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`Id`, `Anh`) VALUES
('SL001', 'bn1.jpg'),
('SL002', 'bn2.jpg'),
('SL003', 'bn3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTG` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenTG` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenTG`) VALUES
('', ''),
('TG001', 'Nguyễn Nhật Ánh'),
('TG002', 'Đoàn Giỏi'),
('TG003', 'Tô Hoài'),
('TG004', 'Trần Đăng Khoa'),
('TG005', 'Alice'),
('TG006', 'Bonnie'),
('TG007', 'Steven'),
('TG008', 'Nguyễn Minh Khương'),
('TG009', 'Vãn Tình'),
('TG010', 'Rosie Nguyễn'),
('TG011', 'Dale Carnegie'),
('TG012', 'Nguyễn Văn Ngọc'),
('TG013', 'Willam Janeway');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaDH`,`MaSach`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaND` (`MaND`);

--
-- Chỉ mục cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`iD`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaNXB` (`MaNXB`),
  ADD KEY `MaTG` (`MaTG`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTG`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaisach` (`MaLoai`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`MaTG`) REFERENCES `tacgia` (`MaTG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
