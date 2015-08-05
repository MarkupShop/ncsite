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
		
<?php 

$rows = get_field('content_rows'); 

foreach( $rows as $row ){

	//print_r($content);

	foreach( $row as $columns ){


		echo '<div class="row columns'.sizeof($columns).'">';
		
		foreach( $columns as $column ){
			echo '<div class="column">'.$column['column'].'</div>';
		}
	}

	echo '</div>';
}

?>

</section>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



</section>

<?php get_footer(); ?>