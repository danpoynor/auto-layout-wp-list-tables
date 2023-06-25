<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Add custom CSS to admin head
function make_fixed_class_table_layout_auto() {
    echo '<style>
    .wp-list-table.fixed {
        table-layout: auto;
    }
    </style>';
}
add_action('admin_head', 'make_fixed_class_table_layout_auto');
