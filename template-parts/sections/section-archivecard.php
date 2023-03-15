<?php
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt_text = $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
?>
<article class="grid grid-cols-1 md:grid-cols-[25%_auto] gap-6 items-center justify-center my-20 bg-slate p-4 border-r-2 border-teal rounded-lg"> 
    <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt_text ?>" width="277" height="207"/>
        </a>
    <?php } ?>
    <div class="p-6 post-text">
        <h3 class="entry-title text-xl md:text-2xl font-extrabold leading-tight mb-1 text-lighter-gray mt-0"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="unstyled text-lighter-gray"><?php the_title(); ?></a></h3>
        <?php the_excerpt() ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-fira">
            <?php echo 'Continue Reading >' ?>
        </a>
    </div>	
</article>