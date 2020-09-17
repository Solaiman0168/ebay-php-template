<?php //Generate text file on the fly
define("SITE_URL", "http://ebay.olibro.net/newhtmlgenerator");
$data = $_POST;
if (isset($data) && ($data['submit'] != ""));
    header("Content-type: text/html");
    header("Content-Disposition: attachment; filename=html-template.html");
    $title = $data['title'];
    $description = $data['description'];
    $features = $data['features'];
    $brand_caution = $data['brand_caution'];
    $image_gallery = $data['image_gallery'];
    $image_gallery1 = $data['image_gallery1'];
    $image_gallery1_1 = $data['image_gallery1_1'];
    $image_gallery2 = $data['image_gallery2'];
    $image_gallery2_2 = $data['image_gallery2_2'];
    $image_gallery3 = $data['image_gallery3'];
    $image_gallery3_3 = $data['image_gallery3_3'];
    $image_gallery4 = $data['image_gallery4'];
    $image_gallery4_4 = $data['image_gallery4_4'];
    $image_gallery5 = $data['image_gallery5'];
    $image_gallery5_5 = $data['image_gallery5_5'];
    $image_gallery6 = $data['image_gallery6'];
    $image_gallery6_6 = $data['image_gallery6_6'];
    
    ?>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxkhaninc.com/MaxKhan/css/style.css">
<link rel="stylesheet" type="text/css" href="https://topbrandoutlet.co.uk/ebay/css/new-style.css">

