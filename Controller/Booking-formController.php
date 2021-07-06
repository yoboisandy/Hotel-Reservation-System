<?php 
include'Model/Dbmodel.php';
if(empty($_SESSION['user']['login'])){
    redirect('login');
    die();
}
include'View/booking-form.php';