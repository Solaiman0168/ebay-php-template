<!DOCTYPE html>
<html oncontextmenu="return false">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_REQUEST["store_name"];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <?php Asset::css(["/external/gallery.prefixed", "/external/store1"]); ?>
    <style>
        #TopPromoArea {
            display: none !important;
        }

        #LeftPanel .v4acpcont:nth-child(3) {
            display: none !Important
        }

        #LeftPanel .v4acpcont:nth-child(4) {
            display: none !Important
        }
        .text-dark {
            color: #<?=$_REQUEST['theme_primary'] ?? '222'?> !important;
        }
    </style>
</head>

<body>
<div class="header-container">
    <div class="header-top">
        <div class="container"><span><?=$_REQUEST["welcome_text"];?></span>
            <ul class="menu">
                <?php if(!empty($_REQUEST["menu"]["top_menu"])){ foreach($_REQUEST["menu"]["top_menu"] as $nav): ?>
                    <li> <a class="text-uppercase" <?php if(!empty($nav["url"])) echo "href=\"". $nav["url"] ."\""; ?>  target="_blank"><?=$nav["title"];?></a> </li>
                <?php endforeach; } ?>
            </ul>
        </div>
    </div>
    <div class="header-content">
        <div class="container">

            <a target="_blank" class="logo-content text-dark" href="https://www.ebaystores<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/<?=$_REQUEST["ebay_username"] ?? ""; ?>">
                <?php if($_REQUEST['logo_mode'] == 'image'): ?>
                    <img class="logo img-responsive img-fluid" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>">
                <?php else: ?>
                    <h2><?=$_REQUEST['store_logo'];?></h2>
                <?php endif; ?>
            </a>

            <div class="header-right">
                <div class="top-left"><a  target="_blank" href="https://www.ebaystores<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/<?=$_REQUEST["ebay_username"];?>"><i class="fas fa-home"></i><span>Home</span></a><a href="https://contact.ebay.co.uk/ws/eBayISAPI.dll?FindAnswers&requested=<?=$_REQUEST["ebay_username"] ?? "";?>"><i class="far fa-question-circle"></i><span>Help</span></a></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="main-header">
            <div class="container">
                <div id="topcat">
                    <nav>
                        <label id="main-menu" class="toggle" for="drop">Our Menu</label>
                        <input id="drop" type="checkbox" />
                        <ul class="menu">
                            <li><a target="_blank" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/usr/<?=$_REQUEST["ebay_username"] ?? ""; ?>"><i class="fa fa-home"></i> Home</a></li>
                            <li><a target="_blank" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/str/<?=$_REQUEST["ebay_username"] ?? ""; ?>"><i class="fa fa-shopping-bag"></i> Visit Store</a></li>
                            <li><a target="_blank" href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?FindAnswers&requested=<?=$_REQUEST["ebay_username"] ?? ""; ?>&_trksid=p2545226.m2531.l4583&rt=nc"><i class="fa fa-envelope"></i> Contact</a></li>
                            <li><a target="_blank" href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?ViewFeedback2&userid=<?=$_REQUEST["ebay_username"] ?? ""; ?>&ftab=AllFeedback&myworld=true&rt=nc"><i class="fa fa-comments"></i> Feedback</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <div class="container">
        <div class="gallery item-5">
            <?php foreach($_REQUEST["slider_image"] as $key => $img):
                if(empty($img)) continue;
                ?>
                <div id="item-1<?=$key;?>" class="control-operator"></div>
            <?php endforeach; ?>
            <div class="banner-slides">
                <div id="overflow">
                    <div class="inner">
                        <?php foreach($_REQUEST["slider_image"] as $key => $img):
                            if(empty($img)) continue;
                            ?>
                            <figure class="item"><img src="<?=$img;?>"></figure>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="promotions">
    <div class="container">
        <div class="inn-container">
            <div class="box-list">
                <div class="box-promo"><span><i class="fas fa-shipping-fast"></i></span>
                    <p><strong>FAST SHIPPING</strong>
                        <br>ON TIME & SECURE</p>
                </div>
            </div>
            <div class="box-list">
                <div class="box-promo"><span><i class="fas fa-credit-card"></i></span>
                    <p><strong> 30 DAYS RETURN</strong>
                        <br>MONEYBACK GUARANTEE</p>
                </div>
            </div>
            <div class="box-list">
                <div class="box-promo"><span><i class="fas fa-award"></i></span>
                    <p><strong>AUTHENTICITY GUARANTEE</strong>
                        <br>QUALITY ITEMS</p>
                </div>
            </div>
            <div class="box-list">
                <div class="box-promo"><span><i class="fas fa-user-shield"></i></span>
                    <p><strong>ONLINE SUPPORT</strong>
                        <br>QUICK & RELIABLE</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="promotions-sec">
    <div class="container">
        <div class="row">
            <div class="sec-box col-md-4" id="box1">
                <div class="secbox-left"><i class="fas fa-envelope"></i></div>
                <div class="secbox-right">
                    <a  target="_blank" href="https://my.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?AcceptSavedSeller&sellerid=<?=$_REQUEST["ebay_username"] ?? ""; ?>&ssPageName=STRK:MEFS:ADDSTR&rt=nc">
                        <p class="headingp">Subscribe to Newsletter</p>
                        <p>Style , News & an Exclusive Offers</p>
                    </a>
                </div>
            </div>
            <div class="sec-box col-md-4" id="box2">
                <div class="secbox-left"><i class="fas fa-star"></i></div>
                <div class="secbox-right">
                    <a target="_blank" href="https://my.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?AcceptSavedSeller&sellerid=<?=$_REQUEST["ebay_username"] ?? ""; ?>&ssPageName=STRK:MEFS:ADDSTR&rt=nc">
                        <p class="headingp">Add Seller to Favorite"s List</p>
                        <p>Please add us to your Favorite seller</p>
                    </a>
                </div>
            </div>
            <div class="sec-box col-md-4" id="box3">
                <div class="secbox-left"><i class="fas fa-smile"></i></div>
                <div class="secbox-right">
                    <a target="_blank" href="https://feedback.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?ViewFeedback&userid=<?=$_REQUEST["ebay_username"] ?? ""; ?>">
                        <p class="headingp">Our Feedback</p>
                        <p>We strive for excellence </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-box-holder mt-5">
    <div class="container">
        <div class="panel-title text-center" style="background: #c32528;">
            <h1>Other Products</h1>
        </div>
        <div class="row">
            <?php foreach($_REQUEST["other_products"] as $other_product): ?>
                <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                    <a target="_blank" class="display-block" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/itm/<?=$other_product["id"];?>" target="_blank" rel="noopener">
                        <img src="<?=$other_product["image"];?>" />
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
</body>

</html>