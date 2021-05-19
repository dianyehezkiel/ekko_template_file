<?php
$default_typo =  ekko_get_option( 'tek-default-typo' );
$h1_heading =  ekko_get_option( 'tek-h1-heading' );
$h2_heading =  ekko_get_option( 'tek-h2-heading' );
$h3_heading =  ekko_get_option( 'tek-h3-heading' );
$h4_heading =  ekko_get_option( 'tek-h4-heading' );
$h5_heading =  ekko_get_option( 'tek-h5-heading' );
$h6_heading =  ekko_get_option( 'tek-h6-heading' );
$default_typo_mobile =  ekko_get_option( 'tek-default-typo-mobile' );
$h1_heading_mobile =  ekko_get_option( 'tek-h1-heading-mobile' );
$h2_heading_mobile =  ekko_get_option( 'tek-h2-heading-mobile' );
$h3_heading_mobile =  ekko_get_option( 'tek-h3-heading-mobile' );
$h4_heading_mobile =  ekko_get_option( 'tek-h4-heading-mobile' );
$h5_heading_mobile =  ekko_get_option( 'tek-h5-heading-mobile' );
$h6_heading_mobile =  ekko_get_option( 'tek-h6-heading-mobile' );
$topbar_typo =  ekko_get_option( 'tek-topbar-typo' );
$text_logo_typo =  ekko_get_option( 'tek-text-logo-typo' );
$menu_typo =  ekko_get_option( 'tek-menu-typo' );
$layout_boxed_body_bg =  ekko_get_option( 'tek-layout-boxed-body-bg' );
$preloader_bg =  ekko_get_option( 'tek-preloader-image' );
$contact_form_typo =  ekko_get_option( 'tek-contact-form-typo' );
$button_typo =  ekko_get_option( 'tek-button-typo' );
$btn_padding =  ekko_get_option( 'tek-btn-padding' );
$footer_link_color =  ekko_get_option( 'tek-footer-link-color' );
$link_color =  ekko_get_option( 'tek-link-color' );
$footer_typo =  ekko_get_option( 'tek-footer-typo' );
$primary_ttf_font = ekko_get_option( 'tek-primary-ttf-font' );
$primary_woff_font = ekko_get_option( 'tek-primary-woff-font' );
$secondary_ttf_font = ekko_get_option( 'tek-secondary-ttf-font' );
$secondary_woff_font = ekko_get_option( 'tek-secondary-woff-font' );
?>


