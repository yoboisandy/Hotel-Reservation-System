<?php
include "model/DbModel.php";

if (empty($_GET['id'])) {
    $error['body'] = 'User ID Required';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/editUser.php';
        die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $user_data = where('user_tb', 'u_id', '=', $_GET['id']);

    if (empty($user_data)) {
        echo ('No User Data Found!');
        // header("Location: ?r=usermanage");
    die;
    }

    if (isset($_POST)) {
        include "view/editUser.php";
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
    include 'view/editUser.php';
    return;
}


$data = compact('u_fname', 'u_lname', 'u_email', 'u_phone', 'u_address', 'u_password', 'u_type');


update('user_tb', 'u_id', $_GET['id'], $data);
if ($data) {
    $msg['title']='Success!!';
    $msg['body']="You have successfully Updated.";
    $msg['type']='success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=userManage");
   /*  redirect('usermanage'); */
} else {
    throwError(500, 'Unable to complete your request.');
}
echo ('User updated successfully!');
// header("Location: ?r=usermanage");