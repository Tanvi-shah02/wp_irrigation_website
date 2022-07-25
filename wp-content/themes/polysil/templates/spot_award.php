<?php
/**
 * Template Name: spot_award
 */
?>
<?php get_header(); ?>
<?php
// WP_Query arguments
$args = array(
  /*  'post_type'  => array( 'products' ),*/
    'post_type'  => 'spot_award' ,
    'orderby' => array(
        'date' =>'DESC',
    ),
    'posts_per_page'      => -1,

);
// The Query
$products = new WP_Query( $args );
?>
<div class="pageheaing-wrapper py-2 py-md-5">

    <?php $banner = get_cfc_field('tagline', 'banner'); ?>
    <div class="pageheading-image <?php echo empty($banner) ? 'no-image' : ''; ?>">

        <?php
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

            if ( $products->have_posts() ) {

                while ( $products->have_posts() ) {

                    $products->the_post();

                    ?>


                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="news-item wow fadeInUp h-100">
                            <div class="card border-0 shadow h-100 mb-3">
                                <div class="news-image">
                                    <!-- <img src="images/assets/news-01.png" class="card-img-top" alt="News">-->
                                    <a  href="<?php echo get_the_post_thumbnail_url();?>" target="_blank">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large' ,array( 'class' => 'card-img-top' )); ?>
                                </div>
                                <div class="card-body pb-0 news-body">
                                    <?php
                                    $categories = get_the_terms($post->ID, 'awards_cat');
                                    //echo $categories; 
                                     if ( ! empty( $categories ) ) {
                                         ?>
                                     	<h5 align="center"><?php echo $categories[0]->name; ?></h5>
                                     <?php } ?>
                                     <?php $postImage = get_the_post_thumbnail_url();
                                        
                                          //echo basename($postImage)
                                         //echo $postImage . "\n";   
                                     ?>
                                     
                                     <a align="center" href="<?php echo $postImage?>" download="<?php echo basename($postImage) ?>">Download</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                <?php }} ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>