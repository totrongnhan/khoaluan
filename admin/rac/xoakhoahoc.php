<?php
// lay du lieu id can xoa
$id_khoahoc = $_GET['sid'];
//echo $id_khoahoc;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM khoahoc WHERE id_khoahoc=$id_khoahoc";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkekhoahoc.php");
?>