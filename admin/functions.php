<?php
    function getCategory($catid) {
        require('../../config.php');
        $a = "SELECT * FROM `category` WHERE `id` = '$catid'";
        $r = mysqli_query($connect, $a);
        $cat = mysqli_fetch_object($r);
        echo $cat->name;
    }
?>