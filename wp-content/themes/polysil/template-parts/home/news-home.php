<!--
-----------------------------------------------------
	NEWS
-----------------------------------------------------
-->
<?php
$post = get_post('15');
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
    //'post_type'  => array( 'news' ),
    'post_type'  => 'news' ,
    'order'   => 'ASC',
    'posts_per_page'      => -1,

);
// The Query
$news = new WP_Query( $args );
//echo "<pre>"; print_r($news); die;
?>

<section class="news-wrapper py-3 py-md-5">

    <div class="title wow fadeInDown">
        <div class="container-xl">
            <span class="small-text text-white font-weight-bold text-uppercase"><?php echo $title;?></span>
            <h2 class="title-text font-weight-bold text-uppercase text-white">
                <?= $tag_line;?>
            </h2>
            <span class="large-text large-text-dark">News</span>
        </div>
    </div>
  <div class="container-xl">
    <div class="news-module d-flex flex-column pt-4">
      

            <div class="news-carousel-nav d-flex justify-content-center justify-content-md-end align-items-center mt-n3 mt-md-n5 order-2 order-md-1 wow fadeInLeft">
                <!-- SLIDER NAVIGAION -- NEXT PREV -->
            </div>

            <div class="news-carousel owl-carousel owl-theme pt-4 order-1 order-md-2">



                <?php

                if ( $news->have_posts() ) {

                while ( $news->have_posts() ) {

                $news->the_post();

                ?>

                <div class="item news-item wow fadeInUp h-100">
                    <div class="card border-0 shadow h-100">
                        <div class="news-image">
                  <!-- <img src="images/assets/news-01.png" class="card-img-top" alt="News">-->
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'large' ,array( 'class' => 'card-img-top' )); ?>
                        </div>
                        <div class="card-body pb-0 news-body">
                            <h5 class="news-title font-condensed text-dark"> <?php the_title(); ?></h5>
                            <p class="news-text card-text"> <?php
                                $content = get_post_meta(get_the_ID(),'short-content', true);
                                echo wp_trim_words( $content, $num_words = 10); ?></p>
                        </div>
                        <div class="card-footer border-0 bg-transparent py-3"> <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="btn-link text-success">Read More <i class='la la-arrow-right la-lg'></i></a> </div>
                    </div>
                </div>
                <?php
                    wp_reset_postdata();
                }} ?>


            </div>
        </div>
    </div>

    </div>
</section>
