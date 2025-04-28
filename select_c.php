<?php
require_once "db_module.php";
taoKetNoi($link);

$sql = "SELECT b.*, d.ten_danhmuc 
        FROM tbl_bantin b 
        JOIN tbl_danhmuc d ON b.id_danhmuc = d.id_danhmuc
        WHERE ten_danhmuc IN ('Đời sống', 'Giáo dục')";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID bản tin: " . $row["id_bantin"] . "<br>";
        echo "ID danh mục: " . $row["id_danhmuc"] . "<br>";
        echo "Tên danh mục: " . $row["ten_danhmuc"] . "<br>";
        echo "Tiêu đề: " . $row["tieude"] . "<br>";
        echo "Hình ảnh: " . $row["b.hinhanh"] . "<br>";
        echo "Nội dung: " . $row["noidung"] . "<br>";
        echo "Từ khoá: " . $row["tukhoa"] . "<br>";
        echo "Nguồn tin: " . $row["nguontin"] . "<br>";
        echo "Số like: " . $row["solike"] . "<br>";
        echo "Rating: " . $row["rating"] . "<br>";
    }
} else {
    echo "Không tìm thấy bản tin thuộc danh mục “Giáo dục” và danh mục “Đời sống”!";
}

giaiPhongBoNho($link, $result); // Giải phóng và đóng kết nối
?>
