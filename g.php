<?php
require_once "db_module.php";

// Tạo kết nối
taoKetNoi($link);

$ten_danhmuc = 'Công nghệ';
$sql_lay_id = "SELECT id_danhmuc FROM tbl_danhmuc WHERE ten_danhmuc = '$ten_danhmuc' LIMIT 1";

$result = chayTruyVanTraVeDL($link, $sql_lay_id);

if ($row = mysqli_fetch_assoc($result)) {
    $id_danhmuc = $row['id_danhmuc'];

    // Tạo bản tin
    $sql_insert = "INSERT INTO tbl_bantin 
    (id_bantin, id_danhmuc, tieude, hinhanh, noidung, tukhoa, nguontin, solike, rating)
    VALUES 
    (36, $id_danhmuc, 'AI làm thay đổi cách chúng ta học tập', 'ai.jpg', 'Học sinh giờ dùng AI làm bài suốt', 'AI, học tập, công nghệ', 'Báo Công nghệ', 10, 7);";

    if (chayTruyVanKhongTraVeDL($link, $sql_insert)) {
        echo "✅ Thêm bản tin thành công!";
    } else {
        echo "❌ Lỗi khi thêm bản tin!";
    }
} else {
    echo "❌ Không tìm thấy danh mục với tên yêu cầu!";
}

// Giải phóng bộ nhớ
giaiPhongBoNho($link, $result);
?>