<?php
/*
  Template Name: Template for "Shop"
*/
?>


<!-- Include Header -->
<?php get_header(); ?>

<div class="centered-container">

    <div class="printing-materials-goods-block">
        <ul class="items-list">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
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

                echo '<li>';


                echo '<h3 class="header"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                // Get the short description START
                echo '<p class="description">' . $product->post->post_excerpt . '</p>';
                // Get the short description END

                echo '<div class="gallery-info-block">';

                echo '<div class="images-block">';

                $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');

                echo '<img src="' . $image[0] . '" data-id=" ' . $loop->post->ID . ' ">';
                echo '</div>';
                // Get the first two images END


                echo '</div>';

                echo '</li>';

            endwhile;

            wp_reset_query();
            ?>
        </ul>
    </div>


    <section class="print-with-us" id="print-with-us">
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
