<?php
// lay du lieu id can xoa
$id_lophoc = $_GET['sid'];
//echo $id_lophoc;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM lophoc WHERE id_lophoc=$id_lophoc";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkelophoc.php");
?>