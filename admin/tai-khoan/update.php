<div>Cập nhật người dùng</div>
<?php
require '../mod/Cls.php';
$id_taikhoan = $_GET['id_taikhoan'];
$taikhoan = new taikhoan();
$gettaikhoan = $taikhoan->taikhoan_Get_by_Id($id_taikhoan);
?>
<div class="title_user">Người dùng mới</div>
<div class="content_user">
    <form name="updateuser" id="formupdate" method="post" action="./elements/tai-khoan/action.php?reqact=updateuser">
        <input type="hidden" name="id_taikhoan" value="<?php echo $id_taikhoan; ?>" />
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" value="<?php echo $gettaikhoan->username; ?>" /></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" value="<?php echo $gettaikhoan->password; ?>" /></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten" value="<?php echo $gettaikhoan->hoten; ?>" /></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td>Nam<input type="radio" name="gioitinh" value="1" <?php if ($gettaikhoan->gioitinh == 1) echo 'checked'; ?> />
                    Nữ<input type="radio" name="gioitinh" value="0" <?php if ($gettaikhoan->gioitinh == 0) echo 'checked'; ?> />
                </td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" name="ngaysinh" value="<?php echo $gettaikhoan->ngaysinh; ?>" /></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="diachi" value="<?php echo $gettaikhoan->diachi; ?>" /></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="tel" name="dienthoai" value="<?php echo $gettaikhoan->dienthoai; ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật" /></td>
                <td><input type="reset" value="Làm lại" /><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>