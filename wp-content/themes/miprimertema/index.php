<h1>Mi primer tema</h1>

<?php if ( have post() ) { ?>
	<?php while ( have_posts() ) {
the_post(); ?>

	<?php the_tittle(); ?>
	<?php the_content(); ?>

	<?php }; ?>
<?php }; ?>
