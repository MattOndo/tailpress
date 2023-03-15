<?php       
global $section;
switch ( $section['_type'] ) {
  case 'text-image':
    get_template_part('template-parts/sections/section', 'text-image');
    break;
  case 'text-video':
    get_template_part('template-parts/sections/section', 'text-video');
    break;
  case 'feature-cards':  
    get_template_part('template-parts/sections/section', 'feature-cards');
    break;
  case 'testimonial-cards':  
    get_template_part('template-parts/sections/section', 'testimonial-cards');
    break;
  case 'testimonial-slider':  
    get_template_part('template-parts/sections/section', 'testimonial-slider');
    break;
  case 'testimonial-single':  
    get_template_part('template-parts/sections/section', 'testimonial-single');
    break;
  case 'heading':
    get_template_part('template-parts/sections/section', 'heading');
    break;
  case 'affiliations':  
    get_template_part('template-parts/sections/section', 'affiliations');
    break;
  case 'subscribe':  
    get_template_part('template-parts/sections/section', 'subscribe');
    break;
  case 'text-image-cta':  
    get_template_part('template-parts/sections/section', 'text-image-cta');
    break;
  case 'recent-posts':  
    get_template_part('template-parts/sections/section', 'recent-posts');
    break;
  case 'mkto-form':  
    get_template_part('template-parts/sections/section', 'mkto-form');
    break;
  case 'image-single':  
    get_template_part('template-parts/sections/section', 'image-single');
    break;
  case 'image-double':  
    get_template_part('template-parts/sections/section', 'image-double');
    break;
  case 'faq-section':  
    get_template_part('template-parts/sections/section', 'faq');
    break;
  case 'sticky-features-section':  
    get_template_part('template-parts/sections/section', 'sticky-features');
    break;
  case 'stats-counter-section':  
    get_template_part('template-parts/sections/section', 'stats-counter');
    break;
  case 'industries-cta':  
    get_template_part('template-parts/sections/section', 'industries');
    break;
  case 'blockquote':  
    get_template_part('template-parts/sections/section', 'blockquote');
    break;
}
		