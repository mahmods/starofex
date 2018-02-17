<?php

/**
 * Radix - setup functions and definitions
 * 
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 * 
 * @package Radix
 * @author Abukwaik http://www.radixtheme.com
 * @copyright Copyright (c) 2015, RADIX
 * @license http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @since Radix 1.0
 *
 */

define('RADIX_THEME_NAME', 'Radix');
define('RADIX_THEME_SLUG', 'radix');
define('RADIX_THEME_VERSION', '1.1.2');
define('RADIX_THEME_OPTIONS', 'ro_settings');
define('RADIX_THEME_DIR', get_template_directory());
define('RADIX_THEME_URI', get_template_directory_uri());
define('RADIX_JS_URI',  RADIX_THEME_URI . '/includes/js');
define('RADIX_CSS_URI', RADIX_THEME_URI . '/includes/css');
define('RADIX_IMG_DIR', RADIX_THEME_DIR . '/images');
define('RADIX_IMG_URI', RADIX_THEME_URI . '/images');
define('ACF_EARLY_ACCESS', '5');

if ( ! isset( $content_width )) {
  $content_width = 669; 
}

// Set the content width for full width pages with no sidebar.
function Radix_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {
    global $content_width;
    $content_width = 1170;
  }
}
add_action( 'template_redirect', 'Radix_content_width' );


/**
    Theme setup
**/

if ( !function_exists( 'Radix_setup' ) ) {

  function Radix_setup() {
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array( 'audio', 'gallery', 'image', 'video' ));
    add_theme_support( 'post-thumbnails');
    load_theme_textdomain( 'radix', RADIX_THEME_DIR . '/languages' );
    add_editor_style( RADIX_CSS_URI . '/editor-style.css' );

    // Register Menus
    register_nav_menus(
      array(
        'primary'     => __( 'Primary', 'radix' ),
        'footer-menu' => __( 'Footer Menu', 'radix' ),
        ) 
      );

    // allows users to set a custom background.
    add_theme_support( 'custom-background', apply_filters( 'radix_custom_background_args', array(
      'default-color' => 'f5f5f5',
      )));

    //add image sizes
    add_image_size('Radix-featured_image', 669, 272, true);
    add_image_size('Radix-small-thumb',  50, 50, true);
    add_image_size('Radix-full-size', 9999, 9999, false);
  }
}

add_action( 'after_setup_theme', 'Radix_setup' );

/**
  Title backwards compatibility for old WP versions
*/
if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() { ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php }
  add_action( 'wp_head', 'theme_slug_render_title' );
}

/**
    Getting post thumbnail url
 */
function Radix_get_thumb_url($pots_ID){
  return wp_get_attachment_url( get_post_thumbnail_id( $pots_ID ) );
}


/**
    Load Required Files
**/
// Load Redux framework admin panel
if ( !class_exists( 'ReduxFramework' ) ) {
  require_once RADIX_THEME_DIR . '/admin/ReduxCore/framework.php';
  require_once RADIX_THEME_DIR . '/admin/ReduxCore/redux-config.php';
}

// Required Redux framework functions
require_once RADIX_THEME_DIR . '/admin/theme-options.php';

// RADIX Styles and Scripts 
require_once RADIX_THEME_DIR . '/admin/core/scripts.php';

// RADIX Sidebars, widgets and menus
require_once RADIX_THEME_DIR . '/admin/core/register.php';

// Custom functions & snippets
require_once RADIX_THEME_DIR . '/admin/core/clean.php';
require_once RADIX_THEME_DIR . '/admin/core/snippets.php';
require_once RADIX_THEME_DIR . '/admin/core/jetpack.php';

// Bootstrap Style Breadcrumbs
require_once RADIX_THEME_DIR . '/includes/breadcrumbs.php';

// Bootstrap nav walker
require_once RADIX_THEME_DIR . '/includes/bootstrap-walker.php';

// Bootstrap Pagination
require_once RADIX_THEME_DIR . '/includes/bootstrap-pagination.php';

// Custom template tags
require_once RADIX_THEME_DIR . '/includes/template-tags.php';

// Implement Custom Header features.
require_once RADIX_THEME_DIR . '/includes/custom-header.php';

// Social share
require_once RADIX_THEME_DIR . '/includes/social-share.php';



add_action( 'wp_print_styles', 'my_deregister_javascript', 100 );

