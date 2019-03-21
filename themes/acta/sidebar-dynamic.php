<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package acta
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area dynamic-sidebar col-4-sm" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
