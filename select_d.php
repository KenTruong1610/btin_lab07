<?php
require_once "db_module.php";
taoKetNoi($link);

$sql = "SELECT bl.tieude, bl.noidung 
        FROM tbl_binhluan AS bl 
        JOIN tbl_bantin AS bt ON bl.id_bantin = bt.id_bantin 
        WHERE bt.tieude = 'Sự thay đổi cách thức mua sắm của khách hàng trong thời kì thương mại điện tử'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Tiêu đề: " . $row["tieude"] . "<br>";
        echo "Nội dung: " . $row["noidung"] . "<br>";
    }
} else {
    echo "Không tìm thấy bình luận thoả mãn yêu cầu!";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
