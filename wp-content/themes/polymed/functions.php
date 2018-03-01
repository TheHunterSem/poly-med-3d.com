<?php

// Disble WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
    return $enqueue_styles;
}


// just pass in the attribute and the attribute slug
// and the return value is the attribute's name

// example : (assuming attribute size has the option of "Extra Small" withe the slug of "extra-small")
// echo attribute_slug_to_title('attribute_pa_size', 'extra-small');
// returns
// "Extra Small"

// code reworked from woocommerce/classes/class-wc-cart.php

// attribute slug to title
