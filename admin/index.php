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
        <link href="css.css" rel="stylesheet" type="text/css"/>

        <!-- css file -->
        <link rel="stylesheet" href="../assets/css/main.css">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>