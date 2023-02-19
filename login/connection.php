<?php
session_start();
require_once 'config.php';

if (isset($_POST['Email'])&& isset($_POST['Password'])){

    $Email = htmlspecialchars($_POST['Email']);
    $Password = htmlspecialchars($_POST['Password']);

    $check 

}else header ('Location: newaccount.php');

?>

