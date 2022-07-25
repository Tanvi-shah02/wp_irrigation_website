<?php

/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php //echo hii; die; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Post thumbnail.
    //twentyfifteen_post_thumbnail();

    ?>
    <section class="inner-page-wrapper pb-md-5">
        <div class="pageheaing-wrapper py-2 py-md-5">

            <?php $bannerp = get_cfc_field('products', 'bannerp');
                  $bannern = get_cfc_field('news', 'bannern');
                  $banner = get_cfc_field('tagline', 'banner'); ?>

            <?php if(get_post_type() == 'products'){  ?>

            <div class="pageheading-image <?php echo empty($bannerp) ? 'no-image' : ''; ?>">
                <?php
                if(!empty($bannerp)){ ?>
                    <img class="pagehead_img" src="<?php the_cfc_field('products', 'bannerp'); ?>" >
              <?php  }
                ?>
            </div>

            <?php }
            elseif(get_post_type() == 'news'){ ?>

            <div class="pageheading-image <?php echo empty($bannern) ? 'no-image' : ''; ?>">
                <?php
                if(!empty($bannern)){ ?>
                    <img class="pagehead_img" src="<?php the_cfc_field('news', 'bannern'); ?>" >
                <?php  }
                ?>
            </div>

            <?php }
            else{?>

                <div class="pageheading-image <?php echo empty($banner) ? 'no-image' : ''; ?>">
                    <?php
                    if(!empty($banner)){ ?>
                        <img class="pagehead_img" src="<?php the_cfc_field('tagline', 'banner'); ?>" >
                    <?php  }
                    ?>
                </div>

            <?php } ?>


            <div class="container-xl">
                <div class="page-heading">
                    <h2 class="text-dark m-0">
                        <?php wp_title(''); ?>
                    </h2>
                </div>
            </div>
        </div>


        <div class="auto-container pt-4">
            <div class="container-xl">
                <div class="entry-content service-content">

                    <?php if(get_post_type() == 'products'){ ?>

                        <div class="row mb-4">

                            <!--    <?php /*if ( has_post_thumbnail() ) { */?>
                            <div class="col-md">
                                <div class="service-image mb-3">
                                    <?php /*echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-fluid' ) );*/?>
                                </div>
                            </div>
                        --><?php /*}*/?>

                            <div class="col-md-8">
                                <!--     <div class="service-info">
                                <?php
                                /*                                $sub_title = get_post_meta( get_the_ID(), 'wpcf-sub-title-line', true ); */?>
                                <h4><?php /*echo $sub_title; */?></h4>
                                <?php /*$short_description = get_post_meta( get_the_ID(), 'wpcf-short-descriptions', true );
                                echo $short_description;
                                */?>
                            </div>-->

                                <?php the_content(); ?>
                            </div>

                            <?php get_sidebar( 'right' ); ?>

                        </div>

                   <?php }
                   elseif(get_post_type() == 'news'){?>

                       <div class="row mb-4">

                           <div class="col-md-8">

                               <?php the_content(); ?>
                           </div>

                           <?php get_sidebar( 'news' ); ?>

                       </div>

                   <?php }
                   else{
                   ?>


                    <div class="row mb-4">

                        <div class="col-md">

                            <?php the_content(); ?>
                        </div>



                    </div>
                    <?php }?>

                    <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) );
                    ?>
                </div>
                <!-- .entry-content -->
            </div>
        </div>
    </section>
    <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</article>
<!-- #post-## -->
