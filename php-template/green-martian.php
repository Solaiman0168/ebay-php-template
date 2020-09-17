<html  oncontextmenu="return false">

<head>
    <title><?= $_REQUEST["store_name"] ?? "eBay Product Listing"; ?></title>
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $_REQUEST["product_name"] ?? "No Product Name"; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <?php Asset::css(["external/green-martian"]); ?>
    <style>
        @charset "utf-8";
        :root {
            --primary-color: #<?=$_REQUEST["theme_primary"] ?? "6fbd46" ?>;
            --secondary-color: #<?=$_REQUEST["theme_secondary"] ?? "e74c3c" ?>;
        }

    </style>
</head>

<body>

<div class="header-container">
    <div class="header-top">
        <div class="container">
            <p><span><?=$_REQUEST["welcome_text"] ?? false?></span></p>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <a class="logo-content" href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>" target="_blank">
                <?php if($_REQUEST['logo_mode'] == 'image'): ?>
                    <img class="logo img-responsive" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>" width="250" height="150">
                <?php else: ?>
                    <h2><?=$_REQUEST['store_logo'];?></h2>
                <?php endif; ?>
            </a>
            <!--Logo Link-->
            <div class="header-right">
                <input type="checkbox" id="nav-trigger" class="nav-trigger">
                <label for="nav-trigger" class="hidden-nav">MENU</label>
                <div class="menu-header menu-header-mobile">
                    <div class="container">
                        <div class="menu-container">
                            <ul class="menu">
                                <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>?_rdc=1" target="_blank">Home</a></li>
                                <!--Main Menu Links/Max 8 Links/Bettet Usage for Featured Categories-->
                                <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sid=1153242646&_trksid=p4634.c0.m14&_sop=10&_sc=1" target="_blank">New Arrivals</a></li>
                                <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sc=1&_sid=1153242646&_trksid=p4634.c0.m14&_sop=1&_sc=1" target="_blank">Ending Soon</a></li>
                                <li><a href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?ViewFeedback&userid=<?=$_REQUEST["ebay_username"] ?? false?>" target="_blank">Feedback</a></li>
                                <li><a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&requested=<?=$_REQUEST["ebay_username"] ?? false?>&_trksid=p2050430.m2531.l4583&rt=nc" target="_blank">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-header">
            <div class="container">
                <div class="menu-container">
                    <ul class="menu">
                        <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>?_rdc=1" target="_blank">Home</a></li>
                        <!--Main Menu Links/Max 8 Links/Bettet Usage for Featured Categories-->
                        <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sid=1153242646&_trksid=p4634.c0.m14&_sop=10&_sc=1" target="_blank">New Arrivals</a></li>
                        <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sc=1&_sid=1153242646&_trksid=p4634.c0.m14&_sop=1&_sc=1" target="_blank">Ending Soon</a></li>
                        <li><a href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?ViewFeedback&userid=<?=$_REQUEST["ebay_username"] ?? false?>" target="_blank">Feedback</a></li>
                        <li><a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&requested=<?=$_REQUEST["ebay_username"] ?? false?>&_trksid=p2050430.m2531.l4583&rt=nc" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="promo hidden-sm hidden-xs">
    <div class="container">
        <div class="promo-content">
            <!--Top Promo /Font-Awosem/Edit Text or Icon-->
            <a target="_blank" class="box-promotion"><i class="fa fa-check" aria-hidden="true"></i>Fast Shipping</a>
            <a target="_blank" class="box-promotion"><i class="fa fa-check" aria-hidden="true"></i>100% Original</a>
            <a target="_blank" class="box-promotion"><i class="fa fa-check" aria-hidden="true"></i>24x7 Support</a>
            <a target="_blank" class="box-promotion"><i class="fa fa-check" aria-hidden="true"></i>Satisfaction guarantee</a>
        </div>
    </div>
