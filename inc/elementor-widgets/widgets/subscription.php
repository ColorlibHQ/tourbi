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
 * Tourbi elementor subscription section widget.
 *
 * @since 1.0
 */
class Tourbi_Subscription extends Widget_Base {

	public function get_name() {
		return 'tourbi-subscription';
	}

	public function get_title() {
		return __( 'Subscription', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'subscription_section',
            [
                'label' => __( 'Subscription Section Content', 'tourbi' ),
            ]
        );
        $this->add_control(
			'sec_title',
			[
                'label'     => __( 'Subscription Heading', 'tourbi' ),
                'type'      => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => __( 'Join Our Newsletter', 'tourbi' )
			]
        );
        $this->add_control(
			'sub_head',
			[
                'label'     => __( 'Sub Heading', 'tourbi' ),
                'type'      => Controls_Manager::TEXTAREA,
                'default'   => __( 'Subscribe to get Updated with new offers', 'tourbi' )
			]
        );

        $this->add_control(
			'sub_form',
			[
                'label'         => __( 'Subscription Form Shortcode', 'tourbi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'placeholder'   => '[contact-form-7 id="78" title="Subscription Form"]'
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
                'label' => __( 'Subscription Style', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .cta_text h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'color_sub_title', [
                'label'     => __( 'Sub Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .cta_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'form_styles_separator',
            [
                'label'     => __( 'Form Styles', 'tourbi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'input_color', [
                'label'     => __( 'Input Field Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .input-group .form-control' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'input_bg_color', [
                'label'     => __( 'Input Field BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .input-group .form-control' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_color', [
                'label'     => __( 'Button Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .input-group .subs_btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .input-group .subs_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'tourbi' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .cta_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $sec_head = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $sub_head = !empty( $settings['sub_head'] ) ? $settings['sub_head'] : '';
        $form_shortcode = !empty( $settings['sub_form'] ) ? $settings['sub_form'] : '';
        $dynamic_class = is_front_page() ? 'subscribe_part padding_bottom' : 'subscribe_part section_padding';
    ?>

    <!-- cta part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="cta_text text-center">
                        <h5><?php echo esc_html( $sec_head )?></h5>
                        <h2><?php echo esc_html( $sub_head )?></h2>
                        <?php
                            //Form Shortcode ==============
                            if( $form_shortcode ){
                                echo do_shortcode( $form_shortcode );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->
    <?php

    }
	
}
