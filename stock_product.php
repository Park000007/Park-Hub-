<?php
$id = $_GET['id'];
$xpluem = new classadmin_bypluem;
$show_stock_product_id = $xpluem->show_stock_product_id($id);
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card card-backend">
                <div class="card-body">
                    <div class="mt-2">
                        <span>ชื่อสินค้า</span>
                        <input type="text" class="form-control" value="<?php echo $show_stock_product_id['name']; ?>" id="edit_name_stock_product" placeholder="ชื่อสินค้า">
                    </div>
                    <div class="mt-2">
                        <span>รายการ</span>
                        <input type="text" class="form-control" value="<?php echo $show_stock_product_id['list']; ?>" id="edit_list_stock_product" placeholder="รายการ">
                    </div>
                    <div class="mt-2">
                        <span>รูปภาพสินค้า</span>
                        <input type="text" class="form-control" value="<?php echo $show_stock_product_id['image']; ?>" id="edit_image_stock_product" placeholder="รูปภาพสินค้า">
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-success w-100" onclick="submit_edit_stock_product('<?php echo $_GET['id']; ?>');">บันทึกข้อมูล</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../../assets/js/settings_stock_product.js"></script>