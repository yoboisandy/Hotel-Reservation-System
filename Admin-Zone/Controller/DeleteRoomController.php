<?php 
include 'model/DbModel.php';

$id = $_GET['id'];

if(!find_id('rooms', 'id', $id)){
    echo "no data found";
}else{
    delete_room_by_id($id);
    $msg['title']='Success!!';
    $msg['body']="You have successfully Deleted.";
    $msg['type']='success';
    setFlash('message', $msg);
    header("location:" . $base_url . "?r=accommodationManage");
}