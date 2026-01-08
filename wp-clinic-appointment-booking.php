<?php


if (!defined('ABSPATH')) exit;

define('WCAB_PATH', plugin_dir_path(__FILE__));

require_once WCAB_PATH . 'includes/create-table.php';
require_once WCAB_PATH . 'includes/shortcode-form.php';
require_once WCAB_PATH . 'includes/admin-page.php';

register_activation_hook(__FILE__, 'wcab_create_table');
