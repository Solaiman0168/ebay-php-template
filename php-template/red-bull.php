<html oncontextmenu="return false">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://herolister.com/assets/css/templates/bootstrap-3-3-7.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php Asset::css(['external/red-bull']); ?>
    <style>
        :root {
            --primary-color: #<?=$_REQUEST["theme_primary"] ?? "e74c3c";?>;
        }
    </style>
</head>

<body>

<div id="template-container">
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 top-bar">
                    <div class="col-md-3 col-time">
                        <div class="icon-box"> <i class="fas fa-map-marker"></i> </div>
                        <div class="text-box">
                            <p>Based in</p>
                            <p>YOUR COUNTRY</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-mail">
                        <div class="icon-box"> <i class="fa fa-fw fa-comments"></i> </div>
                        <div class="text-box">
                            <p>Great service</p>
                            <p>Fast response</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-phone">
                        <div class="icon-box"> <i class="fa fa-fw fa-truck"></i> </div>
                        <div class="text-box">
                            <p>Fast shipping 24h</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-logo">
                <div class="col-xs-12 col-logo text-white text-center">
                    <?php if($_REQUEST['logo_mode'] == 'image'): ?>
                        <img class="" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>" width="auto" height="120">
                    <?php else: ?>
                        <h2><?=$_REQUEST['store_logo'];?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid container-bg">
        <div class="row row-menu row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box col-menu">
                <ul class="nav navbar navbar-nav align-center">
                    <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["main_menu"])){ foreach($_REQUEST["menu"]["main_menu"] as $nav): ?>
                        <li> <a class="text-uppercase" href="<?=$nav["url"]?>"  target="_blank"><?=$nav["title"];?></a> </li>
                    <?php endforeach; } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid container-bg">
        <div class="row row-menu row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box col-desc-first">
                <div class="col-md-8">

                    <div id="gall">
                        <?php foreach($_REQUEST["product_image"] as $key => $img):
                            if(empty($img)) continue;
                            ?>
                            <input id="pic_<?=$key;?>" name="switch" type="radio" <?=$key == 0 ? 'checked' : ''?>>
                            <label for="pic_<?=$key;?>">
                                <img src="<?=$img;?>" class="img-fluid">
                            </label>
                            <img src="<?=$img;?>">
                        <?php endforeach; ?>

                    <div class="line-break line-break-4"><span></span></div>

                    <div class="clearfix"><span></span></div>
                </div>
                </div>
                <div class="col-md-4 col-info-box m-0">
                    <div class="info-box">
                        <div class="info-box-header">
                            <h3> <i class="fa fa-fw fa-plus" aria-hidden="true"></i> Short description </h3>
                        </div>
                        <div class="info-box-text">
                            <?=substr($_REQUEST["product_details"], 0, 500);?>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box-header">
                            <h3> <i class="fas fa-check" aria-hidden="true"></i> Features </h3>
                        </div>
                        <div class="info-box-text">
                            <ul class="features">
                                <?php if(!empty($_REQUEST["product_features"])) { foreach($_REQUEST["product_features"] as $delivery): ?>
                                    <li><?=$delivery["title"];?></li>
                                <?php endforeach; }?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid container-bg-2">
        <div class="row row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box col-desc">
                <div class="col-md-12 text-center">
                    <h1><?=$_REQUEST["product_name"];?></h1>
                    <div class="line-break-2"> <span></span> </div>
                    <div class="tab-box">
                        <input id="tab1" type="radio" name="tabs" checked="">
                        <label for="tab1"><i class="far fa-file-alt"></i>Description </label>
                        <input id="tab2" type="radio" name="tabs">
                        <label for="tab2"><i class="fas fa-truck"></i>Delivery </label>
                        <input id="tab3" type="radio" name="tabs">
                        <label for="tab3"><i class="far fa-money-bill-alt"></i>Payment </label>
                        <input id="tab4" type="radio" name="tabs">
                        <label for="tab4"><i class="fas fa-sync"></i>Returns </label>
                        <section id="content-1">
                            <?=$_REQUEST["product_details"];?>
                        </section>
                        <section id="content-2">
                            <?=$_REQUEST["shipping_details"];?>
                            <?php if(isset($_REQUEST["shipping_options"]) && !empty($_REQUEST["shipping_options"])):
                                foreach($_REQUEST["shipping_options"] as $img): ?>
                                    <img src="<?=$img?>">
                                <?php endforeach;
                            endif; ?>
                        </section>
                        <section id="content-3">
                            <?=$_REQUEST["payment_details"];?>
                            <div class="box-logo">
                                <?php if(isset($_REQUEST["payment_options"])):
                                    foreach($_REQUEST["payment_options"] as $img): ?>
                                        <img src="<?=$img?>">
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
        </div>
    </div>
    <div class="container-fluid container-bg-2">
        <div class="row row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box">
                <div class="col-xs-12 text-center">

                    <h2 class="no-line"> SPECIFICATION </h2>
                    <div class="line-break line-break-3"> <span></span> </div>

                    <div class="col-xs-12 col-md-6 col-md-offset-3 col-inner-text">
                        <table class="table table-hover">
                            <tbody>
                            <?php if(!empty($_REQUEST["specifications"])) { foreach($_REQUEST["specifications"] as $spec): ?>

                                <tr>
                                    <td><?=$spec["title"]?></td>
                                    <td> <?=$spec["value"]?></td>
                                </tr>
                            <?php endforeach; }?>



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-bg-2">
        <div class="row row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box">
                <div class="col-md-12 text-center">

                    <h2 class="no-line"> WHY <b>US</b>? </h2>
                    <div class="line-break line-break-3"> <span></span> </div>

                    <div class="col-sm-4 why-col">
                        <div class="why-box-icon"> <i class="fas fa-star"></i> </div>
                        <h3 class="no-line">Best seller</h3>
                        <p>We guarantee high quality products and service.</p>
                    </div>

                    <div class="col-sm-4 why-col">
                        <div class="why-box-icon"> <i class="fas fa-comments"></i> </div>
                        <h3 class="no-line">Great service</h3>
                        <p>If you have any questions, feel free to contact! We will respond as soon as possible.</p>
                    </div>

                    <div class="col-sm-4 why-col">
                        <div class="why-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
                        <h3 class="no-line">Satisfaction guarantee</h3>
                        <p>We do everything to make you fully satisfied.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-bg-2">
        <div class="row row-up-box">
            <div class="col-md-10 col-md-offset-1 col-up-box">
                <div class="col-md-12 text-center">
                    <h2 class="no-line"> OTHER ITEMS </h2>
                    <div class="line-break line-break-3"> <span></span> </div>


                    <?php foreach($_REQUEST["other_products"] as $other_product): ?>
                        <div class="col-sm-6 col-md-3 text-center col-other-items">
                            <img class="img-responsive" src="<?=$other_product["image"];?>">
                            <h4><?=$other_product["title"];?></h4>
                            <a target="_blank" href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? '.co.uk';?>/itm/<?=$other_product["id"];?>" class="button">SEE</a>
                        </div>
                    <?php endforeach; ?>


                    <div class="col-xs-12 col-category-links">
                        <ul class="list-inline category-links">
                            <li>
                                <div>CATEGORY:</div>
                            </li>
                            <?php foreach($_REQUEST["category"] as $category): ?>
                                <li><a  target="_blank" href="<?=$category["url"] ?? "#";?>"><?=$category["title"];?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-bg-2">
        <div class="row row-up-box">
            <div class="col-md-10 col-md-offset-1 col-margin"> </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="footer-last-p">© <?=$_REQUEST["store_name" ?? 'eBay Outsource']?> | designed by eBayOutsource
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>