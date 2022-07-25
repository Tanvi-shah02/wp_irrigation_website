<!--
-----------------------------------------------------
	TESTIMONIALS
-----------------------------------------------------
-->

<?php
$post = get_post('76');
if(!empty($post)) {
    //echo "<pre>"; print_R($post); die;
    $title = $post->post_title;
    $content = $post->post_content;
    $tag_line = get_post_meta($post->ID,'tag-line', true);
    $post_status = $post->post_status;
}
?>

<?php

// WP_Query arguments
$args = array(
    'post_type'  => array( 'testimonial' ),
);
// The Query
$testimonial = new WP_Query( $args );
?>

<div class="testimonials-wrapper py-3 py-md-5">

    <div class="title wow fadeInDown">
        <div class="container-xl">
            <span class="small-text text-primary font-weight-bold text-uppercase"><?php echo $title;?></span>
            <h2 class="title-text font-weight-bold text-uppercase text-dark">
                <?= $tag_line;?>
            </h2>
        </div>
        <span class="large-text large-text-dark">Review</span>
    </div>

    <div class="container-xl">
        <div class="testimonials-carousel owl-carousel owl-theme wow fadeInDown">
            <div class="item">
                <div class="card border-0 testimonials-card my-3">
                    <div class="card-body">
                        <div class="row">

                            <?php

                            if ( $testimonial->have_posts() ) {

                            while ( $testimonial->have_posts() ) {

                            $testimonial->the_post();

                            ?>

                            <div class="col-md-4">
                                <div class="testimonials-thumb wow fadeInLeft">
                                  <!--  <img src="images/assets/user.png" class="img-fluid" alt="User Image">-->
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large',array( 'class' => 'img-fluid' )); ?>
                                </div>
                            </div>


                            <div class="col-md pt-3">
                                <div class="testimonials-text bg-success text-white py-5 skew-element mt-5 mr-md-5">
                                    <span class="quote-mark">
                                    <img src="<?php echo ot_get_option('quote'); ?>"  alt="quote">    
                                    </span>
                                    <div class="skew-content pr-5">
                                        <h4> <?php the_title(); ?> </h4>
                                        <p>   <?php the_content(); ?> </p>
                                    </div>
                                </div>
                                <h2 class="user-name mt-3 la-3x"> <?php echo get_post_meta(get_the_ID(),'name', true); ?></h2>
                                <p class="text-muted"> <?php echo get_post_meta(get_the_ID(),'place', true); ?></p>
                            </div>
                            <?php }} ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>