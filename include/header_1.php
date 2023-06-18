<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="elemen/mycss.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jscript.js"></script>
    <title>Đánh giá điểm rèn luyện</title>

</head>





<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <a class="navbar-brand"><img id="MDB-logo" src="../assets/img/bannertruong.jpg" alt="MDB Logo"
                        draggable="false" height="60" />
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center mx-auto">
                        <li class="nav-item">
                            <a>Xin chào:
                                <?= isset($_SESSION['user'])?$_SESSION['user']->tensinhvien:"chuadapnhap" ;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="../user/doimatkhau/index.php"><i
                                    class="fas fa-plus-circle pe-2"></i>Đổi mật khẩu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-2" href="../login/index.php"><i class="fas fa-heart pe-2"></i>Đăng
                                xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<style>
.navbar-light .navbar-nav .nav-link {
    color: #000;
}
</style>