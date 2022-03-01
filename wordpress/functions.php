<?php

/**
 * Enqueue scripts and styles.
 */


function ilelapo_scripts() {

  wp_enqueue_style('ilelapo-style',
  get_template_directory_uri() . '/dist/wordpress.9116b930.css');

  wp_enqueue_script('ilelapo-scripts',
  get_template_directory_uri() . '/dist/wordpress.9658aa4a.js');

}

add_action( 'wp_enqueue_scripts', 'ilelapo_scripts' );
