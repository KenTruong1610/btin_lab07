<?php
require_once "config.php";

function taoKetNoi(&$link)
{
	$link = mysqli_connect(HOST, USER, PASSWORD, DB);
	if (mysqli_connect_errno()) {
		echo "❌ Lỗi kết nối đến máy chủ: " . mysqli_connect_error();
		exit();
	}
}

function chayTruyVanTraVeDL($link, $q)
{
	$result = mysqli_query($link, $q);
	if (!$result) {
		echo "❌ Lỗi truy vấn dữ liệu: " . mysqli_error($link);
		return false;
	}
	return $result;
}

function chayTruyVanKhongTraVeDL($link, $q)
{
	$result = mysqli_query($link, $q);
	if (!$result) {
		echo "❌ Lỗi thực thi truy vấn: " . mysqli_error($link);
		return false;
	}
	return true;
}

function giaiPhongBoNho($link, $result = null)
{
	if ($result && is_object($result)) {
		mysqli_free_result($result);
	}
	if ($link) {
		mysqli_close($link);
	}
}
?>
