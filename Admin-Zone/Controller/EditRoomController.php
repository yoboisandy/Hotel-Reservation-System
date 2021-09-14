<?php
include "model/DbModel.php";

if (empty($_GET['id'])) {
    $error['body'] = 'Room ID Required';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    include 'view/editRoom.php';
    die;
}

$id = $_GET['id'];

$room_data = where('rooms', 'id', '=', $_GET['id']);

if (empty($room_data)) {
    echo ('No User Data Found!');
    // header("Location: ?r=usermanage");
    die;
}

if (empty($_POST)) {
    include "view/editRoom.php";
    return;
}

$target = $room_data['image'];

if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $target = "images/uploaded/" . basename($_FILES['fileToUpload']['name']);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
}

$name = request('txtRoomName');
$image = $target;
$beds = request('txtBed');
$washroom = request('txtWashroom');
$people = request('txtPeople');
$price = request('txtPrice');


if (empty($name) || empty($image) || empty($beds) || empty($washroom) || empty($people) || empty($price)) {
    $error['body'] = 'All input field are required.';
    $error['title'] = 'Danger!!';
    $error['type'] = 'danger';
    setFlash('message', $error);
    return;
}


$data = compact('name', 'beds', 'washroom', 'people', 'price', 'image');


update('rooms', 'id', $_GET['id'], $data);
if ($data) {
    $msg['title'] = 'Success!!';
    $msg['body'] = "You have successfully Updated Room Info.";
    $msg['type'] = 'success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=accommodationManage");
} else {
    throwError(500, 'Unable to complete your request.');
}