</section>
<!--Header End-->
<div class="content">
    <div class="container">
        <div class="inner-row">
            <div class="col-sm-3 col-md-3 hidden-xs hidden-sm left-content">
                <div class="hidden-xs hidden-sm">
                    <div class="widget_box">
                        <div class="list-group">
                            <h2><i class="fa fa-bars"></i> Our Categories</h2>
                            <div class="widget_content">
                                <ul>
                                    <?php if(isset($_REQUEST["category"])):
                                    foreach ($_REQUEST["category"] as $cat): ?>
                                        <li><a target="_blank" href="<?=$cat["url"] ?? "#";?>"><i class="fa fa-angle-right"></i>  <?=$cat["title"];?></a></li>
                                    <?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="list-group">
                            <h2><i class="fa fa-bars"></i> Useful Link</h2>
                            <div class="widget_content">
                                <ul>
                                    <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["footer_menu"])){ foreach($_REQUEST["menu"]["footer_menu"] as $useful_links): ?>
                                        <li><a target="_blank" href="<?=$useful_links["url"];?>"><i class="fa fa-angle-right"></i> <?=$useful_links["title"];?></a></li>
                                    <?php endforeach; } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 right-content">
                <h1 class="title-heading"><?= $_REQUEST["product_name"] ?? "This is Product Name" ?></h1>
                <!--Item Title-->
                <div class="panel panel-default desc-box">
                    <div class="image-gallery">
                        <?php foreach($_REQUEST["product_image"] as $key => $img):
                            if(empty($img)) continue;
                            ?>
                            <img src="<?=$img;?>" class="img-responsive">
                            <br>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="panel panel-default desc-box">
                    <div class="panel-heading">Product Description</div>
                    <!--DESCRIPTION Start-->
                    <div class="text-section">
                        <div class="panel-body" vocab="https://schema.org/" typeof="Product">
                            <div property="description">
                                <?=$_REQUEST["product_details"] ?? false; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabarea">
                    <div class="tab-content">
                        <input id="tab1" type="radio" name="tabs" checked="">
                        <label for="tab1"><span>Payment</span>
                            <!--Tab 1 Name-->
                        </label>
                        <section id="content1">
                            <!--Tab 1 Content-->
                            <?=$_REQUEST["payment_details"] ?? false;?>
                        </section>
                        <input id="tab2" type="radio" name="tabs">
                        <label for="tab2"><span>Delivery</span>
                            <!--Tab 2 Name-->
                        </label>
                        <section id="content2">
                            <!--Tab 2 Content-->
                            <?=$_REQUEST["shipping_details"] ?? false;?>

                        </section>
                        <input id="tab3" type="radio" name="tabs">
                        <label for="tab3"><span>Return Policy</span>
                            <!--Tab 3 Name-->
                        </label>
                        <section id="content3">
                            <!--Tab 3 Content-->
                            <?=$_REQUEST["return_details"] ?? false;?>

                        </section>
                        <input id="tab4" type="radio" name="tabs">
                        <label for="tab4"><span>Feedback</span>
                            <!--Tab 4 Name-->

                        </label>
                        <section id="content4">
                                <?php if(isset($_REQUEST["feedback"])){ foreach($_REQUEST["feedback"] as $feedback): ?>
                                    <div><i class="fa fas fa-star"></i> <span class="buyer-id"><?=$feedback["buyer_id"];?></span>: <?=$feedback["content"];?></li></div>
                                <?php endforeach;} ?>
                        </section>
                        <input id="tab5" type="radio" name="tabs">
                        <label for="tab5"><span>About Us</span>
                            <!--Tab 4 Name-->
                        </label>
                        <section id="content5">
                            <!--Tab 5 Content-->
                            <?=$_REQUEST["about_details"] ?? false;?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Start-->
    <div class="footer">
        <div class="container">
            <div class="inner-row">
                <div class="col-sm-4 contact-us">
                    <div class="head"><i class="fa fa-bars"></i> Links</div>
                    <ul>
                        <!--Footer Tab-1-->
                        <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sid=1153242646&_trksid=p4634.c0.m14&_sop=10&_sc=1" target="_blank">New Arrivals</a></li>
                        <li><a href="https://stores.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?=$_REQUEST["ebay_username"] ?? false?>/_i.html?rt=nc&_sc=1&_sid=1153242646&_trksid=p4634.c0.m14&_sop=1&_sc=1" target="_blank">Ending Soon</a></li>
                        <li><a href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?ViewFeedback&userid=<?=$_REQUEST["ebay_username"] ?? false?>" target="_blank">Feedback</a></li>
                        <li><a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&requested=<?=$_REQUEST["ebay_username"] ?? false?>&_trksid=p2050430.m2531.l4583&rt=nc" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3 footer-signup">
                    <div class="head"><i class="fa fa-envelope"></i> Newsletter</div>
                    <!--Footer Tab-3-->
                    <p>Sign up to our newsletter for special deals</p>
                    <a href="https://my.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?AcceptSavedSeller&sellerid=<?=$_REQUEST["ebay_username"] ?? false?>&ssPageName=STRK:MEFS:ADDSTR&rt=nc" target="_blank" title="SUBMIT">SUBMIT</a>
                    <!--Newsletter Link-->
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3 hidden-xs footer-promo">
                    <div class="head">We Accept Only</div>
                    <!--Footer Tab-4-->
                    <p><img src="<?=File::path("payment.png")?>" class="img-responsive">
                        <!--Payment Banner-Footer-->
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="copyrights">
                    <p class="text-center"><?=$_REQUEST["store_name"] ?? false?> Copyright © <?=date("Y");?>. All rights reserved. Designed by eBayOutsource.co.uk</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>