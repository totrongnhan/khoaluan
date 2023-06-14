<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: ../login/index.php');
    }
    
?>


<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link href="css.css" rel="stylesheet" type="text/css" />

        <!-- css file -->
        <link rel="stylesheet" href="../assets/css/main.css">

        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../assets/theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

        <link rel="stylesheet" href="../assets/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../assets/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    </head>
</head>

<body>

    <div id="main_content">

        <div id="top_div">

        </div>
        <div id="left_div">
            <?php require 'left.php'; ?>
        </div>

        <div id="center_div">
            <?php require 'center.php'; ?>

        </div>

        <div id="right_div">

        </div>

        <div id="bottom_div">

        </div>
    </div>



    <!-- Js Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script src="../assets/theme/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/theme/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/theme/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/theme/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/theme/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/theme/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/theme/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="../assets/vendor/sweetalert2@11.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../assets/theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>


    <script>
    $('.duallistbox').bootstrapDualListbox()
    $('.duallistbox_sv').bootstrapDualListbox()

    function confirm_sweet(url) {
        Swal.fire({
            title: 'Xác nhận thao tác?',
            text: "Bạn chắc chắn thực hiện thao tác này",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = url;
            }
        })
    }
    </script>
    <?php
       if(isset($_GET['status'])){
           if($_GET['status'] == "success"){
               echo "<script>
               Swal.fire(
                   'Thành công!',
                   'Thao tác thành công!',
                   'success'
                 )</script>";
           }
           if($_GET['status'] == "failed"){
               echo "<script>
               Swal.fire(
                   'Thất bại!',
                   'Thao tác không thành công!',
                   'error'
                 )</script>";
           }
         
       }
?>
</body>

</html>