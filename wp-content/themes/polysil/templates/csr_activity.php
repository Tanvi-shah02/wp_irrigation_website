<?php
/**
 * Template Name: CSR Activity
 */
?>
<?php get_header(); ?>

<?php
// WP_Query arguments
$args = array(
  /*  'post_type'  => array( 'activities' ),*/
    'post_type'  => 'activities' ,
    'order'   => 'ASC',
    'posts_per_page'      => -1,

);
// The Query
$activities = new WP_Query( $args );
?>

<div class="pageheaing-wrapper py-2 py-md-5">

    <div class="pageheading-image">
        <?php $banner = get_cfc_field('tagline', 'banner');
        if(!empty($banner)){ ?>
            <img class="pagehead_img" src="<?php the_cfc_field('tagline', 'banner'); ?>" alt="pageheader">
        <?php } ?>
    </div>

    <div class="container-xl">
        <div class="page-heading">
            <h2 class="text-dark m-0">
                <?php wp_title(''); ?>
            </h2>
        </div>
    </div>
</div>
<div class="news-inner-wrap pt-4">
    <div class="container-xl">
        <div class="row">

            <?php

            if ( $activities->have_posts() ) {

                while ( $activities->have_posts() ) {

                    $activities->the_post();

                    ?>


                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="news-item wow fadeInUp h-100">
                            <div class="card border-0 shadow h-100 mb-3">
                                <div class="news-image">
                                    <!-- <img src="images/assets/news-01.png" class="card-img-top" alt="News">-->
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large' ,array( 'class' => 'card-img-top' )); ?>
                                </div>
                                <div class="card-body pb-0 news-body">
                                    <h5 class="news-title font-condensed text-dark"> <?php the_title(); ?></h5>
                                    <p class="news-text card-text"> <?php echo wp_trim_words( get_the_content(), $num_words = 10); ?></p>
                                </div>
                                <div class="card-footer border-0 bg-transparent py-3"> <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="btn-link text-success">Read More <i class='la la-arrow-right la-lg'></i></a> </div>
                            </div>
                        </div>
                    </div>


                <?php }} ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
