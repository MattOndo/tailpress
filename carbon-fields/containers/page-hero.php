<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Page Hero' ) )
	->where( 'post_type', '=', 'page' )
	->add_fields( array( 
		Field::make( 'text', 'hero_headline', __( 'Headline' ) )
			->set_classes( 'content-headline' ),
		Field::make( 'rich_text', 'hero_subheadline', __( 'Sub Headline' ) )
			->set_classes( 'content-subheadline' ),
		Field::make( 'radio', 'hero_has_image', 'Show Image' )
			->set_classes( 'image-display' )
			->set_default_value( 'false' )
			->add_options( array(
				'true' => 'Yes',
				'false' => 'No',
		)),
		Field::make( 'radio', 'hero_image_alignment', 'Image Alignment' )
			->set_classes( 'image-alignment' )
			->add_options( array(
				'right' => 'Right',
				'left' => 'Left',))
			->set_conditional_logic( array(
				'relation' => 'AND',
					array(
						'field' => 'hero_has_image',
						'value' => 'true',
						'compare' => '=',
		))),
		Field::make( 'image', 'hero_image', 'Image' )
			->set_classes( 'content-image' )
			->set_value_type( 'url' )
			->set_conditional_logic( array(
				'relation' => 'AND',
					array(
						'field' => 'hero_has_image',
						'value' => 'true',
						'compare' => '=',
		))),
		Field::make( 'text', 'hero-image-width', __( 'Image Width' ) )
			->set_classes( 'hero-image-width' )
			->set_conditional_logic( array(
				'relation' => 'AND',
					array(
						'field' => 'hero_has_image',
						'value' => 'true',
						'compare' => '=',
		))),
		Field::make( 'text', 'hero-image-height', __( 'Image Height' ) )
			->set_classes( 'hero-image-height' )
			->set_conditional_logic( array(
				'relation' => 'AND',
					array(
						'field' => 'hero_has_image',
						'value' => 'true',
						'compare' => '=',
		))),

	 ) );