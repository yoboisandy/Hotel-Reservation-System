<?php
include "model/DbModel.php";

if(empty($_POST)){
    include 'view/addUser.php'; 
    return;
} 

 try {
    $flag = empty($_POST['txtFName']) || empty($_POST['txtLName']) || empty($_POST['txtEmail']) || empty($_POST['txtPhone']) || empty($_POST['txtAddress'])  || empty($_POST['txtPassword'])  || empty($_POST['txtUserType'])  ;
    // check user input data
    if($flag){
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addUser.php';
        return;
    }

    // validate password
    $password = filterText($_POST['txtPassword']);
    if(strlen($password)<8){
        $error['body'] = 'Password must contain atleast 8 characters';
        $error['title'] = 'Danger!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addUser.php';
        return;
    }


    $email = filterText($_POST['txtEmail']);
    $validate = find_user_by_email($email);
    if($validate){
        $error['body'] = 'Email already Exists';
        $error['title'] = 'Danger!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addUser.php';
        return;
    }
    
    $fname = filterText($_POST['txtFName']);
    $lname = filterText($_POST['txtLName']);
    $phone = filterText($_POST['txtPhone']);
    $user_type = filterText($_POST['txtUserType']);
    $address = filterText($_POST['txtAddress']);

    $user = add_new_user($fname, $lname, $email, $phone, $address, $password,time(), $user_type);
    if ($user) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully Added Admin.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=userManage");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
}


catch(Exception $ex){
    throwError();
}

?>