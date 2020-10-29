<?php

function letsgetop($optionname, $defaultval){
	if(get_option($optionname) != ""){
		return get_option($optionname);
	}else{
		return $defaultval;
	}
}


//Theme Settings
function mywp_theme_settings_page(){
	?>
	<script src="<?php echo bloginfo('template_directory'); ?>/js/jscolor.js"></script>
	<h1>Theme Settings</h1>
	<form method="post" action="options.php">
		<?php
			
			settings_fields("stylesection");
			do_settings_sections("theme-style-options");
			
			settings_fields("section");
			do_settings_sections("theme-social-options");
			submit_button();
		?>
	</form>	
	<?php
}

function display_theme_pannel_fields(){
	
	//Style Settings
	add_settings_section('stylesection', 'Style Settings', null, 'theme-style-options');
	
	add_settings_field('background_color', 'Background Color', 'display_bgcolor', 'theme-style-options', 'stylesection');
	add_settings_field('primary_color', 'Primary Color', 'display_primarycolor', 'theme-style-options', 'stylesection');
	add_settings_field('secondary_color', 'Secondary Color', 'display_secondarycolor', 'theme-style-options', 'stylesection');
	add_settings_field('footer_color', 'Footer Text Color', 'display_fcolor', 'theme-style-options', 'stylesection');
	add_settings_field('footer_bgcolor', 'Footer Background Color', 'display_fbgcolor', 'theme-style-options', 'stylesection');
	
	register_setting('stylesection', 'background_color');
	
	
	//Social Links Settings
	add_settings_section('section', 'Social Pages', null, 'theme-social-options');
	
	add_settings_field('facebook_url', 'Facebook', 'display_facebook_element', 'theme-social-options', 'section');
	add_settings_field('instagram_url', 'Instagram', 'display_instagram_element', 'theme-social-options', 'section');
	add_settings_field('youtube_url', 'YouTube', 'display_youtube_element', 'theme-social-options', 'section');
	add_settings_field('twitter_url', 'Twitter', 'display_twitter_element', 'theme-social-options', 'section');
	add_settings_field('whatsapp_url', 'WhatsApp', 'display_whatsapp_element', 'theme-social-options', 'section');
	add_settings_field('header_shortcode', 'Header Shortcode', 'display_header_shortcode', 'theme-social-options', 'section');
	
	register_setting('section', 'facebook_url');
	register_setting('section', 'instagram_url');
	register_setting('section', 'youtube_url');
	register_setting('section', 'twitter_url');
	register_setting('section', 'whatsapp_url');
	register_setting('section', 'header_shortcode');
	
	
}

add_action('admin_init', 'display_theme_pannel_fields');


//SOCIAL LINKS
//fb
function display_facebook_element(){
	?>
	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/>
	<?php
}
//ig
function display_instagram_element(){
	?>
	<input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>"/>
	<?php
}
//yt
function display_youtube_element(){
	?>
	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>"/>
	<?php
}
//tt
function display_twitter_element(){
	?>
	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>"/>
	<?php
}
//tt
function display_whatsapp_element(){
	?>
	<input type="text" name="whatsapp_url" id="whatsapp_url" value="<?php echo get_option('whatsapp_url'); ?>"/>
	<?php
}
//header shortcode
function display_header_shortcode(){
	?>
	<input type="text" name="header_shortcode" id="header_shortcode" value="<?php echo get_option('header_shortcode'); ?>"/>
	<?php
}


//STYLE SETTINGS
//bg color
function display_bgcolor(){
	?>
	<input type="text" name="background_color" id="background_color" value="<?php echo letsgetop('background_color', '#f6f6f6'); ?>" data-jscolor=""/>
	<?php
}
//primary color
function display_primarycolor(){
	?>
	<input type="text" name="primary_color" id="primary_color" value="<?php echo letsgetop('primary_color', '#8d7a42'); ?>" data-jscolor=""/>
	<?php
}
//secondary color
function display_secondarycolor(){
	?>
	<input type="text" name="secondary_color" id="secondary_color" value="<?php echo letsgetop('secondary_color', '#c5b37d'); ?>" data-jscolor=""/>
	<?php
}
//footer text color
function display_fcolor(){
	?>
	<input type="text" name="footer_color" id="footer_color" value="<?php echo letsgetop('footer_color', '#333333'); ?>" data-jscolor=""/>
	<?php
}
//footer bg color
function display_fbgcolor(){
	?>
	<input type="text" name="footer_bgcolor" id="footer_bgcolor" value="<?php echo letsgetop('footer_bgcolor', '#f7f7f7'); ?>" data-jscolor=""/>
	<?php
}





//Theme setting
function mywp_theme_settings(){
	add_menu_page('TSettings', 'TSettings', 'manage_options', 'theme-settings', 'mywp_theme_settings_page', null, 99);
}

add_action('admin_menu', 'mywp_theme_settings');



//Header Menu
function mywp_custom_new_menu(){
	register_nav_menu('my-header-menu',__('My Header Menu'));
}

add_action('init', 'mywp_custom_new_menu');



//Home widget
function mywp_home_widget(){
	register_sidebar(array(
		'name' 			=> 'Home Widget',
		'id'			=> 'home_widget',
		'before_widget'	=> '<div class="home_widget">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title"><i class="fa fa-square-o"></i> ',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'mywp_home_widget');



//Sidebar widget
function mywp_custom_widgetarea(){
	register_sidebar(array(
		'name' 			=> 'Right Sidebar',
		'id'			=> 'right_sidebar',
		'before_widget'	=> '<div class="widget-right-sidebar">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title"><i class="fa fa-square-o"></i> ',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'mywp_custom_widgetarea');


//Footer widget
function mywp_custom_footerwidgetarea(){
	register_sidebar(array(
		'name' 			=> 'Home Footer Widget',
		'id'			=> 'home_footer_widget',
		'before_widget'	=> '<div class="widget-footer">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'mywp_custom_footerwidgetarea');

//Custom logo
function themename_custom_logo_setup() {
 $defaults = array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//Enabling featured image
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//Removing pushdown because admin bar
/*
add_action('get_header', 'my_filter_head');
function my_filter_head() {
remove_action('wp_head', '_admin_bar_bump_cb');
}
*/