<style type="text/css">
    /* 
Template: TopBrandOutLet_Active template
Description: 
Version: 2.4
*/
    /* 
Template: TopBrandOutLet_17032019 All links are edited but dont use
Description: 
Version: 2.4
*/
    /* 
Template: TopBrandOutLet_Custom_Template_single
Description: 
Version: 2.4
*/
    
    .top-left {
        display: block !Important;
    }
    
    @media (max-width: 767px) {
        .top-left {
            display: none !Important;
        }
    }
    /* 
Template: Tani-Logics MaxKhan
Description: 
Version: 1.2
*/
    /* user colors */
    
    #wpl_store_header .hotline {
        color: #FFFFFF;
        background-color: #FFA500;
        display: block;
        float: right;
    }
    
    #wpl_wrapper .wpl_description h2 {
        color: #000000;
    }
    
    #wpl_wrapper h3.bar {
        color: #FFFFFF;
        background-color: #555555;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#555555), to(#000000));
        background-image: -webkit-linear-gradient(top, #555555, #000000);
        background-image: -moz-linear-gradient(top, #555555, #000000);
        background-image: -ms-linear-gradient(top, #555555, #000000);
        background-image: -o-linear-gradient(top, #555555, #000000);
        background-image: linear-gradient(to bottom, #555555, #000000);
    }
    /* layout */
    
    #wpl_wrapper {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 30px;
        margin-bottom: 20px;
        font-size: 14px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    #wpl_wrapper h2 {
        font-size: 24px;
        line-height: 30px;
    }
    
    #wpl_wrapper h3.bar {
        margin-top: 30px;
        margin-bottom: 20px;
        padding-left: 10px;
        height: 30px;
        line-height: 30px;
        font-size: 16px;
        font-family: Helvetica, Arial, sans-serif;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }
    
    #wpl_store_header {
        width: 100%;
        overflow: hidden;
    }
    
    #wpl_store_header .logo {
        float: left;
    }
    
    #wpl_store_header .hotline {
        height: 40px;
        font-size: 16px;
        line-height: 40px;
        font-weight: bold;
        padding-right: 20px;
        padding-left: 20px;
        margin-top: 7px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        text-decoration: none;
        text-shadow: 2px 2px 4px #713803;
        filter: dropshadow(color=#713803, offx=0, offy=1);
    }
    
    #wpl_wrapper .clearfix {
        clear: both;
    }
    
    #wpl_list_images a {
        border: 1px solid #ccc;
        display: block;
        float: left;
        height: 75px;
        margin-bottom: 20px;
        margin-left: 10px;
        margin-right: 10px;
        padding: 12px;
        width: 75px;
    }
    
    #wpl_wrapper .alignleft {
        float: left;
    }
    
    #wpl_wrapper .alignright {
        float: right;
    }
    
    #wpl_wrapper .section p {
        padding-left: 10px;
        padding-right: 10px;
        /* fix for firefox: */
        line-height: 1.2em;
        margin: 1em 0;
    }
    
    #wpl_wrapper .section big {
        font-size: 18px;
        font-weight: bold;
    }
    
    .primary_image,
    .wpl_product_image {
        width: 100%;
    }
    
    #gallery a {
        text-decoration: none;
    }
    /* these only apply in preview to override default styles from wp-admin */
    
    body.wp-admin #wpl_wrapper ul {
        list-style: disc inside none;
    }
    
    body.wp-admin #wpl_wrapper ul li {
        padding-left: 2em;
    }
    /** Media queries **/
    
    @media (min-width: 320px) {
        #wpl_wrapper {
            width: 95%;
        }
        #wpl_store_header .hotline {
            float: left;
        }
        #gallery {
            width: 100%;
        }
        #wpl_list_images {
            display: none;
        }
    }
    
    @media (min-width: 481px) {
        #wpl_wrapper {
            width: 95%;
        }
        #wpl_store_header .hotline {
            float: right;
            display: inline-block;
        }
        #gallery {
            display: block;
            width: 48%;
            float: left;
        }
        #description {
            width: 48%;
            float: right;
        }
        #gallery #wpl_main_image {
            max-width: 220px;
            max-height: 225px;
        }
        #wpl_list_images {
            display: block;
        }
        #wpl_list_images a {
            width: 80px;
            height: 80px;
        }
        #wpl_list_images a img.wpl_thumb {
            width: 100%;
        }
    }
    
    @media (min-width: 641px) {
        #wpl_wrapper {
            width: 95%;
        }
        #wpl_store_header .hotline {
            float: right;
        }
        #gallery {
            display: block;
            width: 45%;
            float: left;
        }
        #description {
            width: 48%;
            float: right;
        }
        #gallery #wpl_main_image {
            width: 100%;
            height: 100%;
            max-height: 370px;
            max-width: 370px;
        }
        #wpl_list_images {
            display: block;
        }
        #gallery #wpl_list_images a {
            width: 80px;
            height: 80px;
        }
        #wpl_list_images a img.wpl_thumb {
            width: 80px;
        }
    }
    
    .header-container .header-top ul li a:hover {
        color: #a9a9a9 !important;
    }
    
    .header-content .top-left i {
        display: block !important;
    }
    
    nav ul li ul li:hover {
        background: #f6f6f6 !important;
    }
    
    .product-box-holder .panel-title {
        background: #c2272d !important;
    }
