# Book Distributor — WordPress Plugin

Author: Sathwickhk

## Overview
A comprehensive plugin for book distribution companies to manage catalogs, orders, retailers, publishers, inventory, shipping, and reports. It provides WordPress admin pages and public-facing shortcodes.

## Installation
- Copy the `book-distributor` folder to `wp-content/plugins/`
- Activate "Book Distributor" in WordPress Admin → Plugins

## Admin Pages
Accessible in WordPress Admin → Book Distributor menu.

1. Dashboard
   - Purpose: Overview KPIs and shortcuts.
   - File: `admin/partials/dashboard.php`
   - Screenshot: `assets/screenshots/admin-dashboard.png`

2. Books
   - Purpose: Manage book catalog (CRUD, import/export TBD).
   - File: `admin/partials/books.php`
   - Screenshot: `assets/screenshots/admin-books.png`

3. Orders
   - Purpose: View and manage distributor orders.
   - File: `admin/partials/orders.php`
   - Screenshot: `assets/screenshots/admin-orders.png`

4. Publishers
   - Purpose: Manage publishers and contracts.
   - File: `admin/partials/publishers.php`
   - Screenshot: `assets/screenshots/admin-publishers.png`

5. Retailers
   - Purpose: Manage retailers and terms.
   - File: `admin/partials/retailers.php`
   - Screenshot: `assets/screenshots/admin-retailers.png`

6. Inventory
   - Purpose: Track inventory across warehouses.
   - File: `admin/partials/inventory.php`
   - Screenshot: `assets/screenshots/admin-inventory.png`

7. Shipping
   - Purpose: Manage shipments and carriers.
   - File: `admin/partials/shipping.php`
   - Screenshot: `assets/screenshots/admin-shipping.png`

8. Reports
   - Purpose: Sales, inventory, and operations reports.
   - File: `admin/partials/reports.php`
   - Screenshot: `assets/screenshots/admin-reports.png`

9. Settings
   - Purpose: Configure general, catalog, order, and API settings.
   - File: `admin/partials/settings.php`
   - Screenshot: `assets/screenshots/admin-settings.png`

10. Help
    - Purpose: Documentation links and support info.
    - File: `admin/partials/help.php`
    - Screenshot: `assets/screenshots/admin-help.png`

## Public Shortcodes
- `[book_dist_catalog]`
  - Purpose: Display book catalog grid/list.
  - File: `public/partials/catalog.php`
  - Screenshot: `assets/screenshots/public-catalog.png`

- `[book_dist_detail]`
  - Purpose: Show single book details.
  - File: `public/partials/book-detail.php`
  - Screenshot: `assets/screenshots/public-book-detail.png`

- `[book_dist_distributors]`
  - Purpose: List distributors or branches.
  - File: `public/partials/distributors.php`
  - Screenshot: `assets/screenshots/public-distributors.png`

- `[book_dist_retailer_portal]`
  - Purpose: Retailer login/portal placeholder.
  - File: `public/partials/retailer-portal.php`
  - Screenshot: `assets/screenshots/public-retailer-portal.png`

- `[book_dist_order_tracking]`
  - Purpose: Order tracking form/status.
  - File: `public/partials/order-tracking.php`
  - Screenshot: `assets/screenshots/public-order-tracking.png`

## File Structure
- `book-distributor.php` — Plugin bootstrap and loader
- `includes/`
  - `class-book-distributor.php` — Core plugin class
- `admin/partials/` — Admin page templates
- `public/partials/` — Public-facing templates
- `assets/css/` — Styles
- `assets/js/` — Scripts
- `assets/screenshots/` — Screenshots referenced in README

## Notes
- This is a scaffold with stubs for pages and shortcodes.
- Extend by implementing CRUD, custom post types, REST endpoints, and real UI.
