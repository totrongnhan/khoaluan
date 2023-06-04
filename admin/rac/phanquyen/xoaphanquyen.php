<?php
// lay du lieu id can xoa
$id_phanquyen = $_GET['sid'];
//echo $id_phanquyen;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM phanquyen WHERE id_phanquyen=$id_phanquyen";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkephanquyen.php");
?>