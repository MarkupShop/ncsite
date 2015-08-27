<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="banner" style="background-image: url('/ncsite/wp-content/themes/ncsite/assets/page-bg.png');">
	<div class="banner-filter"></div>
</section><!--.banner-->

<!--<img class="promo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/page-bg.jpg" />-->

<?php 
include('nav-post.php');
include('breadcrumbs.php');
?>



<section class="main-content">


<h2 class="page-title"><?php the_title(); ?></h2>

<section class="row">

	<h3><?php the_field('organization_name'); ?></h3>

	<?php the_content(); ?>

</section>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer(); ?>