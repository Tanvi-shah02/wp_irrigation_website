<?php //echo "hello"; die; ?>
<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article class="h-100" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="news-item product-item wow fadeInUp h-100">
        <div class="card border-0 shadow h-100 mb-3">
            <div class="news-image product-item-image">
                <!-- <img src="images/assets/news-01.png" class="card-img-top" alt="News">-->
                <?php echo get_the_post_thumbnail(get_the_ID(), 'large' ,array( 'class' => 'card-img-top' )); ?>
            </div>
            <div class="card-body pb-0 news-body">
                <h5 class="news-title product-title font-condensed text-dark"> <?php the_title(); ?></h5>
                <p class="news-text product-text card-text"> <?php
                    $content = get_post_meta(get_the_ID(),'short-contentp', true);
                    echo wp_trim_words( $content, $num_words = 10); ?></p>
            </div>
            <div class="card-footer border-0 bg-transparent py-3"> <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="btn-link text-success">Read More <i class='la la-arrow-right la-lg'></i></a> </div>
        </div>
    </div>



</article><!-- #post-<?php the_ID(); ?> -->
