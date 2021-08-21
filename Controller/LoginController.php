<?php
include "model/DbModel.php";

if (empty($_POST)) {
    include 'view/login.php';
    return;
}
try {
    if (empty($_POST['txtEmail']) || empty($_POST['txtPassword'])) {

        $error['body'] = 'email and password are required.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/login.php';
        return;
    }

    $email = filterText($_POST['txtEmail']);
    $password = filterText($_POST['txtPassword']);
    $user = db_login($email, $password);

    if ($user) {
        $_SESSION['user']['login'] = TRUE;
        $_SESSION['user']['user_id'] = $user['u_id'];
        $_SESSION['user']['user_name'] = $user['u_fname'];
        $_SESSION['user']['email'] = $user['u_email'];
        $_SESSION['user']['phone'] = $user['u_phone'];
        $_SESSION['user']['type'] = $user['u_type'];

        if ($user["u_type"] == 1)
            header("location:Admin-Zone/");
        else
            redirect('home');
    } else {
        $error['body'] = 'No user found with given email and Password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/login.php';
        return;
    }
} catch (Exception $ex) {
    include 'Controller/ErrorController.php';
}
