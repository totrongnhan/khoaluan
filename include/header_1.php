<!--
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>trang admin</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/img" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/css/uikit.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>

    <?php
    // $Sql = "SELECT * FROM sinhvien";
    // $result = mysqli_query($conn,sql);
    // $data = [];
    // while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //    $data[] = array(
    //        'ten_sv' => $row[''],
    //    );
    //}
        ?>
        <body>
           
        <div class="dnn_banner bannerg">            
            <img id="dnn_banner" src="../assets/img/bannertruong.jpg" alt=""/>
            <nav class="navbar" style="background-color: 5fbf00;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../danhgia/danhgia.php>">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="d-flex">
                        <a class="dropdown-item">Xin chào:<?= isset($_SESSION['user'])?$_SESSION['user']->tensinhvien:"chuadapnhap" ;?></a>
                        <a class="dropdown-item" href="../login/index.php">Đăng xuất</a>


                    </form>
                </div>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.15/dist/js/uikit-icons.min.js"></script>
</body>
    
</html>-->
<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="elemen/mycss.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jscript.js"></script>
    <title>Đánh giá điểm rèn luyện</title>

</head>

<body>
    <center>
        <!--         <div id="img">
             <img id="img_top" <script src="../img/bannersv.png" width="1600px;"height="70" style="text-align: center; margin-left: -110px; margin-right: 100px;"></script>
       
        </div>-->
        <img class="img_div" style="margin-left: -10px;
            margin-top: auto;
            width: -webkit-fill-available;
            height: 80px;" src="../assets/img/bannertruong.jpg" ;>


    </center>

    <style>
        img {
            margin-bottom: -10px;
        }


        body {
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            background-size: 100px;

        }

        .topnav {

            overflow: hidden;
            background-color: dodgerblue;


        }

        .topnav a {
            float: right;
            margin-top: -10px;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 14px;
            text-decoration: none;
            font-size: 15px;
            margin-right: 10px;

        }

        .topnav a:hover {
            background-color: gray;
            color: black;
            text-align: right;


        }

        .topnav a.active {
            background-color: dodgerblue;
            color: white;
        }
    </style>
    <form style="color: red; font-size: 25px; text-align: right;">

        <a></a>Xin chào:
        <?= isset($_SESSION['user'])?$_SESSION['user']->tensinhvien:"chuadapnhap" ;?>

        </a>

    </form>


    <div class="topnav">
        <h2 style="font-size: 22px; color: #ffffff; margin-bottom: -49px; margin-top: 10px;"><a href="../user/doimatkhau/index.php">Đổi Mật Khẩu</a><h2>
                <ul>


                    <!--              <a href="#">THÔNG TIN SINH VIÊN</a>-->
                    <a href="../login/index.php" style="margin-right: -1px;">Đăng Xuất</a>




                </ul>
    </div>




</body>

</html>