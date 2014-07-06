<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package IBK
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'ibk_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ibk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ibk' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ibk' ), 'IBK', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#btn_codeModal').dialog({autoOpen: false, modal: true, draggable: false, title: 'Button Code', height: 260, width: 415});
			jQuery('textarea#buttonCodeTxt').focus(function() {
    				var $this = jQuery(this);
    				$this.select();
    				window.setTimeout(function() {
        				$this.select();
    				}, 1);

    				// Work around WebKit's little problem
    				$this.mouseup(function() {
        				// Prevent further mouseup intervention
        				$this.unbind("mouseup");
        				return false;
    				});
			});
		});
	</script>
	<div id="btn_codeModal">
		<p>Copy and paste into your site:</p>
		<textarea id="buttonCodeTxt" style="margin: 2px; width: 350px; height: 145px; "><a href="http://interiorsbykenz.com" border="0" style="border: none; text-align: center; display: block; width: 147px;"><img src="http://interiorsbykenz.com/wp-content/uploads/2013/08/IBK_Blog-Button-250x250.png" style="border: none; height: 125px;" /><br/>Interiors by Kenz</a></textarea>
	</div>

</body>
</html>