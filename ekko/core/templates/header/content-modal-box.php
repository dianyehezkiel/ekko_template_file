<?php

  $modal_wrapper_class = $modal_css_class = $modal_template_class = '';

  $modal_bg_image = ekko_get_option( 'tek-modal-bg-image' );

  if ( '' != ekko_get_option( 'tek-modal-css-class' ) ) {
      $modal_css_class = ekko_get_option( 'tek-modal-css-class' );
  }

  $modal_wrapper_class = implode(' ', array('modal', 'fade', 'popup-modal', $modal_css_class));
?>
  <div class="<?php echo esc_attr($modal_wrapper_class); ?>" id="popup-modal" role="dialog">
    <div class="modal-content">
        <div class="row">
          <div class="col-sm-6 modal-content-contact">
            <?php if ( '' != ekko_get_option( 'tek-modal-title' ) ) : ?>
                <h3><?php echo esc_html( ekko_get_option( 'tek-modal-title' ) ); ?></h3>
            <?php endif; ?>
            <?php if ( '' != ekko_get_option( 'tek-modal-subtitle' ) ) : ?>
                <p><?php echo wp_kses_post( ekko_get_option( 'tek-modal-subtitle' ) ); ?></p>
            <?php endif; ?>
            <?php if ( false != ekko_get_option( 'tek-modal-contact-links' ) ) : ?>
              <?php if ( '' != ekko_get_option( 'tek-business-phone' ) ) : ?>
                  <div class="key-icon-box icon-default icon-left cont-left">
                      <i class="fa fa-phone-alt"></i>
                      <h4 class="service-heading"><a href="tel:<?php echo esc_attr( ekko_get_option( 'tek-business-phone' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-business-phone' ) ); ?></a></h4>
                  </div>
              <?php endif; ?>
              <?php if ( '' != ekko_get_option( 'tek-secondary-business-phone' ) ) : ?>
                  <div class="key-icon-box icon-default icon-left cont-left">
                      <i class="fa fa-mobile-alt"></i>
                      <h4 class="service-heading"><a href="tel:<?php echo esc_attr( ekko_get_option( 'tek-secondary-business-phone' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-secondary-business-phone' ) ); ?></a></h4>
                  </div>
              <?php endif; ?>
              <?php if ( '' != ekko_get_option( 'tek-business-email' ) ) : ?>
                  <div class="key-icon-box icon-default icon-left cont-left">
                      <i class="fa fa-envelope"></i>
                      <h4 class="service-heading"><a href="mailto:<?php echo esc_attr( ekko_get_option( 'tek-business-email' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-business-email' ) ); ?></a></h4>
                  </div>
              <?php endif; ?>
            <?php endif; ?>
            <?php if ( ekko_get_option( 'tek-modal-socials' ) ) : ?>
              <div class="kd-modal-social-list">
                <?php echo do_shortcode('[social_profiles]'); ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-sm-6 modal-content-inner" style="background-image: url('<?php if ( isset( $modal_bg_image['url'] ) && $modal_bg_image['url'] != '' ) { echo esc_url( $modal_bg_image['url'] ); } ?>')">
              <?php if ( ekko_get_option( 'tek-modal-form-select' ) ) : ?>
                   <?php if ( ekko_get_option( 'tek-modal-form-select' ) == '1' && ekko_get_option( 'tek-modal-contactf7-formid' ) != '') : ?>
                     <?php echo do_shortcode('[contact-form-7 id="'. esc_attr( ekko_get_option( 'tek-modal-contactf7-formid' ) ).'"]'); ?>
                   <?php elseif ( ekko_get_option( 'tek-modal-form-select' ) == '2' && ekko_get_option( 'tek-modal-ninja-formid' ) != '') : ?>
                     <?php echo do_shortcode('[ninja_form id="'. esc_attr( ekko_get_option( 'tek-modal-ninja-formid' ) ).'"]'); ?>
                   <?php elseif ( ekko_get_option( 'tek-modal-form-select' ) == '3' &&  ekko_get_option( 'tek-modal-gravity-formid' ) != '') : ?>
                     <?php echo do_shortcode('[gravityform id="'. esc_attr( ekko_get_option( 'tek-modal-gravity-formid' ) ).'" ajax="true"]'); ?>
                   <?php elseif ( ekko_get_option( 'tek-modal-form-select' ) == '4' &&  ekko_get_option( 'tek-modal-wp-formid' ) != '') : ?>
                     <?php echo do_shortcode('[wpforms id="'. esc_attr( ekko_get_option( 'tek-modal-wp-formid' ) ).'"]'); ?>
                   <?php elseif ( ekko_get_option( 'tek-modal-form-select' ) == '5' && ekko_get_option( 'tek-modal-other-form-shortcode' ) != '') : ?>
                     <div class="other-form-shortcode">
                       <?php echo do_shortcode( esc_attr( ekko_get_option( 'tek-modal-other-form-shortcode' ) ) ); ?>
                     </div>
                   <?php endif; ?>
              <?php endif; ?>
          </div>
        </div>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
</div>
