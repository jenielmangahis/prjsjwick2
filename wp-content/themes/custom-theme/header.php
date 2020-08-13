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
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
	<link rel='preload' href='http://holisticwebdevelopment3.com/sjwickcpav2/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.woff?5510888' as='font' type='font/woff' crossorigin>
	<link rel='preload' href='http://holisticwebdevelopment3.com/sjwickcpav2/wp-content/plugins/revslider/public/assets/fonts/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0' as='font' type='font/woff' crossorigin>
</head>
<body>
<section class="home-top">
	<div class="container clearfix site-info">
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
		<div class="col-5 left pl-0 pr-0 client-login">
			<a target="_blank" class="client-button" href="https://voffice.dillners.com/securelogin.asp?acct=134">Client Login</a>
		</div>
	</div>
</section>
<section class="home-navigation-mobile mobile-only">
	<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<div class="navigation-container">
		<div class="col-6 left pl-0 pr-0 home-logo">
			<a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">
				<img src="<?= $image[0]; ?>" class="logo-default-mobile" />
			</a>
		</div>
		<div class="col-6 left pl-0 pr-0">
			<i class="fa fa-bars" id="mobile-bars" aria-hidden="true"></i>
		</div>
	</div>
</section>

<section class="mobile-only mobile-menu hide">
	<div class="col-12 pl-4 pr-4">
		<ul id="header-mobile-menu" class="header-mobile-menu pos-inherit">
				<li class="menu-item-mobile"><a href="#">Home</a></li>
				<li class="menu-item-mobile carit pos-inherit gray-out">
					<a href="#">About us</a>
					<div class="sub-menu-mobile">
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="javascript:void(0);">Services</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/accounting-bookkeeping'; ?>">Accounting &amp; Bookkeeping</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/business-consulting/'; ?>">Business Consulting</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/cfo-services'; ?>">CFO Services</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/payroll-services'; ?>">Payroll</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/quickbooks-accounting'; ?>">QuickBooks Accounting</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/small-business-package'; ?>">Small Business Package</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/tax-service'; ?>">Tax Service</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="javascript:void(0);">Industries</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/construction'; ?>">Construction Accounting</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/manufacturing-accounting'; ?>">Manufacturing Accounting</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/restaurant-business'; ?>">Restaurant Business</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/retail-wholesale-accounting'; ?>">Retail &amp; Wholesale Accounting</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="javascript:void(0);">Our Office</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/our-office'; ?>">About Us</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/steve-wick'; ?>">Steve Wick</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/staff-members'; ?>">Staff Members</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/testimonials'; ?>">Testimonials</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/whats-important-to-us'; ?>">What’s Important to Us</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="javascript:void(0);">Serving Clients In</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/loveland'; ?>">Loveland</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/fort-collins'; ?>">Fort Collins</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/windsor'; ?>">Windsor</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/greeley'; ?>">Greeley</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/wellington'; ?>">Wellington</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/timnath'; ?>">Timnath</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/berthoud'; ?>">Berthoud</a>
						</div>
					</div>
				</li>
				<li class="menu-item-mobile carit gray-out">
					<a href="#">Tools</a>
					<div class="sub-menu">
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="#">Forms for Payroll &amp; Employee Files</a>
							<a class="no-carit pointer" href="http://www.uscis.gov/sites/default/files/files/form/i-9.pdf">Immigration I-9 Form</a>
							<a class="no-carit pointer" href="http://www.irs.gov/pub/irs-pdf/fw4.pdf?portlet=3">W-4 Form</a>
							<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/Colorado%20Affirmation%20Form.pdf">Colorado Affirmative Action Form</a>
							<a class="no-carit pointer" href="http://www.colorado.gov/cs/Satellite/CDLE-LaborLaws/CDLE/1240336908932">Colorado Employee Verification Requirements</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="#">Forms for Independent Contractors</a>
							<a class="no-carit pointer" href="http://www.irs.gov/pub/irs-pdf/fw9.pdf?portlet=3">W9 For</a>
							<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/independent%20contractor%20form.pdf">Independent Contractors – Pinnacol Insurance</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="#">Orgainzers &amp; More</a>
							<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/YE%20Business%20Questionaire.pdf">Year End Income Tax Organizer</a>
							<a class="no-carit pointer" href="http://www.ssa.gov/myaccount/">Online Social Security Statements</a>
							<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/Third%20Party%20Disclosurer%20Authorization.pdf">Third Party Authorization</a>
							<a class="no-carit pointer" href="https://sjwickcpa.com/wp-content/uploads/2017/02/Year-End-W2.doc">Payroll &amp; 1099 Year End Info<</a>
							<a class="no-carit pointer" href="https://sjwickcpa.com/wp-content/uploads/2017/02/2016-Ind-Tax-Organizer.pdf">Personal Income Tax Organizer</a>
						</div>
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit header" href="javascript:void(0);">Taxes &amp; Tips</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/berthoud'; ?>">Tax Due Dates</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/tax-due-duties'; ?>">Tips for Business Owners</a>
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/blog'; ?>">Blog</a>
						</div>
					</div>
				</li>
				<li class="menu-item-mobile carit gray-out">
					<a href="#">Support</a>
					<div class="sub-menu-small">
						<div class="col-12 pl-0 pr-0 mobile-sub left">
							<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/teamviewer'; ?>">Teamviewer</a>
						</div>
					</div>
				</li>
				<li class="menu-item-mobile gray-out"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
				<li class="menu-item-mobile gray-out"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Client Login</a></li>
				<!-- <li class="menu-item"><a href="#"><i class="fa fa-search search-nav" aria-hidden="true"></i></a></li> -->
		</ul>
	</div>
