<?php

Class FN_Button {

	public function __construct() {

		add_shortcode( 'fn_btn', array( $this, 'render' ) );

	}

	public function render( $atts, $content = null ) {

		$atts = shortcode_atts( array(
			'id'										=> null,
			'class'									=> null,
			'style'									=> null,
			'link'									=> null,
			'target'								=> null,
			'type'									=> null,
			'size'									=> null,
			'expanded'							=> null,
			'disabled'							=> null,
			'hollow'								=> null,
		), $atts, 'fn_btn' );

		// Remove whitespaces from starting and ending of shortcode attributes
		$atts = array_map( 'trim', $atts );
		$default_class = ' button ';
		$class = '';

		if ( ! empty( $atts['id'] ) ) {
			$atts['id'] = ' id="' . $atts['id'] . '" ';
		} else {
			$atts['id'] = ' ';
		}

		if ( ! empty( $atts['style'] ) ) {
			$atts['style'] = ' style="' . $atts['style'] . '"';
		}

		if ( empty( $atts['link'] ) ) {
			$atts['link'] = 'javascript: void(0);';
		}

		if ( ! empty( $atts['target'] ) ) {
			$atts['target'] = ' target="' . $atts['target'] . '"';
		}

		if ( ! empty( $atts['type'] ) ) {
			$class .= ' ' . strtolower( $atts['type'] ) . ' ';
		}

		if ( ! empty( $atts['size'] ) ) {
			$class .= ' ' . strtolower( $atts['size'] ) . ' ';
		}

		if ( 'yes' === strtolower( $atts['expanded'] ) ) {
			$class .= ' expanded ';
		}

		if ( 'yes' === strtolower( $atts['disabled'] ) ) {
			$class .= ' disabled ';
		}

		if ( 'yes' === strtolower( $atts['hollow'] ) ) {
			$class .= ' hollow ';
		}

		if ( ! empty( $atts['class'] ) ) {
			$atts['class'] = $class . $atts['class'] . $default_class;
		} else {
			$atts['class'] = ( $class ) ? $class . $default_class  : $default_class ;
		}

		$atts = preg_replace( '/\s+/', ' ', $atts );
		$atts['class'] = trim( $atts['class'] );

		$html = sprintf( '<a href="%s"%s%sclass="%s"%s>%s</a>',
			$atts['link'],
			$atts['target'],
			$atts['id'],
			$atts['class'],
			$atts['style'],
			do_shortcode( $content ) 
		);

		return $html;

	}

}

new FN_Button();
