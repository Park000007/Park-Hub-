<?php
$pluem = new classweb_bypluem;
$stock_product = $pluem->stock_product();
?>
<div class="container">
<br>
<br>
<div class="row">
    <div class="col-md-6 col-xl-6 col-12">
    <span><h4><a>Category หมวดหมู่ต่างๆ</span></a></h4>
    </div>
    <div class="d-none d-xl-block d-md-block mt-2 col-md-6 col-xl-6 col-6">
    </div>
</div>
<br>
<div class="row">
            <?php if (empty($stock_product)) { ?>
                    <div class="col-12 mt-2">
                        <h3 class='text-center'>ไม่มีสินค้า ณ ขณะนี้</h3>
                    </div>
                <?php } ?>
            <?php foreach ($stock_product as $row) { ?>
                <div class="mt-3 col-md-4">
            <a href="/game?id=<?php echo $row['id']; ?>" class=""></a>
            <div class="card card-catalog">
            <img src="<?php echo $row['image']; ?>" width="100%" style="border-radius: 15px 15px 0px 0px;">
            <div class="btn-game-catalog card-body py-2 px-2">
                    <div class="mt-4 mb-1">
                        <div class="text-center mb-4 title-show" style="font-size: 20px;"><?php echo $row['name']; ?></div>
                        <center>    
                        <div>
                            <a href="/<?php echo $row['list']; ?>" class="btn px-xl-5 py-1 btn-hakko3" target="_self">รายละเอียดสินค้า</a>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script src="../../assets/js/buyproduct.js"></script>