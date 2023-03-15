<?php get_header(); ?>

	<div class="container my-8 mx-auto">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>
	<div id="lightbox" class="is-closed">
		<div id="lb-overlay" class="hidden"></div>
		<div id="lb-nav" class="hidden">
			<button id="lb-close">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#63f1db" class="bi bi-x-lg" viewBox="0 0 16 16">
					<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
				</svg>
			</button>
			<button id="lb-next">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#63f1db" class="bi bi-chevron-right" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
				</svg>
			</button>
			<button id="lb-prev">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#63f1db" class="bi bi-chevron-left" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
				</svg>	
			</button>
		</div>
		<div id="lb-image" class="hidden"></div>
	</div>
<?php
get_footer();
