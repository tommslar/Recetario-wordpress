<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area">
	<div id="custom-sidebar">
		<img src="https://i.pinimg.com/originals/95/f3/4e/95f34e9bc588226a8c91a1be5bbebd67.png">
		<h2>ShUrRe</h2>
		<p>Comparte tus recetas</p>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
