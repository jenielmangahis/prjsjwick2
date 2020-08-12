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
</section>
<section class="home-testimonial">
  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3032.857394544156!2d-105.025917!3d40.522643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDMxJzIxLjUiTiAxMDXCsDAxJzMzLjMiVw!5e0!3m2!1sen!2sph!4v1596615322390!5m2!1sen!2sph" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>
<?php get_footer(); ?>
