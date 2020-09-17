<html oncontextmenu="return false">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$_REQUEST["product_name"] ?? "";?></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php Asset::css(["external/mobile-cake"]); ?>
	<style type="text/css">
        :root {
            --primary-color: #<?=$_REQUEST["theme_primary"] ?? "f2b66d"; ?> !important;
            --secondary-color: #<?=$_REQUEST["theme_secondary"] ?? "143f59"; ?> !important;
        }
	</style>
</head>

<body>
<section>
	<div class="container hedaer-big-page">
		<div class="row">
			<div class="col-md-4 logo">
                <?php if($_REQUEST["logo_mode"] == "image"): ?>
                    <img class="img-fluid" alt="Brand" src="<?=$_REQUEST["store_logo"] ?? false?>" >
                <?php else: ?>
                    <h2><?=$_REQUEST["store_logo"];?></h2>
                <?php endif; ?>
			</div>

            <div class="col-md-2 col-sm-3 nav-1 ">
                <img src="<?=File::path("icons/shopping-bag.png");?>" class="img-fluid" width="30" height="30">
				<a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/str/<?=$_REQUEST["ebay_username"] ?? "";?>" target="_blank">Our Store</a>
			</div>

			<div class="col-md-2 col-sm-3 nav-2">
                <img src="<?=File::path("icons/users.png");?>" class="img-fluid" width="30" height="30">
				<a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/fdbk/feedback_profile/<?=$_REQUEST["ebay_username"] ?? "";?>?filter=feedback_page:All" target="_blank">Users</a>
			</div>

			<div class="col-md-2 col-sm-3 nav-4">
                <img src="<?=File::path("icons/star.png");?>" class="img-fluid" width="30" height="30">
				<a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswersrequested=<?=$_REQUEST["ebay_username"] ?? "";?>" target="_blank">Feedback</a>
			</div>

			<div class="col-md-2 col-sm-3 nav-4">
                <img src="<?=File::path("icons/contact.png");?>" class="img-fluid" width="30" height="30">
				<a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&frm=284&requested=<?=$_REQUEST["ebay_username"] ?? "";?>" target="_blank">Contact</a>
			</div>

		</div>
	</div>
</section>
<section class="basic-navigation">
	<div class="container-fluid basic-menu">
		<div class="container">
			<ul>
				<li><a href="https://ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/<?="usr/" . ($_REQUEST["ebay_username"] ?? "");?>" target="_blank"><i class="fa fa-home"></i></a>
					<br>
				</li>
                <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["main_menu"])){ foreach($_REQUEST["menu"]["main_menu"] as $useful_links): ?>
                    <li><a target="_blank" class="text-uppercase" href="<?=$useful_links["url"];?>"><?=$useful_links["title"];?></a></li>
                <?php endforeach; } ?>
			</ul>
		</div>
	</div>
</section>
<section class="mobile-nav-img">
	<div class="container mabile-links">
		<div class="row img-links-zeilen">
			<div class="col-md-3 link-1 text-center">
				<li>
					<a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/usr/<?=$_REQUEST["ebay_username"] ?? ""?>" target="_blank"><img src="<?=File::path("icons/shopping-bag.png");?>" class="img-fluid mobile-nav-LinksImg" width="39" height="39"></a>
				</li>
			</div>
			<div class="col-md-3 link-2 text-center">
				<li>
					<a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/fdbk/feedback_profile/<?=$_REQUEST["ebay_username"] ?? ""?>?filter=feedback_page:All&_trksid=p2545226.m2531.l4585" target="_blank"><img src="<?=File::path("icons/star.png");?>" class="img-fluid mobile-nav-LinksImg" width="33" height="33"></a>
				</li>
			</div>
			<div class="col-md-3 link-3 text-center">
				<li>
					<a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/usr/<?=$_REQUEST["ebay_username"] ?? ""?>" target="_blank"><img src="<?=File::path("icons/users.png");?>" class="img-fluid" mobile-nav-LinksImg width="34" height="34"></a>
				</li>
			</div>
			<div class="col-md-3 link-4 text-center">
				<li>
					<a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&frm=284&requested=<?=$_REQUEST["ebay_username"] ?? ""?>" target="_blank"><img src="<?=File::path("icons/contact.png");?>" class="img-fluid mobile-nav-LinksImg" width="32" height="32"></a>
				</li>
			</div>
		</div>
	</div>
