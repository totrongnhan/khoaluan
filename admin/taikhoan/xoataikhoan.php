<?php
// lay du lieu id can xoa
$id_taikhoan = $_GET['sid'];
//echo $id_taikhoan;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM taikhoan WHERE id_taikhoan=$id_taikhoan";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietketaikhoan.php");
?>