<?php
include "model/DbModel.php";

if (empty($_POST)) {
    include 'view/addRoom.php';
    return;
}

try {
    $flag = empty($_POST['txtRoomName']) || empty($_POST['txtBed']) || empty($_POST['txtWashroom']) || empty($_POST['txtQuantity']) || empty($_POST['txtPeople'])  || empty($_POST['txtPrice']);
    // check user input data
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addRoom.php';
        return;
    }

    // validate password
    $roomName = filterText($_POST['txtRoomName']);



    $beds = filterText($_POST['txtBed']);
    $washrooms = filterText($_POST['txtWashroom']);


    $peoples = filterText($_POST['txtPeople']);
    $price = filterText($_POST['txtPrice']);
    $quantity = $_POST['txtQuantity'];
    $target = "";
    if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/uploaded/" . basename($_FILES['fileToUpload']['name']);
        //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
    }

    $room = add_new_room($roomName, $target, $beds, $washrooms, $peoples, $quantity, $price);
    if ($room) {
        $msg['title'] = 'Success!!';
        $msg['body'] = "You have successfully Added Room.";
        $msg['type'] = 'success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=accommodationManage");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}
