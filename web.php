<?php
$pluem = new classadmin_bypluem;
$show_web_config = $pluem->show_web_config();
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-backend">
                <div class="card-body">
                    <div class="mt-2">
                        <span>ชื่อเว็บไซต์</span>
                        <input type="text" class="form-control" id="set_title" value="<?php echo $show_web_config['title']; ?>" placeholder="ชื่อเว็บไซต์">
                    </div>
                    <div class="mt-2">
                        <span>โลโก้เว็บไซต์</span>
                        <input type="text" class="form-control" id="set_logo" value="<?php echo $show_web_config['logo']; ?>" placeholder="โลโก้เว็บไซต์">
                    </div>
                    <div class="mt-2">
                        <span>เบอร์รับเงิน</span>
                        <input type="text" class="form-control" id="set_phone" value="<?php echo $show_web_config['phone']; ?>" placeholder="เบอร์รับเงิน">
                    </div>
                    <div class="mt-2">
                        <span>ติดต่อฉัน</span>
                        <input type="text" class="form-control" id="set_contact" value="<?php echo $show_web_config['contact']; ?>" placeholder="ใส่ลิงค์ DISCORD">
                    </div>
                    <div class="mt-2">
                        <span>เปลี่ยน Banner</span>
                        <input type="text" class="form-control" id="set_banner" value="<?php echo $show_web_config['banner']; ?>" placeholder="ลิงค์ภาพ Banner">
                    </div>
                    <div class="mt-2">
                        <span>คำอธิบายร้าน</span>
                        <input type="text" class="form-control" id="set_info" value="<?php echo $show_web_config['info']; ?>" placeholder="คำอธิบาย">
                    </div>
                    <div class="mt-2">
                        <span>ลิงค์เพจติดหน้าเว็บ</span>
                        <input type="text" class="form-control" id="set_page" value="<?php echo $show_web_config['page']; ?>" placeholder="ลิงค์เพจหน้าเว็บ">
                    </div>
                    <div class="mt-2">
                        <span>คลิปสอนใช้</span>
                        <input type="text" class="form-control" id="set_clip" value="<?php echo $show_web_config['clip']; ?>" placeholder="ลิงค์คลิปสอนใช้">
                    </div> 
                    <div class="mt-2">
                        <button class="btn btn-success w-100" id="submit_set_web">บันทึกข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../../assets/js/settings_web.js"></script>