<section class="profile-wrap py-3 py-md-5 d-flex">

    <?php
    $post = get_post('33');
    if(!empty($post)) {
        //echo "<pre>"; print_R($post); die;
        $title = $post->post_title;
        $content = $post->post_content;
        $tag_line = get_post_meta($post->ID,'tag-line', true);
        $icon = get_post_meta($post->ID,'icon', true);
        $post_status = $post->post_status;
    }
    ?>

    <div class="container-xl">
        <div class="row flex-column h-100 justify-content-between pb-5 pr-md-5">


            <div class="col-md-4 align-self-start">
                <div class="our-vision-wrap text-center wow bounceInLeft">
                    <div class="card border-0 bg-success-gradient rounded-0 skew-element">
                        <div class="card-body skew-content py-5 px-5">
                            <div class="icon-block d-flex justify-content-center align-items-center bg-secondary"> <?= $icon;?></div>
                            <h4 class="text-white text-uppercase pt-4"><?php echo $title;?></h4>
                            <hr>
                            <?= $tag_line;?>
                            <a href="<?php echo get_permalink(846); ?>" class="text-white"><i class="las la-arrow-alt-circle-right la-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            $post = get_post('41');
            if(!empty($post)) {
                //echo "<pre>"; print_R($post); die;
                $title = $post->post_title;
                $content = $post->post_content;
                $tag_line = get_post_meta($post->ID,'tag-line', true);
                $icon = get_post_meta($post->ID,'icon', true);
                $post_status = $post->post_status;
            }
            ?>
            <div class="col-md-4 align-self-end mr-5">
                <div class="our-mission-wrap text-center wow bounceInRight">
                    <div class="card border-0 bg-secondary-gradient rounded-0 skew-element">
                        <div class="card-body skew-content py-5 px-5">
                            <div class="icon-block d-flex justify-content-center align-items-center bg-success"><?= $icon;?></div>
                            <h4 class="text-dark text-uppercase py-3"><?php echo $title;?></h4>
                            <hr>
                            <?= $tag_line;?>
                            <a href="<?php echo get_permalink(846); ?>" class="text-dark"><i class="las la-arrow-alt-circle-right la-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
