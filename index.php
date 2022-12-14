<?php 
    include_once "config/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<?php include_once "modules/logo/logo.php"; ?>

            <?php include_once "modules/search/search-box.php"; ?>

            <?php include_once "modules/cart/cart-notification.php"; ?>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<?php include_once "modules/menu/menu.php"; ?> 
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-12 col-md-12 col-sm-12">
            	<!--	Slider	-->
                <?php include_once "modules/slide/slide.php"; ?> 
                <!--	End Slider	-->
                <?php 
                    if(isset($_GET['page_layout'])) {
                        switch ($_GET['page_layout']) {
                            case 'product':
                                include_once "modules/product/product.php";
                                break;
                            case 'category':
                                include_once "modules/category/category.php";
                                break;
                            case 'search':
                                include_once "modules/search/search.php";
                                break;
                            case 'cart':
                                include_once "modules/cart/cart.php";
                                break;
                            case 'success':
                                include_once "modules/cart/success.php";
                                break;
                        }
                    }else{
                        include_once "modules/product/featured.php";
                        include_once "modules/product/lasted.php";
                    }
                    
                ?>
                
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
	<div class="container">
    	<div class="row">
        	<div id="logo-2" class="col-lg-6 col-md-6 col-sm-12">
            	<h2><a href="#"><img src="images/loggonew.jpg"></a></h2>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>D???ch v???</h3>
            	<p>B???o h??nh r??i v???, ki???m tra tr?????c khi thanh to??n</p>
            	<p>Cung c???p d???ch v??? tr??? g??p</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Hotline</h3>
            	<p>Phone Sale: 123456789</p>
                <p>Email: luongvanduy2410@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<p>
                    2022 @ SHOPDOCO
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->
</body>
</html>
