<nav class="sub-nav">

<div class="links">


<?php if(is_home()) : ?>

	<h3>Blog</h3>
	
	<?php
		wp_list_categories( array('depth' => 1, 'title_li' => ''));
	?>
		
<?php elseif(is_archive())  : ?>
	
	<h3><?php single_cat_title(); ?></h3>
		
	<?php
		$cat = get_cat_id(single_cat_title('', false));
		wp_list_categories( array('child_of' => $cat, 'title_li' => '' ));
	?>
		
<?php else : 

	//GET ID OF TOP-LEVEL PAGE

	$parent = array_reverse(get_post_ancestors($post->ID));
		
	if(array_key_exists(0, $parent)){
		$first_parent = get_page($parent[0]);
		$topID = $first_parent->ID;
		$topTitle = $first_parent->post_title;
		$topLink = $first_parent->guid;
	}else{
		$topTitle = get_the_title();
		$topID = get_the_ID();
		$topLink = get_the_permalink();
	}
		
?>

<h3><a href="<?php echo $topLink; ?>"><?php echo $topTitle; ?></a></h3>

<?php 
// the query


$query_args = array(
	'post_type' => 'page',
	'meta_key' => 'show_in_nav', 
	'meta_value' => 0
);

$the_query = new WP_Query( $query_args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<?php $excludeID = array(); ?>
	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); global $post; ?>
		
		<?php array_push( $excludeID, get_the_ID() ); ?>


	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
<?php 
	$excludeList = implode(',', $excludeID );

	wp_reset_postdata(); ?>

<?php else : ?>

	<?php $excludeList = (''); ?>

<?php endif; ?>



<ul><?php wp_list_pages( array( 'child_of' => $topID, 'title_li' => '', 'exclude' => $excludeList )  ); ?></ul>


<?php endif; ?>

</div>

	<!--<ul>
		<li>Organization</li>
		<li>4 Councils</li>
		<li>Awards</li>
		<li>Sponsors</li>
	</ul>-->

	<a href="<?php bloginfo('url');?>/membership" class="button">Join NCSite</a>
	<a href="#" class="button">Login</a>

</nav><!--.sub-nav-->