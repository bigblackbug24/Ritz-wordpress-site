<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
<!--
	<footer>

<?php
	get_sidebar( 'footer' );
?>

		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>

		<?php do_action( 'starkers_credits' ); ?>
		
		<a href="<?php echo esc_url( __('http://wordpress.org/', 'starkers') ); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'starkers'); ?>" rel="generator"> 
			<?php printf( __('Proudly powered by %s.', 'starkers'), 'WordPress' ); ?>
		</a>

	</footer>
	-->
	<footer id="footer-style-1">
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Ritz">
                	<p style="text-align:left;">Ritz Building Contacting has extensive knowledge and experience servicing the financial, office, commercial and light industrial sectors.
With our years of experience in general contracting and through the diverse range of projects we have successfully completed, we are uniquely qualified to meet our clients’ needs in a timely and cost-effective manner.</p>
                    <div class="social-icons">
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>                      
                        <span><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                       
                    </div><!-- end social icons -->
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3>Usefull Links</h3>
                           <p style="font-size:16px; margin-bottom:-18px;"><a style="color:white;" href="http://evisionsol.com/Ritz/project-villa/">Villa Projects</a><hr/></p>
                        <p style="font-size:16px; margin-bottom:-18px;"><a style="color:white;" href="http://evisionsol.com/Ritz/project-warehouse/">Warehouse Projects</a><hr/></p>
                        <p style="font-size:16px; margin-bottom:-18px;"><a style="color:white;" href="http://evisionsol.com/Ritz/project-shead">Shead Projects</a><hr/></p>
                        <p style="font-size:16px; margin-bottom:-18px;"><a style="color:white;" href="http://evisionsol.com/Ritz/project-swimming-pool">Swimming Pool Projects</a><hr/></p>
                      
                    </div>
                    <!--<ul class="twitter_feed">
                        <li><span></span><p>Jolly Themes wishes you and your family a merry Christmas and a happy new! <a href="#">about 2 days ago</a></p></li>
                        <li><span></span><p>Jolly Themes wishes you and your family a merry Christmas and a happy new! <a href="#">about 9 days ago</a></p></li>
					</ul>--> 
                </div>
            </div>
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3>Our Projects</h3>
                    </div><!-- end title -->
                    <ul class="footer_post">
                        <li><a class="a1" href="http://evisionsol.com/Ritz/project-majlis-block/"><!--<img class="img-rounded" src="demos/footer_post_01.jpg" alt="">--></a></li>
                        <li><a class="a2" href="http://evisionsol.com/Ritz/project-villa5/"><!--<img class="img-rounded" src="demos/footer_post_02.jpg" alt="">--></a></li>
                        <li><a class="a3" href="http://evisionsol.com/Ritz/project-villa6/"><!--<img class="img-rounded" src="demos/footer_post_03.jpg" alt="">--></a></li>
                        <li><a class="a4" href="http://evisionsol.com/Ritz/project-villa7/"><!--<img class="img-rounded" src="demos/footer_post_04.jpg" alt="">--></a></li>
                        <li><a class="a5" href="http://evisionsol.com/Ritz/project-villa11/"><!--<img class="img-rounded" src="demos/footer_post_05.jpg" alt="">--></a></li>
                        <li><a class="a6" href="http://evisionsol.com/Ritz/project-villa12/"><!--<img class="img-rounded" src="demos/footer_post_06.jpg" alt="">--></a></li>
                    </ul><!-- recent posts -->  
                </div><!-- end widget -->
            </div><!-- end columns -->
        	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="widget">
                	<div class="title">
                        <h3>NewsLetter</h3>
                    </div><!-- end title -->
					<div class="newsletter_widget">
                    	<p>Subscribe to our newsletter to receive news, updates, free stuff and new releases by email. We don't do spam..</p>
                        <form action="#" class="newsletter_form">
                            <input type="text" class="form-control" placeholder="Enter your email address"> 
                            <a href="#" class="btn btn-primary pull-right">Subscribe</a>    
                        </form><!-- end newsletter form -->
					</div>
                </div><!-- end widget -->
            </div><!-- end columns --> 
    	</div><!-- end container -->
    </footer><!-- end #footer-style-1 -->    

<div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p>Copyright © 2016 - Designed Ritz Building Contracting</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                        <li class="active"><a href="home">Home</a></li>
                        <li><a href="about-us">About us</a></li>
                        <li><a href="our-projects.php">Our Projects</a></li>
                        <li><a href="our-services.php">Our Services</a></li>
                        <li><a href="contact-us">Contact</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>