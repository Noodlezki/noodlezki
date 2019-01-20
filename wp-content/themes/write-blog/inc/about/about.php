<?php
/**
 * About setup
 *
 * @package Write_Blog
 */

if ( ! function_exists( 'write_blog_about_setup' ) ) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function write_blog_about_setup() {

		$config = array(

			// Welcome content.
			'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'write-blog' ), 'Write Blog' ),

			// Tabs.
			'tabs' => array(
				'getting-started' => esc_html__( 'Getting Started', 'write-blog' ),
				'useful-plugins'  => esc_html__( 'Useful Plugins', 'write-blog' ),
				),

			// Quick links.
			'quick_links' => array(
                'theme_url' => array(
                    'text' => esc_html__( 'Theme Details', 'write-blog' ),
                    'url'  => 'https://thememattic.com/theme/write-blog-pro/',
                ),
                'demo_url' => array(
                    'text' => esc_html__( 'View Demo', 'write-blog' ),
                    'url'  => 'https://demo.thememattic.com/write-blog-pro/',
                ),
                'documentation_url' => array(
                    'text'   => esc_html__( 'View Documentation', 'write-blog' ),
                    'url'    => 'https://docs.thememattic.com/write-blog-pro/',
                    'button' => 'primary',
                ),
            ),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__( 'Theme Documentation', 'write-blog' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'write-blog' ),
					'button_text' => esc_html__( 'View Documentation', 'write-blog' ),
					'button_url'  => 'https://thememattic.com/theme/write-blog-pro/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Static Front Page', 'write-blog' ),
					'icon'        => 'dashicons dashicons-admin-generic',
					'description' => esc_html__( 'To achieve custom home page other than blog listing, you need to create and set static front page.', 'write-blog' ),
					'button_text' => esc_html__( 'Static Front Page', 'write-blog' ),
					'button_url'  => admin_url( 'customize.php?autofocus[section]=static_front_page' ),
					'button_type' => 'primary',
					),
				'three' => array(
					'title'       => esc_html__( 'Theme Options', 'write-blog' ),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'write-blog' ),
					'button_text' => esc_html__( 'Customize', 'write-blog' ),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
					),
				'four' => array(
					'title'       => esc_html__( 'Demo Content', 'write-blog' ),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf( esc_html__( 'To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'write-blog' ), esc_html__( 'One Click Demo Import', 'write-blog' ) ),
					),
				'five' => array(
					'title'       => esc_html__( 'Theme Preview', 'write-blog' ),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__( 'You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized.', 'write-blog' ),
					'button_text' => esc_html__( 'View Demo', 'write-blog' ),
					'button_url'  => 'https://demo.thememattic.com/write-blog-pro/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
                'six' => array(
                    'title'       => esc_html__( 'Contact Support', 'write-blog' ),
                    'icon'        => 'dashicons dashicons-sos',
                    'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'write-blog' ),
                    'button_text' => esc_html__( 'Contact Support', 'write-blog' ),
                    'button_url'  => 'https://thememattic.com/support/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
				),

			// Useful plugins.
			'useful_plugins' => array(
				'description' => esc_html__( 'Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'write-blog' ),
				),

			);

		Write_Blog_About::init( $config );
	}

endif;

add_action( 'after_setup_theme', 'write_blog_about_setup' );
