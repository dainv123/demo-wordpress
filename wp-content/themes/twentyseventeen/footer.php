<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
		<footer id="footer" class="footer footer-1">
			<?php get_template_part( 'template-parts/footer/footer'); ?>
		</footer>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/assets_tpt/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets_tpt/js/plugins.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets_tpt/js/functions.js"></script>
	<!-- file js lien-he -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_tpt/js/plugins/jquery.gmap.min.js"></script>
	<script type="text/javascript">
		$('#googleMap').gMap({
			address: "<?php the_field('dia_chi', 'option'); ?>",
			zoom: 15,
			markers: [
				{
					address: "<?php the_field('dia_chi', 'option'); ?>",
					maptype: 'ROADMAP',
				}
			]
		});
	</script>
	<!-- end file js lien-he -->
</body>
</html>
