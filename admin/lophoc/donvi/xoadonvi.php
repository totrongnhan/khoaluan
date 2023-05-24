<?php
// lay du lieu id can xoa
$id_donvi = $_GET['sid'];
//echo $id_donvi;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM donvi WHERE id_donvi=$id_donvi";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkedonvi.php");
?>