<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Aapulki
 * @since Aapulki 1.0
 */
?>
	<div id="footer">
	<footer class="row">
	<p class="back-top floatright">
		<a href="#top"><span></span></a>
	</p>
	<div class="four columns">
		<h1>ABOUT US</h1>
		 Our goal is to keep clients satisfied!
	</div>
	<div class="four columns">
		<h1>GET SOCIAL</h1>
		<div class="social facebook">
			<a href="#"></a>
		</div>
		<div class="social twitter">
			<a href="#"></a>
		</div>
		<div class="social deviantart">
			<a href="#"></a>
		</div>
		<div class="social flickr">
			<a href="#"></a>
		</div>
		<div class="social dribbble">
			<a href="#"></a>
		</div>
	</div>
	<div class="four columns">
		<h1 class="newsmargin">NEWSLETTER</h1>
		<div class="row collapse newsletter floatright">
			<div class="ten mobile-three columns">
				<input type="text" class="nomargin" placeholder="Enter your e-mail address...">
			</div>
			<div class="two mobile-one columns">
				<a href="#" class="postfix button expand">GO</a>
			</div>
		</div>
	</div>
	</footer>
</div>
<div class="copyright">
	<div class="row">
		<div class="six columns">
			 &copy;<span class="small"> Copyright 2013 Your Agency Name</span>
		</div>
		<div class="six columns">
			<span class="small floatright"> Purchase "Studio Francesca" - WowThemes.net</span>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation.min.js"></script>   
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/elasticslideshow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.cycle.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/slidepanel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/scrolltotop.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/hoverIntent.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/superfish.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/responsivemenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.tweet.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/twitterusername.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/pace.js"></script>
<?php wp_footer(); ?>
</body>
</html>