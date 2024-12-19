<?php
/**
 * Electronics Store Theme Customizer
 *
 * @package Electronics Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function electronics_store_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'electronics_store_customize_partial_blogname',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'electronics_store_customize_partial_blogdescription',
		)
	);

	//About Section
		$wp_customize->add_section( 'electronics_store_about_theme' , array(
	    	'title' => esc_html__( 'About Theme', 'electronics-store' ),
	    	'priority' => 10,
		) );

		$wp_customize->add_setting('electronics_store_demo_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('electronics_store_demo_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Demo','electronics-store') ."</h3><p>". esc_html('Our premium version of Electronics Store has unlimited sections with advanced control fields. Dedicated support and no limititation in any field.','electronics-store') ."</p><a target='_blank' href='". esc_url('https://preview.themescaliber.com/electronics-store-pro/') ." '>". esc_html('View Demo','electronics-store') ."</a>",
			'section'=> 'electronics_store_about_theme'
		));
		
		$wp_customize->add_setting('electronics_store_doc_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('electronics_store_doc_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Documentation','electronics-store') ."</h3><p>". esc_html('We have well prepared documentation that provides the general guidelines and suggestions needed for this theme.','electronics-store') ."</p> <a target='_blank' href='". esc_url('https://preview.themescaliber.com/doc/free-electronics-store/') ." '>". esc_html('View Documentation','electronics-store') ."</a>",
			'section'=> 'electronics_store_about_theme'
		));

		$wp_customize->add_setting('electronics_store_forum_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('electronics_store_forum_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Support','electronics-store') ."</h3><p>". esc_html('Regarding any theme issue, we offer 24/7 support. You can get assistance from our support staff in resolving any problem. Please get in touch with us.','electronics-store') ."</p><a target='_blank' href='". esc_url('https://wordpress.org/support/theme/electronics-store/') ." '>". esc_html('Support Forum','electronics-store') ."</a>",
			'section'=> 'electronics_store_about_theme'
		));

	//add home page setting pannel
	$wp_customize->add_panel( 'electronics_store_panel_id', array(
	    'priority' => 20,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'electronics-store' ),
	) );

    $electronics_store_font_array= array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Color / Font Pallete
	$wp_customize->add_section( 'electronics_store_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'electronics-store' ),
		'priority'   => 30,
		'panel' => 'electronics_store_panel_id'
	) );


	// This is Body Color setting
	$wp_customize->add_setting( 'electronics_store_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_body_color', array(
		'label' => __('Body Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('electronics_store_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
		'electronics_store_body_font_family', array(
		'section'  => 'electronics_store_typography',
		'label'    => __( 'Body Fonts','electronics-store'),
		'type'     => 'select',
		'choices'  => $electronics_store_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('electronics_store_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_body_font_size',array(
		'label'	=> __('Body Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_body_font_size',
		'type'	=> 'text'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_setting( 'electronics_store_theme_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_theme_color', array(
  		'label' => __('Theme Color Option','electronics-store'),
	    'section' => 'electronics_store_typography',
	    'settings' => 'electronics_store_theme_color',
  	)));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'electronics_store_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_paragraph_color', array(
		'label' => __('Paragraph Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('electronics_store_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_paragraph_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'Paragraph Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	$wp_customize->add_setting('electronics_store_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'electronics_store_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_atag_color', array(
		'label' => __('"a" Tag Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('electronics_store_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_atag_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( '"a" Tag Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'electronics_store_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_li_color', array(
		'label' => __('"li" Tag Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('electronics_store_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_li_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( '"li" Tag Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h1_color', array(
		'label' => __('h1 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h1_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h1 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('electronics_store_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h1_font_size',array(
		'label'	=> __('h1 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h2_color', array(
		'label' => __('h2 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h2_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h2 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('electronics_store_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h2_font_size',array(
		'label'	=> __('h2 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h3_color', array(
		'label' => __('h3 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h3_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h3 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('electronics_store_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h3_font_size',array(
		'label'	=> __('h3 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h4_color', array(
		'label' => __('h4 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h4_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h4 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('electronics_store_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h4_font_size',array(
		'label'	=> __('h4 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h5_color', array(
		'label' => __('h5 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h5_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h5 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('electronics_store_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h5_font_size',array(
		'label'	=> __('h5 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'electronics_store_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_h6_color', array(
		'label' => __('h6 Color', 'electronics-store'),
		'section' => 'electronics_store_typography',
		'settings' => 'electronics_store_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('electronics_store_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'electronics_store_h6_font_family', array(
	    'section'  => 'electronics_store_typography',
	    'label'    => __( 'h6 Fonts','electronics-store'),
	    'type'     => 'select',
	    'choices'  => $electronics_store_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('electronics_store_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_store_h6_font_size',array(
		'label'	=> __('h6 Font Size','electronics-store'),
		'section'	=> 'electronics_store_typography',
		'setting'	=> 'electronics_store_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'electronics_store_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'electronics-store' ),
		'priority'   => 30,
		'panel' => 'electronics_store_panel_id'
	) );

	$wp_customize->add_setting('electronics_store_width_options',array(
        'default' => 'Full Layout',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_width_options',array(
        'type' => 'select',
        'label' => __('Select Site Layout','electronics-store'),
        'section' => 'electronics_store_left_right',
        'choices' => array(
            'Full Layout' => __('Full Layout','electronics-store'),
            'Contained Layout' => __('Contained Layout','electronics-store'),
            'Boxed Layout' => __('Boxed Layout','electronics-store'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('electronics_store_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	) );
	$wp_customize->add_control('electronics_store_theme_options', array(
        'type' => 'radio',
        'label' => __('Sidebar Layout','electronics-store'),
        'section' => 'electronics_store_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','electronics-store'),
            'Right Sidebar' => __('Right Sidebar','electronics-store'),
            'One Column' => __('One Column','electronics-store'),
            'Three Columns' => __('Three Columns','electronics-store'),
            'Four Columns' => __('Four Columns','electronics-store'),
            'Grid Layout' => __('Grid Layout','electronics-store')
        ),
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('electronics_store_single_post_sidebar',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	) );
	$wp_customize->add_control('electronics_store_single_post_sidebar', array(
        'type' => 'radio',
        'label' => __('Single Post Sidebar Layout','electronics-store'),
        'section' => 'electronics_store_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','electronics-store'),
            'Right Sidebar' => __('Right Sidebar','electronics-store'),
            'One Column' => __('One Column','electronics-store'),
        ),
    ));

    $wp_customize->add_setting('electronics_store_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'electronics_store_sanitize_choices',
	));
	$wp_customize->add_control('electronics_store_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'electronics-store'),
		'section'        => 'electronics_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'electronics-store'),
			'Right Sidebar' => __('Right Sidebar', 'electronics-store'),
			'One Column'    => __('One Column', 'electronics-store'),
		),
	));

    $wp_customize->add_setting( 'electronics_store_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','electronics-store' ),
        'section' => 'electronics_store_left_right'
    ));

    $wp_customize->add_setting('electronics_store_breadcrumb_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_breadcrumb_color', array(
		'label'    => __('Breadcrumb Color', 'electronics-store'),
		'section'  => 'electronics_store_left_right',
	)));

	$wp_customize->add_setting('electronics_store_breadcrumb_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_breadcrumb_background_color', array(
		'label'    => __('Breadcrumb Background Color', 'electronics-store'),
		'section'  => 'electronics_store_left_right',
	)));

	$wp_customize->add_setting('electronics_store_breadcrumb_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_breadcrumb_hover_color', array(
		'label'    => __('Breadcrumb Hover Color', 'electronics-store'),
		'section'  => 'electronics_store_left_right',
	)));

	$wp_customize->add_setting('electronics_store_breadcrumb_hover_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_breadcrumb_hover_bg_color', array(
		'label'    => __('Breadcrumb Hover Background Color', 'electronics-store'),
		'section'  => 'electronics_store_left_right',
	)));

    //Topbar
	$wp_customize->add_section('electronics_store_topbar',array(
		'title'	=> __('Topbar','electronics-store'),
		'priority'	=> null,
		'panel' => 'electronics_store_panel_id',
	));

	$wp_customize->add_setting( 'electronics_store_show_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_show_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show/Hide Topbar','electronics-store' ),
        'section' => 'electronics_store_topbar'
    ));

    $wp_customize->add_setting('electronics_store_topbar_shipping_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_topbar_shipping_text',array(
		'label'	=> __('Add Shipping Text','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('electronics_store_topbar_shipping_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('electronics_store_topbar_shipping_url',array(
		'label'	=> __('Add Shipping URL','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('electronics_store_topbar_faqs_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_topbar_faqs_text',array(
		'label'	=> __('Add FAQs Text','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('electronics_store_topbar_faqs_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('electronics_store_topbar_faqs_url',array(
		'label'	=> __('Add FAQs URL','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('electronics_store_topbar_contact_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_topbar_contact_text',array(
		'label'	=> __('Add Contact Text','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('electronics_store_topbar_contact_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('electronics_store_topbar_contact_url',array(
		'label'	=> __('Add Contact URL','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('electronics_store_topbar_sale_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_topbar_sale_text',array(
		'label'	=> __('Add Sale Text','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('electronics_store_topbar_guarantee_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_topbar_guarantee_text',array(
		'label'	=> __('Add Guarantee Text','electronics-store'),
		'section' => 'electronics_store_topbar',
		'type'	=> 'text'
	));

	//Header
	$wp_customize->add_section('electronics_store_header',array(
		'title'	=> __('Header','electronics-store'),
		'priority'	=> null,
		'panel' => 'electronics_store_panel_id',
	));

	//Sticky Header
	$wp_customize->add_setting( 'electronics_store_sticky_header',array(
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','electronics-store' ),
        'section' => 'electronics_store_header'
    ));

    $wp_customize->add_setting('electronics_store_sticky_header_padding', array(
		'default'=> '',
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_sticky_header_padding', array(
		'label'	=> __('Sticky Header Padding','electronics-store'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 50,
        ),
		'section'=> 'electronics_store_header',
		'type'=> 'number',
	));

	$wp_customize->add_setting('electronics_store_wishlist_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('electronics_store_wishlist_url',array(
		'label'	=> __('Add Wishlist URL','electronics-store'),
		'section' => 'electronics_store_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('electronics_store_shipping_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_shipping_text',array(
		'label'	=> __('Add Shipping Text','electronics-store'),
		'section' => 'electronics_store_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('electronics_store_navigation_case',array(
        'default' => 'capitalize',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_navigation_case',array(
        'type' => 'select',
        'label' => __('Navigation Case','electronics-store'),
        'section' => 'electronics_store_header',
        'choices' => array(
            'uppercase' => __('Uppercase','electronics-store'),
            'capitalize' => __('Capitalize','electronics-store'),
        ),
	) );

	$wp_customize->add_setting( 'electronics_store_nav_font_size', array(
		'default'           => 15,
		'sanitize_callback' => 'electronics_store_sanitize_float',
	) );
	$wp_customize->add_control( 'electronics_store_nav_font_size', array(
		'label' => __( 'Navigation Font Size','electronics-store' ),
		'section'     => 'electronics_store_header',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	$wp_customize->add_setting('electronics_store_font_weight_menu_option',array(
        'default' => '600',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control('electronics_store_font_weight_menu_option',array(
        'type' => 'select',
        'label' => __('Navigation Font Weight','electronics-store'),
        'section' => 'electronics_store_header',
        'choices' => array(
            '100' => __('100','electronics-store'),
            '200' => __('200','electronics-store'),
            '300' => __('300','electronics-store'),
            '400' => __('400','electronics-store'),
            '500' => __('500','electronics-store'),
            '600' => __('600','electronics-store'),
            '700' => __('700','electronics-store'),
            '800' => __('800','electronics-store'),
            '900' => __('900','electronics-store'),
        ),
	) );

	// Preloader
	$wp_customize->add_setting( 'electronics_store_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','electronics-store' ),
        'section' => 'electronics_store_header'
    ));

    $wp_customize->add_setting('electronics_store_preloader_type',array(
        'default'   => 'center-square',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control( 'electronics_store_preloader_type', array(
		'label' => __( 'Preloader Type','electronics-store' ),
		'section' => 'electronics_store_header',
		'type'  => 'select',
		'settings' => 'electronics_store_preloader_type',
		'choices' => array(
		    'center-square' => __('Center Square','electronics-store'),
		    'chasing-square' => __('Chasing Square','electronics-store'),
	    ),
	));

	$wp_customize->add_setting( 'electronics_store_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_preloader_color', array(
  		'label' => 'Preloader Color',
	    'section' => 'electronics_store_header',
	    'settings' => 'electronics_store_preloader_color',
  	)));

  	$wp_customize->add_setting( 'electronics_store_preloader_bg_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_preloader_bg_color', array(
  		'label' => 'Preloader Background Color',
	    'section' => 'electronics_store_header',
	    'settings' => 'electronics_store_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('electronics_store_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_menu_color', array(
		'label'    => __('Menu Color', 'electronics-store'),
		'section'  => 'electronics_store_header',
		'settings' => 'electronics_store_menu_color',
	)));

	$wp_customize->add_setting('electronics_store_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'electronics-store'),
		'section'  => 'electronics_store_header',
		'settings' => 'electronics_store_menu_hover_color',
	)));

	$wp_customize->add_setting('electronics_store_submenu_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_submenu_menu_color', array(
		'label'    => __('Submenu Color', 'electronics-store'),
		'section'  => 'electronics_store_header',
		'settings' => 'electronics_store_submenu_menu_color',
	)));

	$wp_customize->add_setting( 'electronics_store_submenu_hover_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_submenu_hover_color', array(
  		'label' => __('Submenu Hover Color', 'electronics-store'),
	    'section' => 'electronics_store_header',
	    'settings' => 'electronics_store_submenu_hover_color',
  	)));

  	$wp_customize->add_setting( 'electronics_store_menu_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_menu_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','electronics-store') ."</h3>
        	<ul>
        		<li>". esc_html('Menu Background Colors','electronics-store') ."</li>
        		<li>". esc_html('Menu Item Fonts','electronics-store') ."</li>
        		<li>". esc_html('Responsive Menu Colors','electronics-store') ."</li>
        		<li>". esc_html('Header Search Icons Colors','electronics-store') ."</li>
        		<li>". esc_html('... and Other Premium Features','electronics-store') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/products/electronics-store-wordpress-theme') ." '>". esc_html('Upgrade Now','electronics-store') ."</a>",
        'section' => 'electronics_store_header'
        )
    );

	//home page slider
	$wp_customize->add_section( 'electronics_store_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'electronics-store' ),
		'priority'   => null,
		'panel' => 'electronics_store_panel_id'
	) );

	$wp_customize->selective_refresh->add_partial(
		'electronics_store_slider_hide_show',
		array(
			'selector'        => '#slider .inner_carousel h1',
			'render_callback' => 'electronics_store_customize_partial_electronics_store_slider_hide_show',
		)
	);

	$wp_customize->add_setting('electronics_store_slider_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider','electronics-store'),
	   'section' => 'electronics_store_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'electronics_store_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'electronics_store_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'electronics_store_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'electronics-store' ),
			'section'  => 'electronics_store_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('electronics_store_slider_prev_icon',array(
		'default'	=> 'fas fa-chevron-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_slider_prev_icon',array(
		'label'	=>__('Add Slider Prev Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_slidersettings',
		'setting'	=> 'electronics_store_slider_prev_icon',
		'type'		=> 'icon',
	)));

	$wp_customize->add_setting('electronics_store_slider_next_icon',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_slider_next_icon',array(
		'label'	=> __('Add Slider Next Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_slidersettings',
		'setting'	=> 'electronics_store_slider_next_icon',
		'type'		=> 'icon',
	)));	

	$wp_customize->add_setting( 'electronics_store_slider_small_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'electronics_store_slider_small_title', array(
        'label'    => __( 'Add Slider Small Text', 'electronics-store' ),
        'section'  => 'electronics_store_slidersettings',
        'type'     => 'text'
    ) );

	//Show / Hide slider Arrow
	$wp_customize->add_setting('electronics_store_slider_arrow',array(
		'default' => 'true',
		'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	 ));
	 
	 $wp_customize->add_control('electronics_store_slider_arrow',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide slider Arrow','electronics-store'),
		'section' => 'electronics_store_slidersettings',
	 ));	

	$wp_customize->add_setting('electronics_store_slider_title',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_title',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Title','electronics-store'),
	   'section' => 'electronics_store_slidersettings',
	));

	$wp_customize->add_setting('electronics_store_slider_content',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_content',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Content','electronics-store'),
	   'section' => 'electronics_store_slidersettings',
	));

	$wp_customize->add_setting('electronics_store_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_button',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider Button','electronics-store'),
	   	'section' => 'electronics_store_slidersettings'
	));

	$wp_customize->add_setting('electronics_store_slider_button_text',array(
        'default'=> 'LEARN MORE',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_slider_button_text',array(
        'label' => __('Add Slider Button Text','electronics-store'),
        'section'=> 'electronics_store_slidersettings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('electronics_store_slider_button_link',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('electronics_store_slider_button_link',array(
        'label' => esc_html__('Add Button Link','electronics-store'),
        'section'=> 'electronics_store_slidersettings',
        'type'=> 'url'
    ));

	//Slider excerpt
	$wp_customize->add_setting( 'electronics_store_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'absint',
	) );
	$wp_customize->add_control( 'electronics_store_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','electronics-store' ),
		'section'     => 'electronics_store_slidersettings',
		'type'        => 'number',
		'settings'    => 'electronics_store_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('electronics_store_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','electronics-store'),
      	'section' => 'electronics_store_slidersettings',
	));

	$wp_customize->add_setting( 'electronics_store_slider_overlay_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'electronics-store'),
	    'section' => 'electronics_store_slidersettings',
  	)));
	  $wp_customize->add_setting('electronics_store_slider_opacity_color',array(
		'default'              => 0.5,
		'sanitize_callback' => 'electronics_store_sanitize_choices'
	  ));
	  $wp_customize->add_control( 'electronics_store_slider_opacity_color', array(
		  'label'       => esc_html__( 'Slider Image Opacity','electronics-store' ),
		  'section'     => 'electronics_store_slidersettings',
		  'type'        => 'select',
		  'settings'    => 'electronics_store_slider_opacity_color',
		  'choices' => array(
			'0' =>  esc_attr('0','electronics-store'),
			'0.1' =>  esc_attr('0.1','electronics-store'),
			'0.2' =>  esc_attr('0.2','electronics-store'),
			'0.3' =>  esc_attr('0.3','electronics-store'),
			'0.4' =>  esc_attr('0.4','electronics-store'),
			'0.5' =>  esc_attr('0.5','electronics-store'),
			'0.6' =>  esc_attr('0.6','electronics-store'),
			'0.7' =>  esc_attr('0.7','electronics-store'),
			'0.8' =>  esc_attr('0.8','electronics-store'),
			'0.9' =>  esc_attr('0.9','electronics-store')
		  ),
	  ));
	//Venue Section
	$wp_customize->add_section('electronics_store_product_section',array(
		'title'	=> __('Product Section','electronics-store'),
		'panel' => 'electronics_store_panel_id',
	));

	$wp_customize->add_setting('electronics_store_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_section_title',array(
		'label'	=> esc_html__('Section Title','electronics-store'),
		'section'=> 'electronics_store_product_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_store_product_deals_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_store_product_deals_image',array(
        'label' => __('Product Deal Image','electronics-store'),
        'description' => __('Image size 260px x 330px','electronics-store'),
        'section' => 'electronics_store_product_section'
	)));

	$wp_customize->add_setting('electronics_store_product_deal_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_store_product_deal_text',array(
		'label'	=> esc_html__('Product Deal Text','electronics-store'),
		'section'=> 'electronics_store_product_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_store_product_page', array(
		'default'           => '',
		'sanitize_callback' => 'electronics_store_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'electronics_store_product_page', array(
		'label'   => __( 'Select Product Page', 'electronics-store' ),
		'section' => 'electronics_store_product_section',
		'type'    => 'dropdown-pages'
	) );

	$wp_customize->add_setting( 'electronics_store_product_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_product_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','electronics-store') ."</h3>
        	<ul>
        		<li>". esc_html('Section Background Image Option','electronics-store') ."</li>
        		<li>". esc_html('Section Title Font Options','electronics-store') ."</li>
        		<li>". esc_html('... and Other Premium Features','electronics-store') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/products/electronics-store-wordpress-theme') ." '>". esc_html('Upgrade Now','electronics-store') ."</a>",
        'section' => 'electronics_store_product_section'
        )
    );

	// Button Settings
	$wp_customize->add_section( 'electronics_store_button_option', array(
		'title' => __('Button Settings','electronics-store'),
		'panel' => 'electronics_store_panel_id',
	));

	$wp_customize->add_setting( 'electronics_store_post_button_text', array(
		'default'   => esc_html__('READ MORE','electronics-store' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electronics_store_post_button_text', array(
		'label' => esc_html__('Post Button Text','electronics-store' ),
		'section'     => 'electronics_store_button_option',
		'type'        => 'text',
		'settings'    => 'electronics_store_post_button_text'
	) );

	$wp_customize->add_setting( 'electronics_store_button_font_size', array(
		'default'           => 15,
		'sanitize_callback' => 'electronics_store_sanitize_float',
	) );
	$wp_customize->add_control( 'electronics_store_button_font_size', array(
		'label' => __( 'Button Font Size','electronics-store' ),
		'section'     => 'electronics_store_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	$wp_customize->add_setting('electronics_store_button_text_transform',array(
	    'default'=>'Uppercase',
	    'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_button_text_transform',array(
	    'type' => 'radio',
	    'label' => __('Button Text Transform','electronics-store'),
	    'choices' => array(
	        'Uppercase' => __('Uppercase','electronics-store'),
	        'Capitalize' => __('Capitalize','electronics-store'),
	        'Lowercase' => __('Lowercase','electronics-store'),
	    ),
	    'section'=> 'electronics_store_button_option',
	));

	$wp_customize->add_setting('electronics_store_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_top_button_padding',array(
		'label'	=> __('Top Bottom Button Padding','electronics-store'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 50,
        ),
		'section'=> 'electronics_store_button_option',
		'type'=> 'number',
	));

	$wp_customize->add_setting('electronics_store_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_left_button_padding',array(
		'label'	=> __('Left Right Button Padding','electronics-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'electronics_store_button_option',
		'type'=> 'number',
	));

	$wp_customize->add_setting( 'electronics_store_button_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control('electronics_store_button_border_radius', array(
        'label'  => __('Button Border Radius','electronics-store'),
        'type'=> 'number',
        'section'  => 'electronics_store_button_option',
        'input_attrs' => array(
        	'step' => 1,
            'min' => 0,
            'max' => 50,
        ),
    ));
	$wp_customize->add_setting('electronics_store_btn_font_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'electronics_store_sanitize_choices',
	));
	$wp_customize->add_control('electronics_store_btn_font_weight',array(
		'label'	=> __('Button Font Weight','electronics-store'),
		'section'=> 'electronics_store_button_option',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','electronics-store'),
            '200' => __('200','electronics-store'),
            '300' => __('300','electronics-store'),
            '400' => __('400','electronics-store'),
            '500' => __('500','electronics-store'),
            '600' => __('600','electronics-store'),
            '700' => __('700','electronics-store'),
            '800' => __('800','electronics-store'),
            '900' => __('900','electronics-store'),
        ),
	));


	//Blog Post
	$wp_customize->add_section('electronics_store_blog_post',array(
		'title'	=> __('Post Settings','electronics-store'),
		'panel' => 'electronics_store_panel_id',
	));	

	$wp_customize->add_setting('electronics_store_blog_post_alignment',array(
        'default' => 'left',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
    ));
	$wp_customize->add_control('electronics_store_blog_post_alignment', array(
        'type' => 'select',
        'label' => __( 'Blog Post Alignment', 'electronics-store' ),
        'section' => 'electronics_store_blog_post',
        'choices' => array(
            'left' => __('Left Align','electronics-store'),
            'right' => __('Right Align','electronics-store'),
            'center' => __('Center Align','electronics-store')
        ),
    ));

	$wp_customize->add_setting('electronics_store_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Date','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_blog_post',
		'setting'	=> 'electronics_store_postdate_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Author','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_author_icon',array(
		'label'	=> __('Add Post Author Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_blog_post',
		'setting'	=> 'electronics_store_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Comments','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_comment_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_comment_icon',array(
		'label'	=> __('Add Post Comment Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_blog_post',
		'setting'	=> 'electronics_store_comment_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Time','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_time_icon',array(
		'label'	=> __('Add Post Time Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_blog_post',
		'setting'	=> 'electronics_store_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electronics_store_show_hide_post_categories',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_show_hide_post_categories',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post category','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_feature_image_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_feature_image_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured Image','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting( 'electronics_store_featured_image_border_radius', array(
		'default' => 0,
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control( 'electronics_store_featured_image_border_radius', array(
		'label' => __( 'Featured image border radius','electronics-store' ),
		'section' => 'electronics_store_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

    $wp_customize->add_setting( 'electronics_store_featured_image_box_shadow', array(
		'default' => 0,
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control( 'electronics_store_featured_image_box_shadow', array(
		'label' => __( 'Featured image box shadow','electronics-store' ),
		'section' => 'electronics_store_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

	$wp_customize->add_setting('electronics_store_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','electronics-store'),
       'description' => __('Ex: "/", "|", "-", ...','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting('electronics_store_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_post_content',array(
        'type' => 'radio',
        'label' => __('Post Content Type','electronics-store'),
        'section' => 'electronics_store_blog_post',
        'choices' => array(
            'No Content' => __('No Content','electronics-store'),
            'Full Content' => __('Full Content','electronics-store'),
            'Excerpt Content' => __('Excerpt Content','electronics-store'),
        ),
	) );

    $wp_customize->add_setting( 'electronics_store_post_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control( 'electronics_store_post_excerpt_length', array(
		'label' => esc_html__( 'Post Excerpt Length','electronics-store' ),
		'section'  => 'electronics_store_blog_post',
		'type'  => 'number',
		'settings' => 'electronics_store_post_excerpt_length',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'electronics_store_button_excerpt_suffix', array(
		'default'   => __('[...]','electronics-store' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'electronics_store_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Suffix','electronics-store' ),
		'section'     => 'electronics_store_blog_post',
		'type'        => 'text',
		'settings' => 'electronics_store_button_excerpt_suffix'
	) );

    $wp_customize->add_setting( 'electronics_store_post_blocks', array(
        'default'			=> 'Without box',
        'sanitize_callback'	=> 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electronics_store_post_blocks', array(
        'section' => 'electronics_store_blog_post',
        'type' => 'select',
        'label' => __( 'Post blocks', 'electronics-store' ),
        'choices' => array(
            'Within box'  => __( 'Within box', 'electronics-store' ),
            'Without box' => __( 'Without box', 'electronics-store' ),
    )));

    $wp_customize->add_setting('electronics_store_navigation_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_navigation_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Navigation','electronics-store'),
       'section' => 'electronics_store_blog_post'
    ));

    $wp_customize->add_setting( 'electronics_store_post_navigation_type', array(
        'default'			=> 'numbers',
        'sanitize_callback'	=> 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electronics_store_post_navigation_type', array(
        'section' => 'electronics_store_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Type', 'electronics-store' ),
        'choices' => array(
            'numbers'  => __( 'Number', 'electronics-store' ),
            'next-prev' => __( 'Next/Prev Button', 'electronics-store' ),
    )));

    $wp_customize->add_setting( 'electronics_store_post_navigation_position', array(
        'default'			=> 'bottom',
        'sanitize_callback'	=> 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electronics_store_post_navigation_position', array(
        'section' => 'electronics_store_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Position', 'electronics-store' ),
        'choices' => array(
            'top'  => __( 'Top', 'electronics-store' ),
            'bottom' => __( 'Bottom', 'electronics-store' ),
            'both' => __( 'Both', 'electronics-store' ),
    )));

    $wp_customize->add_setting( 'electronics_store_post_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_post_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','electronics-store') ."</h3>
        	<ul>
        		<li>". esc_html('Section Heading Option','electronics-store') ."</li>
        		<li>". esc_html('Animated Elements Colors','electronics-store') ."</li>
        		<li>". esc_html('... and Other Premium Features','electronics-store') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/products/electronics-store-wordpress-theme') ." '>". esc_html('Upgrade Now','electronics-store') ."</a>",
        'section' => 'electronics_store_blog_post'
        )
    );

    //Single Post Settings
	$wp_customize->add_section('electronics_store_single_post',array(
		'title'	=> __('Single Post Settings','electronics-store'),
		'panel' => 'electronics_store_panel_id',
	));	

	$wp_customize->add_setting( 'electronics_store_single_post_breadcrumb',array(
		'default' => true,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','electronics-store' ),
        'section' => 'electronics_store_single_post'
    ));

	$wp_customize->add_setting('electronics_store_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_single_postdate_icon',array(
		'label'	=> __('Add Sigle Post Date Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_single_post',
		'setting'	=> 'electronics_store_single_postdate_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_single_postauthor_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_single_postauthor_icon',array(
		'label'	=> __('Add Sigle Post Author Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_single_post',
		'setting'	=> 'electronics_store_single_postauthor_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_single_postcomment_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_single_postcomment_icon',array(
		'label'	=> __('Add Sigle Post Comment Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_single_post',
		'setting'	=> 'electronics_store_single_postcomment_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_single_posttime_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new electronics_store_Icon_Changer(
        $wp_customize,'electronics_store_single_posttime_icon',array(
		'label'	=> __('Add Sigle Post Time Icon','electronics-store'),
		'transport' => 'refresh',
		'section'	=> 'electronics_store_single_post',
		'setting'	=> 'electronics_store_single_posttime_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('electronics_store_feature_image',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_feature_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Feature Image','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

     $wp_customize->add_setting( 'electronics_store_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'electronics_store_sanitize_float',
	) );
	$wp_customize->add_control( 'electronics_store_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','electronics-store' ),
		'section'     => 'electronics_store_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'electronics_store_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'electronics_store_sanitize_float',
	));
	$wp_customize->add_control('electronics_store_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','electronics-store' ),
		'section' => 'electronics_store_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('electronics_store_single_post_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_single_post_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','electronics-store'),
       'description' => __('Ex: "/", "|", "-", ...','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

	$wp_customize->add_setting('electronics_store_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
 	));
 	$wp_customize->add_control('electronics_store_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Categories','electronics-store'),
		'section' => 'electronics_store_single_post'
	));

	$wp_customize->add_setting('electronics_store_category_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_category_color', array(
		'label'    => __('Category Color', 'electronics-store'),
		'section'  => 'electronics_store_single_post',
	)));

	$wp_customize->add_setting('electronics_store_category_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_category_background_color', array(
		'label'    => __('Category Background Color', 'electronics-store'),
		'section'  => 'electronics_store_single_post',
	)));

    $wp_customize->add_setting('electronics_store_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting( 'electronics_store_comment_width', array(
		'default' => 100,
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control( 'electronics_store_comment_width', array(
		'label' => __( 'Comment Textarea Width', 'electronics-store'),
		'section' => 'electronics_store_single_post',
		'type' => 'number',
		'settings' => 'electronics_store_comment_width',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

    $wp_customize->add_setting('electronics_store_comment_title',array(
       'default' => __('Leave a Reply','electronics-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_comment_submit_text',array(
       'default' => __('Post Comment','electronics-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Button Text','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related Posts','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting('electronics_store_related_posts_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','electronics-store'),
       'section' => 'electronics_store_single_post'
    ));

    $wp_customize->add_setting( 'electronics_store_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	) );
	$wp_customize->add_control( 'electronics_store_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','electronics-store' ),
		'section' => 'electronics_store_single_post',
		'type' => 'number',
		'settings' => 'electronics_store_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'electronics_store_post_order', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control( 'electronics_store_post_order', array(
        'section' => 'electronics_store_single_post',
        'type' => 'radio',
        'label' => __( 'Related Posts Order By', 'electronics-store' ),
        'choices' => array(
            'categories' => __('Categories', 'electronics-store'),
            'tags' => __( 'Tags', 'electronics-store' ),
    )));

    $wp_customize->add_setting( 'electronics_store_related_post_excerpt_number',array(
	    'default' => 20,
	    'sanitize_callback' => 'electronics_store_sanitize_float'
	));

	$wp_customize->add_control('electronics_store_related_post_excerpt_number',  array(
	    'label' => esc_html__( 'Related Posts Content Limit','electronics-store' ),
	    'section' => 'electronics_store_single_post',
	    'type'    => 'number',
	    'settings' => 'electronics_store_related_post_excerpt_number',
	    'input_attrs' => array(
	    'min' => 0,
	    'max' => 50,
	    'step' => 1,
	),
	));

    //404 page settings
	$wp_customize->add_section('electronics_store_404_page',array(
		'title'	=> __('404 & No Result Page Settings','electronics-store'),
		'priority'	=> null,
		'panel' => 'electronics_store_panel_id',
	));

	$wp_customize->add_setting('electronics_store_404_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_404_title',array(
       'type' => 'text',
       'label' => __('404 Page Title','electronics-store'),
       'section' => 'electronics_store_404_page'
    ));

    $wp_customize->add_setting('electronics_store_404_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_404_text',array(
       'type' => 'text',
       'label' => __('404 Page Text','electronics-store'),
       'section' => 'electronics_store_404_page'
    ));

    $wp_customize->add_setting('electronics_store_404_button_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_404_button_text',array(
       'type' => 'text',
       'label' => __('404 Page Button Text','electronics-store'),
       'section' => 'electronics_store_404_page'
    ));

    $wp_customize->add_setting('electronics_store_no_result_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_no_result_title',array(
       'type' => 'text',
       'label' => __('No Result Page Title','electronics-store'),
       'section' => 'electronics_store_404_page'
    ));

    $wp_customize->add_setting('electronics_store_no_result_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_no_result_text',array(
       'type' => 'text',
       'label' => __('No Result Page Text','electronics-store'),
       'section' => 'electronics_store_404_page'
    ));

    $wp_customize->add_setting('electronics_store_show_search_form',array(
        'default' => true,
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_show_search_form',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Search Form','electronics-store'),
      	'section' => 'electronics_store_404_page',
	));

	//Footer
	$wp_customize->add_section('electronics_store_footer_section',array(
		'title'	=> __('Footer Section','electronics-store'),
		'priority'	=> null,
		'panel' => 'electronics_store_panel_id',
	));

	$wp_customize->selective_refresh->add_partial(
		'electronics_store_show_back_to_top',
		array(
			'selector'        => '.scrollup',
			'render_callback' => 'electronics_store_customize_partial_electronics_store_show_back_to_top',
		)
	);

	$wp_customize->add_setting('electronics_store_show_back_to_top',array(
        'default' => 'true',
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Back to Top Button','electronics-store'),
      	'section' => 'electronics_store_footer_section',
	));

	$wp_customize->add_setting('electronics_store_back_to_top_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electronics_Store_Icon_Changer(
        $wp_customize, 'electronics_store_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electronics_store_scroll_icon_font_size',array(
		'default'=> 18,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','electronics-store'),
		'section'=> 'electronics_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('electronics_store_scroll_icon_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_scroll_icon_color', array(
		'label'    => __('Back To Top Icon Color', 'electronics-store'),
		'section'  => 'electronics_store_footer_section',
	)));

	$wp_customize->add_setting('electronics_store_back_to_top_text',array(
		'default'	=> __('Back to Top','electronics-store'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('electronics_store_back_to_top_text',array(
		'label'	=> __('Back to Top Button Text','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('electronics_store_back_to_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_back_to_top_alignment',array(
        'type' => 'select',
        'label' => __('Back to Top Button Alignment','electronics-store'),
        'section' => 'electronics_store_footer_section',
        'choices' => array(
            'Left' => __('Left','electronics-store'),
            'Right' => __('Right','electronics-store'),
            'Center' => __('Center','electronics-store'),
        ),
	) );

	$wp_customize->add_setting( 'electronics_store_footer_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_footer_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Footer','electronics-store' ),
      'section' => 'electronics_store_footer_section'
    ));

	$wp_customize->add_setting('electronics_store_footer_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_footer_background_color', array(
		'label'    => __('Footer Background Color', 'electronics-store'),
		'section'  => 'electronics_store_footer_section',
	)));

	$wp_customize->add_setting('electronics_store_footer_background_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_store_footer_background_img',array(
        'label' => __('Footer Background Image','electronics-store'),
        'section' => 'electronics_store_footer_section'
	)));

	$wp_customize->add_setting('electronics_store_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_store_sanitize_choices'
	  ));
	  $wp_customize->add_control('electronics_store_footer_img_position',array(
		  'type' => 'select',
		  'label' => __('Footer Image Position','electronics-store'),
		  'section' => 'electronics_store_footer_section',
		  'choices' 	=> array(
			  'left top' 		=> esc_html__( 'Top Left', 'electronics-store' ),
			  'center top'   => esc_html__( 'Top', 'electronics-store' ),
			  'right top'   => esc_html__( 'Top Right', 'electronics-store' ),
			  'left center'   => esc_html__( 'Left', 'electronics-store' ),
			  'center center'   => esc_html__( 'Center', 'electronics-store' ),
			  'right center'   => esc_html__( 'Right', 'electronics-store' ),
			  'left bottom'   => esc_html__( 'Bottom Left', 'electronics-store' ),
			  'center bottom'   => esc_html__( 'Bottom', 'electronics-store' ),
			  'right bottom'   => esc_html__( 'Bottom Right', 'electronics-store' ),
		  ),
	  ));
  
	$wp_customize->add_setting('electronics_store_img_footer',array(
	  'default'=> 'scroll',
	  'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_img_footer',array(
	  'type' => 'select',
	  'label' => __('Footer Background Attatchment','electronics-store'),
	  'choices' => array(
		'fixed' => __('fixed','electronics-store'),
		'scroll' => __('scroll','electronics-store'),
	  ),
	  'section'=> 'electronics_store_footer_section',
	));

	$wp_customize->add_setting('electronics_store_footer_widget_layout',array(
        'default'           => '4',
        'sanitize_callback' => 'electronics_store_sanitize_choices',
    ));
    $wp_customize->add_control('electronics_store_footer_widget_layout',array(
        'type' => 'radio',
        'label'  => __('Footer widget layout', 'electronics-store'),
        'section'     => 'electronics_store_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'electronics-store'),
        'choices' => array(
            '1'     => __('One', 'electronics-store'),
            '2'     => __('Two', 'electronics-store'),
            '3'     => __('Three', 'electronics-store'),
            '4'     => __('Four', 'electronics-store')
        ),
    ));

	$wp_customize->add_setting('electronics_store_widgets_heading_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_widgets_heading_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Footer Widgets Heading Text Transform','electronics-store'),
		'choices' => array(
            'Uppercase' => __('Uppercase','electronics-store'),
            'Capitalize' => __('Capitalize','electronics-store'),
            'Lowercase' => __('Lowercase','electronics-store'),
        ),
		'section'=> 'electronics_store_footer_section',
	));	
    
    $wp_customize->add_setting('electronics_store_widgets_heading_fontsize',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'electronics_store_sanitize_float',
	));	
	$wp_customize->add_control('electronics_store_widgets_heading_fontsize',array(
		'label'	=> __('Footer Widgets Heading Font Size','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('electronics_store_widgets_heading_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
    ));
    $wp_customize->add_control('electronics_store_widgets_heading_font_weight',array(
        'type' => 'select',
        'label' => __('Footer Widgets Heading Font Weight','electronics-store'),
        'section' => 'electronics_store_footer_section',
        'choices' => array(
            '100' => __('100','electronics-store'),
            '200' => __('200','electronics-store'),
            '300' => __('300','electronics-store'),
            '400' => __('400','electronics-store'),
            '500' => __('500','electronics-store'),
            '600' => __('600','electronics-store'),
            '700' => __('700','electronics-store'),
            '800' => __('800','electronics-store'),
            '900' => __('900','electronics-store'),
        ),
	) );

    $wp_customize->add_setting('electronics_store_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading Alignment','electronics-store'),
    'section' => 'electronics_store_footer_section',
    'choices' => array(
    	'Left' => __('Left','electronics-store'),
        'Center' => __('Center','electronics-store'),
        'Right' => __('Right','electronics-store')
      ),
	) );

	$wp_customize->add_setting('electronics_store_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content Alignment','electronics-store'),
    'section' => 'electronics_store_footer_section',
    'choices' => array(
    	'Left' => __('Left','electronics-store'),
        'Center' => __('Center','electronics-store'),
        'Right' => __('Right','electronics-store')
        ),
	) );

    $wp_customize->add_setting( 'electronics_store_copyright_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_copyright_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Copyright','electronics-store' ),
      'section' => 'electronics_store_footer_section'
    ));

    $wp_customize->add_setting('electronics_store_copyright_alignment',array(
        'default' => 'Center',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_copyright_alignment',array(
        'type' => 'select',
        'label' => __('Copyright Alignment','electronics-store'),
        'section' => 'electronics_store_footer_section',
        'choices' => array(
            'Left' => __('Left','electronics-store'),
            'Right' => __('Right','electronics-store'),
            'Center' => __('Center','electronics-store'),
        ),
	) );

	$wp_customize->add_setting('electronics_store_copyright_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_copyright_color', array(
		'label'    => __('Copyright Color', 'electronics-store'),
		'section'  => 'electronics_store_footer_section',
	)));

	$wp_customize->add_setting('electronics_store_copyright__hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_copyright__hover_color', array(
		'label'    => __('Copyright Hover Color', 'electronics-store'),
		'section'  => 'electronics_store_footer_section',
	)));

	$wp_customize->add_setting('electronics_store_copyright_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_store_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'electronics-store'),
		'section'  => 'electronics_store_footer_section',
	)));

	$wp_customize->add_setting('electronics_store_copyright_fontsize',array(
		'default'	=> 16,
		'sanitize_callback'	=> 'electronics_store_sanitize_float',
	));	
	$wp_customize->add_control('electronics_store_copyright_fontsize',array(
		'label'	=> __('Copyright Font Size','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('electronics_store_copyright_top_bottom_padding',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'electronics_store_sanitize_float',
	));	
	$wp_customize->add_control('electronics_store_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top Bottom Padding','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'number'
	));

    $wp_customize->selective_refresh->add_partial(
		'electronics_store_footer_copy',
		array(
			'selector'        => '#footer p',
			'render_callback' => 'electronics_store_customize_partial_electronics_store_footer_copy',
		)
	);
	
	$wp_customize->add_setting('electronics_store_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('electronics_store_footer_copy',array(
		'label'	=> __('Copyright Text','electronics-store'),
		'section'	=> 'electronics_store_footer_section',
		'type'		=> 'text'
	));

//Footer Social Icons
$wp_customize->add_section('electronics_store_social_icons_section',array(
	'title'	=> __('Footer Social Icons','electronics-store'),
	'priority'	=> null,
	'panel' => 'electronics_store_panel_id',
));
$wp_customize->selective_refresh->add_partial(
	'electronics_store_facebook_url',
	array(
		'selector'        => '.social-media',
		'render_callback' => 'electronics_store_customize_partial_electronics_store_facebook_url',
	)
);
$wp_customize->add_setting('electronics_store_show_footer_social_icon',array(
	'default' => true,
	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
));
$wp_customize->add_control('electronics_store_show_footer_social_icon',array(
	 'type' => 'checkbox',
	  'label' => __('Show/Hide Social Icons','electronics-store'),
	  'section' => 'electronics_store_social_icons_section',
));
$wp_customize->add_setting('electronics_store_footer_facebook_url',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw'
));
$wp_customize->add_control('electronics_store_footer_facebook_url',array(
	'label'	=> __('Add Facebook link','electronics-store'),
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_facebook_url',
	'type'	=> 'url'
));
$wp_customize->add_setting('electronics_store_footer_facebook_icon',array(
	'default'	=> 'fab fa-facebook-f',
	'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control(new Electronics_Store_Icon_Changer(
	$wp_customize,'electronics_store_footer_facebook_icon',array(
	'label'	=> __('Add Facebook Icon','electronics-store'),
	'transport' => 'refresh',
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_facebook_icon',
	'type'		=> 'icon'
)));

$wp_customize->add_setting('electronics_store_footer_twitter_url',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw'
));
$wp_customize->add_control('electronics_store_footer_twitter_url',array(
	'label'	=> __('Add Twitter link','electronics-store'),
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_twitter_url',
	'type'	=> 'url'
));
$wp_customize->add_setting('electronics_store_footer_twitter_icon',array(
	'default'	=> 'fab fa-twitter',
	'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control(new Electronics_Store_Icon_Changer(
	$wp_customize,'electronics_store_footer_twitter_icon',array(
	'label'	=> __('Add Twitter Icon','electronics-store'),
	'transport' => 'refresh',
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_twitter_icon',
	'type'		=> 'icon'
)));
$wp_customize->add_setting('electronics_store_footer_instagram_url',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw'
));	
$wp_customize->add_control('electronics_store_footer_instagram_url',array(
	'label'	=> __('Add Instagram link','electronics-store'),
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_instagram_url',
	'type'	=> 'url'
));
$wp_customize->add_setting('electronics_store_footer_instagram_icon',array(
	'default'	=> 'fab fa-instagram',
	'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control(new Electronics_Store_Icon_Changer(
	$wp_customize,'electronics_store_footer_instagram_icon',array(
	'label'	=> __('Add Instagram Icon','electronics-store'),
	'transport' => 'refresh',
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_instagram_icon',
	'type'		=> 'icon'
)));
$wp_customize->add_setting('electronics_store_footer_pintrest_url',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw'
));	
$wp_customize->add_control('electronics_store_footer_pintrest_url',array(
	'label'	=> __('Add pintrest link','electronics-store'),
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_pintrest_url',
	'type'		=> 'url'
));
$wp_customize->add_setting('electronics_store_footer_pintrest_icon',array(
	'default'	=> 'fab fa-pinterest-p',
	'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control(new Electronics_Store_Icon_Changer(
	$wp_customize,'electronics_store_footer_pintrest_icon',array(
	'label'	=> __('Add pintrest Icon','electronics-store'),
	'transport' => 'refresh',
	'section'	=> 'electronics_store_social_icons_section',
	'setting'	=> 'electronics_store_footer_pintrest_icon',
	'type'		=> 'icon'
	),

));
$wp_customize->add_setting( 'electronics_store_footer_icon_font_size', array(
	'default'           => '',
	'sanitize_callback' => 'electronics_store_sanitize_float',
) );
$wp_customize->add_control( 'electronics_store_footer_icon_font_size', array(
	'label' => __( 'Icon Font Size','electronics-store' ),
	'section'     => 'electronics_store_social_icons_section',
	'type'        => 'number',
	'input_attrs' => array(
		'step' => 1,
		'min' => 0,
		'max' => 50,
	),
) );
$wp_customize->add_setting('electronics_store_footer_icon_alignment',array(
	'default' => 'Center',
	'sanitize_callback' => 'electronics_store_sanitize_choices'
));
$wp_customize->add_control('electronics_store_footer_icon_alignment',array(
	'type' => 'select',
	'label' => __('Icon Alignment','electronics-store'),
	'section' => 'electronics_store_social_icons_section',
	'choices' => array(
		'Left' => __('Left','electronics-store'),
		'Right' => __('Right','electronics-store'),
		'Center' => __('Center','electronics-store'),
	),
) );

	//Mobile Media Section
	$wp_customize->add_section( 'electronics_store_mobile_media_options' , array(
    	'title'      => __( 'Mobile Media Options', 'electronics-store' ),
		'priority'   => null,
		'panel' => 'electronics_store_panel_id'
	) );

	$wp_customize->add_setting('electronics_store_responsive_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electronics_Store_Icon_Changer(
        $wp_customize, 'electronics_store_responsive_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','electronics-store'),
		'section'	=> 'electronics_store_mobile_media_options',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electronics_store_open_menu_label',array(
       'default' => __('Open Menu','electronics-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_open_menu_label',array(
       'type' => 'text',
       'label' => __('Open Menu Label','electronics-store'),
       'section' => 'electronics_store_mobile_media_options'
    ));

	$wp_customize->add_setting( 'electronics_store_menu_color_setting', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'electronics_store_menu_color_setting', array(
  		'label' => __('Menu Icon Color Option', 'electronics-store'),
		'section' => 'electronics_store_mobile_media_options',
		'settings' => 'electronics_store_menu_color_setting',
  	)));

	$wp_customize->add_setting('electronics_store_responsive_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Electronics_Store_Icon_Changer(
        $wp_customize, 'electronics_store_responsive_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','electronics-store'),
		'section'	=> 'electronics_store_mobile_media_options',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electronics_store_close_menu_label',array(
       'default' => __('Close Menu','electronics-store'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('electronics_store_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','electronics-store'),
       'section' => 'electronics_store_mobile_media_options'
    ));

	$wp_customize->add_setting('electronics_store_hide_topbar_responsive',array(
		'default' => true,
		'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_hide_topbar_responsive',array(
     	'type' => 'checkbox',
		'label' => __('Show / Hide Topbar','electronics-store'),
		'section' => 'electronics_store_mobile_media_options',
	));

	$wp_customize->add_setting('electronics_store_slider_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider','electronics-store'),
      	'section' => 'electronics_store_mobile_media_options',
	));

	$wp_customize->add_setting('electronics_store_slider_button_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_slider_button_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','electronics-store'),
      	'section' => 'electronics_store_mobile_media_options',
	));

    $wp_customize->add_setting('electronics_store_responsive_show_back_to_top',array(
        'default' => true,
        'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
	));
	$wp_customize->add_control('electronics_store_responsive_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back to Top Button','electronics-store'),
      	'section' => 'electronics_store_mobile_media_options',
	));

	$wp_customize->add_setting( 'electronics_store_responsive_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_responsive_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Sticky header','electronics-store' ),
        'section' => 'electronics_store_mobile_media_options'
    ));

	$wp_customize->add_setting( 'electronics_store_responsive_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_responsive_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','electronics-store' ),
        'section' => 'electronics_store_mobile_media_options'
    ));

    $wp_customize->add_setting( 'electronics_store_sidebar_hide_show',array(
      'default' => true,
      'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_sidebar_hide_show',array(
      'type' => 'checkbox',
      'label' => esc_html__( 'Enable Sidebar','electronics-store' ),
      'section' => 'electronics_store_mobile_media_options'
    ));

	//Woocommerce Section
	$wp_customize->add_section( 'electronics_store_woocommerce_options' , array(
    	'title'      => __( 'Additional WooCommerce Options', 'electronics-store' ),
		'priority'   => null,
		'panel' => 'electronics_store_panel_id'
	) );

	// Product Columns
	$wp_customize->add_setting( 'electronics_store_products_per_row' , array(
		'default'           => '3',
		'sanitize_callback' => 'electronics_store_sanitize_choices',
	) );

	$wp_customize->add_control('electronics_store_products_per_row', array(
		'label' => __( 'Product per row', 'electronics-store' ),
		'section'  => 'electronics_store_woocommerce_options',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
	) );

	$wp_customize->add_setting('electronics_store_product_per_page',array(
		'default'	=> '9',
		'sanitize_callback'	=> 'electronics_store_sanitize_float'
	));	
	$wp_customize->add_control('electronics_store_product_per_page',array(
		'label'	=> __('Product per page','electronics-store'),
		'section'	=> 'electronics_store_woocommerce_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('electronics_store_shop_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_shop_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page sidebar','electronics-store'),
       'section' => 'electronics_store_woocommerce_options',
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('electronics_store_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'electronics_store_sanitize_choices',
	));
	$wp_customize->add_control('electronics_store_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'electronics-store'),
		'section'        => 'electronics_store_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'electronics-store'),
			'Right Sidebar' => __('Right Sidebar', 'electronics-store'),
		),
	));

	$wp_customize->add_setting( 'electronics_store_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('electronics_store_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Enable / Disable Single Product Page Sidebar','electronics-store'),
		'section' => 'electronics_store_woocommerce_options'
    ));

    // single product page sidebar alignment
    $wp_customize->add_setting('electronics_store_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'electronics_store_sanitize_choices',
	));
	$wp_customize->add_control('electronics_store_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'electronics-store'),
		'section'        => 'electronics_store_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'electronics-store'),
			'Right Sidebar' => __('Right Sidebar', 'electronics-store'),
		),
	));

	$wp_customize->add_setting('electronics_store_shop_page_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_shop_page_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page pagination','electronics-store'),
       'section' => 'electronics_store_woocommerce_options',
    ));

    $wp_customize->add_setting('electronics_store_product_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_product_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Product page sidebar','electronics-store'),
       'section' => 'electronics_store_woocommerce_options',
    ));

    $wp_customize->add_setting('electronics_store_related_product',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_related_product',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','electronics-store'),
       'section' => 'electronics_store_woocommerce_options',
    ));

	$wp_customize->add_setting( 'electronics_store_woocommerce_button_padding_top',array(
		'default' => 10,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control( 'electronics_store_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_button_padding_right',array(
	 	'default' => 20,
	 	'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_button_padding_right',	array(
	 	'label' => esc_html__( 'Button Right Left Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_button_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

    $wp_customize->add_setting('electronics_store_woocommerce_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'electronics_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('electronics_store_woocommerce_product_border',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','electronics-store'),
       'section' => 'electronics_store_woocommerce_options',
    ));

	$wp_customize->add_setting( 'electronics_store_woocommerce_product_padding_top',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_product_padding_top', array(
		'label' => esc_html__( 'Product Top Bottom Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_product_padding_right',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_product_padding_right', array(
		'label' => esc_html__( 'Product Right Left Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_product_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_product_box_shadow',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control( 'electronics_store_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('electronics_store_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'electronics_store_sanitize_choices'
	));
	$wp_customize->add_control('electronics_store_sale_position',array(
        'type' => 'select',
        'label' => __('Sale badge Position','electronics-store'),
        'section' => 'electronics_store_woocommerce_options',
        'choices' => array(
            'left' => __('Left','electronics-store'),
            'right' => __('Right','electronics-store'),
        ),
	) );

	$wp_customize->add_setting( 'electronics_store_woocommerce_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control( 'electronics_store_woocommerce_sale_top_padding',	array(
		'label' => esc_html__( 'Sale Top Bottom Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_sale_left_padding',array(
	 	'default' => 0,
	 	'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_sale_left_padding',	array(
	 	'label' => esc_html__( 'Sale Right Left Padding','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_woocommerce_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_woocommerce_sale_border_radius',array(
		'label' => esc_html__( 'Sale Border Radius','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'electronics_store_product_sale_font_size',array(
		'default' => '',
		'sanitize_callback' => 'electronics_store_sanitize_float'
	));
	$wp_customize->add_control('electronics_store_product_sale_font_size',array(
		'label' => esc_html__( 'Sale Font Size','electronics-store' ),
		'type' => 'number',
		'section' => 'electronics_store_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));
}
add_action( 'customize_register', 'electronics_store_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-width.php' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Electronics_Store_Customize {

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
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );
		load_template( trailingslashit( get_template_directory() ) . 'inc/electronics-customize-upsell-section.php' );

		// Register custom section types.
		$manager->register_section_type( 'Electronics_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Electronics_Store_Customize_Section_Pro(
				$manager,
				'electronics_store_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html( ELECTRONICS_STORE_PRO_NAME ),
					'pro_text' => esc_html( 'Get Pro','electronics-store' ),
					'pro_url'  => esc_url( ELECTRONICS_STORE_PRO_URL ),
				)
			)
		);

	// Frontpage Sections Upsell.
	$manager->add_section(
		new Electronics_Store_Customizer_Upsell_Section(
			$manager, 'electronics-store-upsell-frontpage-sections', array(
				'panel'       => 'electronics_store_panel_id',
				'priority'    => 500,
				'options'     => array(
					esc_html__( 'Our Facility Section', 'electronics-store' ),
					esc_html__( 'Category Section', 'electronics-store' ),
					esc_html__( 'Main Sales Section', 'electronics-store' ),
					esc_html__( 'Recommended Products Section', 'electronics-store' ),
					esc_html__( 'New Arrival Section', 'electronics-store' ),
					esc_html__( 'Latest Arrival Section', 'electronics-store' ),
					esc_html__( 'Upcoming Sale Section', 'electronics-store' ),
					esc_html__( 'Trending Products Section', 'electronics-store' ),
					esc_html__( 'Testimonials Section', 'electronics-store' ),
					esc_html__( 'Blog Section', 'electronics-store' ),
					esc_html__( 'Offer Section', 'electronics-store' ),
				),
				'button_url'  => esc_url( ELECTRONICS_STORE_PRO_URL ),
				'button_text' => esc_html__( 'View PRO version', 'electronics-store' ),
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

		wp_enqueue_script( 'electronics-store-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'electronics-store-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Electronics_Store_Customize::get_instance();