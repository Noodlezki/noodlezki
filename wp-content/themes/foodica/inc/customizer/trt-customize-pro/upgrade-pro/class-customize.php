<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Foodica_PRO_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/customizer/trt-customize-pro/upgrade-pro/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Foodica_PRO_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Foodica_PRO_Customize_Section_Pro(
				$manager,
				'Foodica_PRO',

				array(
                    'title'    => esc_html__( 'Upgrade to Foodica PRO', 'foodica' ),
					'description'    => esc_html__( 'Unlock more features: 10 Color Schemes, Recipe Index, 600+ Google Fonts, 100+ Color options and more!', 'foodica' ),
					'pro_text' => esc_html__( 'View Foodica PRO',         'foodica' ),
					'pro_url'  => 'https://www.wpzoom.com/wordpress-food-themes/foodica-pro/?utm_campaign=foodica_lite_btn',
                    'priority' => 5
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'upgrade-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/customizer/trt-customize-pro/upgrade-pro/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'upgrade-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/customizer/trt-customize-pro/upgrade-pro/customize-controls.css' );
	}
}

// Doing this customizer thang!
Foodica_PRO_Customize::get_instance();
