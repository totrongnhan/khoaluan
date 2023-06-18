<?php
    session_start();
    
    

require("../models/getModel.php");
$id_sinhvien = $_SESSION['user']->id_sinhvien;
$id_dot =$dotkhaosat->dotkhaosat__Get_Last()->id_dot;
$tenkhaosat__Get_By_Id_sinhvien = $tenkhaosat->tenkhaosat__Get_By_Id_sinhvien($id_sinhvien,$id_dot);

function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'ít hơn 1 giây trước'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'năm',
                30 * 24 * 60 * 60       =>  'tháng',
                24 * 60 * 60            =>  'ngày',
                60 * 60                 =>  'giờ',
                60                      =>  'phút',
                1                       =>  'giấy'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return$t . ' ' . $str . ' trước';
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>

    <title>Khảo sát đánh giá cho sv</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/logotaydo.png">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/vendor/boxicons/css/boxicons.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Free_6.4.0/css/mdb.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
    .break {
        margin-top: 150px;
    }

    .sticker-100 {
        margin-top: 200px;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
    }

    a.row.p {
        margin: 0 !important;
        padding: 0 !important;
    }

    @media only screen and (max-width: 1000px) {
        .mini-btn {
            width: fit-content;
        }

        .sticker-100 {
            margin-top: 200px;
            display: inline;
        }

        a.row.p {
            margin: 1rem !important;
            padding: 1rem !important;
        }

        /* 

        *,
        html,
        body {
            font-size: 1.2rem;
        }

        a {
            text-decoration: none;
            font-size: 1.2rem !important;
        }

        button.navbar-toggler.collapsed {
            z-index: 99000009;
        }

        .sticker-100 {
            margin-top: 200px;
        }

        .f-title {
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
        } */

    }

    .m-05 {
        margin: 0.1rem;
    }

    */
    </style>
</head>


<nav class="fixed-top bg-light text-center">
    <div class="row p-4">
        <img id="MDB-logo" src="../assets/img/bannertruong.png" alt="MDB Logo" draggable="false" height="" />
    </div>
    <div class="row m-05">
        <a class="col-5 m-05 btn btn-sm btn-info mini-btn">
            <i
                class="fa-solid fa-user-graduate p-1"></i><?=$sinhvien->sinhvien__Get_By_Id($_SESSION['user']->id_sinhvien)->tensinhvien?></a>
        <a class="col-3 m-05 btn btn-sm btn-primary mini-btn" href="../user/doimatkhau/index.php"><i
                class="fa-solid fa-user-pen p-1"></i></a>
        <a class="col-3 m-05 btn btn-sm btn-danger mini-btn" href="../login/index.php"><i
                class="fa-solid fa-arrow-right-from-bracket p-1"></i></a>
    </div>

</nav>
<div class="break"></div>
<?php $i=1?>
<div class="sticker-100">
    <?php foreach ($tenkhaosat__Get_By_Id_sinhvien as $item): ?>
    <a class="row p" href="danhgiacsvc.php?id=<?=$item->id_phieu?>">
        <div class="col p hover">
            <div class="card" style="width: 100%;">
                <img src="../assets/img/<?=$i++?>.png" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title f-title"><?=$item->tenkhaosat0?></h5>
                    <p class="card-text">
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?=get_time_ago(strtotime($item->ngaythuchien))?></small>
                </div>
            </div>
        </div>
    </a>
    <?php $i = $i==5?1:$i?>

    <?php endforeach ?>
</div>



<script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/sweetalert2@11.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB5-Free_6.4.0/js/mdb.min.js">
</script>

<?php
       if(isset($_GET['status_dg'])){
           if($_GET['status_dg'] == "success"){
               echo "<script>
               Swal.fire(
                   'Đã khảo sát thành công!',
                   '',
                   'success'
                 )</script>";
           }
           if($_GET['status_dg'] == "failed"){
               echo "<script>
               Swal.fire(
                   'Thao tác không thành công!',
                   '',
                   'error'
                 )</script>";
           }
         
       }
?>

</body>

</html>