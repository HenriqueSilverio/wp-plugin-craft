<?php
/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package HenriqueSilverio\PluginCraft
 *
 * @wordpress-plugin
 * Plugin Name:       WP Plugin Craft
 * Plugin URI:        https://henriquesilverio.github.io
 * Description:       WordPress Plugin Boilerplate with PSR-4 Autoloading.
 * Version:           0.0.1
 * Author:            Henrique Silvério
 * Author URI:        https://henriquesilverio.github.io
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wp-plugin-craft
 * Domain Path:       languages
 */

use HenriqueSilverio\PluginCraft;

/**
 * @todo Add documentation.
 */
if (false === defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    die;
}

/**
 * @todo Add documentation.
 */
require_once 'vendor/autoload.php';

/**
 * @todo Add documentation.
 */
function wp_plugin_craft() {
    $plugin = PluginCraft\Plugin::get_instance();
    $plugin->start();
}

/**
 * @todo Add documentation.
 */
add_action('plugins_loaded', 'wp_plugin_craft');
