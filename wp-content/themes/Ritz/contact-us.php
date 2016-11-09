<?php /*
Template Name: Ritz contact us
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Contact Us | Ritz Building Contracting LLC</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  
  <!-- Carousel Slider -->
  <link href="<?php bloginfo('template_directory'); ?>/css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- SLIDER ROYAL CSS SETTINGS -->
  <link href="<?php bloginfo('template_directory'); ?>/royalslider/royalslider.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/rs-plugin/css/settings.css" media="screen" />
        
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->
<script src="<?php bloginfo('template_directory'); ?>/js/contact.js">
  </script>
  <!-- Contact form Script-->
	<script>
	$(document).ready(function(){
	
		$("#submit").click(function(){

				var user_name = $("#contact_name").val();
				var user_email = $("#email_address").val();
				var user_web = $("#website").val();
				var user_sub = $("#subject").val();
				var user_com = $("#comments").val();
				var rex = /[^a-z]/i;
       		    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;			
			
			$.post("contact.php",{contact_name:user_name,email_address:user_email,website:user_web,subject:user_sub,comments:user_com},function(data){
				
				if((user_name && user_email && user_com) != '')
				{
				$("#message").html(data);
					
			}
			else
					{
				alert("Please Enter Valid data,data fields cannot be empty"); 
			}
		
		    	//$("#result2").load("detail.php");
			});
			//$("#result3").load("update.php");
		});
			   //$("#page").hide();
			   //$("#detail_page").show();                                                   
	});
	</script>

</head>
<body>
    
	

	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Contact us</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="home">Home</a></li>
                    <li>Contact us </li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->

    <section class="white-wrapper nopadding">
    	<!-- <div id="map">
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6896.4314863581185!2d71.51343400000002!3d30.202389300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3427b21b83a7%3A0x98471d1b8ac35242!2sGulshan+Market+Rd%2C+Multan%2C+Pakistan!5e0!3m2!1sen!2s!4v1453448866843" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    	<!-- </div> -->
    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d225.51205606104799!2d55.3347506!3d25.2640957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xda47a302780cdec2!2sRitz+Building+Contracting+LLC!5e0!3m2!1sen!2s!4v1461928447771" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	
        <div class="clearfix"></div>
        <div class="container">
        <h2 style="font-size: 30px; font-family: Bitter, Georgia, serif; clear: both; line-height: 1.3; margin: 25px 0px;">Contact Us</h2><div style="color: rgb(20, 20, 18); font-family: Source Sans Pro, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">You may contact us by filling in this form any time you need professional support or have any questions. You can also fill in the form to leave your comments or feedback.</div><br>
        <div class="row">
                    <div class="col-sm-6">
                        <h3><b>RITZ Building Contracting</b></h3>
                         <p>Off. no. 117, Al Muhairi Plaza, Dubai, <br>
							11 B street, Al khabaisi,<br>
							United Arab Emirates</p>
                        <p><b>Tel:</b>  +971 55 1693 150<br><b>Fax:</b>  +971 55 1693 150</p>
                        
                        <div class="clear pad-0"></div>
                        </div>
                        <div class="col-sm-4">
                        <h3><b>RITZ Building Contracting</b></h3>
                        <p>Email: <a href="mailto:info@grandmills.com">info@ritzcont.com</a></p>
                        <p>Skype: <a href="mailto:info@grandmills.com">XYZ</a></p>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        </div>
     
      <?php wd_contact_form_builder(3); ?>
     
     <?php //echo do_shortcode( '[contact-form-7 id="80" title="Contact Us"]' ); ?>
        </div>
   <!--     
         <div class="contact_form">	
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Name"> 
					<input type="text" name="email_address" id="email_address" class="form-control" placeholder="Email Address"> 
					<input type="text" name="website" id="website" class="form-control" placeholder="Website"> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
					<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
					<button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">GET A QUOTE</button>
				</div> 
				<div id="message"></div>
        </div><!-- end contact-form ->
        -->
        <div class="clearfix"></div>
        
        <div class="row padding-top margin-top">
			<div class="contact_details">
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-map-marker fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p>Off. no. 117, Al Muhairi Plaza, Dubai, <br>
							11 B street, Al khabaisi,<br>
							United Arab Emirates</p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->
                
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-phone fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p><strong>Phone:</strong>  +971 55 1693 150<br>
							<strong>Phone:</strong>  +971 55 1693 150</p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->  

				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa fa-envelope-o fa-3x"></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                             <p><strong>Email:</strong><a href="mailto:info@ritzcont.com">info@ritzcont.com</a><br>
							<strong>Skype:</strong> XYZ</p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->                  
			</div><!-- end contact_details -->
        </div><!-- end margin-top --><br><br>
        </div><!-- end container -->
    </section><!-- end map wrapper -->

	<?php include 'footer.php';?>
        
  <!-- Main Scripts-->
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.simple-text-rotator.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.jigowatt.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
	(function($) {
	  "use strict";
		var locations = [
		['<div class="infobox"><h3 class="title"><a href="about1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -37.801578, 145.060508, 2]
		];
	
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 10,
			scrollwheel: false,
			navigationControl: true,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                {gamma: 0.50} ] } ],
			center: new google.maps.LatLng(25.2715643, 55.303851),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		});
	
		var infowindow = new google.maps.InfoWindow();
	
		var marker, i;
	
		for (i = 0; i < locations.length; i++) {  
	  
			marker = new google.maps.Marker({ 
			position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
			map: map ,
			icon: 'images/marker.png'
			});
	
	
		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		}
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
</body>
</html>