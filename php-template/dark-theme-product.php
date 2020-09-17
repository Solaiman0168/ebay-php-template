<html oncontextmenu="return false">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php Asset::css(["external/bootstrap-3-3-7", "external/dark-theme-product"]); ?>
</head>

<body>

<div id="template-container">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="row navbar-top">
                <div class="col-xs-12 col-md-4 navbar-header">
                    <?php if($_REQUEST['logo_mode'] == 'image'): ?>
                        <img class="logo" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>" width="auto" height="150">
                    <?php else: ?>
                        <h2 class="text-white"><?=$_REQUEST['store_logo'];?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-md-8 navbar-centered col-company-info">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <p class="heading"><i class="fa fas fa-truck"></i> Fast shipping 24h</p>
                            <div class="inner-info text-center">
                                <p>You will get</p>
                                <p>your item quickly</p>
                            </div>
                        </li>
                        <li>
                            <p class="heading"><i class="fa fas fa-comments"></i> Great service</p>
                            <div class="inner-info text-center">
                                <p>Have questions?</p>
                                <p>Feel free to contact!</p>
                            </div>
                        </li>
                        <li>
                            <p class="heading"><i class="fa fas fa-map-marker"></i> Location</p>
                            <div class="inner-info text-center">
                                <p>We are based</p>
                                <p>in USA</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row menu">
                <div class="col-xs-12">
                    <ul class="nav navbar-nav">
                        <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["main_menu"])) { foreach($_REQUEST["menu"]["main_menu"] as $nav): ?>
                            <li> <a class="text-uppercase" <?php if(!empty($nav["url"])) echo "href=\"". $nav["url"] ."\""; ?> target="_blank"><?=$nav["title"];?></a> </li>
                        <?php endforeach; }?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-texture">

        <div class="row">
            <div class="col-shadow col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-slider">
                <div class="slider">
                    <?php foreach($_REQUEST["product_image"] as $key => $img):
                        if(empty($img)) continue;
                        ?>
                        <input type="radio" name="slides" id="slide<?=$key;?>" checked="checked">
                    <?php endforeach; ?>
                    <ul>
                        <?php foreach($_REQUEST["product_image"] as $key => $img):
                            if(empty($img)) continue;
                            ?>
                            <li><img class="img-responsive" src="<?=$img;?>"> </li>
                        <?php endforeach; ?>

                    </ul>
                    <div class="arrows">
                        <?php foreach($_REQUEST["product_image"] as $key => $img):
                            if(empty($img)) continue;
                            ?>
                            <label for="slide<?=$key;?>"></label>
                        <?php endforeach; ?>
                    </div>

                    <div class="nav">
                        <div>
                            <?php foreach($_REQUEST["product_image"] as $key => $img):
                                if(empty($img)) continue;
                                ?>
                                <label for="slide<?=$key;?>"></label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div id="tab-section" class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-shadow">
                <div class="tab-box">
                    <input id="tab1" type="radio" name="tabs" checked="">
                    <label for="tab1"><i class="fa faw fa-file-alt" aria-hidden="true"></i> Description</label>
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"><i class="fa fas fa-truck"></i> Shipping</label>
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"><i class="fa fas fa-credit-card"></i> Payment</label>
                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4"><i class="fa fas fa-sync"></i> Return Policy</label>
                    <section id="content-1">
                        <h4><?=$_REQUEST["product_name"];?></h4>
                        <p><?=$_REQUEST["product_details"];?></p>
                    </section>
                    <section id="content-2">
                        <?=$_REQUEST["shipping_details"]?>
                        <div class="box-logo">
                            <?php if(isset($_REQUEST["shipping_options"])):
                                foreach($_REQUEST["shipping_options"] as $img): ?>
                                    <img src="<?=$img;?>">
                                <?php endforeach;
                            endif; ?>
                        </div>
                    </section>
                    <section id="content-3">
                        <p><?=$_REQUEST["payment_details"];?></p>
                        <div class="box-logo">
                            <?php if(isset($_REQUEST["payment_options"])):
                                foreach($_REQUEST["payment_options"] as $img): ?>
                                    <img src="<?=$img;?>">
                                <?php endforeach;
                            endif; ?>
                        </div>
                    </section>
                    <section id="content-4">
                        <?=$_REQUEST["return_details"];?>
                    </section>
                </div>
            </div>
        </div>

        <div id="cross-section" class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-shadow">

            <?php foreach($_REQUEST["other_products"] as $other_product): ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <img class="img-responsive" src="<?=$other_product["image"];?>">
                    <h4><?=$other_product["title"];?></h4>
                    <a target="_blank" class="button" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? '.co.uk';?>/itm/<?=$other_product["id"];?>">SEE</a>
                </div>
            <?php endforeach; ?>

            <div class="col-xs-12 col-category-links">
                <ul class="list-inline category-links">
                    <li>
                        <div>CATEGORY:</div>
                    </li>
                    <?php if(isset($_REQUEST["category"])) { foreach($_REQUEST["category"] as $category): ?>
                        <li><a href="<?=$category["url"] ?? "#";?>"  target="_blank"><?=$category["title"];?></a></li>
                    <?php endforeach; } ?>
                </ul>
            </div>
        </div>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="text-uppercase footer-last-p">© <?=$_REQUEST["store_name"] ?? "eBay Outsource";?> | designed by
                            ebayoutsource.co.uk
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

</body>

</html>