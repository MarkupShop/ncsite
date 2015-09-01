<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	if( get_field('custom_header_image') != null ){ 
		$backgroundURL = get_field('custom_header_image'); 
	}else{
		$backgroundURL = get_template_directory_uri() . '/assets/page-bg.png';
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
		
<?php 

$sections = get_field('content_sections'); 

foreach( $sections as $section ){

	foreach( $section as $row){

		echo '<div class="row">';
		
		foreach( $row as $columns ){


			echo '<div class="columns '.$columns['layout'].'">';
			
				echo '<div class="column first-column">'.$columns['first_column'].'</div>';

				if( $columns['second_column'] != null ){ echo '<div class="column second-column">'.$columns['second_column'].'</div>'; }
				if( $columns['third_column'] != null ){ echo '<div class="column third-column">'.$columns['third_column'].'</div>'; }
				if( $columns['fourth_column'] != null ){ echo '<div class="column fourth-column">'.$columns['fourth_column'].'</div>'; }

			echo '</div>';
		}

		echo '</div>';

	}
}

?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer(); ?>