<?php 
//center
    if(isset($_GET["page"])){
        switch($_GET["page"]){
            case "index":
                require "index.php";
                break;
            case "quan-ly-tai-khoan":
                require "quan-ly-tai-khoan/index.php";
                break;
            default:
                require "error.php";
                break;
        }
    }else{
            echo "<script>location.href = 'index.php?page=index'</script>";
        }

?>