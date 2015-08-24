</div>

<footer>

	<div class="wrapper">

		<div class="column">
	
			<h4>Contact Us</h4>
			<p class="address">NCSITE Headquarters<br/>
				514 Daniels Street, Box 169<br />
				Raleigh, NC 27605</p>
	
			<h4>Email Us</h4>
			<ul>
				<? wp_nav_menu( array( 'theme_location' => 'email' )); ?>
			</ul>

		</div>

		<div class="column">

			<h4>Connect with NCSITE</h4>
			<ul>
				<? wp_nav_menu( array( 'theme_location' => 'connect' )); ?>
			</ul>

			<h4><a href="/membership/">Become a Member</a></h4>
			<h4><a href="/membership/get-involved/">Get Involved</a></h4>
			<h4><a href="#">Jobs Board</a></li>

		</div>

		<div class="column">

			<h4>National ITE</h4>
			<ul>
				<? wp_nav_menu( array( 'theme_location' => 'national_ite')); ?>
			</ul>

			<h4>ITE Contact</h4>
			<p class="address">1627 I Street, NW, Suite 600<br/>
				Washington, DC 20006</p>
			<p class="phone">202-785-0060</p>
			<p class="email"><a href="mailto:ite_staff@ite.org">ite_staff@ite.org</a></p>

		</div>

		<div class="column">

			<h4>Transportation Resources</h4>
			<ul>
				<? wp_nav_menu( array( 'theme_location' => 'transportation_resources')); ?>
				<h4><a href="/resources-2/">See all Resources</a></h4>
			</ul>

		</div>

		<div class="column">

			<!--widget area-->

		</div>



	</div>

</footer>

<?php do_action('wp_footer'); ?>
<script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory') . '/js/scripts.js?v=' . time(); ?>"></script>

</body>

</html>