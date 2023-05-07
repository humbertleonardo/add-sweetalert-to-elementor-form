<?php
/*
Plugin Name: SweetAlert for Elementor Form
Description: Replaces the default Elementor Form message display after submission with the SweetAlert2 default.
Version: 1.0
Author: Leonardo Humbert

    Credits for SweetAlert2 library

    SweetAlert2 v10.16.0
    Copyright (c) 2021 - 2022
    Released under the MIT License.
    https://sweetalert2.github.io/

*/

function sweetalert_form_scripts() {
    wp_enqueue_script( 'sweetalert-form-script1', plugins_url( 'js/sweetalert2.all.min.js', __FILE__ ), array(), '1.0', true );
    wp_enqueue_script( 'sweetalert-form-script2', plugins_url( 'js/main.js', __FILE__ ), array(), '1.0', true );
    wp_enqueue_style( 'sweetalert-form-style', plugins_url( 'css/sweetalert2.min.css', __FILE__ ), array(), '1.0', 'all' );
    wp_enqueue_style( 'sweetalert-form-style2', plugins_url( 'css/custom.css', __FILE__ ), array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'sweetalert_form_scripts' );