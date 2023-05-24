<?php
// lay du lieu id can xoa
$id_nganhhoc = $_GET['sid'];
//echo $id_nganhhoc;
require_once '../mod/config.php';
//cau lenh sql
$xoa_sql = "DELETE FROM nganhhoc WHERE id_nganhhoc=$id_nganhhoc";

mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietkenganhhoc.php");
?>