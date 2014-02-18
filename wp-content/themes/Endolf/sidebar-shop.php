<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package fabthemes
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}
?>
<div class="col-md-4">
 <div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-shop' ); ?>
 </div>
</div>