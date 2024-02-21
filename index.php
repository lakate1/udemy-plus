<?php
/*
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to the theme.
 * Version:           1.0.0
 * Requires at least: 6.4.2
 * Requires PHP:      7.2
 * Author:            Queen Codes
 * Author URI:        https://author.example.com/
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident';
}

// Setup 
define("UP_PLUGIN_DIR", plugin_dir_path(__FILE__)); //stores a path to our plugin

// Includes
include(UP_PLUGIN_DIR . "includes/register-blocks.php");

// Hooks
add_action("init", "up_register_blocks");