<nav class="sub-nav">

	<div class="links">

		

		<?php if(is_archive() || is_front_page()) : ?>
		<h3><?php single_cat_title(); ?></h3>
		<?php
		$cat = get_cat_id(single_cat_title('', false));
		wp_list_categories( array('child_of' => $cat, 'title_li' => '' ));
		?>
		
		<?php else : 

		//GET ID OF TOP-LEVEL PAGE
		$parent = array_reverse(get_post_ancestors($post->ID));
		$first_parent = get_page($parent[0]);
		$topID = $first_parent->ID;
		$topTitle = $first_parent->post_title;

		?>

		<h3><?php echo $topTitle; ?></h3>
	
		<ul><?php wp_list_pages( array( 'child_of' => $topID, 'title_li' => '' )  ); ?></ul>

	<?php endif; ?>
	</div>

	<!--<ul>
		<li>Organization</li>
		<li>4 Councils</li>
		<li>Awards</li>
		<li>Sponsors</li>
	</ul>-->

	<a href="#" class="button">Join NCSite</a>
	<a href="#" class="button">Login</a>

</nav><!--.sub-nav-->