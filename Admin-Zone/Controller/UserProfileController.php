<?php include 'Model/Dbmodel.php'; 


$id = $_GET['id'];

// $user_data = find_user_by_id($id);
$user_data = where('user_tb', 'u_id', '=', $_GET['id']);



if (empty($user_data)) {
    echo ('No User Data Found!');
    die;
}




include 'View/userProfile.php'
?>