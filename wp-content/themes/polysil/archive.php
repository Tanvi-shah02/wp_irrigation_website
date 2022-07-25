<?php //echo "abcd"; die; ?>
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main">-->

            <div class="pageheaing-wrapper py-2 py-md-5">

                <?php $banner = wpsfi_display_image( get_queried_object_id(), $class = "pagehead_img"); ?>
                <div class="pageheading-image <?php echo empty($banner) ? 'no-image' : ''; ?>">

                   <!--     <img class="pagehead_img" src="<?php /*echo $upload_dir['baseurl'].'/2021/07/productbanner.jpg';  */?>" alt="pageheader"> -->
                    <?php echo $banner; ?>

                </div>

                <div class="container-xl">
                    <div class="page-heading">
                        <h2 class="text-dark m-0">
                            <?php wp_title(''); ?>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="news-inner-wrap products-listing pt-4">
                <div class="container-xl">
                    <div class="row">

		<?php if ( have_posts() ) : ?>

		<!--	<header class="page-header">
				<?php
              /* the_archive_title( '<h1 class="page-title">', '</h1>' );
				*/?>
			</header>--><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">

                    <?php
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'content', 'excerpt' );
				?>
				</div>

            <?php
				// End the loop.
			endwhile; ?>


		<?php else :
			get_template_part( 'content', 'none' );

		endif;
		?>
                        </div>
                    <?php
                    $links = paginate_links( array(
                        'prev_next'          => false,
                        'type'               => 'array'
                    ) );

                    if ( $links ) : ?>
                        <nav aria-label="Page navigation example">

                            <?php echo '<ul class="page-numbers pagination justify-content-center">';

                            // get_previous_posts_link will return a string or void if no link is set.
                            if ( $prev_posts_link = get_previous_posts_link( __( 'Previous Page' ) ) ) :

                                echo '<li class="prev-list-item page-item">';
                                echo $prev_posts_link;
                                echo '</li>';
                            endif;

                            echo '<li class="page-item">';
                            echo join( '</li><li class="page-item">', $links );
                            echo '</li>';

                            // get_next_posts_link will return a string or void if no link is set.
                            if ( $next_posts_link = get_next_posts_link( __( 'Next Page' ) ) ) :

                                echo '<li class="next-list-item page-item">';
                                echo $next_posts_link;
                                echo '</li>';
                            endif;
                            echo '</ul>';?>
                        </nav>
                    <?php endif;
                    /*the_posts_pagination(
                        array(
                            'prev_text'          => __( 'Back', 'textdomain' ),
                            'next_text'          => __( 'Onward', 'textdomain' ),
                            'mid_size'           => 5,
                            'screen_reader_text' => ' ',
                            'type' => 'list',
                        )
                    );*/
                    ?>
                </div>
            </div>

	<!--	</main><!-- #main -->
	<!--</div>--><!-- #primary -->




    <script>
        jQuery(document).ready(function () {
            jQuery( "li .page-numbers" ).addClass( "page-link" );
            jQuery( ".next-list-item a" ).addClass( "page-link" );
            jQuery( ".prev-list-item a" ).addClass( "page-link" );
        });
    </script>

<?php
get_footer();
