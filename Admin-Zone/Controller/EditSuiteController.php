<?php
include "model/DbModel.php";

if (empty($_GET['id'])) {
    $error['body'] = 'Room ID Required';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/editSuite.php';
        die;
}

$id = $_GET['id'];

if (empty($_POST)) {
    $suite_data = where('suites', 'id', '=', $_GET['id']);

    if (empty($suite_data)) {
        echo ('No User Data Found!');
       die;
    }

    if (isset($_POST)) {
        include "view/editSuite.php";
        return;
    }
}


$name = request('txtSuiteName');
// $image = request('txtLName');
$bed = request('txtBed');
$kitchen = request('txtKitchen');
$living_room = request('txtLivingRoom');
$washroom = request('txtWashroom');
$people = request('txtPeople');
$price = request('txtPrice');


if (empty($name) || empty($bed) || empty($kitchen) || empty($living_room) || empty($washroom) || empty($people) || empty($price) ) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        return;
}


$data = compact('name', 'bed', 'kitchen', 'living_room', 'washroom', 'people', 'price');


update('suites', 'id', $_GET['id'], $data);
if ($data) {
    $msg['title']='Success!!';
    $msg['body']="You have successfully Updated Suite Info.";
    $msg['type']='success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=accommodationManage");
   /*  redirect('usermanage'); */
} else {
    throwError(500, 'Unable to complete your request.');
}