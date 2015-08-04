<nav class="sub-nav">

	<div class="links">

		

		<?php 

		//GET ID OF TOP-LEVEL PAGE
		$parent = array_reverse(get_post_ancestors($post->ID));
		$first_parent = get_page($parent[0]);
		$topID = $first_parent->ID;
		$topTitle = $first_parent->post_title;

		?>

		<h3><?php echo $topTitle; ?></h3>
	
		<ul><?php wp_list_pages( array( 'child_of' => $topID, 'title_li' => '' )  ); ?></ul>

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