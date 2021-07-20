<?php
/*
Author: Beaver Coffee
Author URI: https://beaver.coffee
Description: Log out with Contact Form 7.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: BC CF7 Logout
Plugin URI: https://github.com/beavercoffee/bc-cf7-logout
Requires at least: 5.7
Requires PHP: 5.6
Text Domain: bc-cf7-logout
Version: 1.7.19
*/

if(defined('ABSPATH')){
    require_once(plugin_dir_path(__FILE__) . 'classes/class-bc-cf7-logout.php');
    BC_CF7_Logout::get_instance(__FILE__);
}
