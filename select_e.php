<?php
require_once "db_module.php";
taoKetNoi($link);

$sql = "SELECT dg.*
        FROM tbl_binhluan bl
        JOIN tbl_docgia dg ON bl.id_docgia = dg.id_docgia
        JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
        WHERE bt.tieude = 'Thoái trào tất yêu của Apple trước cạnh tranh trên thị trường smartphone' AND bt.tukhoa LIKE '%ngốc nghếch%'";
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
    echo "Không tìm thấy độc giả thoả mãn yêu cầu!";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
