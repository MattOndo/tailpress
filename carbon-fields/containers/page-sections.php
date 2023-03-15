<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make( 'post_meta', __( 'Page Sections', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'default')
    ->add_fields( array(
        Field::make( 'complex', 'crb_sections', 'Sections' )
            ->set_collapsed( true )
            ->set_layout( 'grid' )

            // Text w/ Image
            ->add_fields( 'text-image', 'Text w/ Image', array(

              Field::make( 'html', 'label_options', __( 'Options' ) )
              ->set_classes( 'options-header' )
                ->set_html( '<h2>Options</h2>' ),
              Field::make( 'radio', 'has_button', 'Include Button' )
                ->set_classes( 'button-options' )
                ->add_options( array(
                  'true' => 'Yes',
                  'false' => 'No',
              )),
              Field::make( 'radio', 'image_alignment', 'Set Image Alignment' )
                ->set_classes( 'image-options' )
                ->add_options( array(
                  'right' => 'Right',
                  'left' => 'Left',
              )),

              Field::make( 'html', 'label_content', __( 'Content' ) )
              ->set_classes( 'content-header' )
                ->set_html( '<h2>Content</h2>' ),
              Field::make( 'image', 'image', 'Image' )
                ->set_classes( 'content-image' )
                ->set_width('50%')
                ->set_value_type( 'url' ),
              Field::make( 'text', 'heading', 'Heading' )
                ->set_classes( 'content-heading' ),
              Field::make( 'text', 'content-image-width', __( 'Image Width' ) )
                ->set_classes( 'content-image-width' ),
              Field::make( 'text', 'content-image-height', __( 'Image Height' ) )
                ->set_classes( 'content-image-height' ),
              Field::make( 'rich_text', 'content', 'Content' )
                ->set_classes( 'content-text' ),
              Field::make( 'text', 'button_text', 'Button Text' )
                ->set_classes( 'content-buttontext' )
                ->set_conditional_logic( array(
                  'relation' => 'AND',
                    array(
                      'field' => 'has_button',
                      'value' => 'true',
                      'compare' => '=',
              ))),
              Field::make( 'text', 'button_url', 'Button URL' )
                ->set_classes( 'content-buttonlink' )
                ->set_conditional_logic( array(
                  'relation' => 'AND',
                    array(
                      'field' => 'has_button',
                      'value' => 'true',
                      'compare' => '=',
              ))),
            ))
            ->set_header_template( '
                <% if (heading) { %>
                    <%- heading ? heading : "Text w/ Image" %>
                <% } %>'
            )

            // Card w/ Image
            ->add_fields( 'card-image', 'Card w/ Image', array(

              Field::make( 'html', 'label_options', __( 'Options' ) )
              ->set_classes( 'options-header' )
                ->set_html( '<h2>Options</h2>' ),
              Field::make( 'radio', 'has_button', 'Include Button' )
                ->set_classes( 'button-options' )
                ->add_options( array(
                  'true' => 'Yes',
                  'false' => 'No',
              )),
              Field::make( 'radio', 'image_alignment', 'Set Image Alignment' )
                ->set_classes( 'image-options' )
                ->add_options( array(
                  'right' => 'Right',
                  'left' => 'Left',
              )),

              Field::make( 'html', 'label_content', __( 'Content' ) )
              ->set_classes( 'content-header' )
                ->set_html( '<h2>Content</h2>' ),
              Field::make( 'image', 'image', 'Image' )
                ->set_classes( 'content-image' )
                ->set_width('50%')
                ->set_value_type( 'url' ),
              Field::make( 'text', 'heading', 'Heading' )
                ->set_classes( 'content-heading' ),
              Field::make( 'text', 'content-image-width', __( 'Image Width' ) )
                ->set_classes( 'content-image-width' ),
              Field::make( 'text', 'content-image-height', __( 'Image Height' ) )
                ->set_classes( 'content-image-height' ),
              Field::make( 'rich_text', 'content', 'Content' )
                ->set_classes( 'content-text' ),
              Field::make( 'text', 'button_text', 'Button Text' )
                ->set_classes( 'content-buttontext' )
                ->set_conditional_logic( array(
                  'relation' => 'AND',
                    array(
                      'field' => 'has_button',
                      'value' => 'true',
                      'compare' => '=',
              ))),
              Field::make( 'text', 'button_url', 'Button URL' )
                ->set_classes( 'content-buttonlink' )
                ->set_conditional_logic( array(
                  'relation' => 'AND',
                    array(
                      'field' => 'has_button',
                      'value' => 'true',
                      'compare' => '=',
              ))),
            ))
            ->set_header_template( '
                <% if (heading) { %>
                    <%- heading ? heading : "Text w/ Image" %>
                <% } %>'
            ),


          ));

            // // Text w/ Video
            // ->add_fields( 'text-video', 'Text w/ Video', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'radio', 'video_alignment', 'Set Video Alignment' )
            //     ->add_options( array(
            //         'left' => 'Left',
            //         'right' => 'Right',
            //         'center' => 'Center',
            //     ) ),
            //     Field::make( 'text', 'heading', 'Heading' ),
            //     Field::make( 'rich_text', 'content', 'Content' )
            //     ->set_conditional_logic( array(
            //         'relation' => 'OR',
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'right',
            //                 'compare' => '=',
            //             ),
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'left',
            //                 'compare' => '=',
            //             )
            //         ) ),
            //     Field::make( 'text', 'video', 'Video URL' ),
            //     Field::make( 'text', 'video_id', 'Video ID' ),
            //     Field::make( 'text', 'button_text', 'Button Text' )
            //     ->set_conditional_logic( array(
            //         'relation' => 'OR',
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'right',
            //                 'compare' => '=',
            //             ),
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'left',
            //                 'compare' => '=',
            //             )
            //         ) ),
            //     Field::make( 'text', 'button_url', 'Button URL' )
            //     ->set_conditional_logic( array(
            //         'relation' => 'OR',
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'right',
            //                 'compare' => '=',
            //             ),
            //             array(
            //                 'field' => 'video_alignment',
            //                 'value' => 'left',
            //                 'compare' => '=',
            //             )
            //         ) ),
            // ) )
            
            // // Feature Cards
            // ->add_fields( 'feature-cards', 'Feature Cards', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'radio', 'image_size', 'Image Size' )
            //         ->add_options( array(
            //             'sm' => 'Small',
            //             'md' => 'Medium',
            //             'full' => 'Full',
            //         ) ),
            //     Field::make( 'complex', 'crb_features', 'Feature Cards' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'feature-card', 'Feature Card', array(
            //             Field::make( 'image', 'featured_image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //             Field::make( 'text', 'featured_heading', 'Heading' ),
            //             Field::make( 'textarea', 'featured_content', 'Content' ),
            //             Field::make( 'text', 'button_url', 'Button URL' ),
            //             Field::make( 'text', 'button_text', 'Button Text' )
            //         ) ),
            //     Field::make( 'text', 'button_text', 'Section Button Text' ),
            //     Field::make( 'text', 'button_url', 'Section Button URL' ),
            // ) )

            // // Testimonial Cards
            // ->add_fields( 'testimonial-cards', 'Testimonial Cards', array(
            //     Field::make( 'radio', 'testimonial_number', 'How Many Testimonials to Show' )
            //             ->add_options( array(
            //                 '1' => '1',
            //                 '2' => '2',
            //                 '3' => '3',
            //                 '4' => '4',
            //             ) ),
            //     Field::make( 'complex', 'crb_testimonials', 'Testimonial Cards' )
            //         ->set_collapsed( true )
            //         ->set_min('2')
            //         ->set_max('4')
            //         ->add_fields( 'testimonial-card', 'Testimonial Card', array(
            //             Field::make( 'image', 'testimonial_image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //             Field::make( 'textarea', 'testimonial_content', 'Content' ),
            //             Field::make( 'text', 'testimonial_name', 'Name' ),
            //             Field::make( 'text', 'testimonial_company', 'Company' )
            //         ) )
            // ) )

            // // Testimonial Slider
            // ->add_fields( 'testimonial-slider', 'Testimonial Slider', array(
            //     Field::make( 'radio', 'slider_navigation', 'Slider Navigation' )
            //             ->add_options( array(
            //                 'dots' => 'Dots',
            //                 'arrows' => 'Arrows',
            //                 'both' => 'Both',
            //             ) ),
            //     Field::make( 'radio', 'slider_text_location', 'Text Below Images?' )
            //             ->add_options( array(
            //                 'no' => 'No',
            //                 'yes' => 'Yes',
            //             ) ),
            //     Field::make( 'text', 'slide_duration', 'Slide Duration (Seconds)' ),
            //     Field::make( 'complex', 'crb_testimonial_slider', 'Testimonial Slider' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'testimonial-slide', 'Testimonial Slide', array(
            //             Field::make( 'image', 'testimonial_image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //             Field::make( 'textarea', 'testimonial_content', 'Quote' ),
            //             Field::make( 'text', 'testimonial_name', 'Name' ),
            //             Field::make( 'text', 'testimonial_company', 'Company' ),
            //         ) )
            // ) )

            // // Testimonial Single
            // ->add_fields( 'testimonial-single', 'Testimonial Single', array(
            //     Field::make( 'image', 'testimonial_image', 'Image' )
            //         ->set_value_type( 'url' ),
            //     Field::make( 'textarea', 'testimonial_content', 'Content' ),
            //     Field::make( 'text', 'testimonial_name', 'Name' ),
            //     Field::make( 'text', 'testimonial_company', 'Company' ) 
            // ) )

            // // Section Heading
            // ->add_fields( 'heading', 'Heading', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'select', 'heading_size', 'Heading Size' )
            //         ->add_options( array(
            //             'h2' => 'H2',
            //             'h3' => 'H3',
            //             'h4' => 'H4',
            //             'h5' => 'H5',
            //             'h6' => 'H6',
            //             'none' => 'None',
            //         ) ),
            //     Field::make( 'text', 'heading', 'Heading' ),
            //     Field::make( 'text', 'content', 'Content' ),
            // ) )

            // // Affiliations & Alliances
            // ->add_fields( 'affiliations', 'Affiliations', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'complex', 'crb_affiliations', 'Affiliations and Alliances' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'affiliation', 'Affiliation', array(
            //             Field::make( 'image', 'affiliation_image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //         ) )            
            // ) )

            // // Subscribe Form (Marketo)
            // ->add_fields( 'subscribe', 'Subscribe Form', array(
            //             Field::make( 'text', 'heading', 'Heading' ),
            //             Field::make( 'text', 'sub-heading', 'Sub Heading' ),
            //             Field::make( 'text', 'mkto-form-id', 'Marketo Form ID' ),
            //             Field::make( 'radio', 'show_social', 'Show Social Media Icons?' )
            //                 ->add_options( array(
            //                     'yes' => 'Yes',
            //                     'no' => 'No'
            //             ) ),
            // ) )

            // // General Form (Marketo)
            // ->add_fields( 'mkto-form', 'General Marketo Form', array(
            //             Field::make( 'text', 'mkto-form-id', 'Marketo Form ID' ),
            // ) )

            // // Text w/ Image CTA
            // ->add_fields( 'text-image-cta', 'Text w/ Image CTA', array(
            //     Field::make( 'text', 'heading', 'Heading' ),
            //     Field::make( 'text', 'button_text', 'Button Text' ),
            //     Field::make( 'text', 'button_url', 'Button URL' ),
            //     Field::make( 'image', 'image', 'Image' )
            //         ->set_value_type( 'url' )
            //         ->set_help_text( 'If this field is not set, the default image will be used' ),
            //     Field::make( 'checkbox', 'popup_form', 'Use Popup Form?' )
            //         ->set_option_value( 'yes' )
            //         ->set_help_text( 'If this is checked the button will trigger a popover form' ),
            //     Field::make( 'radio', 'image_shift_up', 'Shift Image Up?' )
            //         ->add_options( array(
            //             'no' => 'No',
            //             'yes' => 'Yes',
            //         ) )
            // ) )

            // // Single Image
            // ->add_fields( 'image-single', 'Single Image', array(
            //     Field::make( 'image', 'image', 'Image' )
            //         ->set_value_type( 'url' ),
            //     Field::make( 'text', 'image_url', 'Image URL' )
            // ) )

            // // Double Image
            // ->add_fields( 'image-double', 'Double Image', array(
            //     Field::make( 'image', 'image_1', 'Image 1' )
            //         ->set_value_type( 'url' ),
            //     Field::make( 'text', 'image_1_url', 'Image 1 URL' ),
            //     Field::make( 'text', 'image_1_heading', 'Image 1 Heading' ),
            //     Field::make( 'text', 'image_1_text', 'Image 1 Text' ),
            //     Field::make( 'image', 'image_2', 'Image 2' )
            //         ->set_value_type( 'url' ),
            //     Field::make( 'text', 'image_2_url', 'Image 2 URL' ),
            //     Field::make( 'text', 'image_2_heading', 'Image 2 Heading' ),
            //     Field::make( 'text', 'image_2_text', 'Image 2 Text' ),
            // ) )

            // // FAQ Section
            // ->add_fields( 'faq-section', 'FAQs', array(
            //     Field::make( 'complex', 'faq_cards', 'FAQ Cards' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'faq-card', 'Q & A', array(
            //             Field::make( 'text', 'faq_question', 'Question' ),
            //             Field::make( 'textarea', 'faq_answer', 'Answer' )
            //         ) )
            // ) )

            // // Sticky Features Section
            // ->add_fields( 'sticky-features-section', 'Features', array(
            //     Field::make( 'complex', 'sticky_feature_cards', 'Feature Cards' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'sticky-feature-card', 'Feature Card', array(
            //             Field::make( 'text', 'heading', 'Heading' ),
            //             Field::make( 'image', 'image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //             Field::make( 'rich_text', 'sticky_feature_list', 'Feature List' ),
            //         ) ),
            //     Field::make( 'text', 'button_url', 'Section Button URL' ),
            //     Field::make( 'text', 'button_text', 'Section Button Text' ),
            // ) )

            // // Stats Counter Section
            // ->add_fields( 'stats-counter-section', 'Stats Counter', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'complex', 'stats_blocks', 'Stats Blocks' )
            //         ->set_collapsed( true )
            //         ->add_fields( 'stats-block', 'Stats Block', array(
            //             Field::make( 'text', 'stat_value', 'Stat Value' ),
            //             Field::make( 'text', 'stat_label', 'Stat Label' ),
            //             Field::make( 'checkbox', 'prefix', 'Prefix with $' ),
            //             Field::make( 'checkbox', 'postfix_plus', 'Postfix with +' ),
            //             Field::make( 'checkbox', 'postfix_percent', 'Postfix with %' ),
            //             Field::make( 'radio', 'value_measure', 'Value Measure' )
            //                 ->add_options( array(
            //                     'K' => 'Thousand (K)',
            //                     'M' => 'Million (M)',
            //                     'B' => 'Billion (B)',
            //                     'N' => 'None',
            //                 ) )
            //         ) )
            // ) )

            // // Industries CTA
            // ->add_fields( 'industries-cta', 'Industries CTA', array(
            //     Field::make( 'text', 'section_heading', 'Section Heading' ),
            //     Field::make( 'complex', 'industries', 'Industries' )
            //         ->set_collapsed( true )
            //         ->set_min('3')
            //         ->set_max('6')
            //         ->add_fields( 'industry', 'Industry', array(
            //             Field::make( 'image', 'image', 'Image' )
            //                 ->set_value_type( 'url' ),
            //             Field::make( 'text', 'heading', 'Heading' ),
            //             Field::make( 'text', 'link_url', 'Button URL' )
            //         ) )
            // ) )

            // // BlockQuote
            // ->add_fields( 'blockquote', 'Blockquote', array(
            //     Field::make('radio', 'grey_background', 'Grey Background?')
            //         ->add_options(array(
            //             'no' => 'No',
            //             'yes' => 'Yes'
            //         )),
            //     Field::make( 'text', 'quote_text', 'Quote Text' ),
            //     Field::make( 'text', 'quote_cite', 'Quote Cite' ),
            // ) )
        // ) );