<?php if ( ekko_get_option( 'tek-preloader-bg-color' ) ) : ?>
	html {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-preloader-bg-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $preloader_bg['url'] ) && '' != $preloader_bg['url'] ): ?>
	html:before {
    width: 100%;
    height: 100%;
	content:'';
    position:fixed;
    top: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-image: url("<?php echo esc_attr( $preloader_bg['url'] ) ?>");
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-preloader-image-size-desktop' ) ) : ?>
	html:before {
		background-size: <?php echo esc_attr( ekko_get_option( 'tek-preloader-image-size-desktop' ) ) ?>px;
	}
<?php endif; ?>


.tt_button.second-style .iconita,
#single-page #comments input[type="submit"]:hover,
.tt_button.tt_secondary_button,
.tt_button.tt_secondary_button .iconita,
.team-carousel .owl-item .team-member.design-creative .team-socials a,
.format-quote .entry-wrapper:before,
.blog-single-title a:hover,
.upper-footer i:hover,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab a:hover,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab a:hover,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a,
footer.underline-effect .textwidget a:hover,
.kd-price-block .pb-price,
.team-member.design-classic .kd-team-contact a:hover,
#commentform #submit:hover,
.kd-panel-subtitle ul>li:before,
.kd-panel-subtitle ol>li:before,
.tab-text-container ul>li:before, .side-content-text ul>li:before, .wpb_text_column ul>li:before,
.modal-content-contact .redux-social-media-list i:hover,
.related-content .portfolio .post-link:hover,
.related-content .portfolio h5 a:hover,
#posts-content .post-link:hover,
.team-member.design-classic .team-socials .fab,
.vc_grid-item-mini .blog-detailed-grid .vc_gitem-post-data.vc_gitem-post-data-source-post_date p:before,
.vc_grid-item-mini .blog-detailed-grid .vc_gitem-post-data.vc_gitem-post-data-source-post_date div:before,
#posts-content.blog-detailed-grid .entry-meta a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
.large-counter .kd_counter_units,
.footer_widget .redux-social-media-list i,
.woocommerce ul.products li.product .categories a:hover,
#single-page .bbp-login-form .user-submit:hover,
.woocommerce-page ul.products li.product.woo-minimal-style .button, .woocommerce-page ul.products li.product.woo-minimal-style .added_to_cart,
.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown:hover > a,
.key-icon-box .ib-link a,
.footer-bar .footer-nav-menu ul li a:hover,
#popup-modal .close:hover,
body.maintenance-mode .container h2,
.wpb-js-composer .vc_tta-container .vc_tta.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li.vc_active a,
.wpb-js-composer .vc_tta-container .vc_tta.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li a:hover,
blockquote:before,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs a:hover i,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs li.active a i,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.port-prev.tt_button,
.port-next.tt_button,
.upper-footer .socials-widget a:hover .fa,
.woocommerce .woocommerce-form-login .button:hover,
.footer_widget ul a:hover,
.side-content-text ul li:before,
span.bbp-admin-links a:hover,
#bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover,
.vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_date div:before,
.vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_author a:before,
.vc_grid-item-mini .blog-detailed-grid .vc_btn3-container:hover a,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs a:hover,
.topbar-lang-switcher ul li a:hover span,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs li.active a,
div.bbp-breadcrumb a:hover,
#bbpress-forums div.bbp-topic-author a.bbp-author-name, #bbpress-forums div.bbp-reply-author a.bbp-author-name,
.kd_pie_chart .kd-piechart-icon,
.row .vc_toggle_size_md.vc_toggle_simple .vc_toggle_title:hover h4,
.row .vc_toggle_size_md.vc_toggle_default .vc_toggle_title:hover h4,
.woocommerce .checkout_coupon .button:hover:hover,
.woocommerce-page #payment #place_order:hover,
.team-member.design-minimal .team-socials a,
.woocommerce-cart #single-page table.cart .button:hover,
.woocommerce-cart #single-page table.cart .actions .button:hover,
.wpb-js-composer .vc_tta-container .vc_tta-color-white.vc_tta-style-modern .vc_tta-tab.vc_active a,
.team-member.design-two:hover .team-socials .fab:hover,
.team-member.design-two .team-socials .fab:hover,
#single-page .return-to-shop a:hover,
.woocommerce-error a, .woocommerce-info a, .woocommerce-message a,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
.navbar-nav li.dropdown:hover .dropdown-menu:hover li a:hover,
.woocommerce ul.products li.product h2:hover,
.keydesign-cart .buttons .btn, .woocommerce .keydesign-cart .buttons .btn,
.woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:hover,
.portfolio-meta.share-meta .fa:hover,
.woocommerce-account #single-page .woocommerce-Button:hover,
.woocommerce #respond input#submit:hover,
.woocommerce-page ul.products li.product.woo-minimal-style .button:hover,
.woocommerce-page ul.products li.product.woo-minimal-style .added_to_cart:hover,
.blog_widget ul li a:hover,
#posts-content .entry-meta a:hover,
.woocommerce a.button:hover,
.keydesign-cart:hover .cart-icon,
#comments input[type="submit"],
.search-submit:hover,
.blog-single-content .tags a,
.lower-footer a:hover,
#posts-content .post .blog-single-title a:hover,
#posts-content.blog-minimal-list .blog-single-title a:hover,
#posts-content.blog-img-left-list .blog-single-title a:hover,
.socials-widget a:hover .fa, .socials-widget a:hover,
#customizer .ekko-tooltip,
.footer_widget .menu li a:hover,
.row .vc_toggle_size_md.vc_toggle_simple .vc_toggle_title:hover h4,
#single-page .single-page-content .widget ul li a:hover,
#comments .reply a:hover,
#comments .comment-meta a:hover,
#kd-slider .secondary_slider,
#single-page .single-page-content .widget ul li.current-menu-item a,
.team-socials .fa:hover,
#posts-content .post .tt_button:hover .fa,
#posts-content .post .tt_button:hover,
.topbar-socials a:hover .fa,
.pricing .pricing-price,
.pricing-table .tt_button,
.topbar-phone .iconsmind-Telephone ,
.topbar-email .iconsmind-Mail,
.modal-content-contact .key-icon-box .service-heading a:hover,
.pricing-table.active .tt_button:hover,
.footer-business-content a:hover,
.vc_grid-item-mini .vc_gitem-zone .vc_btn3.vc_btn3-style-custom,
.star-rating span,
.es-accordion .es-heading h4 a:hover,
.keydesign-cart ul.product_list_widget .cart-item:hover,
.woocommerce .keydesign-cart ul.product_list_widget .cart-item:hover,
#customizer .options a:hover i,
.woocommerce .price_slider_wrapper .price_slider_amount .button,
#customizer .options a:hover,
#single-page input[type="submit"]:hover,
#posts-content .post input[type="submit"]:hover,
.active .pricing-option i,
#comments .reply a:hover,
.meta-content .tags a:hover,
.navigation.pagination .next,
.woocommerce-cart  #single-page table.cart .product-name a:hover,
.navigation.pagination .prev,
.product_meta a:hover,
.tags a:hover, .tagcloud a:hover,
.tt_button.second-style,
.lower-footer .pull-right a:hover,
.woocommerce-review-link:hover,
.section .wpcf7-mail-sent-ok,
.blog-header-form .wpcf7-mail-sent-ok,
.upper-footer .modal-menu-item,
.video-socials a:hover .fa,
.kd_pie_chart .pc-link a:hover,
.vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4:hover,
.fa, .far, .fas, .fab,
.wpcf7 .wpcf7-submit:hover,
.contact .wpcf7-response-output,
.video-bg .secondary-button:hover,
#headerbg li a.active,
#headerbg li a.active:hover,
.footer-nav a:hover ,
.wpb_wrapper .menu a:hover ,
.text-danger,
.blog_widget ul li a:before,
.pricing i,
.content-area .vc_grid .vc_gitem-zone-c .vc_general,
code,
#single-page .single-page-content ul li:before,
.subscribe-form header .wpcf7-submit,
#posts-content .page-content ul li:before,
.chart-content .nc-icon-outline,
.chart,
.row .vc_custom_heading a:hover,
.secondary-button-inverse,
.primary-button.button-inverse:hover,
.primary-button,
a,
.kd-process-steps .pss-step-number span,
.navbar-default .navbar-nav > .active > a,
.pss-link a:hover,
.kd_number_string,
.featured_content_parent .active-elem h4,
.contact-map-container .toggle-map:hover .fa,
.contact-map-container .toggle-map:hover,
.testimonials.slider .tt-container:before,
.tt_button:hover,
div.wpforms-container-full .wpforms-form input[type=submit]:hover,
div.wpforms-container-full .wpforms-form button[type=submit]:hover,
.nc-icon-outline,
.phb-simple-link:hover,
.content-area .vc_grid-item-mini:hover .vc_gitem-zone-c .vc_gitem_row .vc_gitem-col h4,
.woocommerce ul.products li.product h3:hover,
.wpb_text_column ol>li:before,
.wpb_text_column ul>li:before,
.key-icon-box .ib-link a:hover,
.features-tabs .tab-controls li a:hover,
.features-tabs.tab-img-fullwidth li.active a,
.wp-block-button .wp-block-button__link:hover,
.wp-block-archives li a:hover,
.wp-block-categories.wp-block-categories-list li a:hover,
.cb-container .cb-img-area i,
.kd-counter-icon i,
.features-tabs .tab-controls li i,
.key-icon-box i,
.business-info-wrapper .toggle-map-info,
.process-icon i,
.kd-progress-icon i,
.side-content-wrapper i.section-icon {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		color: #25b15f;
	<?php endif; ?>
}

.navbar.navbar-default.navbar-shrink .menubar .navbar-nav .active > a,
.navbar.navbar-default .menubar .navbar-nav .active > a {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>!important;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.play-btn-primary-color .play-video:hover,
	.play-btn-primary-color .play-video,
	.play-btn-primary-color.play-video:hover,
	.play-btn-primary-color.play-video,
	.search .search-form .search-field,
	.feature-sections-wrapper .feature-sections-tabs .nav-tabs li.active a,
	.blog_widget .woocommerce-product-search .search-field,
	.features-tabs.tab-img-fullwidth li.active a,
	.pricing-table.active,
	.key-icon-box:hover .ib-wrapper,
	.cb-container:hover,
	.modal-content-inner .wpcf7-not-valid-tip,
	.section .wpcf7-mail-sent-ok,
	.toggle-map-info:hover,
	.blog-header-form .wpcf7-mail-sent-ok,
	.blog-header-form .wpcf7-not-valid-tip,
	.section .wpcf7-not-valid-tip,
	.kd-side-panel .wpcf7-not-valid-tip,
	.kd-process-steps.process-checkbox-template .pss-item:before,
	.kd-process-steps.process-checkbox-template,
	.kd-separator,
	.kd-separator .kd-separator-line {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}
<?php endif; ?>

.woocommerce .single_variation_wrap button.button.alt.disabled,
.video-modal .modal-content .close:hover,
#single-page .bbp-login-form .user-submit,
.bbpress #user-submit,
.gform_wrapper .gform_footer input.button,
.gform_wrapper .gform_footer input[type=submit],
input[type="button"].ninja-forms-field,
.modal-content-inner .wpcf7-submit:hover,
.searchform #searchsubmit,
#kd-slider,
.kd-contact-form.light_background .wpcf7 .wpcf7-submit,
.footer-newsletter-form .wpcf7 .wpcf7-submit,
.kd_progressbarfill,
.phone-wrapper,
.wpb_wrapper #loginform .button,
.woocommerce input.button,
.email-wrapper,
.woocommerce ul.products li.product .added_to_cart:hover,
.footer-business-info.footer-socials a:hover,
.parallax.with-overlay:after,
.content-area .vc_grid-filter>.vc_grid-filter-item span:after,
.tt_button.tt_secondary_button:hover,
.pricing-table .tt_button:hover,
.modal-content-inner .wpcf7-not-valid-tip,
.kd-side-panel .wpcf7-not-valid-tip,
.tt_button.second-style:hover,
.pricing-table.active .tt_button,
#customizer .screenshot a,
.heading-separator,
.blog-header-form .wpcf7-not-valid-tip,
.section .wpcf7-not-valid-tip,
.port-prev.tt_button:hover,
.port-next.tt_button:hover,
 .owl-buttons div:hover,
.row .vc_toggle_default .vc_toggle_icon,
.row .vc_toggle_default .vc_toggle_icon::after,
.row .vc_toggle_default .vc_toggle_icon::before,
.woocommerce #respond input#submit,
.woocommerce a.button,
.upper-footer .modal-menu-item:hover,
.contact-map-container .toggle-map,
.portfolio-item .portfolio-content,
.tt_button,
#wrapper .vc_grid-btn-load_more .vc_general,
 .owl-dot span,
.woocommerce a.remove:hover,
.pricing .secondary-button.secondary-button-inverse:hover,
.with-overlay .parallax-overlay,
.secondary-button.secondary-button-inverse:hover,
.secondary-button,
#kd-slider .bullet-bar.tparrows,
.primary-button.button-inverse,
#posts-content .post input[type="submit"],
.btn-xl,
.with-overlay,
.vc_grid-item-mini .vc_gitem-zone .vc_btn3.vc_btn3-style-custom:hover,
.woocommerce .price_slider_wrapper .ui-slider-horizontal .ui-slider-range,
.separator,
.woocommerce button.button,
.cb-container.cb_main_color:hover,
.keydesign-cart .buttons .btn:hover,
.woocommerce .keydesign-cart .buttons .btn:hover,
.woocommerce ul.products li.product .button:hover,
#single-page #comments input[type="submit"]:hover,
.contact-map-container .toggle-map:hover,
.wpcf7 .wpcf7-submit:hover,
.owl-dot span,
.features-tabs .tab.active,
.pricing-table.DetailedStyle.active .pricing-title .pricing-title-content,
.content-area .vc_grid .vc-gitem-zone-height-mode-auto.vc_gitem-zone.vc_gitem-zone-a:before,
.row .vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,
.row .vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before,
.wpcf7 .wpcf7-submit,
.navigation.pagination .next:hover,
#single-page .vc_col-sm-3 .wpcf7 .wpcf7-submit,
.spinner:before,
.toggle-map-info:hover,
.content-area .vc_grid .vc_gitem-zone-c .vc_general:hover,
.content-area .vc_grid-item-mini .vc_gitem-animate-fadeIn .vc_gitem-zone.vc_gitem-zone-a:before,
.keydesign-cart .badge,
.tags a:after, .tagcloud a:after,
div.wpcf7 .wpcf7-form .ajax-loader,
#bbp_search_submit,
div.wpforms-container-full .wpforms-form input[type=submit],
div.wpforms-container-full .wpforms-form button[type=submit],
.comparison-pricing-table .vc_custom_heading.active,
.comparison-pricing-table .pricing-row.active,
#commentform #submit,
footer.underline-effect .textwidget a:after,
footer.underline-effect .navbar-footer li a:after,
footer.underline-effect .footer_widget .menu li a:after,
#main-menu.underline-effect .navbar-nav .mega-menu .dropdown-menu .menu-item a:after,
#main-menu.underline-effect .navbar-nav .menu-item .dropdown-menu .menu-item a:after,
.kd-process-steps.process-checkbox-template .pss-step-number span:before, .kd-process-steps.process-checkbox-template .pss-step-number:before, .kd-process-steps.process-checkbox-template .pss-item:before,
.blog-page-numbers li.active a,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce span.onsale,
.kd-price-switch input:checked + .price-slider,
.team-member.design-classic .kd-team-contact .kd-team-email:before,
.team-member.design-classic .kd-team-contact .kd-team-phone:before,
.team-member.design-creative .team-image:before,
.team-member.design-creative .team-content-hover:before,
.testimonials.slider.with-image .tt-content .tt-container,
.ib-hover-2.key-icon-box:hover .ib-wrapper,
#main-menu.background-dropdown-effect .navbar-nav .menu-item-has-children .dropdown-menu a:hover,
.team-member.design-classic .team-socials a:after,
.woocommerce .price_slider_wrapper .ui-slider .ui-slider-handle,
.navigation.pagination .prev:hover,
.kd-panel-phone:after, .kd-panel-email:after,
.kd-panel-social-list .redux-social-media-list a:after,
footer.underline-effect .footer_widget ul li.cat-item a:after,
.play-btn-primary-color .play-video,
.wp-block-button__link {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		background-color: #25b15f;
	<?php endif; ?>
}

#single-page .bbp-login-form .user-submit,
#single-page #comments input[type="submit"]:hover,
.navigation.pagination .next,
.navigation.pagination .prev,
.upper-footer .modal-menu-item,
.wpcf7 .wpcf7-submit:hover,
.tt_button,
#wrapper .vc_grid-btn-load_more .vc_general,
div.wpforms-container-full .wpforms-form input[type=submit]:hover,
div.wpforms-container-full .wpforms-form button[type=submit]:hover,
.navigation.pagination .next, .navigation.pagination .prev,
.woocommerce ul.products li.product .button:hover,
.woocommerce .price_slider_wrapper .ui-slider .ui-slider-handle,
.pricing.active,
.vc_grid-item-mini .vc_gitem-zone .vc_btn3.vc_btn3-style-custom,
.primary-button.button-inverse:hover,
.primary-button.button-inverse,
.keydesign-cart .buttons .btn, .woocommerce .keydesign-cart .buttons .btn,
.wpcf7 .wpcf7-submit,
.wpb_wrapper #loginform .button,
 .owl-buttons div:hover,
.woocommerce button.button,
.woocommerce a.button,
.content-area .vc_grid .vc_gitem-zone-c .vc_general,
#commentform #submit,
div.wpforms-container-full .wpforms-form input[type=submit],
div.wpforms-container-full .wpforms-form button[type=submit],
.wp-block-button__link,
#posts-content .post input[type="submit"],
.woocommerce ul.products li.product .added_to_cart,
.woocommerce input.button,
 .owl-dot.active span,
 .owl-dot:hover span {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		border: 2px solid <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		border: 2px solid #25b15f;
	<?php endif; ?>
}

div.wpcf7 .wpcf7-form .ajax-loader {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		border: 5px solid <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		border: 5px solid #25b15f;
	<?php endif; ?>
}

.blog_widget .woocommerce-product-search .search-field, .blog_widget .search-form .search-field,
.page-404 .tt_button,
#wrapper .widget-title,
.blockquote-reverse,
.testimonials.slider  .owl-dot.active span,
.tags a:hover, .tagcloud a:hover,
.contact-map-container .toggle-map:hover,
.navigation.pagination .next:hover, .navigation.pagination .prev:hover,
.contact .wpcf7-response-output,
.video-bg .secondary-button,
#single-page .single-page-content .widget .widgettitle,
.image-bg .secondary-button,
.contact .wpcf7-form-control-wrap textarea.wpcf7-form-control:focus,
.contact .wpcf7-form-control-wrap input.wpcf7-form-control:focus,
.team-member-down:hover .triangle,
.team-member:hover .triangle,
.comparison-pricing-table .vc_custom_heading.active,
.comparison-pricing-table .pricing-row.active,
.features-tabs .tab.active:after,
.tabs-image-left.features-tabs .tab.active:after,
.secondary-button-inverse,
.kd-process-steps.process-number-template ul li:hover,
.wpb-js-composer .vc_tta-container .vc_tta.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li.vc_active a,
.vc_separator .vc_sep_holder .vc_sep_line {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		border-color: #25b15f;
	<?php endif; ?>
}

.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active a,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active a,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
.wpb-js-composer .vc_tta-container .vc_tta-tabs.vc_tta-tabs-position-right .vc_tta-tab.vc_active {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		border-bottom-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		border-bottom-color: #25b15f;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.wpb-js-composer .vc_tta-container  .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:before {
	    border-right: 9px solid <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}

	.wpb-js-composer .vc_tta-container .vc_tta.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tabs-container .vc_tta-tabs-list li:before {
	    border-top: 9px solid <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-secondary-color' ) ) : ?>

	#wrapper .vc_grid-btn-load_more .vc_general:hover,
	.tt_button.btn_secondary_color.tt_secondary_button:hover,
	.tt_button.btn_secondary_color,
	#wrapper.btn-hover-2 .wpcf7 .wpcf7-submit:hover,
	.btn-hover-2 #commentform #submit:hover,
	.btn-hover-2 .kd-panel-contact .wpcf7-submit:hover,
	.play-btn-secondary-color .play-video {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?>;
	}

	.tt_button.btn_secondary_color.tt_secondary_button,
	.tt_button.btn_secondary_color:hover {
		color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?>;
	}

	.tt_button.btn_secondary_color {
		border: 2px solid <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?>;
	}

	#wrapper .vc_grid-btn-load_more .vc_general:hover,
	.play-btn-secondary-color .play-video:hover,
	.play-btn-secondary-color .play-video,
	.play-btn-secondary-color.play-video:hover,
	.play-btn-secondary-color.play-video,
	#wrapper.btn-hover-2 .wpcf7 .wpcf7-submit:hover,
	.btn-hover-2 #commentform #submit:hover,
	.btn-hover-2 .kd-panel-contact .wpcf7-submit:hover {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?>;
	}
<?php endif; ?>

h1,h2,h3,h4,h5,
.kd_progress_bar .kd_progb_head .kd-progb-title h4,
 .es-accordion .es-heading h4 a,
.wpb-js-composer .vc_tta-color-white.vc_tta-style-modern .vc_tta-tab>a:hover,
#comments .fn,
#comments .fn a,
.portfolio-block h4,
.rw-author-details h4,
.testimonials.slider .author,
.vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4,
.team-content h5,
.key-icon-box .service-heading,
.post a:hover,
.kd_pie_chart .kd_pc_title,
.kd_pie_chart .pc-link a,
.testimonials .tt-content h4,
.kd-photobox .phb-content h4,
.kd-process-steps .pss-text-area h4,
.widget-title,
.kd-promobox .prb-content h4,
.bp-content h4,
.reply-title,
.product_meta,
.blog-header .section-heading,
.tcards-title,
.tcards_header .tcards-name,
.woocommerce-result-count,
.pss-link a,
.navbar-default .nav li a,
.logged-in .navbar-nav a, .navbar-nav .menu-item a,
.woocommerce table.shop_attributes th,
.portfolio-block strong,
.keydesign-cart .nc-icon-outline-cart,
.portfolio-meta.share-meta .fa,
.subscribe input[type="submit"],
.es-accordion .es-speaker-container .es-speaker-name,
.pricing-title,
.woocommerce-cart  #single-page table.cart .product-name a,
.wpb-js-composer .vc_tta-container .vc_tta-color-white.vc_tta-style-modern .vc_tta-tab>a,
.rw_rating .rw-title,
.group_table .label,
.cb-container.cb_transparent_color:hover .cb-heading,
.app-gallery .ag-section-desc h4,
.single-post .wpb_text_column strong,
 .owl-buttons div,
#single-page .single-page-content .widget ul li a,
.modal-content-contact .key-icon-box .service-heading a,
.woocommerce-ordering select,
.woocommerce div.product .woocommerce-tabs .panel #reply-title,
.page-404 .section-subheading,
.showcoupon:hover,
.pricing-table .pricing-img i,
.navbar-default .navbar-nav > li > a:hover,
.testimonials.slider.with-image .tt-container h6,
.socials-widget a:hover .fa, .socials-widget a:hover,
.owl-nav div,
#comments label,
.author-box-wrapper .author-name h6,
.keydesign-cart .empty-cart,
.play-video:hover .fa-play,
.author-website,
.post-link:hover,
#comments .reply a:hover,
.author-desc-wrapper a:hover,
.blog-single-content .tags a:hover,
.woocommerce #coupon_code, .woocommerce .quantity .qty,
.kd-price-block .pb-content-wrap .pb-pricing-wrap,
.blog-single-title a,
.topbar-phone a:hover,
.topbar-email a:hover,
.topbar #menu-topbar-menu li a:hover,
.navbar-topbar li a:hover,
.fa.toggle-search:hover,
.business-info-header i,
.tt_secondary_button.tt_third_button:hover,
.tt_secondary_button.tt_third_button:hover .fa,
.keydesign-cart .subtotal,
#single-page p.cart-empty,
blockquote cite,
.cta-icon i,
.pricing .pricing-option strong,
.pricing-table.DetailedStyle .pricing .pricing-price,
body.maintenance-mode .countdown,
.mobile-cart .keydesign-cart,
body.woocommerce-page .entry-header .section-heading,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs a,
.team-member.design-minimal .team-socials a:hover,
.content-area .vc_grid-filter>.vc_grid-filter-item:hover>span,
.key-icon-box .ib-link a:hover,
.rw-link a:hover,
.tcards-link a:hover,
.team-link a:hover,
.feature-sections-wrapper .side-content-wrapper .simple-link:hover,
.woocommerce ul.products li.product .price,
.woocommerce-page ul.products li.product.woo-minimal-style:hover .button:hover,
.breadcrumbs,
.kd_pie_chart .pc_percent_container,
.product_meta a:hover,
.modal-content-contact .key-icon-box.icon-left.icon-default .fa,
.navbar-default .nav:hover > li.dropdown:hover > a,
.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown > a,
#posts-content.blog-detailed-grid .entry-meta a,
.woocommerce nav.woocommerce-pagination ul li a,
.content-area .vc_grid-filter>.vc_grid-filter-item.vc_active>span,
.feature-sections-wrapper .feature-sections-tabs .nav-tabs a i,
.vc_toggle_simple .vc_toggle_title .vc_toggle_icon::after,
.vc_toggle_simple .vc_toggle_title .vc_toggle_icon::before,
.testimonials .tt-content .content,
.es-accordion .es-time,
.es-accordion .es-time i,
.related-content .portfolio .post-link,
.phb-simple-link,
.ps-secondary-variant, .ps-default-variant,
.vc_custom_heading.post-link,
#posts-content .post-link {
	<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
		color: <?php echo esc_attr( $h1_heading['color'] ); ?>;
	<?php else : ?>
		color: #1a1a1a;
	<?php endif; ?>
}


.ib-link.iconbox-main-color a:hover  {
	<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
		color: <?php echo esc_attr( $h1_heading['color'] ); ?> !important;
	<?php else : ?>
		color: #1a1a1a;
	<?php endif; ?>
}

.vc_toggle.vc_toggle_default .vc_toggle_icon,
.row .vc_toggle_size_md.vc_toggle_default .vc_toggle_title .vc_toggle_icon:before,
.row .vc_toggle_size_md.vc_toggle_default .vc_toggle_title .vc_toggle_icon:after,
.searchform #searchsubmit:hover {
	<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
		background-color: <?php echo esc_attr( $h1_heading['color'] ); ?>;
	<?php else : ?>
		background-color: #1a1a1a;
	<?php endif; ?>
}

.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown > a {
	<?php if ( ekko_get_option( 'tek-header-menu-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color' ) ); ?> !important;
	<?php else : ?>
		color: #1a1a1a !important;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-header-menu-color' ) ) : ?>
.navbar-default .navbar-toggle .icon-bar,
.navbar-toggle .icon-bar:before,
.navbar-toggle .icon-bar:after {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color' ) ); ?>;
}
<?php endif; ?>

<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
	.kd-contact-form.light_background .wpcf7 .wpcf7-submit:hover {
		background-color: <?php echo esc_attr( $h1_heading['color'] ); ?> !important;
	}
<?php endif; ?>

<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ) : ?>
	.kd_counter_number:after {
		background-color: <?php echo esc_attr( $default_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
	.testimonials.slider .owl-dot:hover span {
		border-color: <?php echo esc_attr( $h1_heading['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ) : ?>
	.cb-container.cb_transparent_color:hover .cb-text-area p {
		color: <?php echo esc_attr( $default_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
	.wpcf7 .wpcf7-text::-webkit-input-placeholder { color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
	.wpcf7 .wpcf7-text::-moz-placeholder { color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
	.wpcf7 .wpcf7-text:-ms-input-placeholder { color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-webkit-input-placeholder { color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-moz-placeholder {color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea:-ms-input-placeholder {color: <?php echo esc_attr( $h1_heading['color'] ); ?>; }
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-upper-footer-color' ) ) : ?>
	.footer-newsletter-form .wpcf7-form .wpcf7-email,
	.footer-business-info.footer-socials a,
	.upper-footer {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-upper-footer-color' ) ); ?>;
	}

	.upper-footer {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-upper-footer-color' ) ); ?>;
	}
<?php endif; ?>

.footer-business-info,
.lower-footer {
	<?php if ( ekko_get_option( 'tek-lower-footer-color' ) ) : ?>
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-lower-footer-color' ) ); ?>;
	<?php else : ?>
		background-color: #fff;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-footer-text-color' ) ) : ?>
	.lower-footer, .upper-footer, .upper-footer .socials-widget .fa, .footer_widget p {
		color: <?php echo esc_attr( ekko_get_option( 'tek-footer-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $footer_link_color['regular'] ) && '' != $footer_link_color['regular'] ) : ?>
	.lower-footer a, .upper-footer a {
		color: <?php echo esc_attr( $footer_link_color['regular'] ); ?> !important;
	}
<?php endif; ?>

<?php if ( isset( $footer_link_color['hover'] ) && '' != $footer_link_color['hover'] ) : ?>
	.lower-footer a:hover, .upper-footer a:hover {
		color: <?php echo esc_attr( $footer_link_color['hover'] ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-footer-heading-color' ) ) : ?>
	.upper-footer i,
	.upper-footer .widget-title, .upper-footer .modal-menu-item {
		color: <?php echo esc_attr( ekko_get_option( 'tek-footer-heading-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-footer-typo' ) ) : ?>
.upper-footer .widget-title, .upper-footer #wp-calendar caption, .footer_widget .menu li a,.lower-footer ul li.cat-item a, .footer-nav-menu .navbar-footer li a, .lower-footer span, .lower-footer a {
	<?php if ( isset( $footer_typo['font-weight'] ) && '' != $footer_typo['font-weight'] ): ?>
		font-weight: <?php echo esc_attr( $footer_typo['font-weight'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['font-family'] ) && '' != $footer_typo['font-family'] ): ?>
		font-family: <?php echo stripslashes( htmlspecialchars( $footer_typo['font-family'] ) ); ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['font-size'] ) && '' != $footer_typo['font-size'] ): ?>
		font-size: <?php echo esc_attr( $footer_typo['font-size'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['text-transform'] ) && '' != $footer_typo['text-transform'] ): ?>
		text-transform: <?php echo esc_attr( $footer_typo['text-transform'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $footer_typo['letter-spacing'] ) && '' != $footer_typo['letter-spacing'] ): ?>
		letter-spacing: <?php echo esc_attr( $footer_typo['letter-spacing'] ) ?>;
	<?php endif; ?>
}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-maintenance-text-color' ) ) : ?>
	body.maintenance-mode .container h2.maintenance-title, .maintenance-content, body.maintenance-mode .countdown {
		color: <?php echo esc_attr( ekko_get_option( 'tek-maintenance-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-topbar-bg-color' ) == "transparent" ) { ?>
	.topbar {
		border-bottom: 1px solid rgba(255, 255, 255, 0.15);
	}
	.topbar-socials {
		border-right: 1px solid rgba(255, 255, 255, 0.15);
		border-left: 1px solid rgba(255, 255, 255, 0.15);
	}
	.topbar-socials a {
		border-right: 1px solid rgba(255, 255, 255, 0.15);
	}
 <?php } ?>


<?php if ( ekko_get_option( 'tek-topbar' ) == '1' && ekko_get_option( 'tek-topbar-text-color' ) ) : ?>
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-lang-switcher ul:not(:hover) li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-search .fa.toggle-search,
.transparent-navigation .navbar.navbar-default.navbar-shrink #menu-topbar-menu li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .navbar-topbar li a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-phone .iconsmind-Telephone,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-email .iconsmind-Mail,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-phone a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-email a,
.transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-contact .fa,
.topbar-lang-switcher ul li a,
.cart-icon-container,
.topbar-lang-switcher,
.topbar-menu,
.topbar-extra-content .topbar-search,
.topbar-extra-content .fa.toggle-search,
.topbar-phone .iconsmind-Telephone, .topbar-email .iconsmind-Mail,
.topbar .redux-social-media-list a .fab,
.navbar.navbar-default .topbar-contact i,
.navbar.navbar-default .topbar-phone a, .navbar.navbar-default .topbar-email a,
.navbar.navbar-default .topbar-opening-hours, .transparent-navigation .navbar.navbar-default.navbar-shrink .topbar-opening-hours {
	color: <?php echo esc_attr( ekko_get_option( 'tek-topbar-text-color' ) ); ?> !important;
}

.topbar-extra-content .keydesign-cart svg {
	fill: <?php echo esc_attr( ekko_get_option( 'tek-topbar-text-color' ) ); ?> !important;
}
<?php endif; ?>

.topbar-lang-switcher ul li a:hover span,
.topbar-search .fa.toggle-search:hover,
#menu-topbar-menu a:hover,
.topbar .redux-social-media-list a:hover .fab,
.navbar-topbar a:hover,
.transparent-navigation #menu-topbar-menu li a:hover,
.transparent-navigation .navbar.navbar-default .topbar-phone a:hover, .transparent-navigation .navbar.navbar-default .topbar-email a:hover,
.navbar.navbar-default .topbar-phone a:hover, .navbar.navbar-default .topbar-email a:hover {
	<?php if ( ekko_get_option( 'tek-topbar-hover-text-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-topbar-hover-text-color' ) ); ?> !important;
	<?php else : ?>
		color: #1a1a1a;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-topbar-bg-color' ) ) : ?>
	.transparent-navigation .navbar.navbar-shrink .topbar,
	.navbar.navbar-default.contained .topbar .container,
	.navbar.navbar-default.navbar-shrink.with-topbar-sticky .topbar,
	.navbar .topbar {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-topbar-bg-color' ) ); ?> !important;
	}

	.topbar-search .search-form .search-field,
	.topbar .fa.toggle-search.fa-times {
		color: <?php echo esc_attr( ekko_get_option( 'tek-topbar-bg-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-menu-bg' ) ) : ?>
	.navbar.navbar-default.contained .container,
	.navbar.navbar-default .menubar,
	.navbar.navbar-default.navbar-shrink.fixed-menu,
	.keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default .dropdown-menu,
	#main-menu .navbar-nav .mega-menu > .dropdown-menu:before {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-bg' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-menu-bg-sticky' ) && ekko_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.keydesign-cart .keydesign-cart-dropdown,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu,
	.navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default.navbar-shrink .dropdown-menu,
	.navbar.navbar-default.navbar-shrink.contained .container,
	body:not(.transparent-navigation) .navbar.navbar-default.contained .container,
	.navbar.navbar-default.navbar-shrink .menubar {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-bg-sticky' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-menu-color' ) ) : ?>
	.mobile-search,
	.mobile-search .fa.toggle-search,
	.navbar-default .menu-item-has-children .mobile-dropdown,
	.navbar-default .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	.navbar.navbar-default .mobile-cart .keydesign-cart .cart-icon,
	.keydesign-cart .nc-icon-outline-cart,
	.transparent-navigation .navbar.navbar-default .menubar .navbar-nav .dropdown-menu a,
	.navbar.navbar-default .menubar .navbar-nav a {
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color' ) ); ?> !important;
	}
	.mobile-cart .keydesign-cart svg {
		fill: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color' ) ); ?>
	}
<?php endif; ?>

@media (min-width: 960px) {
	.transparent-navigation .navbar.navbar-default,
	.transparent-navigation .navbar.navbar-default .container,
	.transparent-navigation .navbar.navbar-default.contained,
	.transparent-navigation .navbar .topbar,
	.transparent-navigation .navbar .menubar {
		background-color: <?php echo 'transparent !important;'; ?>
	}


	.transparent-navigation .navbar:not(.navbar-shrink) #menu-topbar-menu li a,
	.transparent-navigation .navbar:not(.navbar-shrink) .navbar-topbar li a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-phone .iconsmind-Telephone,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-email .iconsmind-Mail,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-socials a .fab,
	.transparent-navigation .navbar:not(.navbar-shrink) .navbar.navbar-default .topbar-phone a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-email a,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact i,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-contact span,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar-opening-hours,
	.transparent-navigation .topbar-lang-switcher ul,
	.transparent-navigation .topbar-lang-switcher ul:not(:hover) li a,
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .topbar-search .fa.toggle-search:not(.fa-times),
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .nav > .menu-item > a,
	.transparent-navigation .navbar:not(.navbar-shrink) .keydesign-cart .cart-icon,
	.transparent-navigation .keydesign-cart .badge,
	.transparent-navigation #logo .logo {
		<?php if ( ekko_get_option( 'tek-transparent-homepage-menu-colors' ) ) : ?>
			color: <?php echo esc_attr( ekko_get_option( 'tek-transparent-homepage-menu-colors' ) ); ?> !important;
		<?php else : ?>
	    color: #fff!important;
    <?php endif; ?>
	}

	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .keydesign-cart svg,
	.transparent-navigation .navbar:not(.navbar-shrink) .topbar .keydesign-cart svg {
		<?php if ( ekko_get_option( 'tek-transparent-homepage-menu-colors' ) ) : ?>
			fill: <?php echo esc_attr( ekko_get_option( 'tek-transparent-homepage-menu-colors' ) ); ?> !important;
		<?php else : ?>
	    fill: #fff!important;
   	<?php endif; ?>
	}

	<?php if ( ekko_get_option( 'tek-topbar-text-color' ) ) : ?>
		.transparent-navigation .navbar.navbar-default.navbar-shrink .keydesign-cart svg {
			fill: <?php echo esc_attr( ekko_get_option( 'tek-topbar-text-color' ) ); ?> !important;
		}
	<?php endif; ?>


}


<?php
	if ( ekko_get_option( 'tek-header-menu-color-sticky' ) && ekko_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.navbar-default.navbar-shrink .menu-item-has-children .mobile-dropdown,
	.navbar-default.navbar-shrink .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	.keydesign-cart ul.product_list_widget .subtotal strong,
	.keydesign-cart ul.product_list_widget .cart-item,
	.keydesign-cart ul.product_list_widget .product-quantity,
	.keydesign-cart .subtotal .amount,
	.transparent-navigation .navbar-shrink  #logo .logo,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .mobile-dropdown,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children:hover .dropdown-menu .dropdown:before,
	#main-menu .navbar-nav.navbar-shrink .menu-item-has-children .dropdown-menu a,
	.transparent-navigation .navbar.navbar-default.navbar-shrink .menubar .navbar-nav .dropdown-menu a,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .keydesign-cart-dropdown,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .nc-icon-outline-cart,
	.navbar.navbar-default.navbar-shrink .menubar .navbar-nav a,
	.navbar.navbar-default.navbar-shrink .keydesign-cart .cart-icon {
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color-sticky' ) ); ?> !important;
	}
<?php endif; ?>


<?php if ( ekko_get_option( 'tek-header-menu-color-hover' ) ) : ?>
	.navbar-default .nav:hover > li.dropdown:hover > a,
	.navbar.navbar-default.navbar-shrink .menubar .navbar-nav a:hover,
	.transparent-navigation .navbar.navbar-default:not(.navbar-shrink) .nav > .menu-item > a:hover,
	.transparent-navigation .navbar.navbar-default .menubar .navbar-nav .dropdown-menu a:hover,
	.navbar.navbar-default .menubar .navbar-nav .active > a:hover,
	.navbar.navbar-default .navbar-nav a:hover {
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color-hover' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-menu-color-hover' ) ) : ?>
#main-menu.background-dropdown-effect .navbar-nav .menu-item-has-children .dropdown-menu a:hover,
#main-menu.underline-effect .navbar-nav .mega-menu .dropdown-menu .menu-item a:after, #main-menu.underline-effect .navbar-nav .menu-item .dropdown-menu .menu-item a:after {
	background: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color-hover' ) ); ?> !important;
}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-menu-color-sticky-hover' ) && ekko_get_option( 'tek-menu-behaviour' ) == '1' ) : ?>
	.menubar #main-menu .navbar-nav .mega-menu.menu-item-has-children .dropdown:hover > a,
	.navbar-default.navbar-shrink .nav li.active a,
	#main-menu .navbar-nav .menu-item-has-children .dropdown-menu a:hover, .navbar-nav .menu-item-has-children .dropdown-menu a:hover,
	.body:not(.transparent-navigation) .navbar a:hover,
	.navbar-default .nav li.active a {
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color-sticky-hover' ) ); ?> !important;
	}
<?php endif; ?>

#logo .logo {
	<?php if ( ekko_get_option( 'tek-main-logo-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-main-logo-color' ) ); ?> !important;
	<?php else : ?>
		color: #1a1a1a;
	<?php endif; ?>
}

.transparent-navigation .navbar-shrink #logo .logo,
.navbar-shrink #logo .logo {
	<?php if ( ekko_get_option( 'tek-secondary-logo-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-logo-color' ) ); ?> !important;
	<?php else : ?>
		color: #1a1a1a;
	<?php endif; ?>
}


<?php  if ( ekko_get_option( 'tek-default-typo' ) ) : ?>
	body, .box, .cb-text-area p, body p , .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
		<?php if ( isset( $default_typo['color'] ) && '' != $default_typo['color'] ): ?>
			color: <?php echo esc_attr( $default_typo['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-weight'] ) && '' != $default_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $default_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-family'] ) && '' != $default_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $default_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['font-size'] ) && '' != $default_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $default_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo['line-height'] ) && '' != $default_typo['line-height'] ): ?>
			line-height: <?php echo esc_attr( $default_typo['line-height'] ); ?>;
		<?php endif; ?>
	}

	.key-icon-box a p, .key-icon-box a:hover p {
		color: <?php echo esc_attr( $default_typo['color'] ) ?>;
	}
<?php endif; ?>


<?php  if ( ekko_get_option( 'tek-text-logo-typo' ) ) : ?>
.container #logo .logo {
	<?php if ( isset( $text_logo_typo['font-weight'] ) && '' != $text_logo_typo['font-weight'] ): ?>
		font-weight: <?php echo esc_attr( $text_logo_typo['font-weight'] ) ?>;
	<?php endif; ?>
	<?php if ( isset( $text_logo_typo['font-family'] ) && '' != $text_logo_typo['font-family'] ): ?>
		font-family: <?php echo stripslashes( htmlspecialchars( $text_logo_typo['font-family'] ) ); ?>;
	<?php endif; ?>
	<?php if ( isset( $text_logo_typo['font-size'] ) && '' != $text_logo_typo['font-size'] ): ?>
		font-size: <?php echo esc_attr( $text_logo_typo['font-size'] ) ?>;
	<?php endif; ?>
}
<?php endif; ?>



<?php  if ( ekko_get_option( 'tek-h1-heading' ) ) : ?>
	.container h1 {
		<?php if ( isset( $h1_heading['color'] ) && '' != $h1_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h1_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-weight'] ) && '' != $h1_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h1_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-family'] ) && '' != $h1_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h1_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['font-size'] ) && '' != $h1_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h1_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['text-align'] ) && '' != $h1_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h1_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['line-height'] ) && '' != $h1_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h1_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['text-transform'] ) && '' != $h1_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h1_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h1_heading['letter-spacing'] ) && '' != $h1_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h1_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-h2-heading' ) ) : ?>
	.container h2, #popup-modal .modal-content h2, h2.blog-single-title a  {
		<?php if ( isset( $h2_heading['color'] ) && '' != $h2_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h2_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-weight'] ) && '' != $h2_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h2_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-family'] ) && '' != $h2_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h2_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['font-size'] ) && '' != $h2_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h2_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['text-align'] ) && '' != $h2_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h2_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['line-height'] ) && '' != $h2_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h2_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['text-transform'] ) && '' != $h2_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h2_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h2_heading['letter-spacing'] ) && '' != $h2_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h2_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-h3-heading' ) ) : ?>
	.container h3 {
		<?php if ( isset( $h3_heading['color'] ) && '' != $h3_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h3_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-weight'] ) && '' != $h3_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h3_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-family'] ) && '' != $h3_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h3_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['font-size'] ) && '' != $h3_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h3_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['text-align'] ) && '' != $h3_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h3_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['line-height'] ) && '' != $h3_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h3_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['text-transform'] ) && '' != $h3_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h3_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h3_heading['letter-spacing'] ) && '' != $h3_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h3_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-h4-heading' ) ) : ?>
	.content-area .vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4,
	.container h4, .kd-photobox .phb-content h4, .content-area .vc_grid-item-mini .vc_gitem_row .vc_gitem-col h4 {
		<?php if ( isset( $h4_heading['color'] ) && '' != $h4_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h4_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-weight'] ) && '' != $h4_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h4_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-family'] ) && '' != $h4_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h4_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['font-size'] ) && '' != $h4_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h4_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['text-align'] ) && '' != $h4_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h4_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['line-height'] ) && '' != $h4_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h4_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['text-transform'] ) && '' != $h4_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h4_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h4_heading['letter-spacing'] ) && '' != $h4_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h4_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-h5-heading' ) ) : ?>
	.vc_grid-item-mini .vc_custom_heading h5,
	.container h5 {
		<?php if ( isset( $h5_heading['color'] ) && '' != $h5_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h5_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-weight'] ) && '' != $h5_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h5_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-family'] ) && '' != $h5_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h5_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['font-size'] ) && '' != $h5_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h5_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['text-align'] ) && '' != $h5_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h5_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['line-height'] ) && '' != $h5_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h5_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['text-transform'] ) && '' != $h5_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h5_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h5_heading['letter-spacing'] ) && '' != $h5_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h5_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-h6-heading' ) ) : ?>
	.container h6, .key-icon-box h6.service-heading {
		<?php if ( isset( $h6_heading['color'] ) && '' != $h6_heading['color'] ) : ?>
			color: <?php echo esc_attr( $h6_heading['color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-weight'] ) && '' != $h6_heading['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $h6_heading['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-family'] ) && '' != $h6_heading['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $h6_heading['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['font-size'] ) && '' != $h6_heading['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h6_heading['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['text-align'] ) && '' != $h6_heading['text-align'] ) : ?>
			text-align: <?php echo esc_attr( $h6_heading['text-align'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['line-height'] ) && '' != $h6_heading['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h6_heading['line-height'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['text-transform'] ) && '' != $h6_heading['text-transform'] ) : ?>
			text-transform: <?php echo esc_attr( $h6_heading['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $h6_heading['letter-spacing'] ) && '' != $h6_heading['letter-spacing'] ) : ?>
			letter-spacing: <?php echo esc_attr( $h6_heading['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-topbar-typo' ) ) : ?>
	.topbar-phone, .topbar-email, .topbar-socials a, #menu-topbar-menu a, .navbar-topbar a, .topbar-opening-hours,
	.topbar-lang-switcher ul li span {
		<?php if ( isset( $topbar_typo['font-weight'] ) && '' != $topbar_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $topbar_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $topbar_typo['font-size'] ) && '' != $topbar_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $topbar_typo['font-size'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>


<?php  if ( ekko_get_option( 'tek-menu-typo' ) ) : ?>
	body .navbar-default .nav li a, body .modal-menu-item {
		<?php if ( isset( $menu_typo['font-weight'] ) && '' != $menu_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $menu_typo['font-weight'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['font-family'] ) && '' != $menu_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $menu_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['font-size'] ) && '' != $menu_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $menu_typo['font-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['text-transform'] ) && '' != $menu_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $menu_typo['text-transform'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $menu_typo['letter-spacing'] ) && '' != $menu_typo['letter-spacing'] ): ?>
			letter-spacing: <?php echo esc_attr( $menu_typo['letter-spacing'] ) ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-heading-typekit-selector' ) ) : ?>
	.container h1, .container h2, .container h3, .pricing .col-lg-3, .chart, .pb_counter_number, .pc_percent_container, #logo .logo {
		font-family: <?php echo esc_attr( ekko_get_option( 'tek-heading-typekit-selector' ) ) ?>;
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-heading-typekit-selector' ) ) : ?>
	.vc_grid-item-mini .vc_gitem-post-data div, .vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_date div {
			font-family: <?php echo esc_attr( ekko_get_option( 'tek-heading-typekit-selector' ) ) ?> !important;
	}
<?php endif; ?>


<?php  if ( ekko_get_option( 'tek-body-typekit-selector' ) ) : ?>
	body, .box, .navbar-default .nav li a, .modal-menu-item, .cb-text-area p, body p {
			font-family: <?php echo esc_attr( ekko_get_option( 'tek-body-typekit-selector' ) ) ?>;
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-layout-fw-content-bg' ) ) : ?>
	body,
	#wrapper,
	.back-to-top,
	.comment-body,
	.portfolio-navigation-links,
	.woocommerce form.checkout_coupon, .woocommerce form.login,
	.woocommerce form.register,
	#commentform textarea,
	#single-page #comments input[type="text"], #single-page #comments input[type="email"], #comments input[type="text"], #comments input[type="email"], #comments input[type="url"],
	.blog_widget .woocommerce-product-search .search-field,
	.blog_widget .search-form .search-field,
	.woocommerce-checkout #single-page table {
			background-color: <?php echo esc_attr( ekko_get_option( 'tek-layout-fw-content-bg' ) ); ?>;
	}
<?php endif; ?>

<?php  if ( ekko_get_option( 'tek-layout-boxed-body-bg') && ekko_get_option( 'tek-layout-style' ) == 'boxed') : ?>
	html {
		<?php if ( isset( $layout_boxed_body_bg['background-color'] ) && '' != $layout_boxed_body_bg['background-color'] ): ?>
			background-color: <?php echo esc_attr( $layout_boxed_body_bg['background-color'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-image'] ) && '' != $layout_boxed_body_bg['background-image'] ): ?>
			background-image: url("<?php echo esc_attr( $layout_boxed_body_bg['background-image'] ) ?>");
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-size'] ) && '' != $layout_boxed_body_bg['background-size'] ): ?>
			background-size: <?php echo esc_attr( $layout_boxed_body_bg['background-size'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-repeat'] ) && '' != $layout_boxed_body_bg['background-repeat'] ): ?>
			background-repeat: <?php echo esc_attr( $layout_boxed_body_bg['background-repeat'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-position'] ) && '' != $layout_boxed_body_bg['background-position'] ): ?>
			background-position: <?php echo esc_attr( $layout_boxed_body_bg['background-position'] ) ?>;
		<?php endif; ?>
		<?php if ( isset( $layout_boxed_body_bg['background-attachment'] ) && '' != $layout_boxed_body_bg['background-attachment'] ): ?>
			background-attachment: <?php echo esc_attr( $layout_boxed_body_bg['background-attachment'] ) ?>;
		<?php endif; ?>
	}
	<?php if ( ekko_get_option( 'tek-layout-boxed-width' ) ) : ?>
		@media (min-width: <?php echo esc_attr( ekko_get_option( 'tek-layout-boxed-width' ) ); ?>px) {
			body.boxed #main-menu .navbar-nav .mega-menu > .dropdown-menu:before,
			body.boxed {
	    		width: <?php echo esc_attr( ekko_get_option( 'tek-layout-boxed-width' ) ); ?>px;
			}
			.boxed #footer.fixed,
			.boxed .navbar.navbar-default {
			    margin-left: -<?php echo esc_attr( ekko_get_option( 'tek-layout-boxed-width' ) )/2; ?>px;
			    max-width: <?php echo esc_attr( ekko_get_option( 'tek-layout-boxed-width' ) ); ?>px;
			}
			body.boxed #main-menu .navbar-nav .mega-menu > .dropdown-menu:before {
				left: -<?php echo esc_attr(( ekko_get_option( 'tek-layout-boxed-width' ) ) - 1240)/2 + 5; ?>px;
			}
			body.boxed {
			    -webkit-box-shadow: 0px 2px 40px 0px hsla(240, 0%, 6%, 0.05);
			    box-shadow: 0px 2px 40px 0px hsla(240, 0%, 6%, 0.05);
			    margin: 0 auto;
			}
			body.boxed #wrapper {
			    overflow: hidden;
			}
			body.modal-open.boxed {
			    padding-right: 0!important;
			}
			body.boxed #footer.fixed,
			body.boxed .navbar.navbar-default {
			    left: 50%;
			}
		}
	<?php endif; ?>
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-blog-titlebar-background' ) ) : ?>
	.entry-header.blog-header {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-blog-titlebar-background' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-blog-text-color' ) ) : ?>
	.search:not(.post-type-archive-product) .breadcrumbs,
	.search .entry-header .section-heading,
	.archive.author .breadcrumbs,
	.archive.author .entry-header .section-heading,
	.archive.category .breadcrumbs,
	.archive.category .entry-header .section-heading,
	.archive.tag .breadcrumbs,
	.archive.tag .entry-header .section-heading,
	.archive.date .breadcrumbs,
	.archive.date .entry-header .section-heading,
	.blog .breadcrumbs,
	.blog .entry-header .section-heading,
	.blog .entry-header .section-subheading {
		color: <?php echo esc_attr( ekko_get_option( 'tek-blog-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-titlebar-color' ) ) : ?>
	.page-template-default .entry-header {
		  background-color: <?php echo esc_attr( ekko_get_option( 'tek-titlebar-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-titlebar-text-color' ) ) : ?>
	.page-template-default .entry-header .breadcrumbs,
	.page-template-default .entry-header .section-heading,
	.page-template-default .entry-header .section-subheading {
		  color: <?php echo esc_attr( ekko_get_option( 'tek-titlebar-text-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.hover_solid_primary:hover {
	   background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?> !important;
	   border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?> !important;
	   color: #fff !important;
	}
<?php endif; ?>

<?php if ( isset( $link_color['regular'] ) && '' != $link_color['regular'] ) : ?>
	.single-page-content a, .blog-content a {
		color: <?php echo esc_attr( $link_color['regular'] ); ?>;
	}
<?php endif; ?>

<?php if ( isset( $link_color['hover'] ) && '' != $link_color['hover'] ) : ?>
	.single-page-content a:hover, .blog-content a:hover  {
		color: <?php echo esc_attr( $link_color['hover'] ); ?>;
	}
<?php endif; ?>


<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.btn-hover-2 .tt_button.tt_primary_button.btn_primary_color:hover {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?> !important;
	}
	.btn-hover-2 .hover_solid_primary.tt_button::before {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.btn-hover-2 .hover_solid_primary.tt_button:hover {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?> !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-secondary-color' ) ) : ?>
	.hover_solid_secondary:hover {
	   background-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?> !important;
	   border-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?> !important;
	   color: #fff !important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-secondary-color' ) ) : ?>
	.vc_grid-item-mini .blog-detailed-grid .vc_btn3-container:hover a,
	.btn-hover-2 .tt_button:hover,
	.woocommerce .btn-hover-2 ul.products li.product.woo-detailed-style .added_to_cart:hover,
	.woocommerce .btn-hover-2 ul.products li.product.woo-detailed-style .button:hover,
	.btn-hover-2 .woocommerce ul.products li.product.woo-detailed-style .added_to_cart:hover,
	.btn-hover-2 .woocommerce ul.products li.product.woo-detailed-style .button:hover {
	   color: #fff !important;
	   border-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?> !important;
	}
<?php endif; ?>



<?php if ( ekko_get_option( 'tek-secondary-color' ) ) : ?>
	.btn-hover-2 .tt_button.tt_primary_button.btn_secondary_color:hover,
	.btn-hover-2 .tt_button::before,
	.woocommerce .btn-hover-2 ul.products li.product.woo-detailed-style .added_to_cart::before,
	.woocommerce .btn-hover-2 ul.products li.product.woo-detailed-style .button::before,
	.btn-hover-2 .woocommerce ul.products li.product.woo-detailed-style .added_to_cart::before,
	.btn-hover-2 .woocommerce ul.products li.product.woo-detailed-style .button::before {
	   background-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?> !important;
	}
<?php endif; ?>

.hover_outline_primary:hover {
   background-color: <?php if ( ekko_get_option( 'tek-main-color' ) ) { echo esc_attr( ekko_get_option( 'tek-main-color' ) ); } ?> !important;
   border-color: <?php if ( ekko_get_option( 'tek-main-color' ) ) { echo esc_attr( ekko_get_option( 'tek-main-color' ) ); } ?> !important;
   background: transparent !important;
}

.hover_outline_secondary:hover {
   color: <?php if ( ekko_get_option( 'tek-secondary-color' ) ) { echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); } ?> !important;
   border-color: <?php if ( ekko_get_option( 'tek-secondary-color' ) ) { echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); } ?> !important;
   background-color: transparent !important;
}

<?php if ( ekko_get_option( 'tek-contact-form-bg-color' ) ) : ?>
	.wpb_wrapper #loginform .input, .woocommerce-product-search .search-field, .search-form .search-field, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-select, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select,
	.wpcf7 .wpcf7-select, .wpcf7-form textarea, .wpb_wrapper #loginform .input, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .modal-content-inner .wpcf7 .wpcf7-text, .modal-content-inner .wpcf7 .wpcf7-email {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-bg-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-contact-form-typo' ) ) : ?>
	.wpb_wrapper #loginform .input, .woocommerce-product-search .search-field, .search-form .search-field, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select,
	.wpcf7 .wpcf7-select, .wpcf7-form textarea, .wpb_wrapper #loginform .input, .wpcf7 input[type="date"], .wpcf7 .wpcf7-text, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .modal-content-inner .wpcf7 .wpcf7-text, .modal-content-inner .wpcf7 .wpcf7-email {
		<?php if ( isset( $contact_form_typo['font-weight'] ) && '' != $contact_form_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $contact_form_typo['font-weight'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['color'] ) && '' != $contact_form_typo['color'] ): ?>
			color: <?php echo esc_attr( $contact_form_typo['color'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['font-size'] ) && '' != $contact_form_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $contact_form_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $contact_form_typo['text-transform'] ) && '' != $contact_form_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $contact_form_typo['text-transform'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>


<?php if ( ekko_get_option( 'tek-contact-form-placeholder-color' ) ) : ?>
	.wpcf7 .wpcf7-text::-webkit-input-placeholder { color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7 .wpcf7-text::-moz-placeholder { color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7 .wpcf7-text:-ms-input-placeholder { color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-webkit-input-placeholder { color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea::-moz-placeholder {color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
	.wpcf7-form-control-wrap .wpcf7-textarea:-ms-input-placeholder {color: <?php echo esc_attr( ekko_get_option( 'tek-contact-form-placeholder-color' ) ); ?>; }
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-button-typo') ) : ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button,
	.tt_button, .wpcf7 .wpcf7-submit, .content-area .vc_grid .vc_gitem-zone-c .vc_general, .tt_button.modal-menu-item, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container a,
	.pricing-table .tt_button, .pricing-table.active .tt_button {
		<?php if ( isset( $button_typo['font-weight'] ) && '' != $button_typo['font-weight'] ): ?>
			font-weight: <?php echo esc_attr( $button_typo['font-weight'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
			color: <?php echo esc_attr( $button_typo['color'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['font-family'] ) && '' != $button_typo['font-family'] ): ?>
			font-family: <?php echo stripslashes( htmlspecialchars( $button_typo['font-family'] ) ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['font-size'] ) && '' != $button_typo['font-size'] ): ?>
			font-size: <?php echo esc_attr( $button_typo['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['text-transform'] ) && '' != $button_typo['text-transform'] ): ?>
			text-transform: <?php echo esc_attr( $button_typo['text-transform'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $button_typo['letter-spacing'] ) && '' != $button_typo['letter-spacing'] ): ?>
			letter-spacing: <?php echo esc_attr( $button_typo['letter-spacing'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
	.tt_button .iconita {
		<?php if ( isset( $button_typo['color'] ) && '' != $button_typo['color'] ): ?>
			color: <?php echo esc_attr( $button_typo['color'] ); ?>;
		<?php endif; ?>
	}

	.tt_button:hover, .wpcf7 .wpcf7-submit:hover, .content-area .vc_grid .vc_gitem-zone-c .vc_general:hover, .tt_button.modal-menu-item:hover, .kd-panel-phone a, .kd-panel-email a, .kd-panel-social-list .redux-social-media-list a .fab, .kd-panel-phone .fa, .kd-panel-email .fa,
	.team-member.design-classic .team-socials .fab, .team-member.design-classic .kd-team-contact a, .team-member.design-classic .fa, .team-member.design-classic .kd-team-contact a:hover, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container:hover a {
		color: <?php echo esc_attr( $button_typo['color'] ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-btn-border' ) ) : ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, #commentform #submit,
	#wrapper .vc_grid-btn-load_more .vc_general,
	.tt_button, .wpcf7 .wpcf7-submit, .content-area .vc_grid .vc_gitem-zone-c .vc_general, .tt_button.modal-menu-item, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container a {
		border-width: <?php echo esc_attr( ekko_get_option( 'tek-btn-border' ) ); ?>px!important;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-btn-padding') ) : ?>
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, #commentform #submit,
	#wrapper .vc_grid-btn-load_more .vc_general,
	.tt_button, .wpcf7 .wpcf7-submit, .content-area .vc_grid .vc_gitem-zone-c .vc_general, .tt_button.modal-menu-item {
		<?php if ( isset( $btn_padding['padding-top'] ) && '' != $btn_padding['padding-top'] ): ?>
			padding-top: <?php echo esc_attr( $btn_padding['padding-top'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-bottom'] ) && '' != $btn_padding['padding-bottom'] ): ?>
			padding-bottom: <?php echo esc_attr( $btn_padding['padding-bottom'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-left'] ) && '' != $btn_padding['padding-left'] ): ?>
			padding-left: <?php echo esc_attr( $btn_padding['padding-left'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $btn_padding['padding-right'] ) && '' != $btn_padding['padding-right'] ): ?>
			padding-right: <?php echo esc_attr( $btn_padding['padding-right'] ); ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-header-spacing' ) ) { ?>
	.menubar {
		padding-top: <?php echo esc_attr( ekko_get_option( 'tek-header-spacing' ) ); ?>px;
		padding-bottom: <?php echo esc_attr( ekko_get_option( 'tek-header-spacing' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-global-radius' ) != '' ) { ?>
	.rw-authorimg img,
	.woocommerce #review_form #commentform input[type="text"], .woocommerce #review_form #commentform input[type="email"], .woocommerce #review_form #respond #comment,
	.wpcf7 .wpcf7-text, .wpcf7 .wpcf7-number, .wpcf7-form textarea, .wpcf7 .wpcf7-email, .wpcf7 .wpcf7-select, .wpcf7 input[type="date"], .blog-header-form .wpcf7 .wpcf7-email, .section .wpcf7-not-valid-tip, .kd-side-panel .wpcf7-not-valid-tip,
	#single-page #comments input[type="text"], #single-page #comments input[type="email"], #single-page #comments input[type="url"], #single-page #comments textarea, #comments input[type="text"], #comments input[type="email"], #comments input[type="url"], #comments textarea,
	.wpb_wrapper #loginform .input, .woocommerce #wrapper .quantity .qty, .features-tabs .tab-controls li a,
	.woocommerce-checkout .woocommerce form .form-row select, .woocommerce-checkout .woocommerce form .form-row input.input-text, .woocommerce-checkout .woocommerce form .form-row textarea,
	.woocommerce-checkout #single-page .select2-container--default .select2-selection--single, .woocommerce-checkout .woocommerce #coupon_code,
	.woocommerce-cart #single-page table.cart .quantity .qty, .woocommerce .coupon #coupon_code {
		border-radius: <?php echo esc_attr( ekko_get_option( 'tek-global-radius' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-btn-radius' ) != '' ) { ?>
	.vc_wp_search .search-field,
	.rw-authorimg img,
	.add_to_cart_button,
	.woocommerce-error .button,
	.woocommerce-info .button,
	.woocommerce-message .button,
	div.wpforms-container-full .wpforms-form input[type=submit],
	div.wpforms-container-full .wpforms-form button[type=submit],
	div.wpforms-container-full .wpforms-form input[type=email],
	div.wpforms-container-full .wpforms-form input[type=number],
	div.wpforms-container-full .wpforms-form input[type=search],
	div.wpforms-container-full .wpforms-form input[type=text],
	div.wpforms-container-full .wpforms-form input[type=url],
	div.wpforms-container-full .wpforms-form select,
	div.wpforms-container-full .wpforms-form textarea,
	.wpforms-confirmation-container-full, div[submit-success] > .wpforms-confirmation-container-full:not(.wpforms-redirection-message),
	.bbp-login-form .bbp-username input, .bbp-login-form .bbp-email input, .bbp-login-form .bbp-password input, .blog_widget #bbp_search,
	#bbpress-forums #bbp-search-form #bbp_search,
	#user-submit, #bbp_search_submit,
	.woocommerce ul.products li.product .added_to_cart, .woocommerce ul.products li.product .button, #commentform #submit, #single-page #commentform #submit, 
	#wrapper .vc_grid-btn-load_more .vc_general,
	.woocommerce #review_form #respond .form-submit #submit,
	.tt_button, .wpcf7 .wpcf7-submit, .tt_button.modal-menu-item, .vc_grid-item-mini .blog-detailed-grid .vc_btn3-container a, #single-page .bbp-login-form .user-submit, .woocommerce .woocommerce-form-login .button, .woocommerce .checkout_coupon .button, .content-area .vc_grid .vc_gitem-zone-c .vc_general, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .woocommerce-cart #single-page table.cart .button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, #single-page .return-to-shop a, .woocommerce-account #single-page .woocommerce-Button, .keydesign-cart .buttons .btn, .woocommerce div.product form.cart .button, .back-to-top,
	.blog-page-numbers li.active a, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .tags a:after, .tagcloud a:after, .kd-contact-form.inline-cf.white-input-bg,
	.woocommerce-account #single-page .woocommerce-button,
	.woocommerce-account #single-page .button,
	.wpb_wrapper #loginform .button, .owl-nav div.owl-next, .owl-nav div.owl-prev,
	.team-member.design-classic .team-socials a:after, .team-member.design-classic .kd-team-contact .kd-team-email:before, .team-member.design-classic .kd-team-contact .kd-team-phone:before,
	#wrapper .tparrows:not(.hades):not(.ares):not(.hebe):not(.hermes):not(.hephaistos):not(.persephone):not(.erinyen):not(.zeus):not(.metis):not(.dione):not(.uranus),
	.kd-panel-phone:after, .kd-panel-email:after, .kd-panel-social-list .redux-social-media-list a:after {
		border-radius: <?php echo esc_attr( ekko_get_option( 'tek-btn-radius' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-btn-radius' ) != '' ) { ?>
	.inline-cf .wpcf7-form-control-wrap input,
	.woocommerce #wrapper .quantity .qty {
		border-bottom-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-btn-radius' ) ); ?>px;
	    border-top-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-btn-radius' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) { ?>
	.related-posts .post img, .related-content .portfolio img, #posts-content.blog-img-left-list .entry-image, #posts-content.blog-img-left-list .post img, #posts-content.blog-detailed-grid .post img, #posts-content.blog-minimal-grid .post img,
	.video-modal-local,
	.woocommerce-error, .woocommerce-info, .woocommerce-message,
	#main-menu .navbar-nav .dropdown-menu a,
	.content-area .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-b,
	.content-area .vc_gitem-animate-scaleRotateIn .vc_gitem-zone-a,
	.content-area .vc_gitem-animate-fadeIn .vc_gitem-zone-a,
	.vc_grid-item-mini .vc_gitem-zone,
	#main-menu .navbar-nav .menu-item-has-children .dropdown-menu,
	.woocommerce ul.products li.product.product-category,
	.content-area .vc_grid-item-mini .vc_gitem-zone.vc_gitem-zone-c,
	.kd-photobox, .kd-photobox .photobox-img img, .cb-container, .sliding_box_child, .key-icon-box, .key-icon-box .ib-wrapper, .pricing-table.DetailedStyle, .pricing-table.MinimalStyle, .row .vc_toggle,
	body.woocommerce ul.products li.product.woo-minimal-style, body.woocommerce-page ul.products li.product.woo-minimal-style, .woocommerce ul.products li.product.woo-detailed-style, .woocommerce-page ul.products li.product.woo-detailed-style,
	body .woo-minimal-style ul.products li.product, body.woocommerce-page ul.products li.product.woo-minimal-style,
	.single-page-content .woo-detailed-style ul.products li.product, .single-page-content .woo-minimal-style ul.products li.product,
	.team-member.design-classic, .team-member.design-classic .team-image img,
	.key-reviews, .video-container img,
	#posts-content.blog-detailed-grid .post, #posts-content.blog-detailed-grid .post img,
	#posts-content.blog-minimal-grid .post, #posts-content.blog-minimal-grid .post img,
	#posts-content .related-posts .post, .single-post #posts-content .related-posts img,
	.comment-list .comment-body,
	.vc_grid-item-mini .blog-detailed-grid img,
	.vc_grid-item-mini .blog-detailed-grid,
	.woocommerce ul.products li.product .onsale,
	.single-portfolio .related-content .portfolio, .single-portfolio .related-content .portfolio img,
	.features-tabs .tab-image-container img, .app-gallery .owl-carousel img,
	#wrapper .wpb_single_image .vc_single_image-wrapper.vc_box_shadow img, .mg-single-img img,
	.feature-sections-wrapper .owl-wrapper-outer, .single-format-gallery #posts-content .gallery .owl-wrapper-outer, #posts-content .entry-gallery .owl-wrapper-outer,
	.feature-sections-wrapper .featured-image img, .feature-sections-wrapper .entry-video,
	.kd-alertbox, #wrapper blockquote,
	.topbar-search-container, .topbar-lang-switcher ul,
	.tcards_message,
	#wrapper .wpcf7 form .wpcf7-response-output,
	.wpcf7 form .wpcf7-response-output,
	.contact-map-container, .contact-map-container .business-info-wrapper,
	.photo-gallery-wrapper .owl-wrapper-outer .owl-item img,
	.single-post #posts-content .entry-image img, .single-post #posts-content .entry-video .background-video-image, .single-post #posts-content .entry-video .background-video-image img {
		border-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) { ?>
	.woo-detailed-style .woo-entry-wrapper,
	#posts-content.blog-detailed-grid .entry-wrapper, #wrapper .blog-detailed-grid .entry-wrapper,
	#posts-content.blog-minimal-grid .entry-wrapper, #wrapper .blog-minimal-grid .entry-wrapper,
	.single-portfolio .related-content .portfolio .entry-wrapper {
		border-bottom-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
		border-bottom-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
	}
<?php } ?>

<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) { ?>
.woo-detailed-style .woo-entry-image, .woo-minimal-style .woo-entry-image,
.single-portfolio .related-posts .entry-image {
	border-top-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
	border-top-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
}
<?php } ?>

<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) { ?>
.testimonials.slider.with-image .tt-content .tt-content-inner .tt-image img {
	border-top-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
	border-bottom-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
}
<?php } ?>

<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) { ?>
.testimonials.slider.with-image .tt-container {
	border-top-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
	border-bottom-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
}
<?php } ?>

@media (max-width: 767px) {
		<?php if ( ekko_get_option( 'tek-cards-border-radius' ) != '' ) : ?>
		.testimonials.slider.with-image .tt-container {
			border-bottom-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
			border-bottom-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
		}
		.testimonials.slider.with-image .tt-content .tt-content-inner .tt-image img {
			border-top-left-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
			border-top-right-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
		}
		.team-member.design-creative .team-content-hover {
			border-radius: <?php echo esc_attr( ekko_get_option( 'tek-cards-border-radius' ) ); ?>px;
		}
	<?php endif; ?>
}

@media (max-width: 960px) {
	<?php if ( ekko_get_option( 'tek-header-menu-color-sticky' ) ) : ?>
	.navbar-nav .menu-item a {
		color: <?php echo esc_attr( ekko_get_option( 'tek-header-menu-color-sticky' ) ); ?> !important;
	}
	<?php endif; ?>

	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.ib-hover-2.key-icon-box .ib-wrapper {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}
	.key-icon-box.ib-hover-1 .ib-wrapper {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-default-typo-mobile' ) ) : ?>
	body, .box, .cb-text-area p, body p , .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
		<?php if ( isset( $default_typo_mobile['font-size'] ) && '' != $default_typo_mobile['font-size'] ): ?>
			font-size: <?php echo esc_attr( $default_typo_mobile['font-size'] ); ?>;
		<?php endif; ?>
		<?php if ( isset( $default_typo_mobile['line-height'] ) && '' != $default_typo_mobile['line-height'] ): ?>
			line-height: <?php echo esc_attr( $default_typo_mobile['line-height'] ); ?>;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h1-heading-mobile' ) ) : ?>
	.container h1 {
		<?php if ( isset( $h1_heading_mobile['font-size'] ) && '' != $h1_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h1_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h1_heading_mobile['line-height'] ) && '' != $h1_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h1_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h2-heading-mobile' ) ) : ?>
	.vc_row .container h2, .container .tab-text-container h2, header.kd-section-title h2, .container h2 {
		<?php if ( isset( $h2_heading_mobile['font-size'] ) && '' != $h2_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h2_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h2_heading_mobile['line-height'] ) && '' != $h2_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h2_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h3-heading-mobile' ) ) : ?>
	.container h3, .container h3.vc_custom_heading {
		<?php if ( isset( $h3_heading_mobile['font-size'] ) && '' != $h3_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h3_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h3_heading_mobile['line-height'] ) && '' != $h3_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h3_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h4-heading-mobile' ) ) : ?>
	.container h4, .container h4.vc_custom_heading {
		<?php if ( isset( $h4_heading_mobile['font-size'] ) && '' != $h4_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h4_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h4_heading_mobile['line-height'] ) && '' != $h4_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h4_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h5-heading-mobile' ) ) : ?>
	.container h5, .container h5.vc_custom_heading {
		<?php if ( isset( $h5_heading_mobile['font-size'] ) && '' != $h5_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h5_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h5_heading_mobile['line-height'] ) && '' != $h5_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h5_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php  if ( ekko_get_option( 'tek-h6-heading-mobile' ) ) : ?>
	.container h6, .container h6.vc_custom_heading {
		<?php if ( isset( $h6_heading_mobile['font-size'] ) && '' != $h6_heading_mobile['font-size'] ) : ?>
			font-size: <?php echo esc_attr( $h6_heading_mobile['font-size'] ) ?> !important;
		<?php endif; ?>
		<?php if ( isset( $h6_heading_mobile['line-height'] ) && '' != $h6_heading_mobile['line-height'] ) : ?>
			line-height: <?php echo esc_attr( $h6_heading_mobile['line-height'] ) ?> !important;
		<?php endif; ?>
	}
	<?php endif; ?>

	<?php if ( ekko_get_option( 'tek-mobile-logo-image-size' ) ) : ?>
		#logo .logo img {
			width: <?php echo esc_attr( ekko_get_option( 'tek-mobile-logo-image-size' ) ) ?>px;
		}
	<?php endif; ?>

	<?php if ( ekko_get_option( 'tek-preloader-image-size-mobile' ) ) : ?>
	html:before {
		background-size: <?php echo esc_attr( ekko_get_option( 'tek-preloader-image-size-mobile' ) ) ?>px;
	}
	<?php endif; ?>
}


<?php if ( class_exists( 'Tribe__Events__Main' ) && ( ( tribe_is_event() || tribe_is_event_category() || tribe_is_in_main_loop() || tribe_is_view() || is_post_type_archive( 'tribe_events' ) || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' ) ) ) ) { ?>

.tribe-common .tribe-common-anchor-alt:active,
.tribe-common .tribe-common-anchor-alt:focus,
.tribe-common .tribe-common-anchor-alt:hover
.tribe-common .tribe-common-cta--alt:active,
.tribe-common .tribe-common-cta--alt:focus,
.tribe-common .tribe-common-cta--alt:hover,
.tribe-events .tribe-events-c-ical__link,
.tribe-common--breakpoint-medium.tribe-events .tribe-events-calendar-list__event-datetime-featured-text,
.tribe-events .tribe-events-calendar-month__day--current .tribe-events-calendar-month__day-date,
.tribe-events .tribe-events-calendar-month__day--current .tribe-events-calendar-month__day-date-link,
.tribe-events .tribe-events-calendar-month-mobile-events__mobile-event-datetime-featured-text,
.tribe-common--breakpoint-medium.tribe-events .tribe-events-calendar-day__event-datetime-featured-text,
.single-tribe_events a.tribe-events-gcal,
.single-tribe_events a.tribe-events-gcal:hover,
.single-tribe_events a.tribe-events-ical,
.single-tribe_events a.tribe-events-ical:hover {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		color: #25b15f;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
	.tribe-common .tribe-common-anchor-alt,
	.tribe-common .tribe-common-anchor-alt:active,
	.tribe-common .tribe-common-anchor-alt:focus,
	.tribe-common .tribe-common-anchor-alt:hover,
	.tribe-common .tribe-common-cta--alt,
	.tribe-events .tribe-events-c-ical__link {
		border-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	}
<?php endif; ?>

.tribe-common .tribe-common-form-control-toggle__input:checked,
.tribe-common .tribe-common-c-btn,
.tribe-common a.tribe-common-c-btn,
.tribe-events .datepicker .day.active,
.tribe-events .datepicker .day.active.focused,
.tribe-events .datepicker .day.active:focus,
.tribe-events .datepicker .day.active:hover,
.tribe-events .datepicker .month.active,
.tribe-events .datepicker .month.active.focused,
.tribe-events .datepicker .month.active:focus,
.tribe-events .datepicker .month.active:hover,
.tribe-events .datepicker .year.active,
.tribe-events .datepicker .year.active.focused,
.tribe-events .datepicker .year.active:focus,
.tribe-events .datepicker .year.active:hover,
.tribe-events .tribe-events-c-events-bar__search-button:before,
.tribe-events .tribe-events-c-ical__link:active,
.tribe-events .tribe-events-c-ical__link:focus,
.tribe-events .tribe-events-c-ical__link:hover,
#tribe-events .tribe-events-button,
.tribe-events .tribe-events-c-view-selector__button:before,
.tribe-events .tribe-events-calendar-list__event-row--featured .tribe-events-calendar-list__event-date-tag-datetime:after,
.tribe-events .tribe-events-calendar-month__calendar-event--featured:before,
.tribe-events .tribe-events-calendar-month__day-cell--selected,
.tribe-events .tribe-events-calendar-month__day-cell--selected:focus,
.tribe-events .tribe-events-calendar-month__day-cell--selected:hover,
.tribe-events .tribe-events-calendar-month__mobile-events-icon--event,
.tribe-theme-twentyseventeen .tribe-events .tribe-events-calendar-month__day-cell--selected:focus,
.tribe-theme-twentyseventeen .tribe-events .tribe-events-calendar-month__day-cell--selected:hover,
.tribe-theme-twentytwenty .tribe-events .tribe-events-calendar-month__day-cell--selected,
.tribe-events .tribe-events-calendar-day__event--featured:after {
	<?php if ( ekko_get_option( 'tek-main-color' ) ) : ?>
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-main-color' ) ); ?>;
	<?php else : ?>
		background-color: #25b15f;
	<?php endif; ?>
}

<?php if ( ekko_get_option( 'tek-secondary-color' ) ) : ?>
	.tribe-common .tribe-common-c-btn:focus, .tribe-common .tribe-common-c-btn:hover, .tribe-common a.tribe-common-c-btn:focus, .tribe-common a.tribe-common-c-btn:hover {
		background-color: <?php echo esc_attr( ekko_get_option( 'tek-secondary-color' ) ); ?>;
	}
<?php endif; ?>

<?php if ( ekko_get_option( 'tek-btn-radius' ) != '' ) { ?>
	.tribe-events .tribe-events-c-ical__link,
	.tribe-common .tribe-common-c-btn, .tribe-common a.tribe-common-c-btn {
		border-radius: <?php echo esc_attr( ekko_get_option( 'tek-btn-radius' ) ); ?>px;
	}
<?php } ?>
<?php } ?>

<?php if ( ( isset( $primary_ttf_font['url'] ) && '' != $primary_ttf_font['url'] ) || ( isset( $primary_woff_font['url'] ) && '' != $primary_woff_font['url'] ) ) { ?>
	@font-face {
	  font-family: 'PrimaryCustomFont';
	  src: <?php if ($primary_woff_font['url']) { ?> url('<?php echo esc_attr($primary_woff_font['url']) ?>') format('woff'), <?php } ?>
	  <?php if ($primary_ttf_font['url']) { ?> url('<?php echo esc_attr($primary_ttf_font['url']) ?>')  format('truetype') <?php } ?>
	}
<?php } ?>


<?php if ( ( isset( $secondary_ttf_font['url'] ) && '' != $secondary_ttf_font['url'] ) || ( isset( $secondary_woff_font['url'] ) && '' != $secondary_woff_font['url'] ) ) { ?>
	@font-face {
	  font-family: 'SecondaryCustomFont';
	  src: <?php if ($secondary_woff_font['url']) { ?> url('<?php echo esc_attr($secondary_woff_font['url']) ?>') format('woff'), <?php } ?>
	  <?php if ($secondary_ttf_font['url']) { ?> url('<?php echo esc_attr($secondary_ttf_font['url']) ?>')  format('truetype') <?php } ?>
	}
<?php } ?>

<?php if (ekko_get_option( 'tek-body-custom-font' )): ?>
body, .box, .cb-text-area p, body p , .upper-footer .search-form .search-field, .upper-footer select, .footer_widget .wpml-ls-legacy-dropdown a, .footer_widget .wpml-ls-legacy-dropdown-click a {
	<?php if (ekko_get_option( 'tek-body-custom-font' ) == 'primary-custom-font'): ?>
	font-family: 'PrimaryCustomFont'!important;
	<?php elseif (ekko_get_option( 'tek-body-custom-font' ) == 'secondary-custom-font'): ?>
	font-family: 'SecondaryCustomFont'!important;
	<?php endif; ?>
}
<?php endif; ?>

<?php if (ekko_get_option( 'tek-headings-custom-font' )): ?>
.container h4, .container h5, .container h6,
.container h1, .container h2, .container h3, .pricing .col-lg-3, .chart, .pb_counter_number, .pc_percent_container, #logo .logo, .vc_grid-item-mini .vc_gitem-post-data div, .vc_grid-item-mini .vc_gitem-post-data.vc_gitem-post-data-source-post_date div {
	<?php if (ekko_get_option( 'tek-headings-custom-font' ) == 'primary-custom-font'): ?>
	font-family: 'PrimaryCustomFont'!important;
	<?php elseif (ekko_get_option( 'tek-headings-custom-font' ) == 'secondary-custom-font'): ?>
	font-family: 'SecondaryCustomFont'!important;
	<?php endif; ?>
}
<?php endif; ?>
