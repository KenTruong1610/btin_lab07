<?php
require_once "db_module.php";

taoKetNoi($link);

// Câu lệnh UPDATE
$sql_update = "UPDATE tbl_bantin 
               SET noidung = 'Nội dung mới sẽ được cập nhật' 
               WHERE id_bantin = 123";

if (chayTruyVanKhongTraVeDL($link, $sql_update)) {
    echo "✅ Cập nhật nội dung bản tin thành công!";
} else {
    echo "❌ Lỗi khi cập nhật bản tin!";
}

// Đóng kết nối
giaiPhongBoNho($link);
?>
