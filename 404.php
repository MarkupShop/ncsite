<?php get_header(); ?>

<section class="banner" style="background-image: url('/ncsite/wp-content/themes/ncsite/assets/page-bg.png');">
	<div class="banner-filter"></div>
</section><!--.banner-->


<section class="main-content article-list">

	<h2 class="page-title">Page Not Found</h2>

	<section class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>

		<p>Sorry, the content you're looking for cannot be found. Questions? Please email us at <a href="mailto:info@ncsite.org">info@ncsite.org</a>.</p>

	</article>
	

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section><!--.row-->

</section><!--.main-content-->

<?php get_footer(); ?>