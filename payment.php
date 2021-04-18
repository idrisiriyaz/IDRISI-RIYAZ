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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 
 <style>
 
 .cart-container {
    border-radius: 4px;
}
#main-container1{
    min-height: 260px;
    margin: auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
}
 </style>
 
 </head>
 <div class="container">
  <div class="py-5 text-center">
    
    <h2>Checkout form</h2>
    <hr class="mb-4">

  
    <div class="col-sm-6">
                <div class="row">
       

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href='add_to_status.php'" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

</div>

<div class="col-sm-6 cart-container" style="box-shadow: rgb(239, 239, 239) 0px 0px 8px 3px; position: fixed; right: 25px; width: 405px; height:230px; z-index: 9999999; border:;" id="main-container1">
                    
                    <center>
                        <h3 style="margin:0 auto;margin-bottom:5px;">Your Quote</h3>
                    </center>
                   
                    <!-- below div tag is will have all cart details. -->
                    <div id="services"></div>

                    <hr style="margin-top: 5px;margin-bottom: 5px;">
                    
                    
                    <div>
                      <button class="btn btn-success allServiceDetailsCheck"  onclick="stepToGetAddress();ga('send', 'event', 'Checkout', 'click', 'Book Now');">Book Now <i class="fa fa-paper-plane"></i></button>
                    </div>

                  
            </div>
    
    
    
    </div>
</div>
<?php } ?>

<script>
//following function will load cart from sessions to div which has id services.
function load_quote(){

$("#services").load('load_quote.php');

}

//loading session cart to qoute after every 1sec.
setInterval(load_quote, 1000);
</script>