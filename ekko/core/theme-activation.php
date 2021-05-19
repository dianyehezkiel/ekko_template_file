<?php

// Register the required plugins for this theme.
add_action('tgmpa_register', 'ekko_register_plugins');

if ( ! function_exists( 'ekko_register_plugins' ) ) {
	function ekko_register_plugins() {
		$plugins = array(
			array(
				'name' => esc_html__('Redux Framework', 'ekko'),
				'slug' => 'redux-framework',
				'required' => true,
			),
			array(
				'name' => esc_html__('WPBakery Page Builder', 'ekko'),
				'slug' => 'js_composer',
				'source' => EKKO_THEME_DIR . 'core/plugins/js_composer.zip',
				'required' => true,
				'version' => '6.6',
				'force_activation' => false,
				'force_deactivation' => false,
			),
			array(
				'name' => esc_html__('KeyDesign Addon', 'ekko'),
				'slug' => 'keydesign-addon',
				'source' => 'http://www.ekko-wp.com/external/keydesign-addon.zip',
				'required' => true,
				'version' => '4.3',
				'force_activation' => false,
				'force_deactivation' => false,
				'external_url' => 'http://www.ekko-wp.com/external/keydesign-addon.zip',
			),
			array(
				'name' => esc_html__('Slider Revolution', 'ekko'),
				'slug' => 'revslider',
				'source' => EKKO_THEME_DIR . 'core/plugins/revslider.zip',
				'required' => true,
				'version' => '6.4.8',
				'force_activation' => false,
				'force_deactivation' => false,
			),
			array(
		    'name' => esc_html__('Envato Market', 'ekko'),
		    'slug' => 'envato-market',
		    'source' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
		    'required' => false,
		    'version' => '2.0.6',
		    'force_activation' => false,
		    'force_deactivation' => false,
		    'external_url' => 'https://envato.com/market-plugin/',
	    ),
			array(
				'name' => esc_html__('WooCommerce', 'ekko'),
				'slug' => 'woocommerce',
				'required' => false,
			),
			array(
				'name' => esc_html__('Contact Form 7', 'ekko'),
				'slug' => 'contact-form-7',
				'required' => true,
			),
			array(
				'name' => esc_html__('Breadcrumb NavXT', 'ekko'),
				'slug' => 'breadcrumb-navxt',
				'required' => false,
			),
		);

		$config = array(
			'id' => 'ekko',
			'default_path' => '',
			'menu' => 'install-required-plugins',
			'has_notices' => true,
			'dismissable' => true,
			'is_automatic' => false,
			'message' => '',
			'strings' => array(
				'page_title' => esc_html__('Install Required Plugins', 'ekko'),
				'menu_title' => esc_html__('Plugins', 'ekko'),
				'installing' => esc_html__('Installing Plugin: %s', 'ekko'),
				'oops' => esc_html__('Something went wrong with the plugin API.', 'ekko') ,
				'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'ekko'),
				'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'ekko'),
				'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'ekko'),
				'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'ekko'),
				'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'ekko'),
				'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'ekko'),
				'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'ekko'),
				'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'ekko'),
				'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'ekko'),
				'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins', 'ekko'),
				'return' => esc_html__('Return to Required Plugins Installer', 'ekko') ,
				'plugin_activated' => esc_html__('Plugin activated successfully.', 'ekko') ,
				'complete' => esc_html__('All plugins installed and activated successfully. %s', 'ekko'),
				'nag_type' => 'updated'
			)
		);
		tgmpa($plugins, $config);
		}
	}
