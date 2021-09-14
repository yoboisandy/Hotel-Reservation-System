<?php

include "model/DbModel.php";

$id = $_GET['id'];


$reservation = where('reservations', 'id', '=', $id);
if ($reservation['status'] == "canceled" || $reservation['status'] == "booked" || $reservation['status'] == "checked out") {
    $error['body'] = 'You can\'t cancel now';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    redirect('booking');
    return;
}

$data = ["status" => "canceled"];

update('reservations', 'id', $id, $data);

if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully canceled booking.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=booking");
} else {
    throwError(500, 'Unable to complete your request.');
}
