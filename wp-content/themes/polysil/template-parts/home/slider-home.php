<?php $slides = ot_get_option( 'banner', array() ); ?>
<?php if(!empty($slides)){?>

    <div class="banner-wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i = 0;
                foreach ($slides as $slide) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ?"active":"" ?>"></li>
                    <?php $i++;} ?>
            </ol>

            <div class="carousel-inner">
                <?php $i = 0;
                foreach ($slides as $slide) { ?>

                    <div class="carousel-item <?php echo $i == 0 ?"active":"" ?>">
                        <div class="banner-caption">
                            <div class="container-fluid px-md-0">
                                <div class="row no-gutters align-items-center">

                                    <div class="col-md-4 pl-md-5 offset-md-1">
                                        <div class="banner-text py-md-3 d-md-block pl-md-4">

                                            <h2 class="banner-title text-dark mb-5"><?php echo $slide['title']; ?></h2>
                                            <a href="<?php echo get_term_link(4); ?>" class="btn btn-success"><span>Products</span> </a>
                                            <a href="<?php echo get_permalink(501); ?>" class="btn btn-secondary"><span>Inquiry  Now</span></a>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="slider-image">
                                            <img class="d-block w-100" src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;} ?>

                <!-- <div class="carousel-item">
                    <div class="banner-caption">
                        <div class="container-fluid px-0">
                            <div class="row no-gutters align-items-center">

                                <div class="col-md-4 pl-md-5 offset-md-1">
                                    <div class="banner-text py-md-3 d-md-block pl-md-4">

                                        <h2 class="banner-title text-dark mb-5">To Be<br>
                                            The Sa₹thi of<br>
                                            Farmer’ Success.</h2>
                                        <a href="#" class="btn btn-success"><span>Products</span> </a>
                                        <a href="#" class="btn btn-secondary"><span>Inquiry  Now</span></a>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="slider-image">
                                        <img class="d-block w-100" src="images/assets/slider-02.png" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="las la-arrow-left la-3x text-dark"></i> </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="las la-arrow-right la-3x text-dark"></i> </a> </div>
    </div>
<?php } ?>