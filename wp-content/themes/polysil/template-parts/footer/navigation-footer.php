<div class="col-md-6 col-lg-4">
    <div class="footer-widget wow fadeInDown">
        <h5 class="footer-widget-title text-white">Useful Links</h5>
        <?php
        if( has_nav_menu('footer_menu1') ){

            //include ('submenu.php');
            wp_nav_menu( array('theme_location'=>'footer_menu1', 'menu_class'=> 'footer-widget-links list-inline', 'container'=> '' ) );
        }
        ?>

     <!--   <ul class="footer-widget-links list-inline">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services </a></li>
            <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="#">News</a></li>
            <li class="nav-item"><a class="nav-link" href="#">CSR Activity</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog </a></li>
            <li class="nav-item"><a class="nav-link" href="#">Gallery </a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us </a></li>
        </ul>-->
    </div>
</div>