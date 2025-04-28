<?php
require_once "db_module.php";

// Giá trị cố định của câu 1
$id_binhluan=40;
$tieude="Cũng được!";
$noidung="Không nổi bật";
$solike=7;
$thoigian="2025-04-20 18:07:43";
$id_bantin=27;
$id_docgia=1;

// Giá trị cố định của câu thứ 2
$id_binhluan=61;
$tieude="Bài viết hay quá!";

// Giá trị cố định của câu thứ 3
$id_nguoidung=7;
$ten_danhmuc = "Lịch Sử";
taoKetNoi($link);


//Câu truy vấn DELETE thứ 2
$sql_delete="DELETE FROM tbl_binhluan
             WHERE id_binhluan=$id_binhluan AND tieude='$tieude'";

//Câu truy vấn DELETE thứ 3
$sql_3="DELETE FROM tbl_danhmuc
        WHERE id_nguoidung=$id_nguoidung AND ten_danhmuc='$ten_danhmuc'";
// Thực thi truy vấn
if (chayTruyVanKhongTraVeDL($link, $sql_delete)) {
    $thongbao = "Xóa bình luận '$tieude' thành công!";
} else {
    $thongbao = "Xóa bình luận thất bại!";
}

giaiPhongBoNho($link);

// In thông báo
echo "<h2>Kết quả:</h2>";
echo "<p><strong>$thongbao</strong></p>";
?>