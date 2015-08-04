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

	<h2 class="page-title"><?php single_cat_title(); ?></h2>

	<section class="row">


<?php 

$descendants = get_categories(array('child_of' => get_cat_ID('resources'))); 

foreach ($descendants as $child) { 

	$catPosts = new WP_Query(); $catPosts->query("showposts=3&cat=$child->term_id");

	echo '<h3>'.$child->cat_name.'</h3>';

	while ($catPosts->have_posts()) : $catPosts->the_post(); 

		echo '<article>';

			echo '<div class="article-info">';
				echo '<h4 class="article-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>';
			echo '</div>';

		echo '</article>';



	endwhile;

} ?>



	</section><!--.row-->

</section><!--.main-content-->

<?php get_footer(); ?>