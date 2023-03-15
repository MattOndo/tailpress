<?php if ( is_single() ): ?>
	<header class="entry-header mt-8 mb-4 text-center">
		<?php the_title( sprintf( '<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1 text-lighter-gray"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="font-fira text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>
<?php endif; ?>

<?php if ( is_page() && !is_front_page() ): ?>
	<header class="entry-header mt-8 mb-4 text-center">
		<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1 text-lighter-gray"><?php the_title() ?></h1>
		<p class="font-fira text-sm text-gray-700">A little about Matt</p>
	</header>
<?php endif; ?>

<?php if ( is_home() ): ?>
	<header class="entry-header mt-8 mb-4 text-center">
		<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1 text-lighter-gray">Archive</h1>
		<p class="font-fira text-sm text-gray-700">Welcome to my brain</p>
	</header>
<?php endif; ?>