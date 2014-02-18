<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fabthemes
 */
?>
		</div></div>
	</div><!-- #content -->

	<div id="footer-widgets" class="clearfix">
		<div class="container"> <div class="row"> 
			<?php dynamic_sidebar( 'footerbar' ); ?>
		</div></div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container"> <div class="row">
				<div class="col-md-12"> 
					<div class="site-info">
					<a href="https://ermile.com/fa" title="ارمایل - Ermile">Ermile</a> <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?> <br> برداشت مطالب این سایت کاملا آزاد است:)
					</div>
				</div>
			</div></div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>
</html>
