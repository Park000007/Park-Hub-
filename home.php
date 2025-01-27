<?php
$pluem = new classweb_bypluem();
$allproduct = $pluem->allproduct();
$soldproduct = $pluem->soldproduct();
$readyproduct = $pluem->readyproduct();
$web_config = $pluem->web_config();
$show_card_other = $pluem->show_card_other();
$show_card_productlimit = $pluem->show_card_productlimit();
$stock_product = $pluem->stock_product();
$game_new = $pluem->game_new();
?>
<style>
    .header {
        background: linear-gradient(331deg, rgb(255 255 255/60%), rgb(15 74 145/70%) 0, rgb(17 74 144/70%) 100%, rgb(179 227 255/60%) 100%, #0e488f),
            url(<?php echo $web_config["banner"]; ?>) !important;
        background-size: cover!important;
        background-position: 50%;
        padding: auto;
        height: auto;
    }
</style>
<div class="jumbotron header">
    <div class="area">
    <div class="text-center container" style="color: rgb(255, 255, 255);">
    <br>
        <br>
            <br>
                <h1 class="header-title d-none d-xl-block d-md-block" style="color: rgb(0, 10, 48);"><?php echo $web_config["title"]; ?></h1>
                    <h1 class="header-title d-block d-xl-none d-md-none" style="color: rgb(0, 10, 48);"><?php echo $web_config["title"]; ?></h1>
                    <p class="header-txt"><?php echo $web_config["info"]; ?></p>
                    <a href="/topup" class="">
                        <button type="button" class="btn px-4 btn-header">
                            <i class="fas fa-sign-in-alt">
                            </i> เติมเงิน</button></a>
                        <br>
                    <br>
                <br>
          </div>
     </div>
</div>
<div class="container mt-xl-5 mt-4">
    <div class="row">
        <div class="col-12">
            <!-- 
                <div class="card mt-3">
                <div class="card-obdy">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-light"><i class="fa fa-newspaper"></i>&nbsp; ข่าวสารเเละอัพเดท</span>
                        </div>
                        <marquee class="form-control bg-card"><?php echo $web_config[
                            "news"
                        ]; ?></marquee>
                    </div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="col-md-6 col-xl-6 col-12">
                    <h4 class="btn text-bold border-l mt-2" style="font-size: 25px;"><a>Game Script</a> 
                    <a href="/game" class="btn px-4 px-xl-2 py-0 btn-hakko6" target="_self" style="font-size: 12px;">เกมสคริป</a></h4>
            </div>
        </div>
        <div class="row">
        <?php if (empty($stock_product)) { ?>
                    <div class="col-12 mt-2">
                        <h3 class='text-center'>ไม่มีสินค้า ณ ขณะนี้</h3>
                    </div>
                <?php } ?>
            <?php foreach ($stock_product as $row) { ?>
                <div class="mt-3 col-md-4">
            <div class="card card-catalog">
            <img src="<?php echo $row["image"]; ?>" width="100%" style="border-radius: 15px 15px 0px 0px;">
            <div class="btn-game-catalog card-body py-2 px-2">
                    <div class="mt-4 mb-1">
                        <div class="text-center mb-4 title-show" style="font-size: 20px;"><?php echo $row["name"]; ?></div>
                        <center>    
                        <div>
                            <a href="/<?php echo $row[
                                "list"
                            ]; ?>" class="btn px-xl-5 py-1 btn-hakko3" target="_self">รายละเอียดสินค้า</a>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
         </div>
            <br>
                <br>
                    <div class="row">
                        <div class="col-md-6 col-xl-6 col-12">
                            <h4 class="btn text-bold border-l mt-2" style="font-size: 25px;"><a>Game News</a> 
                            <a href="/game" class="btn px-4 px-xl-2 py-0 btn-hakko6" target="_self" style="font-size: 12px;">ข่าวสาร</a></h4>
                     </div> 
                </div>
                <div class="row">
        <?php if (empty($game_new)) { ?>
                    <div class="col-12 mt-2">
                        <h3 class='text-center'>ไม่มีข่าวสารใหม่ ณ ขณะนี้</h3>
                    </div>
                <?php } ?>
            <?php foreach ($game_new as $row) { ?>
                <div class="mt-3 col-md-4">
            <div class="card card-catalog">
            <br>
            <center>
            <img src="<?php echo $row["image"]; ?>" style="height: 150px; border-radius: 20px;">
            </center>
            <br>
            <center>
            <div class="text-center mb-4 title-name" style="font-size: 25px;"><?php echo $row["name"]; ?></div>
            </center>
            <div class="btn-game-catalog card-body py-2 px-2">
                        <div class="text-center mb-4 title-show" style="font-size: 15px;"><?php echo $row["details"]; ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
         </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/buyproduct.js"></script>