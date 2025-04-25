<?php
require_once "db_module.php";

// Giá trị cố định
$id_binhluan=40;
$tieude="Cũng được!";
$noidung="Không nổi bật";
$solike=7;
$thoigian="2025-04-20 18:07:43";
$id_bantin=27;
$id_docgia=1;

taoKetNoi($link);

// Câu truy vấn
$sql = "DELETE FROM tbl_binhluan
        WHERE id_binhluan=$id_binhluan AND tieude='$tieude' AND noidung='$noidung' AND solike=$solike AND thoigian='$thoigian'
        AND id_bantin=$id_bantin AND id_docgia=$id_docgia";

// Thực thi truy vấn
if (chayTruyVanKhongTraVeDL($link, $sql)) {
    $thongbao = "Xóa bình luận '$tieude' thành công!";
} else {
    $thongbao = "Xóa bình luận thất bại!";
}

giaiPhongBoNho($link);

// In thông báo
echo "<h2>Kết quả:</h2>";
echo "<p><strong>$thongbao</strong></p>";
?>
