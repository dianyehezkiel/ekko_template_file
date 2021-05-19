<?php
$favicon = ekko_get_option( 'tek-favicon' );
$maintenance_bg_image = ekko_get_option( 'tek-maintenance-bg-image' );
 ?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( isset( $favicon['url'] ) && '' != $favicon['url'] ) : ?>
      <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
        <link href="<?php echo esc_url( $favicon['url'] ); ?>" rel="icon">
      <?php endif; ?>
    <?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('maintenance-mode'); ?> style="background-image: url('<?php if ( isset( $maintenance_bg_image['url'] ) && '' != $maintenance_bg_image['url'] ) { echo esc_url( $maintenance_bg_image['url'] ); } ?>')">
    <div class="container section">
      <?php if ( ekko_get_option( 'tek-maintenance-title' ) ) :?>
        <h2 class="maintenance-title"><?php echo esc_html( ekko_get_option( 'tek-maintenance-title' ) ); ?></h2>
      <?php endif; ?>

      <?php if ( ekko_get_option( 'tek-maintenance-content' ) ) :?>
        <div class="maintenance-content"><?php echo wp_kses_post( ekko_get_option( 'tek-maintenance-content' ) ); ?></div>
      <?php endif; ?>

      <?php if ( ekko_get_option( 'tek-maintenance-countdown' ) ) :?>
        <?php if ( ekko_get_option( 'tek-maintenance-count-day' ) && ekko_get_option( 'tek-maintenance-count-month' ) && ekko_get_option( 'tek-maintenance-count-year' ) ) : ?>
          <?php echo do_shortcode('[tek_countdown starting_year="'.esc_attr( ekko_get_option( 'tek-maintenance-count-year' ) ).'" starting_month="'.esc_attr( ekko_get_option( 'tek-maintenance-count-month' ) ).'" starting_day="'.esc_attr( ekko_get_option( 'tek-maintenance-count-day' ) ).'" starting_hour=12" starting_minute="0" cd_text_days="Days" cd_text_hours="Hours" cd_text_minutes="Minutes" cd_text_seconds="Seconds"]'); ?>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ( ekko_get_option( 'tek-maintenance-subscribe' ) ) : ?>
         <?php if ( ekko_get_option( 'tek-maintenance-form-select' ) == '1' && ekko_get_option( 'tek-maintenance-contactf7-formid' ) != '' ) : ?>
           <div class="inline-cf">
             <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( ekko_get_option( 'tek-maintenance-contactf7-formid' ) ).'"]'); ?>
           </div>
         <?php elseif ( ekko_get_option( 'tek-maintenance-form-select' ) == '2' && ekko_get_option( 'tek-maintenance-ninja-formid' ) != '') : ?>
            <?php echo do_shortcode('[ninja_form id="'. esc_attr( ekko_get_option( 'tek-maintenance-ninja-formid' ) ).'"]'); ?>
         <?php elseif ( ekko_get_option( 'tek-maintenance-form-select' ) == '3' && ekko_get_option( 'tek-maintenance-gravity-formid' ) != '') : ?>
            <?php echo do_shortcode('[gravityform id="'. esc_attr( ekko_get_option( 'tek-maintenance-gravity-formid' ) ).'"]'); ?>
         <?php elseif ( ekko_get_option( 'tek-maintenance-form-select' ) == '4' && ekko_get_option( 'tek-maintenance-wp-formid' ) != '') : ?>
            <?php echo do_shortcode('[wpforms id="'. esc_attr( ekko_get_option( 'tek-maintenance-wp-formid' ) ).'"]'); ?>
        <?php endif; ?>
      <?php endif; ?>
      <?php wp_footer(); ?>
    </div>
  </body>
</html>
