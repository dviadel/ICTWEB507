<html>
	<head>
	<title>My Title</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" type="text/css" />

	</head>
	<body>

		<h1>hello</h1>

		<ul class= "row">
			<?php while (have_posts()) : the_post(); ?>
				<li class= "column">
					<div class="card">
						<h2 class="card-title"><?php the_title(); ?></h2>
						<div class="card-image"><?php the_post_thumbnail();?></div>
						<div class="card-content"><?php the_excerpt() ?></div>
					</div>
				</li>
			<?php endwhile ?>
		</ul>

	</body>

</html>