<!DOCTYPE html>
<html>

<head>
	<title>NCSITE - NC Section : Institute of Transportation Engineers</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/screen.css?<?php echo microtime(); ?>" />
	<?php do_action('wp_head'); ?>
</head>

<body>

	<header class="site-header">

		<div class="wrapper">
		
			<a href="<?php bloginfo('url'); ?>"><h1 class="site-title">NCSITE</h1></a>
	
			<nav class="utility-nav">

				<div class="wrapper">
					<ul>
						<li><a href="mailto:info@ncsite.org">Contact Us</a></li>
						<li><a href="/memberhsip">Member Login</a></li>
						<li><a href="http://ncsite.org/2015/08/jobs-listings/">Jobs Board</a></li>
						<!--<li class="tab">Contact Us</li>-->
					</ul>
				</div>
				
			</nav><!--.utility-nav-->
		
			<nav class="primary-nav">
				<ul>
					<? wp_nav_menu( array( 'theme_location' => 'main_menu' )); ?>
					<?php //get_search_form(); ?>
				</ul>
			</nav><!--.primary-nav-->

		</div><!--.wrapper-->

	</header><!--.site-header-->

<?php 

if(is_home()){ $pageType = 'blog'; }
elseif(is_front_page()){ $pageType = 'home'; }
elseif(is_page()){ $pageType = 'page'; }
elseif(is_archive()){ $pageType = 'archive'; }
else{ $pageType = 'post'; }


?>

<div class="<?php echo $pageType; ?>">