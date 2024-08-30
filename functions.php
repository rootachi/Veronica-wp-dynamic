<?php

add_action('after_setup_theme','woocommerce_support');
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
include(get_template_directory(). '/includes/all-function.php');



