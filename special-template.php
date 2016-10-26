<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos veritatis laborum enim reiciendis recusandae amet fugit repellat hic aut libero et nisi id, nam voluptate nesciunt. Tempora, illum qui alias!</p>
		</div>

		<?php the_content(); ?>
	</article>

	<?php endwhile;
	else:
		echo '<p>No content found</p>';
	endif;

get_footer();

?>