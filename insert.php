<?php
require_once "db_module.php";

// Giá trị cố định
$ten_danhmuc = "Địa lý";
$hinhanh = "geo.png";
$id_nguoidung = 8;
$thongbao = "";

taoKetNoi($link);

// Câu truy vấn
$sql = "INSERT INTO tbl_danhmuc (ten_danhmuc, hinhanh, id_nguoidung)
        VALUES ('$ten_danhmuc', '$hinhanh', '$id_nguoidung')";

// Thực thi truy vấn
if (chayTruyVanKhongTraVeDL($link, $sql)) {
    $thongbao = "Thêm danh mục '$ten_danhmuc' thành công!";
} else {
    $thongbao = "Thêm danh mục thất bại!";
}

giaiPhongBoNho($link);

// In thông báo
echo "<h2>Kết quả:</h2>";
echo "<p><strong>$thongbao</strong></p>";
?>
