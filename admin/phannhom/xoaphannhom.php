<?php
// lay du lieu id can xoa
$id_phannhom = $_GET['sid'];
//echo $id_phannhom;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM phannhom WHERE id_phannhom=$id_phannhom";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkephannhom.php");
?>