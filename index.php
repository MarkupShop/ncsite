<?php get_header(); ?>

<section class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/page-bg.png');">
	<div class="banner-filter"></div>
</section><!--.banner-->

<!--<img class="promo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/page-bg.jpg" />-->

<?php 
include('nav-page.php');
include('breadcrumbs.php');
?>



<section class="main-content article-list">

	<h2 class="page-title">
		<?php if(is_archive()){
			single_cat_title(); 
		}else{ echo "Involver Blog"; } ?></h2>

	<section class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>

		<div class="article-info">
			<h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_category(); ?>
		</div>

		<?php the_excerpt(); ?>

	</article>
	

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section><!--.row-->

</section><!--.main-content-->

<?php get_footer(); ?>