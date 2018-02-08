<?php

//Custom cart button text
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
function woo_archive_custom_cart_button_text() {
    if(is_page('1635')){
        return __( 'PURCHASE MATERIALS', 'woocommerce' );
    } else {
        return __( 'Add to cart', 'woocommerce' );
    }
}