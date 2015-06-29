<!DOCTYPE html>
<html>

<head>
	<title>NCSITE - NC Section : Institute of Transportation Engineers</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/screen.css" />
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
					<li>About
						<ul class="dropdown">
							<li>Item 1</li>
							<li>Item 2</li>
							<li>Item 3</li>
						</ul>
					</li>
					<li>Membership</li>
					<li>Events</li>
					<li>Resources</li>
					<li>Blog</li>
					<?php get_search_form(); ?>
				</ul>
			</nav><!--.primary-nav-->

		</div><!--.wrapper-->

	</header><!--.site-header-->

<?php 

if(is_home()){ $pageType = 'home'; }
elseif(is_page()){ $pageType = 'page'; }

?>

<div class="<?php echo $pageType; ?>">