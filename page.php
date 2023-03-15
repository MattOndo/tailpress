<?php get_header(); ?>

<div class="container mx-auto">

  <?php 
    $section_multiples = 0; 
    while ( have_posts() ) : the_post();
			$sections = carbon_get_the_post_meta( 'crb_sections' );
			global $sections;
			foreach ( $sections as $section ) {
				get_template_part('template-parts/sections/section', $section['_type']); 
			}
		endwhile; 
  ?>
  
</div>

<?php
get_footer();
