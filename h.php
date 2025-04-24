<?php
require_once "db_module.php";

taoKetNoi($link);

// 1. Lấy id_bantin theo tiêu đề
$tieude_bantin = "Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple";
$sql_lay_id = "SELECT id_bantin FROM tbl_bantin WHERE tieude = '$tieude_bantin' LIMIT 1";

$result = chayTruyVanTraVeDL($link, $sql_lay_id);

if ($row = mysqli_fetch_assoc($result)) {
    $id_bantin = $row['id_bantin'];

// 2. Tạo bình luận
    $sql_insert = "INSERT INTO tbl_binhluan 
        (id_binhluan, tieude, noidung, solike, thoigian, id_bantin, id_docgia) 
        VALUES 
        (51, 'Chờ đợi sản phẩm đột phá!', 
         'Hy vọng Samsung có chiến lược tốt để không đi vào vết xe đổ của Apple.', 
         6, '2023-06-07 09:00:00', 
         $id_bantin, 3)";

    if (chayTruyVanKhongTraVeDL($link, $sql_insert)) {
        echo "✅ Thêm bình luận thành công!";
    } else {
        echo "❌ Lỗi khi thêm bình luận!";
    }
} else {
    echo "❌ Không tìm thấy bản tin với tiêu đề yêu cầu!";
}

giaiPhongBoNho($link, $result);
?>
