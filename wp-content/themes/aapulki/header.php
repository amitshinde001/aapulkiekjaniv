<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Aapulki
 * @since Aapulki 1.0
 */
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- CSS Files-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/homepage.css"><!-- homepage stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/skins/teal.css"><!-- skin color -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/pace.css">

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- HIDDEN PANEL 
================================================== -->
<div id="panel">
	<div class="row">
		<div class="twelve columns">
			<img src="images/info.png" class="pics" alt="info">
			<div class="infotext">
				Thank you for visiting my theme! Replace this with your message to visitors.
			</div>
		</div>
	</div>
</div>
<p class="slide">
	<a href="#" class="btn-slide"></a>
</p>
<!-- HEADER
================================================== -->
<div class="row">	
		<div class="four columns">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h4>Aapuki ek janiv</h4></a>
			</div>
		</div>
		<div class="eight columns noleftmarg">		
			<nav id="nav-wrap">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<!--ul class="nav-bar sf-menu">
				
					<li class="current">
					<a href="index.html">Home</a>
						<ul>
												
						<li><a href="index2.html">Without slider</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="#">Portofolio</a>
						<ul>
						<li><a href="portofolio2.html">2 Columns</a></li>
						<li><a href="portofolio3.html">3 Columns</a></li>
						<li><a href="portofolio4.html">4 Columns</a></li>						
						<li><a href="portofoliodetail.html">Project Details</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">Blog</a>
						<ul>
						<li><a href="blogpage1.html">Blog page style 1</a></li>
						<li><a href="blogpage2.html">Blog page style 2</a></li>
						<li><a href="blogpage3.html">Blog page style 3</a></li>
						<li><a href="blogsinglepost.html">Single post</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">Pages</a>
						<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Services</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="#">Features</a>
						<ul>
						<li><a href="columns.html">Columns</a></li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="typography.html">Typography</a></li>
						</ul>
					</li>
					
					<li>
					<a href="contact.html">Contact</a>
					</li>
					
				</ul-->
			</nav>
		</div>	
</div>
<div class="clear">
</div>