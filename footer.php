
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

<div id="scrolltop" class="fixed bottom-0 right-0 p-3 m-3 hover:bg-slate cursor-pointer hidden">
	<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#63f1db" class="bi bi-chevron-up" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
	</svg>
</div>

</body>
</html>