</style>
    


    <div class="header-container">
    <div class="header-top">
        <div class="container" style="color: #fff;">Welcome to Our Official eBay Store
            <ul class="menu">
                <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/About-Us.html">About Us</a></li>
                <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Size-Guide.html">Size Guides</a></li>
                <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/FAQ.html">FAQ</a></li>
                <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Returns.html">Returns &amp; Exchanges</a></li>
                <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Combine-Postage.html">Postage &amp; Combine Postage</a></li>
            </ul>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <a class="logo-content" href="https://www.ebaystores.co.uk/topbrandoutletltd"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/10/topbrandoutlet-logo.gif" alt=""></a>
            <!--Logo Link-->
            <div class="header-right">
                <div class="top-left"><a href="https://www.ebaystores.co.uk/topbrandoutletltd"><i class="fas fa-home"></i>Home</a> <a href="https://contact.ebay.co.uk/ws/eBayISAPI.dll?FindAnswers&amp;requested=topbrandoutlet-ltd"><i class="far fa-question-circle"></i>Help</a></div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
        <div class="main-header">
            <div class="container">
                <div id="topcat">
                    <nav>
                        <label id="main-menu" class="toggle" for="drop">Our Menu</label>
                        <input id="drop" type="checkbox">
                        <ul class="menu">
                            <li><a href="https://www.ebaystores.co.uk/topbrandoutletltd">Home</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label class="toggle" for="drop-1">Men's</label> <a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Mens-/_i.html?_fsub=24379169016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Men's</a>
                                <input id="drop-1" type="checkbox">
                                <ul class="drp">
                                    <li>
                                        <!-- 2nd Tier Drop Down -->
                                        <label class="toggle" for="drop-2">Men's</label> <a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Mens-Clothings-/_i.html?_fsub=21437730016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Mens Clothing</a>
                                        <input id="drop-2" type="checkbox">
                                        <ul class="drp">
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/T-Shirt-/_i.html?_fsub=28058911016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">T Shirts &amp; Shirts</a></li>
                                            <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Jeans-/_i.html?_fsub=24344276016&amp;_lns=1&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Jeans</a></li>
                                            <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Hoodie-Sweatshirts-/_i.html?_fsub=24344307016&amp;_lns=1&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Hoodie &amp; Sweatshirts</a></li>
                                            <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Jackets-Coats-/_i.html?_fsub=27799810016&amp;_lns=1&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Jackets &amp; Coats</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <!-- 2nd Tier Drop Down -->
                                        <label class="toggle" for="drop-2">Men's</label> <a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Mens-Accessories-/_i.html?_fsub=21437729016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Mens Accessories</a>
                                        <input id="drop-2" type="checkbox">
                                        <ul class="drp">
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Underwear-Socks-/_i.html?_fsub=28068960016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Boxer Shorts</a></li>
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Belts-/_i.html?_fsub=28553819016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Belts</a></li>
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Bags-/_i.html?_fsub=28143743016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Bags</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label class="toggle" for="drop-1">Women's</label> <a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Womens-/_i.html?_fsub=24379170016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Women's</a>
                                <input id="drop-1" type="checkbox">
                                <ul class="drp">
                                    <li>
                                        <!-- 2nd Tier Drop Down -->
                                        <label class="toggle" for="drop-2">Women's</label> <a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Womens-Clothings-/_i.html?_fsub=21437732016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Womens Clothings</a>
                                        <input id="drop-2" type="checkbox">
                                        <ul class="drp">
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/T-Shirt-Shirts-/_i.html?_fsub=29135225016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">T Shirts &amp; Shirts</a></li>
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Jackets-Coats-/_i.html?_fsub=27799813016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Jackets &amp; Coats</a></li>
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Jeans-/_i.html?_fsub=27799818016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Jeans &amp; Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <!-- 2nd Tier Drop Down -->
                                        <label class="toggle" for="drop-2">Women's</label> <a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Womens-Accessories-/_i.html?_fsub=21437731016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Womens Accessories</a>
                                        <input id="drop-2" type="checkbox">
                                        <ul class="drp">
                                            <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Bags-/_i.html?_fsub=28553822016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Bags</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- Two Tier Drop Down -->
                                <label class="toggle" for="drop-2">All Brands</label> <a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/All-Brands-/_i.html?_fsub=21437733016&amp;_lns=1&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Shop By Brands</a>
                                <input id="drop-2" type="checkbox">
                                <ul class="drp">
                                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Diesel-/_i.html?_fsub=21437734016&amp;_lns=1&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Diesel</a></li>
                                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Gant-/_i.html?_fsub=28483612016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Gant</a></li>
                                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Kenzo-/_i.html?_fsub=28483613016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Kenzo</a></li>
                                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Farah-/_i.html?_fsub=24379158016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Farah</a></li>
                                    <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Adidas-/_i.html?_fsub=29127278016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322">Adidas</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/_i.html?_dmd=2&amp;_sid=1696178586&amp;_sop=10">New Arrivals</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Second Promotion-->
