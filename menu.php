<?php
$pluem = new classadmin_bypluem;
$totaluser = $pluem->totaluser();
$totaltopup = $pluem->totaltopup();
?>
<div class="container mt-3">
    <div class="row">
        <div class="mx-auto d-block col-xl-12 col-12">
            <div class="card text-center card-backend">
                <div class="card-body">
                    <h3>รายละเอียดเว็บ</h3>
                    <h5>SEVER : <?php echo $_SERVER['SERVER_NAME']; ?></h5>
                    <h5>ผู้ใช้ทั้งหมด : <?php echo $totaluser['total']; ?> คน</h5>
                    <h5>รายได้ทั้งหมด :
                    <?php
                    if(empty($totaltopup['total'])){
                        echo "0.00";
                    }else{
                        echo $totaltopup['total'];
                    }
                    ?> บาท</h5>
                </div>
            </div>
        </div>
        <div class="mx-auto d-block col-xl-12 col-12">
            <div class="row">
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_user">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-users-cog"></i> จัดการผู้ใช้
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_web">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-cog"></i> จัดการเว็บ
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_product">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-shopping-basket"></i> จัดการสินค้า (PRODUCT)
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_script">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-shopping-basket"></i> จัดการสินค้า (SCRIPT)
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_code">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-code"></i> จัดการโค๊ด
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/history_product">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-history"></i> ประวัติการซื้อสินค้า
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_stock_product">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-cogs"></i>จัดการประเภทสินค้า
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mt-2 text-center">
                    <a href="/settings_game_new">
                        <div class="card card-backend">
                            <div class="card-body">
                                <i class="fas fa-cogs"></i>จัดการข่าวเกม
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>