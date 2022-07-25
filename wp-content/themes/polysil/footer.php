<footer class="footer pt-4 pt-md-5">
    <div class="container-xl">
    <div class="row mt-4 justify-content-between">

            <?php get_template_part( 'template-parts/footer/about', 'footer' ); ?>
            <?php get_template_part( 'template-parts/footer/navigation', 'footer' ); ?>
            <?php get_template_part( 'template-parts/footer/contact', 'footer' ); ?>
        </div>
        <?php get_template_part( 'template-parts/footer/bottom', 'footer' ); ?>
        
    </div>
</footer>

<?php $socialLinks = ot_get_option('social_links'); ?>
<?php if(!empty($socialLinks)){ ?>
    <div class="social-links d-flex flex-column wow fadeInRight">

        <?php foreach($socialLinks as $socialLink){ ?>
            <?php if(!empty($socialLink['href']) && !empty($socialLink['title'])){ ?>
                <a class="btn-social btn-<?php echo $socialLink['name']; ?> mt-2" href="<?php echo $socialLink['href']; ?>" title="<?php echo $socialLink['name']; ?>" target="_blank">
                    <?php echo $socialLink['title']; ?>
                </a>

                <!-- <a class="btn-social btn-twitter mt-2" href="#"> <i class="la la-twitter"></i></a>
                    <a class="btn-social btn-youtube mt-2" href="#"><i class="la la-youtube"></i></a>
                    <a class="btn-social btn-linkedin mt-2" href="#"><i class="la la-linkedin"></i></a>-->
            <?php }} ?>

    </div>
<?php } ?>

<?php wp_footer(); ?>

<script>
    new WOW().init();

    /*jQuery(document).ready(function () {


    });*/
</script>
<script>
    jQuery(function ($) {
        $('li.menu-item.dropdown > a').after('<span class="dropdown-menu-toggle d-flex" data-toggle="dropdown" data-target="dropdown-menu"><i class="la la-angle-down"></i></span>');

        $('.dropdown-menu-toggle').on('click', function(e) { 
            (!$(this).toggleClass('show-toggle'));
        })

        $('.dropdown-menu .has-sub .dropdown-menu-toggle').on('click', function(e) {
            // $('.dropdown-menu-toggle').toggleClass('show-toggle');
            if (!$(this).next().hasClass('show')) {

                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            //var $subMenu = $(this).parent('li.has-sub').find(".dropdown-menu");
            var $subMenu = $(this).next(".dropdown-menu");
            /*if($subMenu.hasClass('show')){
                $subMenu.removeClass('show');
            } else {
                $subMenu.addClass('show');
            }*/
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
                $('.dropdown-menu .has-sub .dropdown-menu').removeClass("show");
            });
            return false;
        });
        $('.dropdown-menu li a').removeAttr('data-target');
        $('.dropdown-menu li a').removeAttr('data-toggle');
    });
</script>
</body>
</html>
