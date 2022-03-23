<?php
    $uaccount=$_GET["uaccount"];
    $upwd=$_GET["upwd"];
    if($account=='A1083352' && $password=='A1083352'){
        header("Location:success.php");
    }else{
        header("Location:failed.php");
    }
?>