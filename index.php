<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'config/class.php';
    $pluem = new classweb_bypluem;
    $web_config = $pluem->web_config();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $web_config['title']; ?></title>
    <link rel="icon" type="image" href="<?php echo $web_config['logo']; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap&quot;">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    </head>
<body>
    <?php
    require 'vendor/autoload.php';
    $router = new AltoRouter();
    include 'layouts/navbar.php';
    $resultuser = $pluem->resultuser();
    if(empty($_SESSION['id'])){
        $router->map('GET','/',function(){
            include 'pages/home.php';
        });
        $router->map('GET','/home',function(){
            include 'pages/home.php';
        });
        $router->map('GET','/login',function(){
            include 'pages/account/login.php';
        });
        $router->map('GET','/register',function(){
            include 'pages/account/register.php';
        });
    }else{
        $router->map('GET','/',function(){
            include 'pages/home.php';
        });
        $router->map('GET','/home',function(){
            include 'pages/home.php';
        });
        $router->map('GET','/shop',function(){
            include 'pages/shop/index.php';
        });
        $router->map('GET','/topup',function(){
            include 'pages/topup/index.php';
        });
        $router->map('GET','/termgame',function(){
            include 'pages/termgame/index.php';
        });
        $router->map('GET','/stock-id',function(){
            include 'pages/product/index.php';
        });
        $router->map('GET','/stock-script',function(){
            include 'pages/script/index.php';
        });
        $router->map('GET','/account',function(){
            include 'pages/account/index.php';
        });
        $router->map('GET','/history_script',function(){
            include 'pages/history/script.php';
        });
        $router->map('GET','/history_shop',function(){
            include 'pages/history/shop.php';
        });
        $router->map('GET','/code',function(){
            include 'pages/code/index.php';
        });
        $router->map('GET','/help',function(){
            include 'pages/help/index.php';
        });
        $router->map('GET','/stock_product',function(){
            include 'pages/stock_product/index.php';
        });
        $router->map('GET','/game_new',function(){
            include 'pages/game_new/index.php';
        });
        if($resultuser['class'] == "1"){
            $router->map('GET','/backend',function(){
                include 'layouts/menu.php';
                include 'pages/admin/index.php';
            }); 
            $router->map('GET','/settings_user',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/user.php';
            });
            $router->map('GET','/settings_web',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/web.php';
            });
            $router->map('GET','/settings_product',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/product.php';
            });
            $router->map('GET','/settings_script',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/script.php';
            });
            $router->map('GET','/settings_termgame',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/termgame.php';
            });
            $router->map('GET','/settings_code',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/code.php';
            });
            $router->map('GET','/history_topup',function(){
                include 'layouts/menu.php';
                include 'pages/admin/history/topup.php';
            });
            $router->map('GET','/history_product',function(){
                include 'layouts/menu.php';
                include 'pages/admin/history/product.php';
            });
            $router->map('GET','/history_termgame',function(){
                include 'layouts/menu.php';
                include 'pages/admin/history/termgame.php';
            });
            $router->map('GET','/edit_user',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/user.php';
            });
            $router->map('GET','/edit_product',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/product.php';
            });
            $router->map('GET','/edit_script',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/script.php';
            });
            $router->map('GET','/add_stock_id',function(){
                include 'layouts/menu.php';
                include 'pages/admin/add/stock_id.php';
            });
            $router->map('GET','/edit_stock_id',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/stock_id.php';
            });
            $router->map('GET','/add_stock_script',function(){
                include 'layouts/menu.php';
                include 'pages/admin/add/stock_script.php';
            });
            $router->map('GET','/edit_stock_script',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/stock_script.php';
            });
            $router->map('GET','/edit_item',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/item.php';
            });
            $router->map('GET','/settings_stock_product',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/stock_product.php';
            });
            $router->map('GET','/edit_stock_product',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/stock_product.php';
            });
            $router->map('GET','/settings_game_new',function(){
                include 'layouts/menu.php';
                include 'pages/admin/settings/game_new.php';
            });
            $router->map('GET','/edit_game_new',function(){
                include 'layouts/menu.php';
                include 'pages/admin/edit/game_new.php';
            });
        }
    }
    $match = $router->match();
    if( is_array($match) && is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        echo "<script>window.location.href = '/';</script>";
    }
    ?>
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="d-md-none d-xl-block col-md-4 col-xl-3 col-12">
                    <h5 class="text-white"> <img src="<?php echo $web_config['logo']; ?>" height="50" class="rounded-block"> </h5> <p class="text-white mt-4" style="font-size: 12px;"><?php echo $web_config["info"]; ?></p>
        </div> 
        <div class="col-md-4 col-xl-3 col-6"><h5 class="text-white">ช่วยเหลือ</h5> 
        <div class="custom-line">  
        </div>
        <div class="mt-3">
            <a href="/" class="text-white">เข้าสู่ระบบ</a><br>
         <a href="/register" class="text-white">สมัครสมาชิก</a> 
         <br> 
         <a href="/shop" class="text-white">สินค้า</a> 
         <br> 
         <a href="/topup" class="text-white">เติมเงิน</a>
          <br>
        </div>
    </div>
    <div class="col-md-4 col-xl-3 col-6"><h5 class="text-white">ติดต่อ</h5> <div class="custom-line"></div> 
    <div class="mt-3"><a href="<?php echo $web_config['contact']; ?>"><span class="text-white"><i class="fab fa-discord"></i> ดิสคอร์ด</span></a><br class="mx-4"> <span class="text-white"></span><br class="mx-4"></div></div> <div class="col-xl-3 col-6"><h5 class="text-white">แฟนเพจ</h5> <div class="custom-line mb-4"></div> <iframe src="<?php echo $web_config['page']; ?>" scrolling="no" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" style="border: none; overflow: hidden; width: 100%;"></iframe></div></div></div></footer>
<div class="bg-navbar-first p-3 pb-0 text-left text-white "><div class="container text-center mt-1">
      <div class="container"><p style="margin-bottom: 0px !important;">©  Copyright 2021 Website By<a href="https://www.facebook.com/profile.php?id=100086261141480" target="_blank" style="color: rgb(51,105,164);"> UnitLab </a>All Rights Reserved.</p>
</body>
</html>