<?php 
unset ($_SESSION['user']['login']);
unset($_SESSION['user']['user_id']);
unset($_SESSION['user']['user_name']);
header("location:../?r=login");
?>