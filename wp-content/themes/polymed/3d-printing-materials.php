<?php
/*
  Template Name: Template for "3d printing materials"
*/
?>


<!-- Include Header -->
<?php get_header(); ?>

<div class="main-top-banner-wrapper printing-materials">
    <div class="img-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/HeroShot-2.png" alt="">
    </div>
    <div class="content-block">
        <h1 class="header">3D PRINTING MATERIALS</h1>
        <p class="text">Poly-Med provides fully traceable, medical-grade polymers and filaments for additive
            manufacturing. Our materials offer distinct advantages by their unique properties based on their
            composition, architecture, and desired performance. <br>Poly-Med’s bioresorbable materials are not only
            guaranteed to have the best quality standards, they also provide innovative properties that yield a better
            printing experience, coupled with enhanced part functionality. With over 910 polymer solutions we are
            continuously developing bioresorbable materials for your device needs.
        </p>
    </div>
</div>


<div class="centered-container">

    <section class="making-filaments">
        <h2 class="header-content-general">MAKING FILAMENTS FOR 3D PRINTING</h2>
        <div class="filaments-wrapper-items">

            <div class="first-item-block item-block-general">
                <div class="img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/filaments-1.png" alt="">
                </div>
                <div class="content-block">
                    <div class="content-item">
                        <span class="circle">1</span>
                        <p class="text">
                            Poly-Med uses medical-grade, fully traceable raw materials in the production of all polymer
                            and filament products. All raw materials are tested for purity and quality specifications.
                        </p>
                    </div>
                </div>
            </div>

            <div class="second-item-block item-block-general">
                <div class="img-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/filaments-2-big.png" alt="">
                </div>
                <div class="content-block two">
                    <div class="content-item">
                        <span class="circle">2</span>
                        <p class="text">
                            To ensure the best possible filament, materials are extensively dried to minimize moisture
                            in the polymer, which can lead to degradation during extrusion.
                        </p>
                    </div>
                </div>
                <div class="content-block three">
                    <div class="content-item">
                        <span class="circle">3</span>
                        <p class="text">
                            Our custom built equipment provides ideal processing to minimize material degradation and
                            provide the best properties for 3D printing filaments.
                        </p>
                    </div>
                </div>
                <div class="content-block four">
                    <div class="content-item">
                        <span class="circle">4</span>
                        <p class="text">
                            We perform 100% inspection of 3D filaments in real time to ensure size and concentricity are
                            met.
                        </p>
                    </div>
                </div>
            </div>

            <div class="third-item-block">
                <div class="item">
                    <div class="content-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/making-filaments-1.png" alt="">
                        <p class="text">Poly-Med is an FDA and ISO 13485 registered company that operates a manufacturing
                            facility in compliance to 21 CFR Part 820, Quality System Regulation. Because we have the
                            ability to see our products from raw monomer to extruded 3D filament, our quality assurance
                            standards are ingrained in the very core of our company.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="content-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/making-filaments-2.png" alt="">
                        <p class="text">All 3D filaments are further inspected and assessed for molecular properties to
                            ensure consistent and repeatable printing. Our materials are tested for molecular weight,
                            monomer content, and thermal properties.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="content-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/making-filaments-3.png" alt="">
                        <p class="text">As all of our bioresorbable polymers degrade by hydrolytic degradation, minimizing
                            water content is of the utmost importance for enhancing 3D filament shelf life and maintaining
                            functionality. All products are thoroughly dried to less than 1000 ppm moisture and hermetically
                            packaged in foil.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="content-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/making-filaments-4.png" alt="">
                        <p class="text">The final product! Enjoy printing a first-in-class 3D filament that can be used for
                            bioresorbable scaffolding and device development on your own 3D printer!</p>
                    </div>
                </div>
            </div>

            <p class="text-content-general">
                Poly-Med provides a variety of filaments for 3D printing applications. These fibers are the only
                biocompatible and bioresorbable 3D printing filaments supported by an ISO 13485 certified quality
                system.
            </p>

            <p class="text-content-general">
                Poly-Med filaments are synthesized, extruded, inspected, packaged and shipped using fully traceable processes.
            </p>

            <div class="purple-btn-block">
                <a href="http://poly-med.local/3d-printing-services#print-with-us" class="purple-btn">print with us</a>
            </div>

        </div>
    </section>

    <section class="printing-materials-goods-wrapper">
        <h2 class="header-content-general">3D PRINTING MATERIALS</h2>
        <p class="text-content-general">Currently, we offer the polymers listed below, or, if your project needs a
            different material, we can provide a custom material solution for your 3D printing applications. Contact us
            <a href="mailto:sales@poly-med3d.com">sales@poly-med3d.com</a>
        </p>

        <div class="key-wrapper">
            <div class="key-block">
                <span class="header">Key</span>
                <span class="plus-btn"><i class="icon-plus"></i></span>
            </div>
            <div class="key-info-block">
                <ul>
                    <li><span>G = Glycolide</span></li>
                    <li><span>L = Lactide</span></li>
                    <li><span>D = Dioxanone</span></li>
                    <li><span>PEG = Polyethylene Glycol</span></li>
                    <li><span>TMC = Trimethylene Carbonate</span></li>
                    <li><span>C = Caprolactone</span></li>
                    <li><span>PPS = Polypropylene succinate</span></li>
                </ul>
            </div>
        </div>

        <div class="printing-materials-goods-block">
            <ul class="items-list">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'stock_status' => 'publish',
                    'category' => 'dual_products',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => 'dual_products'
                        )
                    ),
                    'meta_query' => array(
                        array(
                            'key' => '_stock_status',
                            'value' => 'instock'
                        )
                    )
                );

                $loop = new WP_Query($args);


                while ($loop->have_posts()) : $loop->the_post();

                    global $product; ?>

                    <li>


                        <h3 class="header"><?php echo get_the_title(); ?></h3>

                        <p class="description materials"><?php echo $product->post->post_excerpt; ?></p>

                        <div class="gallery-info-block">

                            <?php
                            $attachment_ids = $product->get_gallery_attachment_ids();
                            $i = 0; ?>

                            <div class="images-block">

                                <?php
                                foreach ($attachment_ids as $attachment_id) {
                                    if ($i < 2) { ?>
                                        <span>
                                            <img src="<?php echo $image_link = wp_get_attachment_url($attachment_id); ?>">
                                        </span>
                                        <?php $i++;
                                    }
                                }
                                ?>
                            </div>

                            <?php

                            $keys_repeater = get_field('keys');

                            if ($keys_repeater) {

                                ?>

                                <div class="shop_attributes">
                                    <ul>

                                        <?php foreach ($keys_repeater as $keys) { ?>

                                            <li>
                                                <span><?php echo $keys['name']; ?> :</span>
                                                <span class="product_weight"><?php echo $keys['value']; ?></span>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>

                            <?php } ?>

                            <a class="more-info-about" href="/shop/">Request more info
                                about <?php echo get_the_title(); ?></a>

                        </div>

                        <div class="bottom-buttons-block">
                            <a href="/shop/" class="purple-btn">PURCHASE MATERIALS</a>
                            <a href="/3d-printing-services#print-with-us" class="purple-btn">print with us</a>
                        </div>

                    </li>
                <?php
                endwhile;

                wp_reset_query();
                ?>
            </ul>
        </div>

    </section>

</div>


<?php get_footer(); ?>
