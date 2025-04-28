<?php
require_once "db_module.php";
taoKetNoi($link);

$sql = "SELECT tieude, solike 
        FROM tbl_bantin 
        ORDER BY solike DESC";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Tiêu đề: " . $row["tieude"] . "<br>";
        echo "Số like: " . $row["solike"] . "<br>";
    }
} else {
    echo "Không tìm thấy dữ liệu!";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
