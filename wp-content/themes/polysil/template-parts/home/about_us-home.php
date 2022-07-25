<!--
-----------------------------------------------------
      ABOUT US
-----------------------------------------------------
-->
<?php
$post = get_post('43');
if(!empty($post)) {
    //echo "<pre>"; print_R($post); die;
    $title = $post->post_title;
    $content = $post->post_content;
    $tag_line = get_post_meta($post->ID,'tag-line', true);
    $desc = get_post_meta($post->ID,'desc', true);
    $post_status = $post->post_status;
}
?>

<section class="about-warp py-3 py-md-5 my-3">
    <div class="title py-5 wow fadeInDown">
        <span class="large-text large-text-dark">About</span>
    </div>


    <div class="container-xl">
        <div class="row">

            <?php if (has_post_thumbnail( $post->ID ) ){ ?>
            <div class="col-md-6 wow fadeInDown">
              <!--  <img src="images/assets/about-us.png" alt="about us" class="img-fluid">-->
                <?php echo get_the_post_thumbnail($post->ID, 'large',array( 'class' => 'img-fluid' )); ?>
            </div>
            <?php } ?>

            <div class="col-md-6 ml-md-n5 mt-md-5 pt-3 wow flipInY">
                <div class="card about-card border-0 rounded-0 skew-element bg-primary wow fadeIn">
                    <div class="skew-content">
                        <div class="card-body py-5 p-2">
                            <div class="title">
                                <span class="small-text text-white font-weight-bold text-uppercase"><?php echo $title;?></span>
                                <h2 class="title-text font-weight-bold text-uppercase text-white">
                                    <?= $tag_line;?>
                                </h2>
                            </div>
                            <p class="text-white"><?= $desc;?> </p>

                            <a href="<?php echo get_permalink(43); ?>" class="text-white text-underline">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

</section>