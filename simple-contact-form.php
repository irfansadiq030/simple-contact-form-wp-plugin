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
        add_action('init', array($this, 'create_custom_post_type'));
    }

    public function create_custom_post_type()
    {
        $labels = array(
            'name'                  => 'Contact Form',
            'singular_name'         => 'Contact Form Entry',
            'menu_name'             => 'Contact Form', 
            'name_admin_bar'        => 'Contact Form', 
            'add_new'               => 'Add New Contact Entry',
            'add_new_item'          => 'Add New Contact Entry',
            'new_item'              => 'New Contact Entry',
            'edit_item'             => 'Edit Contact Entry',
            'view_item'             => 'View Contact Entry',
            'all_items'             => 'All Contact Entries',
            'search_items'          => 'Search Contact Entries',
            'not_found'             => 'No entry found.', 
            'not_found_in_trash'    => 'No entries found in Trash.',
            'items_list'            => 'Contact Entries list',
        );

        $args = array(
            'labels'              => $labels,
            'public'              => true,
            'publicly_queryable'  => false,
            'exclude_from_search' => true,
            'capability_type'     => 'post',
            'capability'          => 'manage_options',
            'menu_position'       => null,
            'menu_icon'       => 'dashicons-media-text',
            'supports'            => array('title'),
        );

        // Registering Post Type
        register_post_type( 'simple_contact_form', $args );
    }
}

new Simple_Contact_Form();
