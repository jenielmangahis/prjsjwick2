<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
	<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COxygen%3A300%2Cregular%2C700%7CMontserrat%3A700%2C400%2C900%26amp%3Bsubset%3Dlatin&amp;subset=latin%2Call&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile_menu.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
	<?php if ( is_front_page() && is_home() ) { ?>
	<link rel='preload' href='http://holisticwebdevelopment3.com/sjwickcpav2/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.woff?5510888' as='font' type='font/woff' crossorigin>
	<link rel='preload' href='http://holisticwebdevelopment3.com/sjwickcpav2/wp-content/plugins/revslider/public/assets/fonts/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0' as='font' type='font/woff' crossorigin>
	<?php } ?>
</head>
<body>
<section class="home-top">
	<div class="container clearfix">
		<div class="col-7 left pl-0 pr-0">
		  <div id="et-info">
		     <a href="tel:19702243366" class="left"><i class="fa fa-phone home-social" aria-hidden="true"></i><span id="et-info-phone">970-224-3366</span></a>
		     <ul class="social-icons left">
		        <li>
					<a href="https://www.facebook.com/sjwickcpa"><i class="fa fa-facebook home-social" aria-hidden="true"></i></a>
		        </li>
		        <li>
					<a href="http://www.linkedin.com/in/stevenwick" class="icon" target="_blank"><i class="fa fa-linkedin home-social" aria-hidden="true"></i></a>
				</li>
		     </ul>
		  </div>
		</div>
		<div class="col-5 left pl-0 pr-0">
			<a target="_blank" class="client-button" href="https://voffice.dillners.com/securelogin.asp?acct=134">Client Login</a>
		</div>
	</div>
</section>
<section class="home-navigation desktop-only">
	<div class="navigation-container">
		<div class="col-5 left pl-0 pr-0 home-logo">
			<div id="logo">
				<a href="<?php echo home_url('/'); ?>">
					<img src="https://sjwickcpa.com/wp-content/uploads/2018/07/long-logo.png" class="logo-default" />
				</a>
			</div>
		</div>
		<div class="col-7 left pl-0 pr-0 nav-desktop cl-collapse">
			<?php
				$v = 0;
				$menuargs = array(
					"theme_location" => "primary",
					"menu_class" => "s-menu",
					"menu_id" => "MAIN-MENU",
				);
				$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
			?>
			<nav class="clearfix">
				<ul id="header-desktop-menu" class="header-desktop-menu">
						<li class="menu-item"><a href="#">Home</a></li>
						<li class="menu-item carit">
							<a href="#">About us</a>

							<ul class="sub-menu">
								<li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-323"><a>Services</a>
									<ul class="sub-menu" style="">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316"><a href="https://sjwickcpa.com/services/accounting-bookkeeping/">Accounting &amp; Bookkeeping</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-317"><a href="https://sjwickcpa.com/services/business-consulting/">Business Consulting</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1694"><a href="https://sjwickcpa.com/services/cfo-services/">CFO Services</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318"><a href="https://sjwickcpa.com/services/payroll-services/">Payroll Services</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-319"><a href="https://sjwickcpa.com/services/quickbooks-accounting/">QuickBooks Accounting</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a href="https://sjwickcpa.com/services/small-business-package/">Small Business Package</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-321"><a href="https://sjwickcpa.com/services/tax-service/">Tax Service</a></li>
									</ul>
								</li>
								<li class="rhaenys menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1535"><a>Industries</a>
									<ul class="sub-menu" style="">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a href="https://sjwickcpa.com/areas-of-practice/construction/">Construction Accounting</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-307"><a href="https://sjwickcpa.com/areas-of-practice/manufacturing-accounting/">Manufacturing Accounting</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309"><a href="https://sjwickcpa.com/areas-of-practice/restaurant-business/">Restaurant Business</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310"><a href="https://sjwickcpa.com/areas-of-practice/retail-wholesale-accounting/">Retail &amp; Wholesale Accounting</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1553"><a href="#">Our Office</a>
									<ul class="sub-menu" style="">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903"><a href="https://sjwickcpa.com/our-office/">About Us</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902"><a href="https://sjwickcpa.com/steve-wick/">Steve Wick</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a href="https://sjwickcpa.com/staff-members/">Staff Members</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900"><a href="https://sjwickcpa.com/testimonials/">Testimonials</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1346"><a href="https://sjwickcpa.com/whats-important-to-us/">What’s Important to Us</a></li>
									</ul>
								</li>
								<li class="rhaenys menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1536"><a href="#">Serving Clients In</a>
									<ul class="sub-menu" style="">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-306"><a href="https://sjwickcpa.com/areas-of-practice/loveland/">Loveland</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-304"><a href="https://sjwickcpa.com/areas-of-practice/fort-collins/">Fort Collins</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-322"><a href="https://sjwickcpa.com/areas-of-practice/windsor/">Windsor</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-305"><a href="https://sjwickcpa.com/areas-of-practice/greeley/">Greeley</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-312"><a href="https://sjwickcpa.com/areas-of-practice/wellington/">Wellington</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-311"><a href="https://sjwickcpa.com/areas-of-practice/timnath/">Timnath</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302"><a href="https://sjwickcpa.com/areas-of-practice/berthoud/">Berthoud</a></li>
									</ul>
								</li>
							</ul>

						</li>
						<li class="menu-item carit"><a href="#">Tools</a></li>
						<li class="menu-item carit"><a href="#">Support</a></li>
						<li class="menu-item"><a href="#">Contact</a></li>
						<li class="menu-item"><a href="#"><i class="fa fa-search search-nav" aria-hidden="true"></i></a></li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<div class="body-content">
