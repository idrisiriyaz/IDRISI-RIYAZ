<?php

session_start();
include 'DBconfig.php';
if (!isset($_SESSION['cart'])) {
    echo "<script>alert('cart is empty!');</script>";
    echo "<script>window.location.href='services.php';</script>";
} else if (empty($_SESSION['cart'])) {
    echo "<script>alert('cart is empty!');</script>";
    echo "<script>window.location.href='services.php';</script>";
} elseif(!isset($_SESSION['login']))
{
  header("Location: index.php");
}else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <style>

        .black-border{
            border: 1px solid black;
            position: relative;
            left:48rem;
            height:100%;
        }

    </style>

</head>
<body>

<?php include 'partials/select_service_header.php'?>
<br><br><br>
<center>

        <h1>Status: Pending..</h1>
        <h2>Please Stay Here For A While, Until Garage Takes Your Request</h2>

</center>
<br>
<br>

<div class="col-sm-9 cart-container black-border" style="box-shadow: rgb(239, 239, 239) 0px 0px 8px 3px; width: 405px; height:230px;">

    <center>
        <h3 style="margin:0 auto;margin-bottom:5px;">Your Quote</h3>
    </center>
    <div id="services"></div>
    <hr style="margin-top: 5px;margin-bottom: 5px;">
    
</div>

<div id="his"></div>

<script>
    //following function will load cart from sessions to div which has id services.
    function load_quote(){

    $("#services").load('load_for_status.php');

    }

    //loading session cart to qoute after every 1sec.
    setInterval(load_quote, 1000);

    function go_history(){

        $("#his").load('go_history.php');

    }

    setInterval(go_history, 1000);

</script>


</body>

<?php

    }

?>