</section>
<div class="container first-service">
	<div class="row">
		<div class="col-md-3 p11 text-center">
			<p><i class="fa fa-clock-o"></i>Fast <strong class="strong">Delivery</strong></p>
		</div>
		<div class="col-md-3 p12 text-center">
			<p><i class="fa fa-lock" aria-hidden="true"></i><strong class="strong">100%</strong> Satisfaction</p>
		</div>
		<div class="col-md-3 p13 text-center">
			<p><i class="fa fa-pencil-square-o" aria-hidden="true"></i><strong class="strong">100%</strong> Original</p>
		</div>
		<div class="col-md-3 p14 text-center">
			<p class="p-last" style="border-right: none;"><i class="fa fa-check-square-o" aria-hidden="true"></i><strong class="strong">Brand</strong> Warrenty</p>
		</div>
	</div>
</div>
<section>
	<div class="container artikel-bild">
		<div class="row">
			<div class="col-md-6">
				<img src="<?=$_REQUEST["product_image"][0] ?? "https://rocket-bytes.de/Basic%20Template%20Images/big_page_art_pic.png";?>" class="img-fluid" artikel-bild">
			</div>
			<div class="col-md-6">
				<h1><?=$_REQUEST["product_name"] ?? "Product Name"; ?></h1>
				<?=$_REQUEST["product_details"] ?? ""?>
				<div class="row preis-1">
					<div class="col-md-6 preis">
                        <?php if(!empty($_REQUEST["product_features"])) { foreach($_REQUEST["product_features"] as $fet): ?>
                            <h4><i class="<?php echo $fet["icon"];?>"></i> <?=$fet["title"];?></h4>
                        <?php endforeach; }?>
						<a href="#" target="_blank"><i class="fa fa-heart"></i>Add to Favourite</a>
					</div>
					<div class="col-md-6 sofort-kaufen text-center">
						<a target="_blank" href="#">
                             Buy now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container beschreibung">
	<div class="row">
		<div class="col-md-6 text-center beschreibung-1">
			<h1>Product Details</h1>
		</div>
	</div>
</div>
<div class="container beschreibung-2">
	<div class="dreieck-down"></div>
	<?=$_REQUEST["product_details"] ?? ""?>
</div>
<section class="eigenschaften">
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<h1>Product Features</h1>
                <?php if(!empty($_REQUEST["product_features"])) { foreach($_REQUEST["product_features"] as $delivery): ?>
                    <p class="text-center"><i class="<?php echo $delivery["icon"];?>"></i> <?=$delivery["title"];?></p>
                <?php endforeach; }?>
			</div>
			<div class="col-md-6">
				<h1>Product Specifications</h1>
                <?php if(!empty($_REQUEST["specifications"])) { foreach($_REQUEST["specifications"] as $spec): ?>
                    <p class="text-center"><?=$spec["title"];?> - <?=$spec["value"];?></p>
                <?php endforeach; }?>
			</div>
		</div>
	</div>
</section>
<section class="ihr-vorteile">
	<div class="container ihr-vorteile-2">
		<h1>Why us</h1>
        <h2>Look, why you should choose us</h2>

		<div class="row">
			
            <?php if(!empty($_REQUEST["whyus_text"])) { foreach($_REQUEST["whyus_text"] as $wtext): ?>
                <div class="col-md-4">
                    <div class="text-center text-muted"><i class="<?= $wtext["icon"];?> fa-4x"></i></div>
                    <h3><?= $wtext["title"];?></h3>
                    <p><?= $wtext["subtitle"];?></p>
                </div>
            <?php endforeach; }?>

		</div>
	</div>
