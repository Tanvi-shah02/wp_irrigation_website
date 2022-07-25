<?php
$post = get_post('43');
if(!empty($post)) {
    //echo "<pre>"; print_R($post); die;
    $title = $post->post_title;
    $content = $post->post_content;
    $post_status = $post->post_status;
}
?>

<div class="col-md-6 col-lg-4 wow fadeInDown">
    <a class="footer-logo py-3 wow flipInX" href="<?php echo site_url();?>">
        <img src="<?php echo ot_get_option('site_logo'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" class="img-fluid"></a>


    <div class="footer-widget">
      <!--  <p>
            <?php /*echo wp_trim_words( $content, $num_words = 33); */?>
            Read More
        </p>-->

        <?php $address = ot_get_option('address');
        if(!empty($address)){ ?>
        <div class="address-link media d-md-flex mt-2">
            <div class="media-left mr-3"> <i class="la la-map-marker"></i> </div>
            <div class="media-body"><?= $address ?> </div>
        </div>
        <?php } ?>

        <?php $contact_number = ot_get_option('contact_number');
        $contact2 = ot_get_option('contact2');
        if(!empty($contact_number)){ ?>
        <div class="phone-link media d-md-flex mt-2">
            <div class="media-left mr-3"> <i class="la la-phone-volume"></i> </div>
            <div class="media-body">
                <p><a href="tel:<?= $contact_number ?>"><?= $contact_number ?></a></p>
                <p><a href="tel:<?= $contact2 ?>"><?= $contact2 ?></a> <span class="text-secondary text-uppercase small">Toll Free</span> </p>
            </div>
        </div>
        <?php }?>

        <?php $email = ot_get_option('email');
        if(!empty($email)){ ?>
        <a class="mail-link media d-md-flex mt-2" href="mailto:<?= $email ?>">
            <div class="media-left mr-3"> <i class="la la-envelope"></i> </div>
            <div class="media-body"><?= $email ?></div>
        </a>
        <?php } ?>

        <?php $socialLinks = ot_get_option('social_links'); ?>
        <?php if(!empty($socialLinks)){ ?>
        <div class="social-networks my-3 py-2 wow fadeInDown">
            <?php foreach($socialLinks as $socialLink){ ?>
                <?php if(!empty($socialLink['href']) && !empty($socialLink['title'])){ ?>
            <a class="<?php echo $socialLink['name']; ?> mr-3" href="<?php echo $socialLink['href']; ?>" title="<?php echo $socialLink['name']; ?>" target="_blank">
                <?php echo $socialLink['title']; ?>
            </a>
                    <?php }}?>
           <!-- <a class="twitter mr-3" href="#"><i class="la la-twitter"></i></a>
            <a class="youtube mr-3" href="#"><i class="la la-youtube"></i></a>
            <a class="google mr-3" href="#"><i class="la la-google-plus"></i></a>-->
        </div>
        <?php } ?>


    </div>

</div>