</section>

<section class="home-navigation desktop-only">
	<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<div class="navigation-container">
		<div class="col-5 left pl-0 pr-0 home-logo">
			<div id="logo">
				<a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">
					<img src="<?= $image[0]; ?>" class="logo-default" />
				</a>
			</div>
		</div>
		<div class="col-7 left pl-0 pr-0 nav-desktop cl-collapse pos-inherit">
			<?php
				$v = 0;
				$menuargs = array(
					"theme_location" => "primary",
					"menu_class" => "s-menu",
					"menu_id" => "MAIN-MENU",
				);
				$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
			?>
			<nav class="clearfix pos-inherit">
				<ul id="header-desktop-menu" class="header-desktop-menu pos-inherit">
						<li class="menu-item"><a href="#">Home</a></li>
						<li class="menu-item carit pos-inherit">
							<a href="#">About us</a>
							<div class="sub-menu">
								<div class="col-3 left">
									<a class="bold no-carit" href="javascript:void(0);">Services</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/accounting-bookkeeping'; ?>">Accounting &amp; Bookkeeping</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/business-consulting/'; ?>">Business Consulting</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/cfo-services'; ?>">CFO Services</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/payroll-services'; ?>">Payroll</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/quickbooks-accounting'; ?>">QuickBooks Accounting</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/small-business-package'; ?>">Small Business Package</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/services/tax-service'; ?>">Tax Service</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="javascript:void(0);">Industries</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/construction'; ?>">Construction Accounting</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/manufacturing-accounting'; ?>">Manufacturing Accounting</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/restaurant-business'; ?>">Restaurant Business</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/retail-wholesale-accounting'; ?>">Retail &amp; Wholesale Accounting</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="javascript:void(0);">Our Office</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/our-office'; ?>">About Us</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/steve-wick'; ?>">Steve Wick</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/staff-members'; ?>">Staff Members</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/testimonials'; ?>">Testimonials</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/whats-important-to-us'; ?>">What’s Important to Us</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="javascript:void(0);">Serving Clients In</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/loveland'; ?>">Loveland</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/fort-collins'; ?>">Fort Collins</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/windsor'; ?>">Windsor</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/greeley'; ?>">Greeley</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/wellington'; ?>">Wellington</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/timnath'; ?>">Timnath</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/berthoud'; ?>">Berthoud</a>
								</div>
							</div>
						</li>
						<li class="menu-item carit">
							<a href="#">Tools</a>
							<div class="sub-menu">
								<div class="col-3 left">
									<a class="bold no-carit" href="#">Forms for Payroll &amp; Employee Files</a>
									<a class="no-carit pointer" href="http://www.uscis.gov/sites/default/files/files/form/i-9.pdf">Immigration I-9 Form</a>
									<a class="no-carit pointer" href="http://www.irs.gov/pub/irs-pdf/fw4.pdf?portlet=3">W-4 Form</a>
									<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/Colorado%20Affirmation%20Form.pdf">Colorado Affirmative Action Form</a>
									<a class="no-carit pointer" href="http://www.colorado.gov/cs/Satellite/CDLE-LaborLaws/CDLE/1240336908932">Colorado Employee Verification Requirements</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="#">Forms for Independent Contractors</a>
									<a class="no-carit pointer" href="http://www.irs.gov/pub/irs-pdf/fw9.pdf?portlet=3">W9 For</a>
									<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/independent%20contractor%20form.pdf">Independent Contractors – Pinnacol Insurance</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="#">Orgainzers &amp; More</a>
									<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/YE%20Business%20Questionaire.pdf">Year End Income Tax Organizer</a>
									<a class="no-carit pointer" href="http://www.ssa.gov/myaccount/">Online Social Security Statements</a>
									<a class="no-carit pointer" href="https://voffice.dillners.com/resources/R134/Third%20Party%20Disclosurer%20Authorization.pdf">Third Party Authorization</a>
									<a class="no-carit pointer" href="https://sjwickcpa.com/wp-content/uploads/2017/02/Year-End-W2.doc">Payroll &amp; 1099 Year End Info<</a>
									<a class="no-carit pointer" href="https://sjwickcpa.com/wp-content/uploads/2017/02/2016-Ind-Tax-Organizer.pdf">Personal Income Tax Organizer</a>
								</div>
								<div class="col-3 left">
									<a class="bold no-carit" href="javascript:void(0);">Taxes &amp; Tips</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/areas-of-practice/berthoud'; ?>">Tax Due Dates</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/tax-due-duties'; ?>">Tips for Business Owners</a>
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/blog'; ?>">Blog</a>
								</div>
							</div>
						</li>
						<li class="menu-item carit">
							<a href="#">Support</a>
							<div class="sub-menu-small">
								<div class="col-12 left">
									<a class="no-carit pointer" href="<?php echo get_bloginfo('url') . '/teamviewer'; ?>">Teamviewer</a>
								</div>
							</div>
						</li>
						<li class="menu-item"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
						<!-- <li class="menu-item"><a href="#"><i class="fa fa-search search-nav" aria-hidden="true"></i></a></li> -->
				</ul>
			</nav>
		</div>
	</div>
</section>
<div class="body-content">
