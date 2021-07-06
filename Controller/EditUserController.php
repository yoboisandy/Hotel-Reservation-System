<?php
include "model/DbModel.php";



if (empty($_GET['id'])) {
    $error['body'] = 'User ID Required';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/edituser.php';
        die;
}



$id = $_GET['id'];

if (empty($_POST)) {
    $user_data = where('user_tb', 'u_id', '=', $_GET['id']);

    if (empty($user_data)) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        redirect('edituser');
        return;
    }

    if (isset($_POST)) {
        include "view/edituser.php";
        return;
    }
}


$u_fname = request('txtFName');
$u_lname = request('txtLName');
$u_email = request('txtEmail');
$u_phone = request('txtPhone');
$u_address = request('txtAddress');
$u_password = request('txtPassword');
$u_type = request('txtUserType');


if (empty($u_fname) || empty($u_lname) || empty($u_email) ) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        return;
}

if(strlen($u_password)<8){
    $error['body'] = 'Password must contain atleast 8 characters';
    $error['title'] = 'Danger!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    include 'view/edituser.php';
    return;
} 


$data = compact('u_fname', 'u_lname', 'u_email', 'u_phone', 'u_address','u_password','u_type');

if (!empty($u_password)) {
    $data['u_password'] = $u_password;
}

update('user_tb', 'u_id', $_GET['id'], $data);
if ($data) {
    $msg['title']='Success!!';
    $msg['body']="You have successfully Updated.";
    $msg['type']='success';
    setFlash('message', $msg);
    header("location:". $base_url . "?r=userprofile&id=". $_SESSION['user']['user_id']);

} else {
throwError(500, 'Unable to complete your request.');
}

include "view/edituser.php";

?>