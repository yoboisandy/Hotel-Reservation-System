<?php

include "model/DbModel.php";

if (empty($_GET['id'])) {
    $error['body'] = 'Reservation ID Required';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    include 'View/editUser.php';
    die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $reservation_data = where('reservations', 'id', '=', $_GET['id']);

    if (empty($reservation_data)) {
        echo ('No Reservation Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/editBooking.php";
        return;
    }
}


$status = $_POST['status'];



$data = compact('status');




update('reservations', 'id', $id, $data);

if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Updated.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=reservations");
} else {
    throwError(500, 'Unable to complete your request.');
}
echo ('User updated successfully!');
