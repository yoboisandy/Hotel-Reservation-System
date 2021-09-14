<?php
include "model/DbModel.php";

if (empty($_POST)) {
    redirect('accomodations');
    return;
}

$checkin = request('checkin');
$checkout = request('checkout');

// // check user input data
if (empty($checkin) || empty($checkout)) {
    $error['body'] = 'All input field are required.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    redirect('accomodations');
    return;
}


// $reservation_booked = query("SELECT * FROM `reservations` WHERE (checkin >  '$checkin' AND checkout < '$checkout') AND (status != 'canceled' AND status != 'checked out' )");
//aad
// $reservation_booked = query("SELECT * FROM `reservations` WHERE ((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout')) AND (status != 'canceled' AND status != 'checked out' )");
//nis
// $reservation_booked = query("SELECT * FROM `reservations` WHERE (('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout)) AND (status != 'canceled' AND status != 'checked out' )");
//me
$reservation_booked = query("SELECT * FROM `reservations` WHERE ((checkin BETWEEN '$checkin' AND '$checkout') OR (checkout BETWEEN '$checkin' AND '$checkout') OR ('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout)) AND (status != 'canceled' AND status != 'checked out' )");


// echo "<pre>";
// var_dump($reservation_booked);
// echo "</pre>";
// die();

$booked_rooms = [];
foreach ($reservation_booked as $item) {
    $booked_rooms[] = $item['room_id'];
}

if (count($booked_rooms) == 0) {
    $query = "select * from `rooms`";
} else {

    $query = "SELECT * FROM `rooms` WHERE id NOT IN (";
    $total = count($booked_rooms);
    $index = 1;
    foreach ($booked_rooms as $item) {
        $query .= $item;
        if ($index < $total) {
            $query .= ", ";
        }
        $index++;
    }
    $query .= ")";
}

$available_rooms = query($query);



// echo "<pre>";
// var_dump($available_rooms);
// echo "</pre>";
// die();

include "view/accommodations.php";
// var_dump($rooms);
