<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0
 *
 * This file is here for Backwards compatibility with old themes and will be removed in a future version
 *
 */
_deprecated_file( sprintf( __( 'Theme without %1$s' ), basename(__FILE__) ), '3.0', null, sprintf( __('Please include a %1$s template in your theme.'), basename(__FILE__) ) );
?>
  <div id="sidebar" role="complementary">
    <ul role="navigation" class="list-unstyled">
      <li><h3><?php _e('Archives'); ?></h3>
        <ul class="list-unstyled archive">
        <?php wp_get_archives(array('type' => 'postbypost')); ?>
        </ul>
      </li>
    </ul>
  </div>
