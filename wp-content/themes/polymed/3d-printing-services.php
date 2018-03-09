<?php
/*
  Template Name: Template for "3d printing services"
*/
?>


<!-- Include Header -->
<?php get_header(); ?>


<div class="main-top-banner-wrapper">
    <div class="img-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/HeroShot-3.png" alt="">
    </div>
    <div class="content-block">
        <h1 class="header">POLY-MED 3D <br> PRINTING SERVICES</h1>
        <p class="text">3D printing enables more efficient development of bioresorbable devices in the medical world.
            Our polymers are utilized in a wide range of medical device applications, and the addition of 3D printing
            enables us to create a solution for any medical device problem. If you have a device in mind that’s
            absorbable, we can help with our 3D Printing Services.
        </p>
    </div>
    <div class="purple-btn-block">
        <p class="purple-btn">See our high quality 3d printing materials solutions for all your needs</p>
    </div>
</div>


<div class="centered-container">

    <section class="quality-controlled-printing">
        <h2 class="header-content-general">QUALITY CONTROLLED 3D PRINTING</h2>
        <div class="design-service-process-wrapper">

            <div class="design-service-process-elements">

                <div class="top-elements">
                    <div class="item-block first">
                        <p class="title">MEDICAL GRADE POLYMERS</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-1-big.png" alt="">
                    </div>
                    <div class="item-block second">
                        <p class="title">3D PRINTING MATERIALS</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-2-big.png" alt="">
                    </div>
                    <div class="item-block third">
                        <p class="title">DIGITIZATION OF CONTENT</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-3-big.png" alt="">
                    </div>
                    <div class="item-block fourth">
                        <p class="title">3D PRINTING</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-4-big.png" alt="">
                    </div>
                    <div class="item-block last">
                        <p class="title">MEDICAL DEVICE</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-5-big.png" alt="">
                    </div>
                </div>

                <div class="middle-elements">
                    <div class="item-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
                        <h4 class="title-header">DESIGN SERVICE PROCESS</h4>
                    </div>
                </div>

                <div class="bottom-elements">
                    <div class="item-block first">
                        <p class="title">EXPLORATION</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-6-big.png" alt="">
                    </div>
                    <div class="item-block second">
                        <p class="title">EXPLORATION</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-7-big.png" alt="">
                    </div>
                    <div class="item-block third">
                        <p class="title">DESIGN</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-8-big.png" alt="">
                    </div>
                    <div class="item-block fourth">
                        <p class="title">DEVELOPMENT</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-9-big.png" alt="">
                    </div>
                    <div class="item-block last">
                        <p class="title">MANUFACTURING</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/design-service-process-10-big.png" alt="">
                    </div>
                </div>

            </div>

        </div>

        <p class="text quality-controlled-printing-text">Poly-Med is an FDA and ISO 13485/9001 registered company that operates a manufacturing facility in
            compliance to 21 CFR Part 820, Quality System Regulation. Because we have the ability to see a product through
            design to manufacture, our quality assurance standards are engrained in the very core of our company.
        </p>

    </section>

    <section class="print-with-us form-general" id="print-with-us">
        <div class="wrapper">
            <h2 class="header-content-general">PRINT WITH US</h2>
            <p class="text">Please provide us with the required information below to start your custom project today.
                For
                files larger than 10MB, please email us at <a href="mailto:sales@poly-med3d.com" style="color: #9A00F2">sales@poly-med3d.com.</a>

            </p>
            <?php echo do_shortcode('[contact-form-7 id="1680" title="PRINT WITH US"]') ?>
        </div>
    </section>

</div>


<?php get_footer(); ?>