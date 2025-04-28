<?php
require_once "db_module.php";
taoKetNoi($link);

$sql = "SELECT * FROM tbl_bantin WHERE tieude LIKE '%công nghệ%'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID bản tin: " . $row["id_bantin"] . "<br>";
        echo "ID danh mục: " . $row["id_danhmuc"] . "<br>";
        echo "Tiêu đề: " . $row["tieude"] . "<br>";
        echo "Hình ảnh: " . $row["hinhanh"] . "<br>";
        echo "Nội dung: " . $row["noidung"] . "<br>";
        echo "Từ khoá: " . $row["tukhoa"] . "<br>";
        echo "Nguồn tin: " . $row["nguontin"] . "<br>";
        echo "Số like: " . $row["solike"] . "<br>";
        echo "Rating: " . $row["rating"] . "<br>";
    }
} else {
    echo "Không tìm thấy bản tin nào có tiêu đề chứa từ khoá Bản tin";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
