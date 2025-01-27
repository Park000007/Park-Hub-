<?php
include '../../config/class.php';
$pluem = new classadmin_bypluem;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif($_POST['type'] == "add_game_new"){
    if(empty($_POST['name'] and $_POST['details'] and $_POST['image'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $add_game_new = $pluem->add_game_new($_POST['name'],$_POST['details'],$_POST['image']);
    }
}elseif($_POST['type'] == "del_game_new"){
    if(empty($_POST['id'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $del_game_new = $pluem->del_game_new($_POST['id']);
    }
}elseif($_POST['type'] == "edit_game_new"){
    if(empty($_POST['name'] and $_POST['details'] and $_POST['image'] and $_POST['id'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $edit_game_new = $pluem->edit_game_new($_POST['name'],$_POST['details'],$_POST['image'],$_POST['id']);
    }
}
?>