<?php
/**

 * Template Name: Contact Page

 */
get_header(); ?>

<?php
$contact1 = ot_get_option('contact_number');
$contact2 = ot_get_option('contact2');
$email = ot_get_option('email');

$address = ot_get_option('address');

?>
    <section class="inner-page-wrapper pb-md-5">
        <div class="pageheaing-wrapper py-2 py-md-5">

            <div class="pageheading-image">
                <?php $banner = get_cfc_field('tagline', 'banner');
                if(!empty($banner)){ ?>
                    <img class="pagehead_img" src="<?php the_cfc_field('tagline', 'banner'); ?>" alt="pageheader">
                <?php } ?>
            </div>

            <div class="container">
                <div class="page-heading">
                    <h2 class="text-primary m-0">
                        <?php wp_title(''); ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="auto-container pt-4">
            <div class="container">
                <div class="entry-content service-content">
                     <div class="quick_contacts">
                          <h4> Quick Contacts</h4>
                            <hr>
                    <div class="row py-5">
                      
                           
                                <div class="col-lg-4 mb-3"> <?php if(!empty($address)){ ?>
                                    <div class="card border-0 shadow mb-1 h-100">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-left mr-md-5 text-dark">
                                                  <div class="icon-block">  <i class="la la-map-marker-alt la-3x"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body pl-4">
                                                     <h6 class="text-uppercase font-weight-bold">Address</h6>
                                                     <h5 class="font-weight-light mb-0"><?php echo $address; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
</div>
                               <div class="col-lg-4 mb-3">  <?php
                                if(!empty($contact1)){ ?>
                                    <div class="card border-0 shadow mb-1 h-100">
                                        <div class="card-body">
                                            <div class="supports-contact-email">
                                                <div class="media contact-media">
                                                     <div class="media-left mr-md-5 text-dark">
                                                        <div class="icon-block"><i class="la la-phone-alt la-3x"></i></div>
                                                        
                                                    </div>
                                                    <div class="media-body pl-4">
                                                         <h6 class="text-uppercase font-weight-bold">Call us</h6>
                                                        <h5 class="font-weight-light">
                                                            <? php /*
                                                            <a href="tel:<?= $contact1 ?>" class="text-dark"><?= $contact1 ?></a> */?>
                                                            <span class="text-dark"><a href="tel:<?= $contact2 ?>" class="text-dark"><?= $contact1 ?></a></span>
                                                        
                                                        </h5>
                                                        <h5 class="font-weight-light"><a href="tel:<?= $contact2 ?>" class="text-dark"><?= $contact2 ?></a>
                                                            <small class="text-primary font-italic small">Toll Free</small> </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
</div>
                                <div class="col-lg-4 mb-3"> <?php
                                if(!empty($email)){ ?>
                                    <div class="card border-0 shadow h-100">
                                        <div class="card-body">
                                            <div class="supports-contact-phone">
                                                <div class="media contact-media">
                                                     <div class="media-left mr-md-5 text-dark">
                                                        <div class="icon-block"><i class="la la-envelope la-3x"></i></div>
                                                        </div>
                                                    <div class="media-body pl-4">
                                                        <h6 class="text-uppercase font-weight-bold">Email us</h6>
                                                        <h5 class="font-weight-light">
                                                            <a href="mailto:<?= $email ?>" class="text-dark"><?= $email ?></a>
                                                        </h5> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>

                              </div>

                            </div>
                    </div>

                    <div class="row mb-3 mb-md-5">
                        <div class="col-lg-6">
                             
                              <div class="card map-card border-0 shadow h-100 mb-3">
                                <div class="card-body">
                                    <h4>Locate us</h4>
                              <hr>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117972.5718043329!2d73.124189!3d22.480051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf78964a29fc82c5a!2sPolysil%20Irrigation%20System%20Private%20Limited.!5e0!3m2!1sen!2sin!4v1627019556415!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                  </div>
                        </div>
                        <div class="col-lg-6"> 
                             
                            <div class="card contact-form-card border-0 shadow h-100 mb-3">
                                
                                <div class="card-body">
                                    <h4>We would like to hear from you</h4>
                            <hr>
                               
                           
                            <div class="contact_form pt-3">
                                <?php echo do_shortcode('[contact-form-7 id="91" title="Contact form 1"]')?>
                            </div>
                            
                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer(); ?>