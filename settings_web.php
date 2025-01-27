<?php
include '../../config/class.php';
$pluem = new classadmin_bypluem;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif(empty($_POST['set_title'] and $_POST['set_logo'] and $_POST['set_phone'] and $_POST['set_contact'] and $_POST['set_banner'] and $_POST['set_info'] and $_POST['set_page'] and $_POST['set_clip'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
}else{
    $settings_web = $pluem->settings_web($_POST['set_title'],$_POST['set_logo'],$_POST['set_phone'],$_POST['set_contact'],$_POST['set_banner'],$_POST['set_info'],$_POST['set_page'],$_POST['set_clip']);
}
?>