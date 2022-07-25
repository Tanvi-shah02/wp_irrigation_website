<!--
-----------------------------------------------------
	EMPLOYEE TESTIMONIALS
-----------------------------------------------------
-->

<?php
$post = get_post('1419');
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
    'post_type'  => array( 'employee_testimonial' ),
);
// The Query
$testimonial = new WP_Query( $args );
?>

<div class="testimonials-wrapper employee-testimonials-wrapper pt-5">

    <div class="title text-center wow fadeInDown">
        <div class="container-xl">
            <span class="small-text text-primary font-weight-bold text-uppercase"><?php echo $title;?></span>
            <h2 class="title-text font-weight-bold text-uppercase text-dark">
                <?= $tag_line;?>
            </h2>
        </div>
        <span class="large-text large-text-dark">Review</span>
    </div>

    <div class="container-xl">
        <div class="testimonials-carousel employee-testimonials-carousel owl-carousel owl-theme wow fadeInDown">
            <div class="item">
                <div class="card border-0 testimonials-card my-3">
                    <div class="card-body">
                        <div class="row flex-column align-items-center">

                            <?php

                            if ( $testimonial->have_posts() ) {

                            while ( $testimonial->have_posts() ) {

                            $testimonial->the_post();

                            ?>

                            <div class="col-md-4 mb-md-n5">
                                <div class="testimonials-thumb bg-primary text-center p-5 wow fadeInLeft">
                                  <!--  <img src="images/assets/user.png" class="img-fluid" alt="User Image">-->
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large',array( 'class' => 'img-fluid mx-auto' )); ?>
                                </div>
                            </div>


                            <div class="col-md-10">
                                <div class="testimonials-text text-white p-md-5 p-3 skew-element text-center">
                                    <span class="quote-mark">
                                    <img src="<?php echo ot_get_option('quote'); ?>"  alt="quote">    
                                    </span>
                                    <div class="skew-content pt-3">
                                        <h4> <?php the_title(); ?> </h4>
                                        <p>   <?php the_content(); ?> </p>
                                    </div>
                                </div>
                                <h2 class="user-name mt-3 la-3x text-center"> <?php echo get_post_meta(get_the_ID(),'emp_name', true); ?></h2>
                                <p class="text-muted text-center"> <?php echo get_post_meta(get_the_ID(),'designation', true); ?></p>
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