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
						<li>Contact Us</li>
						<li>Member Login</li>
						<li class="tab">Jobs Board</li>
						<li class="tab">Contact Us</li>
					</ul>
				</div>
				
			</nav><!--.utility-nav-->
		
			<nav class="primary-nav">
				<ul>
					<? wp_nav_menu(
						array(
							'menu' => 'Main Navigation',
							// do not fall back to first non-empty menu
							'theme_location' => 'main_menu',
							// do not fall back to wp_page_menu()
							'fallback_cb' => false
							)
						); ?>
					<?php get_search_form(); ?>
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