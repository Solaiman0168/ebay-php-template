<html oncontextmenu="return false">
<body>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php Asset::css(["external/bootstrap-3-3-7", "external/blue-light"]); ?>

<style type="text/css">
    :root {
        --primary-color: #<?=$_REQUEST["theme_primary"] ?? "5e9cef"?> !important;
    }
    .col-box-title {
        background-image: url("<?php if(isset($_REQUEST["header_image"]) && !empty($_REQUEST["header_image"])) { echo $_REQUEST["header_image"]; } else { Asset::img("demo/photo_main_banner.jpg"); } ?>");
    }
</style>

<div id="template-container">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="row navbar-top">
                <div class="col-xs-12 col-md-6 navbar-header">
                    <?php if($_REQUEST['logo_mode'] == 'image'): ?>
                    <img class="logo img-fluid" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>" width="auto" height="120">
                    <?php else: ?>
                    <h2><?=$_REQUEST['store_logo'];?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-md-6 navbar-best">
                    <div class="col-md-6">
                        <p><i class="fas fa-star"></i> Best seller</p>
                        <p><i class="fas fa-comments"></i> Great service</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fas fa-truck"></i> Fast shipping 24h</p>
                        <p><i class="fas fa-thumbs-up"></i> Satisfaction guarantee</p>
                    </div>
                </div>
            </div>
            <div class="row menu">
                <div class="col-xs-12">
                    <ul class="nav navbar-nav">
                        <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["main_menu"])){ foreach($_REQUEST["menu"]["main_menu"] as $nav): ?>
                            <li> <a class="text-uppercase" <?php if(!empty($nav["url"])) echo "href=\"". $nav["url"] ."\"";?> target="_blank"><?=$nav["title"];?></a> </li>
                        <?php endforeach; } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-texture">

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-box-title">

                        <?php if(!empty($_REQUEST["product_ribon"])): ?>
                            <div class="ribbon"><span class="text-uppercase"><?=$_REQUEST["product_ribon"];?></span></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-7 col-sm-offset-1 ">

                <div class="col-xs-12 col-box">

                    <div class="col-xs-12 mt-0">
                        <h1 class="display-4"><?=$_REQUEST["product_name"] ?? false;?></h1>
                    </div>

                </div>
                <div class="col-xs-12 col-box">

                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">gallery</h4>
                    </div>

                    <div class="col-xs-12 col-box-inside">
                        <div id="gall">
                            <?php foreach($_REQUEST["product_image"] as $key => $img):
                                if(empty($img)) continue;
                                ?>
                                <input id="pic_<?=$key;?>" name="switch" type="radio" checked="checked">
                                <label for="pic_<?=$key;?>">
                                    <img src="<?=$img;?>">
                                </label>
                                <img src="<?=$img;?>">
                            <?php endforeach; ?>
                        </div>
                        <div class="line-break line-break-4"><span></span></div>
                        <div class="clearfix"><span></span></div>
                    </div>
                </div>

                <div class="col-xs-12 col-box">
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">description</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside">
                        <?=$_REQUEST["product_details"];?>
                    </div>
                </div>

                <div id="tab-section" class="col-xs-12 col-box col-box-tab">
                    <div class="tab-box col-box-inside">
                        <input id="tab1" type="radio" name="tabs" checked="" class="text-uppercase">
                        <label for="tab1" class="text-uppercase"><i class="fa fas fa-credit-card" aria-hidden="true"></i> Payment</label>
                        <input id="tab2" type="radio" name="tabs" class="text-uppercase">
                        <label for="tab2" class="text-uppercase"><i class="fa fas fa-sync"></i> Return Policy</label>
                        <section id="content-1">
                            <div class="animation opacity inner-box">
                                <?=$_REQUEST["payment_details"];?>
                                <div class="box-logo">
                                    <?php if(isset($_REQUEST["payment_options"])):
                                        foreach($_REQUEST["payment_options"] as $img): ?>
                                            <img src="<?=$img?>">
                                        <?php endforeach;
                                    endif; ?>
                                </div>
                            </div>
                        </section>
                        <section id="content-2">
                            <div class="animation opacity inner-box">
                                <?=$_REQUEST["return_details"];?>
                            </div>
                        </section>
                    </div>
                </div>

                <div id="cross-section" class="col-xs-12 col-box">
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">Other Products</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside">
                        <?php foreach($_REQUEST["other_products"] as $other_product): ?>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <img class="img-responsive" src="<?=$other_product["image"];?>">
                                <h4><?=$other_product["title"];?></h4>
                                <a class="button" target="_blank" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? ".co.uk";?>/itm/<?=$other_product["id"];?>">SEE</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-3">

                <div class="col-xs-12 col-box">
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">feedback</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside col-centered">
                        <h3>500+</h3>
                        <div class="col-feedback-stars"> <i class="fa fas fa-star" aria-hidden="true"></i> <i class="fa fas fa-star" aria-hidden="true"></i> <i class="fas fas fa-star" aria-hidden="true"></i> <i class="fa fas fa-star" aria-hidden="true"></i> <i class="fa fas fa-star" aria-hidden="true"></i></div>
                        <h6 class="text-uppercase">positive comments</h6>
                        <hr>
                        <ul class="feedback-example-comment-list">
                            <?php if(isset($_REQUEST["feedback"])){ foreach($_REQUEST["feedback"] as $feedback): ?>
                                <li><span class="buyer-id"><?=$feedback["buyer_id"];?></span>: <?=$feedback["content"];?></li>
                            <?php endforeach;} ?>
                        </ul>
                        <p><a href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?ViewFeedback2&userid=<?=$_REQUEST["ebay_username"] ?? "";?>" target="_blank">SEE ALL FEEDBACK</a></p>
                    </div>
                </div>

                <div class="col-xs-12 col-box">
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">Shipping</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside ">
                        <div class="delivery-logos-box">
                            <?php if(isset($_REQUEST["shipping_options"]) && !empty($_REQUEST["shipping_options"])):
                                foreach($_REQUEST["shipping_options"] as $img): ?>
                                    <img src="<?=$img?>">
                                <?php endforeach;
                            endif; ?>
                        </div>
                        <ul class="delivery-list-payment">
                            <?php if(!empty($_REQUEST["shipping_features"])) { foreach($_REQUEST["shipping_features"] as $delivery): ?>
                                <li><i class="<?php echo $delivery["icon"];?>"></i> <?=$delivery["title"];?></li>
                            <?php endforeach; }?>
                        </ul>
                    </div>
                </div>

                <div id="col-why-us" class="col-xs-12 col-box">
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">Why us</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside">
                        <?=$_REQUEST["whyus_details"] ?? false;?>
                    </div>
                </div>

                <div class="col-xs-12 col-box">
                    <?php if(!empty($_REQUEST["category"])): ?>
                    <div class="col-xs-12 col-box-header">
                        <h4 class="text-uppercase">Category</h4>
                    </div>
                    <div class="col-xs-12 col-box-inside category-box">
                        <ul>
                            <?php foreach($_REQUEST["category"] as $category): ?>
                                <li><a href="<?=$category["url"] ?? "#";?>" target="_blank"><?=$category["title"];?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid container-footer">
        <footer>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-12 col-md-4">
                        <h3 class="text-uppercase">About us</h3>
                        <?=$_REQUEST["about_details"];?>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h3 class="text-uppercase">Benefits</h3>
                        <ul class="delivery-list-payment benefits-list-payment">
                            <?php foreach($_REQUEST["benefits"] as $benefit): ?>
                                <li><?=$benefit["title"];?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-4 footer-uselink-box">
                        <h3 class="text-uppercase">Useful Links</h3>
                        <ul>
                            <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["footer_menu"])){ foreach($_REQUEST["menu"]["footer_menu"] as $useful_links): ?>
                                <li><a target="_blank" class="text-uppercase" href="<?=$useful_links["url"];?>"><?=$useful_links["title"];?></a></li>
                            <?php endforeach; } ?>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-8 col-md-offset-2 col-footer-copy">
                    <p class="text-uppercase footer-last-p">© <?php echo date("Y"); ?> | Template by ebayoutsource.co.uk
                    </p>
                </div>
            </div>

        </footer>
    </div>

</div>

</body>

</html>