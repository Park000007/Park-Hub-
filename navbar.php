<?php
$pluem = new classweb_bypluem;
$resultuser = $pluem->resultuser();
$web_config = $pluem->web_config();
$totaltopup = $pluem->totaltopup();
?>
<nav class="navbar navbar-light bg-nav navbar-expand-lg py-xl-3 py-1">
<div class="container">
    <a class="navbar-brand" href="/">
        <img src="<?php echo $web_config['logo']; ?>" height="50" class="rounded-block">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <i style="color: rgb(0, 10, 48);" class="fas fa-stream"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div id="nav-collapse" class="navbar-collapse collapse" style="display: none;"> 
            <ul class="navbar-nav ml-auto">
                <a href="/" class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkowh btn-block font-bold py-2 px-6" target="_self">หน้าแรก</a>
                <a href="/topup" class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkowh btn-block font-bold py-2 px-6" target="_self">เติมเงิน</a>
                <a href="/shop" class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkowh btn-block font-bold py-2 px-6" target="_self">ร้านค้า</a>
                <a href="/help" class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkowh btn-block font-bold py-2 px-6" target="_self">วิธีการใช้งาน</a>
            </ul>
            </div>
            <?php if(empty($_SESSION['id'])){ ?>
                        <ul class="navbar-nav ml-auto">
                        <a href="/login" class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkore btn-block font-bold py-2 px-6" target="_self">Log in</a>
                    </ul>
            <?php } ?>
            <?php if(!empty($_SESSION['id'])){ ?>
                <ul class="navbar-nav ml-auto">
                    <div class="dropdown show">
                        <a class="transition-all md:mt-0 md:ml-4 btn mt-4 btn-hakkore btn-block font-bold py-2 px-6" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?> <i class="fas fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li class="nav-item mx-2"><a class="dropdown-item" href="" class="dropdown-item" target="_self">ชื่อผู้ใช้ : <?php echo $_SESSION['username']; ?></a>
                            <li class="nav-item mx-2"><a class="dropdown-item" href="" class="dropdown-item" target="_self">จำนวนเครดิต : <?php echo $resultuser['point']; ?></a></li> 
                            <li class="nav-item mx-2"><a class="dropdown-item" href="" class="dropdown-item" target="_self">ยอดเติมเงินรวม : <?php echo $totaltopup['total']; ?></a></li> 
                            <li class="nav-item mx-2"><a class="dropdown-item" href="/account" class="dropdown-item" target="_self">ข้อมูลส่วนตัว</a></li> 
                            <hr>
                            <?php if($resultuser['class'] == "1"){ ?>
                                <li class="nav-item mx-2"><a class="dropdown-item" href="/backend" class="dropdown-item" target="_self">จัดการระบบ</a>
                                <hr>
                            <?php } ?>
                            <div class="logout text-center">
                                <button class="btn mt-2 btn-logout btn-secondary">ออกจากระบบ</button>
                            </div>
                        </div>
                    </div>
                </ul>
            <?php } ?>
        </div>
    </ul>
    </div>
</nav>
<script src="../assets/js/navbar.js"></script>