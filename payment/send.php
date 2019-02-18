<?php
    include_once("functions.php");
    require('../config.php');
    $id = $_POST['order_id'];
    $query = "SELECT * FROM `orders` WHERE `id` = $id";
    $result = mysqli_query($connect, $query);
    $order = mysqli_fetch_object($result);
    $api = 'test';
    $amount = $order->total;
    $mobile = "";
    $factorNumber = $order->id;
    $description = "";
    $redirect = 'http://localhost/shop/payment/verify.php';
    $result = send($api, $amount, $redirect, $mobile, $factorNumber, $description);
    $result = json_decode($result);
    if($result->status) {
        $go = "https://pay.ir/pg/$result->token";
        header("Location: $go");
    } else {
        echo $result->errorMessage;
    }
?>