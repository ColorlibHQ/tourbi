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
 * Tourbi elementor Tour Packages section widget.
 *
 * @since 1.0
 */
class Tourbi_Tour_Packages extends Widget_Base {

	public function get_name() {
		return 'tourbi-tour-packages';
	}

	public function get_title() {
		return __( 'Tour Packages', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Feature Section ------------------------------
        // Packages
        $this->start_controls_section(
            'packages_area',
            [
                'label' => __( 'Packages', 'tourbi' ),
            ]
        );

        $this->add_control(
            'packages', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ pack_title }}}',
                'fields' => [
                    [
                        'name'          => 'pack_img',
                        'label'         => esc_html__( 'Package Image', 'tourbi' ),
                        'type'          => Controls_Manager::MEDIA,
                        'label_block'   => true,
                    ],
                    [
                        'name'          => 'pack_title',
                        'label'         => esc_html__( 'Package Title', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Sawpalo, Brasil', 'tourbi' ),
                    ],
                    [
                        'name'          => 'pack_txt',
                        'label'         => esc_html__( 'Package Text', 'tourbi' ),
                        'type'          => Controls_Manager::TEXTAREA,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt', 'tourbi' ),
                    ],
                    [
		                'name' => 'reviewstar',
		                'label' => __('Star Review', 'tourbi'),
		                'type' => Controls_Manager::CHOOSE,
		                'options' => [
			                '1' => [
				                'title' => __('1', 'tourbi'),
				                'icon' => 'fa fa-star',
			                ],
			                '2' => [
				                'title' => __('2', 'tourbi'),
				                'icon' => 'fa fa-star',
			                ],
			                '3' => [
				                'title' => __('3', 'tourbi'),
				                'icon' => 'fa fa-star',
			                ],
			                '4' => [
				                'title' => __('4', 'tourbi'),
				                'icon' => 'fa fa-star',
			                ],
			                '5' => [
				                'title' => __('5', 'tourbi'),
				                'icon' => 'fa fa-star',
			                ],
		                ],
	                ],
                    [
                        'name'          => 'btn_label',
                        'label'         => esc_html__( 'Button Label', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'join now', 'tourbi' ),
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
                        'pack_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'pack_title'    => esc_html__( 'Sawpalo, Brasil', 'tourbi' ),
                        'pack_txt'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt', 'tourbi' ),
                        'reviewstar'    => [
                            'title' => __('1', 'tourbi'),
                            'icon' => 'fa fa-star',
                        ],
                        'btn_label'     => esc_html__( 'join now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                    [
                        'pack_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'pack_title'    => esc_html__( 'Sawpalo, Brasil', 'tourbi' ),
                        'pack_txt'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt', 'tourbi' ),
                        'reviewstar'    => [
                            'title' => __('1', 'tourbi'),
                            'icon' => 'fa fa-star',
                        ],
                        'btn_label'     => esc_html__( 'join now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                    [
                        'pack_img'      => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'pack_title'    => esc_html__( 'Sawpalo, Brasil', 'tourbi' ),
                        'pack_txt'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor incididunt', 'tourbi' ),
                        'reviewstar'    => [
                            'title' => __('1', 'tourbi'),
                            'icon' => 'fa fa-star',
                        ],
                        'btn_label'     => esc_html__( 'join now', 'tourbi' ),
                        'btn_url'       => [
                            'url'       => '#'
                        ],
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End content

        // Tour Package Contents
        $this->start_controls_section(
            'tour_head_section',
            [
                'label' => __( 'Tour Package Header', 'tourbi' ),
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
                'default'       => __( 'tour package', 'tourbi' ),
                'label_block'   => true,
            ]
        );
        $this->add_control(
            'tour_txt',
            [
                'label'         => esc_html__( 'Tour Text', 'tourbi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'default'       => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut', 'tourbi' )
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'tourbi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'join now', 'tourbi' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'         => esc_html__( 'Button URL', 'tourbi' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Package Items Style ==============================
        $this->start_controls_section(
            'pack_sect', [
                'label' => __( 'Style Packages', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'pack_ttitle', [
                'label'     => __( 'Package Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .single_tour_package .tour_pack_content h4' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'pack_sub_ttitle', [
                'label'     => __( 'Package Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .single_tour_package .tour_pack_content p' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'pack_rating_col', [
                'label'     => __( 'Package Rating Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_content_rating ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'pack_anc_col_separator',
            [
                'label'     => __( 'Anchor Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'pack_anc_col', [
                'label'     => __( 'Package Anchor Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_content_rating .btn1' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'pack_anc_hov_col', [
                'label'     => __( 'Package Anchor Text Hover Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_content_rating .btn1:hover' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();


        // Feature Items Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Right Section Style', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sec_ttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content p' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'btn_col_separator',
            [
                'label'     => __( 'Button Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'btn_hvr_col_separator',
            [
                'label'     => __( 'Button Hover Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'btn_hvr_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content .btn_1:hover' => 'color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tour_package .tour_pack_content .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );  
        
        $this->end_controls_section();

	}

	protected function render() {

    $settings           = $this->get_settings();

    // Loading widget script
    $this->load_widget_script();

    $title_img          = !empty( $settings['section_tittle_img']['id'] ) ? wp_get_attachment_image( $settings['section_tittle_img']['id'], 'tourbi_popular_place_img_150x100', false, array( 'alt' => 'feature image' ) ) : '';
    $sec_title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $tour_txt           = !empty( $settings['tour_txt'] ) ? $settings['tour_txt'] : '';
    $btn_label          = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
    $btn_url            = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    $packages           = !empty( $settings['packages'] ) ? $settings['packages'] : '';
    $dynamic_class      = is_front_page() ? 'tour_package section_padding' : 'tour_package padding_top single_pack';

    function single_pack_item( $pack_img, $title, $text, $stars, $btn_label, $btn_url ){ ?>
        <div class="single_tour_package">
            <?php
                if( $pack_img ){
                    echo wp_kses_post( $pack_img );
                }
            ?>
            <div class="tour_pack_content">
                <?php
                    echo '<h4>' .esc_html( $title ) . '</h4>';
                    echo '<p>' .esc_html( $text ) . '</p>';
                    ?>
                    <div class="tour_content_rating">
                        <?php
                        if (!empty( $stars )) {
                            echo '<ul>';
                            for ($i = 1; $i <= 5; $i++) {

                                if ($stars >= $i) {
                                    echo '<li><a href="#"><i class="fa fa-star"></i></a></li>';
                                }
                            }
                            echo '</ul>';
                            
                            echo '<a href="'.esc_url( $btn_url ).'" class="btn1">' .esc_html( $btn_label ) . '</a>';
                        }
                        ?>
                    </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- Tour packages start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="tour_package_cotent owl-carousel">
                        <?php
                        if( is_array( $packages ) && count( $packages ) > 0 ){
                            foreach ( $packages as $package ) {
                                $package_img = !empty( $package['pack_img']['id'] ) ? wp_get_attachment_image($package['pack_img']['id'], 'tourbi_tour_package_img_455x380', false, ['alt' => 'package image']) : '';
                                $title = !empty( $package['pack_title'] ) ? $package['pack_title'] : '';
                                $text = !empty( $package['pack_txt'] ) ? $package['pack_txt'] : '';
                                $stars = !empty( $package['reviewstar'] ) ? $package['reviewstar'] : '';
                                $pack_btn_label = !empty( $package['btn_label'] ) ? $package['btn_label'] : '';
                                $pack_btn_url = !empty( $package['btn_url']['url'] ) ? $package['btn_url']['url'] : '';
                                
                                single_pack_item( $package_img, $title, $text, $stars, $pack_btn_label, $pack_btn_url);    
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-3 offset-lg-1 col-sm-6">
                    <div class="tour_pack_content">
                        <?php
                            if( $title_img ){
                                echo wp_kses_post( $title_img );
                            }
                            
                            echo '<h2>' .esc_html( $sec_title ) . '</h2>';
                            echo '<p>' .esc_html( $tour_txt ) . '</p>';

                            echo '<a href="'.esc_url( $btn_url ).'" class="btn_1">' .esc_html( $btn_label ) . '</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour packages end-->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $(document).ready(function() {
                var package_cotent = $('.tour_package_cotent');
                if (package_cotent.length) {
                    package_cotent.owlCarousel({
                    items: 2,
                    loop: true,
                    dots: false,
                    autoplay: true,
                    margin: 40,
                    autoplayHoverPause: true,
                    autoplayTimeout: 5000,
                    nav: true,
                    navText: [
                        'next',
                        'prev'
                    ],
                    responsive: {
                        0: {
                        nav: false,
                        items: 1
                        },
                        575: {
                        nav: false,
                        items: 1
                        },
                        768: {
                        nav: true,
                        items: 1
                        },
                        1200: {
                        nav: true,
                        items: 2
                        },
                    }
                    });
                }
            });
        })(jQuery);
        </script>
        <?php 
        }
    } 
}
