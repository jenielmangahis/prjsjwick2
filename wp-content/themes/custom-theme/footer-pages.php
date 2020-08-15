  <footer id="main-footer">
    <div class="container pl-0 pr-0">
      <div class="col-4 left pl-0 pr-0">
         <h4 class="title uppercase montserrat">Services</h4>
         <div>
            <ul class="service-list">
               <li><a href="/services/accounting-bookkeeping/">Accounting &amp; Bookkeeping</a></li>
               <li><a href="/services/business-consulting/">Business Consulting</a></li>
               <li><a href="/services/cfo-services/">Outsourced CFO Services</a></li>
               <li><a href="/services/payroll-services/">Payroll Services</a></li>
               <li><a href="/services/quickbooks-accounting/">Quickbook Accounting</a></li>
               <li><a href="/services/small-business-package/">Small Business Package</a></li>
               <li><a href="/services/tax-service/">Tax Service</a></li>
            </ul>
         </div>
      </div>
      <div class="col-4 left sr-2">
        <div id="media_image-2" class="fwidget et_pb_widget widget_media_image">
           <a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">
              <img src="http://holisticwebdevelopment3.com/sjwickcpav2/wp-content/uploads/2020/08/stacked-logo-1.png" class="footer-img-sc lazyloaded" alt="" style="max-width: 98%; height: auto;">
           </a>
        </div>
      </div>
      <div class="col-4 left pl-0 pr-0">
        <div id="text-2" class="fwidget et_pb_widget widget_text">
           <h4 class="title uppercase montserrat">Steven J. Wick &amp; Associates, P.C.</h4>
           <div class="textwidget">
              <div class="montserrat">2809 E. Harmony Rd. Suite 120<br>
                 Fort Collins,&nbsp;CO&nbsp;80528
              </div>
              <p class="montserrat">(970) 224-3366<br>
                 <a href="https://sjwickcpa.com/" class="montserrat uppercase link-footer">www.SJWickCPA.com</a>
              </p>
           </div>
           <br class="clearfix"/>
           <br/>
           <br/>
           <div id="text-4" class="fwidget et_pb_widget widget_text">
              <div class="textwidget">
                 <p><a href="https://sjwickcpa.com/" class="link-footer montserrat uppercase">Home</a> | <a href="/blog" class="link-footer montserrat uppercase">Blog</a> | <a href="/privacy-policy/" class="link-footer montserrat uppercase">Policies</a>&nbsp;| <a href="/contact" class="link-footer montserrat uppercase">Contact</a></p>
              </div>
           </div>
        </div>
      </div>
  </footer>
  <div class="footer-bottom col-12 pl-0 pr-0">
    <div class="container clearfix pl-0 pr-0">
      <div class="col-7 left pl-0 pr-0">
        <span class="footer-copyright montserrat">Copyright All Rights Reserved © 2013 - <?php echo date("Y"); ?></span>
      </div>
      <div class="col-5 left pl-0 pr-0">
        <ul class="copyright-social">
          <li><a href="https://www.facebook.com/sjwickcpa"><i class="fa fa-facebook home-social" aria-hidden="true"></i></a></li>
          <li><a href="http://www.linkedin.com/in/stevenwick" class="icon" target="_blank"><i class="fa fa-linkedin home-social" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
  $(function() {
      $("i.fa-bars").click(function() {
        if ($("section.mobile-menu").hasClass('hide')) {
          $("section.mobile-menu").removeClass('hide');
        } else {
          $("section.mobile-menu").addClass('hide');
        }
      });
    $(document).on("scroll", function(){
        if($(document).scrollTop() > 100){
          $("#logo").addClass("shrink");
          $(".nav-desktop").removeClass("cl-collapse");
          $(".nav-desktop").addClass("cl-hide");
        }else{
          $("#logo").removeClass("shrink");
          $(".nav-desktop").addClass("cl-collapse");
          $(".nav-desktop").removeClass("cl-hide");
        }
    });
  });

/*function init() {
  var vidDefer = document.getElementsByTagName('iframe');
  for (var i=0; i<vidDefer.length; i++) {
    if(vidDefer[i].getAttribute('data-src')) {
      vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;*/
</script>
<?php wp_footer();?>
</body>
</html>
