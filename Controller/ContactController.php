<?php
include 'Model/DbModel.php';
/* include "view/contactus.php"; */
if (empty($_POST)) {
    include "View/contact.php";
    return;
}
try {
    if (empty($_POST['name']) ||  empty($_POST['email']) || empty($_POST['phone']) ||  empty($_POST['message'])) {

        $error['body'] = 'All Fields should be filled';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'View/contact.php';
        return;
    }
    $name = filterText($_POST['name']);
    $phone = filterText($_POST['phone']);
    $email = filterText($_POST['email']);
    $message = filterText($_POST['message']);

    $result = contactus($name, $email, $phone, $message);
    if ($result) {
        redirect('home');
        return;
    } else {
        $error['body'] = 'unable to add your detail try again please';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'View/contact.php';
        return;
    }
} catch (Exception $e) {
    throwError();
}
