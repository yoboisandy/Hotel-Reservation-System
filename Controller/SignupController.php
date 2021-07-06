<?php
include "model/DbModel.php";

if(empty($_POST)){
    include 'view/signup.php'; 
    return;
} 

 try {
    $flag = empty($_POST['txtFName']) || empty($_POST['txtLName']) || empty($_POST['txtEmail']) || empty($_POST['txtPhone']) || empty($_POST['txtAddress'])  || empty($_POST['txtPassword']) /*|| empty($_POST['txtConfirmPassword']) */;

    // check user input data
    if($flag){
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }

    // validate password
    $password = filterText($_POST['txtPassword']);
    if(strlen($password)<8){
        $error['body'] = 'Password must contain atleast 8 characters';
        $error['title'] = 'Danger!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }
    


    $email = filterText($_POST['txtEmail']);
    $validate = find_user_by_email($email);
    if($validate){
        $error['body'] = 'Email already Exists';
        $error['title'] = 'Danger!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }
    
    $fname = filterText($_POST['txtFName']);
    $lname = filterText($_POST['txtLName']);
    $phone = filterText($_POST['txtPhone']);
    $address = filterText($_POST['txtAddress']);
    /*$confirmpassword = filterText($_POST['txtConfirmPassword']);*/
    $user = signup_new_user($fname, $lname, $email, $phone, $address, $password,/*  $confirmpassword, */ time());
    if ($user) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully signup.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=login");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
}


catch(Exception $ex){
    throwError();
}

?>