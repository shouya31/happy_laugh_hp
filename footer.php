<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container" style="text-align:center;">
			<span>&copy; 2021 株式会社<?php bloginfo('name'); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>