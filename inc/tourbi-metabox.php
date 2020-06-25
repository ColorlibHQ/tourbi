<?php
function tourbi_portfolio_metabox( $meta_boxes ) {

	$tourbi_prefix = '_tourbi_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'tourbi' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $tourbi_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'tourbi' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $tourbi_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'tourbi' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $tourbi_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'tourbi' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $tourbi_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'tourbi' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $tourbi_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'tourbi' ),
				'placeholder' => esc_html__( 'Project Location', 'tourbi' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'tourbi_portfolio_metabox' );