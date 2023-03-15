<?php get_header(); ?>

<div class="container mx-auto">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php get_template_part('template-parts/sections/section', 'archivecard'); ?>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<?php
get_footer();