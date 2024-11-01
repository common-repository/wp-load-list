<?php
/**
 * @link              https//wpfixit.com
 * @since             1.0.0
 * @package           Load_List
 *
 * @wordpress-plugin
 * Plugin Name:       WP Load List
 * Plugin URI:        https//wpfixit.com
 * Description:       When you are trying to speed up your site, minifying CSS and JS files can really gain you some speed but can also break your site.  This plugin allows you to get a full list of all CSS and JS files loading on each page so you can use this list to target the files you must avoid minifying.
 * Version:           1.6
 * Author:            WP Fix It
 * Author URI:        https://wpfixit.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       load-list
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


function activate_load_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-load-list-activator.php';
	Load_List_Activator::activate();
}

function deactivate_load_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-load-list-deactivator.php';
	Load_List_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_load_list' );
register_deactivation_hook( __FILE__, 'deactivate_load_list' );


require plugin_dir_path( __FILE__ ) . 'includes/class-load-list.php';


function run_load_list() {

	$plugin = new Load_List();
	$plugin->run();

}
run_load_list();


	
//function load_list_add_template_part( $content ) {	

function load_list_add_template_part( ) {	
	ob_start();
	require plugin_dir_path( __FILE__ ) . 'public/partials/load-list-public-display.php';			
	$template = ob_get_contents();			
	//$content .= $template;						
	ob_end_clean();
	//return $content;	
	echo($template);			
}

add_action('wp_footer', 'load_list_add_template_part',99);