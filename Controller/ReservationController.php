<?php
include "model/DbModel.php";

if (empty($_POST)) {
    include 'view/booking-form.php';
    return;
}



try {
    $flag = (empty($_POST['txtGuests']) || empty($_POST['txtCheckIn']) || empty($_POST['txtCheckOut']));
    $room_id = $_POST['txtRoomId'];
    $user_id = $_POST['userid'];

    $guests = $_POST['txtGuests'];
    $checkin = $_POST['txtCheckIn'];
    $checkout = $_POST['txtCheckOut'];

    // check user input data
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        header("location:" . $base_url . "?r=booking-form&id=" . $room_id);
        return;
    }



    $room = where('rooms', 'id', '=', $room_id);


    if ($guests > ($room['people'])) {
        $error['body'] = 'Guests are more than the room\'s capacity';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        header("location:" . $base_url . "?r=booking-form&id=" . $room_id);
        return;
    }


    // $reservation_booked = query("SELECT * FROM `reservations` WHERE ((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout')) AND (status != 'canceled' AND status != 'checked out' )");
    $reservation_booked = query("SELECT * FROM `reservations` WHERE ((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout') OR ('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout)) AND (status != 'canceled' AND status != 'checked out' )");


    $booked_rooms = [];
    foreach ($reservation_booked as $item) {
        $booked_rooms[] = $item['room_id'];
    }

    // var_dump($reservation_booked);
    // die();

    if (in_array($room_id, $booked_rooms)) {
        $error['body'] = 'Room Already Booked';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        header("location:" . $base_url . "?r=booking-form&id=" . $room_id);
        return;
    }




    $reservation = insert_reservation($room_id, $user_id, $guests, $checkin, $checkout);
    send_mail("admin@risenshine.com", "New reservation request", "You have received a reservation request from " . $_SESSION['user']['user_name']);
    send_mail($_SESSION['user']['email'], "Reservation request sent", "Your reservation request for " . $room['name'] . " has been sent");
    if ($reservation) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "Your reservation request has been sent.";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=booking");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}
