<?php
include_once "db.php";
session_start();

if(isset($_GET['cancel_order'])){

    $ordersrefnum = $_GET['cancel_order'];

        $sql_update_order = "UPDATE `orders`
                                    SET `order_phase` = '0'
                                    WHERE `orders_ref_number` = '$ordersrefnum';
                                    ";
            $try = mysqli_query($conn, $sql_update_order);
    if($try){
        header("location: index.php?page=myorder");
    }
}