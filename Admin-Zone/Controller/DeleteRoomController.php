<?php
include 'model/DbModel.php';

$id = $_GET['id'];

$reservation = where('reservations', 'room_id', '=', $id);
if ($reservation) {
    $error['body'] = 'Room can\'t be deleted now.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    header("location:" . $base_url . "?r=accommodationManage");
    return;
}

if (!find_id('rooms', 'id', $id)) {
    echo "no data found";
} else {
    delete_room_by_id($id);
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Deleted.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=accommodationManage");
}
