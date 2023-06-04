<?php
// lay du lieu id can xoa
$id_trinhdo = $_GET['sid'];
//echo $id_trinhdo;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM trinhdo WHERE id_trinhdo=$id_trinhdo";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietketrinhdo.php");
?>