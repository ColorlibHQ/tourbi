<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php 
            echo tourbi_site_icon();
            wp_head(); 
        ?>
    </head>
    <body <?php body_class(); ?>>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            echo tourbi_theme_logo( 'navbar-brand' );
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            if(has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'menu'           => 'primary-menu',
                                    'theme_location' => 'primary-menu',
                                    'menu_id'        => 'menu-main-menu',
                                    'container_class'=> 'collapse navbar-collapse main-menu-item',
                                    'container_id'   => 'navbarSupportedContent',
                                    'menu_class'     => 'navbar-nav',
                                    'walker'         => new tourbi_bootstrap_navwalker,
                                    'depth'          => 3
                                ));
                            }

                            if( tourbi_opt( 'tourbi_header_btn' ) == 1 ){
                                $btn_lbl = !empty( tourbi_opt( 'header_btn_label' ) ) ? tourbi_opt( 'header_btn_label' ) : '';
                                $btn_url = !empty( tourbi_opt( 'booking_btn_url' ) ) ? tourbi_opt( 'booking_btn_url' ) : '';
                                ?>
                                <a class="btn_1 d-none d-lg-block" href="<?php echo esc_url($btn_url)?>"><?php echo esc_html($btn_lbl)?></a>
                                <?php 
                            }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'tourbi_page_titlebar' ) ){
	    tourbi_page_titlebar();
    }

