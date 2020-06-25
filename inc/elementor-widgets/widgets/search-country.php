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
 * Tourbi elementor search country section widget.
 *
 * @since 1.0
 */
class Tourbi_Search_Country extends Widget_Base {

	public function get_name() {
		return 'tourbi-search-country';
	}

	public function get_title() {
		return __( 'Search Country', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-search';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------

        // Country list
        $this->start_controls_section(
            'country_list',
            [
                'label' => __( 'Country List', 'tourbi' ),
            ]
        );

        $this->add_control(
            'countries', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ country_name }}}',
                'fields' => [
                    [
                        'name'      => 'country_name',
                        'label'         => esc_html__( 'Country Name', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Luxembourg', 'tourbi' )
                    ],
                ],
                'default' => [
                    [
                        'country_name'      => 'Luxembourg'
                    ],
                    [
                        'country_name'      => 'Switzerland'
                    ],
                    [
                        'country_name'      => 'Canada'
                    ],
                    [
                        'country_name'      => 'Denmark'
                    ],
                    [
                        'country_name'      => 'Singapore'
                    ],
                    [
                        'country_name'      => 'Netherlands'
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End content

        // City list
        $this->start_controls_section(
            'city_list',
            [
                'label' => __( 'City List', 'tourbi' ),
            ]
        );

        $this->add_control(
            'cities', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ city_name }}}',
                'fields' => [
                    [
                        'name'      => 'city_name',
                        'label'         => esc_html__( 'City Name', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Orlando, FL', 'tourbi' )
                    ],
                ],
                'default' => [
                    [
                        'city_name'      => 'Orlando, FL'
                    ],
                    [
                        'city_name'      => 'Oklahoma City, OK'
                    ],
                    [
                        'city_name'      => 'Miami, FL'
                    ],
                    [
                        'city_name'      => 'Austin, TX'
                    ],
                    [
                        'city_name'      => 'Tampa, FL'
                    ],
                    [
                        'city_name'      => 'Durham, NC'
                    ],
                    [
                        'city_name'      => 'Raleigh, NC'
                    ],
                    [
                        'city_name'      => 'Charlotte, NC'
                    ],
                    [
                        'city_name'      => 'Atlanta, GA'
                    ],
                    [
                        'city_name'      => 'Denver, CO'
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End content


        // Search button
        $this->start_controls_section(
            'search_btn_section',
            [
                'label' => __( 'Search Button Section', 'tourbi' ),
            ]
        );
        $this->add_control(
            'search_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'tourbi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'search', 'tourbi' )
            ]
        );
        $this->add_control(
            'search_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'tourbi' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->end_controls_section();


        // Featured items
        $this->start_controls_section(
            'featured_items_section',
            [
                'label' => __( 'Featured Items', 'tourbi' ),
            ]
        );

        $this->add_control(
            'features', [
                'label' => __( 'Create New', 'tourbi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'          => 'feature_icons',
                        'label'         => __( 'Feature Icon', 'boxe' ),
                        'type'          => Controls_Manager::ICON,
                        'label_block'   => true,
                        'default'       => 'fa fa-child',
                        'options'       => tourbi_flaticon_list()
                    ],
                    [
                        'name'          => 'title',
                        'label'         => esc_html__( 'Title', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Donation', 'tourbi' )
                    ],
                    [
                        'name'          => 'desc',
                        'label'         => esc_html__( 'Description', 'tourbi' ),
                        'type'          => Controls_Manager::TEXTAREA,
                        'label_block'   => true,
                        'default'       => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna', 'tourbi' )
                    ],
                    [
                        'name'          => 'btn_label',
                        'label'         => esc_html__( 'Button Label', 'tourbi' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => esc_html__( 'read more', 'tourbi' )
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
                        'feature_icons'     => 'fa fa-child',
                        'title'             => esc_html__( 'Donation', 'tourbi' ),
                        'desc'              => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna', 'tourbi' ),
                        'btn_label'         => esc_html__( 'read more', 'tourbi' ),
                        'btn_url'           => '#',
                    ],
                    [
                        'feature_icons'     => 'fa fa-child',
                        'title'             => esc_html__( 'Donation', 'tourbi' ),
                        'desc'              => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna', 'tourbi' ),
                        'btn_label'         => esc_html__( 'read more', 'tourbi' ),
                        'btn_url'           => '#',
                    ],
                    [
                        'feature_icons'     => 'fa fa-child',
                        'title'             => esc_html__( 'Donation', 'tourbi' ),
                        'desc'              => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna', 'tourbi' ),
                        'btn_label'         => esc_html__( 'read more', 'tourbi' ),
                        'btn_url'           => '#',
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
            'search_form_styles', [
                'label' => __( 'Search Form Style', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'searcch_form_bg_col', [
                'label'     => __( 'Search Form BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .search_form' => 'background-color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'searcch_btn_txt_col', [
                'label'     => __( 'Search Button Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .search_form .search_btn' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'searcch_btn_bg_col', [
                'label'     => __( 'Search Button BG Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .search_form .search_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );    
        $this->end_controls_section();


        // Features Style ==============================
        $this->start_controls_section(
            'features_styles', [
                'label' => __( 'Features Style', 'tourbi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_col', [
                'label'     => __( 'Icon Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .single_donation_item i' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'title_col', [
                'label'     => __( 'Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .single_donation_item h4' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'txt_col', [
                'label'     => __( 'Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .single_donation_item p' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'anc_txt_col', [
                'label'     => __( 'Anchor Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .single_donation_item .read_btn' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->add_control(
            'anc_txt_hov_col', [
                'label'     => __( 'Anchor Text Hover Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .search_your_country .single_donation_item .read_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );   
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();

        $countries = !empty( $settings['countries'] ) ? $settings['countries'] : '';
        $cities = !empty( $settings['cities'] ) ? $settings['cities'] : '';
        $search_btnlabel = !empty( $settings['search_btnlabel'] ) ? $settings['search_btnlabel'] : '';
        $search_btnurl = !empty( $settings['search_btnurl']['url'] ) ? $settings['search_btnurl']['url'] : '';
        $features = !empty( $settings['features'] ) ? $settings['features'] : '';

        $shape_1   = TOURBI_DIR_ANIMATE_ICON_IMG_URI . 'shape-1.png';
        $shape_2   = TOURBI_DIR_ANIMATE_ICON_IMG_URI . 'shape-2.png';

    ?>

    <!-- search country part start-->
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search_form">
                        <form action="#">
                            <div class="form-row">
                                <div class="col-lg-9">
                                    <div class="search_form_iner">
                                        <select class="custom_select" id="inlineFormCustomSelect">
                                            <option selected>country</option>
                                            <?php
                                            if( is_array( $countries ) && count( $countries ) > 0 ){
                                                foreach ( $countries as $country ) {
                                                    $country_name = !empty( $country['country_name'] ) ? $country['country_name'] : '';  
                                                    echo "<option value='{$country_name}'>{$country_name}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <select class="custom_select" id="inlineFormCustomSelect1">
                                            <option selected>city</option>
                                            <?php
                                            if( is_array( $cities ) && count( $cities ) > 0 ){
                                                foreach ( $cities as $city ) {
                                                    $city_name = !empty( $city['city_name'] ) ? $city['city_name'] : '';  
                                                    echo "<option value='{$city_name}'>{$city_name}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a href="<?php echo esc_url( $search_btnurl )?>" class="search_btn"><?php echo esc_html( $search_btnlabel )?></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php            
                if( is_array( $features ) && count( $features ) > 0 ){
                    foreach ( $features as $feature ) {
                        $fet_icon  = !empty( $feature['feature_icons'] ) ? $feature['feature_icons'] : '';
                        $title = !empty( $feature['title'] ) ? $feature['title'] : '';
                        $desc  = !empty( $feature['desc'] ) ? $feature['desc'] : '';
                        $btn_label  = !empty( $feature['btn_label'] ) ? $feature['btn_label'] : '';
                        $btn_url  = !empty( $feature['btn_url']['url'] ) ? $feature['btn_url']['url'] : '';
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_donation_item">
                                <?php
                                    if( $fet_icon ){
                                        echo '<i class="'. esc_attr( $fet_icon ) .'"></i>';
                                    }
                                ?>
                                <h4><?php echo esc_html( $title )?></h4>
                                <p><?php echo esc_html( $desc )?></p>
                                <a href="<?php echo esc_url( $btn_url )?>" class="read_btn"><?php echo esc_html( $btn_label )?></a>
                            </div>
                        </div>
                    <?php 
                    }
                }
                ?>
            </div>
        </div>
        <img src="<?php echo esc_url( $shape_1 )?>" alt="feature_icon_1" class="feature_icon_1">
        <img src="<?php echo esc_url( $shape_2 )?>" alt="feature_icon_2" class="feature_icon_2">
    </section>
    <!-- search country part start-->
    <?php

    }
	
}
