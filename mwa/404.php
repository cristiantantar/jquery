<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage LBi Health
 * @since LBi Health 3.0
 */

get_header(); ?>
<center>
<div class="main clear error404" style="width:65%;padding:20px 0">
	<div class="content clear">
		<div class="rightSlash"></div>
	<h2 style="float:left;"><?php _e( '404 Error', 'mwa' ); ?></h2>
	
	<p class="caption" style="float:left;width:250px;clear:both;text-align:left;"><?php _e( "The page you are looking for either doesn't exist or has been moved. Hopefully this graph will help you put this into context.", 'lbihealth' ); ?></p>
	<img class="404_img" alt="The Page You're Looking For: Doesnt not Exist (%100) - Exists (%0)"src="<?php bloginfo( 'template_directory' ); ?>/images/404_img.png">
	</div>
</div><!-- .main -->
</center>
<?php get_footer(); ?>