function my_deregister_javascript() {
    //wp_deregister_script( 'contact-form-7' );
    wp_deregister_style( 'contact-form-7' );
    //contact-form-7-rtl-css
    wp_deregister_style( 'contact-form-7-rtl' );
    wp_deregister_style( 'Radix-bootstrap' );
    wp_deregister_style( 'Radix-bootstrap-rtl' );
    wp_deregister_style( 'Radix-fontawsome' );
    wp_deregister_style( 'Radix-theme' );
    wp_deregister_style( 'Radix-theme-rtl' );
    wp_deregister_style( 'Radix-style' );
    wp_deregister_style( 'Radix-theme-elements' );
    wp_deregister_style( 'Radix-theme-animate' );
    wp_deregister_style( 'Radix-custom' );
    wp_deregister_style( 'Radix-custom-rtl' );
    wp_deregister_style( 'Radix-owl-carousel' );
    wp_deregister_style( 'Radix-owl-carousel-theme' );
    wp_deregister_style( 'woocommerce-general' );
    wp_deregister_style( 'woocommerce-layout' );
    wp_deregister_style( 'Radix-all-css' );
    //wp_deregister_style( 'dashicons' );
    //wp_deregister_style( 'admin-bar-rtl' );
}


/*===================================================================================
* Add global options
* =================================================================================*/

/**
 *
 * The page content surrounding the settings fields. Usually you use this to instruct non-techy people what to do.
 *
 */
function theme_settings_page(){ 
	?>
	<div class="wrap">
		<h1>Contact Info</h1>
		<p>This information is used around the website, so changing these here will update them across the website.</p>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>
	
	<?php }

/**
 *
 * Next comes the settings fields to display. Use anything from inputs and textareas, to checkboxes multi-selects.
 *
 */

// Address
function display_address_element(){ ?>
	
	<input type="text" name="address" placeholder="Enter Address" value="<?php echo get_option('address'); ?>" size="35">

<?php }

// Phone 1
function display_phone1_element(){ ?>
	
	<input type="tel" name="phone1" placeholder="Enter phone number" value="<?php echo get_option('phone1'); ?>" size="35">

<?php }

// Phone 2
function display_phone2_element(){ ?>
	
	<input type="tel" name="phone2" placeholder="Enter phone number" value="<?php echo get_option('phone2'); ?>" size="35">

<?php }

// Phone 3
function display_phone3_element(){ ?>
	
	<input type="tel" name="phone3" placeholder="Enter phone number" value="<?php echo get_option('phone3'); ?>" size="35">

<?php }


// Email
function display_email_element(){ ?>
	
	<input type="email" name="email" placeholder="Enter email address" value="<?php echo get_option('email'); ?>" size="35">
	
<?php }

/**
 *
 * Here you tell WP what to enqueue into the <form> area. You need:
 *
 * 1. add_settings_section
 * 2. add_settings_field
 * 3. register_setting
 *
 */

function display_custom_info_fields(){
	
	add_settings_section("section", "Company Information", null, "theme-options");

	add_settings_field("address", "Address", "display_address_element", "theme-options", "section");
    add_settings_field("phone 1", "Phone Number 1", "display_phone1_element", "theme-options", "section");
    add_settings_field("phone 2", "Phone Number 2", "display_phone2_element", "theme-options", "section");
    add_settings_field("phone 3", "Phone Number 3", "display_phone3_element", "theme-options", "section");
	add_settings_field("email", "Email address", "display_email_element", "theme-options", "section");
    
	register_setting("section", "address");
    register_setting("section", "phone1");
    register_setting("section", "phone2");
    register_setting("section", "phone3");
	register_setting("section", "email");
	
}

add_action("admin_init", "display_custom_info_fields");

/**
 *
 * Tie it all together by adding the settings page to wherever you like. For this example it will appear
 * in Settings > Contact Info
 *
 */

function add_custom_info_menu_item(){
	
	add_options_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page");
	add_menu_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page", "dashicons-location-alt", 2);
}

add_action("admin_menu", "add_custom_info_menu_item");

$args = array(
	'page_title' => 'Home Page',
	'menu_slug' => 'home_page',
	'position' => 4,
	'icon_url' => "dashicons-admin-home",
	//'redirect' => true,
	'post_id' => 'home_page',
	'autoload' => false,
);

if( function_exists('acf_add_options_page') ) {
	
	//acf_add_options_page($args);
	
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   //wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   //wp_enqueue_script('jquery');
}

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCklGxOC2xKjaE_fUBYR1N9tvm8QK-GsR4';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');