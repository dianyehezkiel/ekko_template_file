<?php
  /*
  * ReduxFramework Options Config
  */

  if ( ! class_exists( 'Redux' ) ) {
    return;
  }

  $opt_name = 'redux_ThemeTek';

  $theme = wp_get_theme();

  $args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get( 'Name' ),
    'display_version' => $theme->get( 'Version' ),
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__( 'Theme Options', 'ekko' ),
    'page_title' => esc_html__( 'Theme Options', 'ekko' ),
    'async_typography' => true,
    'admin_bar' => true,
    'dev_mode' => false,
    'update_notice' => false,
    'show_options_object' => false,
    'customizer' => false,
    'page_parent' => 'ekko-dashboard',
    'page_slug' => 'theme-options',
    'page_permissions' => 'manage_options',
    'save_defaults' => true,
    'show_import_export' => true,
    'network_sites' => '1',
    'transient_time' => 60 * MINUTE_IN_SECONDS,
  );

  Redux::setArgs( $opt_name, $args );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Management',
      'title' => esc_html__('Business Info', 'ekko'),
      'desc' => esc_html__('Edit the contact details for your company/organization. These details are listed in Theme Options > Header > Topbar / Popup Modal / Side Panel.', 'ekko'),
      'fields' => array(
          array(
              'id' => 'tek-business-phone',
              'type' => 'text',
              'title' => esc_html__('Business Phone', 'ekko'),
              'subtitle' => 'Edit business phone.',
              'default' => '(222) 400-630',
          ),
          array(
              'id' => 'tek-secondary-business-phone',
              'type' => 'text',
              'title' => esc_html__('Secondary Business Phone', 'ekko'),
              'subtitle' => 'Edit secondary business phone.',
              'default' => '',
          ),
          array(
              'id' => 'tek-business-email',
              'type' => 'text',
              'title' => esc_html__('Business Email', 'ekko'),
              'subtitle' => 'Edit business email.',
              'default' => 'contact@ekko.com',
          ),
          array(
              'id' => 'tek-business-opening-hours',
              'type' => 'text',
              'title' => esc_html__('Business Opening Hours', 'ekko'),
              'subtitle'      => 'Edit business opening hours.',
              'default' => 'Mon - Fri: 10:00 - 22:00',
          ),
          array(
              'id'            => 'tek-social-profiles',
              'type'          => 'social_profiles',
              'title'         => 'Social Icons',
              'subtitle'      => 'Click on icon to activate it, drag and drop to change the icon order.',
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Gear',
      'title' => esc_html__('Global Options', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Gears',
      'title' => esc_html__('Global Settings', 'ekko'),
      'desc' => esc_html__('General settings that are applied site-wide.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-smooth-scroll',
              'type' => 'switch',
              'title' => esc_html__('Smooth Mouse Scroll', 'ekko'),
              'subtitle' => esc_html__('Turn on to replace basic website scrolling effect with nice smooth scroll.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-backtotop',
              'type' => 'switch',
              'title' => esc_html__(' Go to Top Button', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable a "Go to top" button in the right bottom corner the page.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-google-api',
              'type' => 'text',
              'title' => esc_html__('Google Map API Key', 'ekko'),
              'default' => '',
              'subtitle' => esc_html__('Generate, copy and paste here Google Maps API Key.', 'ekko'),
              'desc' => wp_kses('Click <a target=_blank href=https://developers.google.com/maps/documentation/javascript/get-api-key>here</a> to get an API key', 'ekko')
          ),
          array(
              'id' => 'tek-disable-animations',
              'type' => 'switch',
              'title' => esc_html__('Disable Animations on Mobile', 'ekko'),
              'subtitle' => esc_html__('Turn on/off element animation on mobile.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-favicon',
              'type' => 'media',
              'readonly' => true,
              'preview' => false,
              'url' => true,
              'title' => esc_html__('Favicon', 'ekko'),
              'subtitle' => esc_html__('Favicon upload has been moved to Appearance > Customize > Site Identity > Site Icon.', 'ekko'),
              'desc' => esc_html__('The Site Icon feature was added in WordPress 4.3. Users on WordPress 4.3 or above must upload favicon from WordPress settings and not from themes / plugins', 'ekko'),
              'default' => array(
                  'url' => get_template_directory_uri() . '/core/assets/images/favicon.png'
              )
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Palette',
      'title' => esc_html__('Color Schemes', 'ekko'),
      'desc' => esc_html__('General color schemes that are applied site-wide.', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
          'id' => 'tek-main-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Primary Accent Color', 'ekko'),
          'subtitle' => esc_html__('Option for setting the primary color of the theme.', 'ekko'),
          'default' => '#25b15f',
          'validate' => 'color'
        ),

        array(
          'id' => 'tek-secondary-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Secondary Accent Color', 'ekko'),
          'subtitle' => esc_html__('Option for setting the secondary color of the theme.', 'ekko'),
          'default' => '#000000',
          'validate' => 'color'
        ),

        array(
          'id' => 'tek-titlebar-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Title Bar Background Color', 'ekko'),
          'default' => '',
          'subtitle' => esc_html__('Select the background color used for the single pages title bar section.', 'ekko'),
          'validate' => 'color'
        ),

        array(
            'id' => 'tek-titlebar-text-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Title Bar Text Color', 'ekko'),
            'default' => '',
            'subtitle' => esc_html__('Select the single page title color.', 'ekko'),
            'validate' => 'color'
        ),

        array(
              'id' => 'tek-link-color',
              'type' => 'link_color',
              'title' => esc_html__( 'Links Color', 'ekko' ),
              'subtitle' => esc_html__('Normal and hover states of default links.', 'ekko'),
              'active' => false,
              'visited' => false,
          ),
    )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Loading-3',
      'title' => esc_html__('Preloader', 'ekko'),
      'desc' => esc_html__('General color schemes that are applied site-wide.', 'ekko'),
      'subsection' => true,
      'fields' => array(
      array(
              'id' => 'tek-preloader',
              'type' => 'switch',
              'title' => esc_html__('Preloader', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable a preloader screen before loading the page.', 'ekko'),
              'default' => true
      ),
        array(
          'id' => 'tek-preloader-bg-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Preloader Background Color', 'ekko'),
          'subtitle' => esc_html__('Edit preloader background color.', 'ekko'),
          'required' => array('tek-preloader','equals',true),
          'validate' => 'color'
        ),
      array(
          'id' => 'tek-preloader-image',
          'type' => 'media',
          'readonly' => false,
          'url' => true,
          'title' => esc_html__('Preloader Image', 'ekko'),
          'subtitle' => esc_html__('Upload preloader image/logo.', 'ekko'),
          'required' => array('tek-preloader','equals',true),
      ),
      array(
          'id' => 'tek-preloader-image-size-desktop',
          'type' => 'text',
          'class' => 'kd-numeric-input',
          'title' => esc_html__('Preloader Image Size', 'ekko'),
          'subtitle' => esc_html__('Control the preloader image size (pixel value). Example: 200.', 'ekko'),
          'required' => array('tek-preloader','equals',true),
      ),
      array(
          'id' => 'tek-preloader-image-size-mobile',
          'type' => 'text',
          'class' => 'kd-numeric-input',
          'title' => esc_html__('Preloader Mobile Image Size', 'ekko'),
          'subtitle' => esc_html__('Control the preloader image size on mobile devices (pixel value). Example: 140.', 'ekko'),
          'required' => array('tek-preloader','equals',true),
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Upload-Window',
      'title' => esc_html__('Header', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Settings-Window',
      'title' => esc_html__('Header Bar', 'ekko'),
      'desc' => esc_html__('Edit header bar general settings.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-header-bar-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Bar Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-menu-style',
              'type' => 'button_set',
              'title' => esc_html__('Header Bar Width', 'ekko'),
              'subtitle' => esc_html__('Control the width of your main navigation menu:  Contained/Full Width.', 'ekko'),
              'options' => array(
                  '1' => 'Contained',
                  '2' => 'Full-Width'
               ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-menu-behaviour',
              'type' => 'button_set',
              'title' => esc_html__('Header Bar Behaviour', 'ekko'),
              'subtitle' => esc_html__('select the header behavior when scrolling down the page', 'ekko'),
              'options' => array(
                  '1' => 'Sticky',
                  '2' => 'Fixed'
               ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-header-spacing',
              'type' => 'spinner',
              'title' => esc_html__('Header Bar Spacing', 'ekko'),
              'subtitle' => esc_html__('Control the top and bottom padding for the header bar. Pixel value.', 'ekko'),
              'min' => 0,
              'max' => 30,
              'default' => 1,
          ),
          array(
              'id' => 'tek-header-menu-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Header Bar Background Color', 'ekko'),
              'subtitle' => esc_html__('Select the background color for the fixed menu bar.', 'ekko'),
              'default' => '#ffffff',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-header-menu-bg-sticky',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Sticky Header Bar Background Color', 'ekko'),
              'subtitle' => esc_html__('Select the background color for the sticky menu bar.', 'ekko'),
              'default' => '#ffffff',
              'required' => array('tek-menu-behaviour','equals', '1'),
              'validate' => 'color'
          ),
          array(
              'id'=>'tek-header-bar-section-end',
              'type' => 'section',
              'indent' => false,
          ),

          array(
              'id'=>'tek-header-icons-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Bar Icons', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-topbar-search',
              'type' => 'switch',
              'title' => esc_html__('Search Icon', 'ekko'),
              'subtitle' => esc_html__('Turn on/off the search icon', 'ekko'),
              'description' => esc_html__('Notice: Search icon default location is in topbar. If topbar is turned off the search icon will be visible after main menu', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-woo-display-cart-icon',
              'type' => 'switch',
              'title' => esc_html__('Cart Icon', 'ekko'),
              'subtitle' => esc_html__('Turn on/off the cart icon.', 'ekko'),
              'description' => esc_html__('Notice: Cart icon default location is in topbar. If topbar is turned off the cart icon will be visible after main menu', 'ekko'),
              'default' => '1',
              '1' => 'Show',
              '0' => 'Hide',
          ),
          array(
              'id' => 'tek-woo-cart-icon-selector',
              'type' => 'button_set',
              'title' => esc_html__('Cart Icon', 'ekko'),
              'subtitle' => esc_html__('Change cart icon style.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'shopping-cart' => 'Shopping cart',
                  'shopping-bag' => 'Shopping bag',
                  'shopping-basket' => 'Shopping basket',
              ),
              'required' => array('tek-woo-display-cart-icon','equals','1'),
              'default' => 'shopping-basket'
          ),
          array(
              'id' => 'tek-topbar-lang-switcher',
              'type' => 'switch',
              'title' => esc_html__('Language Switcher Icon', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the language switcher.', 'ekko'),
              'description' => esc_html__('Notice: The language switcher is visible only with compatible multilingual plugins ( WPML and Polylang ) activated.', 'ekko'),
              'default' => true
          ),
          array(
              'id'=>'tek-header-icons-section-end',
              'type' => 'section',
              'indent' => false,
          ),
    )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Favorite-Window',
      'title' => esc_html__('Logo', 'ekko'),
      'desc' => esc_html__('General logo settings.', 'ekko'),
        'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-logo-style',
            'type' => 'button_set',
            'title' => esc_html__('Logo Style', 'ekko'),
            'subtitle' => esc_html__('Select the Logo type: Text/Image.', 'ekko'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                '1' => 'Image logo',
                '2' => 'Text logo'
            ),
            'default' => '2'
        ),
        array(
            'id' => 'tek-logo',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Primary Image Logo', 'ekko'),
            'subtitle' => esc_html__('Upload primary logo image.', 'ekko'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-logo2',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('Secondary Image Logo', 'ekko'),
            'subtitle' => esc_html__('Upload secondary image logo.', 'ekko'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-logo-image-size',
            'type' => 'text',
            'class' => 'kd-numeric-input',
            'title' => esc_html__('Logo Size', 'ekko'),
            'subtitle' => esc_html__('Control the logo width (pixels value). Example: 200.', 'ekko'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-mobile-logo-image-size',
            'type' => 'text',
            'class' => 'kd-numeric-input',
            'title' => esc_html__('Mobile Logo Size', 'ekko'),
            'subtitle' => esc_html__('Control the mobile logo width (pixels value). Example: 140.', 'ekko'),
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-text-logo',
            'type' => 'text',
            'title' => esc_html__('Text Logo', 'ekko'),
            'subtitle' => esc_html__('Name of your website displayed instead of the regular image logo', 'ekko'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => 'Ekko'
        ),
        array(
            'id' => 'tek-text-logo-typo',
            'type' => 'typography',
            'title' => esc_html__('Text Logo Font Settings', 'ekko'),
            'subtitle' => esc_html__('Edit the typography settings of your text logo.', 'ekko'),
            'required' => array('tek-logo-style','equals', '2'),
            'google' => true,
            'font-family' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'color' => false,
            'text-align' => false,
            'all_styles' => false,
            'units' => 'px',
        ),
        array(
            'id' => 'tek-main-logo-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Primary Logo Text Color', 'ekko'),
            'subtitle' => esc_html__('Default logo text color', 'ekko'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => '#000',
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-secondary-logo-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Secondary Logo Text Color', 'ekko'),
            'subtitle' => esc_html__('Logo text color for sticky navigation', 'ekko'),
            'required' => array('tek-logo-style','equals','2'),
            'default' => '#000',
            'validate' => 'color'
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-One-Window',
    'title' => esc_html__('Main Menu', 'ekko'),
    'desc' => esc_html__('Edit main menu general settings.', 'ekko'),
    'subsection' => true,
    'fields' => array(
        array(
            'id'=>'tek-menu-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('Main Menu Settings', 'ekko'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-menu-alignment',
            'type' => 'button_set',
            'title' => esc_html__('Menu Alignment', 'ekko'),
            'subtitle' => esc_html__('Control the position of the main menu.', 'ekko'),
            'options' => array(
                'main-nav-left' => 'Left',
                'main-nav-center' => 'Center',
                'main-nav-right' => 'Right'
             ),
            'default' => 'main-nav-right'
        ),
        array(
            'id' => 'tek-menu-typo',
            'type' => 'typography',
            'title' => esc_html__('Menu Font Settings', 'ekko'),
            'subtitle' => esc_html__('Control the typography settings of the menu.', 'ekko'),
            'google' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'text-transform' => true,
            'color' => false,
            'text-align' => false,
            'letter-spacing' => true,
            'all_styles' => false,
            'default' => array(
                'font-weight' => '700',
                'font-family' => '',
                'font-size' => '14',
                'text-transform' => '',
                'letter-spacing' => '1',
            ),
            'units' => 'px',
        ),

        array(
            'id' => 'tek-header-menu-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Menu Link Color', 'ekko'),
            'subtitle' => esc_html__('Select the default menu text color.', 'ekko'),
            'default' => '',
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-header-menu-color-hover',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Menu Link Hover Color', 'ekko'),
            'subtitle' => esc_html__('Select the default menu text color on mouse over.', 'ekko'),
            'default' => '',
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-header-menu-color-sticky',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Sticky Menu Link Color', 'ekko'),
            'subtitle' => esc_html__('Select the sticky menu text color.', 'ekko'),
            'default' => '',
            'required' => array('tek-menu-behaviour','equals', '1'),
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-header-menu-color-sticky-hover',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Sticky Menu Link Hover Color', 'ekko'),
            'subtitle' => esc_html__('Select the sticky menu text color on mouse over.', 'ekko'),
            'default' => '',
            'required' => array('tek-menu-behaviour','equals', '1'),
            'validate' => 'color'
        ),
        array(
            'id' => 'tek-sticky-nav-logo',
            'type' => 'select',
            'title' => esc_html__('Sticky Navigation Logo Image', 'ekko'),
            'subtitle' => esc_html__('Select which logo image to be used with the sticky navigation bar.', 'ekko'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'nav-primary-logo' => 'Primary logo image',
                'nav-secondary-logo' => 'Secondary logo image',
            ),
            'default' => 'nav-primary-logo',
            'required' => array('tek-logo-style','equals','1'),
        ),
        array(
            'id' => 'tek-dropdown-nav-hover',
            'type' => 'button_set',
            'title' => esc_html__('Dropdown Menu Link Hover Effect', 'ekko'),
            'subtitle' => esc_html__('Select the hover effect on dropdown menu links.', 'ekko'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'default-dropdown-effect' => 'Default',
                'background-dropdown-effect' => 'Background color',
                'underline-effect' => 'Underline animation',
            ),
            'default' => 'underline-effect',
        ),
        array(
            'id'=>'tek-menu-settings-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-home-transparent-section-start',
            'type' => 'section',
            'title' => esc_html__('Transparent Navigation Options', 'ekko'),
            'indent' => true,
        ),
       array(
           'id' => 'tek-transparent-nav-logo',
           'type' => 'select',
           'title' => esc_html__('Transparent Header Logo Image', 'ekko'),
           'subtitle' => esc_html__('Select which logo image to be used with the transparent navigation bar.', 'ekko'),
           'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
           'options'  => array(
               'nav-primary-logo' => 'Primary logo image',
               'nav-secondary-logo' => 'Secondary logo image',
           ),
           'default' => 'nav-secondary-logo',
           'required' => array('tek-logo-style','equals','1'),
       ),
       array(
           'id' => 'tek-transparent-homepage-menu-colors',
           'type' => 'color',
           'transparent' => false,
           'title' => esc_html__('Menu Link Color', 'ekko'),
           'subtitle' => esc_html__('Navigation color when using a transparent background.', 'ekko'),
           'default' => '#fff',
           'validate' => 'color',
       ),
       array(
            'id'=>'tek-home-transparent-section-end',
            'type' => 'section',
            'indent' => false,
      ),
      )
  ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Add-Window',
        'title' => esc_html__('Top Bar', 'ekko'),
        'desc' => esc_html__('Edit topbar general settings.', 'ekko'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-topbar',
              'type' => 'switch',
              'title' => esc_html__('Enable Topbar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the topbar.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-topbar-mobile',
              'type' => 'switch',
              'title' => esc_html__('Enable Topbar on Mobile', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'subtitle' => esc_html__('Show/hide the topbar  on mobile devices.', 'ekko'),
              'default' => false
          ),
              array(
              'id' => 'tek-topbar-sticky',
              'type' => 'switch',
              'title' => esc_html__('Sticky Topbar', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'subtitle' => esc_html__('Enable/Disable sticky topbar.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-topbar-left-content',
              'type' => 'button_set',
              'title' => esc_html__('Topbar Left Content', 'ekko'),
              'subtitle' => esc_html__('Select the content for the topbar left section.', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'contact-info' => 'Contact info',
                  'social-links' => 'Social links',
                  'navigation' => 'Navigation',
                  'empty' => 'Empty',
              ),
              'default' => 'contact-info',
          ),
          array(
              'id' => 'tek-topbar-right-content',
              'type' => 'button_set',
              'title' => esc_html__('Topbar Right Content', 'ekko'),
              'subtitle' => esc_html__('Select the content for the topbar right section.', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'contact-info' => 'Contact info',
                  'social-links' => 'Social links',
                  'navigation' => 'Navigation',
                  'empty' => 'Empty',
              ),
              'default' => 'empty',
          ),
          array(
              'id' => 'tek-topbar-content-design',
              'type' => 'button_set',
              'title' => esc_html__('Topbar Content Design', 'ekko'),
              'subtitle' => esc_html__('Select the topbar content design.', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'tb-default-design' =>'No Borders',
                  'tb-border-design' => 'With Borders',
              ),
              'default' => 'tb-border-design',
          ),
          array(
              'id' => 'tek-topbar-typo',
              'type' => 'typography',
              'title' => esc_html__('Topbar Font Settings', 'ekko'),
              'subtitle' => esc_html__('Select topbar font weight and size.', 'ekko'),
              'required' => array('tek-topbar','equals', true),
              'google' => false,
              'font-family' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'color' => false,
              'text-align' => false,
              'all_styles' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-topbar-bg-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Background Color', 'ekko'),
              'subtitle' => esc_html__('Edit  topbar background.', 'ekko'),
              'default' => '#FFFFFF',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
          array(
              'id' => 'tek-topbar-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Text Color', 'ekko'),
              'subtitle' => esc_html__('Edit  topbar text & links color.', 'ekko'),
              'default' => '',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
          array(
              'id' => 'tek-topbar-hover-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Topbar Text Hover Color', 'ekko'),
              'subtitle' => esc_html__('Edit  topbar links color on mouse over.', 'ekko'),
              'default' => '',
              'validate' => 'color',
              'required' => array('tek-topbar','equals', true),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Window',
      'title' => esc_html__('Popup Modal', 'ekko'),
      'desc' => esc_html__('Control the settings of the popup modal used to display additional content on all pages and posts, without sacrificing space. The modal box can be triggered using the button displayed near the Main Menu. This button can also be used to open a new page or smooth scroll to a page section ID.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-btn-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Button Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-modal-button',
              'type' => 'switch',
              'title' => esc_html__('Enable Header Button', 'ekko'),
              'subtitle' => esc_html__('Enable/disable the header button. The button will be displayed near the main navigation area to the right.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-header-button-text',
              'type' => 'text',
              'title' => esc_html__('Button Text', 'ekko'),
              'subtitle' => esc_html__('Edit header button text.', 'ekko'),
              'default' => 'Get a quote'
          ),
          array(
              'id' => 'tek-header-button-style',
              'type' => 'button_set',
              'title' => esc_html__('Button Style', 'ekko'),
              'subtitle' => esc_html__('Edit header button style.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'default' => 'outline-button'
          ),
          array(
              'id' => 'tek-header-button-color',
              'type' => 'button_set',
              'title' => esc_html__('Button Color Scheme', 'ekko'),
              'subtitle' => esc_html__('Edit header button color scheme.  Primary and secondary colors can be set in Theme Options > Global Options > Color schemes.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-header-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('Button Hover State', 'ekko'),
              'subtitle' => esc_html__('Edit header button style on mouse over.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-header-button-action',
              'type' => 'button_set',
              'title' => esc_html__('Button Action', 'ekko'),
              'subtitle' => esc_html__('Select button action: Open modal / Scroll to a section / Open a new page.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open Modal Box',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '3'
          ),
          array(
              'id'=>'tek-btn-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-modal-section-start',
              'type' => 'section',
              'title' => esc_html__('Modal Box Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-modal-title',
              'type' => 'text',
              'title' => esc_html__('Modal Heading', 'ekko'),
              'subtitle' => esc_html__('Heading text for the modal.', 'ekko'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => 'Lets get in touch'
          ),
          array(
              'id' => 'tek-modal-subtitle',
              'type' => 'editor',
              'title' => esc_html__('Modal Contents', 'ekko'),
              'subtitle' => esc_html__('Content text for the modal. HTML is allowed.', 'ekko'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
                  'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
                    ),
          ),
          array(
              'id' => 'tek-modal-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('Modal Background Image', 'ekko'),
              'subtitle' => esc_html__('Upload modal background image.', 'ekko'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
          ),
          array(
              'id' => 'tek-modal-contact-links',
              'type' => 'switch',
              'title' => esc_html__('Contact Links', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the phone and email links. The links can be configured in the Business Info panel.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-socials',
              'type' => 'switch',
              'title' => esc_html__('Social Icons', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable social icons list. The list can be configured in the Business Info panel.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'ekko'),
              'subtitle' => esc_html__('Display a contact form inside the Modal Box. Select the contact vendor from the dropdown list.', 'ekko'),
              'required' => array('tek-header-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-modal-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'ekko'),
              'subtitle' => esc_html__('Select the Contact Form 7 from the dropdown. The list is automatically populated.', 'ekko'),
              'required' => array('tek-modal-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'ekko'),
              'required' => array('tek-modal-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'ekko'),
              'required' => array('tek-modal-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'ekko'),
              'required' => array('tek-modal-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('Form Shortcode', 'ekko'),
              'subtitle' => esc_html__('Add the shortcode for a custom contact form plugin.', 'ekko'),
              'required' => array('tek-modal-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-css-class',
              'type' => 'text',
              'title' => esc_html__('CSS Class', 'ekko'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'ekko'),
              'default' => ''
          ),
          array(
              'id'=>'tek-modal-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('Scroll Section Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-scroll-id',
              'type' => 'text',
              'title' => esc_html__('Scroll to Section ID', 'ekko'),
              'required' => array('tek-header-button-action','equals','2'),
              'default' => '#download-ekko'
          ),
          array(
              'id'=>'tek-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('New Page Link Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-button-new-page',
              'type' => 'text',
              'title' => esc_html__('Button Link', 'ekko'),
              'required' => array('tek-header-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-button-target',
              'type' => 'button_set',
              'title' => esc_html__('Link Target', 'ekko'),
              'required' => array('tek-header-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','3'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Sidebar-Window',
      'title' => esc_html__('Side Panel', 'ekko'),
      'desc' => esc_html__('Control the settings of the Side Panel used to display additional content on all pages and posts, without sacrificing space. The Side Panel can be triggered using the Header Button displayed near the Main Menu. This button can also be used to open a new page or smooth scroll to a page section ID.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-panel-btn-section-start',
              'type' => 'section',
              'title' => esc_html__('Header Button Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-panel-button',
              'type' => 'switch',
              'title' => esc_html__('Enable Header Button', 'ekko'),
              'subtitle' => esc_html__('Enable/disable the side panel. The button will be displayed near the main navigation area to the right.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-panel-button-text',
              'type' => 'text',
              'title' => esc_html__('Button Text', 'ekko'),
              'subtitle' => esc_html__('Edit header button text.', 'ekko'),
              'default' => 'Purchase Ekko'
          ),
          array(
              'id' => 'tek-panel-button-style',
              'type' => 'button_set',
              'title' => esc_html__('Button Style', 'ekko'),
              'subtitle' => esc_html__('Edit header button style.', 'ekko'),
              'subtitle' => esc_html__('Edit header button text.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'default' => 'solid-button'
          ),
          array(
              'id' => 'tek-panel-button-color',
              'type' => 'button_set',
              'title' => esc_html__('Button Color Scheme', 'ekko'),
              'subtitle' => esc_html__('Edit header button color scheme.  Primary and secondary colors can be set in Theme Options > Global Options > Color schemes.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-panel-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('Button Hover State', 'ekko'),
              'subtitle' => esc_html__('Edit header button style on mouse over.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-panel-button-action',
              'type' => 'button_set',
              'title' => esc_html__('Button Action', 'ekko'),
              'subtitle' => esc_html__('Select button action: Open side panel / Scroll to a section / Open a new page.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open Side Panel',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '1'
          ),
          array(
              'id'=>'tek-panel-btn-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-panel-section-start',
              'type' => 'section',
              'title' => esc_html__('Side Panel Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-panel-title',
              'type' => 'text',
              'title' => esc_html__('Panel Heading', 'ekko'),
              'subtitle' => esc_html__('Heading text for the side panel.', 'ekko'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Enquire now'
          ),
          array(
              'id' => 'tek-panel-subtitle',
              'type' => 'editor',
              'title' => esc_html__('Panel Contents', 'ekko'),
              'subtitle' => esc_html__('Content text for the side panel.', 'ekko'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Give us a call or fill in the form below and we will contact you. We endeavor to answer all inquiries within 24 hours on business days.',
                  'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
                    ),
          ),
          array(
              'id' => 'tek-panel-contact-links',
              'type' => 'switch',
              'title' => esc_html__('Contact Links', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the phone and email links. The links can be configured in the Business Info panel.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-socials',
              'type' => 'switch',
              'title' => esc_html__('Social Icons', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the social icons list. The list can be configured in the Business Info panel.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'ekko'),
              'subtitle' => esc_html__('Display a contact form inside the Side Panel. Select the contact vendor from the dropdown list.', 'ekko'),
              'required' => array('tek-panel-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-panel-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'ekko'),
              'subtitle' => esc_html__('Select the Contact Form 7 from the dropdown. The list is automatically populated.', 'ekko'),
              'required' => array('tek-panel-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'ekko'),
              'required' => array('tek-panel-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'ekko'),
              'required' => array('tek-panel-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'ekko'),
              'required' => array('tek-panel-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('Form Shortcode', 'ekko'),
              'subtitle' => esc_html__('Add the shortcode for a custom contact form plugin.', 'ekko'),
              'required' => array('tek-panel-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-css-class',
              'type' => 'text',
              'title' => esc_html__('CSS Class', 'ekko'),
              'subtitle' => esc_html__('Add a class to the wrapping HTML element for further CSS customization.', 'ekko'),
              'default' => ''
          ),
          array(
              'id'=>'tek-panel-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-panel-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('Scroll Section Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-panel-scroll-id',
              'type' => 'text',
              'title' => esc_html__('Scroll to Section ID', 'ekko'),
              'required' => array('tek-panel-button-action','equals','2'),
              'default' => '#download-ekko'
          ),
          array(
              'id'=>'tek-panel-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-panel-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('New Page Settings', 'ekko'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-panel-button-new-page',
              'type' => 'text',
              'title' => esc_html__('Button Link', 'ekko'),
              'required' => array('tek-panel-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-panel-button-target',
              'type' => 'button_set',
              'title' => esc_html__('Link Target', 'ekko'),
              'required' => array('tek-panel-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-panel-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Width-Window',
      'title' => esc_html__('Layout', 'ekko'),
      'desc' => esc_html__('General layout settings that are applied site-wide.', 'ekko'),
      'fields' => array(
          array(
              'id' => 'tek-layout-style',
              'type' => 'button_set',
              'title' => esc_html__('Layout Style', 'ekko'),
              'subtitle' => esc_html__('Select the general width for the entire site.', 'ekko'),
              'options' => array(
                  'full-width' => 'Full-Width',
                  'boxed' => 'Boxed'
               ),
              'default' => 'full-width'
          ),
          array(
              'id' => 'tek-layout-boxed-width',
              'type' => 'slider',
              'title' => esc_html__( 'Content Width', 'ekko' ),
              'subtitle' => esc_html__( 'Control the width of the boxed content area.', 'ekko' ),
              'default' => 1560,
              'min' => 1280,
              'max' => 1920,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-boxed-body-bg',
              'type' => 'background',
              'transparent' => false,
              'title' => esc_html__('Body Background Settings', 'ekko'),
              'subtitle' => esc_html__('Option available only if the layout style Boxed is selected. Configure the body background settings.', 'ekko'),
              'preview' => false,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-fw-content-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Content Background Color', 'ekko'),
              'subtitle' => esc_html__('Select the content background color.', 'ekko'),
              'default' => '',
              'validate' => 'color'
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Download-Window',
      'title' => esc_html__('Footer', 'ekko'),
      'desc' => esc_html__('Edit the footer bar, upper footer & lower footer general settings.', 'ekko'),
      'fields' => array(

          array(
              'id' => 'tek-footer-fixed',
              'type' => 'switch',
              'title' => esc_html__('Fixed Footer', 'ekko'),
              'subtitle' => esc_html__('Enable/disable the footer fixed scroll effect.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-footer-bar',
              'type' => 'switch',
              'title' => esc_html__('Footer Bar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the footer bar. Contains footer menu and social icons.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-upper-footer',
              'type' => 'switch',
              'title' => esc_html__('Upper Footer', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the upper footer. Contains footer widget areas.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-upper-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Upper Footer Background', 'ekko'),
              'subtitle' => esc_html__('Select the upper footer background color.', 'ekko'),
              'default' => '#0a0a0a',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-lower-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Lower Footer Background', 'ekko'),
              'subtitle' => esc_html__('Select the lower footer background color.', 'ekko'),
              'default' => '#0a0a0a',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-typo',
              'type' => 'typography',
              'title' => esc_html__('Footer Typography', 'ekko'),
              'subtitle' => esc_html__('Edit the typography settings of the footer.', 'ekko'),
              'google' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'text-transform' => true,
              'color' => false,
              'text-align' => false,
              'letter-spacing' => true,
              'all_styles' => false,
              'default' => array(
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'text-transform' => '',
              ),
              'units' => 'px',
          ),
          array(
              'id' => 'tek-footer-heading-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Heading Color', 'ekko'),
              'subtitle' => esc_html__('Select the text color used for the footer widget titles.', 'ekko'),
              'default' => '#ffffff',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Footer Text Color', 'ekko'),
              'subtitle' => esc_html__('Select the text color used for the footer widget paragraphs.', 'ekko'),
              'default' => '#ffffff',
              'validate' => 'color'
          ),
          array(
                'id' => 'tek-footer-link-color',
                'type' => 'link_color',
                'title' => esc_html__( 'Footer Link Color', 'ekko' ),
                'subtitle' => esc_html__('Select the text color used for the footer links.', 'ekko'),
                'active' => false,
                'visited' => false,
          ),
          array(
              'id' => 'tek-footer-link-hover-effect',
              'type' => 'button_set',
              'title' => esc_html__('Footer Link Hover Effect', 'ekko'),
              'subtitle' => esc_html__('Select the hover effect on footer links.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default-footer-link-effect' => 'Default',
                  'underline-effect' => 'Underline animation',
              ),
              'default' => 'underline-effect',
          ),
          array(
              'id' => 'tek-footer-text',
              'type' => 'editor',
              'title' => esc_html__('Copyright Text', 'ekko'),
              'subtitle' => esc_html__('Enter footer bottom copyright text', 'ekko'),
              'default' => 'Ekko by KeyDesign. All rights reserved.',
              'args' => array(
                  'teeny' => true,
                  'textarea_rows' => 3,
                  'media_buttons' => false,
              ),
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Font-Window',
      'title' => esc_html__('Typography', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Aa',
      'title' => esc_html__('General Fonts', 'ekko'),
      'desc' => esc_html__('Customize the font properties across the entire website. Choose from over 800 open-source Google fonts, free for commercial use.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
            'id'   => 'tek-typography-info',
            'type' => 'info',
            'desc' => esc_html__('Important! Resetting this section will result in losing the demo imported settings and default to the theme original settings.', 'ekko')
          ),
          array(
              'id' => 'tek-default-typo',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'ekko'),
              'subtitle' => esc_html__('Configure the global body font typography.', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'all_styles' => false,
              'units' => 'px',
              'default' => array(
                  'color' => '#838383',
                  'font-weight' => '400',
                  'font-family' => 'Roboto',
              ),
          ),
          array(
              'id' => 'tek-h1-heading',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H1 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                  'font-weight' => '600',
                  'font-family' => 'Josefin Sans',
              ),
          ),
          array(
              'id' => 'tek-h2-heading',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H2 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                  'font-weight' => '600',
                  'font-family' => 'Josefin Sans',
              ),
          ),
          array(
              'id' => 'tek-h3-heading',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H3 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                  'font-weight' => '700',
                  'font-family' => 'Roboto',
              ),
          ),
          array(
              'id' => 'tek-h4-heading',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H4 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                  'font-weight' => '500',
                  'font-family' => 'Roboto',
              ),
          ),
          array(
              'id' => 'tek-h5-heading',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H5 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
              'default' => array(
                  'font-weight' => '500',
                  'font-family' => 'Roboto',
              ),
          ),
          array(
              'id' => 'tek-h6-heading',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'ekko'),
              'subtitle' => esc_html__('Configure H6 heading typography.', 'ekko'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Font-Name',
      'title' => esc_html__('Typekit Fonts', 'ekko'),
      'desc' => esc_html__('Typekit fonts are premium fonts that can be used only with an active monthly subscription to Adobe CC. The full list of Adobe fonts: https://fonts.adobe.com/', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-typekit-switch',
            'type' => 'switch',
            'title' => esc_html__('Enable Typekit', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable Typekit fonts.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-typekit',
            'type' => 'text',
            'title' => esc_html__('Typekit ID', 'ekko'),
            'subtitle' => esc_html__('Add Typekit ID. Only published data is accessible. Please make sure that any changes of a kit are updated.', 'ekko'),
            'mode' => 'text',
            'default' => '',
            'theme' => 'chrome',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-typekit-selector',
            'type' => 'text',
            'title' => esc_html__('Body Typography', 'ekko'),
            'subtitle' => esc_html__('Add the font family name used for the main body typography.', 'ekko'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-heading-typekit-selector',
            'type' => 'text',
            'title' => esc_html__('Headings Typography', 'ekko'),
            'subtitle' => esc_html__('Add the font family name used for the main headings (H1 to H6) typography.', 'ekko'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Text-Effect',
      'title' => esc_html__('Custom Fonts', 'ekko'),
      'desc' => esc_html__('Upload your own custom fonts. Only .ttf and .woff files are required.', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id'=>'tek-primary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('Primary Custom Font', 'ekko'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-primary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('Primary .ttf File', 'ekko'),
            'subtitle' => esc_html__('Upload primary font .ttf file.', 'ekko'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
        ),
        array(
            'id' => 'tek-primary-woff-font',
            'type' => 'media',
            'title' => esc_html__('Primary .woff File', 'ekko'),
            'subtitle' => esc_html__('Upload primary font .woff file.', 'ekko'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
        ),
        array(
            'id'=>'tek-primary-font-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-secondary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('Secondary Custom Font', 'ekko'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-secondary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('Secondary .ttf File', 'ekko'),
            'subtitle' => esc_html__('Upload secondary font .ttf file.', 'ekko'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
        ),
        array(
            'id' => 'tek-secondary-woff-font',
            'type' => 'media',
            'title' => esc_html__('Secondary .woff File', 'ekko'),
            'subtitle' => esc_html__('Upload secondary font .woff file.', 'ekko'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
        ),
        array(
            'id'=>'tek-secondary-font-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-custom-font-selector-section-start',
            'type' => 'section',
            'title' => esc_html__('Custom Font Selector', 'ekko'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-body-custom-font',
            'type' => 'select',
            'title' => esc_html__('Body Typography', 'ekko'),
            'subtitle' => esc_html__('Select custom font to be used for the body text.', 'ekko'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
        ),
        array(
            'id' => 'tek-headings-custom-font',
            'type' => 'select',
            'title' => esc_html__('Headings Typography', 'ekko'),
            'subtitle' => esc_html__('Select custom font to be used for the headings text.', 'ekko'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
        ),
        array(
            'id'=>'tek-custom-font-selector-section-end',
            'type' => 'section',
            'indent' => false,
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Text-Box',
      'title' => esc_html__('Responsive Fonts', 'ekko'),
      'desc' => esc_html__('Overwrite the default typography ( font sizes and line heights ) on mobile & tablet', 'ekko'),
      'subsection' => true,
      'fields' => array(
      array(
              'id' => 'tek-default-typo-mobile',
              'type' => 'typography',
              'title' => esc_html__('Body Typography', 'ekko'),
              'subtitle' => esc_html__('Overwrite body typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h1-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H1 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H1 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H2 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H2 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H3 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H3 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H4 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H4 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H5 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H5 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('H6 Heading', 'ekko'),
              'subtitle' => esc_html__('Overwrite H6 typography on mobile & tablet ', 'ekko'),
              'line-height' => true,
              'text-align' => false,
              'color' => false,
              'units' => 'px',
          ),

      )
  ) );

  if (class_exists('WooCommerce')) {

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Shopping-Bag',
        'title' => esc_html__('WooCommerce', 'ekko'),
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Shop-4',
        'title' => esc_html__('Shop Page', 'ekko'),
        'desc' => esc_html__('Edit general setting for the main shop page. Select the product catalog style, products to show per page and number of product columns.', 'ekko'),
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'tek-woo-catalog-style',
                'type' => 'button_set',
                'title' => esc_html__('Catalog Style', 'ekko'),
                'subtitle' => esc_html__('Select the product box template style', 'ekko'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-minimal-style' => 'Minimal',
                    'woo-detailed-style' => 'Detailed',
                ),
                'default' => 'woo-detailed-style'
            ),
            array(
                'id' => 'tek-woo-products-number',
                'type' => 'text',
                'title' => esc_html__('Products per Page', 'ekko'),
                'subtitle' => esc_html__('Change the products number listed per page.', 'ekko'),
                'default' => '9',
            ),
            array(
                'id' => 'tek-woo-shop-columns',
                'type' => 'button_set',
                'title' => esc_html__('Shop Layout', 'ekko'),
                'subtitle' => esc_html__('Select the number of product columns', 'ekko'),
                'desc' => esc_html__('Note: The sidebar is visible only on 2 columns layout', 'ekko'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-2-columns' => '2 Columns + Sidebar',
                    'woo-3-columns' => '3 Columns',
                    'woo-4-columns' => '4 Columns',
                ),
                'default' => 'woo-3-columns'
            ),
            array(
                'id' => 'tek-woo-sidebar-position',
                'type' => 'button_set',
                'title' => esc_html__('Sidebar Position', 'ekko'),
                'subtitle' => esc_html__('Select sidebar position', 'ekko'),
                'options'  => array(
                    'woo-sidebar-left' => 'Left',
                    'woo-sidebar-right' => 'Right',
                ),
                'required' => array('tek-woo-shop-columns','equals','woo-2-columns'),
                'default' => 'woo-sidebar-right'
            ),
            array(
                'id' => 'tek-woo-mini-cart-view-text',
                'type' => 'text',
                'title' => esc_html__('View cart text', 'ekko'),
                'subtitle' => esc_html__('Overwrite the "View cart" button text on mini cart widget.', 'ekko'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-checkout-text',
                'type' => 'text',
                'title' => esc_html__('Checkout text', 'ekko'),
                'subtitle' => esc_html__('Overwrite the "Checkout" button text on mini cart widget.', 'ekko'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-empty-text',
                'type' => 'text',
                'title' => esc_html__('Empty cart text', 'ekko'),
                'subtitle' => esc_html__('Overwrite the "Your cart is currently empty." text on mini cart widget.', 'ekko'),
                'default' => ''
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Tag',
        'title' => esc_html__('Product Page', 'ekko'),
        'desc' => esc_html__('Edit general settings for the single product page.', 'ekko'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-woo-single-header',
              'type' => 'switch',
              'title' => esc_html__('Product Title Area', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable title area on single product pages.', 'ekko'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Product Sidebar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable sidebar on single product pages.', 'ekko'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar-position',
              'type' => 'button_set',
              'title' => esc_html__('Sidebar Position', 'ekko'),
              'subtitle' => esc_html__('Select sidebar position', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'woo-single-sidebar-left' => 'Left',
                  'woo-single-sidebar-right' => 'Right',
              ),
              'required' => array('tek-woo-single-sidebar','equals','1'),
              'default' => 'woo-single-sidebar-right'
          ),
          array(
              'id' => 'tek-woo-single-image-position',
              'type' => 'button_set',
              'title' => esc_html__('Featured Image Position', 'ekko'),
              'subtitle' => esc_html__('Control the product image position.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-image-left' => 'Left',
                  'woo-image-right' => 'Right',
              ),
              'default' => 'woo-image-left'
          ),
          array(
              'id' => 'tek-woo-single-gallery',
              'type' => 'button_set',
              'title' => esc_html__('Gallery Template', 'ekko'),
              'subtitle' => esc_html__('Control the product image gallery layout.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-gallery-thumbnails' => 'Thumbnails',
                  'woo-gallery-list' => 'List',
              ),
              'default' => 'woo-gallery-thumbnails'
          ),
        )
    ) );
  }

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Photos',
      'title' => esc_html__('Portfolio', 'ekko'),
      'desc' => esc_html__('Edit the single portfolio page settings', 'ekko'),
      'fields' => array(
        array(
            'id'=>'tek-portfolio-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('General Settings', 'ekko'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-cpt',
            'type' => 'switch',
            'title' => esc_html__('Enable Portfolio', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the portfolio custom post type. Refresh the page for changes to take effect.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-slug',
            'type' => 'text',
            'title' => esc_html__('Portfolio Slug', 'ekko'),
            'subtitle' => __('Overwrite the portfolio base slug: domain.com/<strong>portfolio</strong>/portfolio-item-slug', 'ekko'),
            'desc' => __('<strong>Note:</strong> When you change this setting you need to <a href="https://www.ekko-wp.com/documentation/knowledge-base/flush-rewrite-rules/" target="_blank">flush rewrite rules</a>.', 'ekko'),
            'default' => '',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
        ),
        array(
            'id'=>'tek-portfolio-settings-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('Portfolio Single Page Settings', 'ekko'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the previous/next portfolio pagination. Pagination section will be displayed below the content.', 'ekko'),
            'default' => false
        ),
        array(
            'id' => 'tek-portfolio-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Previous" Text', 'ekko'),
            'subtitle' => esc_html__('Overwrite the "Previous" text on portfolio single page navigation.', 'ekko'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Next" Text', 'ekko'),
            'subtitle' => esc_html__('Overwrite the "Next" text on portfolio single page navigation.', 'ekko'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Portfolios', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable related portfolio items on single portfolio pages.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Portfolios Title', 'ekko'),
            'subtitle' => esc_html__('Edit the related portfolios section title.', 'ekko'),
            'default' => 'Related projects',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-number',
            'type' => 'slider',
            'title' => esc_html__( 'Number of Related Portfolio Items', 'ekko' ),
            'subtitle' => esc_html__( 'Select the number of related portfolio items.', 'ekko' ),
            'default' => 3,
            'max' => 20,
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-button-text',
            'type' => 'text',
            'title' => esc_html__('Related Portfolio Button Text', 'ekko'),
            'subtitle' => esc_html__('Edit the related portfolio items button text. Default is set to "View project".', 'ekko'),
            'default' => 'View project',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-comments',
            'type' => 'switch',
            'title' => esc_html__('Comments Section', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the comments section below the content.', 'ekko'),
            'default' => false
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-end',
            'type' => 'section',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => false,
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Newspaper',
      'title' => esc_html__('Blog', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Notepad',
      'title' => esc_html__('Blog Settings', 'ekko'),
      'desc' => esc_html__('Edit blog posts page & archive general settings', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-blog-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('General Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Navbar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable transparent navigation on blog posts page.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-header-template',
              'type' => 'button_set',
              'title' => esc_html__('Blog Header Template', 'ekko'),
              'subtitle' => esc_html__('Select the blog header template style.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-header-titlebar' => 'Title bar',
                  'blog-header-revslider' => 'Revolution slider',
              ),
              'default' => 'blog-header-titlebar'
          ),
          array(
              'id' => 'tek-blog-template',
              'type' => 'button_set',
              'title' => esc_html__('Blog Articles Template', 'ekko'),
              'subtitle' => esc_html__('Select the blog articles template style.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'img-top-list' => 'List top image',
                  'img-left-list' => 'List left image',
                  'minimal-list' => 'List minimal',
                  'minimal-grid' => 'Grid minimal',
                  'detailed-grid' => 'Grid detailed',
              ),
              'default' => 'img-top-list'
          ),
          array(
              'id' => 'tek-blog-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Display Sidebar', 'ekko'),
              'subtitle' => esc_html__('Enable disable blog sidebar.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-listing-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Sticky Sidebar', 'ekko'),
              'subtitle' => esc_html__('Enable sticky sidebar for blog posts page.', 'ekko'),
              'default' => true,
              'required' => array(
                  'tek-blog-sidebar',
                  'equals',
                  true
              ),
          ),
          array(
              'id' => 'tek-blog-excerpt',
              'type' => 'text',
              'title' => esc_html__('Blog Post Excerpt', 'ekko'),
              'subtitle' => esc_html__('Edit articles excerpt length on blog page.', 'ekko'),
              'default' => '20'
          ),
          array(
              'id' => 'tek-blog-read-more-text',
              'type' => 'text',
              'title' => esc_html__('Read more text', 'ekko'),
              'subtitle' => esc_html__('Overwrite "Read more" text on blog articles.', 'ekko'),
              'desc' => esc_html__('This option overwrites the Read More text with the assigned blog page in "Settings > Reading" and blog archives, not the blog element.', 'ekko'),
              'default' => ''
          ),
          array(
              'id'=>'tek-blog-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-blog-title-section-start',
              'type' => 'section',
              'title' => esc_html__('Blog Header Title Bar', 'ekko'),
              'indent' => true,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
          array(
              'id' => 'tek-blog-title-switch',
              'type' => 'switch',
              'title' => esc_html__('Blog Page Title', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the page title of the assigned blog page.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-subtitle',
              'type' => 'text',
              'title' => esc_html__('Blog Page Subtitle', 'ekko'),
              'subtitle' => esc_html__('Add the subtitle text that displays in the page title bar of the assigned blog page.', 'ekko'),
              'default' => ''
          ),
          array(
              'id' => 'tek-blog-home-breadcrumbs',
              'type' => 'switch',
              'title' => esc_html__('Blog Breadcrumbs', 'ekko'),
              'subtitle' => esc_html__('Turn on to show the breadcrumbs for the assigned blog page.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-header-text-align',
              'type' => 'button_set',
              'title' => esc_html__('Title Bar Text Alignment', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-blog-title-switch','equals', true),
              'subtitle' => esc_html__('Select Text Alignment in the Title Bar Area.', 'ekko'),
              'default' => 'blog-title-left'
          ),
          array(
              'id' => 'tek-blog-titlebar-background',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Background Color', 'ekko'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default background color.', 'ekko'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('Title Bar Text Color', 'ekko'),
              'default' => '',
              'subtitle' => esc_html__('Use this colorpicker to override the title bar default text color.', 'ekko'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-header-form',
              'type' => 'switch',
              'title' => esc_html__('Show Newsletter Form', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable a Contact Form 7 form in blog page header area.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-header-form-id',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Newsletter Form Title', 'ekko'),
              'subtitle' => esc_html__('Select the Contact Form 7 to be used as a newsletter in the title bar area.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'required' => array('tek-blog-header-form','equals', true),
          ),
          array(
              'id'=>'tek-blog-title-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
          array(
              'id'=>'tek-blog-revslider-section-start',
              'type' => 'section',
              'title' => esc_html__('Blog Header Revolution Slider', 'ekko'),
              'indent' => true,
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
          ),
          array(
              'id' => 'tek-blog-header-slider-alias',
              'type' => 'text',
              'title' => esc_html__('Revolution Slider Alias Name', 'ekko'),
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
              'default' => ''
          ),
          array(
              'id'=>'tek-blog-revslider-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Pen',
      'title' => esc_html__('Single Post', 'ekko'),
      'desc' => esc_html__('Edit single blog posts general settings', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-single-post-template',
            'type' => 'button_set',
            'title' => esc_html__('Single Post Template', 'ekko'),
            'subtitle' => esc_html__('Select the single post template style.', 'ekko'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'single-post-layout-one' => 'Classic',
                'single-post-layout-two' => 'Modern',
            ),
            'default' => 'single-post-layout-one'
        ),
        array(
            'id' => 'tek-blog-single-sidebar',
            'type' => 'switch',
            'title' => esc_html__('Display Sidebar', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the single post sidebar.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-sticky-sidebar',
            'type' => 'switch',
            'title' => esc_html__('Sticky Sidebar', 'ekko'),
            'subtitle' => esc_html__('Enable sticky sidebar for single blog posts.', 'ekko'),
            'default' => true,
            'required' => array(
                'tek-blog-single-sidebar',
                'equals',
                true
            ),
        ),
        array(
          'id'       => 'tek-blog-social-sharing-buttons',
          'type'     => 'checkbox',
          'title'    => __('Social Sharing Buttons', 'ekko'),
          'subtitle' => __('Select social sharing buttons visible on single post', 'ekko'),
          'options'  => array(
              '1' => 'Facebook',
              '2' => 'Twitter',
              '3' => 'Pinterest',
              '4' => 'LinkedIn'
          ),
          'default' => array(
              '1' => '1',
              '2' => '1',
              '3' => '1',
              '4' => '1'
          ),
        ),
        array(
            'id' => 'tek-author-box',
            'type' => 'switch',
            'title' => esc_html__('Author Box', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable author box below post content.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-single-nav',
            'type' => 'switch',
            'title' => esc_html__('Previous/Next Pagination', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the previous/next post pagination for single posts.', 'ekko'),
            'default' => false
        ),
        array(
            'id' => 'tek-blog-single-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Previous" Text', 'ekko'),
            'subtitle' => esc_html__('Overwrite the "Previous" text on single blog post navigation.', 'ekko'),
            'default' => '',
            'required' => array(
              'tek-blog-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-blog-single-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('Navigation "Next" Text', 'ekko'),
            'subtitle' => esc_html__('Overwrite the "Next" text on single blog post navigation.', 'ekko'),
            'default' => '',
            'required' => array(
              'tek-blog-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-related-posts',
            'type' => 'switch',
            'title' => esc_html__('Related Posts', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable related posts on single post pages.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('Related Posts Title', 'ekko'),
            'default' => 'Related articles',
            'required' => array(
                      'tek-related-posts',
                      'equals',
                      true
                  ),
        ),
        array(
                  'id'       => 'tek-related-posts-number',
            'type'     => 'slider',
                  'title'    => esc_html__( 'Number of Related Posts', 'ekko' ),
                  'subtitle' => esc_html__( 'Controls the number of posts that display under related posts section.', 'ekko' ),
                  'default'  => 3,
                  'max'      => 20,
                  'required' => array(
                      'tek-related-posts',
                      'equals',
                      true
                  ),
          )
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Bookmark',
      'title' => esc_html__('Blog Meta', 'ekko'),
      'desc' => esc_html__('The settings available with this page control the main blog page, single blog post page and blog archive pages. These settings do not overwrite the Post Grid or the Masonry Grid element settings.', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-post-meta',
            'type' => 'switch',
            'title' => esc_html__('Post Meta', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta on blog posts. You can also control individual meta settings below.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-date',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Date', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta date.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-author',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Author', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta author.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-categories',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Categories', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta categories.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-comments',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Comments', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta comments.', 'ekko'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-tags',
            'type' => 'switch',
            'title' => esc_html__('Post Meta Tags', 'ekko'),
            'subtitle' => esc_html__('Enable/Disable the post meta tags.', 'ekko'),
            'default' => true
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Layer',
      'title' => esc_html__('Elements', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Pencil-Ruler',
      'title' => esc_html__('Elements Settings', 'ekko'),
      'desc' => esc_html__('Elements general settings that are applied site-wide.', 'ekko'),
      'subsection' => true,
      'fields' => array(

          array(
              'id' => 'tek-global-radius',
              'type' => 'spinner',
              'title' => esc_html__('Border Radius', 'ekko'),
              'subtitle' => esc_html__('Edit the border radius for all elements. Pixel value.', 'ekko'),
              'min' => 0,
              'max' => 25,
              'default' => 25,
          ),

          array(
              'id' => 'tek-cards-border-radius',
              'type' => 'spinner',
              'title' => esc_html__('Cards Border Radius', 'ekko'),
              'subtitle' => esc_html__('Edit the border radius for card elements. Pixel value.', 'ekko'),
              'min' => 0,
              'max' => 25,
              'default' => 5,
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-On-off',
      'title' => esc_html__('Button', 'ekko'),
      'desc' => esc_html__('Buttons general settings', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-button-typo',
            'type' => 'typography',
            'title' => esc_html__('Button Typography', 'ekko'),
            'subtitle' => esc_html__('Control the typography for all buttons.', 'ekko'),
            'line-height' => false,
            'text-align' => false,
            'color' => true,
            'text-transform' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
              'font-size' => '14px',
              'letter-spacing' => '1',
            ),
        ),

        array(
            'id' => 'tek-btn-border',
            'type' => 'spinner',
            'title'   => esc_html__('Button Border Width', 'ekko'),
            'subtitle' => esc_html__('Control the border width for buttons. Pixel value.', 'ekko'),
            'min' => 0,
            'max' => 10,
            'default' => 2,
        ),

        array(
            'id' => 'tek-btn-radius',
            'type' => 'spinner',
            'title' => esc_html__('Button Border Radius', 'ekko'),
            'subtitle' => esc_html__('Control the border radius for buttons. Pixel value.', 'ekko'),
            'min' => 0,
            'default' => 30,
        ),

        array(
            'id' => 'tek-btn-padding',
            'type' => 'spacing',
            'mode' => 'padding',
            'units' => array('em', 'px'),
            'title' => esc_html__('Button Box Padding', 'ekko'),
            'subtitle' => esc_html__('Controls the top/right/bottom/left padding of the button element.', 'ekko'),
            'default' => array(
                'padding-top' => '13px',
                'padding-right' => '30px',
                'padding-bottom' => '13px',
                'padding-left' => '30px',
                'units' => 'px',
            )
        ),

        array(
            'id' => 'tek-btn-effect',
            'type' => 'button_set',
            'title' => esc_html__('Button Hover Effect', 'ekko'),
            'subtitle' => esc_html__('Select the button hover effect.', 'ekko'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                '' => 'Default',
                'btn-hover-1' => 'Float shadow',
                'btn-hover-2' => 'Sweep to right',
            ),
            'default' => 'btn-hover-2'
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Envelope',
      'title' => esc_html__('Contact Form', 'ekko'),
      'desc' => esc_html__('Forms general settings.', 'ekko'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-contact-form-typo',
            'type' => 'typography',
            'title' => esc_html__('Form Typography', 'ekko'),
            'subtitle' => esc_html__('Control the typography for form fields.', 'ekko'),
            'google' => false,
            'font-family' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'color' => true,
            'text-align' => false,
            'text-transform' => true,
            'all_styles' => false,
            'units' => 'px',
        ),
        array(
          'id' => 'tek-contact-form-bg-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Form Background Color', 'ekko'),
          'subtitle' => esc_html__('Controls the background color of form fields.', 'ekko'),
          'default' => '',
          'validate' => 'color'
        ),
        array(
          'id' => 'tek-contact-form-placeholder-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('Form Placeholder Text Color', 'ekko'),
          'subtitle' => esc_html__('Controls the placeholder text color of form fields.', 'ekko'),
          'default' => '',
          'validate' => 'color'
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Repair',
      'title' => esc_html__('Utility Pages', 'ekko'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-File-Search',
      'title' => esc_html__('Search Page', 'ekko'),
      'desc' => esc_html__('Seach page general settings', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-search-page-section-start',
              'type' => 'section',
              'title' => esc_html__('Search Page General Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('Transparent Navbar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable transparent navigation on search page', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-search-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Display Sidebar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the page sidebar.', 'ekko'),
              'default' => true
          ),
          array(
              'id' => 'tek-search-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('Sticky Sidebar', 'ekko'),
              'subtitle' => esc_html__('Enable/Disalbe sticky sidebar functionality.', 'ekko'),
              'default' => true,
              'required' => array(
                  'tek-search-sidebar',
                  'equals',
                  true
              ),
          ),
          array(
              'id' => 'tek-search-title',
              'type' => 'text',
              'title' => esc_html__('Page title', 'ekko'),
              'subtitle' => esc_html__('Overwrite the "Search results for" page title.', 'ekko'),
              'default' => ''
          ),
          array(
              'id'=>'tek-search-page-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-search-form-section-start',
              'type' => 'section',
              'title' => esc_html__('Search Form Settings', 'ekko'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-form-content',
              'type' => 'button_set',
              'title' => esc_html__('Search results content', 'ekko'),
              'subtitle' => esc_html__('Select the type of content to be displayed in search results.', 'ekko'),
              'description' => esc_html__('Settings used for the form displayed in Topbar or Main Menu header area.', 'ekko'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'search-all' => 'All post types',
                  'post' => 'Posts',
                  'portfolio' => 'Portfolio',
                  'product' => 'Products',
              ),
              'default' => 'search-all',
          ),
          array(
              'id'=>'tek-search-form-section-end',
              'type' => 'section',
              'indent' => false,
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Error-404Window',
      'title' => esc_html__('404 Page', 'ekko'),
      'desc' => esc_html__('404 page general settings', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-404-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'ekko'),
              'subtitle' => esc_html__('Set the 404 page title.', 'ekko'),
              'default' => 'Error 404'
          ),
          array(
              'id' => 'tek-404-subtitle',
              'type' => 'text',
              'title' => esc_html__('Page Subtitle', 'ekko'),
              'subtitle' => esc_html__('Set the 404 page subtitle.', 'ekko'),
              'default' => 'This page could not be found!'
          ),
          array(
              'id' => 'tek-404-back',
              'type' => 'text',
              'title' => esc_html__('Back to Homepage Button Text', 'ekko'),
              'subtitle' => esc_html__('Set the 404 back to homepage button text.', 'ekko'),
              'default' => 'Back to homepage'
          )
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Lock-2',
      'title' => esc_html__('Maintenance Page', 'ekko'),
      'desc' => esc_html__('Maintenance mode will be activated only for users that are not logged in.', 'ekko'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-maintenance-mode',
              'type' => 'switch',
              'title' => esc_html__('Enable Maintenance Mode', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable maintenance mode.', 'ekko'),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-title',
              'type' => 'text',
              'title' => esc_html__('Page Title', 'ekko'),
              'subtitle' => esc_html__('Edit maintenance page title ', 'ekko'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => 'ekko is in the works!'
          ),
          array(
              'id' => 'tek-maintenance-content',
              'type' => 'editor',
              'title' => esc_html__('Page Content', 'ekko'),
              'subtitle' => esc_html__('Edit maintenance page content ', 'ekko'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
                  'args'   => array(
                'teeny'  => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
                    )
          ),

          array(
              'id' => 'tek-maintenance-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('Page Background Image', 'ekko'),
              'subtitle' => esc_html__('Upload page background image.', 'ekko'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
          ),

          array(
            'id' => 'tek-maintenance-text-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('Text Color', 'ekko'),
            'subtitle' => esc_html__('Overwrite text color. If none selected, the default theme color will be used.', 'ekko'),
            'required' => array('tek-maintenance-mode','equals', true),
            'default' => '',
            'validate' => 'color'
          ),

          array(
              'id' => 'tek-maintenance-countdown',
              'type' => 'switch',
              'title' => esc_html__('Enable Countdown', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable the countdown timer.', 'ekko'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-count-day',
              'type' => 'text',
              'title' => esc_html__('End Day', 'ekko'),
              'subtitle' => esc_html__('Enter day value. Eg. 05', 'ekko'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-month',
              'type' => 'text',
              'title' => esc_html__('End Month', 'ekko'),
              'subtitle' => esc_html__('Enter month value. Eg. 09', 'ekko'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-year',
              'type' => 'text',
              'title' => esc_html__('End Year', 'ekko'),
              'subtitle' => esc_html__('Enter year value. Eg. 2020', 'ekko'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-subscribe',
              'type' => 'switch',
              'title' => esc_html__('Enable Contact Form', 'ekko'),
              'subtitle' => esc_html__('Enable/Disable contact form on page.', 'ekko'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-form-select',
              'type' => 'select',
              'title' => esc_html__('Contact Form Plugin', 'ekko'),
              'required' => array('tek-maintenance-subscribe','equals',true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-maintenance-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('Contact Form 7 Title', 'ekko'),
              'required' => array('tek-maintenance-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('Ninja Form ID', 'ekko'),
              'required' => array('tek-maintenance-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('Gravity Form ID', 'ekko'),
              'required' => array('tek-maintenance-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-wp-formid',
              'type' => 'text',
              'title' => esc_html__('WP Form ID', 'ekko'),
              'required' => array('tek-maintenance-form-select','equals','4'),
              'default' => ''
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Coding',
      'title' => esc_html__('Custom CSS/JS', 'ekko'),
      'fields' => array(
          array(
              'id' => 'tek-css',
              'type' => 'ace_editor',
              'title' => esc_html__('CSS', 'ekko'),
              'subtitle' => esc_html__('Enter the custom CSS code in the side field. Do not include any tags or HTML in the field. Custom CSS added here will overwrite the theme CSS.', 'ekko'),
              'mode' => 'css',
              'theme' => 'chrome',
          ),
          array(
                  'id' => 'tek-javascript',
                  'type' => 'ace_editor',
                  'title' => esc_html__( 'Javascript', 'ekko' ),
                  'subtitle' => esc_html__( 'Enter the custom JavaScript code in the side field.', 'ekko' ),
                  'mode' => 'html',
                  'theme' => 'chrome',
              ),
      )
  ) );
