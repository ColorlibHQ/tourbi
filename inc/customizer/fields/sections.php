<?php 
/**
 * @Packge     : Tourbi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'tourbi_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'tourbi' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    
    /**
     * Header Section
     */
    array(
        'id'   => 'tourbi_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'tourbi' ),
            'panel'    => 'tourbi_theme_options_panel',
            'priority' => 2,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'tourbi_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'tourbi' ),
            'panel'    => 'tourbi_theme_options_panel',
            'priority' => 3,
        ),
    ),



    /**
     * 404 Page Section
     */
    array(
        'id'   => 'tourbi_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'tourbi' ),
            'panel'    => 'tourbi_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'tourbi_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'tourbi' ),
            'panel'    => 'tourbi_theme_options_panel',
            'priority' => 7,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>