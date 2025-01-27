
<?php
include '../../config/class.php';
$pluem = new classadmin_bypluem;
if(empty($_SESSION['id'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณาเข้าสู่ระบบ"));
}elseif($_POST['type'] == "del_stock_product"){
    if(empty($_POST['id'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $del_stock_product = $pluem->del_stock_product($_POST['id']);
    }
}elseif($_POST['type'] == "add_stock_product"){
    if(empty($_POST['name'] and $_POST['list'] and $_POST['image'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $add_stock_product = $pluem->add_stock_product($_POST['name'],$_POST['list'],$_POST['image']);
    }
}elseif($_POST['type'] == "edit_stock_product"){
    if(empty($_POST['name'] and $_POST['list'] and $_POST['image'] and $_POST['id'])){
        echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
    }else{
        $edit_stock_product = $pluem->edit_stock_product($_POST['name'],$_POST['list'],$_POST['image'],$_POST['id']);
    }
}
?>