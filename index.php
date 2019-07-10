<h1><?php print hello() ?></h1>

<ul>
<?php  while (have_posts()) : the_post();?>
	<li>

		<?php the_title()?>		
		<?php the_excerpt()?>
	</li>
<?php endwhile?>
</ul>