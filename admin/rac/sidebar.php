<?php
    $SS_ID = $_SESSION['admin']->id_taikhoan;
    require "../models/getModel.php";

?>

<section class="sidebar" id="sidebar">
    <ul class="sidebar-menu__container">
        <?php if(isset($_GET['page'])):?>

        <!-- quan-ly-tai-khoan -->
        <?php if($_GET['page'] == 'quan-ly-tai-khoan'):?>
        <a href="index.php?page=quan-ly-tai-khoan">
            <li class="sidebar-menu__item active">
                <i class='bx bxs-folder-open'></i>
                <span class="sidebar-menu__item-text">Tài khoản</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-tai-khoan">
            <li class="sidebar-menu__item">
                <i class='bx bxs-folder'></i>
                <span class="sidebar-menu__item-text">Tài khoản</span>
            </li>
        </a>
        <?php endif?>
        <!-- end quan-ly-tai-khoan -->


        <?php endif?>
        <a href="../login/action.php?req=logout">
            <li class="sidebar-menu__item">
                <i class='bx bxs-log-out'></i>
                <span class="sidebar-menu__item-text">Đăng xuất</span>
            </li>
        </a>
    </ul>

    <!-- /* The button to toggle the sidebar. */ -->
    <nav class="toggle-footer" id="toggle-footer">
        <i class='bx bxs-left-arrow-circle'></i>
    </nav>

</section>