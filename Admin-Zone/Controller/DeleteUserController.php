<?php
include 'model/DbModel.php';

$id = $_GET['id'];

$reservation = where('reservations', 'user_id', '=', $id);
if ($reservation) {
    $error['body'] = 'User can\'t be deleted now.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    header("location:" . $base_url . "?r=userManage");
    return;
}


if (!find_id('user_tb', 'u_id', $id)) {
    echo "no data found";
} else {
    delete('user_tb', $id);
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Deleted.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=userManage");
}