<div class="promotions-sec" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div id="box1" class="sec-box col-md-4">
                <div class="secbox-left">&nbsp;<i class="fas fa-envelope"></i></div>
                <div class="secbox-right">
                    <p class="headingp"><a href="https://my.ebay.co.uk/ws/eBayISAPI.dll?AcceptSavedSeller&amp;nlchxbox=selectedMailingList_5069746&amp;Signup=Sign+Up&amp;sellerid=topbrandoutlet-ltd&amp;AcceptSavedSeller=" target="_blank" rel="noopener">Subscribe to Newsletter</a></p>
                    <p>Style , News &amp; an Exclusive Offers</p>
                </div>
            </div>
            <div id="box2" class="sec-box col-md-4">
                <div class="secbox-left"><i class="fas fa-star"></i>&nbsp;</div>
                <div class="secbox-right">
                    <p class="headingp"><a href="https://my.ebay.co.uk/ws/eBayISAPI.dll?AcceptSavedSeller&amp;nlchxbox=selectedMailingList_5069746&amp;Signup=Sign+Up&amp;sellerid=topbrandoutlet-ltd&amp;AcceptSavedSeller=">Add Seller to Favorite's List</a></p>
                    <p>Please add us to your Favorite seller</p>
                </div>
            </div>
            <div id="box3" class="sec-box col-md-4">
                <div class="secbox-left"><i class="fas fa-smile"></i> </div>
                <div class="secbox-right">
                    <p class="headingp"><a href="https://feedback.ebay.co.uk/ws/eBayISAPI.dll?ViewFeedback2&amp;userid=topbrandoutlet-ltd&amp;ftab=AllFeedback">Our Feedback</a></p>
                    <p>We strive for excellence</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container">
        <div class="inner-row">
            <div class="col-md-12 right-content">
                <div class="panel-big-1 border-0">
                    <div class="right-content-1">
                        <div class="item-container">
                            <!-- Start product-view-name-sku -->
                            <div class="product-view-name-sku">
                                <!-- start product name -->
                                <h2 class="product-view-name"><?php echo $title; ?></h2>
                                <!-- end product name -->
                            </div>
                            <!-- End product-view-name-sku -->
                        </div>
                    </div>
                    <div class="left-content">
                        <div class="panel panel-default img-gallery">
                            <div class="image-gallery">
                                <div class="slider clearfix">
                                    <!--Image Gallery Start-->
                                    <div class="img-details gallery-main-thum">
                                        <?php echo $image_gallery; ?>
                                    </div>
                                    <div class="hallery-thum">
                                        <input id="id2" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-1.jpg">
                                        <label for="id2"> <?php echo $image_gallery1_1; ?> </label>
                                        <div class="img-details"><?php echo $image_gallery1; ?></div>

                                        <input id="id3" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-5-scaled.jpg">
                                        <label for="id3"> <?php echo $image_gallery2_2; ?> </label> 
                                        <div class="img-details"><?php echo $image_gallery2; ?></div>
                                        <input id="id4" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-2-scaled.jpg">
                                        <label for="id4"> <?php echo $image_gallery3_3; ?> </label>
                                        <div class="img-details"><?php echo $image_gallery3; ?></div>
                                        <input id="id5" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-3-scaled.jpg">
                                        <label for="id5"> <?php echo $image_gallery4_4; ?> </label>
                                        <div class="img-details"><?php echo $image_gallery4; ?></div>
                                        <input id="id6" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-4-scaled.jpg">
                                        <label for="id6"> <?php echo $image_gallery5_5; ?> </label>
                                        <div class="img-details"><?php echo $image_gallery5; ?></div>
                                        <input id="id7" name="slide_switch" type="radio" value="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/12/DIESEL-EXPOSURE-IV-LOW-W-Womens-Trainers-Denim-Sneakers-Lace-Up-Shoes-Top-Brand-Outlet-6-scaled.jpg">
                                        <label for="id7"> <?php echo $image_gallery6_6; ?> </label>
                                        <div class="img-details"><?php echo $image_gallery6; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Product Box Area -->
                        <div class="product-box-holder mt-5 product-box-single">
                            <div class="container-box">
                                <div class="panel-title text-center">
                                    <h1>Featured products</h1>
                                </div>
                                <div class="row">
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/254199062858" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_01.jpg" align=""></a>
                                    </div>
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/254134682692" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_02.jpg" align=""> </a>
                                    </div>
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/254329781376" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_03.jpg" align=""> </a>
                                    </div>
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/254331498898" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_04.jpg" align=""> </a>
                                    </div>
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/153465438719" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_05.jpg" align=""> </a>
                                    </div>
                                    <div class="product-box mb-5 col-md-4 col-sm-6 col-xs-12">
                                        <a class="display-block" href="https://www.ebay.co.uk/itm/163876759048" target="_blank" rel="noopener"> <img src="https://www.topbrandoutlet.co.uk/wp-content/uploads/2019/11/Window_06.jpg" align=""> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product box area -->
                    </div>
                </div>
                <div class="right-content-2">
                    <!--Short Description Body-Start---->
                    <div class="item-container">
                        <div id="desc" class="text-section">
                            <h1>DESCRIPTION:</h1>
                            <br>
                            <p><span style="color: #000000;"><?php echo $description; ?></span></p>
                            <p>&nbsp;</p>
                            <div>
                                <?php echo $features; ?>
                                <p>
                                    <span style="color: #ff0000;">
                                        <strong><?php echo $brand_caution; ?></strong>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="price-box">
                            <div class="price">
                                <p><b><span style="color: #ff0010; font-size: large;">Fitting Tips from Seller</span></b>&nbsp;</p>
                                <div>If you are not certain about your sizes. Please request for the actual measurement for the item by contacting us. This will allows us to avoid any disappointing situation of returning the item.</div>
                                <div><span style="color: #ff0010; font-size: large;"><b>&nbsp;</b></span></div>
                                <div><span style="color: #ff0010; font-size: large;"><b>Disclaimer</b></span>&nbsp;</div>
                                <div>Due to the quality differentiation between different monitors, the picture may not reflect the actual colour of the item. Please pay attention to the measurements or request if not available, as it may vary depending on the model or manufacturer. Measurements are taken when laid flat and it might be with + - 1 cm error.</div>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <!--Promo Text Body-Start---->
                    <div class="item-container">
                        <div id="list-promo" class="text-section">
                            <!--Top Promo Icons/Text-->
                            <div class="inn-container">
                                <div class="box-list">
                                    <div class="box-promo"><i class="fas fa-shipping-fast"></i>
                                        <p><strong>FAST SHIPPING</strong>
                                            <br>ON TIME &amp; SECURE</p>
                                    </div>
                                </div>
                                <div class="box-list">
                                    <div class="box-promo"><i class="fas fa-credit-card"></i>
                                        <p><strong> 30 DAYS RETURN</strong>
                                            <br>MONEYBACK GUARANTEE</p>
                                    </div>
                                </div>
                                <div class="box-list">
                                    <div class="box-promo"><i class="fas fa-award"></i>
                                        <p><strong>AUTHENTICITY GUARANTEE</strong>
                                            <br>QUALITY ITEMS</p>
                                    </div>
                                </div>
                                <div class="box-list">
                                    <div class="box-promo"><i class="fas fa-user-shield"></i>
                                        <p><strong>ONLINE SUPPORT</strong>
                                            <br>QUICK &amp; RELIABLE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="tabs">
                <input id="tab1" checked="checked" name="tabs" type="radio">
                <label for="tab1"> Delivery
                    <!--------- Tab 1 Name --------->
                </label>
                <input id="tab2" name="tabs" type="radio">
                <label for="tab2"> Returns
                    <!--------- Tab 2 Name --------->
                </label>
                <input id="tab3" name="tabs" type="radio">
                <label for="tab3"> Payments
                    <!--------- Tab 3 Name --------->
                </label>
                <input id="tab4" name="tabs" type="radio">
                <label for="tab4"> About Us
                    <!--------- Tab 4 Name --------->
                </label>
                <div id="tab-content1" class="tab-content">
                    <!---------Tab 1 Content--------->
                    <p>All eligible items are dispatched through Royal Mail within 24 hours of receiving cleared funds. Items are carefully &amp; professionally wrapped, so you receive your item in perfect condition. Items bought over the weekends and Bank Holidays will be dispatched on the 1st postal day.</p>
                    <p>Items should be received within 2-3 working days. In the unlikely event that you do not receive your item within this time, please allow 10 working days for delivery before contacting us, as the Royal Mail do not consider an item lost before that time (15 days for international).</p>
                </div>
                <div id="tab-content2" class="tab-content">
                    <!---------Tab 2 Content--------->
                    <p>In the event of Returns, Simply send it back to us within 14 days of receiving it in its original packaging, unused and unworn condition and we will issue a full refund once we receive the item(s).</p>
                    <p>However, please contact us with the details if an exchange is needed and we will be more than happy to do so.</p>
                </div>
                <div id="tab-content3" class="tab-content">
                    <!---------Tab 3 Content--------->
                    <p>We currently accept the following payment methods</p>
                    <br>
                    <p>Paypal</p>
                    <p>We do not accept paper cheques or postal orders.</p>
                    <p>Payment must be received within 7 days.</p>
                    <p>To ensure your purchase is protected by the eBay Protection Scheme it will only be delivered to your registered PayPal/ eBay address.</p>
                </div>
                <div id="tab-content4" class="tab-content">
                    <!---------Tab 4 Content--------->
                    <p>Our eBay store is a small family-run business, where we still put our customers first. We are always looking for the best suppliers, in order to provide our customers with the highest quality items and best deals to be found on the internet. As much as our customers love our items and service, we're always open to suggestions on how to improve things: if there's something you think we could be doing better, then don't hesitate to let us know</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
