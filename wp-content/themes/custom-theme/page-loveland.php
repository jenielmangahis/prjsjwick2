<?php
/**
Template Name: Contact Us
 */
?>
<?php get_header('pages'); ?>
<section class="page-banner">

</section>
<section class="page-content">
  <div class="col-12 pr-0 pl-0 home-nav-container d-flex">
    <div class="col-6 left pl-0 pr-0 d-flex">
      <img src="<?php bloginfo('template_directory'); ?>/images/page/loveland.jpg" class="loveland">
    </div>
    <div class="col-6 flex-wrap pl-0 pr-0 left d-flex">
      <div class="fuscha-card-pattern">
        <div class="col-12 pl-5 pr-5 pt-1">
          <div class="col-10 margin-auto">
            <h4 class="pl-3 uppercase text-black mt-4 pt-3">WANT A FREE CONSULTATION?</h4>
            <div class="col-6 pl-3 left">
              <input type="text" placeholder="Name" class="transparent-brown"/>
            </div>
            <div class="col-6 pl-3 left">
              <input type="text" placeholder="Email" class="transparent-brown"/>
            </div>
            <div class="break"></div>
            <div class="col-12 pr-3 pl-3 pt-3">
              <textarea class="sc-text-area transparent-brown" placeholder="Message"></textarea>
              <button type="submit" class="brown-submit">Get Started</button>
            </div>
          </div>
        </div>
      </div>
      <div class="sv-background">
        <div class="col-6 pl-5 pr-5 left">
          <h5><img src="<?php bloginfo('template_directory'); ?>/images/page/taxes.png" class="icon-loveland"/> Award Winning Tax Services</h5>
          <p class="text-white">Let us handle your taxes and the IRS, it’s what we do – giving you more time to do the things you love.</p>
        </div>
        <div class="col-6 pl-5 pr-5 left">
          <h5><img src="<?php bloginfo('template_directory'); ?>/images/page/small-business.png" class="icon-loveland"/> Watch Your Business Thrive</h5>
          <p class="text-white">A Small Business Package is the perfect partner. Gain access to our Loveland accounting experts.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container page-content pl-0 pr-0 pt-5 pb-5">
  <?php
      while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/page/content', 'page' );
          the_content();
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
              comments_template();
          endif;

      endwhile; // End of the loop.
  ?>
  <br class="clearfix"/>
  <div class="col-12">
    <h3>Looking for a CPA in Loveland?</h3>
    <p>At SJ Wick, we can handle any type of account work that you need to have done. We also specialize in specific types of account for various niche industries. Additionally, we can help when it comes to business plans, and when it comes to basic everyday accounting work for your business.</p>
    <p>We know that it’s hard to choose an account to work with. You have to find someone that you can trust to handle your books and your government paperwork, so you can get back to running your business. As an accounting firm that has been serving the Loveland area for many years now, we are pleased to note that we are one of the area’s top trusted firms.</p>
    <div class="col-12 pr-0 pl-0 pt-3">
      <button type="submit" class="brown-submit-small right">Let's talk</button>
    </div>
  </div>
</div>
<section class="home-services-b desktop-only">
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
