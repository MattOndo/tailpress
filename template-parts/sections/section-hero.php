<?php
$page_id = get_queried_object_id();

// Content
$title = carbon_get_the_post_meta( 'hero_headline' );
$subtitle = carbon_get_the_post_meta( 'hero_subheadline' );

if ( is_single() ) {
  $title = get_the_title();
}
if ( is_home() ) {
  $title = 'Archive';
  $subtitle = 'Welcome to my brain';
}

// Image
$has_image = carbon_get_the_post_meta( 'hero_has_image' );
if ($has_image == "true") {
  $image = carbon_get_the_post_meta('hero_image');
  $imageID = attachment_url_to_postid( $image );
  $image_attributes = wp_get_attachment_image_src( $imageID, 'large' );
  $alt = get_post_meta($imageID, '_wp_attachment_image_alt', TRUE);
  $image_title = get_the_title($imageID);
  $image_alignment = carbon_get_the_post_meta('hero_image_alignment') == 'right' ? 'md:order-last' : 'md:order-first';
  $image_width = carbon_get_the_post_meta('hero-image-width') != "" ? carbon_get_the_post_meta('hero-image-width') : $image_attributes[1];
  $image_height = carbon_get_the_post_meta('hero-image-height') != "" ? carbon_get_the_post_meta('hero-image-height') : $image_attributes[2];
}

// Layout
if ($has_image == "true") :
?>
<header class="grid grid-cols-1 md:grid-cols-2 px-2 gap-6 items-center justify-center my-12">
  <figure class="flex flex-col items-center justify-center <?php echo $image_alignment; ?>">
    <img class="mx-auto" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt ?>" title="<?php echo $image_title ?>" width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" />
  </figure>
  <div>
    <h1 class="text-1xl md:text-5xl font-extrabold leading-tight mb-1 text-lighter-gray"><?php echo $title ?></h1>
  <div class="font-fira text-sm text-teal"><?php echo apply_filters( 'the_content', $subtitle ) ?></div>
  </div>
</header>
<?php else: ?>
<header class="entry-header  my-12 text-center">
  <h1 class="entry-title text-2xl md:text-5xl font-extrabold leading-tight mb-1 text-lighter-gray"><?php echo $title ?></h1>
  <?php if (is_single()) : ?>
    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="font-fira text-sm text-teal"><?php echo get_the_date(); ?></time>
  <?php else : ?>
    <div class="font-fira text-sm text-teal"><?php echo apply_filters( 'the_content', $subtitle ) ?></div>
  <?php endif; ?>
</header>
<?php endif; ?>