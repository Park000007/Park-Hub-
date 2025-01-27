<?php
$id = $_GET['id'];
$xpluem = new classadmin_bypluem;
$show_game_new_id = $xpluem->show_game_new_id($id);
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-backend">
                <div class="card-body">
                <div class="mt-2">
                        <span>หัวข้อสินค้า</span>
                        <input type="text" class="form-control" value="<?php echo $show_game_new_id['name']; ?>" id="edit_name_game_new" placeholder="รายละเอียดสินค้า">
                    </div>
                    <div class="mt-2">
                        <span>รายละเอียดสินค้า</span>
                        <input type="text" class="form-control" value="<?php echo $show_game_new_id['details']; ?>" id="edit_details_game_new" placeholder="รายละเอียดสินค้า">
                    </div>
                    <div class="mt-2">
                        <span>รูปภาพสินค้า</span>
                        <input type="text" class="form-control" value="<?php echo $show_game_new_id['image']; ?>" id="edit_image_game_new" placeholder="รูปภาพสินค้า">
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="submit_edit_game_new('<?php echo $_GET['id']; ?>');">บันทึกข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../../assets/js/settings_game_new.js"></script>