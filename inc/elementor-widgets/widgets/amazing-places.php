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
 * Tourbi elementor Amazing Places section widget.
 *
 * @since 1.0
 */
class Tourbi_Amazing_Places extends Widget_Base {

	public function get_name() {
		return 'tourbi-amazing-places';
	}

	public function get_title() {
		return __( 'Amazing Places', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-google-maps';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Amazing Places Section ------------------------------
        $this->start_controls_section(
            'places_head_section',
            [
                'label' => __( 'Amazing Places Header', 'tourbi' ),
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
                'default'       => __( 'Amazing tour', 'tourbi' ),
                'label_block'   => true,
            ]
        );
        $this->add_control(
            'sec_txt',
            [
                'label'         => esc_html__( 'Section Text', 'tourbi' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra maecenas accumsan lacus vel facilisis. </p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut</span>', 'tourbi' )
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'tourbi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'view all', 'tourbi' ),
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

        // Images section
        $this->start_controls_section(
            'images_section',
            [
                'label' => __( 'Images Section', 'tourbi' ),
            ]
        );
        $this->add_control(
			'img_1',
			[
				'label'         => esc_html__( 'Image 1', 'tourbi' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        $this->add_control(
			'img_2',
			[
				'label'         => esc_html__( 'Image 2', 'tourbi' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        $this->end_controls_section(); // End section top content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Secton Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Section Items', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sec_ttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .place_details_content h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .place_details_content p, .place_details .place_details_content p span' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'btn_styles_separator',
            [
                'label'     => __( 'Button Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'btn_txt_col', [
                'label'     => __( 'Button Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .view_all_btn .view_btn' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'btn_bg_col', [
                'label'     => __( 'Button BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .view_all_btn .view_btn' => 'background: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'btn_hvr_styles_separator',
            [
                'label'     => __( 'Button Hover Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'btn_txt_hov_col', [
                'label'     => __( 'Button Hover Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .view_all_btn .view_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'btn_bg_hov_col', [
                'label'     => __( 'Button Hover BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_details .view_all_btn .view_btn:hover' => 'background: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();

	}

	protected function render() {

    $settings           = $this->get_settings();
    $title_img          = !empty( $settings['section_tittle_img']['id'] ) ? wp_get_attachment_image( $settings['section_tittle_img']['id'], 'tourbi_popular_place_img_150x100', false, array( 'alt' => 'feature image' ) ) : '';
    $sec_title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sec_txt            = !empty( $settings['sec_txt'] ) ? $settings['sec_txt'] : '';
    $places             = !empty( $settings['places'] ) ? $settings['places'] : '';
    $btn_label          = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
    $btn_url            = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    $img_1              = !empty( $settings['img_1']['id'] ) ? wp_get_attachment_image( $settings['img_1']['id'], 'tourbi_place_details_img_933x466', false, array( 'alt' => 'feature image' ) ) : '';
    $img_2              = !empty( $settings['img_2']['id'] ) ? wp_get_attachment_image( $settings['img_2']['id'], 'tourbi_place_details_img_930x906', false, array( 'alt' => 'feature image' ) ) : '';
    $dynamic_class      = is_front_page() ? 'place_details section_padding' : 'place_details section_padding margin_bottom';

    
    ?>

    <!-- about_us part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="place_detauls_text">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="place_details_content">
                                    <?php
                                        if( $title_img ){
                                            echo wp_kses_post( $title_img );
                                        }
                                        
                                        echo '<h2>' .esc_html( $sec_title ) . '</h2>';

                                        if( $sec_txt ){
                                            echo wp_kses_post( wpautop($sec_txt) );
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            if( $img_1 ){
                                echo wp_kses_post( $img_1 );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place_details_img">
                        <?php
                            if( $img_2 ){
                                echo wp_kses_post( $img_2 );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="view_all_btn">
            <a href="<?php echo esc_url( $btn_url )?>" class="view_btn"><?php echo esc_html( $btn_label )?></a>
        </div>
    </section>
    <!-- about_us part end-->
    <?php
    }
}
