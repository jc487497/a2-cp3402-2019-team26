<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Coffee_Can
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" style="width:20%;">

	<?php dynamic_sidebar( 'sidebar-1' ); ?><!-- #secondary -->
</div>
