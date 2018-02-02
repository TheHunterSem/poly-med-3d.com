<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
      <!--<div class="container back-to-top-container">
        <a class="back-to-top" href="#main">Back to Top</a>
      </div>-->

		<!--<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
								<h2>Contact</h2>
								<p>Call Us +1-864-328-0008<br />
								Write Us <a href="mailto:sales@poly-med.com">sales@poly-med.com</a></p>

								<p>51 Technology Drive<br />
								Anderson, SC 29625<br />
								<a target="_blank" href="https://www.google.com/maps/dir//51+Technology+Dr,+Anderson,+SC+29625/@34.586052,-82.8157758,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x885866c9c7f218b9:0x539f6402bf3ba80a!2m2!1d-82.81363!2d34.586052">Get Directions</a></p>


							</div>
							<div class="col-md-4">
								<h2>About</h2>
								<?php /*wp_nav_menu(array(
                  'menu' => 'about',
                  'theme_location' => 'about',
                  'depth' => 1,
                  'container' => '',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'bs-example-navbar-collapse-1',
                  'menu_class' => 'list-unstyled'
                )); */?>
							</div>
							<div class="col-md-4">
								<h2>Solutions</h2>
								<?php /*wp_nav_menu(array(
                  'menu' => 'solutions',
                  'theme_location' => 'solutions',
                  'depth' => 1,
                  'container' => '',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'bs-example-navbar-collapse-1',
                  'menu_class' => 'list-unstyled'
                )); */?>
							</div>
						</div>
					</div>
					<div class="col-md-4">
                      <a href="/wp-content/uploads/2014/06/Poly-Med-inc-ISO-certificate-of-registration.pdf">
                      <img class="img-responsive" src="<?php /*bloginfo('template_directory'); */?>/images/ul-logo.png"/>
                      </a>
                      <br />
            <div><a target="_blank" href="https://twitter.com/PolyMedInc"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="https://www.linkedin.com/company/poly-med-inc-"><i class="fa fa-linkedin fa-2x"></i></a></div>
					</div>
				</div>
				<?php /*//get_sidebar( 'footer' ); */?>

			</div>
		</footer>--><!-- #colophon -->
	</div><!-- #page -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-29221896-1', 'auto');
  ga('send', 'pageview');
  </script>
	<?php wp_footer(); ?>
</body>
</html>
