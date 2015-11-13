<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bane
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="#">Disclaimer</a>
			<span class="sep"> | </span>
			<a href="#">Legal</a>
			<span class="pull-right">Copyright &copy; 2015 ITTO. All Rights Reserved.</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(200);
  });

  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(200);
  });
</script>
<?php wp_footer(); ?>

</body>
</html>
