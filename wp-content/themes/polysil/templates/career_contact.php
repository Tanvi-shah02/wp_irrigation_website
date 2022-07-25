<?php
/**

 * Template Name: Career contact

 */
get_header(); ?>

<div class="pageheaing-wrapper py-2 py-md-5">

    <div class="pageheading-image">
        <?php $banner = get_cfc_field('tagline', 'banner');
        if(!empty($banner)){ ?>
            <img class="pagehead_img" src="<?php the_cfc_field('tagline', 'banner'); ?>" alt="pageheader">
        <?php } ?>
    </div>

    <div class="container-xl">
        <div class="page-heading">
            <h2 class="text-primary m-0">
                <?php wp_title(''); ?>
            </h2>
        </div>
    </div>
</div>


<div class="container-xl py-5">
    
            <div class="card-border-0 shadow">
                <div class="card-body">
                     <h4 class="text-center mb-3">Career With Polysil Irrigation Systems Pvt Ltd</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-xl-5">
                            <div class="contact_image_holder">
                            <img src="https://polysilirrigation.com/wp-content/themes/polysil/images/assets/career.png" alt="career" class="img-fluid">
                                </div>
                        </div>
        <div class="col-md-7 col-xl-7">
           
    <div class="contact_form pt-3">
        <?php echo do_shortcode('[contact-form-7 id="477" title="Career"]')?>
    </div>
                    
                    
                    </div>
            </div>
        </div>
    </div>
    

</div>

<?php get_footer(); ?>