<?php /* Template Name: Members Area */ ?>


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	if( get_field('custom_header_image') != null ){ 
		$backgroundURL = get_field('custom_header_image'); 
	}else{
		$backgroundURL = '/ncsite/wp-content/themes/ncsite/assets/page-bg.png';
	}
?>
<section class="banner" style="background-image: url( <?php echo $backgroundURL; ?> );">
	<div class="banner-filter"></div>
</section><!--.banner-->

<!--<img class="promo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/page-bg.jpg" />-->

<?php 
include('nav-page.php');
include('breadcrumbs.php');
?>



<section class="main-content">

<h2 class="page-title"><?php the_title(); ?></h2>


<div class="row">

	<?php the_content(); ?>
</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer(); ?>