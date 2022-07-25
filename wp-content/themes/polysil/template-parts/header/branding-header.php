    <div class="header-top">
        <div class="container-xl">
<div class="row row-small align-items-center pt-md-3">

      <div class="co1-12 col-lg-3 d-flex justify-content-between position-static">
            <a class="navbar-brand py-3 px-0 wow flipInX" href="<?php echo site_url();?>">
                <img src="<?php echo ot_get_option('site_logo'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" class="img-fluid">
            </a>
          
          <a class="btn btn-primary btn-sm m-auto contact-btn d-inline-block d-lg-none" data-toggle="collapse" href="#quickContacts">Quick Contacts</a>
          
            <button class="navbar-toggler d-lg-none border-0 my-3" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>


        <div class="col-lg-9 py-3 d-none d-lg-flex flex-column flex-md-row justify-content-between justify-content-lg-end header-contacts">

            <?php $contact_number = ot_get_option('contact2');
            if(!empty($contact_number)){ ?>
            <div class="media contact-media ml-md-3 mb-3 mb-md-0 wow fadeInUp">
                <div class="media-left">
                    <span class="icon-circle d-flex justify-content-center align-items-center text-dark bg-white"><i class="la la-phone"></i></span>
                </div>
                <div class="media-body">
                    <span class="text-white">Call Us</span>
                    <span class="d-block text-white">Toll Free <span class="text-white text-uppercase"><a href="tel:<?= $contact_number ?>" class="text-white"><?= $contact_number ?></a></span></span>
                </div>
            </div>
            <?php } ?>

            <?php $email = ot_get_option('email');
            if(!empty($email)){ ?>
            <div class="media contact-media ml-md-3 mb-3 mb-md-0 wow fadeInUp">
                <div class="media-left">
                    <span class="icon-circle d-flex justify-content-center align-items-center text-dark bg-white"><i class="la la-envelope"></i></span>
                </div>
                <div class="media-body">
                    <span class="text-white">Email Us</span>
                    <a href="mailto:<?= $email ?>" class="d-block text-white"><?= $email ?></a>
                </div>
            </div>
            <?php } ?>

        </div>
    
    <div id="quickContacts" class="d-lg-none flex-column header-contacts px-4 collapse">
        
            <?php $contact_number = ot_get_option('contact2');
            if(!empty($contact_number)){ ?>
            <div class="media contact-media ml-md-3 mb-3 mb-lg-0 wow fadeInUp">
                <div class="media-left">
                    <span class="icon-circle d-flex justify-content-center align-items-center text-dark bg-secondary"><i class="la la-phone"></i></span>
                </div>
                <div class="media-body">
                    <span class="text-dark d-block">Call Us</span>
                    <span class="text-dark text-uppercase small">Toll Free</span>
                    <a href="tel:<?= $contact_number ?>" class="text-primary"><?= $contact_number ?></a>
                </div>
            </div>
            <?php } ?>

            <?php $email = ot_get_option('email');
            if(!empty($email)){ ?>
            <div class="media contact-media ml-md-3 mb-3 mb-lg-0 wow fadeInUp">
                <div class="media-left">
                    <span class="icon-circle d-flex justify-content-center align-items-center text-dark bg-secondary"><i class="la la-envelope"></i></span>
                </div>
                <div class="media-body">
                    <span class="text-dark d-block">Email Us</span>
                    <a href="mailto:<?= $email ?>" class="text-primary"><?= $email ?></a>
                </div>
            </div>
            <?php } ?>
        
    </div>


    </div>
        </div>
</div>