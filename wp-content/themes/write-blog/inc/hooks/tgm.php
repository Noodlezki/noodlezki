<?php
/**
 * Recommended plugins
 *
 * @package write-blog
 */
if ( ! function_exists( 'write_blog_recommended_plugins' ) ) :
	/**
	 * Recommend plugins.
	 *
	 * @since 1.0.0
	 */
	function write_blog_recommended_plugins() {
		$plugins = array(
			array(
				'name'     => esc_html__( 'One Click Demo Import', 'write-blog' ),
				'slug'     => 'one-click-demo-import',
				'required' => false,
			),
		);
		tgmpa( $plugins );
	}
endif;
add_action( 'tgmpa_register', 'write_blog_recommended_plugins' );
