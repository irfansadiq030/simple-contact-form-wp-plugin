<?php
/*
 * Plugin Name:       Simple Contact Form
 * Plugin URI:        https://irfansadiq.pk
 * Description:       Simple Contaqct Form to get submissions.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Irfan Sadiq
 * Author URI:        https://irfansadiq.pk/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-contact-form
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

class Simple_Contact_Form
{

    // Constructor Method
    public function __construct()
    {
        add_action('init', array($this, 'custom_post'));
    }

    public function custom_post()
    {
    }
}
