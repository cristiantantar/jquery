<!DOCTYPE html>
<html>
	<head>
		<title>MWA <?php wp_title( '-', true, 'left' );?></title>
		<?php wp_head();?>
		<link href="<?php bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet" type="text/css">
	</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0"
	class="center">
	<tr>
		<!-- Header Panel Starts Here -->
		<td align="left" valign="top" id="header">
		<table width="960" border="0" cellpadding="0" cellspacing="0"
			class="center">
			<tr>
				<td height="88" align="left" valign="top" class="headercontent">
				<a href="<?php echo site_url();?>"> <img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Logo" width="350" height="42"
					border="0" title="Template Design" class="logo"> </a>
				
				<fieldset class="search">
					<form id="search" action="javascript:void(0);" method="post"><label>Search:</label>
						<input name="textfield" type="text" class="textfield"
							value="Type your search here"> <input name="search" type="image"
							class="search" value="submit" src="<?php bloginfo( 'template_directory' ); ?>/images/search-button.gif"
							title="search">
					</form>
				</fieldset>
				
				<br class="spacer">
				
				<fieldset class="content">
					<p class="caption"><?php bloginfo('name');?></p>
					<p><?php bloginfo('description');?></p>
				</fieldset>
					<?php wp_nav_menu('show_home=1'); ?> 
				</td>
			</tr>
		</table>
		</td>
		<!-- Header Panel Ends Here -->
	</tr>
	<tr>
		<!-- Body Panel Starts Here -->
		<td align="left" valign="top" id="bodypan">
		<table width="922" border="0" cellpadding="0" cellspacing="0"
			class="center">
			<tr>
