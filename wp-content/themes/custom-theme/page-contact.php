<?php
/**
Template Name: Contact Us
 */
?>
<?php get_header(); ?>
<section class="page-banner">

</section>
<section class="page-content">
  <div class="col-12 pr-0 pl-0 home-nav-container">
    <section class="page-cover size-cover">
      <div class="container pl-5 pr-5">
        <h2 class="montserrat text-center text-white bold text-shadow uppercase">Contact us</h2>
        <p class="text-center text-white text-italic pl-5 pr-5">Join the hundreds of highly effective managers, leaders and entrepreneurs we've assisted over the last 20 years - Contact us today to get started!</p>
        <a class="call-contact" href="tel:9702243366">Call Now</a>
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
      <div class="col-6 left">
        <div class="fuscha-card">
          <ul class="contact-form">
             <li>
                <label class="bold-600">Name</label>
                <div>
                   <div class="col-6 pl-0 pr-4 left">
                     <input type="text" name="firstname" placeholder="First Name" value="" aria-label="First name" aria-invalid="false" class="w-100">
                   </div>
                   <div class="col-6 pl-0 pr-4 left">
                     <input type="text" name="lastname" placeholder="Last Name" value="" aria-label="Last name" aria-invalid="false" class="w-100">
                   </div>
                </div>
             </li>
             <li>
                <div class="col-6 pl-0 pr-4 left">
                  <label class="bold-600">Email<span>*</span></label>
                  <div>
                     <input name="email" placeholder="Email Address" id="input_2_2" type="text" value=""  class="w-100" aria-required="true" aria-invalid="false">
                  </div>
                </div>
                <div class="col-6 pl-0 pr-4 left">
                  <label class="bold-600">Phone<span>*</span></label>
                  <div>
                     <input name="phone" placeholder="Phone" type="text" value=""  class="w-100" aria-required="true" aria-invalid="false">
                  </div>
                </div>
             </li>
             <li>
                <div class="col-12 pl-0 pr-4 left">
                  <label class="bold-600">Message</label>
                  <div><textarea name="message" class="textarea medium w-100" aria-invalid="false" rows="4"></textarea></div>
                </div>
             </li>
             <li>
               <input type="submit" class="g-form-button" value="Submit">
             </li>
          </ul>
        </div>
      </div>
      <div class="col-6 left pl-4 pr-1 d-block">
        <p>Please feel free to give us a call or email us at any time using the form.</p>
        <h2><strong>Phone:&nbsp;(970) 224-3366</strong></h2>
        <p><strong>Steven J. Wick &amp; Associates, P.C.</strong><br> 2809 E. Harmony Rd. Suite 120<br> Fort Collins, CO 80528</p>
        <br/>
        <img src="<?php bloginfo('template_directory'); ?>/images/page/stat-stock.jpg" class="img-contact-sr">
      </div>
      <br class="clearfix"/>
    </div>
  </div>
</section>

<section class="contact-map size-cover clearfix">
  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3032.857394544156!2d-105.025917!3d40.522643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDMxJzIxLjUiTiAxMDXCsDAxJzMzLjMiVw!5e0!3m2!1sen!2sph!4v1596615322390!5m2!1sen!2sph" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>
<?php get_footer(); ?>
