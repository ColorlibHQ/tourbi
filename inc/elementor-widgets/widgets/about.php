<?php
namespace Tourbielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Tourbi elementor about us section widget.
 *
 * @since 1.0
 */
class Tourbi_About_Us extends Widget_Base {

	public function get_name() {
		return 'tourbi-about-us';
	}

	public function get_title() {
		return __( 'About Us', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'about_section',
            [
                'label' => __( 'About Us Section Content', 'tourbi' ),
            ]
        );
        $this->add_control(
			'about_img',
			[
				'label'         => esc_html__( 'Feature Image', 'tourbi' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        $this->add_control(
			'section_tittle_img',
			[
				'label'         => esc_html__( 'Section Title Image', 'tourbi' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        $this->add_control(
            'section_title',
            [
                'label'         => esc_html__( 'Section Title', 'tourbi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Amazing tour', 'tourbi' )
            ]
        );
        $this->add_control(
            'about_content',
            [
                'label'         => esc_html__( 'Feature Text', 'tourbi' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra maecenas accumsan lacus vel facilisis. </p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut</span>', 'tourbi' )
            ]
        );
        
        $this->end_controls_section(); // End content


        // Spot list
        $this->start_controls_section(
            'spot_list',
            [
                'label' => __( 'Spot List', 'tourbi' ),
            ]
        );

        $this->add_control(
            'spots', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ spot_name }}}',
                'fields' => [
                    [
                        'name'      => 'spot_img',
                        'label'         => esc_html__( 'Spot Image', 'tourbi' ),
                        'type'          => Controls_Manager::MEDIA,
                        'label_block'   => true,
                        'default'       => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ]
                    ],
                    [
                        'name'      => 'spot_name',
                        'label'         => esc_html__( 'Spot Name', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Kashmir', 'tourbi' )
                    ],
                    [
                        'name'      => 'places',
                        'label'         => esc_html__( 'Places', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( '75 Places', 'tourbi' )
                    ],
                ],
                'default' => [
                    [
                        'spot_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'spot_name'     => esc_html__( 'Kashmir', 'tourbi' ),
                        'places'        => esc_html__( '75 Places', 'tourbi' ),
                    ],
                    [
                        'spot_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'spot_name'     => esc_html__( 'Kashmir', 'tourbi' ),
                        'places'        => esc_html__( '75 Places', 'tourbi' ),
                    ],
                    [
                        'spot_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'spot_name'     => esc_html__( 'Kashmir', 'tourbi' ),
                        'places'        => esc_html__( '75 Places', 'tourbi' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End content


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Text Style', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text p, .feature_part .feature_part_text p span' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        
        // Sopt Style ==============================
        $this->start_controls_section(
            'spot_styles', [
                'label' => __( 'Spot Styles', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'spot_title_color', [
                'label' => __( 'Spot Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .feature_part_text_iner h4' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'spot_color', [
                'label' => __( 'Spot Place Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .feature_part_text .feature_part_text_iner p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        
        $about_img   = !empty( $settings['about_img']['id'] ) ? wp_get_attachment_image( $settings['about_img']['id'], 'tourbi_feature_img_691x639', false, array( 'alt' => 'feature image' ) ) : '';
        $section_tittle_img   = !empty( $settings['section_tittle_img']['id'] ) ? wp_get_attachment_image( $settings['section_tittle_img']['id'], 'tourbi_section_title_img_97x97', false, array( 'alt' => 'section title image' ) ) : '';
        $section_title = !empty( $settings['section_title'] ) ? $settings['section_title'] : '';
        $about_content = !empty( $settings['about_content'] ) ? $settings['about_content'] : '';
        $spots = !empty( $settings['spots'] ) ? $settings['spots'] : '';

        $shape_1   = TOURBI_DIR_ANIMATE_ICON_IMG_URI . 'shape-1.png';
        $shape_2   = TOURBI_DIR_ANIMATE_ICON_IMG_URI . 'shape-2.png';
        $shape_3   = TOURBI_DIR_ANIMATE_ICON_IMG_URI . 'shape-3.png';
    ?>

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <?php
                            if( $about_img ){
                                echo wp_kses_post( $about_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <?php
                            if( $section_tittle_img ){
                                echo wp_kses_post( $section_tittle_img );
                            }

                            echo '<h2>'.esc_html($section_title).'</h2>';
                            
                            //Content ==============
                            if( $about_content ){
                                echo wp_kses_post( wpautop( $about_content ) );
                            }
                        ?>
                        <div class="row">
                            <?php
                                if( is_array( $spots ) && count( $spots ) > 0 ){
                                    foreach ( $spots as $spot ) {
                                        $spot_img = !empty( $spot['spot_img']['id'] ) ? wp_get_attachment_image( $spot['spot_img']['id'], 'tourbi_tour_icon_img_45x42', '', array('alt' => 'spot image' ) ) : '';
                                        $spot_name = !empty( $spot['spot_name'] ) ? $spot['spot_name'] : '';  
                                        $places = !empty( $spot['places'] ) ? $spot['places'] : '';  
                                        ?>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="feature_part_text_iner">
                                                <?php
                                                    if( $spot_img ){
                                                        echo wp_kses_post( $spot_img );
                                                    }

                                                    echo '<h4>'.esc_html($spot_name).'</h4>';

                                                    echo '<p>'.esc_html($places).'</p>';
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?php echo esc_url( $shape_1 )?>" alt="feature icon 1" class="feature_icon_1">
        <img src="<?php echo esc_url( $shape_2 )?>" alt="feature icon 2" class="feature_icon_2">
        <img src="<?php echo esc_url( $shape_3 )?>" alt="feature icon 3" class="feature_icon_3">
    </section>
    <!-- upcoming_event part start-->
    <?php

    }
	
}
