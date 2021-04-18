<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_email']);
    header('Location: http://localhost/mymech/');
   
}

?>