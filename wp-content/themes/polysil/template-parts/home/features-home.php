<!--
-----------------------------------------------------
  FEATURES
-----------------------------------------------------
-->

<?php
$post = get_post('54');
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
    'post_type'  => array( 'who_we_are' ),
);
// The Query
$who_we_are = new WP_Query( $args );
//echo"<pre>"; print_r($who_we_are); die;
?>


<section class="features-wrap py-3 py-md-5 bg-success-light">

    <div class="title py-5 wow fadeInDown">

        <div class="container-xl">
            <span class="small-text text-primary font-weight-bold text-uppercase"><?php echo $title;?></span>
            <h2 class="title-text font-weight-bold text-uppercase text-dark">
                <?= $tag_line;?></h2>

        </div>
        <span class="large-text large-text-dark">Quality</span>
    </div>

    <div class="container-xl">
        <div class="row mb-3 mb-md-5">



            <?php

            if ( $who_we_are->have_posts() ) {

            while ( $who_we_are->have_posts() ) {

            $who_we_are->the_post();

            ?>

            <div class="col-md-4">
                <div class="card feature-card bg-white border-0 rounded-0 h-100 wow flipInX">
                    <div class="pt-5 px-4">
                        <div class="feature-icon pb-3"> <?php echo get_post_meta(get_the_ID(),'who-icon', true); ?></div>
                        <h2 class="feature-title text-uppercase font-weight-bold tracking-widest mb-0">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <div class="feature-body card-body bg-primary pt-5 text-center text-white pt-5 pb-0">
                        <div class="feature-content pt-5">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="card-footer bg-primary border-0 text-right"><a href="  <?php echo get_the_permalink(get_the_ID()); ?>" class="text-white"><i class="las la-arrow-right la-2x"></i></a></div>
                </div>
            </div>
            <?php }} ?>


            <!--<div class="col-md-4">
                <div class="card feature-card bg-white border-0 rounded-0 h-100 wow flipInX">
                    <div class="pt-5 px-4">
                        <div class="feature-icon pb-3"><i class="las la-trophy la-4x text-primary"></i></div>
                        <h2 class="feature-title text-uppercase font-weight-bold tracking-widest mb-0">
                            Our <br>
                            Progress
                        </h2>
                    </div>
                    <div class="feature-body card-body bg-primary pt-5 text-center text-white pt-5 pb-0">
                        <div class="feature-content pt-5">
                            <p>We  are  at  6th Position in GGRC and First among recently joined company and focusing on Drip Irrigation.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-primary border-0 text-right"><a href="#" class="text-white"><i class="las la-arrow-right la-2x"></i></a></div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card feature-card bg-white border-0 rounded-0 h-100 wow flipInX">
                    <div class="pt-5 px-4">
                        <div class="feature-icon pb-3"><i class="las la-chart-bar la-4x text-primary"></i></div>
                        <h2 class="feature-title text-uppercase font-weight-bold tracking-widest mb-0">
                            What We <br>
                            Are Today
                        </h2>
                    </div>
                    <div class="feature-body card-body bg-primary pt-5 text-center text-white pt-5 pb-0">
                        <div class="feature-content pt-5">
                            <p>Most promising Company because we are good Paymaster.
                                Very good repo in Dealers due to strong support ideas.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-primary border-0 text-right"><a href="#" class="text-white"><i class="las la-arrow-right la-2x"></i></a></div>
                </div>
            </div>-->


        </div>
    </div>
    </div>
</section>
