<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Template Name: Home
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
							<div class="entrytext">
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
					
				<p class="divider">&nbsp;</p>
				
				<fieldset class="one">
					<p class="title">Consectetuer Adipiscing</p>
					<p><a href="javascript:void(0);">Lorem ipsum dolor sit amet sit
					consec adipiscing</a> elit ellentesque nec masa eleifend lectus.</p>
					<p class="nopad">Dolor sit amet consectetuer elitq ellentesque nec
					massa eleifend lectus dolor sit amet. <a href="javascript:void(0);"
						class="more" title="read more">read more</a></p>
				</fieldset>
				
				<fieldset class="two">
					<p class="title">Sectetuer Edipiscing</p>
					<p><a href="javascript:void(0);">Lorem ipsum dolor sit amet
					consectetuer adipiscing</a> elit nec massa eleifend lectus ipsum
					dolor sit amet</p>
					<p class="nopad">Pellentesque nec massa eleifend lectus dolor sit
					amet. <a href="javascript:void(0);" class="more" title="read more">read
					more</a></p>
				</fieldset>
				
				<fieldset class="three">
					<p class="title">Qensectet Vdipiscing</p>
					<p><a href="javascript:void(0);">Lorem ipsum dolor sit amet secteer
					adipiscing elit.</a> Entesque necmass eleifend lectus.</p>
					<p class="nopad">Ipsum dolor sit amet consectetuer elit pellentesque
					nec massa elit eleifend lectus dolor sit. <a
						href="javascript:void(0);" class="more" title="read more">read more</a></p>
				</fieldset>
				
				<br class="spacer">
				
				<p class="divider2">&nbsp;</p>
				
				<p class="manual"><a href="javascript:void(0);"
					title="Get your copy today">Get your copy today</a></p>
					
				<fieldset class="services">
					<h3>Services Offered</h3>
					<ul>
						<li><a href="javascript:void(0);">Etiam blandit convallis nibh
						nulla purus facilisis dui a nunc spendisse potenttristique lectus
						eu tellus ullam est.</a></li>
						<li><a href="javascript:void(0);">Feugiat orci enean pulvinar
						eleifend tortorsed vel leo. Mauris eu tellus.</a></li>
						<li><a href="javascript:void(0);">Curabitur porttitor lectus eu
						tellus ullam est. Vivamus ac massa sed tellus tristique.</a></li>
					</ul>
				</fieldset>

				</td>
<?php get_footer();?>