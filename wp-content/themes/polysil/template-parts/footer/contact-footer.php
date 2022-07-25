<div class="col-md-6 col-lg-4">
    <div class="footer-widget wow fadeInDown">
      <!--  <h5 class="footer-widget-title text-white">Facebook</h5>-->

        <?php echo do_shortcode('[fb_widget fb_url="https://www.facebook.com/polysil.vadodara/" width="300" height="300"]'); ?>


        <?php /*$address = ot_get_option('address');
        if(!empty($address)){ */?><!--
        <div class="phone-link media d-md-flex mt-3">
            <div class="media-left mr-3"> <i class="la la-map-marker"></i> </div>
            <div class="media-body"><?/*= $address */?> </div>
        </div>
        <?php /*} */?>

        <?php /*$contact_number = ot_get_option('contact_number');
        $contact2 = ot_get_option('contact2');
        if(!empty($contact_number)){ */?>
        <div class="phone-link media d-md-flex mt-3">
            <div class="media-left mr-3"> <i class="la la-phone-volume"></i> </div>
            <div class="media-body">
                <p><?/*= $contact_number */?></p>
                <p><?/*= $contact2 */?> <span class="text-secondary text-uppercase small">Toll Free</span>   </p>
            </div>
        </div>
        <?php /*} */?>

        <?php /*$email = ot_get_option('email');
        if(!empty($email)){ */?>
        <a class="mail-link media d-md-flex mt-3" href="mailto:<?/*= $email */?>">
            <div class="media-left mr-3"> <i class="la la-envelope"></i> </div>
            <div class="media-body"><?/*= $email */?></div>
        </a>
        --><?php /*} */?>

    </div>
</div>