

<footer>

    <div class="footer-wrapper">

        <div class="logo-info-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="">
            <div class="info">
                <p>51 Technology Drive<br>
                    Anderson, SC 29625<br>
                    <a href="https://www.google.com/maps/dir//51+Technology+Dr,+Anderson,+SC+29625/@34.586052,-82.8157758,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x885866c9c7f218b9:0x539f6402bf3ba80a!2m2!1d-82.81363!2d34.586052">Get
                        Directions</a></p>
            </div>
        </div>

        <div class="contact-block">
            <h4 class="header">CONTACT</h4>
            <ul class="contact-info">
                <li>
                    <span>Call Us <a href="tel:18643280008">1-864-328-0008</a></span>
                </li>
                <li>
                    <span>Write Us <a href="mailto:sales@poly-med3d.com">sales@poly-med3d.com</a></span>
                </li>
            </ul>
            <?php wp_nav_menu('menu=footer_menu'); ?>
        </div>

        <div class="iso-img-block">
            <a href="http://poly-med.com/wp-content/uploads/2015/10/QualityISO2015.pdf">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ISO_logo.png" alt="">
            </a>
        </div>

        <div class="social-block">
            <div class="socials-icons">
                <ul>
                    <li><a href="https://www.linkedin.com/company/poly-med-inc-/" class="linkedin-link"><i
                                    class="icon-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/PolyMedInc" class="twitter-link"><i class="icon-twitter"></i></a></li>
                </ul>
                <a href="http://poly-med.com/"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/Poly-med-white-logo.png" alt=""></a>
            </div>
        </div>

    </div>

</footer>

	<?php wp_footer(); ?>
</body>
</html>
