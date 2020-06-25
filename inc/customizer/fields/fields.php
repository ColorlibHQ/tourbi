<?php 
/**
 * @Packge     : Tourbi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

// Header booking button field
Epsilon_Customizer::add_field(
    'tourbi_header_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Header button show/hide', 'tourbi' ),
        'section'     => 'tourbi_header_section',
        'default'     => true
    )
);

// Booking button label
Epsilon_Customizer::add_field(
    'header_btn_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button label', 'tourbi' ),
        'section'           => 'tourbi_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__('Hot Line 052', 'tourbi')
    )
);

// Booking button url
Epsilon_Customizer::add_field(
    'booking_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button url', 'tourbi' ),
        'section'           => 'tourbi_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__('tel:052', 'tourbi'),
    )
);

// Header button background color
Epsilon_Customizer::add_field(
    'tourbi_header_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button BG Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffcc00'
    )
);

// Header button text color
Epsilon_Customizer::add_field(
    'tourbi_header_btn_txt_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Text Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#000000'
    )
);

// Header button hover background color
Epsilon_Customizer::add_field(
    'tourbi_header_btn_hvr_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover BG Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => 'transparent'
    )
);

// Header button hover text color
Epsilon_Customizer::add_field(
    'tourbi_header_btn_hvr_txt_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover Text Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffcc00'
    )
);

// Header style section
Epsilon_Customizer::add_field(
    'header_style_sec_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Style Section', 'tourbi' ),
        'section'     => 'tourbi_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'tourbi_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'tourbi' ),
        'description' => esc_html__( 'Select the header background color.', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#00c0ff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'tourbi_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'tourbi_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffcc00',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'tourbi_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu bg color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffcc00',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'tourbi_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'tourbi_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_header_section',
        'default'     => '#ffffff',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'tourbi_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'tourbi' ),
        'description' => esc_html__( 'Set post excerpt length.', 'tourbi' ),
        'section'     => 'tourbi_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'tourbi_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'tourbi' ),
        'section'     => 'tourbi_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'tourbi_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'tourbi' ),
        'section'     => 'tourbi_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'tourbi_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'tourbi' ),
        'section'     => 'tourbi_blog_section',
        'default'     => true
    )
);


/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'tourbi_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'tourbi' ),
        'section'           => 'tourbi_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'tourbi_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'tourbi' ),
        'section'           => 'tourbi_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'tourbi_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'tourbi_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_fof_section',
        'default'     => '#656565',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'tourbi' ),
        'section'     => 'tourbi_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'tourbi_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'tourbi' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'tourbi' ),
        'section'     => 'tourbi_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'tourbi_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'tourbi' ),
        'section'     => 'tourbi_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'tourbi' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'tourbi_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'tourbi' ),
        'section'     => 'tourbi_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Social Profile section
Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'tourbi' ),
        'section'     => 'tourbi_footer_section',
        'default'     => true,

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'tourbi_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'tourbi' ),
        'section'     => 'tourbi_footer_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'tourbi_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'tourbi_footer_section',
		'label'        => esc_html__( 'Social Profile Links', 'tourbi' ),
        'button_label' => esc_html__( 'Add new social link', 'tourbi' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
        ),
        'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'tourbi' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'tourbi' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'tourbi' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Behance', 'tourbi' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-behance',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'tourbi' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'tourbi' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'tourbi' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'tourbi_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_footer_section',
        'default'     => '#7a7a7a',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'tourbi_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_footer_section',
        'default'     => '#14182d',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'tourbi_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_footer_section',
        'default'     => '#7a7a7a',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'tourbi_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'tourbi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'tourbi_footer_section',
        'default'     => '#ffcc00',
    )
);

