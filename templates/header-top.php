<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <?php echo musico_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new musico_bootstrap_navwalker()
                                            ));
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <?php
                                // Social profiles
                                $social_opt = musico_opt('musico_social_profile_toggle');
                                if ( $social_opt == true ) {
                                    $social_items = musico_opt('musico_social_profiles');
                                    if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                        echo '<div class="social_icon text-right"><ul>';
                                            foreach ($social_items as $value) {
                                                echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
                                            }
                                        echo '</ul></div>';
                                    }          
                                } 
                            ?>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->