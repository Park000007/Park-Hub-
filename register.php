<?php
include '../../config/class.php';
$pluem = new classweb_bypluem;
if(empty($_POST['username'] and $_POST['password'] and $_POST['password_cm'] and $_POST['email'] and $_POST['phonenumber'])){
    echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกข้อมูลให้ครบ"));
}elseif($_POST['password'] != $_POST['password_cm']){
    echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกรหัสให้ตรงกัน"));
}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกอีเมลให้ถูกนะจ๊ะ"));
}elseif(is_numeric($_POST['phonenumber']) != true){
    echo json_encode(array('status'=>"error",'message'=>"กรุณากรอกเบอร์เป็นตัวเลขน่ะจ๊ะ"));
}elseif(strlen($_POST['phonenumber']) != 10){
    echo json_encode(array('status'=>"error",'message'=>"เบอร์โทรศัพท์เป็นตัวเลข 10 น่ะจ๊ะ"));
}else{
    $register = $pluem->register($_POST['username'],$_POST['password'],$_POST['email'],$_POST['phonenumber'],$_POST['captcha']);
}
?>