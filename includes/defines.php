<?php

# Check get_plugin_data function exist
if (!function_exists('get_plugin_data')) {
    require_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

# Set Plugin path and url defines.
define('WP_STATISTICS_URL', plugin_dir_url(dirname(__FILE__)));
define('WP_STATISTICS_DIR', plugin_dir_path(dirname(__FILE__)));
define('WP_STATISTICS_MAIN_FILE', WP_STATISTICS_DIR . 'wp-statistics.php');
define('WP_STATISTICS_UPLOADS_DIR', 'wp-statistics');
define('WP_STATISTICS_SITE_URL', 'https://wp-statistics.com');
