<?php get_header(); ?>

<div class="container mx-auto">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php get_template_part('templates/template-parts/sections/section', 'archive-card'); ?>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<?php
get_footer();


