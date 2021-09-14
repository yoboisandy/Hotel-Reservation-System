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


$reservation_data = where('reservations', 'id', '=', $_GET['id']);
if (empty($_POST)) {

    if (empty($reservation_data)) {
        echo ('No User Data Found!');
        // header("Location: ?r=usermanage");
        die;
    }

    if (isset($_POST)) {
        include "view/editBooking.php";
        return;
    }
}


$room_data = where('rooms', 'id', '=', $reservation_data['room_id']);



if ($reservation_data['status'] == "canceled" || $reservation_data['status'] == "booked" || $reservation_data['status'] == "checked out") {
    $error['body'] = 'You can\'t edit now';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    redirect('booking');
    return;
}


$room_id = $_POST['txtRoomId'];
$user_id = $_POST['userid'];
$guests = $_POST['txtGuests'];
$checkin = $_POST['txtCheckIn'];
$checkout = $_POST['txtCheckOut'];

if ($guests > $room_data['people']) {
    $error['body'] = 'No. of guests are more than room\'s capacity';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    include 'view/editBooking.php';
    return;
}


$flag = (empty($_POST['txtGuests']) || empty($_POST['txtCheckIn']) || empty($_POST['txtCheckOut']));

if ($flag) {
    $error['body'] = 'All input field are required.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    header("location:" . $base_url . "?r=editBooking&id=" . $id);
    return;
}

//check
if ($checkin == $reservation_data['checkin'] && $checkout == $reservation_data['checkout']) {
    $data = compact('room_id', 'user_id', 'guests');
} else {
    $data = compact('room_id', 'user_id', 'guests', 'checkin', 'checkout');

    // $reservation_booked = query("SELECT * FROM `reservations` WHERE (((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout')) AND (status != 'canceled' AND status != 'checked out')) AND (id != $id)");
    $reservation_booked = query("SELECT * FROM `reservations` WHERE (((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout') OR ('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout)) AND (status != 'canceled' AND status != 'checked out' )) AND (id != $id)");


    $booked_rooms = [];
    foreach ($reservation_booked as $item) {
        $booked_rooms[] = $item['room_id'];
    }

    if (in_array($room_id, $booked_rooms)) {
        $error['body'] = 'Room Already Booked';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        header("location:" . $base_url . "?r=editBooking&id=" . $id);
        return;
    }
}






update('reservations', 'id', $id, $data);

if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Updated.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=booking");
} else {
    throwError(500, 'Unable to complete your request.');
}
echo ('User updated successfully!');
