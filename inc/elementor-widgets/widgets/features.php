<?php
namespace Tourbielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Tourbi elementor Feature section widget.
 *
 * @since 1.0
 */
class Tourbi_Features extends Widget_Base {

	public function get_name() {
		return 'tourbi-features';
	}

	public function get_title() {
		return __( 'Features', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Feature Section ------------------------------
        $this->start_controls_section(
            'features_head_section',
            [
                'label' => __( 'Feature Header Contents', 'tourbi' ),
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
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'tourbi' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => __( 'Most Popular Place', 'tourbi' ),
                'label_block'   => true,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Sub Title', 'tourbi' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed  do eiusmod tempor incididunt ut</p>', 'tourbi' )
            ]
        );

        $this->end_controls_section(); // End section top content
        

        // Features
        $this->start_controls_section(
            'features_area',
            [
                'label' => __( 'Features', 'tourbi' ),
            ]
        );

        $this->add_control(
            'features', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ fet_title }}}',
                'fields' => [
                    [
                        'name'          => 'fet_img',
                        'label'         => esc_html__( 'Feature Image', 'tourbi' ),
                        'type'          => Controls_Manager::MEDIA,
                        'label_block'   => true,
                    ],
                    [
                        'name'          => 'fet_title',
                        'label'         => esc_html__( 'Feature Title', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Life of Egypt', 'tourbi' ),
                    ],
                    [
                        'name'          => 'fet_txt',
                        'label'         => esc_html__( 'Feature Text', 'tourbi' ),
                        'type'          => Controls_Manager::TEXTAREA,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'tourbi' ),
                    ],
                    [
                        'name'          => 'btn_label',
                        'label'         => esc_html__( 'Button Label', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'book now', 'tourbi' ),
                    ],
                    [
                        'name'          => 'btn_url',
                        'label'         => esc_html__( 'Button URL', 'tourbi' ),
                        'type'          => Controls_Manager::URL,
                        'label_block'   => true,
                        'default'       => [
                            'url'       => '#'
                        ]
                    ],
                ],
                'default' => [
                    [
                        'fet_img'       => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'fet_title'     => esc_html__( 'Life of Egypt', 'tourbi' ),
                        'fet_txt'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'tourbi' ),
                        'btn_label'     => esc_html__( 'book now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                    [
                        'fet_img'       => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'fet_title'     => esc_html__( 'Life of Egypt', 'tourbi' ),
                        'fet_txt'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'tourbi' ),
                        'btn_label'     => esc_html__( 'book now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                    [
                        'fet_img'       => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'fet_title'     => esc_html__( 'Life of Egypt', 'tourbi' ),
                        'fet_txt'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'tourbi' ),
                        'btn_label'     => esc_html__( 'book now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Heading Items', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sec_ttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Sub Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();


        // Feature Items Style ==============================
        $this->start_controls_section(
            'features_sect', [
                'label' => __( 'Features Item Styles', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'fet_ttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .single_popular_place h4' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'fet_sub_ttitle', [
                'label'     => __( 'Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .single_popular_place p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'fet_anc_txt', [
                'label'     => __( 'Anchor Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .single_popular_place .btn1' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'fet_anc_txt_hvr', [
                'label'     => __( 'Anchor Text Hover Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popular_place .single_popular_place .btn1:hover' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();

	}

	protected function render() {

    $settings           = $this->get_settings();
    $title_img          = !empty( $settings['section_tittle_img']['id'] ) ? wp_get_attachment_image( $settings['section_tittle_img']['id'], 'tourbi_popular_place_img_150x100', false, array( 'alt' => 'feature image' ) ) : '';
    $sec_title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title          = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $features           = !empty( $settings['features'] ) ? $settings['features'] : '';

    function single_fet_item( $feature_img, $title, $text, $btn_label, $btn_url ){ ?>
        <div class="col-lg-4 col-sm-6">
            <div class="single_popular_place">
                <?php
                    if( $feature_img ){
                        echo wp_kses_post( $feature_img );
                    }

                    echo '<h4>' .esc_html( $title ) . '</h4>';
                    echo '<p>' .esc_html( $text ) . '</p>';

                    echo '<a href="'.esc_url( $btn_url ).'" class="btn1">' .esc_html( $btn_label ) . '</a>';
                ?>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <?php
                            if( $title_img ){
                                echo wp_kses_post( $title_img );
                            }
                            
                            echo '<h2>' .esc_html( $sec_title ) . '</h2>';

                            if( $sub_title ){
                                echo wp_kses_post( wpautop($sub_title) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                if( is_array( $features ) && count( $features ) > 0 ){
                    foreach ( $features as $feature ) {
                        $feature_img = !empty( $feature['fet_img']['id'] ) ? wp_get_attachment_image($feature['fet_img']['id'], 'tourbi_feature_img_icon_97x83', false, ['alt' => 'feature icon']) : '';
                        $title = !empty( $feature['fet_title'] ) ? $feature['fet_title'] : '';
                        $text = !empty( $feature['fet_txt'] ) ? $feature['fet_txt'] : '';
                        $btn_label = !empty( $feature['btn_label'] ) ? $feature['btn_label'] : '';
                        $btn_url = !empty( $feature['btn_url']['url'] ) ? $feature['btn_url']['url'] : '';
                        
                        single_fet_item( $feature_img, $title, $text, $btn_label, $btn_url);    
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->
    <?php
    }
}