</section>
<!--Footer Start-->
<section class="footer">
    <div class="container">
        <div class="inner-row">
            <div id="fbox-1" class="fbox quick-link">
                <h4>Store Categories</h4>
                <!--Footer Tab-1-->
                <ul>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Mens-/_i.html?_fsub=24379169016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322" target="_blank" rel="noopener">Men's</a></li>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Womens-/_i.html?_fsub=24379170016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322" target="_blank" rel="noopener">Women's</a></li>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Diesel-/_i.html?_fsub=21437734016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322" target="_blank" rel="noopener">Diesel</a></li>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Gant-/_i.html?_fsub=28483612016&amp;_sid=1696178586&amp;_trksid=p4634.c0.m322" target="_blank" rel="noopener">Gant</a></li>
                </ul>
            </div>
            <div id="fbox-2" class="fbox quick-link">
                <h4>Information Links</h4>
                <!--Footer Tab-4-->
                <ul>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/_i.html?_dmd=2&amp;_sid=1696178586&amp;_sop=10" target="_blank" rel="noopener">New Arrivals</a></li>
                    <li><a href="https://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/_i.html?rt=nc&amp;_dmd=2&amp;_sid=1696178586&amp;_trksid=p4634.c0.m14&amp;_sop=1&amp;_sc=1" target="_blank" rel="noopener">Ending Soon</a></li>
                    <li><a href="https://feedback.ebay.co.uk/ws/eBayISAPI.dll?ViewFeedback2&amp;userid=topbrandoutlet-ltd&amp;ftab=AllFeedback&amp;myworld=true&amp;rt=nc" target="_blank" rel="noopener">Feedback</a></li>
                    <li><a href="http://www.ebaystores.co.uk/Top-Brand-Outlet-Ltd/Returns.html" target="_blank" rel="noopener">Returns</a></li>
                </ul>
            </div>
            <div id="fbox-3" class="fbox footer-signup">
                <h4>Newsletter</h4>
                <!--Footer Tab-2-->
                <p>Sign up to our newsletter for special deals</p>
                <a title="SUBMIT" href="https://my.ebay.co.uk/ws/eBayISAPI.dll?AcceptSavedSeller&amp;sellerid=topbrandoutlet-ltd&amp;ssPageName=STRK:MEFS:ADDSTR&amp;rt=nc" target="_blank" rel="noopener">Subscribe Newsletter</a>
                <!--Newsletter Link-->
            </div>
            <div id="fbox-4" class="fbox">
                <h4>We Accept</h4>
                <!--Footer Tab-3-->
                <p><img class="img-responsive" src="https://maxkhaninc.com/MaxKhan/images/payment.png">
                    <!--Payment Banner-Footer-->
                </p>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>
    </div>
    <div class="copyrights">
        <p class="text-center">Top Brand Outlet Copyright © <?php echo Date('Y') ?>. All rights reserved.</p>
    </div>
</section>



