<?php
// lay du lieu id can xoa
$id_sv = $_GET['sid'];
//echo $id_sv;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM sinhvien WHERE id_sv=$id_sv";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkesinhvien.php");
?>