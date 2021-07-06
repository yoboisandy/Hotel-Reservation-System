<?php
include "model/DbModel.php";

if(empty($_POST)){
    include 'view/addSuite.php'; 
    return;
} 

try {
    $flag = empty($_POST['txtSuiteName']) || empty($_POST['txtBed']) || empty($_POST['txtKitchen']) || empty($_POST['txtLivingRoom']) || empty($_POST['txtWashroom']) || empty($_POST['txtPeople']) || empty($_POST['txtPrice']) ;
    // check user input data
    if($flag){
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addSuite.php';
        return;
    }

    // validate password
    $suiteName = filterText($_POST['txtSuiteName']);
    


    $beds = filterText($_POST['txtBed']);
    $kitchen = filterText($_POST['txtKitchen']);
    $livingRoom = filterText($_POST['txtLivingRoom']);
    $washrooms = filterText($_POST['txtWashroom']);
    $peoples = filterText($_POST['txtPeople']);
    $price = filterText($_POST['txtPrice']);
    $target = "";
    if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/uploaded/suites/".basename($_FILES['fileToUpload']['name']);
      //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
    }

    $room = add_new_suite($suiteName,$target, $beds, $kitchen,$livingRoom, $washrooms, $peoples, $price);
    if ($room) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully Added Suite.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=accommodationManage");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
}


catch(Exception $ex){
    throwError();
}

?>