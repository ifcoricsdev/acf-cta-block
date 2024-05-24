<?php
/**
 * Plugin Name: ACF CTA Block
 * Description: A custom CTA block using Advanced Custom Fields.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( function_exists('acf_register_block_type') ) {

    function register_acf_cta_block() {

        acf_register_block_type(array(
            'name'              => 'cta-block',
            'title'             => __('CTA Block'),
            'description'       => __('A custom CTA block.'),
            'render_template'   => plugin_dir_path(__FILE__) . 'block-template.php',
            'category'          => 'formatting',
            'icon'              => 'megaphone',
            'keywords'          => array( 'cta', 'call to action' ),
            'supports'          => array(
                'align' => true,
            ),
        ));

    }

    add_action('acf/init', 'register_acf_cta_block');
}

// Enqueue block styles
function acf_cta_block_styles() {
    if ( has_block('acf/cta-block') ) {
        wp_enqueue_style( 'cta-block-style', plugin_dir_url(__FILE__) . 'block-style.css' );
    }
}
add_action( 'enqueue_block_assets', 'acf_cta_block_styles' );
