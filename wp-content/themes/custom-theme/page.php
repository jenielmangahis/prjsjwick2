<?php get_header(); ?>
<section class="page-content">
  <div class="col-12 pr-0 pl-0 home-nav-container">
    <section class="page-cover size-cover">
      <div class="container pl-5 pr-5">
        <h2 class="montserrat text-center text-white bold text-shadow uppercase">Contact us</h2>
        <p class="text-center text-white text-italic pl-5 pr-5">Join the hundreds of highly effective managers, leaders and entrepreneurs we've assisted over the last 20 years - Contact us today to get started!</p>
        <a class="call-contact" href="tel:9702243366">Call Now</a>
      </div>
    </section>
  	<div class="container page-content pl-0 pr-0 pt-4">
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
    </div>
  </div>
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
</section>

<?php get_footer('pages'); ?>
