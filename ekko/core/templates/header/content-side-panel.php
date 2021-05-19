<?php
  $panel_wrapper_class = $button_hover_class = $panel_css_class = $social_profiles = '';

  $social_profiles = ekko_get_option( 'tek-social-profiles' );

  if ( '' != ekko_get_option( 'tek-panel-css-class' ) ) {
      $panel_css_class = ekko_get_option( 'tek-panel-css-class' );
  }

  if ( '' != ekko_get_option( 'tek-btn-effect') ) {
    $button_hover_class = ekko_get_option( 'tek-btn-effect' );
  }

  $panel_wrapper_class = implode(' ', array('kd-side-panel', $button_hover_class, $panel_css_class));
?>
  <div class="panel-screen-overlay"></div>
  <div class="<?php echo esc_attr($panel_wrapper_class); ?>">
    <div class="kd-panel-wrapper">
      <div class="kd-panel-header">
        <?php if ( '' != ekko_get_option( 'tek-panel-title' ) ) : ?>
            <h3 class="kd-panel-title"><?php echo esc_html( ekko_get_option( 'tek-panel-title' ) ); ?></h3>
        <?php endif; ?>
        <?php if ( '' != ekko_get_option( 'tek-panel-subtitle' ) ) : ?>
            <div class="kd-panel-subtitle">
              <?php echo wp_kses_post( ekko_get_option( 'tek-panel-subtitle' ) ); ?>
            </div>
        <?php endif; ?>
        <?php if ( false != ekko_get_option( 'tek-panel-contact-links' ) ) : ?>
          <div class="kd-panel-phone-email">
          <?php if ( '' != ekko_get_option( 'tek-business-phone' ) ) : ?>
              <div class="kd-panel-phone">
                  <i class="fa fa-phone-alt"></i>
                  <a href="tel:<?php echo esc_attr( ekko_get_option( 'tek-business-phone' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-business-phone' ) ); ?></a>
              </div>
          <?php endif; ?>
          <?php if ( '' != ekko_get_option( 'tek-secondary-business-phone' ) ) : ?>
              <div class="kd-panel-phone panel-secondary-phone">
                  <i class="fa fa-mobile-alt"></i>
                  <a href="tel:<?php echo esc_attr( ekko_get_option( 'tek-secondary-business-phone' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-secondary-business-phone' ) ); ?></a>
              </div>
          <?php endif; ?>
          <?php if ( '' != ekko_get_option( 'tek-business-email' ) ) : ?>
              <div class="kd-panel-email">
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:<?php echo esc_attr( ekko_get_option( 'tek-business-email' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-business-email' ) ); ?></a>
              </div>
          <?php endif; ?>
          </div>
        <?php endif; ?>
        <div class="kd-panel-contact">
          <?php if ( '' != ekko_get_option( 'tek-panel-form-select' ) ) : ?>
               <?php if ( ekko_get_option( 'tek-panel-form-select' ) == '1' && ekko_get_option( 'tek-panel-contactf7-formid' ) != '') : ?>
                 <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( ekko_get_option( 'tek-panel-contactf7-formid' ) ).'"]'); ?>
               <?php elseif ( ekko_get_option( 'tek-panel-form-select' ) == '2' && ekko_get_option( 'tek-panel-ninja-formid' ) != '') : ?>
                 <?php echo do_shortcode('[ninja_form id="'. esc_attr( ekko_get_option( 'tek-panel-ninja-formid' ) ).'"]'); ?>
               <?php elseif ( ekko_get_option( 'tek-panel-form-select' ) == '3' && ekko_get_option( 'tek-panel-gravity-formid' ) != '') : ?>
                 <?php echo do_shortcode('[gravityform id="'. esc_attr( ekko_get_option( 'tek-panel-gravity-formid' ) ).'" ajax="true"]'); ?>
               <?php elseif ( ekko_get_option( 'tek-panel-form-select' ) == '4' && ekko_get_option( 'tek-panel-wp-formid' ) != '') : ?>
                 <?php echo do_shortcode('[wpforms id="'. esc_attr( ekko_get_option( 'tek-panel-wp-formid' ) ).'"]'); ?>
               <?php elseif ( ekko_get_option( 'tek-panel-form-select' ) == '5' && ekko_get_option( 'tek-panel-other-form-shortcode' ) != '') : ?>
                 <?php echo do_shortcode( esc_attr( ekko_get_option( 'tek-panel-other-form-shortcode' ) ) ); ?>
               <?php endif; ?>
          <?php endif; ?>
      </div>
      </div>
      <?php if ( ekko_get_option( 'tek-panel-socials' ) ) : ?>
        <div class="kd-panel-social-list">
          <?php if ( isset( $social_profiles ) && '' != $social_profiles ) {
            echo do_shortcode('[social_profiles]');
          } ?>
        </div>
      <?php endif; ?>
      <button type="button" class="panel-close" data-dismiss="side-panel">&times;</button>
  </div>
</div>
