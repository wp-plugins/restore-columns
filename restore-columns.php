<?php
/*
Plugin Name: Restore Columns
Plugin URI: https://wordpress.org/plugins/restore-columns/
Description: The plugin restores the possibility to select the number of columns displayed on the dashboard.
Version: 1.00
Author: Flector
Author URI: https://profiles.wordpress.org/flector#content-plugins
*/ 

function restore_columns() {
    add_screen_option(
        'layout_columns',
        array(
            'max'     => 4,
            'default' => 3
        )
    );
}
add_action('admin_head-index.php', 'restore_columns');