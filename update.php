<?php
require_once "db_module.php";

$thongbao = "";

taoKetNoi($link);

// Tiêu đề cần tìm
$tieude = mysqli_real_escape_string($link, "Cách mạng giáo dục 4.0");

// Câu lệnh UPDATE với điều kiện theo tiêu đề
$sql = "UPDATE tbl_bantin 
        SET solike = solike + 2 
        WHERE tieude = '$tieude'";

// Thực thi truy vấn
if (chayTruyVanKhongTraVeDL($link, $sql)) {
    $thongbao = "Tăng solike cho bài viết '$tieude' thành công!";
} else {
    $thongbao = "Cập nhật thất bại!";
}

giaiPhongBoNho($link);

// In kết quả
echo "<h2>Kết quả:</h2>";
echo "<p><strong>$thongbao</strong></p>";
?>