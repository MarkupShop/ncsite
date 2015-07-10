<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="banner" style="background-image: url('/ncsite/wp-content/themes/ncsite/assets/page-bg.png');">

	<div class="banner-filter"></div>
</section><!--.banner-->

<!--<img class="promo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/page-bg.jpg" />-->

<nav class="sub-nav">

	<h3>ABOUT NCSite</h3>

	<ul>
		<li>Organization</li>
		<li>4 Councils</li>
		<li>Awards</li>
		<li>Sponsors</li>
	</ul>

	<a href="#" class="button">Join NCSite</a>
	<a href="#" class="button">Login</a>

</nav><!--.sub-nav-->

<section class="breadcrumbs">

	<div class="wrapper">


		<?php the_breadcrumb(); ?>

	</div>


</section><!--.breadcrumbs-->

		
	<?php the_content(); ?>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer(); ?>