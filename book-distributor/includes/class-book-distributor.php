<?php
if (!defined('ABSPATH')) {
	exit;
}

class Book_Distributor {
	public function run() {
		add_action('admin_menu', [$this, 'register_admin_menus']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_public_assets']);

		add_action('init', [$this, 'register_shortcodes']);
	}

	public function enqueue_admin_assets() {
		wp_enqueue_style('book-dist-admin', BOOK_DIST_PLUGIN_URL . 'assets/css/admin.css', [], BOOK_DIST_VERSION);
		wp_enqueue_script('book-dist-admin', BOOK_DIST_PLUGIN_URL . 'assets/js/admin.js', ['jquery'], BOOK_DIST_VERSION, true);
	}

	public function enqueue_public_assets() {
		wp_enqueue_style('book-dist-public', BOOK_DIST_PLUGIN_URL . 'assets/css/public.css', [], BOOK_DIST_VERSION);
		wp_enqueue_script('book-dist-public', BOOK_DIST_PLUGIN_URL . 'assets/js/public.js', ['jquery'], BOOK_DIST_VERSION, true);
	}

	public function register_admin_menus() {
		add_menu_page(
			__('Book Distributor', 'book-distributor'),
			__('Book Distributor', 'book-distributor'),
			'manage_options',
			'book-distributor',
			[$this, 'render_dashboard_page'],
			'dashicons-book-alt',
			26
		);

		add_submenu_page('book-distributor', __('Dashboard', 'book-distributor'), __('Dashboard', 'book-distributor'), 'manage_options', 'book-distributor', [$this, 'render_dashboard_page']);
		add_submenu_page('book-distributor', __('Books', 'book-distributor'), __('Books', 'book-distributor'), 'manage_options', 'book-distributor-books', [$this, 'render_books_page']);
		add_submenu_page('book-distributor', __('Orders', 'book-distributor'), __('Orders', 'book-distributor'), 'manage_options', 'book-distributor-orders', [$this, 'render_orders_page']);
		add_submenu_page('book-distributor', __('Publishers', 'book-distributor'), __('Publishers', 'book-distributor'), 'manage_options', 'book-distributor-publishers', [$this, 'render_publishers_page']);
		add_submenu_page('book-distributor', __('Retailers', 'book-distributor'), __('Retailers', 'book-distributor'), 'manage_options', 'book-distributor-retailers', [$this, 'render_retailers_page']);
		add_submenu_page('book-distributor', __('Inventory', 'book-distributor'), __('Inventory', 'book-distributor'), 'manage_options', 'book-distributor-inventory', [$this, 'render_inventory_page']);
		add_submenu_page('book-distributor', __('Shipping', 'book-distributor'), __('Shipping', 'book-distributor'), 'manage_options', 'book-distributor-shipping', [$this, 'render_shipping_page']);
		add_submenu_page('book-distributor', __('Reports', 'book-distributor'), __('Reports', 'book-distributor'), 'manage_options', 'book-distributor-reports', [$this, 'render_reports_page']);
		add_submenu_page('book-distributor', __('Settings', 'book-distributor'), __('Settings', 'book-distributor'), 'manage_options', 'book-distributor-settings', [$this, 'render_settings_page']);
		add_submenu_page('book-distributor', __('Help', 'book-distributor'), __('Help', 'book-distributor'), 'manage_options', 'book-distributor-help', [$this, 'render_help_page']);
	}

	private function render_partial($file, $vars = []) {
		extract($vars);
		$path = BOOK_DIST_PLUGIN_DIR . $file;
		if (file_exists($path)) {
			include $path;
		} else {
			echo '<div class="wrap"><h1>Page not found</h1></div>';
		}
	}

	public function render_dashboard_page() {
		$this->render_partial('admin/partials/dashboard.php');
	}
	public function render_books_page() {
		$this->render_partial('admin/partials/books.php');
	}
	public function render_orders_page() {
		$this->render_partial('admin/partials/orders.php');
	}
	public function render_publishers_page() {
		$this->render_partial('admin/partials/publishers.php');
	}
	public function render_retailers_page() {
		$this->render_partial('admin/partials/retailers.php');
	}
	public function render_inventory_page() {
		$this->render_partial('admin/partials/inventory.php');
	}
	public function render_shipping_page() {
		$this->render_partial('admin/partials/shipping.php');
	}
	public function render_reports_page() {
		$this->render_partial('admin/partials/reports.php');
	}
	public function render_settings_page() {
		$this->render_partial('admin/partials/settings.php');
	}
	public function render_help_page() {
		$this->render_partial('admin/partials/help.php');
	}

	public function register_shortcodes() {
		add_shortcode('book_dist_catalog', [$this, 'shortcode_catalog']);
		add_shortcode('book_dist_detail', [$this, 'shortcode_book_detail']);
		add_shortcode('book_dist_distributors', [$this, 'shortcode_distributors']);
		add_shortcode('book_dist_retailer_portal', [$this, 'shortcode_retailer_portal']);
		add_shortcode('book_dist_order_tracking', [$this, 'shortcode_order_tracking']);
	}

	public function shortcode_catalog($atts = [], $content = '') {
		ob_start();
		$this->render_partial('public/partials/catalog.php');
		return ob_get_clean();
	}
	public function shortcode_book_detail($atts = [], $content = '') {
		ob_start();
		$this->render_partial('public/partials/book-detail.php');
		return ob_get_clean();
	}
	public function shortcode_distributors($atts = [], $content = '') {
		ob_start();
		$this->render_partial('public/partials/distributors.php');
		return ob_get_clean();
	}
	public function shortcode_retailer_portal($atts = [], $content = '') {
		ob_start();
		$this->render_partial('public/partials/retailer-portal.php');
		return ob_get_clean();
	}
	public function shortcode_order_tracking($atts = [], $content = '') {
		ob_start();
		$this->render_partial('public/partials/order-tracking.php');
		return ob_get_clean();
	}
}
