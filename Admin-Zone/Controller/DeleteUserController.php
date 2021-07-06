<?php 
include 'model/DbModel.php';

$id = $_GET['id'];

if(!find_id('user_tb', 'u_id', $id)){
    echo "no data found";
}else{
    delete('user_tb', $id);
    $msg['title']='Success!!';
    $msg['body']="You have successfully Deleted.";
    $msg['type']='success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=userManage");
}