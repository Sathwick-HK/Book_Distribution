<?php
/**
 * Plugin Name: Book Distributor
 * Plugin URI: https://example.com/book-distributor
 * Description: A comprehensive plugin for book distribution companies to manage catalogs, orders, retailers, publishers, inventory, shipping, and reports.
 * Version: 0.1.0
 * Author: Sathwickhk
 * Author URI: https://example.com
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: book-distributor
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
	exit;
}

// Define constants
if (!defined('BOOK_DIST_VERSION')) {
	define('BOOK_DIST_VERSION', '0.1.0');
}
if (!defined('BOOK_DIST_PLUGIN_FILE')) {
	define('BOOK_DIST_PLUGIN_FILE', __FILE__);
}
if (!defined('BOOK_DIST_PLUGIN_DIR')) {
	define('BOOK_DIST_PLUGIN_DIR', plugin_dir_path(__FILE__));
}
if (!defined('BOOK_DIST_PLUGIN_URL')) {
	define('BOOK_DIST_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Autoload includes
require_once BOOK_DIST_PLUGIN_DIR . 'includes/class-book-distributor.php';

function book_distributor_run() {
	$plugin = new Book_Distributor();
	$plugin->run();
}

book_distributor_run();
