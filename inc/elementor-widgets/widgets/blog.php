<?php
namespace Tourbielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Tourbi elementor Blog section widget.
 *
 * @since 1.0
 */

class Tourbi_Blog extends Widget_Base {

	public function get_name() {
		return 'tourbi-blog';
	}

	public function get_title() {
		return __( 'Blog', 'tourbi' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'tourbi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Latest Blog Post', 'tourbi' ),
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
				'label'         => esc_html__( 'Title', 'tourbi' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'default'       => __( 'Our Blog', 'tourbi' )
			]
		);
		$this->add_control(
			'sec_subtitle', [
				'label'         => esc_html__( 'Sub Title', 'tourbi' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'default'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed  do eiusmod tempor incididunt ut', 'tourbi' )

			]
		);
        $this->add_control(
            'excerpt_limit',
            [
                'label'     => esc_html__( 'Post Excerpt', 'tourbi' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 1,
                'max'       => 30,
                'step'      => 1,
                'default'   => 26
            ]
        );

        $this->end_controls_section(); // End few words content

        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'tourbi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style text ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Blog Content', 'tourbi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_blogtitle', [
                'label'     => __( 'Blog Title Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog_part .blog_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blog_txt', [
                'label'     => __( 'Blog Text Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog_part .blog_text > p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'blog_meta_color', [
                'label'     => __( 'Blog Meta Color', 'tourbi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog_part .blog_text ul li' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog_part .single_blog_part .blog_text ul li p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog_part .single_blog_part .blog_text ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings  = $this->get_settings();
    $title_img          = !empty( $settings['section_tittle_img']['id'] ) ? wp_get_attachment_image( $settings['section_tittle_img']['id'], 'tourbi_popular_place_img_150x100', false, array( 'alt' => 'feature image' ) ) : '';
    $title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $subTitle = !empty( $settings['sec_subtitle'] ) ? $settings['sec_subtitle'] : '';
    $excerpt_limit  = !empty( $settings['excerpt_limit'] ) ? $settings['excerpt_limit'] : '30';

    $overlay_1   = TOURBI_DIR_ASSETS_URI.'img/overlay_1.png';
    ?>

    <!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <?php
                            if( $title_img ){
                                echo wp_kses_post( $title_img );
                            }
                            
                            echo '<h2>' .esc_html( $title ) . '</h2>';
                            echo '<p>' .esc_html( $subTitle ) . '</p>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if( function_exists( 'tourbi_latest_blog' ) ) {
                        tourbi_latest_blog( $excerpt_limit );
                    }
                ?>
            </div>
        </div>
        <img src="<?php echo esc_url( $overlay_1 )?>" alt="overlay image" class="blog_img">
    </section>
    <!-- blog part end-->
    <?php
	}
}
