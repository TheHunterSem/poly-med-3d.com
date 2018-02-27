<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>
<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php // Start the Loop.?>
      <?php while ( have_posts() ) :?>
        <?php the_post();?>

          <?php // Include the page content template.?>
          <?php get_template_part( 'content', 'page' );?>

        <?php endwhile;?>

    </div><!-- #content -->
  </div><!-- #primary -->
  <?php //get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php get_footer();?>
