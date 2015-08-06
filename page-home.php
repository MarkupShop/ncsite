<?php get_header(); ?>

<section class="slideshow">
	<div class="slideshow-texture">
		<div class="wrapper">
			<div class="slideshow-content">
				<ul class="slideshow-progress">
					<li class="active">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
				</ul>
				<h2 class="slideshow-title">Roundabout:Hillborough Street:Raleigh, NC:2013</h2>
				<p class="slideshow-excerpt">This is info about the project. It was super awesome and yadda yadda yadda. <a href="#">More&raquo;</a></p>
			</div><!--.slideshow-content-->
		</div><!--.wrapper-->
	</div><!--.slide-->
</section><!--.slideshow-->

<section class="content">

	<div class="wrapper">

		<div class="main-content">

			<div class="cutout-overlay">
				<a class="button" href="#">Member Log In</a>
			</div>
		
			<h2 class="content-title">NC Transportation Professionals</h2>
		
			<h3 class="content-subtitle">Your source for expertise, knowledge, and ideas.</h3>
		
			<p>The North Carolina Section of the Institute of Transportation Engineers, known as NCSITE, is a professional 
			society of persons involved in transportation engineering activities. It is affiliated with the Institute of 
			Transportation Engineers (ITE), an international professional society of transportation engineers.</p>
		
			<p>NCSITE was established to promote sound transportation engineering practices in the planning, design, 
			operation, and management of transportation facilities and equipment for the safe, convenient, and efficient 
			movement of people and goods. The NCSITE membership includes a broad range of transportation personnel--engineers, 
			planners, educators, administrators, and technicians. Many modes of transportation are represented in the 
			organization's membership.</p>

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

		<img src="<?php echo get_template_directory_uri(); ?>/assets/president.jpg" />

		<div class="president-content">
	
			<h3>Christa Greene, PE</h3>
	
			<p>Lorem ipsum...</p>

		</div>
	
		

	</div><!--.wrapper-->

</section><!--.president-->

<?php get_footer(); ?>
