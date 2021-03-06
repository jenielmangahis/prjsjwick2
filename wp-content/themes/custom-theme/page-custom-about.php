<?php
/**
Template Name: About Custom Page
 */
?>
<?php get_header(); ?>
<section class="about-form">
  <div class="row">
    <div class="col-12 col-md-6" style="background-image:url(https://sjwickcpa.com/wp-content/uploads/2018/07/horsetooth.jpg);background-repeat: repeat;">
      
    </div>

    <div class="col-12 col-md-6">
      <?php echo do_shortcode('[contact-form-7 id="2402" title="Contact form 1"]'); ?>
    </div>
  </div>
</section>
<section class="home-services-b desktop-only">
  <div class="container pl-5 pr-5">
        <?php 
            $banner_title = get_field('banner_title');
            $banner_description = get_field('banner_description');
            if( $banner_title == '' ){
              $banner_title = get_the_title();
            }
            if( $banner_description == '' ){
              $banner_description = "Join the hundreds of highly effective managers, leaders and entrepreneurs we've assisted over the last 20 years - Contact us today to get started!";
            }
        ?>    
        <h2 class="montserrat text-center text-white bold text-shadow uppercase"><?php echo $banner_title; ?></h2>
        <p class="text-center text-white text-italic pl-5 pr-5"><?php echo $banner_description; ?></p>
        <a class="call-contact" href="<?php echo get_bloginfo('url') . '/contact'; ?>">LET'S TALK</a>
      </div>
  <div class="container-mountain">
  </div>
</section>
<section class="home-services-c">
  <div class="home-icon-content">
    <div class="container-80">
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="<?php bloginfo('template_directory'); ?>/images/homepage/business-consulting-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">BUSINESS CONSULTING</a>
        </h5>
      </div>
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="<?php bloginfo('template_directory'); ?>/images/homepage/payroll-services-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">PAYROLL & TAX SERVICES</a>
        </h5>
      </div>
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="<?php bloginfo('template_directory'); ?>/images/homepage/small-business-packages-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">SMALL BUSINESS PACKAGES</a>
        </h5>
      </div>
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="<?php bloginfo('template_directory'); ?>/images/homepage/taxes-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">OUTSOURCED CFO SERVICES</a>
        </h5>
      </div>
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="<?php bloginfo('template_directory'); ?>/images/homepage/online-book-keeping-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">QUICKBOOKS ACCOUNTING</a>
        </h5>
      </div>
      <div class="col-2 left">
        <a href="/services/business-consulting/">
          <img class="home-icon-service" src="https://sjwickcpa.com/wp-content/uploads/2018/07/accounting-bookkeeping-150x150.png" alt="" width="150" height="150">
        </a>
        <h5 class="text-center txt-service">
          <a href="/services/business-consulting/">ACCOUNTING & BOOKKEEPING</a>
        </h5>
      </div>
    </div>
  </div>
</section>
<section class="home-un-access">
  <div class="bg-subtle-brown">
    <div class="container card-acs pl-0 pr-0">
      <div class="col-6 left spb-4">
        <div class="dots-list">
          <ol>
            <li>
              <h4 class="text-black text-default">Construction Accounting</h4>
            </li>
            <li>
              <h4 class="text-black text-default">Manufacturing Accounting</h4>
            </li>
            <li>
              <h4 class="text-black text-default">Restaurant Business Accounting</h4>
            </li>
            <li>
              <h4 class="text-black text-default">Retail &amp; Wholesale Accounting</h4>
            </li>
          </ol>
        </div>
      </div>
      <div class="col-6 left pl-0 pr-0">
        <div class="bg-brown-card">
          <div>
            <h3 class="et_pb_module_header text-white text-center uppercase montserrat text-shadow">Unlimited Access</h3>
            <div class="text-white text-center uppercase montserrat">We are your team of accounting professionals, here to help you whenever you need us</div>
          </div>
        </div>
        <div class="container-description">
          <p>We want to be that resource for you. We work directly with you to not only reconcile the bookkeeping, but to plan and advise you, based on the numbers. The best part of our plan is&nbsp;<strong>NO HOURLY FEE!</strong>&nbsp;That means unlimited access to our professionals and all the help you need for one low monthly retainer. No surprises! By partnering with us, you can gain peace of mind knowing that your business’ financial needs are in good hands.</p>
          <p>Based out of Fort Collins, CPA and accountant Steven J. Wick’s&nbsp;mission as a financial advisor is to work side-by-side with our clients to reduce their tax burden, improve their accounting systems, and inspire them to balance profit and growth.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cutout">
</section>
<section class="home-accounting">
  <div class="container accounting-card">
    <h3 class="montserrat text-center">Accounting v. Bookkeeping</h3>
    <p class="pl-3 pr-3 montserrat text-center">Good&nbsp;<em>bookkeeping</em>&nbsp;helps keep your finances in order, but it does not, however, advise you on the best decisions to make; if it’s wise to invest in certain areas of business, or even simply if your business is profitable. It takes&nbsp;<em>accounting</em>&nbsp;to do that, and from an experienced financial advisor. A skilled Fort Collins CPA can help translate the numbers and allow you to make meaningful insights as to the status of your business and the direction it will go.</p>
  </div>
</section>
<section class="home-testimonial">
  <div class="container">
    <h2 class="text-center text-white uppercase"><strong>Testimonials</strong></h2>
    <p><?php echo do_shortcode('[testimonial_view id="1"]'); ?></p>
  </div>
</section>
<section class="home-consultation">
  <div class="container sc-consultation">
    <div class="col-8 left">
      <h2 class="uppercase">get a free consultation</h2>
    </div>
    <div class="col-4 left">
      <a class="et-button" href="/contact" data-icon="Z">Get Started!</a>
    </div>
  </div>
  <br class="clearfix"/>
</section>
<?php get_footer(); ?>
