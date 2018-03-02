<?php
/*
  Template Name: Template for "Shop"
*/
?>


<!-- Include Header -->
<?php get_header(); ?>

<div class="centered-container">

    <h1 class="shop-header">REQUEST FORM</h1>

    <div class="printing-materials-goods-block" id="shop-items-block">
        <ul class="items-list">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'stock_status' => 'instock',
                'type' => 'variable',
                'meta_query' => array(
                    array(
                        'key' => '_stock_status',
                        'value' => 'instock'
                    )
                )
            );

            $loop = new WP_Query($args);


            while ($loop->have_posts()) : $loop->the_post();

                global $product;



                ?>

                <li class="item-element">

                    <div class="checkbox-wrapper">
                        <label>
                            <input type="checkbox" class="checkbox-item">
                            <span class="wpcf7-list-item-label"></span>
                        </label>
                    </div>

                    <div class="general-wrapper">

                        <div class="gallery-info-block">

                            <div class="images-block">

                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail'); ?>

                                <img src="<?php echo $image[0]; ?>" data-id=" <?php echo $loop->post->ID; ?> ">
                            </div>
                            <!-- Get the first two images END -->

                        </div>

                        <div class="product-info-wrapper">

                            <?php

                            do_action( 'woocommerce_single_product_summary' );

                            ?>

                            <p class="special-order-notification">If you would like to place an order for a quantity not shown please
                                <a href="#">Contact Us</a> for a special order.</p>


                        </div>

                    </div>

                </li>

            <?php endwhile;

            wp_reset_query();
            ?>
        </ul>

    </div>


    <section class="print-with-us">
        <div class="wrapper">
            <h2 class="header-content-general">PURCHASE REQUEST FORM</h2>
            <p class="text">Please fill out the information below to request the items you have selected above for
                purchase. If you have any questions you can contact us at <a href="sales@polymed3d.com">sales@polymed3d.com</a>
            </p>
            <?php echo do_shortcode('[contact-form-7 id="1681" title="PURCHASE REQUEST FORM"]') ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>