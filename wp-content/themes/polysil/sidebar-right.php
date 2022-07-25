<?php dynamic_sidebar( 'right' ); ?>

<?php
// WP_Query arguments
$args = array(
    'post_type'  => 'products' ,
    'order'   => 'DESC',
    'orderby'        => 'rand',

);
// The Query
$products = new WP_Query( $args );
?>



    <div class="col-md-4">
        <div class="card border-0 shadow">

            <div class="card-headeer border-0 bg-success p-3">
                <h5 class="mb-0 text-white">Other Products</h5>
            </div>

            <div class="card-body">

                <?php
                if ( $products->have_posts() ) {
                while ( $products->have_posts() ) {
                $products->the_post();
                ?>

                <div class="product-list-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="product_thumb">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'large' ,array( 'class' => 'img-fluid img-thumbnail' )); ?>
                              <!--  <img src="https://webmobitech.in/polysil_irrigation/wp-content/uploads/2021/07/pvc.jpg" alt="product" class="img-fluid img-thumbnail">-->
                            </div>
                        </div>
                        <div class="col-8">
                            <h6><a href="<?php echo get_the_permalink(get_the_ID()); ?>" ><?php the_title(); ?></a></h6>
                        </div>
                    </div>
                </div>

                <?php }} ?>

             <!--   <div class="product-list-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="product_thumb">
                                <img src="https://webmobitech.in/polysil_irrigation/wp-content/uploads/2021/07/pvc.jpg" alt="product" class="img-fluid img-thumbnail">
                            </div>
                        </div>
                        <div class="col-8">
                            <h6>Product name</h6>
                        </div>
                    </div>
                </div>

                <div class="product-list-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="product_thumb">
                                <img src="https://webmobitech.in/polysil_irrigation/wp-content/uploads/2021/07/pvc.jpg" alt="product" class="img-fluid img-thumbnail">
                            </div>
                        </div>
                        <div class="col-8">
                            <h6>Product name</h6>
                        </div>
                    </div>
                </div>

                <div class="product-list-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="product_thumb">
                                <img src="https://webmobitech.in/polysil_irrigation/wp-content/uploads/2021/07/pvc.jpg" alt="product" class="img-fluid img-thumbnail">
                            </div>
                        </div>
                        <div class="col-8">
                            <h6>Product name</h6>
                        </div>
                    </div>
                </div>-->


            </div>
        </div>
    </div>



