<?php
include "model/DbModel.php";

if (empty($_GET['id'])) {
    $error['body'] = 'User ID Required';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    include 'View/editUser.php';
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
$phone_regx = "/^[0-9]{10}$/";

if (!preg_match($phone_regx, $u_phone)) {
    $error['body'] = 'Phone number must contain 10 digit of number';
    $error['title'] = 'Danger!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    header("location:$base_url?r=editUser&id=$id");
    return;
}


$u_address = request('txtAddress');
$u_password_check = request('txtPassword');
$u_type = request('txtUserType');


if (empty($u_fname) || empty($u_lname) || empty($u_email)) {
    $error['body'] = 'All input field are required.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    return;
}


if ($u_password_check == "") {
    $data = compact('u_fname', 'u_lname', 'u_email', 'u_phone', 'u_address', 'u_type');
} else {
    if (strlen($u_password_check) < 8) {
        $error['body'] = 'Password must contain atleast 8 characters';
        $error['title'] = 'Danger!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        header("location:$base_url?r=editUser&id=$id");
        return;
    }

    $u_password = md5($u_password_check);
    $data = compact('u_fname', 'u_lname', 'u_email', 'u_phone', 'u_address', 'u_password', 'u_type');
}




update('user_tb', 'u_id', $_GET['id'], $data);
if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Updated.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=userProfile&id=" . $id);
} else {
    throwError(500, 'Unable to complete your request.');
}
echo ('User updated successfully!');
