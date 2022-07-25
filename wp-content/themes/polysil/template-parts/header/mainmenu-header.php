<nav class="navigation-wrapper navbar-light navbar navbar-expand-lg p-0 justify-content-end mt-lg-n4">

    <div class="container-xl">
        <div class="main-navigation">
            <div id="mainNavigation" class="collapse navbar-collapse">

                <?php
                if( has_nav_menu('primary') ){

                    include ('submenu.php');
                    wp_nav_menu( array('theme_location'=>'primary', 'menu_class'=> 'navbar-nav main-nav justify-content-between w-100', 'container'=> '', 'walker' => new submenu ) );
                }
                ?>

            <!--    <ul class="navbar-nav main-nav justify-content-between w-100">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Products </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> News </a></li>
                    <li class="nav-item"><a class="nav-link" href="#">CSR Activity </a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                </ul>-->

            </div>
        </div>
    </div>
</nav>