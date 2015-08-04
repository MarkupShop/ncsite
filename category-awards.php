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

$descendants = get_categories(array('child_of' => get_cat_ID('awards'))); 

foreach ($descendants as $child) { 

	$counter = 0;
	$catPosts = new WP_Query(); $catPosts->query("showposts=3&cat=$child->term_id");

	echo '<h3>'.$child->cat_name.'</h3>';

	while ($catPosts->have_posts()) : $catPosts->the_post(); 

		if($counter == 0){ ?>

			
			<article class="expanded">
				
				<div class="article-info">
					<h4 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			
				</div>

				<?php if(get_field('featured_image') != null){
					echo '<img class="featured-image" src="'.get_field('featured_image').'" />';
				} ?>

				<?php the_content(); ?>



				<?php $catlink = get_category_link($child->term_id); ?>
				<p><a href="<?php echo $catlink; ?>">Learn more about the <?php echo $child->cat_name; ?></a></p>

			</article>
		
		<?php }else{

		/*echo '<article>';

			echo '<div class="article-info">';
				echo '<h4 class="article-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>';
			echo '</div>';

		echo '</article>';*/

	}

		//echo '<ul><li><a href="'.the_permalink().'">'.the_title().'</a></li></ul>';
		$counter++;
	endwhile;

} ?>



	</section><!--.row-->

</section><!--.main-content-->

<?php get_footer(); ?>