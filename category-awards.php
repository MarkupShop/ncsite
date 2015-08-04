<?php get_header(); ?>

<section class="banner" style="background-image: url('/ncsite/wp-content/themes/ncsite/assets/page-bg.png');">
	<div class="banner-filter"></div>
</section><!--.banner-->

<!--<img class="promo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/page-bg.jpg" />-->

<?php 
include('nav-page.php');
include('breadcrumbs.php');
?>



<section class="main-content article-list">

	<h2 class="page-title">Blog</h2>

	<section class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>

		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<h4><a href="<?php echo get_category_link(); ?>"><?php the_category(); ?></a></h4>

		<?php the_excerpt(); ?>

	</article>
	

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section><!--.row-->

</section><!--.main-content-->

<?php get_footer(); ?>