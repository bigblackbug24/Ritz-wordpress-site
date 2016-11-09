<?php /*
Template Name: Electrical Service
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Electrical Service | Ritz Building Contracting LLC</title>

</head>
<body>
  <section class="post-wrapper-top jt-shadow clearfix">
    <div class="container">
      <div class="col-lg-12">
        <h2>Electrical Service</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="home">Home</a></li>
                    <li>Electrical Service </li>
                </ul>
      </div>
    </div>
  </section><!-- end post-wrapper-top -->

    
  <section class="white-wrapper">
      <div class="container">
          <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 single-portfolio">
                  <div class="col-sm-7">
                        <div class="portfolio_item">
                            <div class="entry">
                                <img src="<?php bloginfo('template_directory'); ?>/demos/projects/project-villa1.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a href="<?php bloginfo('template_directory'); ?>/demos/projects/project-villa1.jpg" class="sf" title="" data-gal="prettyPhoto[product-gallery]"><span class="fa fa-search"></span></a>
                                        <!--<a class="st" rel="bookmark" href="#"><span class="fa fa-heart"></span></a>
                                        <a class="sg" rel="bookmark" href="http://themeforest.net/user/jollythemes/portfolio?ref=jollythemes"><span class="fa fa-eye"></span></a>-->
                                    </div>
                                </div><!-- end magnifier -->
                            </div><!-- entry -->
                        </div><!-- end portfolio_item -->
                    </div><!-- end col-sm-6 -->
                  <div class="col-sm-5">
                      <div class="title">
                          <h2>Electrical Construction</h2>
                        </div><!-- end title -->  
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non rhoncus est. Nullam sit amet felis in nisi congue rhoncus a nec eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer feugiat a dolor ut luctus.
</p>
                        <br>
                        <div  class="product_details">
            <h3>Service Details</h3>
                            <ul style="text-align:center;">
                            <li><strong>Labour:</strong> Electrical and Article decoration</li>
                            <li><strong>Foreman:</strong> Glass work and heavy mechanical</li>
                            <li><strong>General Manager:</strong> General Construction</li>
                            <li><strong>Construction Opperation:</strong> Al-Madev</li>
                            
                            </ul>
                                                
                        </div><!-- end product_details -->
                    </div><!-- end col-sm-6 -->
                
                    <div class="clearfix"></div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->    
    </div><!-- end container -->
    </section><!-- end white-wrapper -->

    
  <?php include 'footer.php';?>
        
  <!-- Main Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>
  
  <script src="js/jquery.prettyPhoto.js"></script>
  <script>
  (function($) {
    "use strict";
  jQuery('a[data-gal]').each(function() {
    jQuery(this).attr('rel', jQuery(this).data('gal'));
  });   
    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
  })(jQuery);
  </script>
    
  
   <!-- Affix menu -->
<script>
  (function($) {
    "use strict";
      $("#header-style-1").affix({
      offset: {
        top: 100
      , bottom: function () {
        return (this.bottom = $('#copyrights').outerHeight(true))
        }
      }
    })
  })(jQuery);
</script>
 <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.simple-text-rotator.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
  
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/custom-portfolio.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript">
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery('.tp-banner').revolution(
        {
            delay:9000,
            startwidth:1170,
            startheight:500,
            hideThumbs:10,
            fullWidth:"on",
            forceFullWidth:"on"
        });
    }); //ready
  </script>
      
  <!-- Royal Slider script files -->
  <script src="<?php bloginfo('template_directory'); ?>/royalslider/jquery.easing-1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/royalslider/jquery.royalslider.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
      var rsi = $('#slider-in-laptop').royalSlider({
        autoHeight: false,
        arrowsNav: false,
        fadeinLoadedSlide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'fill',
        imageAlignCenter: true,
        loop: false,
        loopRewind: false,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        autoScaleSlider: true,  
        autoScaleSliderWidth: 486,     
        autoScaleSliderHeight: 315,
    
        /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
        imgWidth: 792,
        imgHeight: 479
    
      }).data('royalSlider');
      $('#slider-next').click(function() {
        rsi.next();
      });
      $('#slider-prev').click(function() {
        rsi.prev();
      });
    });
  </script>
    
     <!-- Affix menu -->
<script>
    (function($) {
      "use strict";
            $("#header-style-1").affix({
            offset: {
              top: 100
            , bottom: function () {
                return (this.bottom = $('#copyrights').outerHeight(true))
              }
            }
        })
    })(jQuery);
</script>
</body>
</html>