</section>
<section class="cross-selling">
	<div class="container cross-sell">
		<h1>Other Products</h1>
		<div class="row">
            <?php if(isset($_REQUEST["other_products"])): foreach($_REQUEST["other_products"] as $other_product): ?>
                <div class="col-md-4">
                    <img src="<?=$other_product["image"];?>" class="img-fluid" ihr-vorteile-icon">
                    <h2><?=$other_product["title"];?></h2>
                    <a href="https://www.ebay<?=$_REQUEST["ebay_domain"] ?? ".co.uk";?>/itm/<?=$other_product["id"];?>">VIEW</a>
                </div>
            <?php endforeach; endif; ?>


		</div>
	</div>
</section>
<section class="customer-feedback">
	<div class="container feedback-rb">
		<h1>Our Customer"s Feedback</h1>
		<div class="row">

            <?php if(isset($_REQUEST["feedback"])){ foreach($_REQUEST["feedback"] as $feedback): ?>
                <div class="col-md-6 feedback-01">
                    <img src="<?=File::path("icons/5-stars.png");?>" class="img-fluid" width="200" height="40">
                    <p>"<?=$feedback["content"];?>"
                        <br> <?=$feedback["buyer_id"];?>
                    </p>
                </div>

            <?php endforeach;} ?>


		</div>
	</div>
</section>
<div class="container-fluid newsletter">
	<div class="container">
		<h1>Don"t miss any update</h1>
		<p>Subsribe our newsletter</p>
		<p><a target="_blank" href="https://my.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk"?>/ws/eBayISAPI.dll?AcceptSavedSeller&sellerid=<?=$_REQUEST["ebay_username"] ?? ""; ?>&ssPageName=STRK:MEFS:ADDSTR&rt=nc">Newsletter</a></p>
	</div>
</div>
<div class="container-fluid footer">
	<div class="container footer-inner">
		<div class="row">
			<div class="col-md-4">
				<h3>About us</h3>
				<?=$_REQUEST["about_details"] ?? ""?>
			</div>
			<div class="col-md-4">
				<h3>Shop Links</h3>
				<ul class="p-0">
                    <?php if(isset($_REQUEST["menu"]) && !empty($_REQUEST["menu"]["footer_menu"])){ foreach($_REQUEST["menu"]["footer_menu"] as $useful_links): ?>
                        <li>
                            <a href="<?=$useful_links["url"];?>"  target="_blank" ><i class="fa fa-angle-right"></i> <?=$useful_links["title"];?></a>
                        </li>
                    <?php endforeach; } ?>


				</ul>
			</div>
			<div class="col-md-4 kontakt-last">
				<h3>Contact us</h3>
				<p style="padding-bottom: 30px;">Feel free to contact us anytime at <?=$_REQUEST["ebay_email"] ?? "support@ebayoutsource.co.uk"?></p>
				<a href="https://contact.ebay<?=$_REQUEST["ebay_domain"] ?? "co.uk";?>/ws/eBayISAPI.dll?FindAnswers&frm=284&requested=<?=$_REQUEST["ebay_username"] ?? "";?>" target="_blank">Contact</a></div>
		</div>
	</div>
</div>
<div class="container-fluid zahlung-icons">
	<div class="container text-left">
		<h1>We accept</h1>
		<p><i class="fa fa-paypal" aria-hidden="true"></i>Paypal</p>
		<p><i class="fa fa-credit-card" aria-hidden="true"></i>Master Card</p>
		<p><i class="fa fa-cc-visa" aria-hidden="true"></i>VISA</p>
	</div>
</div>
<div class="container-fluid copyright text-center">
	<p>© Copyright 2020 - <?=$_REQUEST["store_name"] ?? "";?>
		<br>(Designed by eBayoutsource.co.uk)</p>
</div>
</body>

</html>