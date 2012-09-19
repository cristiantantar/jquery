<?php
/**
 * The page template file.
 * 
 * Template Name: Page
 * 
 * @package WordPress
 * @subpackage MWA
 * @since MWA 1.0
 */
get_header(); ?>
<?php get_sidebar();?>
		<td width="697" align="left" valign="top" id="rightpan">
			<div id="content" class="widecolumn">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<div class="post">
					<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
					<p class="divider">&nbsp;</p>
					<div class="entrytext">
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</td>
<?php get_footer();?>