<?php
global $section;
$image_alignment = $section['image_alignment'] == 'right' ? 'md:order-last' : 'md:order-first';
$image = $section['image'];
$imageID = attachment_url_to_postid( $image );
$image_attributes = wp_get_attachment_image_src( $imageID, 'large' );
$alt = get_post_meta($imageID, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($imageID);
$image_width = $section['content-image-width'] != "" ? $section['content-image-width'] : $image_attributes[1];
$image_height = $section['content-image-height'] != "" ? $section['content-image-height'] : $image_attributes[2];
?>
<article class="grid grid-cols-1 md:grid-cols-[25%_auto] gap-6 items-center justify-center my-20 bg-slate p-4 border-r-2 border-teal rounded-lg">
  <figure class="flex flex-col items-center justify-center <?php echo $image_alignment; ?>">
    <img class="mx-auto" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt ?>" title="<?php echo $image_title ?>" width="<?php echo $image_width ?>" height="<?php echo $image_height ?>" />
  </figure>
  <div>
    <h2 class="text-1xl md:text-3xl font-extrabold leading-tight mb-1 text-lighter-gray"><?php echo $section['heading']; ?></h2>
    <?php echo apply_filters( 'the_content', $section['content'] ) ?>
    <?php if ($section['button_url']) : ?>
      <a href="<?php echo $section['button_url']; ?>" class="button red"><?php echo $section['button_text']; ?></a>
    <?php endif; ?>
  </div>
</article>