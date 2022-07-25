<?php
/**
 * Template Name: Homepage
 */
?>
<?php get_header(); ?>
<?php
get_template_part( 'template-parts/home/slider', 'home' );
get_template_part( 'template-parts/home/profile', 'home' );
get_template_part( 'template-parts/home/features', 'home' );
get_template_part( 'template-parts/home/about_us', 'home' );
get_template_part( 'template-parts/home/news', 'home' );
get_template_part( 'template-parts/home/testimonial', 'home' );
get_template_part( 'template-parts/home/emp_testimonial', 'home' );
?>




<?php get_footer(); ?>