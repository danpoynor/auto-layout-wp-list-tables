<?php
/*
Plugin Name: Auto Layout wp-list-tables
Plugin URI: https://www.yourwebsite.com
Description: A simple WordPress plugin that updates the `fixed` CSS class used for admin list tables in a way that prevents a noticeable layout shift.
Version: 1.0
Author: Dan Poynor
Author URI: https://danpoynor.com
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (is_admin()) {
    // We are in admin mode
    require_once __DIR__ . '/admin/auto-layout-wp-list-tables-admin.php';
}
