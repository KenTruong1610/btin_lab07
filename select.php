<?php
require_once "db_module.php";

taoKetNoi($link);

$sql = "SELECT * FROM tbl_docgia WHERE id_docgia = 1";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id_docgia"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
        echo "Họ tên: " . $row["hoten"] . "<br>";
        echo "Ghi chú: " . $row["ghichu"] . "<br>";
    }
} else {
    echo "Không tìm thấy độc giả nào có id_docgia = 1";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
