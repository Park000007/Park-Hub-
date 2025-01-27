<?php
include '../../config/class.php';
$pluem = new classadmin_bypluem;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif($_POST['type'] == "del_script"){
    if(empty($_POST['id_product'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $del_script = $pluem->del_script($_POST['id_product']);
    }
}elseif($_POST['type'] == "add_script"){
    if(empty($_POST['name_script'] and $_POST['image_script'] and $_POST['price_script'] and $_POST['details_script'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $add_script = $pluem->add_script($_POST['name_script'],$_POST['image_script'],$_POST['price_script'],$_POST['details_script']);
    }
}elseif($_POST['type'] == "edit_script"){
    if(empty($_POST['name_ed'] and $_POST['image_ed'] and $_POST['price_ed'] and $_POST['details_ed']and $_POST['id_ed'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $edit_script = $pluem->edit_script($_POST['name_ed'],$_POST['image_ed'],$_POST['price_ed'],$_POST['details_ed'],$_POST['id_ed']);
    }
}
?>