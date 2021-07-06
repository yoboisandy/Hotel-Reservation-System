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


function view_users(){
    $conn = db_connect();
$sql = "select * from user_tb";
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

function get_contact_us() {
    $conn = db_connect();
    $sql = "SELECT * FROM contact_tb";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
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

function add_new_user($fname, $lname, $email, $phone, $address, $password, $created_date, $user_type) {
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO user_tb(u_fname, u_lname, u_email,u_phone,u_address,u_password,u_created_date, u_type) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssii', $fname, $lname, $email, $phone, $address, $password,$created_date,$user_type);
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

function add_new_room($roomName, $target, $beds, $washrooms, $peoples, $price){
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO rooms(name, image, beds, washroom,people,price) values(?,?,?,?,?,?)");
    $stmt->bind_param('ssssss', $roomName,$target, $beds, $washrooms, $peoples, $price);
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

function add_new_suite($suiteName,$target, $beds, $kitchen,$livingRoom, $washrooms, $peoples, $price){
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO suites(name, image, bed, kitchen, living_room, washroom, people, price) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssss', $suiteName,$target, $beds, $kitchen,$livingRoom, $washrooms, $peoples, $price);
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

function update_user_by_id($name, $email, $password, $address, $phone, $target,$id) {
    $conn = db_connect();
    $stmt = $conn->prepare("update user set uname = ? , email = ? , password = ? , address= ? , phone = ? , imageurl = ? where user_id = ?");
    $stmt->bind_param('ssssssi', $name, $email, $password, $address, $phone, $target, $id);
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

function delete_room_by_id($id) {
    $conn = db_connect();
    $stmt = $conn->prepare("DELETE FROM rooms WHERE id = ?");
    $stmt->bind_param('i', $id);
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
function delete_suite_by_id($id) {
    $conn = db_connect();
    $stmt = $conn->prepare("DELETE FROM suites WHERE id = ?");
    $stmt->bind_param('i', $id);
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