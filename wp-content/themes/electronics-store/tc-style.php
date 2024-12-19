<?php 
	$electronics_store_custom_css ='';

	/*----------------Width Layout -------------------*/
	$electronics_store_theme_lay = get_theme_mod( 'electronics_store_width_options','Full Layout');
    if($electronics_store_theme_lay == 'Full Layout'){
		$electronics_store_custom_css .='body{';
			$electronics_store_custom_css .='max-width: 100%;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == 'Contained Layout'){
		$electronics_store_custom_css .='body{';
			$electronics_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == 'Boxed Layout'){
		$electronics_store_custom_css .='body{';
			$electronics_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$electronics_store_custom_css .='}';
	}

	/*------ Button Style -------*/
	$electronics_store_top_buttom_padding = get_theme_mod('electronics_store_top_button_padding');
	$electronics_store_left_right_padding = get_theme_mod('electronics_store_left_button_padding');
	if($electronics_store_top_buttom_padding != false || $electronics_store_left_right_padding != false ){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$electronics_store_custom_css .='padding-top: '.esc_attr($electronics_store_top_buttom_padding).'px; padding-bottom: '.esc_attr($electronics_store_top_buttom_padding).'px; padding-left: '.esc_attr($electronics_store_left_right_padding).'px; padding-right: '.esc_attr($electronics_store_left_right_padding).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_button_border_radius = get_theme_mod('electronics_store_button_border_radius');
	$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_button_border_radius).'px;';
	$electronics_store_custom_css .='}';

	$electronics_store_btn_font_weight = get_theme_mod('electronics_store_btn_font_weight');{
	$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
	$electronics_store_custom_css .='font-weight: '.esc_attr($electronics_store_btn_font_weight).';';
	$electronics_store_custom_css .='}';
	}   

	$electronics_store_button_text_transform = get_theme_mod( 'electronics_store_button_text_transform','Capitalize');
	if($electronics_store_button_text_transform == 'Capitalize'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$electronics_store_custom_css .='text-transform:Capitalize;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_button_text_transform == 'Lowercase'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$electronics_store_custom_css .='text-transform:Lowercase;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_button_text_transform == 'Uppercase'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$electronics_store_custom_css .='text-transform:Uppercase;';
		$electronics_store_custom_css .='}';
	}	$electronics_store_custom_css .='}';
	
	/*-------------- Woocommerce Button  -------------------*/

	$electronics_store_woocommerce_button_padding_top = get_theme_mod('electronics_store_woocommerce_button_padding_top');
	if($electronics_store_woocommerce_button_padding_top != false){
		$electronics_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$electronics_store_custom_css .='padding-top: '.esc_attr($electronics_store_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($electronics_store_woocommerce_button_padding_top).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_woocommerce_button_padding_right = get_theme_mod('electronics_store_woocommerce_button_padding_right');
	if($electronics_store_woocommerce_button_padding_right != false){
		$electronics_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$electronics_store_custom_css .='padding-left: '.esc_attr($electronics_store_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($electronics_store_woocommerce_button_padding_right).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_woocommerce_button_border_radius = get_theme_mod('electronics_store_woocommerce_button_border_radius');
	if($electronics_store_woocommerce_button_border_radius != false){
		$electronics_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_woocommerce_button_border_radius).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_related_product = get_theme_mod('electronics_store_related_product',true);

	if($electronics_store_related_product == false){
		$electronics_store_custom_css .='.related.products{';
			$electronics_store_custom_css .='display: none;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_woocommerce_product_border = get_theme_mod('electronics_store_woocommerce_product_border',true);

	if($electronics_store_woocommerce_product_border == false){
		$electronics_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_store_custom_css .='border: none;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_woocommerce_product_padding_top = get_theme_mod('electronics_store_woocommerce_product_padding_top',0);
		$electronics_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_store_custom_css .='padding-top: '.esc_attr($electronics_store_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($electronics_store_woocommerce_product_padding_top).'px;';
		$electronics_store_custom_css .='}';

	$electronics_store_woocommerce_product_padding_right = get_theme_mod('electronics_store_woocommerce_product_padding_right',0);
		$electronics_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_store_custom_css .='padding-left: '.esc_attr($electronics_store_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($electronics_store_woocommerce_product_padding_right).'px;';
		$electronics_store_custom_css .='}';

	$electronics_store_woocommerce_product_border_radius = get_theme_mod('electronics_store_woocommerce_product_border_radius');
	if($electronics_store_woocommerce_product_border_radius != false){
		$electronics_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_woocommerce_product_border_radius).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_woocommerce_product_box_shadow = get_theme_mod('electronics_store_woocommerce_product_box_shadow');
	if($electronics_store_woocommerce_product_box_shadow != false){
		$electronics_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_store_custom_css .='box-shadow: '.esc_attr($electronics_store_woocommerce_product_box_shadow).'px '.esc_attr($electronics_store_woocommerce_product_box_shadow).'px '.esc_attr($electronics_store_woocommerce_product_box_shadow).'px #aaa;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_product_sale_font_size = get_theme_mod('electronics_store_product_sale_font_size');
	$electronics_store_custom_css .='.woocommerce span.onsale {';
		$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_product_sale_font_size).'px;';
	$electronics_store_custom_css .='}';

	/*---- Preloader Color ----*/
	$electronics_store_preloader_color = get_theme_mod('electronics_store_preloader_color');
	$electronics_store_preloader_bg_color = get_theme_mod('electronics_store_preloader_bg_color');

	if($electronics_store_preloader_color != false){
		$electronics_store_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_preloader_color).';';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_preloader_bg_color != false){
		$electronics_store_custom_css .='.preloader{';
			$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_preloader_bg_color).';';
		$electronics_store_custom_css .='}';
	}

	// menu color
	$electronics_store_menu_color = get_theme_mod('electronics_store_menu_color');

	$electronics_store_custom_css .='.primary-navigation a,.primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation .current_page_ancestor > a{';
			$electronics_store_custom_css .='color: '.esc_attr($electronics_store_menu_color).'!important;';
	$electronics_store_custom_css .='}';

	// menu hover color
	$electronics_store_menu_hover_color = get_theme_mod('electronics_store_menu_hover_color');
	$electronics_store_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover{';
			$electronics_store_custom_css .='color: '.esc_attr($electronics_store_menu_hover_color).' !important;';
	$electronics_store_custom_css .='}';

	// Submenu color
	$electronics_store_submenu_menu_color = get_theme_mod('electronics_store_submenu_menu_color');
	$electronics_store_custom_css .='.primary-navigation ul.children a, .primary-navigation ul.childrenu li a{';
			$electronics_store_custom_css .='color: '.esc_attr($electronics_store_submenu_menu_color).' !important;';
	$electronics_store_custom_css .='}';

	// Submenu Hover Color Option
	$electronics_store_submenu_hover_color = get_theme_mod('electronics_store_submenu_hover_color');
	$electronics_store_custom_css .='.primary-navigation ul.children li a:hover {';
	$electronics_store_custom_css .='color: '.esc_attr($electronics_store_submenu_hover_color).'!important;';
	$electronics_store_custom_css .='} ';

	// Breadcrumb color option
	$electronics_store_breadcrumb_color = get_theme_mod('electronics_store_breadcrumb_color');
	$electronics_store_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_breadcrumb_color).'!important;';
	$electronics_store_custom_css .='}';

	// Breadcrumb bg color option
	$electronics_store_breadcrumb_background_color = get_theme_mod('electronics_store_breadcrumb_background_color');
	$electronics_store_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_breadcrumb_background_color).'!important;';
	$electronics_store_custom_css .='}';

	// Breadcrumb hover color option
	$electronics_store_breadcrumb_hover_color = get_theme_mod('electronics_store_breadcrumb_hover_color');
	$electronics_store_custom_css .='.bradcrumbs a:hover{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_breadcrumb_hover_color).'!important;';
	$electronics_store_custom_css .='}';

	// Breadcrumb hover bg color option
	$electronics_store_breadcrumb_hover_bg_color = get_theme_mod('electronics_store_breadcrumb_hover_bg_color');
	$electronics_store_custom_css .='.bradcrumbs a:hover{';
		$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_breadcrumb_hover_bg_color).'!important;';
	$electronics_store_custom_css .='}';

	// Category color option
	$electronics_store_category_color = get_theme_mod('electronics_store_category_color');
	$electronics_store_custom_css .='.tc-single-category a{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_category_color).'!important;';
	$electronics_store_custom_css .='}';

	// Category bg color option
	$electronics_store_category_background_color = get_theme_mod('electronics_store_category_background_color');
	$electronics_store_custom_css .='.tc-single-category a{';
		$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_category_background_color).'!important;';
	$electronics_store_custom_css .='}';

	// Single post image border radious
	$electronics_store_single_post_img_border_radius = get_theme_mod('electronics_store_single_post_img_border_radius', 0);
	$electronics_store_custom_css .='.feature-box img{';
		$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_single_post_img_border_radius).'px;';
	$electronics_store_custom_css .='}';

	/*-------- Scrollup icon css -------*/
	$electronics_store_scroll_icon_font_size = get_theme_mod('electronics_store_scroll_icon_font_size', 18);
	$electronics_store_custom_css .='.scrollup{';
		$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_scroll_icon_font_size).'px;';
	$electronics_store_custom_css .='}';

	$electronics_store_scroll_icon_color = get_theme_mod('electronics_store_scroll_icon_color');
	$electronics_store_custom_css .='.scrollup{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_scroll_icon_color).'!important;';
	$electronics_store_custom_css .='}';

	/*---- Copyright css ----*/
	$electronics_store_copyright_color = get_theme_mod('electronics_store_copyright_color');
	$electronics_store_custom_css .='#footer p,#footer p a{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_copyright_color).'!important;';
	$electronics_store_custom_css .='}';

	$electronics_store_copyright__hover_color = get_theme_mod('electronics_store_copyright__hover_color');
	$electronics_store_custom_css .='#footer p:hover,#footer p a:hover{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_copyright__hover_color).'!important;';
	$electronics_store_custom_css .='}';
	
	$electronics_store_copyright_fontsize = get_theme_mod('electronics_store_copyright_fontsize',16);
	if($electronics_store_copyright_fontsize != false){
		$electronics_store_custom_css .='#footer p{';
			$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_copyright_fontsize).'px; ';
		$electronics_store_custom_css .='}';
	}

	/*-------- Copyright background css -------*/
	$electronics_store_copyright_background_color = get_theme_mod('electronics_store_copyright_background_color');
	$electronics_store_custom_css .='#footer{';
		$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_copyright_background_color).';';
	$electronics_store_custom_css .='}';

	$electronics_store_copyright_top_bottom_padding = get_theme_mod('electronics_store_copyright_top_bottom_padding',15);
	if($electronics_store_copyright_top_bottom_padding != false){
		$electronics_store_custom_css .='#footer {';
			$electronics_store_custom_css .='padding-top:'.esc_attr($electronics_store_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($electronics_store_copyright_top_bottom_padding).'px; ';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_copyright_alignment = get_theme_mod( 'electronics_store_copyright_alignment','Center');
    if($electronics_store_copyright_alignment == 'Left'){
		$electronics_store_custom_css .='#footer p{';
			$electronics_store_custom_css .='text-align:start;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_copyright_alignment == 'Center'){
		$electronics_store_custom_css .='#footer p{';
			$electronics_store_custom_css .='text-align:center;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_copyright_alignment == 'Right'){
		$electronics_store_custom_css .='#footer p{';
			$electronics_store_custom_css .='text-align:end;';
		$electronics_store_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$electronics_store_woocommerce_sale_top_padding = get_theme_mod('electronics_store_woocommerce_sale_top_padding');
	$electronics_store_woocommerce_sale_left_padding = get_theme_mod('electronics_store_woocommerce_sale_left_padding');
	$electronics_store_custom_css .=' .woocommerce span.onsale{';
		$electronics_store_custom_css .='padding-top: '.esc_attr($electronics_store_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($electronics_store_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($electronics_store_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($electronics_store_woocommerce_sale_left_padding).'px;';
	$electronics_store_custom_css .='}';

	$electronics_store_woocommerce_sale_border_radius = get_theme_mod('electronics_store_woocommerce_sale_border_radius', 0);
	$electronics_store_custom_css .='.woocommerce span.onsale{';
		$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_woocommerce_sale_border_radius).'px;';
	$electronics_store_custom_css .='}';

	$electronics_store_sale_position = get_theme_mod( 'electronics_store_sale_position','right');
    if($electronics_store_sale_position == 'left'){
		$electronics_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electronics_store_custom_css .='left: -10px; right: auto;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_sale_position == 'right'){
		$electronics_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electronics_store_custom_css .='left: auto; right: 0;';
		$electronics_store_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$electronics_store_footer_background_color = get_theme_mod('electronics_store_footer_background_color');
	$electronics_store_custom_css .='.footertown{';
		$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_footer_background_color).';';
	$electronics_store_custom_css .='}';

	$electronics_store_footer_background_img = get_theme_mod('electronics_store_footer_background_img');
	if($electronics_store_footer_background_img != false){
		$electronics_store_custom_css .='.footertown{';
			$electronics_store_custom_css .='background: url('.esc_attr($electronics_store_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_theme_lay = get_theme_mod( 'electronics_store_img_footer','scroll');
	if($electronics_store_theme_lay == 'fixed'){
		$electronics_store_custom_css .='.footertown{';
			$electronics_store_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$electronics_store_custom_css .='}';
	}elseif ($electronics_store_theme_lay == 'scroll'){
		$electronics_store_custom_css .='.footertown{';
			$electronics_store_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_footer_img_position = get_theme_mod('electronics_store_footer_img_position','center center');
	if($electronics_store_footer_img_position != false){
		$electronics_store_custom_css .='.footertown{';
			$electronics_store_custom_css .='background-position: '.esc_attr($electronics_store_footer_img_position).'!important;';
		$electronics_store_custom_css .='}';
	}

	/*---- Comment form ----*/
	$electronics_store_comment_width = get_theme_mod('electronics_store_comment_width', '100');
	$electronics_store_custom_css .='#comments textarea{';
		$electronics_store_custom_css .=' width:'.esc_attr($electronics_store_comment_width).'%;';
	$electronics_store_custom_css .='}';

	$electronics_store_comment_submit_text = get_theme_mod('electronics_store_comment_submit_text', 'Post Comment');
	if($electronics_store_comment_submit_text == ''){
		$electronics_store_custom_css .='#comments p.form-submit {';
			$electronics_store_custom_css .='display: none;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_comment_title = get_theme_mod('electronics_store_comment_title', 'Leave a Reply');
	if($electronics_store_comment_title == ''){
		$electronics_store_custom_css .='#comments h2#reply-title {';
			$electronics_store_custom_css .='display: none;';
		$electronics_store_custom_css .='}';
	}

	// Sticky Header padding
	$electronics_store_sticky_header_padding = get_theme_mod('electronics_store_sticky_header_padding');
	$electronics_store_custom_css .='.fixed-header{';
		$electronics_store_custom_css .=' padding-top:'.esc_attr($electronics_store_sticky_header_padding).'px; padding-bottom:'.esc_attr($electronics_store_sticky_header_padding).'px;';
	$electronics_store_custom_css .='}';

	// Navigation Font Size 
	$electronics_store_nav_font_size = get_theme_mod('electronics_store_nav_font_size');
	if($electronics_store_nav_font_size != false){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_nav_font_size).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_navigation_case = get_theme_mod('electronics_store_navigation_case', 'uppercase');
	if($electronics_store_navigation_case == 'uppercase' ){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .=' text-transform: uppercase;';
		$electronics_store_custom_css .='}';
	}elseif($electronics_store_navigation_case == 'capitalize' ){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .=' text-transform: capitalize;';
		$electronics_store_custom_css .='}';
	}
    
     // site title color option
	$electronics_store_site_title_color_setting = get_theme_mod('electronics_store_site_title_color_setting');
	$electronics_store_custom_css .='.logo h1 a, .logo p a{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_site_title_color_setting).'!important;';
	$electronics_store_custom_css .='} ';

	$electronics_store_tagline_color_setting = get_theme_mod('electronics_store_tagline_color_setting');
	$electronics_store_custom_css .=' .logo p.site-description{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_tagline_color_setting).'!important;';
	$electronics_store_custom_css .='} ';

	//Site title Font size
	$electronics_store_site_title_fontsize = get_theme_mod('electronics_store_site_title_fontsize');
	$electronics_store_custom_css .='.logo h1, .logo p.site-title{';
		$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_site_title_fontsize).'px;';
	$electronics_store_custom_css .='}';

	$electronics_store_site_description_fontsize = get_theme_mod('electronics_store_site_description_fontsize');
	$electronics_store_custom_css .='.logo p.site-description{';
		$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_site_description_fontsize).'px;';
	$electronics_store_custom_css .='}';

	/*----- Featured image css -----*/
	$electronics_store_featured_image_border_radius = get_theme_mod('electronics_store_featured_image_border_radius');
	if($electronics_store_featured_image_border_radius != false){
		$electronics_store_custom_css .='.inner-service .service-image img{';
			$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_featured_image_border_radius).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_featured_image_box_shadow = get_theme_mod('electronics_store_featured_image_box_shadow');
	if($electronics_store_featured_image_box_shadow != false){
		$electronics_store_custom_css .='.inner-service .service-image img{';
			$electronics_store_custom_css .='box-shadow: 8px 8px '.esc_attr($electronics_store_featured_image_box_shadow).'px #aaa;';
		$electronics_store_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$electronics_store_shop_page_pagination = get_theme_mod('electronics_store_shop_page_pagination', true);
	if($electronics_store_shop_page_pagination == false){
		$electronics_store_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$electronics_store_custom_css .='display: none;';
		$electronics_store_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$electronics_store_post_blocks = get_theme_mod('electronics_store_post_blocks', 'Without box');
	if($electronics_store_post_blocks == 'Within box' ){
		$electronics_store_custom_css .='.services-box{';
			$electronics_store_custom_css .=' border: 1px solid #222;';
		$electronics_store_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$electronics_store_hide_topbar_responsive = get_theme_mod('electronics_store_hide_topbar_responsive',false);
	if($electronics_store_hide_topbar_responsive == true && get_theme_mod('electronics_store_show_topbar',false) == false){
		$electronics_store_custom_css .='@media screen and (min-width:575px){
			.topbar{';
			$electronics_store_custom_css .='display:none;';
		$electronics_store_custom_css .='} }';
	}

	if($electronics_store_hide_topbar_responsive == false){
		$electronics_store_custom_css .='@media screen and (max-width:575px){
			.topbar{';
			$electronics_store_custom_css .='display:none;';
		$electronics_store_custom_css .='} }';
	}

/*--------------------------- Slider Opacity -------------------*/
$electronics_store_slider_layout = get_theme_mod( 'electronics_store_slider_opacity_color','0.5');
if($electronics_store_slider_layout == '0'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.1'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.1';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.2'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.2';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.3'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.3';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.4'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.4';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.5'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.5';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.6'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.6';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.7'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.7';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.8'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.8';
	$electronics_store_custom_css .='}';
	}else if($electronics_store_slider_layout == '0.9'){
	$electronics_store_custom_css .='#slider img{';
		$electronics_store_custom_css .='opacity:0.9';
	$electronics_store_custom_css .='}';
	}
	
	/*---- Slider Image overlay -----*/
	$electronics_store_slider_image_overlay = get_theme_mod('electronics_store_slider_image_overlay',true);
	if($electronics_store_slider_image_overlay == false){
		$electronics_store_custom_css .='#slider img {';
			$electronics_store_custom_css .='opacity: 1;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_slider_overlay_color = get_theme_mod('electronics_store_slider_overlay_color');
	if($electronics_store_slider_overlay_color != false){
		$electronics_store_custom_css .='#slider{';
			$electronics_store_custom_css .='background-color: '.esc_attr($electronics_store_slider_overlay_color).';';
		$electronics_store_custom_css .='}';
	}

	// responsive slider
	if (get_theme_mod('electronics_store_slider_responsive',true) == true && get_theme_mod('electronics_store_slider_hide_show',false) == false) {
		$electronics_store_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$electronics_store_custom_css .=' display: none;';
		$electronics_store_custom_css .='} }';
	}
	if (get_theme_mod('electronics_store_slider_responsive',true) == false) {
		$electronics_store_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$electronics_store_custom_css .=' display: none;';
		$electronics_store_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('electronics_store_slider_button_responsive',true) == true && get_theme_mod('electronics_store_slider_button',true) == false) {
		$electronics_store_custom_css .='@media screen and (min-width: 575px){
			.read-btn{';
			$electronics_store_custom_css .=' display: none;';
		$electronics_store_custom_css .='} }';
	}
	if (get_theme_mod('electronics_store_slider_button_responsive',true) == false) {
		$electronics_store_custom_css .='@media screen and (max-width: 575px){
			.read-btn{';
			$electronics_store_custom_css .=' display: none;';
		$electronics_store_custom_css .='} }';
		$electronics_store_custom_css .='@media screen and (max-width: 575px){
			#slider .carousel-caption{';
			$electronics_store_custom_css .=' padding: 0px;';
		$electronics_store_custom_css .='} }';
	}

	$electronics_store_responsive_show_back_to_top = get_theme_mod('electronics_store_responsive_show_back_to_top',true);
	if($electronics_store_responsive_show_back_to_top == true && get_theme_mod('electronics_store_show_back_to_top',true) == false){
		$electronics_store_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$electronics_store_custom_css .='visibility:hidden;';
		$electronics_store_custom_css .='} }';
	}

	if($electronics_store_responsive_show_back_to_top == false){
		$electronics_store_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$electronics_store_custom_css .='visibility:hidden;';
		$electronics_store_custom_css .='} }';
	}

	$electronics_store_responsive_sticky_header = get_theme_mod('electronics_store_responsive_sticky_header',false);
	if($electronics_store_responsive_sticky_header == true && get_theme_mod('electronics_store_sticky_header',false) == false){
		$electronics_store_custom_css .='@media screen and (min-width:575px){
			.fixed-header{';
			$electronics_store_custom_css .='position:static !important; box-shadow: none;';
		$electronics_store_custom_css .='} }';
	}

	if($electronics_store_responsive_sticky_header == false){
		$electronics_store_custom_css .='@media screen and (max-width:575px){
			.fixed-header{';
			$electronics_store_custom_css .='position:static !important; box-shadow: none;';
		$electronics_store_custom_css .='} }';
	}

	$electronics_store_responsive_preloader_hide = get_theme_mod('electronics_store_responsive_preloader_hide',false);
	if($electronics_store_responsive_preloader_hide == true && get_theme_mod('electronics_store_preloader_hide',false) == false){
		$electronics_store_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$electronics_store_custom_css .='display:none !important;';
		$electronics_store_custom_css .='} }';
	}

	if($electronics_store_responsive_preloader_hide == false){
		$electronics_store_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$electronics_store_custom_css .='display:none !important;';
		$electronics_store_custom_css .='} }';
	}

	$electronics_store_resp_sidebar = get_theme_mod( 'electronics_store_sidebar_hide_show',true);
    if($electronics_store_resp_sidebar == true){
    	$electronics_store_custom_css .='@media screen and (max-width:575px) {';
		$electronics_store_custom_css .='#sidebar{';
			$electronics_store_custom_css .='display:block;';
		$electronics_store_custom_css .='} }';
	}else if($electronics_store_resp_sidebar == false){
		$electronics_store_custom_css .='@media screen and (max-width:575px) {';
		$electronics_store_custom_css .='#sidebar{';
			$electronics_store_custom_css .='display:none;';
		$electronics_store_custom_css .='} }';
	}

	// menu font weight
	$electronics_store_theme_lay = get_theme_mod( 'electronics_store_font_weight_menu_option','600');
    if($electronics_store_theme_lay == '100'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight:100;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '200'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 200;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '300'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 300;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '400'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 400;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '500'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 500;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '600'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 600;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '700'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 700;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '800'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 800;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_theme_lay == '900'){
		$electronics_store_custom_css .='.primary-navigation ul li a{';
			$electronics_store_custom_css .='font-weight: 900;';
		$electronics_store_custom_css .='}';
	}

	// Logo padding
	$electronics_store_logo_padding = get_theme_mod('electronics_store_logo_padding');
	$electronics_store_custom_css .='.logo{';
		$electronics_store_custom_css .=' padding:'.esc_attr($electronics_store_logo_padding).'px;';
	$electronics_store_custom_css .='}';

	// Logo margin
	$electronics_store_logo_margin = get_theme_mod('electronics_store_logo_margin');
	$electronics_store_custom_css .='.logo{';
		$electronics_store_custom_css .=' margin:'.esc_attr($electronics_store_logo_margin).'px;';
	$electronics_store_custom_css .='}';
	
	// menu color option
	$electronics_store_menu_color_setting = get_theme_mod('electronics_store_menu_color_setting');
	$electronics_store_custom_css .='.toggle-menu i{';
		$electronics_store_custom_css .='color: '.esc_attr($electronics_store_menu_color_setting).'!important;';
	$electronics_store_custom_css .='} '; 

	// Single post image border radious
	$electronics_store_single_post_img_border_radius = get_theme_mod('electronics_store_single_post_img_border_radius', 0);
	$electronics_store_custom_css .='.feature-box img{';
		$electronics_store_custom_css .='border-radius: '.esc_attr($electronics_store_single_post_img_border_radius).'px;';
	$electronics_store_custom_css .='}';

	// Single post image box shadow
	$electronics_store_single_post_img_box_shadow = get_theme_mod('electronics_store_single_post_img_box_shadow',0);
	$electronics_store_custom_css .='.feature-box img{';
		$electronics_store_custom_css .='box-shadow: '.esc_attr($electronics_store_single_post_img_box_shadow).'px '.esc_attr($electronics_store_single_post_img_box_shadow).'px '.esc_attr($electronics_store_single_post_img_box_shadow).'px #ccc;';
	$electronics_store_custom_css .='}';

	// Metabox Seperator
	$electronics_store_metabox_seperator = get_theme_mod('electronics_store_metabox_seperator','|');
	if($electronics_store_metabox_seperator != '' ){
		$electronics_store_custom_css .='.metabox .me-2:after{';
			$electronics_store_custom_css .=' content: "'.esc_attr($electronics_store_metabox_seperator).'"; padding-left:10px;';
		$electronics_store_custom_css .='}';
		$electronics_store_custom_css .='.metabox span:last-child:after{';
			$electronics_store_custom_css .=' content: none;';
		$electronics_store_custom_css .='}';		
	}

	// Metabox Seperator
	$electronics_store_single_post_metabox_seperator = get_theme_mod('electronics_store_single_post_metabox_seperator','|');
	if($electronics_store_single_post_metabox_seperator != '' ){
		$electronics_store_custom_css .='.metabox .px-2:after{';
			$electronics_store_custom_css .=' content: "'.esc_attr($electronics_store_single_post_metabox_seperator).'"; padding-left:10px;';
		$electronics_store_custom_css .='}';
		$electronics_store_custom_css .='.metabox span:last-child:after{';
			$electronics_store_custom_css .=' content: none;';
		$electronics_store_custom_css .='}';			
	}

	$electronics_store_widgets_heading_text_transform = get_theme_mod( 'electronics_store_widgets_heading_text_transform','Capitalize');
	if($electronics_store_widgets_heading_text_transform== 'Capitalize'){
		$electronics_store_custom_css .='footer h3{';
			$electronics_store_custom_css .='text-transform:Capitalize;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_widgets_heading_text_transform == 'Lowercase'){
		$electronics_store_custom_css .='footer h3{';
			$electronics_store_custom_css .='text-transform:Lowercase;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_widgets_heading_text_transform == 'Uppercase'){
		$electronics_store_custom_css .='footer h3{';
			$electronics_store_custom_css .='text-transform:Uppercase;';
		$electronics_store_custom_css .='}';
	}

	// widgets heading font size
	$electronics_store_widgets_heading_fontsize = get_theme_mod('electronics_store_widgets_heading_fontsize',25);
	if($electronics_store_widgets_heading_fontsize != false){
		$electronics_store_custom_css .='.footertown .widget h3{';
			$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_widgets_heading_fontsize).'px; ';
		$electronics_store_custom_css .='}';
	}

	// widgets heading font weight
	$electronics_store_widgets_heading_font_weight = get_theme_mod('electronics_store_widgets_heading_font_weight', '');
  	$electronics_store_custom_css .='.footertown .widget h3{';
    $electronics_store_custom_css .='font-weight: '.esc_attr($electronics_store_widgets_heading_font_weight).';';
  	$electronics_store_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$electronics_store_footer_widgets_heading = get_theme_mod( 'electronics_store_footer_widgets_heading','Left');
    if($electronics_store_footer_widgets_heading == 'Left'){
		$electronics_store_custom_css .='footer h3{';
		$electronics_store_custom_css .='text-align: left;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_widgets_heading == 'Center'){
		$electronics_store_custom_css .='footer h3{';
			$electronics_store_custom_css .='text-align: center;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_widgets_heading == 'Right'){
		$electronics_store_custom_css .='footer h3{';
			$electronics_store_custom_css .='text-align: right;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_footer_widgets_content = get_theme_mod( 'electronics_store_footer_widgets_content','Left');
    if($electronics_store_footer_widgets_content == 'Left'){
		$electronics_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer.gallery,aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
		$electronics_store_custom_css .='text-align: left;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_widgets_content == 'Center'){
		$electronics_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
			$electronics_store_custom_css .='text-align: center;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_widgets_content == 'Right'){
		$electronics_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption{';
			$electronics_store_custom_css .='text-align: right !important;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_show_hide_post_categories = get_theme_mod('electronics_store_show_hide_post_categories',true);

	if($electronics_store_show_hide_post_categories == false){
		$electronics_store_custom_css .='.tc-category{';
			$electronics_store_custom_css .='display: none;';
		$electronics_store_custom_css .='}';
	}
	//Footer Social Icon Font size
	$electronics_store_footer_icon_font_size = get_theme_mod('electronics_store_footer_icon_font_size');
	$electronics_store_custom_css .='#footer .socialicons i{';
	$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_footer_icon_font_size).'px;';
	$electronics_store_custom_css .='}';

	//Footer Social Icon Alignment
	$electronics_store_footer_icon_alignment = get_theme_mod( 'electronics_store_footer_icon_alignment','Center');
    if($electronics_store_footer_icon_alignment == 'Left'){
		$electronics_store_custom_css .='#footer .socialicons{';
			$electronics_store_custom_css .='text-align:start;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_icon_alignment == 'Center'){
		$electronics_store_custom_css .='#footer .socialicons{';
			$electronics_store_custom_css .='text-align:center;';
		$electronics_store_custom_css .='}';
	}else if($electronics_store_footer_icon_alignment == 'Right'){
		$electronics_store_custom_css .='#footer .socialicons{';
			$electronics_store_custom_css .='text-align:end;';
		$electronics_store_custom_css .='}';
	}	

	/*-------- Blog Post Alignment ------*/
	$electronics_store_post_alignment = get_theme_mod('electronics_store_blog_post_alignment', 'left');
	if($electronics_store_post_alignment == 'center' ){
		$electronics_store_custom_css .='.services-box,.services-box h2,.services-box .read-btn {';
			$electronics_store_custom_css .=' text-align: '. $electronics_store_post_alignment .'!important;';
		$electronics_store_custom_css .='}';
	}elseif($electronics_store_post_alignment == 'right' ){
		$electronics_store_custom_css .='.services-box,.services-box h2,.services-box .read-btn{';
			$electronics_store_custom_css .='text-align: '. $electronics_store_post_alignment .'!important;';
		$electronics_store_custom_css .='}';
	}

	// Blog Post Button Font Size 
	$electronics_store_button_font_size = get_theme_mod('electronics_store_button_font_size');
	if($electronics_store_button_font_size != false){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small{';
			$electronics_store_custom_css .='font-size: '.esc_attr($electronics_store_button_font_size).'px;';
		$electronics_store_custom_css .='}';
	}

	$electronics_store_button_text_transform = get_theme_mod( 'electronics_store_button_text_transform','Uppercase');
	if($electronics_store_button_text_transform == 'Capitalize'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small{';
			$electronics_store_custom_css .='text-transform:Capitalize;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_button_text_transform == 'Lowercase'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small{';
			$electronics_store_custom_css .='text-transform:Lowercase;';
		$electronics_store_custom_css .='}';
	}
	if($electronics_store_button_text_transform == 'Uppercase'){
		$electronics_store_custom_css .='.read-btn a.blogbutton-small{';
			$electronics_store_custom_css .='text-transform:Uppercase;';
		$electronics_store_custom_css .='}';
	}


	