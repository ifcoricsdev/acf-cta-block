<?php
/**
 * Plugin Name: ACF CTA Block
 * Description: A custom CTA block using Advanced Custom Fields.
 * Version: 1.0
 * Author: Rico Dadiz
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    // check function exists
    if( function_exists('acf_register_block_type') ) {
        // register a testimonial block
        acf_register_block_type(array(
            'name'              => 'cta-block',
            'title'             => __('CTA'),
            'description'       => __('A custom CTA block.'),
            'render_template'   => plugin_dir_path(__FILE__) . 'block-template.php',
            'category'          => 'formatting',
            'icon'              => 'megaphone',
            'keywords'          => array( 'cta', 'cta block' ),
            'supports'          => array(
                'align'         => true,
            ),
        ));
    }
}


// Enqueue block styles
function acf_cta_block_styles() {
    if ( has_block('acf/cta-block') ) {
        wp_enqueue_style( 'cta-block-style', plugin_dir_url(__FILE__) . 'block-style.css' );
    }
}

add_action( 'enqueue_block_assets', 'acf_cta_block_styles' );
