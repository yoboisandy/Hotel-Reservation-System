<?php

require 'pdo.php';

function db_connect() {
    $db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "risenshine_db";
    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function signup_new_user($fname, $lname, $email, $phone, $address, $password, $created_date) {
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO user_tb(u_fname, u_lname, u_email,u_phone,u_address,u_password,u_created_date) values(?,?,?,?, ?,?,?)");
    $stmt->bind_param('ssssssi', $fname, $lname, $email, $phone, $address, $password,$created_date);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}


function find_user_by_email($email) {
    $conn = db_connect();
    $sql = "SELECT * FROM user_tb where u_email='$email' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function find_user_by_id($id) {
    $conn = db_connect();
    $sql = "SELECT * FROM user_tb where u_id='$id' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}


function db_login($email, $password){
    $conn = db_connect();
    $sql = "SELECT u_id, u_fname, u_type FROM  user_tb where u_email = '$email' and u_password = '$password' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row;
    }else{
        return false;
    }
}
// for contact us table 
function contactus($name, $email, $phone, $message)
{
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO contact_tb(name,email,phone,message) values(?,?,?,?)");
    $stmt->bind_param('ssss', $name, $email, $phone, $message);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}

function view_rooms(){
    $conn = db_connect();
$sql = "select * from rooms";
$result = $conn->query($sql);
$conn->close();
if($result->num_rows > 0)
{
    return $result;
}
else
{
    return false;
}

}


function view_suites(){
    $conn = db_connect();
    $sql = "select * from suites";
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0)
    {
        return $result;
    }
    else
    {
        return false;
    }
}


?>