<?php get_header(); ?>

<?php

/* SLIDESHOW CUSTOM QUERY */

// The Query
$sponsors = new WP_Query( array('post_type' => 'slides') );

// The Loop
if ( $sponsors->have_posts() ) {
	
	$c = 0;

	while ( $sponsors->have_posts() ) {
		$sponsors->the_post();
		if($c == 0){ $class = ' active'; }else{ $class = ''; }
	echo '<section class="slideshow' . $class .'" style="background-image: url(' . get_field('image') . ');">';
	echo '<div class="slideshow-texture">';
	echo '<div class="wrapper">';
		echo '<div class="slideshow-content">';
		echo '<h2 class="slideshow-title">'.get_the_title().'</h2>';
		echo '<p class="slideshow-excerpt">'.get_field('slide_text').'</p>';

		if( get_field('type_of_content') == 'internal' ){
			$link = get_field('internal_content_link');
		}else{
			$link = get_field('external_content_link');
		}
		echo '<a href="'.$link.'">Read More</a>';
		echo '</div>';
	echo '</div><!--.wrapper-->';
	echo '</div><!--.slideshow-texture-->';
	echo '</section><!--.slideshow-->';
	$c++;
	
	
	}

} else {
		// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>


<section class="content">

	<div class="wrapper">

		<div class="main-content">

			<div class="cutout-overlay">
				<a class="button" href="#">Member Log In</a>
			</div>

			<?php the_field('primary_content'); /*
		
			<h2 class="content-title">NC Transportation Professionals</h2>
		
			<h3 class="content-subtitle">Your source for expertise, knowledge, and ideas.</h3>
		
			<p>The North Carolina Section of the Institute of Transportation Engineers, known as NCSITE, is a professional 
			society of persons involved in transportation engineering activities. It is affiliated with the Institute of 
			Transportation Engineers (ITE), an international professional society of transportation engineers.</p>
		
			<p>NCSITE was established to promote sound transportation engineering practices in the planning, design, 
			operation, and management of transportation facilities and equipment for the safe, convenient, and efficient 
			movement of people and goods. The NCSITE membership includes a broad range of transportation personnel--engineers, 
			planners, educators, administrators, and technicians. Many modes of transportation are represented in the 
			organization's membership.</p>*/?>

		</div><!--.main-content-->

		<div class="sidebar-content">

			<div class="events">
			
				<h2 class="content-title">Upcoming Events</h2>
			
				<div class="event">
			
					<h3 class="event-title">Wed Jun 24, 2015: Annual Meeting</h3>
			
					<p>We invite all transportation engineers and planners, 
					NCSITE members, and non-members alike, to join your 
					fellow practitioners from both the public and private 
					sector for a full day of professional development and 
					fellowship. <a href="#">More&raquo;</a></p>
			
					<a href="#" class="button">Register Now</a>
			
				</div><!--.event-->

				<div class="more-events">
			
					<h3 class="event-title">More Events</h3>
			
					<ul>
						<li><a href="#"><h3 class="event-title">MAY 14 2015: Signal Systems Users Group&nbsp;&raquo;</h3></a></li>
						<li><a href="#"><h3 class="event-title">MAY 27 2015: SIMCAP USERS GROUP&nbsp;&raquo;</h3></a></li>
					</ul>

				</div><!--.more-events-->
			
			</div><!--.events-->
	
			<div class="become-a-member">
			
				<h2 class="content-title">Become a Member</h2>
			
				<p>Join today to support the work of this volunteer organization and to receive member benefits and discounts to events.</p>
			
				<a class="button" href="#">Join NCSITE</a>
			
			</div><!--.become-a-member-->

		</div><!--.sidebar-content-->

	</div><!--.wrapper-->

</section><!--.content-->


<?php

/* SPONSORS LOGOS CUSTOM QUERY */

// The Query
$sponsors = new WP_Query( array('post_type' => 'sponsors') );

// The Loop
if ( $sponsors->have_posts() ) {
	echo '<section class="sponsors">';
	echo '<div class="wrapper">';
	echo '<h2 class="content-title">Our Sponsors</h2>';
	echo '<ul class="logos">';

	while ( $sponsors->have_posts() ) {
		$sponsors->the_post();
		echo '<li><img src=' . get_field('sponsor_logo') . ' alt="' . get_field('sponsor_name') . '" /></li>';
	}
	echo '</ul>';
	echo '<a class="button">Sponsor NCSITE</a>';
	echo '</div><!--.wrapper-->';
	echo '</section><!--.sponsors-->';
} else {
		// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
		

<section class="president">

	<div class="wrapper">

		<h2 class="content-title">Meet the President</h2>

		<img src="<?php the_field('mtp_photo'); ?>" />

		<div class="president-content">

			<h3><?php the_field('mtp_name'); ?></h3>

			<?php the_field('mtp_text'); ?>

	
			
		</div>
	
		

	</div><!--.wrapper-->

</section><!--.president-->

<?php get_footer(); ?>
